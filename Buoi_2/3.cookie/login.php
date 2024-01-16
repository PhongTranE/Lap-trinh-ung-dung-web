<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'daclam' && $password == 'abc123') {
        // create cookie
        $cookie_name = 'user';
        $cookie_value = $username;

        setcookie($cookie_name, $cookie_value, time() + 60, '/');
    }

    header('Location: welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Dang nhap he thong</h1>
    <form name="frmPOST" action="" method="post">
        <fieldset>
            <legend>
                Thông tin đăng nhập
            </legend>
            <p>
                <label for="username">Username:</label>
                <input type="username" name="username" id="username" placeholder="Nhập username" />
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Nhập password" />
            </p>

            <p>
                <input type="submit" value="Đăng nhập">
                <input type="reset" value="Hủy">
            </p>

        </fieldset>
    </form>
</body>

</html>