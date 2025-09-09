@extends("layouts.master")
@section('title','Orders List')

@section("content")

    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Orders</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Orders List</li>
                    </ol>
                  </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <div class="d-flex justify-content-between">
                            <h4>Orders List</h4>
                            {{-- <a href="{{route('admin.books.create')}}" class="btn btn-primary btn-sm">Add New</a> --}}
                        </div><br>

                        @include('flashmessages')
                        <div class="ms-panel-body">
                            <table id="bookTable" class="table table-striped dt-responsive table-bordered border-collapse" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item )
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                            <td>{{ $item->phone }} </td>
                                            <td>{{ $item->email }} </td>
                                            <td>
                                                @if($item->status == 0)
                                                <button class="btn btn-danger">Pending</button>
                                                @else
                                                <button class="btn btn-success"></button>
                                            @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.orders.show',$item->id) }}" class="ms-btn-icon-outline btn-square btn-info"><i class="flaticon-information"></i></a>
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




@endsection



