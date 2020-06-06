@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '文書一覧') {{-- app.blade.php の @yirld('title') に対応 --}}

@include('navbar')

@section('content')

<div class="container">

  @foreach($documents as $document)

  @include('documents.card')

  @endforeach

</div>

@endsection