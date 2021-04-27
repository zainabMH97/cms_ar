<style>
.center {
  text-align: center;
  margin-bottom: 1em;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #1E9FF2;
  color: white;
  border: 1px solid #1E9FF2;
}
th {
    background: white;
    position: sticky;
    top: 0;
  
  }

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
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

                            <h2><?php echo $this->lang->line('news-edit-newtitle'); ?></h2>  

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
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="news_data" style="height: 35em !important;display: block;overflow: scroll;">
                                    <thead >
                                        <tr>
                                            <th width="278px"><?php echo $this->lang->line('news-edit-title'); ?></th>
                                            <th><?php echo $this->lang->line('news-edit-link'); ?></th>
                                            <th><?php echo $this->lang->line('news-edit-status'); ?></th>
                                            <th><?php echo $this->lang->line('news-edit-Controls'); ?></th>
                                            
                                        </tr>
                                    </thead>
                                
                                <tbody >
                            
                                    <?php foreach($news as $new) : ?>
                                        <tr>
                                            <td><?php echo $new['post_title'] ; ?></td>
                                            <td><a href = '<?php echo base_url();?>posts/<?php echo $new['post_slug']; ?>' ><?php echo base_url().urldecode($new['post_slug']) ; ?></a></td>
                            
                                            <?php if($this->session->userdata('admin_type') == 'main_admin' || $this->session->userdata('admin_type') === 'catroot') :?>
                                                <td>
                                                    <?php if ($new['status'] == 'publish'):?>
                                                        <a href="<?php echo base_url(); ?>UncategorizeNews/Uncategorize_changeStatusToDraft/<?php echo $new['p_id'] ; ?>" class="btn btn-outline-info"> <?php echo $this->lang->line('news-edit-ststus-publish'); ?></a>
                                                    <?php elseif($new['status'] == 'draft') :?>
                                                        <a href="<?php echo base_url(); ?>UncategorizeNews/Uncategorize_changeStatusToPublish/<?php echo $new['p_id'] ; ?>" class="btn btn-outline-danger"> <?php echo $this->lang->line('news-edit-ststus-Draft'); ?></a>
                                                    <?php else :?> 
                                                        <p> null </p>
                                                    <?php endif ; ?>
                                                </td>
                                            <?php else :?>
                                                <td>
                                                    <p class="text-danger"><?php echo $new['status'];?> </p>
                                                </td>
                                            <?php endif;?>


                                            <td>
                                                <a href="<?php echo base_url(); ?>news/editNewsInfo/<?php echo $new['p_id'] ; ?>" class="btn btn-outline-info" style="display:block;"> <?php echo $this->lang->line('news-edit-control-edit'); ?></a> <br>
                                                <a href="<?php echo base_url();?>UncategorizeNews/deletebtn/<?php echo $new['p_id'] ; ?>" class="btn btn-outline-danger" style="display:block;"> <?php echo $this->lang->line('news-edit-control-delete'); ?> </a>
                                            </td>


                                            
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                </table>
                                <div class=" col-md-12 text-center center">
                                    <?php echo $this->pagination->create_links(); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END: Content-->  
    

    <script type="text/javascript" language="javascript" >  

 </script>  