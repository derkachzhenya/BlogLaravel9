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
                        <form action="{{ route('admin.user.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Добавление пользователя') }}</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="{{ __('Имя пользователя') }}">
                                @error('name')
                                    <div class="text-danger">{{ __($message) }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Добавление имейла') }}</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="{{ __('Имейл') }}">
                                @error('email')
                                    <div class="text-danger">{{ __($message) }}</div>
                                @enderror
                             
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Пароль') }}</label>
                                <input type="text" name="password" class="form-control"
                                    placeholder="{{ __('Пароль') }}">
                                @error('password')
                                    <div class="text-danger">{{ __($message) }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label>{{ __('Выберите роль') }}</label>
                                    <select name="role" class="form-control">
                                        @foreach ($roles as $id=>$role)
                                            <option value="{{ $id }}"
                                                {{ $id == old('role') ? 'selected' : '' }}>
                                                {{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="text-danger">{{ __($message) }}</div>
                                @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-secondary col-3">Создать</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
