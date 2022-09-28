@extends('admin.layouts.main')
@section('content')
    
    <div class="content-wrapper">
        
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Пользователи') }}</h1>
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
                        <form action="{{ route('admin.useradmin.update', $useradmin->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="name">{{ __('Редактирование пользователя') }}</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ __($useradmin->name) }}">
                                @error('title')
                                    <div class="text-danger">{{ __($message) }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Редактирование имейла') }}</label>
                                <input type="text" name="email" class="form-control"
                                value="{{ __($useradmin->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ __($message) }}</div>
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
