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

                            <h2>Edit University or Seaarch Center</h2>

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
                            
                            <div class="table-responsive ">
                                <table class="table table-bordered table-striped" id="post_data">
                                <thead>
                                    <tr>
                                        <td>name</td>
                                        <td>logo</td>
                                        <td>location</td>
                                        <td>email</td>
                                        <td>number</td>
                                        <td>geo_location</td>
                                        <td>days of week</td>
                                        <td>work start time</td>
                                        <td>work end time</td>
                                        <td>controls</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($uasc as $uc) : ?>
                                        <tr>
                                            <td><?php echo $uc['uasc_name'] ; ?></td>
                                            <td><img src="<?php echo base_url();?>assets/img/news/<?php echo $uc['uasc_img'] ; ?>" class="img-thumbnail" alt="Responsive image"></td> 
                                            <td><?php echo $uc['uasc_location'] ; ?></td>
                                            <td><?php echo $uc['uasc_email'] ; ?></td>
                                            <td><?php echo $uc['uasc_number'] ; ?></td>
                                            <td><a href = '<?php echo $uc['uasc_geo_location'] ; ?>'>Location</a></td>
                                            <td><?php echo $uc['uasc_day_of_work'] ; ?></td>
                                            <td><?php echo $uc['uasc_work_time_start'] ; ?></td>
                                            <td><?php echo $uc['uasc_work_time_end'] ; ?></td>
                                            <td style="width:20%;">
                                                <a href="<?php echo base_url(); ?>uasc/editUascInfo/<?php echo $uc['uasc_id'] ; ?>" class="btn btn-outline-primary"> <?php echo $this->lang->line('category-edit-control-edit'); ?></a>
                                                <a href="<?php echo base_url();?>uasc/deletebtn/<?php echo $uc['uasc_id'] ; ?>" class="btn btn-outline-danger"><?php echo $this->lang->line('category-edit-control-delete'); ?></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Analytics map based session -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#post_data').DataTable({ 
        responsive: true, 
        "language": {
            <?php if($this->session->userdata['site_lang'] == 'english') :?>
                search: "Search in table:"
               
            <?php else:?>
                search: "ألبحث :",
                paginate: {
                    first:      "ألأول",
                    previous:   "ألسابق",
                    next:       "ألأقدم",
                    last:       "ألأخير"
                }
               
            <?php endif ;?>
        }
      });  
 });  
 </script>  