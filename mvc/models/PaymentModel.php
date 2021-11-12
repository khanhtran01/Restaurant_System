<?php
class PaymentModel extends db {
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function updateBill($info){
        $query1 = "INSERT INTO bill (PayTime, Total, Customer_ID) VALUE ('".date("Y-m-d")."','". $info['price'] ."','".$info['userID']."')";
        
        $this->_query($query1);
        $getLastIdsql = "SELECT ID FROM bill ORDER BY ID DESC LIMIT 1";
        $getLastId = $this->_query($getLastIdsql);
        $getLastId =  mysqli_fetch_assoc($getLastId);
        $arrProduct = explode(',',$info['arrProduct']);
        $arrAmount = explode(',',$info['arrAmount']);
        for ($i = 0; $i < count($arrProduct); $i++){
            $query2 = "INSERT INTO bill_info (Bill_ID, Food_ID, quantity) VALUE ('".$getLastId['ID']."','".$arrProduct[$i]."','".$arrAmount[$i]."')";
            $this->_query($query2);
        }
    }
}
?>