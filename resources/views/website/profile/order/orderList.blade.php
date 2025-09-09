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
            <div class="col-md-12">
                <table id="shoppingCart" class="table">
                    <thead>
                        <tr>
                            <th>Order Date</th>
                            <th>Order Number</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Tracking Number</th>
                            <th>Shiping Method</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td>
                                    <h5>
                                        {{ date('d-m-y', strtotime($order->created_at)) }}
                                    </h5>
                                </td>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>{{ $order->order_no }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h3>
                                        {{ $order->price }}
                                    </h3>
                                </td>

                                <td>
                                    @if ($order->status == 0)
                                        <button class="btn btn-white border-secondary bg-danger btn-md mb-2">
                                            <i class="fas fa-sync"></i> Pending
                                        </button>
                                    @elseif($order->status == 1)
                                        <button class="btn btn-white border-secondary bg-gray-100 btn-md mb-2">
                                            <i class="fas fa-receipt"></i> Received
                                        </button>
                                    @endif
                                </td>
                                <td>
                                    {{ $order->tracking_no }}
                                </td>
                                <td>
                                    {{ $order->shiping_method }}
                                </td>
                                <td class="actions" data-th="">
                                    <div class="">
                                        <a href="{{ route('profile.show',$order->id) }}"
                                            class="btn btn-white border-secondary btn-md mb-2">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>

        </div>
    </div>
</div>
@endsection
