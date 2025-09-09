@extends('layouts.website')
@section('title', 'All Books| Aqsa Publications')


@section('content')
<div class="page-header border-bottom mb-8">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center py-4">
            <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Orders List</h1>

        </div>
    </div>
</div>
<div class="site-content space-bottom-3" id="content">
    <div class="container">
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

                
            </div>

        </div>
    </div>
</div>
@endsection
