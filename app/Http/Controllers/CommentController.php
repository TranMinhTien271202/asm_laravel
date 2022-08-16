<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function post_cmt($id, Request $request)
    {
        $product_id = $id;
        $comment = new Comment();
        $comment->product_id = $product_id;
        $comment->users_id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->save();
        
        return redirect()->back();
    }
    public function delete_cmt(Request $request)
    {
        Comment::destroy($request->id);
        return back();
    }
    public function listcmt(){
        $comment = Comment::with('product')->paginate(2);
        return view('admin.comment.listcmt', ['comment'=>$comment]);
    }
}
