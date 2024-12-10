@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Додати користувача</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{ old('name') }}" name="name" class="form-control" placeholder="Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('password') }}" name="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder="Підтвердження паролю">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('surname') }}" name="surname" class="form-control" placeholder="Прізвище">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('middle_name') }}" name="middle_name" class="form-control" placeholder="По-батькові">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('age') }}" name="age" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('address') }}" name="address" class="form-control" placeholder="Адреса">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Стать</option>
                            <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Чоловіча</option>
                            <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Жіноча</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Додати">
                    </div>

                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
