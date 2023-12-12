<?php
class Model
{
    
    private $server = 'localhost:3307';
    private $username = "root";
    private $password = '';
    private $database = "MarvelTech";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $ex) {
            echo 'Connection failed' . $ex->getMessage();
        }
    }

    

    public function insert()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['emri'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo $name ;
            echo $email ;
            echo $password ;

            $query = "INSERT INTO users (Username, Password, Email) VALUES ('$name','$password', '$email')";
            if ($sql = $this->conn->query($query)) {
                echo "<script>window.location.href = 'login.php';</script>";
            } else {
                echo "<script>alert('failed');</script>";
                
            }
        }
    }

    public function insertContact()
    {
        if(isset($_POST['submit'])){
            $name = $_POST['contact_name'];
            $email = $_POST['contact_email'];
            $subject = $_POST['contact_subject'];
            $msg = $_POST['contact_message'];
            $query = "INSERT INTO `contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$msg') ";
            if ($sql = $this->conn->query($query)) {
                echo "<script> alert('Message sent succesfully');  </script>";
        
    }
  }
}



    public function fetch()
    {
        $data = null;
        $query = "SELECT * FROM users";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchContact()
    {
        $data = null;
        $query = "SELECT * FROM contact";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchContactInfo()
    {
        $data = null;
        $query = "SELECT * FROM `contact info`";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchCourse(){
        $data = null;
        $query = "SELECT * FROM courses";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchAbout(){
        $data = null;
        $query = "SELECT * FROM about";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    

    public function delete($id)
    {

        $query = "DELETE FROM users where ID = '$id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    

    


}
?>