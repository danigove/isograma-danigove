<?php

 /**
  * @author Daniel Gomez Vela
  * @copyright Copyright (c) 2017 Daniel Gomez Vela
  * @license https://www.gnu.org/licenses/gpl.txt
  */

 /**
  * Nos reconoce si una cadena es un isograma o no.
  * @param  string $s cadena introducida por usuario
  * @return bool true si es un isograma false en caso contrario.
  */
function esIsograma(string $s): bool
{
    $s = strtolower(str_replace([" ","-"],"",$s));
    $valor = true;
    $len = mb_strlen($s);
    for($i = 0; $i < $len; $i++){
        for($e = $i + 1; $e < $len; $e++){
            if(mb_substr($s,$i,1) === mb_substr($s,$e,1)){
                return false;
            }
        }
    }
    return $valor;
}
