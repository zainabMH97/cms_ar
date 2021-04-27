<?php

class Navbar extends CI_Controller {


    public function agents($ajax=0){
        $url = '%d8%a7%d9%84%d9%88%d9%83%d9%84%d8%a7%d8%a1';
        if (!$agents=$this->news_model->fetch_news_By_slug(clean_input($url,'string'))) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $agents[0], $msg = "ok", $ajax);
        }
    }

    public function advisors($ajax=0){
        $url = '%d8%a7%d9%84%d9%85%d8%b3%d8%aa%d8%b4%d8%a7%d8%b1%d9%88%d9%86';
        if (!$agents=$this->news_model->fetch_news_By_slug(clean_input($url,'string'))) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $agents[0], $msg = "ok", $ajax);
        }
    }

    public function OpinionAutherity($ajax=0){
        $url = '%d9%87%d9%8a%d8%a6%d8%a9-%d8%a7%d9%84%d8%b1%d8%a3%d9%8a';
        if (!$agents=$this->news_model->fetch_news_By_slug(clean_input($url,'string'))) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $agents[0], $msg = "ok", $ajax);
        }
    }


    public function ministrySection($url){
        $ajax=0;
        if (!$agents=$this->news_model->fetch_news_By_slug(clean_input($url,'string'))) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $agents[0], $msg = "ok", $ajax);
        }
    }

    public function allUn(){
        if (!$unandsc=$this->uasc_model->fetch_all_un($ajax=0)) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $unandsc[0], $msg = "ok", $ajax);
        }
    }

    public function allsc(){
        if (!$unandsc=$this->uasc_model->fetch_all_sc($ajax=0)) {
            return returnError(000, "Some thing was wrong please try later", $ajax);
        } else {
            return returnData("data", $unandsc[0], $msg = "ok", $ajax);
        }
    }
}