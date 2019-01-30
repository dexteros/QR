<?php

for ($i=0; $i <= 1 ; $i++) {
  //usleep(105432);
  //$code = round(microtime(true)*1000);
  //echo "<tr><td><img src=\"https://api.qrserver.com/v1/create-qr-code/?data=$code&size=100x100\" /><br>$code</td></tr>";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .logo {
        display: block;
        width: 600px;
        height: 600px;
        background: url(LOGO-SVG.svg);
        background-size: 600px 600px;
        text-align: center;
        vertical-align: middle;
      };
      img.displayed {
          display: block;
          margin-left: auto;
          margin-right: auto;
          margin-bottom: 10px;
      };
      .center {
        text-align: center;
      }
    </style>
  </head>
  <body style="text-align: center;">
    <div class="center">
    <table>
      <tr>
        <td>
          <a class="logo"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <img class="displayed" src="https://api.qrserver.com/v1/create-qr-code/?data=4564654646456456444645&size=130x130" />
          </a>
        </td>
      </tr>
    </table>
  </div>
  </body>
</html>
