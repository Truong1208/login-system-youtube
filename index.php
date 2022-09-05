<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home index">
<div class="wrap">
    <nav class="nav nav-custom">
        <h1 style="font-family: Arial;font-size: 23px; line-height: 60px; margin-left: 30px; color: lightblue">LOGIN</h1>
        <form class="form-signin" action="">
            <input type="text" placeholder="Username/Email" name="user_uid">
            <input type="password" placeholder="Password" name="user_pwd">
            <button type="submit">Login</button>
        </form>
        <a class="btn btn-red sign-up" href="signup.php">Register</a>
    </nav>
    <section>
        <h3 style="text-align: center; font-family: Arial; font-size: 18px; color: #6c6565;">Sign Up</h3>
        <div class="content">
            <form class="content-form" action="">
                <input type="text" placeholder="Họ" name="user_first">
                <input type="text" placeholder="Tên" name="user_last">
                <input type="email" placeholder="Email" name="user_email">
                <input type="text" placeholder="username" name="user_uid">
                <input type="password" placeholder="Password" name="user_pwd">
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </section>
</div>
</body>
</html>