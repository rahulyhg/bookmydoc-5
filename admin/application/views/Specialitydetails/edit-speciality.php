<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Specialty 
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-houzz" aria-hidden="true"></i>Home</a></li>
         <li><a href="<?php echo base_url();?>Speciality_ctrl/add_speciality">Specialty </a></li>
         <li class="active">Edit Specialty</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>	
            </div>
            <?php
               }
               ?>
         </div>
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit Specialty </h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">
			   
                  <div class="box-body">                 
                     <div class="col-md-6">
					 
					      <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Specialty Name</label>
                            <input type="text" class="form-control required" value="<?php echo $data->specialty_name; ?>" data-parsley-trigger="change" data-parsley-minlength="2" data-parsley-pattern="^[a-zA-Z\  \/]+$"  required="" name="specialty_name"  placeholder="Visitaion Name">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				     </div>
				  </div>
				                    <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
			   </div>	  
			
               </form>
			   </div>
            </div>
            <!-- /.box -->

      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
