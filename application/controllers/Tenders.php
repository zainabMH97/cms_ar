<?php

class Tenders extends CI_Controller {

    public function addTender(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $this->load->view('templates/header.php'); 
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('tender/addTender');   
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }
    public function editTender(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){
                $data['tender'] = $this->tender_model->fetch_tender_all();
                $this->load->view('templates/header.php');
                $this->load->view('templates/nav.php');
                $this->load->view('templates/side.php');
                $this->load->view('tender/editTender',$data);
                $this->load->view('templates/footer.php');
            }else{
                $this->load->view('access_denied/accessDenide.php');
            }
            
        }else{
            $this->load->view('admin/login.php');
        }
    }

    public function createNewTender(){
        $this->tender_model->create_tender();
        setFlashData('alert-success','Tender Added Successfuly','tenders/addTender');
    }


    public function editTenderInfo($tender_id){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' ||$this->session->userdata['admin_type'] === 'subroot'){
                $data['info'] = $this->tender_model->fetch_tender_By_id(clean_input($tender_id));
                if($data['info']){
                    $this->load->view('templates/header.php');
                    $this->load->view('templates/nav.php');
                    $this->load->view('templates/side.php');
                    $this->load->view('tender/editTenderInfo',$data);
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

    public function updateTenderInfo(){
        if(isLoggedIn()){
            if($this->session->userdata['admin_type'] === 'main_admin' || $this->session->userdata['admin_type'] === 'catroot' || $this->session->userdata['admin_type'] === 'subroot'){

                    $this->tender_model->update_tender_info($this->input->post('id'));
                
                    setFlashData('alert-success','Updated Successfuly','tenders/editTender');
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