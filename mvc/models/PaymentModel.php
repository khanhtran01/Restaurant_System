<?php
class PaymentModel extends db {
    private function _query($sql)
    {
        // return mysqli_query($this->connect, $sql);
        mysqli_query($this->connect, $sql);
        $id = mysqli_insert_id($this->connect);
        return $id;
    }

    public function updateBill($info){
        $query1 = "INSERT INTO bill (PayTime, Total, Customer_ID,complete) VALUE ('".date("Y-m-d")."','". $info['price'] ."','".$info['userID']. "',0)";
        $id = $this -> _query($query1);
        
        $arrProduct = explode(',',$info['arrProduct']);
        $arrAmount = explode(',',$info['arrAmount']);
        for ($i = 0; $i < count($arrProduct); $i++){
            $query2 = "INSERT INTO bill_info (Bill_ID, Food_ID, Amount) VALUE ('".$id."','".$arrProduct[$i]."','".$arrAmount[$i]."')";
            $this->_query($query2);
        }
    }
}
?>