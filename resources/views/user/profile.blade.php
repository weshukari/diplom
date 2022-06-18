@extends('layout')

@section('title', 'Профиль')
@section('css')
    <link rel="stylesheet" href="{{asset('/css/profile.css')}}">
@endsection

@section('content')
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
    <div class="container-sm px-4" >
        <div class="row justify-content-center" >
            <div class="col-sm-3 left-div d-flex justify-content-center p-3" >

               <div class="row ">

                   <div class="col">

                      <div class="wrap-img  d-flex justify-content-center  hover-effect-btn  border border-white border-2" style="min-width:120px">
                        <img src="/images/user-avatar/{{Auth::user()->avatar}}" class="  w-100 ">
                        <div class="overlay"></div>
                        <div class="button">
                           <a href="" class=" d-block link-light text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal1">Обновить
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 2.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
                                </svg>
                            </a>
                            @if(Auth::user()->avatar != $default_avatar)
                              <a href="" class="d-block link-light text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal2">Удалить
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                  </svg>
                            </a>
                            @endif
                          
                               
                        </div>
                      </div>

                   </div>

                   <div class="col-12 d-flex flex-column align-items-center left-div-info">
                       <h4 class="" >{{Auth::user()->login}}</h4>
                   </div>

               </div>

            </div>
            <div class="col-sm-3" >
                <div class="row">
                        <div class="col-sm-8 border-bottom ">
                            <h3 class="">Информация</h3>
                            
                        </div>
                        <div class="col-sm-5">
                            <h5>Эл.почта</h5>
                            <p>{{Auth::user()->email}}</p>
                        </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h4>Действия</h4>
                    </div>
                    <div class="button-action">
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3">Удалить аккаунт</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно Обновить фото-->
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Обновить аватарку</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{route('updateAvatar')}}" enctype="multipart/form-data">
                      @csrf
                      <label for="img">Выберите файл</label>
                      <input type="file" id="img_avatar" name="img_avatar" accept=".jpg,.png.,jpeg.," class="form-control" required >
                      <div id="image-grid" class="d-flex w-100">
                          <img src="" style="display:none" id="file-img" class="w-50 mx-auto mt-3">
                      </div>
                
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

 <!-- Модальное окно Удалить фото-->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Удалить</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      Вы уверены что хотите удалить фото?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <form method="get" action="{{route('deleteAvatar')}}">
                      <button type="submit" class="btn btn-danger">Удалить</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

<!-- Модальное окно Удалить профиль -->
           <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Удалить</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                      Вы уверены что хотите удалить аккаунт? Действие необратимо.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <form  action="{{route('deleteProfile')}}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger">Удалить</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <script>
            //вывод картинки 
            const fileUploader = document.getElementById('img_avatar');
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
