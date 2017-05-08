<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompleteRange
 *
 * @author Homar Dávila Padilla
 */
class CompleteRange {

    private $strSalida;
    private $stcSalida;

    function __construct() {
        $this->stcSalida = new SplStack();
        $this->strSalida = '';
    }

    function built($arrEntrada) {
        try {
            $intContador = $arrEntrada[0];
            $intTamanioArray = count($arrEntrada) - 1;
            $intSiguienteValor = 0;

            for ($i = 0; $i <= $intTamanioArray; $i++) {
                if ($arrEntrada[$i] == $intContador) {
                    $this->stcSalida->push($intContador);
                    $intContador += 1;
                } else {
                    $intSiguienteValor = $arrEntrada[$i + 1];
                    do {
                        $this->stcSalida->push($intContador);
                        $intContador += 1;
                    } while ($intSiguienteValor != $intContador);
                }
            }

            $this->ordenar();
            $this->strSalida = '[' . $this->strSalida;
            $this->strSalida = substr($this->strSalida, 0, strlen($this->strSalida) - 1) . ']';

            return $this->strSalida;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    function ordenar() {
        if (!$this->stcSalida->isEmpty()) {
            $val1 = $this->stcSalida->pop();
            $this->strSalida = $val1 . ',' . $this->strSalida;
            $this->ordenar();
        }
    }

    function __destruct() {
        unset($this);
    }

}
