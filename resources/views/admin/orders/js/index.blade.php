@push('scripts')

    <script>
        $(document).ready(function() {

            @include('common.jshelper')



            $('#OrderProcess').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    shiping_method: {
                        required: true,
                    },
                    tracking_no: {
                        required: true
                    }
                },
                messages: {
                    shiping_method: {
                        required: 'The  field is required.'
                    },
                    tracking_no: {
                        required: 'The field is required.'
                    },
                },
                submitHandler: function(form) {

                    const route = "{{ route('admin.orders.update', ':id') }}";
                    const url = route.replace(':id', '{{ $orders->id }}');


                    const shiping_method = $('#OrderProcess input[name="shiping_method"]').val();
                    const tracking_no = $('#OrderProcess input[name="tracking_no"]').val();
                    const order_status = $('#OrderProcess select[name="order_status"]').val();

                    // return console.log({shiping_method,tracking_no,order_status});

                    $.ajax({
                        url: url,
                        method: "PUT",
                        data: $(form).serialize(),
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            btnDisableHandler('#OrderProcess .btn-primary', true,
                                'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#OrderProcess .btn-primary', false, 'Save');
                        },
                        success: function(res) {
                            return console.log(res);
                            if (res.success == true) {
                                $('#OrderProcess')[0].reset();
                                sweetAlertMessage('success', res.message);
                                setTimeout(() => {
                                    window.location =
                                        "{{ route('admin.orders.index') }}";
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
