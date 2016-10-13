<?php

class Site_model extends CI_Model{
    
    function getAll(){
       $q= $this->db->get('test');
       
       if ($q->num_rows()>0){
         foreach ($q->result()as $row){  
             $data[]=$row;
        }
           
      return $data;
       }      
    }   
     
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

