<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home()
    {
        $users = User::select('*')
            ->where('id', '>', 3)
            // ->where('id', '<=',7)
            ->paginate(5);
        $users->birthday = date('Y-m-d', strtotime($users->birthday));
        return view('user.index', [
            'user_list' => $users
        ]);
    }
    public function index()
    {
        // dd($room, $roomChildren, $roomoneParent);
        // // dd($users, $room);
        // $users = User::all();
        // dd($users);
        // $users = User::paginate(5); // phân quyền hiển thị mỗi trang chỉ 5 sản phẩm
        $users = User::select('*')
            // ->with('room') //truy vấn thêm quan hệ trước khi trả về kết quả ra view
            // ->where('id', '<=',7)
            ->paginate(5);
        // dd($users);
        return view('admin.user.list', ['user_list' => $users]);
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.list')->with('thongbao', 'Sửa sản phẩm thành công');
    }

    public function create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request)
    { //khai báo UserUpdateRequest thay Request để lấy validate
        // $request->validate([
        //     'name' => 'required|min:6',
        //     'email' => 'email|max:32'
        // ]);
        //nếu ko đáp ứng các điều kiện trên thì 
        //thoát hàm và quay lại báo lỗi
        //nếu đáp ứng code thì tiếp tục xuống code dưới
        $users = new User();
        $users->fill($request->all());
        $users->password = bcrypt($request->password);
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username . '_' . $avatarName;

            $users->avatar = $avatar->storeAs('images/users', $avatarName);
            //storage
        } else {
            $users->avatar = '';
        }
        $users->save();
        return redirect()->route('users.list')->with('thongbao', 'Sửa sản phẩm thành công');
    }
    public function edit(User $id)
    {
        $id->birthday = date('Y-m-d', strtotime($id->birthday)); // chuyển sang dạng y-m-d
        return view('admin.user.edit', [
            // 'rooms'=> $room
            'user' => $id

        ]);
    }
    public function update(Request $request)
    {
        $users = User::find($request->id);
        if ($request->hasFile('avatar_up')) {
            $avatar = $request->avatar_up;
            $avatarName = $avatar->hashName();
            $avatarName = $request->username . '_' . $avatarName;
            $avatar_up = $avatar->storeAs('images/users', $avatarName);
        } else {
            $avatar_up = $request->avatar;
        }

        $users->update([
            'name' => $request->name,
            'email'  => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->usersname,
            'birthday' => $request->date,
            'phone' => $request->phone,
            'avatar' => $avatar_up,
            'role' => $request->role,
            'status' => $request->status,
            'room_id' => $request->room_id,
        ]);
        return redirect()->route('users.list')->with('thongbao', 'Sửa sản phẩm thành công');
    }
    public function status(User $users, $status)
    {
        // dd($users, $status);
        if ($users->status == 1) {
            $users->update(['status' => 0]);
            return redirect()->back();
        } else {
            $users->update(['status' => 1]);
            return redirect()->back();
        }
    }
}
