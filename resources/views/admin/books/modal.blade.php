<!-- The Modal for storing the data -->
<div class="modal" id="createBookModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Book</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data"
                    id="StoreBookForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for=""> Book Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug">
                            @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Categories</label>
                            <select name="category_id[]" class="form-control" multiple>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @if ($item->categories->count())
                                        @foreach ($item->categories as $level_one)
                                            <option value="{{ $level_one->id }}">--{{ $level_one->name }}</option>
                                            @if ($level_one->categories->count())
                                                @foreach ($level_one->categories as $level_two)
                                                    <option value="{{ $level_two->id }}">----{{ $level_two->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Price</label>
                            <input type="number" class="form-control" name="price">
                            @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Quantity</label>
                            <input type="number" class="form-control" name="qty">
                            @error('qty')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Discount</label>
                            <input type="number" class="form-control" name="discount">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
                            @error('thumbnail')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <label for="">Body</label>
                            @include('admin.editor.editor')

                        </div>
                        <div class="col-12 text-center mt-3 mb-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
