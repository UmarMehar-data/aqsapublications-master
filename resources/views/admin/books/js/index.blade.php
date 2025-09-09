@push('scripts')
<script>
     $(document).ready(function(){
        @include('common.jshelper')

        /** Data Table **/
            const BookTable = $('#bookTable').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                ajax: "{{ route('admin.books.index') }}",
                columns: [{
                        "data": "Row_Index_ID"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "qty"
                    },
                    {
                        "data": "status_html"
                    },
                    {
                        "data": "publish_html"
                    },
                    {
                        "data": "recommended_html"
                    },
                    {
                        "mRender": function(data, type, row) {
                            let url = "{{ route('admin.books.edit', ':id') }}";
                            url = url.replace(':id', row.id);
                            return `
                        <input type="hidden" name="name" value="${row.name}">
                        <input type="hidden" name="price" value="${row.price}">
                        <input type="hidden" name="net_price" value="${row.net_price}">
                        <input type="hidden" name="qty" value="${row.qty}">
                        <input type="hidden" name="status" value="${row.status}">
                        <input type="hidden" name="status" value="${row.publish}">
                        <input type="hidden" name="status" value="${row.recommended}">
                        <a href="${url}"  class="btn btn-success btn-sm edit-project-record" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Edit</a>
                        <button class="btn btn-outline-danger btn-sm delete-booking-record" data-id="${row.id}"><i class="fa fa-trash mg-r-10" ></i> Delete</button>
                        `;
                        }
                    }
                ]
            });

            $('body').delegate('.delete-booking-record', 'click', function() {
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
                        let url = "{{ route('admin.books.destroy', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "DELETE",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "DELETE"
                            },
                            success: function(res) {
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    // setTimeout(() => {
                                    //     window.location =
                                    //         "{{ route('admin.books.index') }}";
                                    // }, 2000);
                                    BookTable.ajax.reload();

                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });

            // changing the status of books
            $('body').delegate('.book-status', 'click', function() {
                const id = $(this).attr('data-id');
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Change the Status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.books.status-update', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "POST"
                            },
                            success: function(res) {
                                console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    BookTable.ajax.reload();
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });

            // changing the Publish status of books
            $('body').delegate('.book-publish-status', 'click', function() {
                const id = $(this).attr('data-id');
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Change the Publish Status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.books.publish-update', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "POST"
                            },
                            success: function(res) {
                                console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    BookTable.ajax.reload();
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });

            $('body').delegate('.book-recommended-status', 'click', function() {
                const id = $(this).attr('data-id');
                console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't to Recommed the Book!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.books.recommend-update', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "POST"
                            },
                            success: function(res) {
                                console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    BookTable.ajax.reload();
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
