<?php

require_once(realpath('./DbHelper.php') . "DbHelper.php");

class BnrDbHelper extends DbHelper {

    public function __construct() {
        parent::__construct();
    }

    public function select_last_currency() {
        $sql = "SELECT * FROM currency_rates ORDER BY id DESC LIMIT 1";
        return $this->select($sql);
    }

    public function inset_day_currencies($bnrCurrencies) {
        $sql = "INSERT INTO currency_rates (date, ";
        $date = $bnrCurrencies->getDate();
        $currencies = $bnrCurrencies->getCurrencies();

        foreach($currencies as $currency => $value) {
            $sql .= $this->connection->real_escape_string($currency) . ", ";
        }

        $sqlLen = strlen($sql);
        $sql = substr($sql, 0, $sqlLen - 2);
        $sql .= ") VALUES ('" . $this->connection->real_escape_string($date) . "', ";

        foreach($currencies as $currency => $value) {
            $sql .= "'" . $this->connection->real_escape_string($value) . "', ";
        }

        $sqlLen = strlen($sql);
        $sql = substr($sql, 0, $sqlLen - 2);
        $sql .= ")";

        $success = $this->insert($sql);

        echo $sql;

        return $success;
    }

}