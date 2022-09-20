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
                    <div class="col-1">
                        <a class="btn btn-block btn-secondary"
                            href="{{ route('admin.category.index') }}">{{ __('Назад') }}</a>

                    </div>
                    <div class="col-12 mt-3 d-flex align-items-center">
                        <div class="mr-3">{{ __('Категории') }} </div>

                        <div class="mr-2"><a class="fas fa-pen"
                                href="{{ route('admin.category.edit', $category->id) }}"></a></div>
                        <td>
                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                </button>

                            </form>
                        </td>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 mt-3">
                        <div class="card">

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Номер') }}</th>
                                            <td>{{ $category->id }}</td>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th>{{ __('Категория') }}</th>
                                            <td>{{ $category->title }}</td>

                                        </tr>
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
