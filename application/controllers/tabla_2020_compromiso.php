<?php
    class tabla_2020_compromiso extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_tabla_compromiso_2020");
        }
	}		
     ?>