
<?php
class register_model extends CI_Model{
function __construct() {
parent::__construct();
}

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('form', $data);
return 1;
}

function all_users()
{
  $this->db->select('*');
  $this->db->from('form');
  $result = $this->db->get();
  return $result->result();
}
}
?>