


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src=" {{ asset('/asset/') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Bootstrap 4 -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<!-- ChartJS -->
<script src=" {{ asset('/asset/') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/sparklines/sparkline.js"></script> --}}
<!-- JQVMap -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/jqvmap/jquery.vmap.min.js"></script> --}}
{{-- <script src=" {{ asset('/asset/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<!-- daterangepicker -->
<script src=" {{ asset('/asset/') }}/plugins/moment/moment.min.js"></script>
<script src=" {{ asset('/asset/') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
<!-- Summernote -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/summernote/summernote-bs4.min.js"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src=" {{ asset('/asset/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
<!-- AdminLTE App -->
{{-- <script src=" {{ asset('/asset/') }}/dist/js/adminlte.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src=" {{ asset('/asset/') }}/dist/js/pages/dashboard.js"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src=" {{ asset('/asset/') }}/dist/js/demo.js"></script> --}}
{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script src="{{ asset('/asset/') }}/plugins/select2/js/select2.full.min.js"></script>
{{-- <script src="{{ asset('/asset/') }}/js/jquery.tableToExcel.js"></script> --}}
<script>

$.ajaxSetup({
headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

}

});

    function loading(){
    Swal.fire({
                title: 'Please Wait !',
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading()
                },
            });
}


// repeater js
$(document).ready(function () {
        $('.repeater').repeater({

            initEmpty: false,

            defaultValues: {
                'text-input': ''
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },

            ready: function (setIndexes) {
            },

            isFirstItemUndeletable: true
        })
    });

    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
</script>

<script>
    $( function() {
      $( ".datepicker" ).datepicker({
  appendText: "(dd/mm/yy)"
});
$(".datepicker").datepicker( "option", "dateFormat", "dd/mm/yy" );

    } );
    </script>
@yield('footer_script')
