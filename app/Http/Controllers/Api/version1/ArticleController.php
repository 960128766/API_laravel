<?php

namespace App\Http\Controllers\Api\version1;

use App\Http\Controllers\Controller;
use App\Http\Resources\articleCollection;
use App\Models\Article;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $art = Article::all();
        return new articleCollection($art);
    }

    public function show(Article $article)
    {
        return new \App\Http\Resources\article($article);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'body' => 'required|min:5'
        ], [
            'title.required' => 'مقدار این فیلد الزامی می باشد',
            'body.required' => 'مقدار این فیلد الزامی می باشد'
        ]);
        if ($validate->fails()) {
            return \response()->json([
                'message' => [
                    $validate->errors()
                ]
            ]);
        }
        return \response()->json([
            'message' => [
                'successfully'
            ]
        ]);
    }
}
