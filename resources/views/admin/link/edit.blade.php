@extends('admin/home/admin_layout')

@section('title','Редактировать контактную ссылку')

@section('content')
 <div class="content-header">
      <div class="container-sm">
        <div class="row mb-2 justify-content-around">
          <div class="col-sm-10">
            <h1 class="m-0">Редактировать ссылку
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
                <form action="{{route('link.update', $link->id)}}" method='POST' enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                      <div class="form-group">
                        <label for="link">Название (измените)</label>
                        <input type="text" name="name_link" class="form-control"
                                id="name_link" value="{{$link['name']}}" required
                                 maxlength="30">
                      </div>
                      <div class="form-group">
                          <label for="link">Редактируете ссылку</label>
                          <textarea name="link" class="form-control" id="link"
                                    required>{{$link['link']}}</textarea>
                      </div>
                        <div class="form-group">
                                <label for="icon">Изменить иконку </label>
                                <input  type="file"  
                                        id="icon" 
                                        name="icon" class="form-control"  
                                        accept="image/*, .svg" >
                                <!--блок вывода картинки-->
                                <div id="image-grid" class=" w-50">
                                    <img src="/images/icon_link/{{$link['icon']}}"  id="file-img" class="w-25 my-2">
                                </div>
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
@endsection