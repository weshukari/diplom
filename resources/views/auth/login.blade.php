@extends('layout')

@section('title', 'Авторизация')
@section('content')

@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-8 alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="row mb-3">
            <label for="login" class="col-md-4 col-form-label text-md-end">
                Логин
            </label>
            <div class="col-md-6">
                <input id="login" type="text" class="form-control"
                name="login" value="{{old('login')}}" autocomplete="login" 
                autofocus pattern ="^[A-Za-z0-9\-]+"
                title="Разрешенные символы: латиница и тире">

            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">
                Пароль
            </label>
            <div class="col-md-6">
                <input id="password" type="password"
                class="form-control" name="password"
                autocomplete="current-password">
            </div>
        </div>

        <div class="row mb-3">
            <label for="remember" class="col-md-4 col-form-label text-md-end">Запомнить меня</label>
            <div class="col-md-6">
                <input  id="remember" type="checkbox"
                        name="remember">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" name="btnLogin">
                    Войти
                </button>
            </div>
        </div>
    </form>
@endsection