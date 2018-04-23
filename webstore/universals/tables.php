<?php

include_once('check.php');
include_once('query.php');

function InvInsert($sku, $des, $key, $npn, $quant, $price){
    $sql = "INSERT INTO `inventory` (`SKU`, `Description`, `Keyword`, `NPN`, `quantity`, `price`) VALUES ('$sku', '$des', '$key', '$npn', '$quant', '$price');";
    SendQuery($sql);
}


function Table(){
    
    
    if (CheckTableExists('CEN4010_S2018g01', 'Orders') === FALSE){
        $sql = "CREATE TABLE `CEN4010_S2018g01`.`Orders` ( `username` VARCHAR(21) NOT NULL , `orderNum` INT NOT NULL , `sku` VARCHAR(21) NOT NULL , `quantity` INT NOT NULL, `price` FLOAT NOT NULL );";
        SendQuery($sql);
    }
    
    if (CheckTableExists('CEN4010_S2018g01', 'accounts') === FALSE){
        $sql = "CREATE TABLE `CEN4010_S2018g01`.`accounts` ( `znumber` INT NOT NULL, `username` VARCHAR(21) NOT NULL , `password` VARCHAR(125) NOT NULL, `firstname` VARCHAR(21) NOT NULL , `lastname` VARCHAR(21) NOT NULL , PRIMARY KEY (`znumber`));";
        SendQuery($sql);
    }
    
    $sql = 'INSERT INTO `accounts` (`znumber`, `username`, `password`, `firstname`, `lastname`) VALUES ("11111", "user", "$2y$10$OwYRlZArD4rko.bFJ18Yf.TDVSizJ6s0d3AwSqUO4RW0mlVl7OvDq", "Firstname", "Lastname")';
    SendQuery($sql);
    
    /*
    if (CheckTableExists('CEN4010_S2018g01', 'inventory') === TRUE){
        $sql = "DROP TABLE `CEN4010_S2018g01`.`inventory`;";
        SendQuery($sql);
    }
    */
    
    if (CheckTableExists('CEN4010_S2018g01', 'inventory') === FALSE){
        $sql = "CREATE TABLE `CEN4010_S2018g01`.`inventory` ( `SKU` VARCHAR(21) NOT NULL, `Description` VARCHAR(125) NOT NULL , `Keyword` VARCHAR(125) NOT NULL, `NPN` VARCHAR(21) NOT NULL , `quantity` INT NOT NULL , `price` FLOAT NOT NULL , PRIMARY KEY (`SKU`));";
        SendQuery($sql);
        
        InvInsert("CAP-107_50V", "Cap 100000000pf 100 uF 50V Electrolytic", "", "69K7856", "300", "0.063");
        InvInsert("CAP-107_35V", "Cap 100000000pf 100uF 107CKE035M @ 35V", "", "69K7903", "800", "0.053");
        InvInsert("CAP-106_35V", "Cap 10000000pf 10uF 106RSS035M @ 35V", "", "55M4300", "300", "0.03");
        InvInsert("CAP-104_50V", "Cap 100000pf 0.1uf, ± 20%, X7R, 50 V", "", "95C0981", "1500", "0.027");
        InvInsert("CAP-103_100V", "Cap 10000pf 0.01 uF 100V Poly Film", "", "07H2781", "100", "0.05");
        InvInsert("CAP-202_50V", "Cap 2000pf 0.002 uF 50V Ceramic Disc", "", "97M4056", "100", "0.175");
        InvInsert("CAP-51_50V", "Cap 51pf cog", "", "46P6591", "200", "0.06");
        InvInsert("1n751a", "5.1v Zener Diode, 500 mW, DO-204AH, 5 %,", "", "13T8945", "2500", "0.019");
        InvInsert("1n4007", "Diode: 1n4001...1n4007, 1amp", "", "05AC0531", "2500", "0.015");
        InvInsert("MCP9700", "Temperature Sensor, to92 -- see data sheet", "", "16M5162", "500", "0.196");
        InvInsert("OPTO-TEPT5600", "Opto - Transistor NPN Phototransistor, 570 nm T1-3...", "TEPT5600 or TEPT5700", "93K0363", "100", "0.396");
        InvInsert("OPTO-SFH203-FA", "SFH203-FA DIODE PHOTO 900NM 20 T-1 3/4;", "", "01M8805", "100", "0.318");
        InvInsert("2N2222A", "2n2222 or PN2222 NPN Transistor, TO-92", "", "50H5114", "4000", "0.026");
        InvInsert("2N2907A", "2n2907 or PN2907 PNP Transistor, TO-92", "", "69R5820", "2000", "0.022");
        InvInsert("2n3904", "2n3904", "", "29H2025", "2000", "0.027");
        InvInsert("2n3906", "2n3906", "", "69R6840", "1000", "0.019");
        InvInsert("bc549", "bc549 - NPN to92", "NPN to92", "31Y0485", "300", "0.045");
        InvInsert("k1400e70", "DIAC / SIDAC, 130 V, 146 V, 10 µA, TO-92, 2 Pins", "k1400e70", "11J9124", "100", "0.00");
        InvInsert("TIP32", "TIP32, to220", "", "45J2285", "300", "0.21");
        InvInsert("BT131-600,412", "Triac BT131-600,412 600V, 5W, TO-92", "", "89K1793", "100", "0.233");
        InvInsert("RQ-1R0", "1 Ohm 5% MCF 0.25W", "1/4 W Resistor 5%", "38k0255", "200", "0.043");
        InvInsert("RQ-102", "1.0kOhm 5% MCF 0.25W", "1/4w resistors 5%", "16X9589", "5000", "0.0081");
        InvInsert("RQ-122", "1.2kOhm 5% MCF 0.25W", "1/4 W Resistor 5%", "38k0334", "200", "0.029");
        InvInsert("RQ-152", "1.5kOhm 5% MCF 0.25W", "1/4 W Resistor 5%", "58K5015 or 38k0340", "1000", "0.013");
        InvInsert("RQ-10R", "10 Ohm 5% MCF 0.25W", "1/4 W Resistor 5%", "38k0398", "200", "0.073");
    }
}

?>