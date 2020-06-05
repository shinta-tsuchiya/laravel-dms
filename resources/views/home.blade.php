@extends('app') {{-- app.blade.php をベースに使うことを宣言 --}}

@section('title', '文書一覧') {{-- app.blade.php の @yirld('title') に対応 --}}

@section('content')
@include('navbar')

<br>
<div>
  文書管理をWeb上で行えるサービスです
</div>

@endsection