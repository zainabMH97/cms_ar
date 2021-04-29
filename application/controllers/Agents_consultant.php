<?php

class Agents_consultant extends CI_Controller {

    public function addNewAgent(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $this->load->view('templates/header.php'); 
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('agents_consultant/addNew');   
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }
    public function edit_agent(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $data['agents'] = $this->agent_model->fetch_all();
                $this->load->view('templates/header.php');
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('agents_consultant/edit_agent',$data);
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');  
        }
    }

    public function createNewAgent(){
             //upload images/////////////////////////////////////////////////////////
                $config['upload_path'] = './assets/img/agents_consultant/';
                $config['allowed_types'] = 'gif|jpg|png|mp4|pdf';
                $config['max_size'] = '10000';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload',$config);
                //////////////////////img//////////////
                if(!empty($_FILES['userfile']['name'])){
                    $this->upload->do_upload('userfile');
                    $data1 = $this->upload->data();
                    $post_image = $data1['file_name'];
                }else{
                    $post_image = 'noimg.png';
                }

                ///////////////////cv//////////////////
                if(!empty($_FILES['cv']['name'])){
                    $this->upload->do_upload('cv');
                    $data2 = $this->upload->data();
                    $post_cv = $data2['file_name'];
                }else{
                    $post_cv = Null;
                }
                 

                //////////////////////////////end upload /////////////////////////////////////

                $data['name'] = clean_input($this->input->post('name'));
                $data['info'] = clean_input($this->input->post('info'));
                $data['number1'] = clean_input($this->input->post('number1'));
                $data['number2'] = clean_input($this->input->post('number2'));
                $data['email'] = clean_input($this->input->post('email'));
                $data['type'] = clean_input($this->input->post('type'));
                $this->agent_model->create_new_agent($post_image,$post_cv,$data);
            
                setFlashData('alert-success','Added Successfuly','agents_consultant/edit_agent');
                //set message 
    }


    public function editAgentInfo($id){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' ||$this->session->userdata['admin_type'] === 'subroot'){
                $data['info'] = $this->agent_model->fetch_agent_By_id(clean_input($id));
                if($data['info']){
                    $this->load->view('templates/header.php');
                    $this->load->view('templates/nav.php');
                    $this->load->view('templates/side.php');
                    $this->load->view('agents_consultant/editAgentInfo',$data);
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

    public function updateAgent(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){

                   //upload images/////////////////////////////////////////////////////////
                $config['upload_path'] = './assets/img/agents_consultant/';
                $config['allowed_types'] = 'gif|jpg|png|mp4|pdf';
                $config['max_size'] = '10000';
                $config['encrypt_name'] = TRUE;

                $this->load->library('upload',$config);
                //////////////////////img//////////////
                if(!empty($_FILES['userfile']['name'])){
                    $this->upload->do_upload('userfile');
                    $data1 = $this->upload->data();
                    $post_image = $data1['file_name'];
                }else{
                    $post_image = Null; 
                }

                ///////////////////cv//////////////////
                if(!empty($_FILES['cv']['name'])){
                    $this->upload->do_upload('cv');
                    $data2 = $this->upload->data();
                    $post_cv = $data2['file_name'];
                }else{
                    $post_cv = Null;
                }

                $data['name'] = clean_input($this->input->post('name'));
                $data['info'] = clean_input($this->input->post('info'));
                $data['number1'] = clean_input($this->input->post('number1'));
                $data['number2'] = clean_input($this->input->post('number2'));
                $data['email'] = clean_input($this->input->post('email'));
                $data['type'] = clean_input($this->input->post('type'));
                $id = clean_input($this->input->post('id'));
                $this->agent_model->update_agent($id,$post_image,$post_cv,$data);
            
                setFlashData('alert-success','update Successfuly','agents_consultant/edit_agent');
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
                $this->tender_model->deleteTender(clean_input($id));
                setFlashData('alert-danger','Deleted Successfuly','tenders/editTender');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

   
}