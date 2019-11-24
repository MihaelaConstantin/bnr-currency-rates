<?php

require_once(realpath('./db/BnrDbHelper.php'));
require_once(realpath('./XMLParsers/XMLBnrParser.php'));

$data = new XMLBnrParser();
$db = new BnrDbHelper();

$lastCurrecies = $db->select_last_currency();

if(count($lastCurrecies) > 0) {
    if($lastCurrecies[0]["date"] != $data->getDate()) {
        $db->inset_day_currencies($data);
        echo "Inserted new currencies";
    } else {
        echo "No insersion";
    }
} else {
    $db->inset_day_currencies($data);
    echo "Inserted new currencies";
}