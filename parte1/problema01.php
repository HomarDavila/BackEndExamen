<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include './ChangeString.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema01</title>
    </head>
    <body>
        <?php
        $strIngreso = "123 abcd*3";
        $objChangeString = new ChangeString();
        $strSalida = $objChangeString->built($strIngreso);
        ?>
        <h4>Problema01</h4>
        <table>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $strIngreso = "**Casa 52";
            $objChangeString = new ChangeString();
            $strSalida = $objChangeString->built($strIngreso);
            ?>
            <tr>
                <td>Dato de ingreso:</td>
                <td><strong><?php echo $strIngreso ?></strong></td>
                <td>Dato de salida:</td>
                <td><strong><?php echo $strSalida ?></strong></td>
            </tr>
            <?php
            $strIngreso = "**Casa 52Z";
            $objChangeString = new ChangeString();
            $strSalida = $objChangeString->built($strIngreso);
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