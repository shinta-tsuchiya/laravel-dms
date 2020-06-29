<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\DocumentRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // キーワードの受け取り
        $keyword = $request->input('keyword');

        // もしキーワードがあったら
        if(!empty($keyword))
        {
            $searchs = DB::table('documents')
            ->where('title', 'like', '%'.$keyword.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        } else {
            $searchs = DB::table('documents')->orderBy('created_at', 'desc')->paginate(5);
        }

        return view('search', [
            'searchs' => $searchs,
            'keyword' => $keyword,
            ]);
    }
}
