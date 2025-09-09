 <!-- Global Required Scripts Start -->
 {{-- <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" --}}
  crossorigin="anonymous"></script>
 <script src="{{ asset('admin_assets')  }}/js/jquery-3.3.1.min.js"></script>
 <script src="{{ asset('admin_assets')  }}/js/popper.min.js"></script>
 <script src="{{ asset('admin_assets')  }}/js/bootstrap.min.js"></script>
 <script src="{{ asset('admin_assets')  }}/js/perfect-scrollbar.js"> </script>
 <script src="{{ asset('admin_assets')  }}/js/jquery-ui.min.js"> </script>
 <!-- Global Required Scripts End -->

 <script src="{{ asset('admin_assets')  }}/js/datatables.min.js"> </script>
  <script src="{{ asset('admin_assets')  }}/js/data-tables.js"> </script>

 <!-- Page Specific Scripts Start -->
 <script src="{{ asset('admin_assets')  }}/js/Chart.bundle.min.js"> </script>
 <script src="{{ asset('admin_assets')  }}/js/project-management.js"> </script>
 <!-- Page Specific Scripts Finish -->

 <!-- mylo core JavaScript -->
 <script src="{{ asset('admin_assets')  }}/js/framework.js"></script>

 <!-- Settings -->
 <script src="{{ asset('admin_assets')  }}/js/settings.js"></script>
 <script src="{{ asset('admin_assets')  }}/js/validation.js"></script>
 <script src="https://cdn.tiny.cloud/1/nfd45xwyplrjfw195pwfkplzpn4e5e01j7oj6bszbpryfv7t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 @stack('scripts')


 <style>
    .is-invalid{
        color: red;
    }
    #password-error{
        position: absolute;
        top: 42px;
    }
    .swal2-title{
        color: rgb(87, 87, 87) !important;
    }
    #email-error{
        position: absolute;
        top: 42px;
    }
 </style>
 @stack('scripts')
