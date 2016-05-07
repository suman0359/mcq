  <!-- Content Header (Page header) -->
<section class="content content-header box box-warning">
    <h1> Advanced Form Elements <small>Preview</small></h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>

	<div class="row">
		<div class="col-xs-12">
			<div class="box-header">
				<a href="<?php echo base_url(); ?>question/index" class="btn btn-primary pull-right">View Sub Category</a>
			</div>
		</div>
	</div>
	 <?php
       $success = $this->session->flashdata('success') ; 
       $error = $this->session->flashdata('error') ;
       if($success){
       ?>
        <div class="alert alert-success" role="alert"><?php echo $success ;?></div>
        <?php } 
       if($error){
       ?>

       <div class="alert alert-danger" role="alert"><?php echo $error ;?></div>

       <?php } ?>

	<div class="row">
		<div class="box box-warning">
			<div class="box-body">

				<?php echo form_open_multipart("");?>
				
					<div class="box-header with-border">
	                  <h3 class="box-title">Add New Question Form</h3>
	                </div><!-- /.box-header -->
					<div class="col-md-12">
						<div class="form-group">
	                      <label>Question Name</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'question',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $question, 
						        'required' => 'required',
						        'placeholder'=>'Question Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="">Select Question's Category</label>
							<select name="category_id" id="category_id" class="form-control">
								<option value="">Select Category</option>
								<?php foreach ($category_list as $value) { ?>
									<option <?php if($value->id==$category_id) echo "selected"; ?> value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
								<?php } ?>

							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="">Select Question's Subject</label>
							<select name="subject_id" id="subject_id" class="form-control">
								<option value="">Select Subject</option>
								<?php foreach ($subject_list as $value) { ?>
									<option <?php if($value->id==$subject_id) echo "selected"; ?> value="<?php echo $value->id ?>"><?php echo $value->name; ?></option>
								<?php } ?>

							</select>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
						<label for="">Select Correct Answer</label>
							<select name="answer" id="answer" class="form-control">
								<option value="">Select Option</option>
								<option <?php if ($correct_ans==1) echo "selected"; ?> value="1">Option One</option>
								<option <?php if ($correct_ans==2) echo "selected"; ?> value="2">Option Two</option>
								<option <?php if ($correct_ans==3) echo "selected"; ?> value="3">Option Three</option>
								<option <?php if ($correct_ans==4) echo "selected"; ?> value="4">Option Four</option>

							</select>
						</div>
					</div>


					<div class="col-md-12">
						<div class="form-group">
	                      <label>Option One</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'option[]',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $option_one, 
						        'required' => 'required',
						        'placeholder'=>'Question Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
	                      <label>Option Two</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'option[]',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $option_two, 
						        'required' => 'required',
						        'placeholder'=>'Question Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
	                      <label>Option Three</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'option[]',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $option_three, 
						        'required' => 'required',
						        'placeholder'=>'Question Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
	                      <label>Option Four</label>
	                      <?php 		                      
						    $form_input = array(
						        'name' => 'option[]',
						        'type' => 'text',
						        'class' =>'form-control ', 
						        'value' => $option_four, 
						        'required' => 'required',
						        'placeholder'=>'Question Name'
						    );
						    echo form_input($form_input); 
						    ?>
	                    </div>
					</div>

			
					<div class="col-md-12">
						<hr>
						<?php
						$form_input = array(
				        'name' => 'submit',
				        'class' =>'btn btn-success pull-right', 
				        'value' => $submit
				    	);
						 echo form_submit($form_input); 
						?>	
					</div>
									
				
			</div>

        </div><!-- /.box-body -->
  	</div><!-- /.box -->
</section>

<script src="http://localhost/serabazarbd/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		// $( window ).load(function() {
  //       	var category_type = $("input[name='category_type']:checked").val();
	 //        var category_type = parseInt(category_type);
        	
	 //        if(category_type==1){

	 //            $("#sub_category").removeClass("display_none");
	 //            $("#sub_category").addClass("display_block");
	 //        }
	 //    });

	    
  //       $(".box.box-warning").on('change', 'input', function(){
	 //        var category_type = $("input[name='category_type']:checked").val();
	 //        var category_type = parseInt(category_type);
  //       if (category_type==0) {
  //           $("#sub_category").removeClass("display_block");
  //           $("#sub_category").addClass("display_none");
  //       }else if(category_type==1){
  //           $("#sub_category").removeClass("display_none");
  //           $("#sub_category").addClass("display_block");
  //       }

	 //    });

        
	});
</script>