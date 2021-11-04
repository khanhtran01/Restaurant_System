<?php
class ProductsModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}
?>