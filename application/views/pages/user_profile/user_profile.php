<?php
include"includes/header.php";
include"includes/scripts.php";
include"includes/sidebar.php";
?>


   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           User Profile
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">User Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

                 <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add User</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
                    </div> 
					<div class="form-group">
                      <label for="exampleInputPassword1">Username</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Username">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Email Address</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">TRN</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="TRN">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">NIS</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="NIS">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>	
					<div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Account type</label>
                      <section type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
					  <option>---Select Account type---</option>
					  </section>
                    </div>
					
					<div class="checkbox">
                      <label>
                        <input type="checkbox"> Can Edit 
                      </label>
					  &nbsp;&nbsp;
					  <label>
                        <input type="checkbox"> Can Delete 
                      </label>
					</div>
					
					
                    <div class="form-group">
                      <label for="exampleInputFile">Plase upload a photo of your ID</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block"></p>
                    </div>
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

             

           



            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
				 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Current Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered  table-hover">
                    <thead>
                      <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div> 

        </section><!-- /.content -->
      </div>
	      <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
	  
	  
    </script>
	<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
	
<?php
include"includes/settings.php";
include"includes/footer.php";

?>

