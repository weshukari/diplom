@extends('admin/home/admin_layout')

@section('title', 'Просмотр книг')

@section('content')
    <div class="container-sm">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 flex-column">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            Все книги
                        </h1>
                    </div>
            <!--Кнопка вызова модального окна-->
                     <div class="col-sm-5 my-2" >
                            <button  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Добавить книгу</button>
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
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th >Название</th>
                        <th >Категория</th>
                        <th >Описание</th>
                        <th>Обложка</th>
                        <th>Файл</th>
                        <th colspan="2" class="text-center">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($library as $book)
                        <tr id="book{{$book->id}}">
                            <td width="15%">{{$book->book}}</td>
                            <td width="5%">{{$book->category->name}}</td>
                            <td ><textarea class="form-control">{{$book->description}}</textarea></td>
                            <td style="width: 15%"><img src="/images/library/{{$book->category->name}}/{{$book->cover}}" class="w-50"></td>
                            <td ><textarea class="form-control">{{$book->file}}</textarea></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('book.edit', $book->id)}}">Редактировать</a>
                            </td>
                            <td>
                                <form  class="delete-form" data-route="{{route('book.destroy', $book->id)}}" method="POST"    style="display: inline-block">
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
<!--Модальное окно добавить книгу-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Добавить книгу</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('book.store')}}"  enctype="multipart/form-data">
                      @method('POST')
                      @csrf
                      <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputCategory">Название</label>
                                <input  type="text" 
                                        name="book" 
                                        class="form-control"
                                        placeholder="Введите название книги" required>
                            </div>
                            <div class="form-group">
                                <label for="id_category">Выберите категорию</label>
                                <select name="id_category" class="form-control" required id="id_category">
                                    @foreach ($categories as $category)
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Введите описание</label>
                                <textarea   name="description" 
                                            class="form-control" 
                                            id="description"
                                            required minlength="20"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="cover">Добавить обложку </label>
                                <input  type="file"  
                                        id="cover" 
                                        name="cover" class="form-control"  
                                        accept="image/jpeg, image/png, image/jpg" required>
                                <!--блок вывода картинки-->
                                <div id="image-grid" class=" w-100">
                                    <img src="" style="display:none" id="file-img" class="w-25 my-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file">Добавить файл </label>
                                <input type="file" name="file"
                                       class="form-control" 
                                       accept=".docx, .pdf, .doc" required>
                            </div>
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

<!--Модальное окно Редактировать книгу-->
<!--Скрипт вывод картинки-->
<script>
     const fileUploader = document.getElementById('cover');
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
<!--Скрипт аякс на удаление книги-->
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