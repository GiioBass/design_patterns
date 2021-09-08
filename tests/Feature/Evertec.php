<?php

namespace Tests\Feature;

use Tests\TestCase;

class Evertec extends TestCase
{
    public function testFactory()
    {
//        dd($this->luhn('4111111111111111'));
//        dd($this->truncateNumber('6011525109585273'));
//        dd($this->palindrome('Oso'));
        dd($this->check('[]'));
    }

    public function luhn($cardNumber): bool
    {
        $odd = true;
        $sum = 0;
        foreach (array_reverse(str_split($cardNumber)) as $num) {
            $sum += array_sum(str_split(($odd = !$odd) ? $num * 2 : $num));
        }
        return (($sum % 10 == 0) && $sum != 0);

    }

    public function truncateNumber(string $cardNumber): string
    {

        $length = strlen($cardNumber);

        if ($length > 10) {

            $card = substr_replace($cardNumber, '#', 6, -4);
            return $card;
        } else {
            return $cardNumber;
        }
    }

    public function palindrome(string $word): bool
    {
        $lowerCase = strtolower($word);
        $result = strrev($lowerCase) == $lowerCase ? true :false;
        return $result;
    }

    public function check($arg)
    {
        $arr = str_split($arg);

        $leftBracket = array ('{', '[', '('); // Soporte izquierdo
	 $rightBracket = array ('}', ']', ')'); // Soporte derecho
	$stack = array();

	reset($arr);
	while (list($key,$value)=each($arr))
    {
        if (in_array($value, $leftBracket,TRUE))
        {// Soporte izquierdo en la pila
            array_push($stack, $value);
        }
        elseif (in_array($value, $rightBracket))
        {// El paréntesis correcto se compara con la parte superior de la pila
            $stackTop = end ($stack); // Obtener la parte superior de la pila
			if(isset($stackTop) && !empty($stackTop))
            {
                if(array_search($value, $rightBracket) === array_search($stackTop, $leftBracket))
                {// La coincidencia se ha desplegado correctamente
                    array_pop($stack);
                }
                else
                {// Falló la coincidencia
                    return  false;
                }
            }
            else
            {// Paréntesis derecho exceso paréntesis izquierdo
                return  false;
            }
		}
    }
	if(!empty($stack))
    {// Paréntesis izquierdo en exceso paréntesis derecho
        return  false;
    }
    else
    {
        return  true;
    }
}


}
