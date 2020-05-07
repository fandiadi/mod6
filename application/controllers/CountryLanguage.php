<?php
    class CountryLanguage extends CI_Controller{
        public function index(){
            $this->load->model("CLanguageModel","",TRUE);
            $data['countryL'] = $this->CLanguageModel->getLanguage();
            $this->load->view("countryL",$data);
        }
    }
?> 