<?php
class ProductsModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function getProductByType(){
        $typesql = "SELECT * FROM `type`;";
        $query1 = $this->_query($typesql);
        $types = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($types, $row);
        }
        $data = [];
        foreach($types as $type){
            $productsql = "SELECT * FROM food WHERE `Type` = ". $type['ID'] .";";
            $query2 = $this->_query($productsql);
            $type['products'] = [];
            while ($row = mysqli_fetch_assoc($query2)) {
                array_push($type['products'], $row);
            }
            array_push($data,$type);
        }
        return $data;
    }
    public function getProductByID($id){
        $sql = "SELECT * FROM food WHERE ID = $id";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data[0];
    }
}
?>