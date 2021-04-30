<?php

class Home extends CI_Controller {

	public function index()
	{
        $data['slider'] = $this->homeView_model->fetchSliders();
        $data['slider_posts'] = $this->homeView_model->fetchSliders_posts();
        $data['news_section'] = $this->homeView_model->fetch_latest_news();
        $data['university_section'] = $this->homeView_model->university_news_section();
        $data['activity_section'] = $this->homeView_model->activity_news_section();
        //$this->benchmark->mark('code_end');

       
        foreach($data['slider'] as $slid){ 
            if($slid['slider_order'] == 1){
                if(!empty($slid['yt_link'])){
                    $data['bg_1'] = $slid['yt_link']; 
                }else{
                    $data['bg_1'] = $slid['post_img'];
                }
                
            } 
            elseif($slid['slider_order'] == 2){
                $data['bg_2'] = $slid['post_img'];
            }
            elseif($slid['slider_order'] == 3){
                $data['bg_3'] = $slid['post_img'];
            }
        }
        if(!isset($data['bg_1'])){
            $data['bg_1'] = 'carousel_1.jpg';
        }
        if(!isset($data['bg_2'])){
            $data['bg_2'] = 'carousel_2.jpg';
        }
        if(!isset($data['bg_3'])){
            $data['bg_3'] = 'carousel_3.jpg';
        }

        foreach($data['slider_posts'] as $slid){
            if($slid['slider_order'] == 1){
                $data['slider_one_title'] = $slid['post_title'];
                $data['slider_one_caption'] = $slid['post_description'];
                if(!empty($slid['yt_link'])) {
                    $data['slider_one_media'] = $slid['yt_link'];
                }else{
                    $data['slider_one_media'] = $slid['post_img'];
                }
                
            }
            elseif($slid['slider_order'] == 2){
                $data['slider_two_title'] = $slid['post_title'];
                $data['slider_two_caption'] = $slid['post_description'];
                $data['slider_two_media'] = $slid['post_img'];
            }
            elseif($slid['slider_order'] == 3){
                $data['slider_three_title'] = $slid['post_title'];
                $data['slider_three_caption'] = $slid['post_description'];
                $data['slider_three_media'] = $slid['post_img'];
            }
        }

        $data['right_news_section_col'] = $data['news_section'][0];
        $data['news_left_section_col'] =array_slice($data['news_section'],1);

        $data['right_university_section_col'] = $data['university_section'][0];
        $data['left_university_section_col'] =array_slice($data['university_section'],1);

        $data['activity_section_one'] = $data['activity_section'][0];
        $data['activity_section_two'] = $data['activity_section'][1];
        $data['activity_section_three'] = $data['activity_section'][2];
        $data['activity_section_foure'] = $data['activity_section'][3];
        $data['activity_section_five'] = $data['activity_section'][4];
        $data['activity_section_six'] = $data['activity_section'][5];
        $data['activity_section_seven'] = $data['activity_section'][6];
        $data['activity_section_eight'] = $data['activity_section'][7];
        $data['activity_section_nine'] = $data['activity_section'][8];
        $data['activity_section_ten'] = $data['activity_section'][9];

       
        $this->load->view('templates/header_view');
        $this->load->view('templates/carousel',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer_view');
       
        // $this->output->cache(0.20);   
    }
    
    public function contact_us(){
        $data['title'] = 'تواصل معنا';
        $this->load->view('templates/normail_header',$data);
        $this->load->view('home/contactus');
        $this->load->view('templates/footer_map'); 
    }

    public function cv(){
        $data['title'] = 'السيرة الذاتية للوزير';
        $this->load->view('templates/normail_header',$data);
        $this->load->view('home/cv');
        $this->load->view('templates/footer_view');
    }

    public function about_ministry(){
        $data['title'] = 'عن الوزارة';  
        $data['title_agent'] = 'وكلاء الوزارة'; 
        $data['title_consultant'] = 'المستشارون';
        $data['agents'] = $this->agent_model->fetch_agents();
        $data['consultant'] = $this->agent_model->fetch_consultant();
        $data['news_section'] = $this->homeView_model->fetch_latest_news();
        $data['right_news_section_col'] = $data['news_section'][0];
        $data['news_left_section_col'] =array_slice($data['news_section'],1);
        $this->load->view('templates/normail_header',$data);
        $this->load->view('home/about_ministry',$data);
        $this->load->view('templates/card_agent',$data);
        $this->load->view('templates/card_consultant',$data);
        $this->load->view('templates/ministry_news',$data);
        $this->load->view('templates/footer_view');
    } 

    
}