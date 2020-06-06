<?php

namespace App\Http\Controllers;

use App\Document;
use Carbon\Traits\Timestamp;
use App\Http\Requests\DocumentRequest;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Document::class, 'document');
    }
    
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

    public function create()
    {
        return view('documents.create');
    }

    public function store(DocumentRequest $request, Document $document)
    {
        $document->fill($request->all());
        $document->user_id = $request->user()->id;
        $document->save();
        return redirect()->route('documents.index');
    }

    public function edit(Document $document)
    {
        return view('documents.edit', ['document' => $document]);
    }

    public function update(DocumentRequest $request, Document $document)
    {
        $document->fill($request->all())->save();
        return redirect()->route('documents.index');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('documents.index');
    }

    public function show(Document $document)
    {
        return view('documents.show', ['document' => $document]);
    }
}
