<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearPar
 *
 * @author Homar Dávila Padilla
 */
class ClearPar {

    private $strSalida;
    private $stcSalida;

    function __construct() {
        $this->stcSalida = new SplStack();
        $this->strSalida = '';
    }

    function built($strEntrada) {
        try {
            $arrEntrada = str_split($strEntrada, 1);

            foreach ($arrEntrada as $strCaracter) {
                if ($this->stcSalida->isEmpty() && $strCaracter == '(') {
                    $this->stcSalida->push($strCaracter);
                    $this->stcSalida->rewind();
                } elseif ($this->stcSalida->current() == '(' && $strCaracter == ')') {
                    $this->stcSalida->push($strCaracter);
                    $this->stcSalida->rewind();
                } elseif ($this->stcSalida->current() == ')' && $strCaracter == '(') {
                    $this->stcSalida->push($strCaracter);
                    $this->stcSalida->rewind();
                }
            }

            if ($this->stcSalida->count() % 2 != 0) {
                $this->stcSalida->pop();
                $this->stcSalida->rewind();
            }

            $this->ordenar();

            return $this->strSalida;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    function ordenar() {
        if (!$this->stcSalida->isEmpty()) {
            $val1 = $this->stcSalida->pop();
            $this->stcSalida->rewind();
            $val2 = $this->stcSalida->pop();
            $this->stcSalida->rewind();
            $this->strSalida = $val2 . $val1 . $this->strSalida;
            $this->ordenar();
        }
    }

    function __destruct() {
        unset($this);
    }

}
