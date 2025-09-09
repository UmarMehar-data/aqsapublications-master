@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')

            $('body').delegate('#addToCart', 'click', function() {
                const bookID = $('input[type="hidden"]').val()
                const bookQTY = $('input[name="quantity"]').val();
                const bookPrice = $('#bookPrice').val();


                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to add this on your Cart",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Add it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/add-to-cart",
                            method: "POST",
                            data: {
                                _token: "{{ csrf_token() }}",
                                'bookID': bookID,
                                'bookQTY': bookQTY,
                                'bookPrice': bookPrice
                            },
                            success: function(res) {
                                 console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    setTimeout(() => {
                                    window.location =
                                        "{{ url('all-books') }}";
                                    }, 2000);
                                }
                                else if (res.success == true) {
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
