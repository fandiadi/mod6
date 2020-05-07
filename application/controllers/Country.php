<?php
class Country extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("CountryModel", "", TRUE);
    }

    public function index() {
        $data['country'] = $this->CountryModel->getCountry();
        $this->load->view("country", $data);
    }

    public function tambah() {
        $this->load->view("country_tambah");
    }

    public function prosesTambah() {
        if ($this->CountryModel->insertCountry()) {
            redirect(site_url('Country'));
        } else {
            redirect(site_url('country/tambah'));
        }
    }

    public function update($code){
        $data['country'] = $this->CountryModel->getCountryById($code)->row();
        $this->load->view("country_update",$data);
    }

    public function prosesUpdate($code){
        if($this->CountryModel->updateCountry($code)){
            redirect(site_url("country"));
        }else{
            redirect(site_url("country/update/$code"));
        }
    }

    public function hapus($code){
        $this->CountryModel->deleteCountry($code);
        redirect(site_url("country"));
    }
}
?>