@extends('layout')

@section('title', 'Библиотека')

@section('content')
<div class="container">
    <div class="row justify-content-center m-2">
        <h1>Библиотека</h1>
        <div class="row">
   <form  class="sort-form" action="{{route('library.index')}}" method="get">
     @csrf
     @method('GET')
     <!--Фильтр-->
     <div class="form-group col-sm-4">
                <h5>Фильтр</h5>
                    <label for="id_category">Выбрать категорию: </label>
                        <select name="id_category" class="form-control" required id="id_category">
                            <option value="0"> Все категории</option>
                        @foreach ($categories as $categori)
                                <option value="{{$categori['id']}}"  >{{$categori['name']}}</option>
                        @endforeach 
                        </select>
            </div>
    <!--Сортировка-->
            <div class="form-group col-sm-4">
                <h5>Сортировка</h5>
                    <label for="sort">Сортировать по: </label>
                        <select name="sort" class="form-control" required id="sort">
                            <option value="desc">Сначала новые</option>
                            <option value="asc">Сначала старые</option>
                        </select>
            </div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary mt-3 ">OK</button>
             </div>
   </form>
        </div>
<!--Книги-->
@if($cat_id !=0)
    @foreach($category_name as $data)
        <h2 class="text-center">{{$data->name}}, {{$msg_sort}}</h2>
    @endforeach
@else
    <h2 class="text-center">{{$category_name}}, {{$msg_sort}}</h2>
@endif
            @foreach($books as $book)
                    <div class=" col-sm-2 m-2 card " style="width: 18rem;" id="all_book">
                        <img src="/images/library/{{$book->category->name}}/{{$book->cover}}" class="card-img-top w-100" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{$book->book}}</h5>
                            <div class="">
                                <p class="card-text"><b>Категория: </b>{{$book->category->name}}</p>
                                        <button type="button"  class="btn btn-primary buttonShow"
                                        data-book="{{$book->book}}"
                                        data-category="{{$book->category->name}}"
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
                    <a href="" class="btn btn-primary" id="download" download >Скачать</a>
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
            $('#download').attr('href', '/library/'+category_book+'/'+file_book);
        }
    )
  });
 
</script>
<script src="{{asset('/js/button_like.js')}}">
</script>
@endsection