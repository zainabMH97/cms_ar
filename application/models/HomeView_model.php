<?php 
    class HomeView_model extends CI_Model {
        public function  __construct(){
            $this->load->database();
        }

        public function fetchSliders(){
            $active = 1;
            $term_id = 0;
            $status = 'publish';
            $post_title = 'bg';
            $sql = 'SELECT 
            post.post_id,post_title,post_img,post.active,post_description,post_date,status,slider_order,yt_link
        FROM
            mohesr.post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term.term_id = term_relation.term_id where term.term_id = :term_id and post.active=:active and post.status = :status and post_title = :post_title';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':post_title'=>$post_title]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function fetchSliders_posts(){
            $active = 1;
            $term_id = 0;
            $status = 'publish';
            $post_title = 'bg';
            $sql = 'SELECT 
            post.post_id,post_title,post_img,post.active,post_description,post_date,status,slider_order,yt_link
        FROM
            mohesr.post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term.term_id = term_relation.term_id where term.term_id = :term_id and post.active=:active and post.status = :status and post_title != :post_title';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':post_title'=>$post_title]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function fetch_latest_news(){
            $active = 1;
            $limit = 5;
            $term_id = 6;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
        FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
        where 
        term.term_id = :term_id and  post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc limit :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function university_news_section(){
            $active = 1;
            $limit = 5;
            $term_id = 55;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
            FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
            where 
            term.term_id = :term_id and  post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc limit :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function activity_news_section(){
            $active = 1;
            $limit = 10;
            $term_id = 80;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
            FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
            where 
            term.term_id = :term_id and  post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc limit :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function planing_section($limit,$offset){
            $active = 1;
            $limit = 12;
            $term_id = 47;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
            FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
            where 
            term.term_id = :term_id and  post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc limit :offset , :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,':offset'=>$offset,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function planing_sectionCount(){
            $active = 1;
            $limit = 12;
            $term_id = 47;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
            FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
            where 
            term.term_id = :term_id and  post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':term_id'=>$term_id,':active' => $active,':status'=>$status,]);
            $row = $stmt->rowCount();
            return $row;
        }

        /////////////////////////////////////////////////////////side_col ///////////////////////////////

        public function latest_news(){
            $active = 1;
            $limit = 7;
            $status = 'publish';
            $sql = 'SELECT 
            term.term_id,term_title,post.post_id,post_title,post_slug,post_description,post_img,post_date,number_of_views
        FROM
            post
                INNER JOIN
            term_relation ON term_relation.post_id = post.post_id
                INNER JOIN
            term ON term_relation.term_id = term.term_id
        where 
             post_img IS NOT NULL and post.active = :active and post.status = :status order by post.post_id desc limit :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':active' => $active,':status'=>$status,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($row){
                $result = [];
                foreach($row as $r){
                    $arr_key = array_keys($r);
                    $arr_val = decode_clean_input(array_values($r));
                    $arr_new_val = array_combine($arr_key, $arr_val);
                    array_push($result,$arr_new_val);
                }
                return $result;
            }else{
                return $row = [];
            }
        }

        public function side_term(){
            $active = 1;
            $limit = 12;
            $tax = 'tag';
            $parent = 0 ;
            $sql = 'SELECT 
            term.term_id as term_id,term_title
        FROM
            term
                INNER JOIN
                term_taxonomy
             ON term_taxonomy.term_id = term.term_id
        where 
             term.active = :active and taxnomy = :tax and parent = :parent order by term.term_id desc limit :limit';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':active' => $active,':tax'=>$tax,':parent'=>$parent,':limit'=>$limit]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }
        

    }