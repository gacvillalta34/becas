<?php
    class tabla_2021 extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_tabla_2021");
        }
	}		
     ?>