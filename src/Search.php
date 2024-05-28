<?php

    namespace Oibelclav\DigitalCep;

    class Search{
        private $url = "https://viacep.com.br/ws/";

        public function getAddressFromZipcode(string $zipcode):array{

            $zipCode = preg_replace('/[^0-9]/im','',$zipcode);

            $busca = file_get_contents($this->url . $zipCode . '/json');

            return(array) json_decode($busca);
        
        }
    }

?>