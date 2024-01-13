@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
        <div class="register__heading">
            <h2 class= "register__h2">会員登録</h2>
        </div>
        <div class="register__form">
            <form class="form" action="/register" method="post">
            @csrf
                <!-- 名前 -->
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- メールアドレス -->
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- パスワード -->
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password" placeholder="パスワード" />
                        </div>
                        <div class="form__error">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- パスワード -->
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" name="password_confirmation" placeholder="確認用パスワード" />
                        </div>
                        <div class="form__error">
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">会員登録</button>
                </div>
            </form>
        </div>
        <div class="register__to-login">
            <p class="login-content">アカウントをお持ちの方はこちら</p>
            <a class="login-transition" href="/login">ログイン</a>
        </div>
    </div>
@endsection