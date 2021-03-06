<?php $this->load->view('common/header'); ?>



<!-- Being Page Title -->
<div class="container"><!-- BreadCamp -->
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <h6><a href="<?php echo base_url(); ?>">Home</a></h6>
                <h6><span class="page-active">Category</span></h6>
            </div>
        </div>
    </div>
</div>
<!-- ***********   Start Main Content 	************** -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="widget-main view_details">
                <div class="row">
                    <div class="col-md-8">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Generel Knowledge</h4>
                        </div>
                        <div class="widget-inner">
                            <ul>
                                <li>Number of Question : 40</li>
                                <li>Total Time : 40 Minutes </li>
                                <li>Total Marks : 40</li>
                                <li>Pass Mark : 25 </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas error, a porro nemo autem, fuga! Sint possimus incidunt commodi dicta facilis alias voluptas assumenda, nemo, necessitatibus dignissimos, recusandae quas minima.</p>
                            
                            <hr>

                            <?php echo form_open('exam/create_exam/'); ?>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php 
                                    $form_option = array(
                                        '10' => '10',
                                        '20' => '20',
                                        '30' => '30',
                                        '40' => '40',
                                        '50' => '50'
                                    );
                                    echo form_label('Select Number of Question');
                                    echo form_dropdown('question_select', $form_option, '', array('class' => 'form-control'));
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <?php 
                                echo form_submit('start_exam', 'Start Exam', array('class' => 'btn btn-primary'));
                                echo form_close(); 
                                ?>
                            </div>

                            
                            
                            <!-- <a href="<?php echo base_url(); ?>exam/exam_page" class="btn btn-primary">Start Exam</a> -->

                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="widget-main-title">
                            <h4 class="widget-title">Test Content</h4>
                        </div>
                        <div class="widget-inner">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- ***********   End Main Content 	************** -->

<?php $this->load->view('common/footer'); ?>