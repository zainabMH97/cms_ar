<?php

class HomeNews extends CI_Controller {

    public function newsTerm($id){
        $ajax = 0;
        if (!$termPosts =$this->search_model->fetch_data_viewNews(clean_input($id,'number'))) {
                return returnError(000, "Some thing was wrong please try later", $ajax);
            } else {
                return returnData("data", $termPosts, $msg = "ok", $ajax);
            }
    }

}
