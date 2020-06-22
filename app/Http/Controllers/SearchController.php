<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\DocumentRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // キーワードを取得
        $keyword = $request->input('keyword');

        // もしキーワードが入力されている場合
        if (!empty($keyword))
        {
            // 文書名から検索
            $documents = DB::table('documents')
                // where like あいまい検索 列名 LIKE 検索値
                ->where('title', 'like', '%'.$keyword.'%')
                ->paginate(4);
        } else {
            // キーワードが入力されていない場合
            $documents = DB::table('documents')->paginate(4);
        }
        return view('search', [
            'documents' => $documents,
            'keyword' => $keyword,
        ]);
    }
}
