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

    function get_comp_dsr(){

     //  $cm = "Computer";
      /*
       //$this->db->select('Product_ID , qty_distributed , qty_remaining , date_distributed , head_initials	 , stamp_of_initials');
       $query = $this->db->get('cs_distribution');
       $this->db->where('qty_distributed = 3');
       return $query->result();
      */

      $head = "Computer";
      $this->db->select("*");
      $this->db->from("cs_distribution");
      $this->db->where('head_initials', $head);
      $query = $this->db->get();
      return $query->result();

       //return  $this->db->where('head_initials' , $cm)->get('cs_distribution')->row_array(); // select * from users where user_id= ? 

       /*
       $this->db->where('qty_distributed', 3);
       return $this->db->get('cs_distribution');
       */
  }
  
}
  
?>