<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('ui/admin') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('ui/admin') }}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('ui/admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('ui/admin') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('ui/admin') }}/images/favicon.png" />

    <!-- Scripts -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> -->

    @livewireStyles
</head>

<body>






    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <x-admin.layouts.partials.navbar/>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <x-admin.layouts.partials.sidebar/>
          <!-- partial -->
          {{ $slot }}
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->











<script>

// modal delete start

$('#Deletemodal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var categoryId = button.data('category-id'); // Extract category ID from data attribute
    var form = $(this).find('form');
    form.attr('action', form.attr('action').replace('category', categoryId)); // Update form action with category ID
    form.find('#category_id').val(categoryId); // Set category ID in input field
});


  function toggleSubMenu(id) {
  var subMenu = document.getElementById(id);
  if (subMenu.classList.contains('show')) {
    subMenu.classList.remove('show');
  } else {
    subMenu.classList.add('show');
  }
}

</script>
{{-- for modal --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<!-- Required Bootstrap JavaScript files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <!-- plugins:js -->
  <script src="{{ asset('ui/admin') }}/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('ui/admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('ui/admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('ui/admin') }}/js/off-canvas.js"></script>
  <script src="{{ asset('ui/admin') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('ui/admin') }}/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('ui/admin') }}/js/dashboard.js"></script>
  <script src="{{ asset('ui/admin') }}/js/data-table.js"></script>
  <script src="{{ asset('ui/admin') }}/js/jquery.dataTables.js"></script>
  <script src="{{ asset('ui/admin') }}/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
    <!-- <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script> -->
    @livewireScripts
</body>

</html>
