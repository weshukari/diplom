@extends('admin/home/admin_layout')

@section('title', 'Все пользователи')

@section('content')
    <div class="container">
        <h1>Все пользователи</h1>

        <section class="section-table">
            <table class="table table-striped">
                <thead>
                    <th>ЛОГИН</th>
                    <th>ЭЛ.ПОЧТА</th>
                    <th>АВАТАР</th>
                    <th>ДАТА СОЗДАНИЯ</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->login}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10%"><img src="/images/user-avatar/{{$user->avatar}}" class="w-100"></td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
    </div>
@endsection