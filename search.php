<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>查詢結果</title>
  </head>
  <body>
    <div>
<?php

require_once 'codes.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['g-recaptcha-response'])) {
  if ( ! strlen($_POST['name'])) {
    echo 'Verify failed. Error number: 02';
  } else if ( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'Verify failed. Error number: 03';
  } else {
    $url = 'https://www.google.com/recaptcha/api/siteverify?' . http_build_query(['secret' => '', 'response' => $_POST['g-recaptcha-response']]);
    $verify = json_decode(file_get_contents($url));

    if ( ! $verify->{'success'}) {
      echo 'Verify failed. Error number: 04';
    } else {
      
      $hash = md5($_POST['name']) . md5($_POST['email']);

      if ( ! isset($android[$hash]) && ! isset($html[$hash])) {
        echo '查無資料，如有問題，請私訊粉絲專頁以協助處理: <a href="https://www.facebook.com/CCUCSIE">點我前往</a>';
      } else {
        if (isset($android[$hash])) {
          echo 'Android APP開發工程師 優惠券: ' . $android[$hash] . "<br>\n";
        }
        if (isset($html[$hash])) {
          echo 'HTML5網站開發工程師 優惠券: ' . $html[$hash] . "<br>\n";
        }

        echo '<a href="http://www.tibame.com">TibaMe 學習網</a>';
      }
    }
  }
} else {
  echo 'Wrong format. Error number: 01';
}

?>
    </div>
  </body>
</html>
