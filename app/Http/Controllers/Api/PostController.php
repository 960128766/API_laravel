<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user_id;
        $file = $request->file('image');
        if (!empty($file)) {
            $image = $file->getClientOriginalName();
            $file->move('images/post', $image);
            $post->image = $image;
        }
        $posts = $post->save();
        return $this->responseSuccess($posts, 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function responseSuccess($data, $code)
    {
        return response()->json([
            'success' => 'success',
            'message' => 'عملیات با موفقیت انجام شد',
            'data' => $data
        ], $code);
    }

    public function responseError($code)
    {
        return response()->json([
            'success' => 'error',
            'message' => 'عملیات برگشت دیتا با موفقیت انجام نشد',
            'data' => ''
        ], $code);
    }
}
