@extends('admin/home/admin_layout')

@section('title', 'Добавить книгу')

@section('content')
    <div class="container">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Добавить книгу</h1>
            </div>
            
            </div>
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                <h4><i class="icon fa fa-check">{{session('success')}}</i></h4>
            </div>
            @endif
        </div>
        </div>

        <section>
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
              <div class="card card-primary">

                <form action="{{route('book.store')}}" method='POST' enctype="multipart/form-data">
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
                                            required minlength="50"></textarea>
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
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>
<script>
     //вывод картинки 
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