
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 Pemerintah Desa Glonggong</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>js/demo.js"></script>

<!-- DataTables -->
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>  

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $("#pemdes").DataTable({
      "responsive": true,
      "autoWidth": false,
       aoColumns : [
        { sWidth: '5%' },
        { sWidth: '25%' },
        { sWidth: '25%' },
        { sWidth: '25%' },
        { sWidth: '20%' },
      ]
    });
    $("#berita").DataTable({
      "responsive": true,
      "autoWidth": false,
       aoColumns : [
        { sWidth: '5%' },
        { sWidth: '40%' },
        { sWidth: '20%' },
        { sWidth: '15%' },
        { sWidth: '20%' },
      ]
    });
  });
</script>

<script>
  $('.toastsDefaultDanger').change(function() {
    $(document).Toasts('create', {
      class: 'bg-danger', 
      title: 'Toast Title',
      subtitle: 'Subtitle',
      body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    })
  });
</script>

</body>
</html>