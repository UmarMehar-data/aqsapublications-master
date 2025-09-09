@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')

            // Add or Remove Meta Tags
            var buttonAdd = $("#add-button");
            var buttonRemove = $("#remove-button");
            var className = ".dynamic-field";
            var count = 0;
            var field = "";
            var maxFields = 5;

            function totalFields() {
                return $(className).length;
            }

            function addNewField() {
                const html = `<div class="row">
                                    <div class="col-sm-6">
                                        <label>Add Name</label>
                                        <input type="text" name="meta_name[]" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Add Content</label>
                                        <input type="text" name="meta_content[]" value="" class="form-control">
                                    </div>
                                </div>`;
                $('#dynamic-field-1').append(html)
            }

            function removeLastField() {
                if (totalFields() > 1) {
                    const html = `<div class="row">
                                    <div class="col-sm-6">
                                        <label>Add Name</label>
                                        <input type="text" name="meta_name[]" value="" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Add Content</label>
                                        <input type="text" name="meta_content[]" value="" class="form-control">
                                    </div>
                                </div>`;
                $('#dynamic-field-1').remove(html);
                }
            }

            buttonAdd.click(function() {
                addNewField();
            });
            buttonRemove.click(function() {
                removeLastField();
            });


            /** Multi Select Option **/
            $(".multiOptionstags").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })

            /**Generate Slug*/
            $('input[name="name"]').keyup(function() {
                const title = $(this).val();
                const slug = title.toLowerCase().replace(/ /g, '-').replace(/[-]+/g, '-').replace(
                    /[^\w-]+/g, '');
                $('input[name="slug"]').val(slug);
            });

            $('#editBookForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    name: {
                        required: true,
                    },
                    slug: {
                        required: true,
                    },
                    "category_id[]": {
                        required: true,
                    },
                    price: {
                        required: true,
                    },
                    qty: {
                        required: true,
                    },
                    body: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: 'The name field is required.'
                    },
                    slug: {
                        required: 'The slug field is required.'
                    },
                    "category_id[]": {
                        required: 'Please select book categories'
                    },
                    price: {
                        required: 'The price field is required.'
                    },
                    qty: {
                        required: 'The Quantity field is required.'
                    },
                    body: {
                        required: 'The Book Content Field field is required.'
                    },
                },
                submitHandler: function(form) {

                    const route = "{{ route('admin.books.update', ':id') }}";
                    const url = route.replace(':id', '{{ $book->id }}');

                    const thumbnail = document.getElementById('thumbnail').files[0];
                    const name = $('#editBookForm input[name="name"]').val();
                    const slug = $('#editBookForm input[name="slug"]').val();
                    const price = $('#editBookForm input[name="price"]').val();
                    const net_price = $('#editBookForm input[name="net_price"]').val();
                    const qty = $('#editBookForm input[name="qty"]').val();
                    const discount = $('#editBookForm input[name="discount"]').val();
                    const body = $('#editBookForm textarea[name="body"]').val();
                    const category_id = $('#editBookForm select[name="category_id[]"]').val();
                    const meta_name = $('#editBookForm input[name="meta_name[]"]').map(function(){return $(this).val();}).get();
                    const meta_content = $('#editBookForm input[name="meta_content[]"]').map(function(){return $(this).val();}).get();

                    // return console.log({thumbnail,name,slug,price,qty,discount,body,category_id,meta_name,meta_content});

                    const formData = new FormData();
                    formData.append('thumbnail', thumbnail);
                    formData.append('name', name);
                    formData.append('slug', slug);
                    formData.append('price', price);
                    formData.append('net_price', net_price);
                    formData.append('qty', qty);
                    formData.append('discount', discount);
                    formData.append('body', body);
                    formData.append('category_id', category_id);
                    formData.append('meta_name', meta_name);
                    formData.append('meta_content', meta_content);
                    formData.append('_token', _token);
                    formData.append('_method', 'PUT');

                    $.ajax({
                        url: url,
                        method: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            btnDisableHandler('#editBookForm .btn-primary', true,
                                'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#editBookForm .btn-primary', false, 'Save');
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.success == true) {
                                $('#editBookForm')[0].reset();
                                sweetAlertMessage('success', res.message);
                                setTimeout(() => {
                                    window.location =
                                        "{{ route('admin.books.index') }}";
                                }, 1000);
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
        });
    </script>
@endpush
