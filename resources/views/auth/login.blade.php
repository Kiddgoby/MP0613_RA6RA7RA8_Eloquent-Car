@extends('layouts.base')

@section('title', 'Login')

@section('body')
<!-- main content -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- registration form -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('login.perform') }}" method="POST" class="sign__form">
                @csrf
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>

                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if (isset ($errors) && count($errors) > 0 && !$errors->has('email'))
                    <span class="text-danger text-center">{{ "Invalid password" }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Password">
                </div>


                <button class="sign__btn" type="submit"><span>Sign in</span></button>

                <span class="sign__text">Don't have an account yet? <a href="{{ route('register.show') }}">Sign up!</a></span>
            </form>
        </div>
    </div>
    <!-- end registration form -->
</main>
<!-- end main content -->
@endsection