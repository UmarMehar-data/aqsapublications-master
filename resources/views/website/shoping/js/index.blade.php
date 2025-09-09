@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')

            // increment and Decrement
            $(document).ready(function() {
                const minus = $('.quantity__minus');
                const plus = $('.quantity__plus');
                const input = $('.quantity__input');
                minus.click(function(e) {
                    e.preventDefault();
                    var value = input.val();
                    if (value > 1) {
                        value--;
                    }
                    input.val(value);
                });

                plus.click(function(e) {
                    e.preventDefault();
                    var value = input.val();
                    value++;
                    input.val(value);
                })
            });


            $('body').delegate('#removeCartItem', 'click', function() {
                const cartBookID = $('input[type="hidden"]').val()

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to Delete This Item from Your Cart",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/delete-cart",
                            method: "GET",
                            data: {
                                _token: "{{ csrf_token() }}",
                                'cartBookID': cartBookID,
                            },
                            success: function(res) {
                                //  return console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    setTimeout(() => {
                                        window.location =
                                            "{{ url('cart-items') }}";
                                    }, 2000);

                                } else if (res.success == true) {
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



            $('body').delegate('#changeQty','click',function(){
                const id = $('input[type="hidden"]').val();
                const cartBookID = $('input[name="book_id"]').val();
                const bookQty = $('input[name="book_qty"]').val();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to Update the Item from Your Cart",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Update it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/update-cart",
                            method: "Post",
                            data: {
                                _token: "{{ csrf_token() }}",
                                'cartBookID': cartBookID,
                                'bookQty': bookQty,
                                'id': id,
                            },
                            success: function(res) {
                                //  return console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    setTimeout(() => {
                                        window.location =
                                            "{{ url('cart-items') }}";
                                    }, 2000);

                                } else if (res.success == true) {
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
        });
    </script>
@endpush
