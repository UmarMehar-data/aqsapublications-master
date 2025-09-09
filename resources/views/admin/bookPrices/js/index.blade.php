@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')


            const BookTable = $('#priceTable').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                ajax: "{{ route('admin.book-prices.index') }}",
                columns: [{
                        "data": "Row_Index_ID"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "purchase_price"
                    },
                    {
                        "data": "sale_price"
                    },
                    {
                        "data": "discount"
                    },
                    {
                        "data": "net_price"
                    },

                    {
                        "data": "status_html"
                    },
                    {
                        "mRender": function(data, type, row) {
                            return `
                        <input type="hidden" name="name" value="${row.name}">
                        <input type="hidden" name="book_id" value="${row.book_id}">
                        <input type="hidden" name="purchase_price" value="${row.purchase_price}">
                        <input type="hidden" name="sale_price" value="${row.sale_price}">
                        <input type="hidden" name="discount" value="${row.discount}">
                        <input type="hidden" name="net_price" value="${row.net_price}">
                        <input type="hidden" name="status" value="${row.status}">
                        <button href="#"  class="btn btn-success btn-sm edit-book-price text-dark" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Edit</button>
                        `;
                        }
                    }
                ]
            });








            // Open Modal for Adding Book Price
            $('#openCreateModalBtn').click(function() {
                $('#createPriceModal').modal('show');
            })

            $(document).on("change keyup blur", "#discount", function() {
                var salePrice = $('#sale_price').val();
                var disc = $('#discount').val();
                if (disc != '' && salePrice != '') {
                   const discountPrice = parseInt(disc) * parseInt(salePrice) / 100;
                    $('#net_price').val(salePrice - discountPrice );
                } else {
                    $('#net_price').val(parseInt(salePrice));
                }
            });




            // updating the book price
            let id;
            $('body').delegate('.edit-book-price','click',function(){
                 id = $(this).attr('data-id');
                const book_id = $(this).parent().find('input[name="book_id"]').val();
                const purchase_price = $(this).parent().find('input[name="purchase_price"]').val();
                const sale_price = $(this).parent().find('input[name="sale_price"]').val();
                const discount = $(this).parent().find('input[name="discount"]').val();
                const net_price = $(this).parent().find('input[name="net_price"]').val();
                $('#updatePriceModal').modal('show');
                $('#updatePriceModal select[name="book_id"]').val(book_id);
                $('#updatePriceModal input[name="purchase_price"]').val(purchase_price);
                $('#updatePriceModal input[name="sale_price"]').val(sale_price);
                $('#updatePriceModal input[name="discount"]').val(discount);
                $('#updatePriceModal input[name="net_price"]').val(net_price);
            });

            $('#updatePriceForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    book_id: {
                        required: true,
                    },
                    purchase_price: {
                        required: true,
                    },
                    sale_price: {
                        required: true,
                    },
                },
                messages: {
                    book_id: {
                        required: 'Please Select Book.'
                    },
                    purchase_price: {
                        required: 'The Purchase Price field is required.'
                    },
                    purchase_price: {
                        required: 'The Purchase Price field is required.'
                    },

                },
                submitHandler: function(form) {
                    const route = "{{ route('admin.book-prices.update', ':id') }}";
                    const url = route.replace(':id', id);
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('.btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('.btn-primary', false, 'Save');
                        },
                        success: function(res) {
                            //  console.log(res);
                            if (res.success == true) {
                                $('#updatePriceModal').modal('hide');
                                sweetAlertMessage('success', res.message);
                                BookTable.ajax.reload();
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

        })
    </script>
@endpush
