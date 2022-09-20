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
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">{{ __('Редактирование категории') }}</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ __($category->title) }}">
                                @error('title')
                                    <div class="text-danger">{{ __('Введите текст') }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-block btn-secondary col-4">Редактировать</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    
@endsection
