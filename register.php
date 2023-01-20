<html>
<head>
  <meta charset="utf-8">
  <title>register form</title>
  <link rel = "stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
    <div class="center">
      <h1>register</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>username</label>
        </div>
        <div class="txt_field">
            <input type="email" required>
            <span></span>
            <label>email</label>
          </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>password</label>
        </div>
        <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>confirm password</label>
        </div>
        <input type="submit" value="create">
        <div class="signup_link">
            already a member? <a href="login.html">log in</a>
        </div>
      </form>  
    </div>    
    </body>
</html>