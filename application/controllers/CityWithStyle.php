<?php
    class CityWithStyle extends CI_Controller{
        public function index(){
            $this->load->model("CityModel","",TRUE);
            $data['city'] = $this->CityModel->getCityArray();
            $this->load->view("citywithstyle",$data);
        }
    }
?> 