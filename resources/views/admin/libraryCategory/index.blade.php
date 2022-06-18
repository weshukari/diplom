@extends('admin/home/admin_layout')

@section('title', 'Категории книг')
@section('content')
    <div class="container-sm " style="max-width: 700px;">
    <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2 flex-column" >
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                Категории книг
                            </h1>
                        </div>
            <!--Кнопка вызова модального окна-->
                        <div class="col-sm-5 my-2" >
                            <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Добавить категорию</button>
                        </div>
                </div>
                @if($errors->any())
    <div class="row ">
        <div class="col-sm alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
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
            

        <section class="table">
            <table class="table table-striped ">
                <thead>

                    <th>Название</th>
                    <th class="text-end" colspan="2">Действие</th>
                </thead>
                <tbody >
                    @foreach($categories as $category)
                        <tr id ="cat{{$category->id}}">
                           
                            <td>{{$category->name}}</td>
                            <td class="project-actions text-end">
                                <a class="row-remove btn btn-primary btn-sm" href="{{route('categoryLibrary.edit', $category->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form  method="POST" class="delete-form" data-route="{{route('categoryLibrary.destroy', $category->id)}}"  style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                            <i class="fas fa-trash"> </i>Удалить
                                        </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
<!--Модальное окно добавить категорию-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Добавить категорию</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('categoryLibrary.store')}}">
                      @method('POST')
                      @csrf
                      <label for="exampleInputCategory">Название</label>
                      <input type="text" name="name"
                             class="form-control"
                             id="exampleInputCategory" 
                             placeholder="Введите название категории" required>
                
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
                success: function (data){
                    if( typeof data.error != 'undefined')
                    alert(data.error);
                    
                    
                   
                }
            })
        })
    })

</script>
@endsection