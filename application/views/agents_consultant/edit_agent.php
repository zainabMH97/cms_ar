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

                            <h2>Edit Agents Or Consultant</h2>

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
                                        <td>information</td>
                                        <td>mobile Number</td>
                                        <td>Second Number</td>
                                        <td>Email</td>
                                        <td>controls</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($agents as $agent) : ?>
                                        <tr>
                                            <td><?php echo $agent['tb_name'] ; ?></td>
                                            <td><img src="<?php echo base_url();?>assets/img/news/<?php echo $agent['tb_img'] ; ?>" class="img-thumbnail" alt="Responsive image"></td> 
                                            <td><?php echo $agent['tb_info'] ; ?></td>
                                            <td><?php echo $agent['tb_num1'] ; ?></td>
                                            <td><?php echo $agent['tb_num2'] ; ?></td>
                                            <td><?php echo $agent['tb_email'] ; ?></td>
                                            <td style="width:20%;">
                                                <a href="<?php echo base_url(); ?>agents_consultant/editAgentInfo/<?php echo $agent['id'] ; ?>" class="btn btn-outline-primary"> <?php echo $this->lang->line('category-edit-control-edit'); ?></a>
                                                <a href="<?php echo base_url();?>agents_consultant/deletebtn/<?php echo $agent['id'] ; ?>" class="btn btn-outline-danger"><?php echo $this->lang->line('category-edit-control-delete'); ?></a>
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