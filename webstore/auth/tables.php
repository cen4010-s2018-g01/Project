<?php

function Table(){
    
    if (CheckTableExists('test', 'Orders') === FALSE){
        $sql = "CREATE TABLE `test`.`Orders` ( `username` VARCHAR(21) NOT NULL , `orderNum` INT NOT NULL , `sku` VARCHAR(21) NOT NULL , `quantity` INT NOT NULL, `price` FLOAT NOT NULL );";
        SendQuery($sql);
    }
}

?>