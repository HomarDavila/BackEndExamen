<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './CompleteRange.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema02</title>
    </head>
    <body>
        <?php
        $arrIngreso = [1, 2, 4, 5];
        $objCompleteRange = new CompleteRange();
        $strSalida = $objCompleteRange->built($arrIngreso);
        ?>
        <h4>Problema02</h4>
        <table>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo "[1, 2, 4, 5]" ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $arrIngreso = [2, 4, 9];
            $objCompleteRange = new CompleteRange();
            $strSalida = $objCompleteRange->built($arrIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo "[2, 4, 9]" ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $arrIngreso = [55, 58, 60];
            $objCompleteRange = new CompleteRange();
            $strSalida = $objCompleteRange->built($arrIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo "[55, 58, 60]" ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
        </table>
    </body>
</html>