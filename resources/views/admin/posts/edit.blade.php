@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Посты') }}</h1>
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
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">{{ __('Редактирование заголовка') }}</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ __($post->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror

                                <label for="content">{{ __('Редактирование контента') }}</label>
                                <input type="text" name="content" class="form-control"
                                    value="{{ __($post->content) }}">
                                @error('content')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-block btn-secondary col-4">Редактировать</button>

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
