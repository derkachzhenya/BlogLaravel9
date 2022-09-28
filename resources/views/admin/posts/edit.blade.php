@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Посты') }}</h1>
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
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')


                            <div class="form-group ">
                                <label for="title">{{ __('Добавление тега') }}</label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="{{ __('Название тега') }}" value="{{ $post->title }}">
                                @error('title')
                                    <div class="text-danger">{{ __($message) }} </div>
                                @enderror

                                <div class="form-group mt-3">
                                    <textarea id="summernote" name="content"> {{ $post->content }}</textarea>
                                    @error('content')
                                        <div class="text-danger">{{ __($message) }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Вставить картинку') }}</label>
                                    <div class="w-50 mb-2">
                                        <img src="{{ url('storage/' . $post->preview_image) }}" alt="preview_image"
                                            class="w-50">
                                    </div>
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
                                        <div class="text-danger">{{ __($message) }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">{{ __('Выбрать главное изображение') }}</label>
                                    <div class="w-50 mb-2">
                                        <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                                    </div>
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
                                        <div class="text-danger">{{ __($message) }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>{{ __('Выберите категорию') }}</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                                    {{ $category->title }}</option>
                                            @endforeach

                                        </select>
                                        @error('category_id')
                                        <div class="text-danger">{{ __($message) }}</div>
                                    @enderror
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <label>{{ __('Теги') }}</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="{{ __('Выбрать теги') }}" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach

                                </select>
                                @error('tag_ids')
                                <div class="text-danger">{{ __($message) }}</div>
                            @enderror
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
