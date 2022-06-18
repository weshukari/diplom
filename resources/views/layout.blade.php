<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @yield('scripts')
    <script src="{{asset('/js/button-up.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
    @yield('css')
    
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/icon/favicon.ico">
</head>
<body>
     <div  class="content">
            <header class="d-flex flex-wrap align-items-center justify-content-center  py-2 mb-4">

                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="/images/logo/logo.svg"  class="img-logo">
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li> <img src="/images/logo/logo.svg"  class="img-logo-mobile"></li>
                    <li class="d-block"><a href="/articles" class="nav-link px-2 link-gradient">СТАТЬИ</a></li>
                    <li  class="d-block"><a href="/librar" class="nav-link px-2 link-gradient">БИБЛИОТЕКА</a></li>
                    <li  class="d-block"><a href="/crib" class="nav-link px-2 link-gradient">ШПАРГАЛКИ</a></li>
                    <li class="d-block"><a href="/ege" class="nav-link px-2 link-gradient">ЕГЭ</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    {{--Для гостей--}}
                    @guest()
                        <a href="/login" class="btn btn-outline-gradient">Вход</a>
                        <a href="/register" class="btn btn-outline-gradient">Регистрация</a>
                    @endguest
                    {{--Для авторизированных пользователей--}}
                    @auth()
                        @if(Auth::user()->role == "администратор")
                            <a href="/admin/home" class="btn btn-outline-gradient">Админ-панель</a>
                        @else
                            <span style="color:#89023E">Привет, {{Auth::user()->login}}</span>
                            <a href="/profile" class="btn btn-outline-gradient">Профиль</a>
                        @endif
                        <a href="/logout" class="btn btn-outline-gradient">Выход</a>
                    @endauth
                </div>
            </header>

         
                <div class="wrapper-content">
                @yield('content')
                </div>
        
     </div>
<!--Подвал-->
        <footer class="d-flex flex-wrap justify-content-around align-items-center py-3 mt-3">
            <div class="contact">
                <p>Есть предложение? Напиши нам: <br><span>mochipy@gmail.com</span></p>
               
            </div>
      
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li class="d-block"><a href="/articles" class="nav-link px-2 link-footer">СТАТЬИ</a></li>
                    <li  class="d-block"><a href="/librar" class="nav-link px-2 link-footer">БИБЛИОТЕКА</a></li>
                    <li  class="d-block"><a href="/crib" class="nav-link px-2 link-footer">ШПАРГАЛКИ</a></li>
                    <li class="d-block"><a href="/ege" class="nav-link px-2 link-footer">ЕГЭ</a></li>
                </ul>
        </footer>
<!--Кнопка наверх-->
        <div class="scrollup">Наверх
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
</body>
</html>