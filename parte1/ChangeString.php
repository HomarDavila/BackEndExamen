<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeString
 *
 * @author Homar Dávila Padilla
 */
class ChangeString {

    private $strAbecedario;
    private $arrAbecedario;
    private $strSalida;

    function __construct() {
        $this->strAbecedario = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z';
        $this->arrAbecedario = explode(',', $this->strAbecedario);
        $this->stcSalida = new SplStack();
    }

    function built($entrada) {
        try {
            $arrEntrada = str_split($entrada, 1);
            $intAbecedario = count($this->arrAbecedario) - 1;
            foreach ($arrEntrada as $strCaracter) {
                $intValorSiguiente = 0;
                $blnNoExisteAbecedario = true;
                for ($i = 0; $i <= $intAbecedario; $i++) {
                    if ($this->arrAbecedario[$i] == $strCaracter) {
                        $intValorSiguiente = $i + 1;
                        if ($intValorSiguiente <= $intAbecedario) {
                            $this->stcSalida->push($this->arrAbecedario[$intValorSiguiente]);
                        } else {
                            $this->stcSalida->push($this->arrAbecedario[0]);
                        }
                        $blnNoExisteAbecedario = false;
                        break;
                    } elseif (strtoupper($this->arrAbecedario[$i]) == $strCaracter) {
                        $intValorSiguiente = $i + 1;
                        if ($intValorSiguiente <= $intAbecedario) {
                            $this->stcSalida->push(strtoupper($this->arrAbecedario[$intValorSiguiente]));
                        } else {
                            $this->stcSalida->push(strtoupper($this->arrAbecedario[0]));
                        }
                        $blnNoExisteAbecedario = false;
                        break;
                    }
                }
                if ($blnNoExisteAbecedario) {
                    $this->stcSalida->push(strtoupper($strCaracter));
                }
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
            $this->strSalida = $val1 . $this->strSalida;
            $this->ordenar();
        }
    }

    function __destruct() {
        unset($this);
    }

}
