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
                            
                            <h2>Add New Tender</h2>   

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
                            
                                <?php echo form_open_multipart('tenders/createNewTender','id="my_id"'); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput1">Directorate Name</label>
                                                <div class="alert alert-warning alert-dismissible fade show" id="err_post_title" style="display:none">This Post Already Exist</div>
                                                <input type="text" class="form-control news-default" name="name_directorate" id="name"  placeholder="Enter Directorate Name" autocomplete="off" required >
                                                <div id="match-list"></div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput2">Tender Subject</label>
                                                <input type="text" class="form-control square" placeholder="Enter Tender Subject" name="tender">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput3">Tender number</label>
                                                <input type="text" class="form-control square"  placeholder="Tender number" name="tender_no">
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput3">Date Opened</label>
                                                    <input type="date" id="issueinput3" class="form-control" name="date_opened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="issueinput4">Date closed</label>
                                                    <input type="date" id="issueinput4" class="form-control" name="date_closed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12 mb-2">
                                                <label for="donationinput4">Additional Info </label>
                                                <textarea id="" class="form-control square" name="info" rows="4" cols="50" placeholder="Enter Additional Info"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" id= "submitForm">Submit</button>
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