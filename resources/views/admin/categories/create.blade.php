@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Категории') }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-4">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">{{ __('Добавление категории') }}</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="{{ __('Название категории') }}">
                                @error('title')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-block btn-secondary col-3">Создать</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
