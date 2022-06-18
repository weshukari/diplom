@extends('admin/home/admin_layout')

@section('title', 'Редактировать категорию')

@section('content')
    <div class="container">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Редактирование катерогии: {{$categoryLibrary['name']}}</h1>
            </div>
            
            </div>
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" datadismiss="alert" aria-hidden="true">
                </button>
                <h4><i class="icon fa fa-check">{{session('success')}}</i></h4>
            </div>
            @endif
        </div>
        </div>

        <section class="section-form">
                <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{route('categoryLibrary.update', $categoryLibrary->id)}}" method='POST'>
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCategory">Название</label>
                                <input type="text" name="name_category" value="{{$categoryLibrary->name}}" class="form-control"
                                        id="exampleInputCategory" placeholder="Введите название катерогии" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
@endsection