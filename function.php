<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar container">
        <a href="#" class="logo">
            <img src="1670222462757.jpg" width="50" height="50">
        </a>
        <input type="checkbox" id="toggler"/>
        <label for="toggler">
            <i class="ri-menu=line"></i>
        </label>
        <div class="menu">
            <ul class="list">
                <li>
                    <a href="operator.php">Operator</a>
                </li>
                <li>
                    <a href="percabangan.php">Percabangan</a>
                </li>
                <li>
                    <a href="Data_type.php">Tipe Data</a>
                </li>
                <li>
                    <a href="function.php">Fungsi</a>
                </li>
                <li>
                    <a href="Perulangan.php">Perulangan</a>
                </li>
                <li>
                    <a href="form.php">Form</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <h2>Function</h2>
    <?php
        function myMessage() {
            echo "Hello world";
        }

        myMessage();

    ?>
</body>
</html>