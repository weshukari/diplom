@extends('admin/home/admin_layout')

@section('title','Редактировать книгу')

@section('content')
 <div class="content-header">
      <div class="container-sm">
        <div class="row mb-2 justify-content-around">
          <div class="col-sm-10">
            <h1 class="m-0">Редактировать книгу №
                {{$library['id']}}
            </h1>
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
    <section class="content">
      <div class="container-sm">
        <div class="row justify-content-center">
          <div class="col-sm-10">
              <div class="card card-primary">

                <form action="{{route('book.update', $library->id)}}" method='POST' enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputCategory">Название (измените)</label>
                        <input type="text" name="book" class="form-control"
                                id="book" value="{{$library['book']}}" required
                                minlength="10" maxlength="30">
                      </div>
                      <div class="form-group">
                          <label for="id_category">Выбрать категорию</label>
                          <select name="id_category" class="form-control" required id="id_category">
                              @foreach ($categories as $categori)
                                <option value="{{$categori['id']}}" @if($categori['id']
                                 == $library['id_category']) selected @endif >{{$categori['name']}}</option>
                              @endforeach 
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="text">Редактировать описание</label>
                          <textarea name="description" class="form-control" id="text"
                                    required minlength="20">{{$library['description']}}</textarea>
                      </div>
                      <div class="form-group">
                                <label for="cover">Изменить обложку </label>
                                <input  type="file"  
                                        id="cover" 
                                        name="cover" class="form-control"  
                                        accept="image/jpeg, image/png, image/jpg" >
                                <!--блок вывода картинки-->
                                <div id="image-grid" class=" w-100">
                                    <img src="/images/library/{{$library->category->name}}/{{$library->cover}}"  id="file-img" class="w-25 my-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file">Изменить файл </label>
                                <input type="file" name="file"
                                       class="form-control" 
                                       accept=".docx, .pdf, .doc" >

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
@endsection