<?php
    // 변수전달 방법 => GET, POST
    //echo $_GET['userid'] .' : '. $_GET['passwd'];
    // 문자열을 연결하는 연산자 .
    // $userid = $_GET['userid'];
    // $passwd = $_GET['passwd'];

    $userid = $_POST['userid'];
    $passwd = $_POST['passwd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assets/bootstrap-4.5.3/css/bootstrap.min.css">
<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
    font-size: 3.5rem;
    }
}

html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<!-- <link href="signin.css" rel="stylesheet"> -->
<!-- <link href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css" rel="stylesheet"> -->
<title>Document</title>
</head>
<body class="text-center">
<form class="form-signin" action="receiver.php" method="get">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="아이콘" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="userid" class="form-control" placeholder="Email address" required autofocus value="<?php echo $userid ?>">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Password" required value="<?php echo $passwd; ?>">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>
</body>
</html>