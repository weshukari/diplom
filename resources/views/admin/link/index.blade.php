@extends('admin/home/admin_layout')

@section('title', 'Контент')

@section('content')
<div class="container-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 flex-column">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            Контактные ссылки
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
                            <th>ССЫЛКА</th>
                            <th>ИКОНКА</th>
                            <th colspan="2" class="text-center" >ДЕЙСТВИЯ</th>
                        </thead>
                        <tbody>
                            @foreach($links as $link)
                                <tr>
                                    <td>{{$link->name}}</td>
                                    <td><textarea class="form-control">{{$link->link}}</textarea></td>
                                    <td width="10%"><img src="/images/icon_link/{{$link->icon}}" class="w-50"></td>
                                    <td class="text-end">
                                        <a class="btn btn-primary btn-sm" href="{{route('link.edit', $link->id)}}">Редактировать</a>
                                    </td>
                                    <td >
                                        <form  class="delete-form" data-route="{{route('link.destroy', $link->id)}}" method="POST"    style="display: inline-block">
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
                  <h5 class="modal-title" id="exampleModalLabel">Добавить контактную ссылку</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('link.store')}}"  enctype="multipart/form-data">
                      @method('POST')
                      @csrf
                      <label for="link_name">Название</label>
                      <input type="text" name="link_name"
                             class="form-control"
                             id="link_name" 
                             placeholder="Введите название" required>
                     <label for="link">Ссылка</label>
                      <input type="text" name="link"
                             class="form-control"
                             id="link" 
                             placeholder="Введите ссылку" required>
                    <label for="icon">Добавить обложку </label>
                     <input  type="file"  
                            id="icon" 
                            name="icon" class="form-control"  
                            accept="image/*, .svg" required>
                     <!--блок вывода картинки-->
                     <div id="image-grid" class=" w-100">
                        <img src="" style="display:none" id="file-img" class="w-25 my-2">
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
<!--Скрипт вывод картинки-->
<script>
     const fileUploader = document.getElementById('icon');
            const reader = new FileReader();
            const imageGrid = document.getElementById('image-grid');

            fileUploader.addEventListener('change', (event) => {
                const files = event.target.files;
                const file = files[0];
                reader.readAsDataURL(file);
            
                reader.addEventListener('load', (event) => {
                    let img = document.getElementById('file-img');
                    img.style.display = 'block';
                    img.src = event.target.result;
                    img.alt = file.name;
                  
                });
              });
</script>
<!--Скрипт аякс на удаление ссылки-->
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