{{-- Create Price Modal --}}


<div class="modal" id="updatePriceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Book Price</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data"
                    id="updatePriceForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Select Book</label>
                            <select name="book_id" class="form-control" id="">
                                <option value="">--Select Book--</option>
                                @foreach ($books as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" name="book_id"> --}}
                        </div>
                        <div class="col-sm-12">
                            <label for="">Purchase Price</label>
                            <input type="text" class="form-control" name="purchase_price">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Sale Price</label>
                            <input type="text" class="form-control" id="sale_price" name="sale_price">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Discount</label>
                            <input type="number" value="0" id="discount" class="form-control" name="discount" min="0">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Net Price</label>
                            <input type="text" class="form-control" id="net_price" name="net_price" >
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
