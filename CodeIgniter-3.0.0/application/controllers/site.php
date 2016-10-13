<?php
class site extends CI_Controller {

   function index() {
   $this->load->model('site_model');
   $data['records']=$this->site_model->getAll();
   $this->load->view('home',$data);
}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

