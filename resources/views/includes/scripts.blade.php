<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
$(function () {
    $('#example1').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('scholar.fetch-paginate') }}", // Correct route name
        "columns": [
          { "data": "Scholar_Code" }, 
            { "data": "Institution" },
            { "data": "Unit" },
            { "data": "Area" },
            { "data": "fullname" },
            { "data": "name_of_member" },
            { "data": "batch" },
            { "data": "scholarship_type" },
            { "data": "Year_level" },
            { "data": "course" },
            { "data": "contact" },
            { "data": "Address" },
            { "data": "status" },
            { "data": "Remarks" },
            {
                "data": null,
                "defaultContent": "",
                "sortable": false,
                "render": function (data, type, row) {
                    return `
                      <button onclick="viewRecord(${row.id})" class="btn btn-sm btn-info">View</button>
                      <button onclick="editRecord(${row.id})" class="btn btn-sm btn-primary">Edit</button>
                      <button onclick="deleteRecord(${row.id})" class="btn btn-sm btn-danger">Delete</button>
                    `;
                }
            }
        ]
    });

    $('#highschool').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('scholar.fetch-high-school') }}", // Correct route name
        "columns": [
          { "data": "Scholar_Code" }, 
            { "data": "Institution" },
            { "data": "Unit" },
            { "data": "Area" },
            { "data": "fullname" },
            { "data": "name_of_member" },
            { "data": "batch" },
            { "data": "scholarship_type" },
            { "data": "Year_level" },
            { "data": "course" },
            { "data": "contact" },
            { "data": "Address" },
            { "data": "status" },
            { "data": "Remarks" },
            {
                "data": null,
                "defaultContent": "",
                "sortable": false,
                "render": function (data, type, row) {
                    return `
                      <button onclick="viewRecord(${row.id})" class="btn btn-sm btn-info">View</button>
                      <button onclick="editRecord(${row.id})" class="btn btn-sm btn-primary">Edit</button>
                      <button onclick="deleteRecord(${row.id})" class="btn btn-sm btn-danger">Delete</button>
                    `;
                }
            }
        ]
    });

    $('#seniorhigh').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('scholar.fetch-senior-high') }}", // Correct route name
        "columns": [
          { "data": "Scholar_Code" }, 
            { "data": "Institution" },
            { "data": "Unit" },
            { "data": "Area" },
            { "data": "fullname" },
            { "data": "name_of_member" },
            { "data": "batch" },
            { "data": "scholarship_type" },
            { "data": "Year_level" },
            { "data": "course" },
            { "data": "contact" },
            { "data": "Address" },
            { "data": "status" },
            { "data": "Remarks" },
            {
                "data": null,
                "defaultContent": "",
                "sortable": false,
                "render": function (data, type, row) {
                    return `
                      <button onclick="viewRecord(${row.id})" class="btn btn-sm btn-info">View</button>
                      <button onclick="editRecord(${row.id})" class="btn btn-sm btn-primary">Edit</button>
                      <button onclick="deleteRecord(${row.id})" class="btn btn-sm btn-danger">Delete</button>
                    `;
                }
            }
        ]
    });

    $('#college').DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('scholar.fetch-college') }}", // Correct route name
        "columns": [
          { "data": "Scholar_Code" }, 
            { "data": "Institution" },
            { "data": "Unit" },
            { "data": "Area" },
            { "data": "fullname" },
            { "data": "name_of_member" },
            { "data": "batch" },
            { "data": "scholarship_type" },
            { "data": "Year_level" },
            { "data": "course" },
            { "data": "contact" },
            { "data": "Address" },
            { "data": "status" },
            { "data": "Remarks" },
            {
                "data": null,
                "defaultContent": "",
                "sortable": false,
                "render": function (data, type, row) {
                    return `
                      <button onclick="viewRecord(${row.id})" class="btn btn-sm btn-info">View</button>
                      <button onclick="editRecord(${row.id})" class="btn btn-sm btn-primary">Edit</button>
                      <button onclick="deleteRecord(${row.id})" class="btn btn-sm btn-danger">Delete</button>
                    `;
                }
            }
        ]
    });
});

function viewRecord(id) {
    // Redirect to the details page for the specific record
    window.location.href = "{{ route('scholar.info', ['id' => ':id']) }}".replace(':id', id);
}

function editRecord(id) {
    // Redirect to the edit page for the specific record
    window.location.href = "{{ route('scholar.edit', ['id' => ':id']) }}".replace(':id', id);
}

function deleteRecord(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        $.ajax({
            type: "PUT",
            url: "{{ route('scholar.softDelete', ['id' => ':id']) }}".replace(':id', id),
            data: {_token: "{{ csrf_token() }}"},
            success: function (response) {
                // Handle success, e.g., show a success message
                console.log("Record soft deleted successfully");

                // Refresh DataTable
                $('#example1').DataTable().ajax.reload();
            },
            error: function (xhr, status, error) {
                // Handle error, e.g., show an error message
                console.error("Error deleting record:", error);
            }
        });
    }
}



</script>
<script>
$(function(){
  /** add active class and stay opened when selected */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.sidebar-menu a').filter(function() {
     return this.href == url;
  }).parent().addClass('active');

  // for treeview
  $('ul.treeview-menu a').filter(function() {
     return this.href == url;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
  
});
</script>
<script>
$(function(){
	//Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

  //Date range picker
  $('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
  //Date range as a button
  $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )
  
});
</script>
