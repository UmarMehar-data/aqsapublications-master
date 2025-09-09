{{-- Create Price Modal --}}


<div class="modal" id="ShippingPriceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Shipping Price</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('admin.shipping-prices.store') }}" method="POST" enctype="multipart/form-data"
                    id="storePriceForm">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Shipping Price</label>
                            <input type="text" class="form-control" name="shipping_price">
                        </div>
                        <div class="col-12 text-center mt-3 mb-5">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>




<div class="modal" id="UpdateShippingPriceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Shipping Price</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('admin.shipping-prices.store') }}" method="POST" enctype="multipart/form-data"
                    id="updatePriceForm">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Shipping Price</label>
                            <input type="text" class="form-control" name="shipping_price">
                        </div>
                        <div class="col-12 text-center mt-3 mb-5">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

