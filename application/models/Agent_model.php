<?php 
    class agent_model extends CI_Model {
        public function  __construct(){
            $this->load->database();
        }

        public function create_new_agent($post_image,$post_cv,$data){
            $data = array(
                'tb_img' => $post_image , 
                'tb_name' => $data['name'],
                'tb_info' => $data['info'],
                'tb_cv' => $post_cv,
                'tb_num1' => $data['number1'],
                'tb_num2' => $data['number2'],
                'tb_email' => $data['email'],
                'tb_type'  => $data['type'],
            );

            $this->db->insert('agents_consultant', $data);
        }

        public function fetch_all(){
            $active = 1;
            $sql = 'SELECT id,tb_img,tb_name,tb_info,tb_num1,tb_num2,tb_email,tb_type  FROM agents_consultant where active = :active';
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

        public function fetch_agent_By_id($id){
            $active = 1;
            $sql = 'SELECT id,tb_img,tb_name,tb_info,tb_num1,tb_num2,tb_email,tb_type  FROM agents_consultant where active = :active and id = :id limit 1';
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

        public function update_agent($id,$post_image,$post_cv,$data){
           if($post_cv == null and $post_image == null){
                $data = array( 
                    
                    'tb_name' => $data['name'],
                    'tb_info' => $data['info'],
                    'tb_num1' => $data['number1'],
                    'tb_num2' => $data['number2'],
                    'tb_email' => $data['email'],
                    'tb_type'  =>$data['type'],
                );
                $this->db->update('agents_consultant', $data,array('id' => $id));
           }elseif($post_image != null and $post_cv == null){
                $data = array( 
                    'tb_img'  => $post_image,  
                    'tb_name' => $data['name'],
                    'tb_info' => $data['info'],
                    'tb_num1' => $data['number1'],
                    'tb_num2' => $data['number2'],
                    'tb_email' => $data['email'],
                    'tb_type'  =>$data['type']
                );
                $this->db->update('agents_consultant', $data,array('id' => $id));
           }elseif($post_image == null and $post_cv != null){
                $data = array( 
                    'tb_cv'  => $post_cv,  
                    'tb_name' => $data['name'],
                    'tb_info' => $data['info'],
                    'tb_num1' => $data['number1'],
                    'tb_num2' => $data['number2'],
                    'tb_email' => $data['email'],
                    'tb_type'  =>$data['type']
                );
                $this->db->update('agents_consultant', $data,array('id' => $id));
           }else{
                $data = array(
                    'tb_img' => $post_image,
                    'tb_cv'  => $post_cv,  
                    'tb_name' => $data['name'],
                    'tb_info' => $data['info'],
                    'tb_num1' => $data['number1'],
                    'tb_num2' => $data['number2'],
                    'tb_email' => $data['email'],
                    'tb_type'  =>$data['type']
                );
                $this->db->update('agents_consultant', $data,array('id' => $id));
           }
                
        }

        public function fetch_agents(){
            $active = 1;
            $type = 'agent';
            $sql = 'SELECT id,tb_img,tb_name,tb_info,tb_num1,tb_num2,tb_email,tb_type,tb_cv  FROM agents_consultant where active = :active and tb_type = :type';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':type'=>$type,':active' => $active]);
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
        public function fetch_consultant(){
            $active = 1;
            $type = 'consultant';
            $sql = 'SELECT id,tb_img,tb_name,tb_info,tb_num1,tb_num2,tb_email,tb_type,tb_cv  FROM agents_consultant where active = :active and tb_type = :type';
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':type'=>$type,':active' => $active]);
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