<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './ClearPar.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema03</title>
    </head>
    <body>
        <?php
        $strIngreso = "()())()";
        $objClearPar = new ClearPar();
        $strSalida = $objClearPar->built($strIngreso);
        ?>
        <h4>Problema03</h4>
        <table>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $strIngreso = "()(()";
            $objClearPar = new ClearPar();
            $strSalida = $objClearPar->built($strIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $strIngreso = ")(";
            $objClearPar = new ClearPar();
            $strSalida = $objClearPar->built($strIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $strIngreso = "((()";
            $objClearPar = new ClearPar();
            $strSalida = $objClearPar->built($strIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
        </table>
    </body>
</html>