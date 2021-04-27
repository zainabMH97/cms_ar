<?php 
    class Tender_model extends CI_Model {
        public function  __construct(){
            $this->load->database();
        }

        public function create_tender(){
            $data = array(
                'di_name' => clean_input($this->input->post('name_directorate')),
                'tender_subject' => clean_input($this->input->post('tender')),
                'tender_number' => clean_input($this->input->post('tender_no')),
                'tender_open' => clean_input($this->input->post('date_opened')),
                'tender_close' => clean_input($this->input->post('date_closed')), 
                'tender_info' => clean_input($this->input->post('info')),
                'admin_id' => $this->session->userdata('admin_id')
            );

            $this->db->insert('tender', $data);
        }

       
       public function fetch_tender_all(){
            $active = 1;
            $sql = 'SELECT tender_id,di_name,tender_subject,tender_number,tender_open,tender_close,tender_info FROM tender where active = :active';
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


        public function fetch_tender_By_id($id){
            $active = 1;
            $sql = 'SELECT tender_id,di_name,tender_subject,tender_number,tender_open,tender_close,tender_info FROM tender where active = :active and tender_id = :id';
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

        public function update_tender_info($id){
                $data = array( 
                    'di_name' => clean_input($this->input->post('name_directorate')),
                    'tender_subject' => clean_input($this->input->post('tender')),
                    'tender_number' => clean_input($this->input->post('tender_no')),
                    'tender_open' => clean_input($this->input->post('date_opened')),
                    'tender_close' => clean_input($this->input->post('date_closed')), 
                    'tender_info' => clean_input($this->input->post('info')),
                );
                $this->db->update('tender', $data,array('tender_id' => $id));
        }

        public function deleteTender($id){
            $active = 0;
            $sql = "UPDATE tender SET  active = :active where tender_id = :tender_id LIMIT 1";
            $stmt = $this->db->conn_id->prepare($sql);
            $stmt->execute([':tender_id' => $id,':active' => $active]);
        }

    }