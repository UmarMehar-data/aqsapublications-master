@extends("layouts.master")
@section('title','Books Price')

@section("content")

    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Book Prices</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Book Prices List</li>
                    </ol>
                  </nav>
                  <div class="ms-panel">
                    <div class="ms-panel-header">
                        <div class="d-flex justify-content-between">
                            <h4>Book Price List</h4>
                            {{-- <a href="{{route('admin.book-prices.create')}}" class="btn btn-primary btn-sm">Add Book Price</a> --}}
                            {{-- <button class="btn btn-primary btn-sm" id="openCreateModalBtn">Add Book Price</button> --}}
                        </div>
                    </div>
                    <div class="ms-panel-body">
                        @include('flashmessages')
                        <table id="priceTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Book Name</th>
                                    <th>Purchase Price</th>
                                    <th>Sale Price</th>
                                    <th>Discount</th>
                                    <th>Net Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
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

    @include('admin.bookPrices.modal')
    @include('admin.bookPrices.js.index')

@endsection



