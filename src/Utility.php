<?php

namespace Src;

class Utility 
{
    /**
     * Lista de charsets
     */
    public $charsets = [
        'UTF-8', 'ASCII',
        'ISO-8859-1', 'ISO-8859-2', 'ISO-8859-3', 'ISO-8859-4', 'ISO-8859-5',
        'ISO-8859-6', 'ISO-8859-7', 'ISO-8859-8', 'ISO-8859-9', 'ISO-8859-10',
        'ISO-8859-13', 'ISO-8859-14', 'ISO-8859-15', 'ISO-8859-16',
        'Windows-1251', 'Windows-1252', 'Windows-1254',
    ];

    /**
     * Retona o charset da string baseado na lista de charsets
     * 
     * @param string $string
     * @return string|bool
     */
    public function checkCharset(String $string)
    {
        foreach ($this->charsets as $key => $charset) {
            $encoder = mb_detect_encoding($string, $charset, true);

            if ($encoder) {
                return $encoder;
            }
        }

        return false;
    }

    /**
     * Remove caracteres especiais da string
     *
     * @param string $string
     * @return string
     */
    public function removeSpecialChar(String $string): String
    {
        $specialChar = array(
            "á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç",
            "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç"
        );

        $char = array(
            "a", "a", "a", "a", "a", "e", "e", "e", "e", "i", "i", "i", "i", "o", "o", "o", "o", "o", "u", "u", "u", "u", "c",
            "A", "A", "A", "A", "A", "E", "E", "E", "E", "I", "I", "I", "I", "O", "O", "O", "O", "O", "U", "U", "U", "U", "C"
        );

        return str_replace($specialChar, $char, $string);
    }
}
