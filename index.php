<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TibaMe 優惠券查詢</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body class="container">
    <div class="row" style="padding-top: 5%; padding-bottom: 5%;">
      <div class="col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-4">
        <form method="POST" action="search.php" accept-charset="UTF-8" role="form" data-toggle="validator">
          <fieldset>
            <div>
              <legend>序號查詢</legend>
            </div>

            <div class="form-group">
              <label for="name" class="sr-only">姓名:</label>
              <input class="form-control" placeholder="姓名" name="name" type="text" id="name" autocomplete="off" autofocus="autofocus" required="required">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label for="email" class="sr-only">信箱:</label>
              <input class="form-control" placeholder="信箱" name="email" type="email" id="email" autocomplete="off" required="required">
              <div class="help-block with-errors"></div>
            </div>

            <div class="g-recaptcha" data-sitekey=""></div><br>

            <div>
              <button type="submit" class="form-control btn btn-success">送出</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" defer></script>
    <script src="validator.js" defer></script>
  </body>
</html>
