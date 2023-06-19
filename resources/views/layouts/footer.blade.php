<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>


    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('NiceAdmin') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/chart.js/chart.umd.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/echarts/echarts.min.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/quill/quill.min.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="{{ asset('NiceAdmin') }}/assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>





@if ($message2 = Session::get('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ $message2 }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

<!-- Template Main JS File -->
<script src="{{ asset('NiceAdmin') }}/assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</body>

</html>
