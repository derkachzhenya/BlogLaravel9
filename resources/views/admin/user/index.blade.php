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
                    <div class="col-1">
                        <a class="btn btn-block btn-secondary"
                            href="{{ route('admin.user.create') }}">{{ __('Создать') }}</a>

                    </div>
                    <div class="col-12 mt-3">
                        {{ __('Пользователи') }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 mt-3">
                        <div class="card">


                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Имя') }}</th>
                                            <th colspan="3">{{ __('Действия') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td><a class="far fa-eye"
                                                        href="{{ route('admin.user.show', $user->id) }}"></a></td>
                                                <td><a class="fas fa-pen"
                                                        href="{{ route('admin.user.edit', $user->id) }}"></a></td>
                                                <td>
                                                    <form action="{{ route('admin.user.destroy', $user->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="border-0 bg-transparent">
                                                            <i class="fas fa-trash text-danger" role="button"></i>
                                                        </button>

                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    </div>
@endsection
