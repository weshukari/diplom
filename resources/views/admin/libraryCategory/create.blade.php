@extends('admin/home/admin_layout')

@section('title', 'Добавить категорию')

@section('content')
 <div class="content-header">
      <div class="container-sm w-75 ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить категорию</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
        @if(session('success'))
          <div class="alert alert-success" role="alert">
              <button type="button" class="close" datadismiss="alert" aria-hidden="true">
              </button>
              <h4><i class="icon fa fa-check">{{session('success')}}</i></h4>
          </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-sm w-75">
        <div class="row">
          <div class="col-sm-12">
              <div class="card card-primary">
                <form action="{{route('categoryLibrary.store')}}" method='POST'>
                  @method('POST')
                  @csrf
                  <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputCategory">Название</label>
                        <input type="text" name="name_category" class="form-control"
                                id="exampleInputCategory" placeholder="Введите название катерогии" required>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
@endsection