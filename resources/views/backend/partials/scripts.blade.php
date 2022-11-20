<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendors/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>

{{-- Data table --}}
<script src="{{ asset('vendors/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('vendors/data-table/dataTables.bootstrap4.min.js') }}"></script>

{{-- CKEditor --}}
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
