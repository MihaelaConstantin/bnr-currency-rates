<?php

require_once("./db/BnrDbHelper.php");
require_once("./config.php");

$db = new BnrDbHelper();
$dbResult = $db->select_last_currency();
$hasResult = true;

if(count($dbResult) == 0) {
  $hasResult = false;
} else {
  $currencyRates = $dbResult[0];
  $currencyId = $currencyRates["id"];
  $currencyDate = strtotime($currencyRates["date"]);
  $formattedDate = date('d/m/Y', $currencyDate);

  unset($currencyRates["id"]);
  unset($currencyRates["date"]);
}

?>

<html>
  <head>
    <title>Curs valutar </title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
  </head>
<body>

  <div class="container">
  <nav>
    <a href="./">
      <img id="logo" src="./images/logo.png" />
    </a>
  </nav>

  <h2 class="big-title">Cursul valutar BNR</h2>

  <?php if($hasResult): ?>

    <p class="date-info">Valoare actualizata in: <?php echo $formattedDate; ?></p>

    <table class="currency-table">
      <thead>
        <tr>
          <th>Moneda</th>
          <th>Curs valutar</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($currencyRates as $currency => $value): ?>
        <tr>
          <td><?php echo CURRENCIES[$currency] . ", " . $currency; ?></td>
          <td><?php echo $value; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p class="date-info">Momentan nu este disponobil cursul valutar</p>
  <?php endif; ?>
</body>
</html>
