<?php
class database{
    // adding sql server
    public $servername = "172.31.22.43";
    public $username = "Jenilkumar200514591";
    public $password = "WVhR6Ec-9g";
    public $dbname = "Jenilkumar200514591";
    public $conn;
    //Creating connections
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect:" . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }

    //Function to insert data into the table(Insert)
    public function insertData($post)
    {
        $fname = $this->conn->real_escape_string($_POST['fname']);
        $lname = $this->conn->real_escape_string($_POST['lname']);
        $gender = $this->conn->real_escape_string($_POST['gender']);
        $dob = $this->conn->real_escape_string($_POST['dob']);
        $age = $this->conn->real_escape_string($_POST['age']);
        $numb = $this->conn->real_escape_string($_POST['numb']);
        $school = $this->conn->real_escape_string($_POST['school']);
        $foi = $this->conn->real_escape_string($_POST['foi']);
        $street = $this->conn->real_escape_string($_POST['street']);
        $city = $this->conn->real_escape_string($_POST['city']);
        $province = $this->conn->real_escape_string($_POST['province']);
        $pin = $this->conn->real_escape_string($_POST['pin']);
        $query = "INSERT INTO profile(fname, lname, gender, dob, age, numb, school, foi, street, city, province, pin) VALUES ('$fname', '$lname', '$gender', '$dob', '$age', '$numb', '$school', '$foi', '$street', '$city', '$province', '$pin')";
        $sql = $this->conn->query($query);
        if ($sql == true){
            //Shows if data is successfully inserted
            header("Location:afterLoginIndex.php?msg1=insert");
        }else{
            //Display Error
            echo "Cannot add data";
        }
    }

    //Read Function
    public function displayData(){
        $query = "SELECT * FROM profile";
        //Using limit to load only 1 inserted Data
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }else{
            echo "No profile found";
            echo mysqli_connect_error();
        }
    }
    //Update and Read Function
    public function displayRecordById($id){
        $query = "SELECT * FROM profile WHERE id = '$id'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }else{
            echo "No profile found!";
        }
    }
    public function updateRecord($postData){
        $fname = $this->conn->real_escape_string($_POST['ufname']);
        $lname = $this->conn->real_escape_string($_POST['ulname']);
        $gender = $this->conn->real_escape_string($_POST['ugender']);
        $dob = $this->conn->real_escape_string($_POST['udob']);
        $age = $this->conn->real_escape_string($_POST['uage']);
        $numb = $this->conn->real_escape_string($_POST['unumb']);
        $school = $this->conn->real_escape_string($_POST['uschool']);
        $foi = $this->conn->real_escape_string($_POST['ufoi']);
        $street = $this->conn->real_escape_string($_POST['ustreet']);
        $city = $this->conn->real_escape_string($_POST['ucity']);
        $province = $this->conn->real_escape_string($_POST['uprovince']);
        $pin = $this->conn->real_escape_string($_POST['upin']);
        $id = $this->conn->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)){
            $query = "UPDATE profile SET fname = '$fname', lname = '$lname', gender = '$gender', dob = '$dob', age = '$age', numb = '$numb', school = '$school', foi = '$foi', street = '$street', city = '$city', province = '$province', pin = '$pin' WHERE id = '$id'";
            $sql = $this->conn->query($query);
            if($sql == true){
                //Shows message if data is successfully updated
                header("Location:afterLoginIndex.php?msg2=update");
            }else{
                //Shows error
                echo "Could not update your profile";
            }
        }
    }
    //Creating delete function
    public function deleteRecord($id){
        $query = "DELETE FROM profile WHERE id = '$id'";
        $sql = $this->conn->query($query);
        if ($sql == true){
            //Shows message if data is successfully deleted
            header("Location:afterLoginIndex.php?msg3=delete");
        }else{
            //Show Error
            echo "Could not delete";
        }
    }
}
