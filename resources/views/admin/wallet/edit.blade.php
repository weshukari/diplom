@extends('admin/home/admin_layout')

@section('title','Редактировать кошелек')

@section('content')
 <div class="content-header">
      <div class="container-sm">
        <div class="row mb-2 justify-content-around">
          <div class="col-sm-10">
            <h1 class="m-0">Редактировать кошелек
            </h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-sm">
        <div class="row justify-content-center">
          <div class="col-sm-10">
              <div class="card card-primary">
                <form action="{{route('wallet.update', $wallet->id)}}" method='POST' enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                      <div class="form-group">
                        <label for="name_wallet">Название (измените)</label>
                        <input type="text" name="name_wallet" class="form-control"
                                id="name_wallet" value="{{$wallet['name_wallet']}}" required>
                      </div>
                      <div class="form-group">
                          <label for="link">Редактировать данные</label>
                          <textarea name="data_wallet" class="form-control"
                                    required>{{$wallet['data_wallet']}}</textarea>
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
@endsection