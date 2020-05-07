<?php
class CountryModel extends CI_Model {
    function getCountry() {
        return $this->db->get("country");
    }

    function insertCountry() {
        $country = array(
            "Code" => $this->input->post("code"),
            "Name" => $this->input->post("name"),
            "Region" => $this->input->post("region"),
        );
        return $this->db->insert('Country', $country);
    }

    public function getCountryById($code) {
        $this->db->where("Code", $code);
        return $this->db->get("Country");
    }

    function updateCountry($code){
        $country = array(
            "Name" => $this->input->post("name"),
            "Region" => $this->input->post("region"),
        );
        $this->db->where("Code", $code);
        return $this->db->update("Country", $country);
    }

    function deleteCountry($code){
        $this->db->where("Code", $code);
        return $this->db->delete("Country");
    }
}
?>