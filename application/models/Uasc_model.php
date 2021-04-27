<?php 
    class Uasc_model extends CI_Model {
        public function  __construct(){
            $this->load->database();
        }

        public function create_uasc($data,$post_image){
            $data = array(
                'uasc_img' => $post_image , 
                'uasc_name' => $data['name'],
                'uasc_info' => $data['info'],
                'uasc_location' => $data['location'],
                'uasc_geo_location' => $data['geo_location'] , 
                'uasc_number' => $data['number'],
                'uasc_email' => $data['email'],
                'uasc_work_time_start' => $data['starttime'],
                'uasc_work_time_end' => $data['endtime'] , 
                'uasc_day_of_work' => $data['day'],
                'type' => $data['type'],
                'admin_id' => $data['admin_id']
            );

            $this->db->insert('uasc', $data);
        }

        public function checkName($data){
            return $this->db->get_where('uasc',array('uasc_name'=>$data));
        }

        public function fetch_uasc(){
            $active = 1;
           $sql = 'SELECT uasc_name FROM uasc where active = :active';
           $stmt = $this->db->conn_id->prepare($sql);
           $stmt->execute([':active'=>$active]);
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
       
       public function fetch_uasc_all(){
            $active = 1;
            $sql = 'SELECT uasc_name,uasc_img,uasc_info,uasc_location,uasc_geo_location,uasc_number,uasc_email,uasc_work_time_start,uasc_work_time_end,uasc_day_of_work,uasc_id,type  FROM uasc where active = :active';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':active'=>$active]);
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


        public function fetch_uasc_By_id($id){
            $active = 1;
            $sql = 'SELECT uasc_name,uasc_img,uasc_info,uasc_location,uasc_geo_location,uasc_number,uasc_email,uasc_work_time_start,uasc_work_time_end,uasc_day_of_work,uasc_id,type  FROM uasc where active = :active and uasc_id = :id limit 1';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':id'=>$id,':active' => $active]);
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

        public function update_uasc_info($id,$img,$data){
            if($img == NULL){
                $data = array( 
                    'uasc_name' => $data['name'],
                    'uasc_info' => $data['info'],
                    'uasc_location' => $data['location'],
                    'uasc_geo_location' => $data['geo_location'] , 
                    'uasc_number' => $data['number'],
                    'uasc_email' => $data['email'],
                    'type' => $data['type'],
                    'uasc_work_time_start' => $data['starttime'],
                    'uasc_work_time_end' => $data['endtime'] , 
                    'uasc_day_of_work' => $data['day'],
                    'admin_id' => $data['admin_id']
                );
                $this->db->update('uasc', $data,array('uasc_id' => $id));
                
            }else{
                $data = array( 
                    'uasc_img' => $img ,
                    'uasc_name' => $data['name'],
                    'uasc_info' => $data['info'],
                    'type' => $data['type'],
                    'uasc_location' => $data['location'],
                    'uasc_geo_location' => $data['geo_location'] , 
                    'uasc_number' => $data['number'],
                    'uasc_email' => $data['email'],
                    'uasc_work_time_start' => $data['starttime'],
                    'uasc_work_time_end' => $data['endtime'] , 
                    'uasc_day_of_work' => $data['day'],
                    'admin_id' => $data['admin_id']
                );
                $this->db->update('uasc', $data,array('uasc_id' => $id));
            }
        }

        public function deleteUasc($id){
            $active = 0;
            $sql = "UPDATE uasc SET  active = :active where uasc_id = :uasc_id LIMIT 1";
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':uasc_id' => $id,':active' => $active]);
        }

        public function fetch_all_un(){
            $active = 1;
            $type = 'un';
            $sql = 'SELECT uasc_name,uasc_img,uasc_info,uasc_location,uasc_geo_location,uasc_number,uasc_email,uasc_work_time_start,uasc_work_time_end,uasc_day_of_work,uasc_id,type  FROM uasc where active = :active and type = :type';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':active'=>$active,':type'=>$type]);
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

        public function fetch_all_sc(){
            $active = 1;
            $type = 'sc';
            $sql = 'SELECT uasc_name,uasc_img,uasc_info,uasc_location,uasc_geo_location,uasc_number,uasc_email,uasc_work_time_start,uasc_work_time_end,uasc_day_of_work,uasc_id,type  FROM uasc where active = :active and type = :type';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':active'=>$active,':type'=>$type]);
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

    }