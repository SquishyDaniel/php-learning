<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
        <?php 

        try {
            $dbh = new PDO('mysql:host=host.docker.internal;port=6603;dbname=defaultdbname', "root", "super-secret-password");
        } catch(Exception $exception) {
            echo 'Caught exception: ', $exception->getMessage(), "\n";
            $dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=defaultdbname', "root", "super-secret-password");
        }

        // echo "Connected successfully!"; ?>
</body>
</html>