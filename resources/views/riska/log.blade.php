<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login TUTOR-in</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#login1">Murid</a></li>
        <li class="tab"><a href="#login">Tutor</a></li>
      </ul>

      <div class="tab-content">
        <div id="login1">
          <h1>Login Murid</h1>

          <form action="/" method="post">


          <div class="field-wrap">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label for="email" class="col-md-4 control-label">Pa</label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button type="submit" class="button button-block"/>Log in</button>

          </form>

        </div>

        <div id="login">
          <h1>Login Tutor</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Log In</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
<footer>&copy; 2018 TUTOR-in. All Rights Reserved </a>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="index.js"></script>



</body>

</html>
