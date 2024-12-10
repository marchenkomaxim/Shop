@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
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
                                <a href=" {{ route('product.edit', $product->id) }}" class="btn btn-primary">Редагувати</a>
                            </div>
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
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
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <td>Назва</td>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <td>Ціна</td>
                                    <td>{{ $product->price }} $</td>
                                </tr>
                                <tr>
                                    <td>Кількість</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                <tr>
                                    <td>Опис</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>Контент</td>
                                    <td>{{ $product->content }}</td>
                                </tr>
                                <tr>
                                    <td>Категорія</td>
                                    <td>{{ $product->category->title ?? 'Без категории' }}</td>
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
