<?php

class Post extends CI_Controller {

    public function index($url){
        $ajax = 0;
        if (!$termPosts =$this->news_model->fetch_news_By_slug(clean_input($url,'string'))) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $termPosts[0], $msg = "ok", $ajax);
        }
    }

    public function planing(){  
        $data['title'] = 'وزارة التعليم العالي والبحث العلمي';
        $data['latest_news'] = $this->homeView_model->latest_news();
        $data['side_term'] = $this->homeView_model->side_term(); 
        $this->load->view('templates/normail_header',$data);
        $this->load->view('home/office');
        $this->load->view('templates/side_col',$data); 
        $this->load->view('templates/footer_view');  
    }

    public function planing_news($rowno=0){

         // Row per page
         $rowperpage = 12;

         // Row position
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }

        // All records count
        $allcount =$this->homeView_model->planing_sectionCount();

        // Get records
        $users_record = $this->homeView_model->planing_section($rowperpage,$rowno);

        // Pagination Configuration
        $config['base_url'] = base_url().'/post/planing_news';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;

        $config['full_tag_open'] = "<ul>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-no">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-no active"><a href="#/">';
        $config['cur_tag_close'] = '</a></li>';
  
        $config['prev_tag_open'] = '<li class="prev"> ';
        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fal fa-chevron-left"></i>';
        $config['next_tag_open'] = '<li class="next">';
        $config['next_tag_close'] = '</li>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-no">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'last';
        $config['last_tag_open'] = '<li class="page-no">';
        $config['last_tag_close'] = '</li>';

        // Initialize
        $this->pagination->initialize($config);

        // Initialize $data Array
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;

        echo json_encode($data); 
    }
}
