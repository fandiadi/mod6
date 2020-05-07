<?php
class CityModel extends CI_Model{
    function getCity(){
        return $this->db->get("city");
    }
    function getCityArray(){
        return $this->db->get("city")->result_array();
    }

    function insertCity() {
        $city = array(
            "Name" => $this->input->post("nama"),
            "CountryCode" => $this->input->post("code"),
            "District" => $this->input->post("area"),
            "Population" => $this->input->post("populasi"),
        );
        return $this->db->insert('City', $city);
    }

    function getCityById($id){
        $this->db->where("ID",$id);
        return $this->db->get('City');
    } 

    function updateCity($id){
        $city = array(
            "Name" => $this->input->post("name"),
            "CountryCode" => $this->input->post("code"),
            "District" => $this->input->post("area"),
            "Population" => $this->input->post("populasi")
        );
        $this->db->where("ID",$id);
        return $this->db->update("City",$city);
    } 

    function deleteCity($id){
        $this->db->where("ID",$id);
        return $this->db->delete("City");
    } 
       
}
?>