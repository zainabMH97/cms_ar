<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Analytics map based session -->
                <div class="row">
                    <div class="col-12">
                        <div class="card box-shadow-0" style="padding: 30px;">
                            
                            <h2>Edit Agent Or Consultant</h2>   

                            <?php if($this->session->flashdata('class')) : ?>
                                <div class="alert <?php echo $this->session->flashdata('class'); ?> alert-dismissible" id="flashdata" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php
                                        echo $this->session->flashdata('message'); 
                                        unset($_SESSION['message']) ;
                                        unset($_SESSION['class']) ;
                                    ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty(validation_errors())): ?>
                                    <div class="alert alert-danger" id="flashdata">
                                        <a class="close" data-dismiss="alert" title="close">x</a>
                                        <ul style="list-style:none"><?php echo (validation_errors('<li>', '</li>')); ?></ul>
                                    </div>
                                <?php endif; ?>
                            
                                <?php echo form_open_multipart('agents_consultant/updateAgent','id="my_id"'); ?>
                                <input type="hidden" name="id" value="<?php echo $info[0]['id']; ?>">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput1">Name</label>
                                                <input type="text" class="form-control news-default" name="name" id="name"  placeholder="Enter Name of Agent or Consultant" autocomplete="off" value="<?php echo $info[0]['tb_name']; ?> ">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Agent or consultant</label>
                                            <select class="form-control form-select" name="type" id="type" style="width:100%;">
                                                    <?php if($info[0]['tb_type'] == 'agent') : ?>
                                                        <option value="agent" selected>Agent</option>
                                                        <option value="consultant">consultant</option>
                                                    <?php elseif($info[0]['tb_type'] == 'consultant') : ?>
                                                        <option value="agent">Agent</option>
                                                        <option value="consultant" selected>consultant</option>
                                                    <?php else : ?>
                                                        <option value="agent">Agent</option>
                                                        <option value="consultant">consultant</option>
                                                    <?php endif ;?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput2">Information</label>
                                                <input type="text" class="form-control square" placeholder="Enter Information" name="info" value="<?php echo $info[0]['tb_info']; ?> ">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput3">Resume</label>
                                                <fieldset class="form-group">
                                                    <div class="custom-file">
                                                    <input type="file" name="cv" >
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Phone Number1  </label>
                                                <input type="text" class="form-control square" placeholder="phone Number one" name="number1" value="<?php echo $info[0]['tb_num1']; ?> ">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Phone Number2  </label>
                                                <input type="text" class="form-control square" placeholder="phone Number two" name="number2" value="<?php echo $info[0]['tb_num2']; ?> ">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Email</label>
                                                <input type="email"  class="form-control square" placeholder="Enter Email" name="email" value="<?php echo $info[0]['tb_email']; ?> ">
                                            </div>
                                        </div>

                                        <div class="form-group file_upload" >
                                            <input type="file" name="userfile" size="1000" id="upload" >
                                            <div class="header">
                                                
                                                <label for="upload">
                                                    <p><i class="fa fa-cloud-upload fa-2x"></i><span><?php echo $this->lang->line('news-add-upload'); ?></span></p>
                                                </label>			
                                            </div>
                                        </div>
                                        <div class="form-group file_upload">
                                            <button type="submit" class="btn btn-news-form" id= "submitForm">Submit</button>
                                        </div>
                                  </div>
                                   
                                </form>
                        </div>
                    </div>
                </div>
                <!-- Analytics map based session -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
            
    </script>