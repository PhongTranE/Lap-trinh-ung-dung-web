<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh hoa Cookie</title>
</head>

<body>
    <h2>Minh hoa cookie</h2>

    <?php
    # check cookie
    try {
        if (isset($_COOKIE['user'])) {
            $username = $_COOKIE['user'];
            echo 'Welcome' . $username;
        } else {
            die('You are not logged in');
        }
    } catch (Exception $e) {
        # store in database
        echo $e->getMessage();
    }
    ?>
</body>

</html>