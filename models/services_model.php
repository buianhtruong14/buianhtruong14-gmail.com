<?php

class Services_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getSlide()
    {
        $result = $this->db->selectAll("SELECT * FROM slide");
        return $result;
    }

}