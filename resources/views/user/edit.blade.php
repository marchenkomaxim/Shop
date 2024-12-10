@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати користувача</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ $user->name ?? old('name') }}" name="name" class="form-control" placeholder="Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->surname ?? old('surname') }}" name="surname" class="form-control" placeholder="Прізвище">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->middle_name ?? old('middle_name') }}" name="middle_name" class="form-control" placeholder="По-батькові">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->age ?? old('age') }}" name="age" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->address ?? old('address') }}" name="address" class="form-control" placeholder="Адреса">
                    </div>

                    <div class="form-group">
                        <select name="gender" class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Стать</option>
                            <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">Чоловіча</option>
                            <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">Жіноча</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редагувати">
                    </div>
                </form>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
