<?php

class SlideModel extends DB{
    public function getSlide(){
        $qr = 'SELECT * FROM slide';
        return mysqli_query($this->conn,$qr);
    }
}

?>