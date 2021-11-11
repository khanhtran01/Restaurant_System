<?php
class ManagerModel extends db {
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function getOrders(){
        $allBillsql = "SELECT * FROM bill WHERE complete = 0 ORDER BY ID DESC";
        $query1 = $this->_query($allBillsql);
        $allBills = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($allBills, $row);
        }
        $data = [];
        foreach($allBills as $bill){
            $allFoodsql = "SELECT * FROM bill_info b, food f WHERE b.Food_ID = f.ID AND Bill_ID = ". $bill['ID'];
            $bill['foods'] = [];
            $query2 = $this->_query($allFoodsql);
            while ($row = mysqli_fetch_assoc($query2)) {      
                array_push($bill['foods'], $row);
            }
            array_push($data,$bill);
        }
        return $data;
    }
    public function finishOrder($billID){
        $sql = "UPDATE bill SET complete = 1 WHERE ID = $billID";
        $this->_query($sql);
    }
}
?>