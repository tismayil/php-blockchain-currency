<?php
require("functions.php");
$fnc = new fnc();
$adr = $fnc->b0t("https://blockchain.info/tr/ticker");
$json = json_decode($adr);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> BitCoin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
    <style media="screen">
    .starter-template { padding: 3rem 1.5rem; text-align: center;}
    </style>


    <main role="main" class="container">
    <div class="starter-template">



<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Currency</th>
      <th scope="col">Price</th>
      <th scope="col">Buy</th>
      <th scope="col">Sell</th>
    </tr>
  </thead>
  <tbody>
        <?php
          foreach ($json as $a => $b) {
            echo "<tr>";
            echo "<td> ".$fnc->getFlag($a)." &nbsp; {$a} </td>";
            echo "<td> {$b->{"15m"}} {$b->symbol} </td>";
            echo "<td> {$b->buy} {$b->symbol} </td>";
            echo "<td> {$b->sell} {$b->symbol} </td>";
            echo "</tr>";
          }
        ?>


  </tbody>
</table>


</div>
</main>

</body>
</html>
