<?php

class Uasc extends CI_Controller {

    public function addUasc(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $uasc = $this->uasc_model->fetch_uasc();
                if(!empty($uasc)){
                    $data['searchData'] = $this->manageSearchData($uasc);
                }else{
                    $data['searchData'] = NULL;
                }
                $this->load->view('templates/header.php');
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('uasc/addUasc',$data);   
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }
    public function editUasc(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $data['uasc'] = $this->uasc_model->fetch_uasc_all();
                $this->load->view('templates/header.php');
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('uasc/editUasc',$data);
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

    public function createNewUasc(){
        $path = $_FILES['userfile']['name'];
        if(empty($_FILES['userfile']['name'])){
            $post_image = Null;
        }else{
            //Declaring Variables
            $path = $_FILES['userfile']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $file_new_name=md5(date("Y/m/d").date("h:i:sa").$_FILES['userfile']['name']).'.'.$ext;
            
            /*
            How we can get mb from bytes
            (mb*1024)*1024
        
            In my case i'm 10 mb limit
            (10*1024)*1024
            */


        $config['upload_path'] = './assets/img/news/';
        $config['allowed_types'] = 'gif|jpg|png|mp4|pdf';
        $config['file_name'] = $file_new_name;
        $config['max_size'] = '6000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload()){
            $errors = array('error' => $this->upload->display_errors());
            $post_image = 'noimage.png';
        }else{
            $data = array('upload_data' => $this->upload->data());
            $post_image = $file_new_name;
        }
    }

        $data['name'] = clean_input($this->input->post('name'));
        $data['location'] = clean_input($this->input->post('location'));
        $data['geo_location'] = clean_input($this->input->post('geo_location'));
        $data['info'] = clean_input($this->input->post('info'));
        $data['admin_id'] = $this->session->userdata('admin_id');
        $data['number'] = clean_input($this->input->post('number'));
        $data['day'] = clean_input($this->input->post('day'));
        $data['starttime'] = clean_input($this->input->post('starttime'));
        $data['endtime'] = clean_input($this->input->post('endtime'));
        $data['email'] = clean_input($this->input->post('email'));
        $data['type'] = clean_input($this->input->post('type'));
        $addPost  = $this->uasc_model->create_uasc($data,$post_image);
        echo 'run';
    }

    public function check_uasc_name(){
        $title = $this->input->get('name');
        $checkname = $this->uasc_model->checkName($title);
        if ($checkname->num_rows() > 0) {
             echo '0';
        }else{
            echo '1'; 
        }
    }

    public function editUascInfo($uasc_id){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' ||$this->session->userdata['admin_type'] === 'subroot'){
                $data['info'] = $this->uasc_model->fetch_uasc_By_id(clean_input($uasc_id));
                if($data['info']){
                    $this->load->view('templates/header.php');
                    $this->load->view('templates/nav.php');
                    $this->load->view('templates/side.php');
                    $this->load->view('uasc/editUascInfo',$data);
                    $this->load->view('templates/footer.php');
                }else{
                    die('no id in this info');
                }
                
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

    public function updateUascInfo(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                 //upload images/////////////////////////////////////////////////////////
                 if(empty($_FILES['userfile']['name'])){
                    $post_image = Null;
                }else{
                        // Declaring Variables
                        $path = $_FILES['userfile']['name'];
                        $ext = pathinfo($path, PATHINFO_EXTENSION);
                        $file_new_name=md5(date("Y/m/d").date("h:i:sa").$_FILES['userfile']['name']).'.'.$ext;
                    
                        /*
                        How we can get mb from bytes
                        (mb*1024)*1024
                    
                        In my case i'm 10 mb limit
                        (10*1024)*1024
                        */

                        $config['upload_path'] = './assets/img/news/';
                        $config['allowed_types'] = 'gif|jpg|png|mp4|pdf';
                        $config['file_name'] = $file_new_name;
                        $config['max_size'] = '6000';
                        $config['max_width'] = '2000';
                        $config['max_height'] = '2000';
                   

                        $this->load->library('upload',$config);
                        if(!$this->upload->do_upload()){
                            $errors = array('error' => $this->upload->display_errors());
                            $post_image = 'noimage.png';
                        }else{
                            $data = array('upload_data' => $this->upload->data());
                            $post_image = $file_new_name;
                        }
                    }

                    //////////////////////////////end upload image /////////////////////////////////////

                    $data['name'] = clean_input($this->input->post('name'));
                    $data['location'] = clean_input($this->input->post('location'));
                    $data['geo_location'] = clean_input($this->input->post('geo_location'));
                    $data['info'] = clean_input($this->input->post('info'));
                    $data['admin_id'] = $this->session->userdata('admin_id');
                    $data['number'] = clean_input($this->input->post('number'));
                    $data['day'] = clean_input($this->input->post('day'));
                    $data['starttime'] = clean_input($this->input->post('starttime'));
                    $data['endtime'] = clean_input($this->input->post('endtime'));
                    $data['email'] = clean_input($this->input->post('email'));
                    $data['type'] = clean_input($this->input->post('type'));

                    $this->uasc_model->update_uasc_info($this->input->post('id'),$post_image,$data);
                
                    setFlashData('alert-success','Updated Successfuly','uasc/editUasc');
                    //set message 
                    
                         
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

    public function deletebtn($id){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $this->uasc_model->deleteUasc(clean_input($id));
                setFlashData('alert-danger','Deleted Successfuly','uasc/editUasc');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

    public function manageSearchData($data){
        $search = [];
        foreach($data as $dt){
            array_push($search,$dt['uasc_name']);
        }
        return $search;
    }
}