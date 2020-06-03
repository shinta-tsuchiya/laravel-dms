<?php

namespace App\Http\Controllers;

use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $documents = [
            (object) [
                'id' => 1,
                'title' => 'タイトル1',
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー1'
                ],
                'updated_at' =>now(),
                ],
            ];

        return view('documents.index', [
                'documents' => $documents
        ]);
    }
}
