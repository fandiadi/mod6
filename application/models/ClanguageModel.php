<?php
class CLanguageModel extends CI_Model{
    function getLanguage(){
        $query = "SELECT countrylanguage.CountryCode, country.Name,countrylanguage.Language FROM countrylanguage JOIN country ON countrylanguage.CountryCode = country.Code";
        return $this->db->query($query)->result_array();
    }
}
?>