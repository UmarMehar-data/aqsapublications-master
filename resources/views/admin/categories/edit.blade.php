@extends("layouts.master")
@section('title','Edit Category')
@section("breadcrumb")
    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="#">Edit Category</a></li>
@endsection
@section("content")

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                @include('flashmessages')
                <form action="{{ route('admin.categories.update',$data->id) }}" method="POST" enctype="multipart/form-data" id="StoreCategoryForm">
                    @csrf
                    <div class="">
                        <h5>Edit Category</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" value="{{ $data->name }}" class="form-control" name="name">
                                <label id="name_error"  class="custom-error" for="name"></label>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" value="{{ $data->slug }}" class="form-control" name="slug" readonly>
                                <label id="slug_error"  class="custom-error" for="name"></label>
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Select Level</label>
                                <select class="form-select form-control" id="level" name="level" aria-label="Default select example">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                <label id="level_error" class="custom-error" for="name"></label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Select Parent ID</label>
                                <select class="form-select form-control" id="parent_id" name="parent_id">
                                    {{-- <option value="0">Select Parent ID</option> --}}
                                    {{-- @foreach ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach --}}
                                  </select>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    @include('')
@endsection

