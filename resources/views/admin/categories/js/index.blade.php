@push('scripts')
    <script>
        $(document).ready(function() {
            @include('common.jshelper')
            /*Loading Data Tables Here*/
            const CategoryDataTable = $('#categoryTble').DataTable({
                responsive: false,
                paging: false,
                searching: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                ajax: "{{ route('admin.categories.index') }}",
                columns: [{
                        "data": "Row_Index_ID"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "parent"
                    },
                    {
                        "mRender": function(data, type, row) {
                            return `
                        <input type="hidden" name="name" value="${row.name}">
                        <input type="hidden" name="slug" value="${row.slug}">
                        <input type="hidden" name="parent_id" value="${row.parent_id}">
                        <button class="btn btn-success btn-sm edit-category-record" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Edit</button>
                        <button class="btn btn-outline-danger btn-sm delete-category-record" data-id="${row.id}"><i class="fa fa-trash mg-r-10" ></i> Delete</button>
                        `;
                        }
                    }
                ]
            });


            /**Generate Slug*/
            $('input[name="name"]').keyup(function() {
                const title = $(this).val();
                const slug = title.toLowerCase().replace(/ /g, '-').replace(/[-]+/g, '-').replace(
                    /[^\w-]+/g, '');
                $('input[name="slug"]').val(slug);
            });


            /*OpenModal*/
            $('#openCreateModalBtn').click(function() {
                $('#createCategoryModal').modal('show');
            });


            /*Fetech Parent Categories*/
            fetchParentCategories();

            function fetchParentCategories() {
                $.ajax({
                    url: "{{ route('admin.categories.get-parent-categories') }}",
                    method: "GET",
                    success: function(res) {
                        $('#createCategoryModal #parent_id').html(res);
                        $('#updateCategoryModal #parent_id').html(res);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                })
            }

            /*Admin Login*/
            $('#StoreCategoryForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    name: {
                        required: true,
                    },
                    slug: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'The name field is required.'
                    },
                    slug: {
                        required: 'The slug field is required.'
                    },
                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.categories.store') }}",
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('.btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('.btn-primary', false, 'Login');
                        },
                        success: function(res) {
                            console.log(res);
                            if (res.success == true) {
                                $('#StoreCategoryForm')[0].reset();
                                $('#createCategoryModal').modal('hide');
                                sweetAlertMessage('success', res.message);
                                CategoryDataTable.ajax.reload();
                                fetchParentCategories();
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



            /*Fetech Record For Edit*/
            $('body').delegate('.edit-category-record', 'click', function() {
                const id = $(this).attr('data-id');
                const name = $(this).parent().find('input[name="name"]').val();
                const slug = $(this).parent().find('input[name="slug"]').val();
                const parent_id = $(this).parent().find('input[name="parent_id"]').val();

                $('#updateCategoryModal').modal('show');
                $('#UpdateCategoryForm input[name="id"]').val(id);
                $('#UpdateCategoryForm input[name="name"]').val(name);
                $('#UpdateCategoryForm input[name="slug"]').val(slug);
                $('#UpdateCategoryForm select[name="parent_id"]').val(parent_id);
            });



            /*Admin Login*/
            $('#UpdateCategoryForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    name: {
                        required: true,
                    },
                    slug: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'The name field is required.'
                    },
                    slug: {
                        required: 'The slug field is required.'
                    },
                },
                submitHandler: function(form) {
                    const route = "{{ route('admin.categories.update', ':id') }}";
                    const url = route.replace(':id', $('#UpdateCategoryForm input[name="id"]').val());
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $(form).serialize(),
                        beforeSend: function() {
                            btnDisableHandler('.btn-primary', true, 'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('.btn-primary', false, 'Login');
                        },
                        success: function(res) {
                            if (res.success == true) {
                                $('#updateCategoryModal').modal('hide');
                                sweetAlertMessage('success', res.message);
                                CategoryDataTable.ajax.reload();
                                fetchParentCategories();
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

            /*Delete Subcription Product*/
            $('body').delegate('.delete-category-record', 'click', function() {
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
                        let url = "{{ route('admin.categories.destroy', ':id') }}";
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
                                    CategoryDataTable.ajax.reload();
                                    fetchParentCategories();
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
