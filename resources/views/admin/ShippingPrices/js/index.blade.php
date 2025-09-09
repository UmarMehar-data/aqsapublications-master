@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')


            const ShippingPriceTable = $('#priceTable').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                ajax: "{{ route('admin.shipping-prices.index') }}",
                columns: [{
                        "data": "Row_Index_ID"
                    },
                    {
                        "data": "name"
                    },

                    {
                        "data": "status_html"
                    },
                    {
                        "mRender": function(data, type, row) {
                            return `
                        <input type="hidden" name="name" value="${row.name}">
                        <input type="hidden" name="status" value="${row.status}">
                        <button href="#"  class="btn btn-success btn-sm edit-shipping-price text-dark" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Edit</button>
                        <button href="#"  class="btn btn-danger btn-sm delete-book-price text-dark" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Delete</button>
                        `;
                        }
                    }
                ]
            });








            // Open Modal for Adding Book Price
            $('#openCreateModalBtn').click(function() {
                $('#ShippingPriceModal').modal('show');
            });



            // Store Shipping Price
            $('#storePriceForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    shipping_price: {
                        required: true,
                    },
                },
                messages: {
                    shipping_price: {
                        required: 'The name field is required.'
                    },
                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.shipping-prices.store') }}",
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('#storePriceForm .btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#storePriceForm .btn-primary', false, 'Login');
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.success == true) {
                                $('#storePriceForm')[0].reset();
                                $('#ShippingPriceModal').modal('hide');
                                sweetAlertMessage('success', res.message);
                                ShippingPriceTable.ajax.reload();
                            } else if (res.success == false) {
                                if (res.response.name) {
                                    sweetAlertMessage('error', res.response.name[0]);
                                }
                                if (res.response.slug) {
                                    sweetAlertMessage('error', res.response.slug[0]);
                                }
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });






            // updating the book price
            let id;
            $('body').delegate('.edit-shipping-price','click',function(){
                 id = $(this).attr('data-id');
                const shippingPrice = $(this).parent().find('input[name="name"]').val();
                $('#UpdateShippingPriceModal').modal('show');
                $('#UpdateShippingPriceModal input[name="shipping_price"]').val(shippingPrice);
            });

            $('#updatePriceForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    shipping_price: {
                        required: true,
                    },
                },
                messages: {
                    shipping_price: {
                        required: 'Please Select Book.'
                    },

                },
                submitHandler: function(form) {
                    const route = "{{ route('admin.shipping-prices.update', ':id') }}";
                    const url = route.replace(':id', id);
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('#updatePriceForm .btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#updatePriceForm .btn-primary', false, 'Save');
                        },
                        success: function(res) {
                            //  console.log(res);
                            if (res.success == true) {
                                $('#UpdateShippingPriceModal').modal('hide');
                                sweetAlertMessage('success', res.message);
                                ShippingPriceTable.ajax.reload();
                            } else if (res.success == false) {
                                if (res.response.book_id) {
                                    sweetAlertMessage('error', res.response.book_id[0]);
                                }

                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });


            /*Delete Subcription Product*/
            $('body').delegate('.delete-book-price', 'click', function() {
                const id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.shipping-prices.destroy', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "DELETE"
                            },
                            success: function(res) {
                                if (res.success == true) {
                                    ShippingPriceTable.ajax.reload();
                                    sweetAlertMessage('success', res.message);
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })



            });

        })
    </script>
@endpush
