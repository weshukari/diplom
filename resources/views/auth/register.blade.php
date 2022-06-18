@extends('layout')

@section('title', 'Регистрация')
@section('content')

<div class="row justify-content-center">
        @if ($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-8 alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="row mb-3">
                    <label for="login" class="col-md-4 col-form-label text-md-end">Логин</label>
                    <div class="col-md-6">
                        <input id="login" type="text"
                               class="form-control" name="login"
                               value="{{old('login')}}"
                               required  autocomplete="login" autofocus
                               pattern="^[A-Za-zА-Яа-яЁё0-9\-]+$"
                               title="Разрешенные символы: латиница, кирилицца, цифры и тире">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">Почта</label>
                    <div class="col-md-6">
                        <input  id="email" class="form-control"
                                type="email" 
                                name="email" value="{{old('email')}}"
                                required autocomplete="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>
                    <div class="col-md-6">
                        <input  id="password" type="password"
                                class="form-control" name="password"
                                minlength="6"
                                required autocomplete="new-password">
                    </div>
                </div>
                <div class="row md-3">
                    <label for="password-confirm"  class="col-md-4 col-form-label text-md-end">Повторите пароль</label>
                    <div class="col-md-6">
                        <input  id="password-confirm" type="password"
                                class="form-control"
                                name="password_confirmation"
                                required autocomplete="new-password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="rules" class="col-md-4 col-form-label text-md-end">Я согласен с правилами регистрации</label>
                    <div class="col-md-6">
                        <input  id="rules" type="checkbox"
                                name="rules"
                                required autocomplete="rules">
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection