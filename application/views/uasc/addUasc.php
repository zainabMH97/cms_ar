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
                            
                            <h2>Add New University or Search Center</h2>   

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
                            
                                <?php echo form_open_multipart('uasc/createNewUasc','id="my_id"'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput1">Name</label>
                                                <div class="alert alert-warning alert-dismissible fade show" id="err_post_title" style="display:none">This Post Already Exist</div>
                                                <input type="text" class="form-control news-default" name="name" id="name"  placeholder="Enter Name of University or search center" autocomplete="off" required >
                                                <div id="match-list"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput2">Location</label>
                                                <input type="text" class="form-control square" placeholder="Enter location" name="location">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput3">Geographical location</label>
                                                <input type="text" class="form-control square"  placeholder="Geographical location" name="geo_location">
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label>Choose University Or Scientific Research Centers</label>
                                            <select class="form-control form-select" name="type" id="type" style="width:100%;">
                                                    <option value="un">University</option>
                                                    <option value="sc">Research Center</option>
                                                    <option value="ca">Cultural attachés</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Additional Info </label>
                                                <input type="text" class="form-control square" placeholder="year-of-Establishing" name="info">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Phone Number  </label>
                                                <input type="text" class="form-control square" placeholder="phone Number" name="number">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Days Of the Week</label>
                                                <input type="text" id="day" class="form-control square" placeholder="sunday-monday" name="day">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="timesheetinput5">Start Time</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" class="form-control" name="starttime">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6 mb-2">
                                                <label for="timesheetinput6">End Time</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="time" class="form-control" name="endtime">
                                                    <div class="form-control-position">
                                                        <i class="ft-clock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Email</label>
                                                <input type="email"  class="form-control square" placeholder="Email of university or search center " name="email">
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
            $(document).ready(function(){
                <?php if($searchData == NULL) : ?>
                    console.log('nodata');
                <?php else: ?>
                    var names = [<?php echo '"'.implode('","',$searchData).'"'  ?>];
                    $( ".news-default" ).autocomplete({
                        source: names
                    });
                <?php endif ; ?>
                
                $('#my_id').submit(function(e){
                    e.preventDefault();
                    var name = $('#name').val();
                    var xhr = new XMLHttpRequest();
                        xhr.open('GET','<?php echo base_url();?>uasc/check_uasc_name?name='+name);
                        xhr.onload = function()
                        {
                            var result = xhr.responseText;
                            if(result == '0'){
                                var err_msg = document.getElementById('err_post_title');
                                    err_msg.style.display="block";

                                const flashdata = document.getElementById('err_post_title');
                                setInterval(myTimer ,4000);

                                function myTimer() {
                                flashdata.style.display = "none";
                                }

                               
                            }else{
                                var data = new FormData(document.getElementById("my_id"));
                                    $.ajax({
                                      url : "<?php echo base_url(); ?>uasc/createNewUasc",    
                                        type:"post",
                                        data:data,
                                        processData:false,
                                        contentType:false,
                                        cache:false,
                                        success : function(data) {
                                            console.log('done');
                                            window.location.href = "<?php echo base_url(); ?>uasc/editUasc";
                                        },
                                        error: function(xhr, status, error) {
                                            console.log(xhr.responseText);
                                        }
                                    });
                            }
                            
                        }
                        xhr.send();
                })
            })
    </script>