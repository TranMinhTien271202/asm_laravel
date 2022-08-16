<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select('*')
            ->paginate(5);
        if ($search = request()->search) {
            $products = Product::select('*')
                ->where('name', 'like', '%' . $search . '%')
                ->paginate(5);
            return view('user.index', ['product_list' => $products]);
        } else {
            return view('user.index', ['product_list' => $products]);
        }
        return view('user.index', [
            'product_list' => $products
        ]);
    }

    public function Shop()
    {
        $category = Category::all();
        $products = Product::select('*')
            ->paginate(10);
        $product = Product::select('*')->paginate(3);
        return view('user.product.shop', ['product_list' => $products, 'product' => $product, 'category' => $category]);
    }
    public function ProductDetail(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        if (Auth::user()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            $user = Auth::user()->id;
            $comment = Comment::join('users', 'users.id', '=', 'comment.users_id')
                ->select('comment.*', 'users.email as email_user')
                ->where('product_id', $request->id)
                ->get();
            return view('user.product.shop-detail', [
                'product' => $product,
                'comment' => $comment,
                'user' => $user,
                'cart' => $cart,
            ]);
        } else {
            $comment = Comment::where('product_id', $request->id)->get();
            return view('user.product.shop-detail', [
                'product' => $product,
                'comment' => $comment,
            ]);
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if (empty($search)) {
            $product =  Product::Orderby('name', 'DESC')->select(
                'id',
                'name',
                'price',
                'quantily',
                'image',
                'cate_id'
            )
                ->paginate(20);
        } else {
            $product = Product::Orderby('name', 'DESC')->select(
                'id',
                'name',
                'price',
                'quantily',
                'image',
                'cate_id'
            )
                ->where('name', 'like', '%' . $search . '%')
                ->paginate(20);
        }
        return view('admin.product.list', [
            'product' => $product
        ]);
    }
    public function sort(Request $request)
    {
        $category = Category::select('id', 'name')->get();
        if ($request->select == 0) {
            return back();
        }
        if ($request->select == 1) {
            $product = Product::Orderby('created_at', 'DESC')->select('*')->paginate(10);
        } elseif ($request->select == 2) {
            $product = Product::Orderby('price', 'DESC')->select('*')->paginate(10);
        } elseif ($request->select == 3) {
            $product = Product::Orderby('price', 'ASC')->select('*')->paginate(10);
        }
        return view('user.product.shop', [
            'product' => $product,
            'category' => $category,
        ]);
    }


    // ///////////////////////////////////////

    public function product()
    {
        $product = Product::select('*')
            // ->with('room') //truy vấn thêm quan hệ trước khi trả về kết quả ra view
            // ->where('id', '<=',7)
            ->paginate(5);
        // dd($users);
        return view('admin.product.list', ['product' => $product]);
    }
    public function delete_pro($id)
    {
        Product::find($id)->delete();
        return  back();
    }


    public function create_pro()
    {   $category = Category::all();
        return view('admin.product.create', ['cate_list' => $category]);
    }
    public function store_pro(ProductRequest $request)
    {   
        $request->validate([
            'name' => 'required|min:6|max:32',
            'price' => 'required',
            'desc' => 'required|max:255',
            'detail' => 'required|max:255'
        ]);
        $product = new Product();
        $product->fill($request->all());
        if ($request->hasFile('image')) {
            $image = $request->image;
            $avatarName = $image->hashName();
            $avatarName = $request->username . '_' . $avatarName;
            $product->image = $image->storeAs('images/users', $avatarName);

            
            //storage
        } else {
            $product->image = '';
        }
        $product->save();
        return redirect()->route('users.product')->with('thongbao', 'Sửa sản phẩm thành công');
    }
    public function edit_pro(Product $id)
    {// chuyển sang dạng y-m-d
        return view('admin.product.edit', [
            // 'rooms'=> $room
            'product' => $id

        ]);
    }
    public function update_pro(Request $request)
    {
        $product = Product::find($request->id);
        if ($request->hasFile('avatar_up')) {
            $image = $request->avatar_up;
            $avatarName = $image->hashName();
            $avatarName = $request->username . '_' . $avatarName;
            $avatar_up = $image->storeAs('images/users', $avatarName);
        } else {
            $avatar_up = $request->image;
        }

        $product->update([
            'name' => $request->name,
            'image' => $avatar_up,
            'price' => $request->price,
            'status' => $request->status,
            'desc' => $request->desc,
            'detail' => $request->detail,
            'cate_id' => $request->cate_id,
        ]);
        return redirect()->route('users.product')->with('thongbao', 'Sửa sản phẩm thành công');
    }
}
