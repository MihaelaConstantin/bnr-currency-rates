<?php

ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);

class XMLBnrParser {

    private $xml;
    private $currencies;
    private $date;

    public function __construct() {

        $this->currencies = [];

        $xmlstring = file_get_contents("https://www.bnr.ro/nbrfxrates.xml");

        $xml = new SimpleXMLElement($xmlstring);
    
        $this->date = (string) $xml->Header->PublishingDate;

        foreach($xml->Body->Cube->Rate as $rate) {
            $this->currencies[(string)$rate->attributes()->currency] = (string) $rate[0];
        }

    }

    public function getDate() {
        return $this->date;
    }

    public function getCurrencies() {
        return $this->currencies;
    }

}