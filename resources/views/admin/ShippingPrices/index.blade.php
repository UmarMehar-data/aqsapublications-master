@extends("layouts.master")
@section('title','Shipping Price')

@section("content")

    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Categories</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Categories List</li>
                    </ol>
                  </nav>

                  <div class="ms-panel">
                    <div class="ms-panel-header d-flex justify-content-between">
                        <h4>Shipping Price List</h4>
                        {{-- <a href="{{route('admin.book-prices.create')}}" class="btn btn-primary btn-sm">Add Book Price</a> --}}
                        <button class="btn btn-primary btn-sm" id="openCreateModalBtn">Add Shipping Price</button>
                    </div>
                    <div class="ms-panel-body">
                        @include('flashmessages')
                        <table id="priceTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Sipping Price</th>
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

    @include('admin.ShippingPrices.modal')
    @include('admin.ShippingPrices.js.index')

@endsection



