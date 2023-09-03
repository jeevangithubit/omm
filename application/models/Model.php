<?php
class Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        //for connecting to database
        $this->load->database();
    }
    function save($tablenm,$data)
    {
       $n= $this->db->insert('entry' , $data);
       return $n;
    }
    public function getarraybyquery($query){
        $result=$this->db->query($query);
        return $result->result_array();
    }
    // data insert
    public function update( $data){ 
    $this->db->where('id',$id);
        $n=$this->db->update('entry',$data);
        return $n;
}

public function do_delete($table, $id){
     $this->db->where('id', $id);
        $n=$this->db->delete($table);
        return $n;
}

// public function login($username, $password){
//             $query = $this->db->get_where('entry', array('username'=>$username, 'password'=>$password));
//             return $query->row_array();
//         }

public function isvalidate($username,$password)
{
    $q=$this->db->whare(['username'=>$username,'password'=>$password])
    ->get('entry');
    if($q->num_rows())
    {
      return true;  
    }
    else
    {
        return false;
    }
}
}