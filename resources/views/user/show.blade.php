@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Користувач {{ $user->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Головна</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" bis_skin_checked="1">
                    <div class="card" bis_skin_checked="1">
                        <div class="card-header d-flex p-3" bis_skin_checked="1">
                            <div class="mr-4">
                                <a href=" {{ route('user.edit', $user->id) }}" class="btn btn-primary">Редагувати</a>
                            </div>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Видалити">
                            </form>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" bis_skin_checked="1">
                            <table class="table table-hover text-nowrap">

                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <td>Ім'я</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Прізвище</td>
                                    <td>{{ $user->surname }}</td>
                                </tr>
                                <tr>
                                    <td>По-батькові</td>
                                    <td>{{ $user->middle_name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Вік</td>
                                    <td>{{ $user->age }}</td>
                                </tr>
                                <tr>
                                    <td>Стать</td>
                                    <td>
                                        @if ($user->gender == 1)
                                            Чоловік
                                        @elseif ($user->gender == 2)
                                            Жінка
                                        @else
                                            Не вказано
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Адреса</td>
                                    <td>{{ $user->address }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection