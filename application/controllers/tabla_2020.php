<?php
    class tabla_2020 extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_tabla_2020");
        }
	}		
     ?>