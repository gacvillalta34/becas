<?php
    class tabla_2019 extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_tabla_2019");
        }
	}		
     ?>