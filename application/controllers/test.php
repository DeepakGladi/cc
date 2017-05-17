<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>



	<meta charset="utf-8">
	<title>Dsitac</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
/* tab color */
.nav-tabs>li>a {
  background-color: #333333; 
  border-color: #777777;
  color:#fff;
}

/*  tab color */
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
  color: #fff;
  background-color: #666;
  border: 1px solid #888888;
}

/* hover tab color */
.nav-tabs>li>a:hover {
  border-color: #000000;
  background-color: #111111;
}

.btn:hover
{
	 color: #ffffff;
	 background-image: url(https://www.google.co.in/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjgsv3BjLzSAhWFoJQKHexqAbsQjRwIBw&url=https%3A%2F%2Fwww.shutterstock.com%2Fsearch%2Fclothes%2Bbutton&psig=AFQjCNG0zZR_3NQ6d-eMRE9PKRCNK2EUvg&ust=1488691033782427) 3px 5px no-repeat;


background-color:#ffcccc !important;
}
	</style>
	<style>
.modal-header {
	 color: black;
	 background-color: gray;
     padding: 0px 0px;
     border-bottom:1px solid #ffffff;
     background-color: #ffffff;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
             }
			 
@media (min-width: 768px) {
  .modal-dialog {
    width: 1200;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
  }
  .modal-sm {
    width: 1200px;
  }
}

	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">
<div class="container">
<ul class="nav nav-tabs" id="pills-first">
  <li class="active"><a href="#tab_a">Department</a></li>
  <li ><a href="#tab_b">Staffs</a></li>
  <!-- <li ><a href="#tab_c">Students</a></li> -->
  <li ><a href="#tab_h">Ranking</a></li>
  <li ><a href="#tab_d">Placement update</a></li>
  <li ><a href="#tab_e">Publish</a></li>
  <li ><a href="#tab_f">News & Events</a></li>
  <li ><a href="#tab_g">Image Gallery</a></li>
</ul>
<div class="tab-content">
        <div class="tab-pane active" id="tab_a">
            
       <p>	<div class="container">
		<h1 style="font-size:20pt" align="center">Departments</h1>
        <button class="btn " onclick="add_department_func()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="depttable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
				 
                    <th>Name</th>
               	

				<th></th>
                </tr>
            </thead>
            <tbody><?php foreach($department as $dept){  ?>
			<tr>
			<td>  <?php echo $dept['name'];?></td>
			<td> <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_dept(<?php echo $dept['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div> </p>
        </div>
        <div class="tab-pane" id="tab_b">
           
            <p>	<div class="container">
	<h1 style="font-size:20pt" align="center">Staffs</h1>
        <button class="btn" onclick="add_staff()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
       
        <br />
        <br />
        <table id="stafftable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
				 
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Educational Qualification</th>
                    <th>contact</th>
               	

				<th>Image</th>
				<th></th>
                </tr>
            </thead>
            <tbody><?php foreach($staff as $dept){  ?>
			<tr>
			<td>  <?php echo $dept['name'];?></td>
			<td>   <?php echo $dept['dept'];?></td>
			<td>   <?php echo $dept['designation'];?></td>
			<td>   <?php echo $dept['email'];?></td>
			<td>   <?php echo $dept['edu_quali'];?></td>
			<td>   <?php echo $dept['contact'];?></td>
			<td>   <img class='img-responsive' src='<?php echo base_url()."images/".$dept['image'];?>' height="75" width="75"/></td>
			<td> <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_staff(<?php echo $dept['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div></p>
        </div>
        <div class="tab-pane" id="tab_c">
		<p>	<div class="container">
             <h1 style="font-size:20pt" align="center">Students</h1>
         

        <button class="btn" onclick="add_student()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="studenttable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
				 
                    <th>Name</th>
                    <th>Department</th>
                    <th>year</th>
                    <th>Image</th>
               	

				<th></th>
                </tr>
            </thead>
               <tbody><?php foreach($stud as $dept){  ?>
			<tr>
			<td>  <?php echo $dept['name'];?></td>
			<td>   <?php echo $dept['dept'];?></td>
			<td>   <?php echo $dept['year'];?></td>
			<td>   <img class='img-responsive' src='<?php echo base_url()."images/".$dept['image'];?>' height="75" width="75"/></td>
			<td> <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_stud(<?php echo $dept['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a> </td>
			</tr>
			<?php } ?>
            </tbody>
        </table>
    </div></p>
        </div>
<div class="tab-pane" id="tab_d">

		<p>	
		<div class="container">
             <h1 style="font-size:20pt" align="center">placed</h1>

        <button class="btn" onclick="add_placement()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="placementtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
					<th>Company</th>
                    <th>Department</th>
                    <th>year</th>
				    <th>Image</th>
				    <th></th>
                </tr>
            </thead>
               <tbody>
			   <?php foreach($place as $dept){  ?>
			<tr>
			<td>  <?php echo $dept['name'];?></td>
			<td>   <?php echo $dept['company'];?></td>
			<td>   <?php echo $dept['dept'];?></td>
			<td>   <?php echo $dept['year'];?></td>
			<td>   <img class='img-responsive' src='<?php echo base_url()."images/".$dept['image'];?>' height="75" width="75"/></td>
			<td> <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_palced(<?php echo $dept['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			</tr>
			<?php } ?>
              </tbody>
        </table>
      </div>
	   </p>

</div><!-- tab content -->
<div class="tab-pane" id="tab_e">

		<p>	
		<div class="container">
             <h1 style="font-size:20pt" align="center">Publish</h1>

        <button class="btn" onclick="add_publish()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="publishtable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Staff Name</th>
					<th>Company</th>
				    <th></th>
                </tr>
            </thead>
               <tbody>
			   <?php foreach($pub as $pb){ ?>
			   <tr>
				   <td><?php echo $pb['name']; ?></td>
				   <td><a href="<?php echo base_url()."images/".$pb['pdf']; ?>" target="_blank"> <?php echo $pb['pdf']; ?> </a></td>
				   <td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_publish(<?php echo $dept['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			   </tr>

			                        <?php } ?>
              </tbody>
        </table>
      </div>
	   </p>

</div><!-- tab content -->

     <div class="tab-pane " id="tab_f">
            
       <p>	<div class="container">
		<h1 style="font-size:40px" align="center">News</h1>
        <button class="btn " onclick="add_news()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="newstable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
               

                 <th>Title</th>
                 <th>Description</th>
				 <th>image</th>
				 <th></th>
                </tr>
            </thead>
            <tbody>
			<?php foreach($news as $new){ ?>
			<tr>
			
			<td><?php echo $new['title']; ?></td>
			<td><?php echo $new['description']; ?></td>
			<td><a href='<?php echo base_url()."images/".$new['pdf']; ?>'><?php echo $new['pdf']; ?></a></td>
			<td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_news(<?php echo $new['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div> </p>
	
	  <p>	<div class="container">
		<h1 style="font-size:40px" align="center">Events</h1>
        <button class="btn " onclick="add_news()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="newstable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                 <th>Title</th>
                 <th>Description</th>
				 <th>image</th>
				 <th></th>
                </tr>
            </thead>
            <tbody>
			<?php foreach($events as $new){ ?>
			<tr>
			
			<td><?php echo $new['event_name']; ?></td>
			<td><?php echo $new['event_content']; ?></td>
			<td><a href='<?php echo base_url()."images/".$new['event_attach']; ?>'><?php echo $new['event_attach']; ?></a></td>
			<td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_events(<?php echo $new['event_id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			</td>
			
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div> </p>
	
	
	  <p>	<div class="container">
		<h1 style="font-size:40px" align="center">Student Board</h1>
        <button class="btn " onclick="add_news()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        
        <br />
        <br />
        <table id="newstable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
              

                 <th>Title</th>
                 <th>Description</th>
				 <th>image</th>
				 <th></th>
                </tr>
            </thead>
            <tbody>
			<?php foreach($board as $new){ ?>
			<tr>
			
			<td><?php echo $new['title']; ?></td>
			<td><?php echo $new['description']; ?></td>
			<td><a href='<?php echo base_url()."images/".$new['pdf']; ?>'><?php echo $new['pdf']; ?></a></td>
			<td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_board(<?php echo $new['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			</td>
			
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div> </p>
	
	
        </div>
		   <div class="tab-pane " id="tab_g">
            
       <p>	<div class="container">
		<h1 style="font-size:40px" align="center">Images</h1>
		
        <button class="btn " onclick="add_image()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <button class="btn" id="deleteall"><i class="glyphicon glyphicon-trash"></i> deleteselected</button>
       
        <br />
        <br />
        <table id="newstable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
              
                 <th>Title</th>
               
	         <th>image</th>
  
                                                <th>Description</th>
                      <th><input type ="checkbox" name="checkbox[]" class="chk_boxes"  onclick="deleteall();" id="tablecheck" value="checked">Select All</th>
              <script type="text/javascript">
                                               
    $('.chk_boxes').click(function() {
		alert($('.check').val());
        $('.chk_boxes1').prop('checked', this.checked);
    });
	


function deleteall(){
alert('s');
 var chekc = new array();
 check = $('#check:checked').val();
 
 
 $.each(check,function(){
 
 alert($(this).val());
 
 });

}

		</script>
		
				 <th></th>
                </tr>
            </thead>
            <tbody>
			<?php foreach($img as $new){ ?>
			
			<tr>
			
			<td><?php echo $new['imagetitle']; ?></td>
			
			<td><img class='img-responsive'  height="75" width="75" src='<?php echo base_url()."images/".$new['image']; ?>'/><?php echo $new['image']; ?></td>
			<td><?php echo $new['description'];?></td>
			<td><input type ="checkbox" name="check[]" class="chk_boxes1" id="check" value="<?php echo $new['id']; ?>"></td>
			<td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_gal(<?php echo $new['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
			</tr>
			<?php } ?>
            </tbody>
          
        </table>
    </div> </p>
        </div>
 <div class="tab-pane " id="tab_h">
 <p>	
   <div class="container">
		<h1 style="font-size:40px" align="center">Rank</h1>
        <button class="btn " onclick="add_rank()"><i class="glyphicon glyphicon-plus"></i> Add </button>
        <button class="btn" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        <br />
        <br />
        <table id="ranktable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
				 <th>Name</th>
                 <th>Title</th>
                 <th>Department</th>
                 <th>image</th>
				 <th></th>
                </tr>
            </thead>
            <tbody>
			<?php foreach($rank as $rk){ ?>
			
			<tr>
			 <td><?php echo $rk['name']; ?></td>
			 <td><?php echo $rk['title']; ?></td>
			 <td><?php echo $rk['department']; ?></td>
			 <td><img src='<?php echo base_url()."images/".$rk['image']; ?>'  height='60' width='70' class='img-responsive'/></td>
			 <td><a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_rank(<?php echo $rk['id'];?>)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
            </tr>
			
			                    <?php  } ?>
            </tbody>
         </table>
    </div> 
</p>
</div>
</div><!-- end of container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<script>
        $('#pills-first a').hover(function (e) {
          e.preventDefault()
          $(this).tab('show')
       });
    </script>
</div>
<script src="<?php echo base_url('asset/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('asset/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('asset/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>

	<script>
	var save_method; //for save method string
    var table;
$(document).ready(function() {
	
	
	
 $('#select').change(function(){
     
         if( $('#select').val() == "main_gallery"){
       
         $('#imagetitle').css('display','none');
         
              
         }
         else if($('#select').val() == "department" ){
         
           $('#imagetitle').css('display','block');
           
         }
 });
 
 var count = 0;
$("#buttonID").click(function(){
	 if(count < 5) {
    $("#child").append("<b> <br><input type  ='text'  class='form-control col-md-9' name='description[]' placeholder='Description'><br><div class='col-md-12' id ='child'><input type='file' name='imageuserfile[]' id='imageuser' size='20' class='form-control'/><span class='help-block'></span></div></div></b>");
count++
}

});


$('#depttable').DataTable();
$('#stafftable').DataTable();
$('#studenttable').DataTable();
$('#placementtable').DataTable();
$('#publishtable').DataTable();


});
	
	function reload_table()
{
	
    table.ajax.reload(null,false); //reload datatable ajax 
}
function deleteall(){


}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

        url = "<?php echo site_url('/admin_controller/ajax_add')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#department_form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
 location.reload();
            if(data.status) //if success close modal and reload ajax table
            {
				
                $('#add_department').modal('hide');
                reload_table();
				
            }
            else
            {
              /*  for (var i = 0; i < data.inputerror.length; i++) 
                *{
                 *   $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                  *  $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                *} */
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}
function save_student(){
	
   url = "<?php echo site_url('/admin_controller/ajax_add_student')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#student_form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
			location.reload();
		}
	      });
}
function save_rank(){

   url = "<?php echo site_url('/admin_controller/ajax_add_rank')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#rankform').serialize(),
        dataType: "JSON",
        success: function(data)
        {
			location.reload();
		}
	      });	

                 }


function add_department_func()
{
	
	
	 save_method = 'add';
    $('#department_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#add_department').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add Department'); // Set Title to Bootstrap modal title
}

function add_staff()
{
	 save_method = 'add';
    $('#staffform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#staffform_model').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add Staffs'); // Set Title to Bootstrap modal title
}


function add_student()
{
	 save_method = 'add';
    $('#student_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#add_student').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add Student'); // Set Title to Bootstrap modal title
}

function add_placement()
{
	save_method = 'add';
    $('#placementform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#placement_model').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add placement'); // Set Title to Bootstrap modal title

}
function add_publish()
{
	
	save_method = 'add';
    $('#publish_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#publish_model').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add publish'); // Set Title to Bootstrap modal title

}
function add_news()
{
	
	save_method = 'add';
    $('#newsform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#news_model').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add News'); // Set Title to Bootstrap modal title

}
function add_image()
{
	save_method = 'add';
    $('#imageform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#image_model').modal('show'); // show bootstrap modal
	//$('#add_steel_form').css('width','900px');	
    $('.modal-title').text('Add Image'); // Set Title to Bootstrap modal title
}
function add_rank()
{
    save_method = 'add';
    $('#rankform')[0].reset(); 
    $('.form-group').removeClass('has-error'); 
    $('.help-block').empty(); 
    $('#rank_model').modal('show'); 
    $('.modal-title').text('Add Rank Holder'); 
	
}

/*
function save_staff()
{
	
	var url = "<?php echo site_url('/upload_file/upload_it/')?>";
	  $.ajax({
        url : url,
        type: "POST",
        data: $('#staffform').serialize(),
        dataType: "JSON",
        success: function(data)
        {
		
			//location.reload();
			
		},   error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
	  });

}*/



function delete_dept(id)
{
	
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
}

function delete_staff(id)
{
	
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_staff')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
}	

function delete_stud(id)
{
	    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_stud')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
	
}
function delete_palced(id)
{
	
		    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_placed')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
	
	
}
function delete_publish(id)
{
		    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_publish')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
	
	
}
function delete_gal(id)
{
	
			    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_gal')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
	
	
	
	
	
}
function delete_news(id){
	
				    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_news')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_department').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }
	
	
	
	
}
function delete_events(id){
	
	if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_events')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
             
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									           }
        });

    }
	
	
	
	
}

function delete_rank(id){
	
	
if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_rank')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_rank').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }

}


function delete_board(id){
	
	
if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('/admin_controller/ajax_delete_board')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
				 location.reload();
                //if success reload ajax table
                $('#add_rank').modal('hide');
                reload_table();
            },
           error: function(xhr, status, error) {
										var acc = []
										$.each(xhr, function(index, value) {
											acc.push(index + ': ' + value);
										});
										alert(JSON.stringify(acc));
									}
        });

    }

}
	

	</script>
<style>
	@media screen and (min-width: 400px) {
	
                                    #add_steel_form .modal-dialog  {width: 1000px;}

                                      }		
</style>

<!-- Bootstrap modal -->
<div class="modal fade" id="add_department" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="department_form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="name" placeholder="Name" id="name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<style>
@media screen and (min-width: 768px) {
	
	#staffform_model .modal-dialog  {width:900px;height:1000px;}
#staffform_model .modal-content  {width:900px;height:1000px;}
}
</style>

<div class="modal fade" id="staffform_model" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;
          </span>
        </button>
        <h3 class="modal-title">Creation Form
        </h3>
      </div>
      <div class="modal-body form">
        <?php $at = array('id'=> "staffform",'name' =>"staffform",'method' => "post"); echo form_open_multipart('upload_file/upload_it',$at);?>
        <div class="form-body">
          <div class="form-group col-md-12">
            <label for='name' class="control-label col-md-3">Name
            </label>
            <div class="col-md-9">
              <input name="name" placeholder="Name" id="name" class="form-control" type="text">
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='designation' class="control-label col-md-3">Designation
            </label>
            <div class="col-md-9">
              <input name="designation" placeholder="Designation" id="designation" class="form-control" type="text">
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='department' class="control-label col-md-3">Department
            </label>
            <div class="col-md-9">
              <select name="department" placeholder="Department" id="department" class="form-control" type="text">
                <?php foreach($department as $dept){ ?>
                <option value='<?php echo $dept['name']; ?>'>
                  <?php echo $dept['name']; ?>
                </option>
                <?php } ?>
              </select>
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='email' class="control-label col-md-3">Designation
            </label>
            <div class="col-md-9">
              <input name="email" placeholder="Email-Id" id="email" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='edu_qual' class="control-label col-md-3">Educational Qualification
            </label>
            <div class="col-md-9">
              <input name="edu_qual" placeholder="Educational Qualification" id="edu_qual" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='wrk_exp' class="control-label col-md-3">Work Experience
            </label>
            <div class="col-md-9">
              <input name="wrk_exp" placeholder="Work Experience" id="wrk_exp" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='research' class="control-label col-md-3">Research
            </label>
            <div class="col-md-9">
              <input name="research" placeholder="Research" id="research" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='pub_gui' class="control-label col-md-3">Publication & Guidance
            </label>
            <div class="col-md-9">
              <input name="pub_gui" placeholder="Publication & Guidance" id="pub_gui" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='paper' class="control-label col-md-3">Papers Published
            </label>
            <div class="col-md-9">
              <input name="paper" placeholder="Papers Published" id="paper" class="form-control" type="text" />
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='achievements' class="control-label col-md-3">Achievements	
            </label>
            <div class="col-md-9">
              <textarea rows='5' name="achievements" placeholder="Achievements" id="achievements" class="form-control" type="text">
              </textarea>
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='contact' class="control-label col-md-3">Contact
            </label>
            <div class="col-md-9">
              <input name="contact" placeholder="Contact" id="contact" class="form-control" type="text">
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for='userfile' class="control-label col-md-3">Image
            </label>
            <div class="col-md-9">
              <input type="file" name="userfile" id='userfile'  class='form-control'/>
              <span class="help-block">
              </span>
            </div>
          </div>
          <div class="modal-footer col-md-12">
            <button type="submit" name='submit' id="btnSave"  value="upload" class="btn btn-primary">Save
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
            </button>
          </div> 
        </div>
        </form>
    </div>
  </div>
  <!-- /.modal-content onclick="save_staff()" -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- Bootstrap modal -->
<div class="modal fade" id="add_student" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
               <!-- <form action="<?php echo site_url('/Upload_file/ajax_add_student')?>" id="student_form" class="form-horizontal" enctype='multipart/form-data'> -->
   <?php $at = array('id'=> "student_form",'name' =>"student_form",'method' => "post"); echo form_open_multipart('Upload_file/ajax_add_student',$at);?>
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="studentname" placeholder="Name" id="studentname" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-3">Year</label>
                            <div class="col-md-9">
                                <select name="studentyear" placeholder="year" id="studentyear" class="form-control" type="text">
								<option value='1'>1'st year</option>
								<option value='2'>2'st year</option>
								<option value='3'>3'st year</option>
								<option value='4'>4'st year</option>
								</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Department</label>
                            <div class="col-md-9">
                                 <select name="studentdepartment" placeholder="Department" id="studentdepartment" class="form-control" type="text">
								<?php foreach($department as $dept){ ?>
								<option value='<?php echo $dept['name']; ?>'><?php echo $dept['name']; ?></option>
								
								<?php } ?>
								</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="control-label col-md-3">Student Image</label>
                            <div class="col-md-9">
                                <input type="file" name="studentuserfile" id='studentuserfile'  class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                        </div>

                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="submit" id="btnSavee" name='submit' onclick="save_student()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div> </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
	   
	   
<!-- Bootstrap modal -->
<div class="modal fade" id="placement_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
               <!--  <form action="upload_file/upload_it" id="staffform" class="form-horizontal" name='staffform' enctype='multipart/form-data'>-->
               <?php $at = array('id'=> "placementform",'name' =>"placementform",'method' => "post"); echo form_open_multipart('upload_file/upload_it_placement',$at);?>
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input name="placementname" placeholder="Name" id="placementname" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						  <div class="form-group">
                            <label class="control-label col-md-3">Department</label>
                            <div class="col-md-9">
                                <select name="placementdepartment" placeholder="Department" id="placementdepartment" class="form-control" type="text">
								<?php foreach($department as $dept){ ?>
								<option value='<?php echo $dept['name']; ?>'><?php echo $dept['name']; ?></option>
								
								<?php } ?>
								
								</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="control-label col-md-3">Year</label>
                            <div class="col-md-9">
                                <select name="placementyear" placeholder="year" id="placementyear" class="form-control" type="text">
								<option value='1'>1'st year</option>
								<option value='2'>2'st year</option>
								<option value='3'>3'st year</option>
								<option value='4'>4'st year</option>
								</select>
                                <span class="help-block"></span>
                            </div>
                         </div>
						
						  <div class="form-group">
                            <label class="control-label col-md-3">Company</label>
                            <div class="col-md-9">
                                <textarea rows='3' name="placementcompany" placeholder="Company Details" id="placementcompany" class="form-control" type="text"></textarea>
                                <span class="help-block"></span>
                            </div>
						 </div>

					  <div class="form-group">
                            <label class="control-label col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="placementuserfile" id='placementuserfile'  class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                      </div>
                       
                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="submit" name='submit' id="btnSave"  value="upload" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div> </form>
        </div><!-- /.modal-content onclick="save_staff()" -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- Bootstrap modal -->
<div class="modal fade" id="publish_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
           
                 <?php $at = array('id'=> "publish_form",'name' =>"publish_form",'method' => "post"); echo form_open_multipart('upload_file/upload_it_publish',$at);?>
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <select name="stafname" id="stafname" class="form-control" type="text">
								<?php foreach($staff as $sf){ ?>
								<option value='<?php echo $sf['name']?>'><?php echo $sf['name']?></option>
								<?php } ?>
								</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="control-label col-md-3">PDF</label>
                            <div class="col-md-9">
                                <input type="file" name="publishuserfile" id='publishuserfile'  class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                      </div>

                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="submit" name='submit' id="btnSave"  class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
			 </form>
        </div><!-- /.modal-content onclick="save_publish()"-->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- Bootstrap modal -->
<div class="modal fade" id="news_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
             
                     <?php $at = array('id'=> "newsform",'name' =>"newsform",'method' => "post"); echo form_open_multipart('upload_file/upload_it_news',$at);?>
                    <div class="form-body">

					  <div class="form-group">
                            <label class="control-label col-md-3">Choose </label>
                            <div class="col-md-9">
									<select name="choice"  id="choice" class="form-control">
										<option value='news'>news</option>
										<option value='events'>Events</option>
										<option value='student_board'>Student Board</option>
									</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
						
					
                        <div class="form-group">
                            <label class="control-label col-md-3">Title</label>
                            <div class="col-md-9">
                                <input name="title" placeholder="title" id="title" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						  <div class="form-group">
                            <label class="control-label col-md-3">Description</label>
                            <div class="col-md-9">
                                <input name="description" placeholder="description" id="description" class="form-control" type="text"/>
							
                                <span class="help-block"></span>
                            </div>
                        </div>

					  <div class="form-group">
                            <label class="control-label col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="newsuserfile" id='newsuserfile' size="20" class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" name='submit' id="btnSave" onclick="save_news()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div></form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Bootstrap modal -->
<div class="modal fade" id="image_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
             
                     <?php $at = array('id'=> "imageform",'name' =>"imageform",'method' => "post"); echo form_open_multipart('upload_file/upload_it_image',$at);?>
                    <div class="form-body">

                        <div class="form-group">
                            
                            <div class="col-md-9">
                            <div class="form-group col-md-12">
                            
            <label for='department' class="control-label col-md-3">
            </label><br>
            
            
             <select name="imagetitle" placeholder="title" id="imagetitle" class="form-control" type="text">
             <option value='common'>Choose</option>
                <?php foreach($department as $dept){ ?>
                <option value='<?php echo $dept['name']; ?>'>
                  <?php echo $dept['name']; ?>
                </option>
                <?php } ?>
              </select>
              
           
                              <select name="select" id='select' class="form-control">
                              <option value="fu">select</option>
                            <option value="main_gallery">main gallery</option>
                            <option value="department">department</option>
  
                            </select><br>
                            
                           DESCRIPTION: <input type  ="text"  class="form-control" name="description[]" placeholder="Description">
         

             
           
            
          </div>
                              
                                <span class="help-block"></span>
                            </div>
                        </div>
					
					  <div class="form-group">
                            <label class="control-label col-md-3">Image</label>
                            <div class="col-md-9" id ="child">
                                <input type="file" name="imageuserfile[]" id='imageuserfile' size="20" class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                        </div>

                       <div>
   <input type="button" class="btn btn-info btn-md-sm"  value="Add more" id="buttonID">
  </div>

                    </div>
                 </div>

            <div class="modal-footer"><br><br><br><br>
                <button type="submit" name='submit' id="btnSave" onclick="save_news()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div></form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- End Bootstrap modal -->



<!-- Bootstrap modal -->
<div class="modal fade" id="rank_model" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Creation Form</h3>
            </div>
            <div class="modal-body form">
             
                     <?php $at = array('id'=> "rankform",'name' =>"rankform",'method' => "post"); echo form_open_multipart('upload_file/upload_it_rank',$at);?>
                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Title</label>
                            <div class="col-md-9">
                                <input name="ranktitle" placeholder="title" id="ranktitle" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="control-label col-md-3">Student Name</label>
                            <div class="col-md-9">
							  <input type='text' name='rankname' id='rankname' class='form-control' />
							            
                                <!-- <input name="rankname" placeholder="rankname" id="rankname" class="form-control" type="text"> -->
                                <span class="help-block"></span>
                            </div>
                        </div>

					    <div class="form-group">
                            <label class="control-label col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="rankuserfile" id='rankuserfile' size="20" class='form-control'/>
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="control-label col-md-3">Department</label>
                            <div class="col-md-9">
                                 <select name="rankdepartment" placeholder="rankdepartment" id="rankdepartment" class="form-control" type="text">
								<?php foreach($department as $dept){ ?>
								<option value='<?php echo $dept['name']; ?>'><?php echo $dept['name']; ?></option>
								
								<?php } ?>
								</select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                       
                    </div>
					
            </div>
            <div class="modal-footer">
                <button type="submit" name='submit' id="btnSave" onclick="save_rank()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div></form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
	   
</body>
</html>