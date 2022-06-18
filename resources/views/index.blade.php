@extends('layout')

@section('title', 'Главная')
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="{{asset('/js/parallax/jquery.parallax.min.js')}}"></script>
    <script src="{{asset('/js/parallax/jquery.event.frame.js')}}"></script>
    <script src="{{asset('/js/parallax/parallax.js')}}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('/css/parallax.css')}}">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
@endsection

@section('content')
<!--Баннер с дискордом-->
    <div class="container-fluid bg-white mb-5 div-banner py-3">
        <div class="row div-banner-parallax align-items-center w-100 mx-auto">
            <div class="col-sm-6">
                <div class="row w-50 mx-auto p-banner">
                        <h3>Присоединяйся к нам <br>в <span class="border-bottom border-2 border-danger">discord</span></h3>
                        <p>Общаться, учиться, готовиться к экзаменам ты сможешь на нашем сервере </p>
                        @foreach($links as $link)
                            @if($link->name == 'discord')
                                <a href="https://{{$link->link}}" class="btn btn-primary">Присоединиться</a>
                            @endif
                        @endforeach
                   
                </div>
            </div>
            <div class="col-sm-6 ">
                <section class="parallax">
                        <div class="parallax__layer"></div>
                        <div class="parallax__layer"></div>
                        <div class="parallax__layer"></div>
                </section>
            </div>
        </div>
    </div>
<!--Слайдер-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="caousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="mx-auto w-50 d-flex flex-column justify-content-center mb-2">
                <img src="/images/home/slider/team.svg" class=" w-50 mx-auto" alt="...">
                <h4 class="text-center">Набираем людей в команду!</h4>
                <p class="text-center">Ищем копирайтеров, модераторов, преподавателей<br>
                    Ты один из них? Напиши нам на почту:<br>
                <span class="border-bottom border-2 border-danger">mochipy@gmail.com</span></p><br>
            </div>
        
        </div>
        <div class="carousel-item">
            <div class="mx-auto w-50 d-flex flex-column justify-content-center mb-2">
                    <img src="/images/home/slider/money.svg" class=" w-50 mx-auto" alt="...">
                    <h4 class="text-center">Поддержите проект финансово</h4>
                    <p class="text-center">Каждая копейка добавляет мотивации развивать и продвигать проект</p>
                    <a href="#top" class="btn btn-primary w-25 mx-auto ">Поддержать</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
<!--Баннер с разделом егэ-->
    <div class="container-fluid bg-white mb-5 div-banner py-3">
        <div class="row div-banner-ege align-items-center w-80 mx-auto">
            <div class="col-sm-6">
                <div class="img-wrapper w-100 d-flex justify-content-center">
                    <img src="/images/home/ege.png" class=" ">
                </div>
            </div>
            <div class="col-sm-6">
               <div class="row w-50 mx-auto">
                    <h3>У нас новый раздел!</h3>
                    <p>Объяснение заданий ЕГЭ по информатике уже доступно</p>
                    <a href="/ege" class="btn btn-primary">Перейти</a>
               </div>
               <a name="top"></a>
            </div>
        </div>
    </div>

<!--Реквизиты донат-->
    <div class="container-sm mx-auto  mb-5">
        <div class="row justify-content-center">
                <h3 style="max-width:800px;">Реквизиты карт и кошельки</h3>
                <ol style="max-width:800px;" class="list2b">
                    @foreach($data_wallet as $data)
                        <li ><b>{{$data->name_wallet}}: </b>{{$data->data_wallet}}</li>
                    @endforeach
                </ol>
        </div>
    </div>

<!--Новинки книг-->
    <div class="container-fluid bg-white div-banner py-2">
        <div class="row  justify-content-around">
            <h3 class="text-center"  >Новинки книг</h3>
            @foreach($new_book as $book)
                <div class="card align-items-center " style="width: 18rem;">
                    <img src="/images/library/{{$book->name_category}}/{{$book->cover}}" class="card-img-top w-100" alt="...">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$book->book}}</h5>
                        <div class="">
                            <p class="card-text"><b>Категория: </b>{{$book->name_category}}</p>
                                    <button type="button"  class="btn btn-primary buttonShow"
                                    data-book="{{$book->book}}"
                                    data-category="{{$book->name_category}}"
                                    data-description="{{$book->description}}"
                                    data-cover="{{$book->cover}}"
                                    data-file="{{$book->file}}"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Подробнее
                                    </button>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
<!--Соц сети-->
    <div class="container-sm mx-auto my-5">
        <div class="row mx-auto" style="max-width: 500px">
            @foreach($links as $link)
                <div class="col">
                    <a href="http://{{$link->link}}"><img src="/images/icon_link/{{$link->icon}}" class="w-100"></a>
                </div>
            @endforeach
        </div>
    </div>
<!--Модальное окно просмотр книги-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Просмотр книги</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
            <div class="row" id="div-show">
                <div class="col-sm" id="img_book">
                </div>
                <div class="col-sm">
                    <!--Название-->
                    <h5 id="name_book"></h5>
                    <!--Категория-->
                    <p><b>Категория: </b> <span id="book_category"></span></p>
                    <p id="name_book"></p>
                </div>
                <div class="col-sm-12">
                    <p id="book_description"></p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            @auth()
                <a href="" class="btn btn-primary">Скачать</a>
            @endauth
        </div>
        </div>
    </div>
    </div>

<script>
  $(function(){
    $(".buttonShow").click(
        function(){
            let name_book = $(this).attr('data-book');
            let category_book = $(this).attr('data-category');
            let description_book = $(this).attr('data-description');
            let cover_book = $(this).attr('data-cover');
            let file_book = $(this).attr('data-file');

            $('#name_book').text(name_book);
            $('#img_book').html('<img  class="w-100" src="/images/library/'+category_book+'/'+cover_book+'">');
            $('#book_category').text(category_book);
            $('#book_description').text(description_book);
        }
    )
  });
</script>
@endsection
