@extends('layouts.master')
@section('title', 'Edit Book')
@section('content')
    <div class="ms-content-wrapper">
        <div class="row justify-content-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Books</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Edit Your Book</li>
                    </ol>
                  </nav>
                @include('flashmessages')
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h5>Edit New Book</h5>
                    </div>
                    <div class="ms-panel-body">
                        <form action="{{ route('admin.books.update',$book->id) }}" method="POST" enctype="multipart/form-data" id="editBookForm">
                            @csrf
                            @method('PUT')

                            <hr>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label for=""> Book Name</label>
                                    <input type="text" name="name" value="{{ $book->name }}" class="form-control">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label for="">Slug</label>
                                    <input type="text" class="form-control" name="slug" value="{{ $book->slug }}">
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label for="">Categories</label>
                                    <select name="category_id[]" class="form-control multiOptionstags" multiple="multiple">
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                @foreach ($book->categories as $book_cat)
                                                @selected($book_cat->id == $item->id) @endforeach>
                                                {{ $item->name }}</option>
                                            @if ($item->categories->count())
                                                @foreach ($item->categories as $level_one)
                                                    <option value="{{ $level_one->id }}"
                                                        @foreach ($book->categories as $book_cat)
                                                        @selected($book_cat->id == $level_one->id) @endforeach>
                                                        --{{ $level_one->name }}</option>
                                                    @if ($level_one->categories->count())
                                                        @foreach ($level_one->categories as $level_two)
                                                            <option value="{{ $level_two->id }}"
                                                                @foreach ($book->categories as $book_cat)
                                                                @selected($book_cat->id == $level_two->id) @endforeach>
                                                                ----{{ $level_two->name }}</option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label for="">Quantity</label>
                                    <input type="number" class="form-control" name="qty" value="{{ $book->qty }}">
                                    @error('qty')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <label for="">Thumbnail</label>
                                    <img src="{{ url('storage') }}/{{ $book->thumbnail }}" alt="" class="mb-3"
                                        style="width: 30%">
                                    <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                                    @error('thumbnail')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="dynamic-field" id="dynamic-field-1">
                                        @foreach ($book->metas as $item)
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Add Name</label>
                                                    <input type="text" name="meta_name[]" value="{{ $item->name }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Add Content</label>
                                                    <input type="text" name="meta_content[]" value="{{ $item->content }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- when user click on add new please on append of id aff show a new Take profit text field we can add multiple profit  -->
                                    <div class="text-right clearfix" id="aff">
                                        <div class="float-right">
                                            <div class="clearfix">
                                                <div class="float-left"> </div>
                                                <div class="float-right">
                                                    <a type="button" class="border-0 text-success mr-2" id="add-button"><i
                                                            class="fa fa-plus"></i></a>
                                                    <a type="button" class="border-0 text-danger" id="remove-button"><i
                                                            class="fa fa-minus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <label for="">Body</label>
                                    @include('admin.editor.edit')
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.books.js.edit')
@endsection
