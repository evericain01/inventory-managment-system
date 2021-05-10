<html>
<head>
    <title>All RMA</title>
</head>
<body>
<?php

public $rma_id;
public $printer_id; //Can be null
public $toner_id; //Can be null
public $date;
public $rma_reason;

public $printer_id;
public $printer_model;
public $printer_brand;
public $quantity;
public $rma_status; 

    foreach ($data['rma'] as $rma) {
        if($rma->printer_id != null) {
            foreach($data['printers' as $printer]) {
                if($rma->printer_id == $printer->printer_id) {
                    echo "<label>First name: $printer->printer_model</label><br><br>";
                    echo "<label>Last name: $printer->printer_brand</label><br><br>";
                    echo "<label>Reason: $rma->rma_reason</label><br><br>";
                    echo "<a href='" . BASE . "/RMA/delete/$rma->rma_id'>Demote</a><br>";
                }
            }
        }
        else {
            foreach($data['toners' as $toner]) {
                if($rma->toner_id == $toner->toner_id) {
                    echo "<label>First name: $toner->toner_model</label><br><br>";
                    echo "<label>Last name: $toner->toner_brand</label><br><br>";
                    echo "<label>Reason: $rma->rma_reason</label><br><br>";
                    echo "<a href='" . BASE . "/RMA/delete/$rma->rma_id'>Demote</a><br>";
                }
            }
        }
    }
    ?>
</body>
</html>