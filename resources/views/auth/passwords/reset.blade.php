@extends('app')

@section('title', 'パスワード再設定')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
      <br>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">新しいパスワードを設定</h2>

            @include('error_card_list')

            <div class="card-text">
              <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="md-form">
                  <label for="password">新しいパスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="md-form">
                  <label for="password_confirmation">新しいパスワード(再入力)</label>
                  <input class="form-control" type="password_confirmation" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button class="btn btn-block btn-primary mt-2 md-2" type="submit">送信</button>

                <br>
                <div class="mt-0">
                  <a href="{{ route('home') }}" class="card-text">ホームへ</a>
                </div>
    
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection