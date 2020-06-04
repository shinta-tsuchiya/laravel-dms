<?php

namespace App\Http\Controllers;

use App\Document;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        /**
         * Documentモデルの全データを最新の投稿日順に並び替えて
         * $documentに代入
         */
        $documents = Document::All()->sortByDesc('created_at');

        return view('documents.index', [
                'documents' => $documents
        ]);
    }
}
