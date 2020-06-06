@extends('app')

@section('title', '文書詳細')

@include('navbar')

@section('content')

<div class="container">

  @include('documents.card')

</div>

@endsection