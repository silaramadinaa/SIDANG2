<?php
echo "
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Halaman Login</title>
</head>
<body>
<link rel='stylesheet' href='style.css' media='screen' title='no title'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
    <form action='login.php' method='post'>
      <div class='login'>

          <div class='avatar'>
            <i class='fa fa-user'></i>
          </div>

          <h2>Login Form</h2>

          <div class='box-login'>
            <i class='fas fa-envelope-open-text'></i>
            <input type='text' name='username' placeholder='Username'>
          </div>

          <div class='box-login'>
            <i class='fas fa-lock'></i>
            <input type='password' name='password' placeholder='Password'>
          </div>

          <input type='submit' name='login' class='btn-login'></button>
          <div class='bottom'>
            <a href='login.php'>Forgot Password</a>
          </div>
      </div>
</form>
</body>
</html>
";
if(isset($_POST['pesan'])){
  if($_GET['pesan'] == "gagal"){
    echo "Anda tidak bisa login";
  } else {
    
  }
}
?>