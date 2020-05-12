<?php

class Admin_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function run()
    {
        $sth = $this->db->prepare("SELECT id FROM users WHERE 
                    email = :email AND password = MD5(:password)");
        $sth->execute(array(
            ':email'    => $_POST['email'],
            ':password'  => $_POST['password']
        ));

        // $data = $sth->fetchAll();
        $count = $sth->rowCount();
        if ($count > 0) {
            //login
            Session::init();
            Session::set('loggedIn', true);
            $resultCheck = 'admin/index/index';
            return $resultCheck;
        } else {
            header('location: ../admin');
        }

    }

    public function save(){
        $upLoadName = $_FILES['image']['name'];
        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "./public/uploads/$upLoadName"
        );
        $sth = $this->db->prepare("INSERT INTO slide (title, image, status) VALUES (:title, :image, :status)");
        $sth->execute(array(
            ':title'    => $_POST['title'],
            ':image'  => $upLoadName,
            ':status' => $_POST['status']
        ));
    }

    public function getSlide()
    {
        $result = $this->db->selectAll("SELECT * FROM slide WHERE status = 'active'");
        return $result;
    }

    public function getSlideAll()
    {
        $result = $this->db->selectAll("SELECT * FROM slide");
        return $result;
    }

    public function getSlideId($id)
    {
        $result = $this->db->selectAll("SELECT * FROM slide WHERE id = $id");
        return $result;
    }

    public function deleteSlide($id)
    {
        $result = $this->db->delete('slide',  'id = '.$id);
        return $result;
    }

}