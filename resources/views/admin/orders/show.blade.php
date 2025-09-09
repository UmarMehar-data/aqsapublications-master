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
                      <li class="breadcrumb-item active" aria-current="page">Order Show</li>
                    </ol>
                  </nav>

                  <div class="ms-panel">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            Order
                        </div>
                        <div class="ms-panel-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input type="text" class="form-control" value="{{ $orders->first_name }}"
                                                    name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" class="form-control" name="last_name"
                                                    value="{{ $orders->last_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Country</label>
                                                <input type="text" class="form-control" name="country"
                                                    value="{{ $orders->country }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">City</label>
                                                <input type="text" class="form-control" name="city"
                                                    value="{{ $orders->city }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">postCode</label>
                                                <input type="text" class="form-control" name="postcode"
                                                    value="{{ $orders->postcode }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Number</label>
                                                <input type="text" class="form-control" name="phone"
                                                    value="{{ $orders->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <textarea name="address_1" id="" cols="30" rows="5" class="form-control">{{ $orders->address_1 }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <textarea name="address_2" id="" cols="30" rows="5" class="form-control">{{ $orders->address_2 }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>QTY</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $total = 0;
                                            @endphp
                                            @foreach ($orders->orderItems as $item)
                                                <tr>
                                                    <td>{{ $item->book->name }}</td>
                                                    <td>{{ $item->qty }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    @php
                                                        $total += $item->price * $item->qty;
                                                    @endphp
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td>Total Price:</td>
                                                <td>
                                                    <h4>${{ $total }}</h4>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>

                                    <form action="#" method="POST" id="OrderProcess">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <label for="">Add Shipping Method</label>
                                            <input type="text" class="form-control" name="shiping_method">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Add Tracking Number</label>
                                            <input type="text" class="form-control" name="tracking_no">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Add Status</label>
                                            <select class="form-control" name="order_status" aria-label="Default select example">
                                                <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pending</option>
                                                <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Complete
                                                </option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-outline-primary btn-block mt-3">Update
                                                Order</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    @include('admin.orders.js.index')
@endsection
