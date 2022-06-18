@extends('admin/home/admin_layout')

@section('title', 'Админ-панель')

@section('css')
    <link rel="stylesheet" href="{{asset('/css/admin_home.css')}}">
@endsection

@section('content')
    <div class="container d-flex flex-column flex-wrap align-content-center ">
        <div class="row w-75 ">
<!--Пользователь-->
            <div class="col-sm-4 my-2">
               <div class="d-info user d-flex flex-column p-2">
                   <h4 class="">Пользователи</h4>
                   <a class="link-more-info" href="{{route('admin.user')}}">ПОДРОБНЕЕ
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </a>
               </div>
            </div>
<!--Книги-->
            <div class="col-sm-4 my-2">
                <div class="d-info library  d-flex flex-column p-2">
                    <h4 class="">Книги</h4>
                    <a class="link-more-info" href="{{route('book.index')}}">ПОДРОБНЕЕ
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
<!--Категория книг-->
            <div class="col-sm-4 my-2">
                <div class="d-info library  d-flex flex-column p-2">
                    <h4 class="">Категория книг</h4>
                    <a class="link-more-info" href="{{route('categoryLibrary.index')}}">ПОДРОБНЕЕ
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
<!--Соц сети-->
            <div class="col-sm-4 my-2">
                <div class="d-info library  d-flex flex-column p-2">
                    <h4 class="">Соц сети</h4>
                    <a class="link-more-info" href="{{route('link.index')}}">ПОДРОБНЕЕ
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
<!--Кошельки-->
            <div class="col-sm-4 my-2">
                <div class="d-info content  d-flex flex-column p-2">
                    <h4 class="">Кошельки</h4>
                    <a class="link-more-info" href="{{route('wallet.index')}}">ПОДРОБНЕЕ
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection