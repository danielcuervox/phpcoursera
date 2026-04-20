<!DOCTYPE html>
<html>
<head>
    <title>Daniel Cuervo PHP</title>
</head>
<body>
    <h1>Daniel Cuervo PHP</h1>
    
    <pre>
    DDDDDD
    D     D
    D     D
    D     D
    DDDDDD
    </pre>

    <p>
    The SHA256 hash of "Daniel Cuervo" is:
    <?php
        print hash('sha256', 'Daniel Cuervo');
    ?>
    </p>

    <a href="fail.php">Click here to check the error setting</a>
    <br>
    <a href="check.php">Click here to cause a traceback</a>
</body>
</html>