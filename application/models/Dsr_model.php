
<?php 
class Dsr_model extends CI_Model {
     /*View*/
    function display_master_cs()
    {
      $query=$this->db->get("master_cs");
      return $query->result();
    }

    function display_cs_distribution()
    {
      $query=$this->db->get("cs_distribution");
      return $query->result();
    }
     
}
  
?>