@extends("layouts.master")
@section('title','Books List')

@section("content")

    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Books</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Books List</li>
                    </ol>
                  </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <div class="d-flex justify-content-between">
                            <h4>Books List</h4>
                            <a href="{{route('admin.books.create')}}" class="btn btn-primary btn-sm">Add New</a>
                        </div><br>

                        @include('flashmessages')
                        <div class="ms-panel-body">
                            <table id="bookTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>QTY</th>
                                        <th>Status</th>
                                        <th>Publish</th>
                                        <th>Recommended</th>
                                        <th>Opertions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('admin.books.js.index')

@endsection



