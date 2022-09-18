@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-4">
                        <form action="{{ route('admin.post.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">{{ __('Добавление тега') }}</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="{{ __('Название тега') }}">
                                @error('title')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror

                                <label for="content">{{ __('Добавление тега') }}</label>
                                <input type="text" name="content" class="form-control"
                                    placeholder="{{ __('Название тега') }}">
                                @error('content')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-block btn-secondary col-3">Создать</button>

                        </form>
                    </div>


                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
