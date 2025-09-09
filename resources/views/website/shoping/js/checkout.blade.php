@push('scripts')
    <script>
        $('document').ready(function(){

            @include('common.jshelper')

            $('#checkoutForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    first_name: {
                        required: true,
                    },
                    last_name: {
                        required: true,
                    },
                    address_1: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    postcode: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                },
                messages: {
                    first_name: {
                        required: 'The name field is required.'
                    },
                    last_name: {
                        required: 'The field is required.'
                    },
                    address_1: {
                        required: 'The field is required.'
                    },
                    city: {
                        required: 'The field is required.'
                    },
                    postcode: {
                        required: 'The field is required.'
                    },
                    phone: {
                        required: 'The field is required.'
                    },
                    email: {
                        required: 'The field is required.'
                    },

                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: url('place-order'),
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('#checkoutForm .btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#checkoutForm .btn-primary', false, 'Place Order');
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.success == true) {
                                $('#checkoutForm')[0].reset();
                                sweetAlertMessage('success', res.message);
                                setTimeout(() => {
                                    window.location =
                                        "{{ url('all-books') }}";
                                }, 1000);
                            } else if (res.success == false) {
                                if (res.response.name) {
                                    sweetAlertMessage('error', res.response.name[0]);
                                }
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
@endpush
