<?php

class Index_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getSlide()
    {
        $result = $this->db->selectAll("SELECT * FROM slide WHERE status = 'active'");
        return $result;
    }

}