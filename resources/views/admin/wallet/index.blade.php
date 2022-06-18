@extends('admin/home/admin_layout')

@section('title', 'Кошельки')

@section('content')
<div class="container-sm " style="max-width: 700px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 flex-column">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            Кошельки
                        </h1>
                    </div>
    <!--Кнопка вызова модального окна-->
                     <div class="col-sm-5 my-2" >
                            <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Добавить</button>
                    </div>
                </div>
                @if(Session::get('success', false))
              <?php $data = Session::get('success'); ?>
              @if (is_array($data))
                  @foreach ($data as $msg)
                      <div id="div-msg" class="alert alert-success" role="alert">
                          {{ $msg }}
                      </div>
                  @endforeach
              @else
                  <div id="div-msg" class="alert alert-success" role="alert">
                      {{ $data }}
                  </div>
              @endif
            @endif
            </div>
        </div>
                <section class="section-table">
                    <table class="table table-striped">
                        <thead>
                            <th>НАЗВАНИЕ</th>
                            <th>ДАННЫЕ</th>
                            <th colspan="2" class="text-center" >ДЕЙСТВИЯ</th>
                        </thead>
                        <tbody>
                            @foreach($wallets as $wallet)
                                <tr>
                                    <td>{{$wallet->name_wallet}}</td>
                                    <td>{{$wallet->data_wallet}}</td>
                                    <td class="text-end">
                                        <a class="btn btn-primary btn-sm" href="{{route('wallet.edit', $wallet->id)}}">Редактировать</a>
                                    </td>
                                    <td >
                                        <form  class="delete-form" data-route="{{route('wallet.destroy', $wallet->id)}}" method="POST"  style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section> 
                </div>
            </div>
        </div>
    </div>
<!--Модальное окно добавить ссылку-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Добавить кошелек</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('wallet.store')}}"  enctype="multipart/form-data">
                      @method('POST')
                      @csrf
                      <label for="wallet_name">Кошелек</label>
                      <input type="text" name="wallet_name"
                             class="form-control"
                             id="wallet_name" 
                             placeholder="Введите название" required>
                     <label for="link">Данные</label>
                      <input type="text" name="data_wallet"
                             class="form-control"
                             id="data_wallet" 
                             placeholder="Введите данные" required>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

<!--Скрипт аякс на удаление кошелька-->
<script>
 $(document).ready(function(){
        $('.delete-form').on('submit', function(e){
            $(this).closest('tr').remove();
            $("#div-msg").hide();
            e.preventDefault();

            $.ajax({
                type:'post',
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: $(this).data('route'),
                data:{
                    '_method': 'delete'
                },
                success: function (response, textStatus, xhr){
                    console.log('success');
                   
                }
            })
        })
    })
</script>
@endsection