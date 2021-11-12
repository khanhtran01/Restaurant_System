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
            if ($info['pass'] != $info['repass']){
                echo "<script>alert('sai mk') </script>";

                $_SESSION['passerror'] = True;
                return "0";
            }
            $insert = "INSERT INTO account (`Fname`, `Lname`, `Age`, `Email`, `Password`) VALUE ('".$info['fname']."','" .$info['lname']. "','".$info['age']."','".$info['email']."','".md5($info['pass'])."')";
            $this->_query($insert);
            if (isset($_SESSION['passerror'])){
                unset($_SESSION['passerror']);
            }
            if (isset( $_SESSION['errorRegister'])){
                unset( $_SESSION['errorRegister']);
            }
            $_SESSION['complete'] = True;

            return "1";
        }
        echo "<script>alert('sai email') </script>";

        $_SESSION['errorRegister'] = True;
        return "0";
    }

}
?>