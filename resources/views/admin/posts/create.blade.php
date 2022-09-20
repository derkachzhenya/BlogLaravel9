@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
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
                    <div class="col-5">
                        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label for="title">{{ __('Добавление тега') }}</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="{{ __('Название тега') }}" value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">{{ __('Введите текст') }} </div>
                                @enderror
                                <div class="form-group mt-3">
                                    <textarea id="summernote" name="content"> {{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="text-danger">{{ __('Введите текст') }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Вставить картинку') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="preview_image">
                                            <label class="custom-file-label">{{ __('Выбрать картинку') }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">{{ __('Загрузить') }}</span>
                                        </div>
                                    </div>
                                    @error('preview_image')
                                        <div class="text-danger">{{ __('Введите текст') }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Выбрать главное изображение') }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image">
                                            <label class="custom-file-label">{{ __('Выбрать картинку') }}</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">{{ __('Загрузить') }}</span>
                                        </div>
                                    </div>
                                    @error('main_image')
                                        <div class="text-danger">{{ __('Введите текст') }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('Выберите категорию') }}</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                    {{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Теги') }}</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="{{ __('Выбрать теги') }}" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option
                                            {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-block btn-secondary col-3">{{ __('Создать') }}</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection
