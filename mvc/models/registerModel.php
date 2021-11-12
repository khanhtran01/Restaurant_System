<?php
class registerModel extends db {
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function checkAccount($info){
        $sql = "SELECT * FROM account WHERE Email = '".$info['email']."'";
        // echo $sql;
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        if (empty($data)){
            return "";
        }
        
    }
    public function NewAccount($email,$password, $age,$lname, $fname){
        $sql = "INSERT INTO account(email, password,age ,lname, fname)  VALUES('$email', '$password','$age','$lname','$fname')";
        $query = $this->_query($sql);
        return $query;
    }

}
?>