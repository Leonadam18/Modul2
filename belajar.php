<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP susah</title>
    </head>
    <style>
        body{
            background-color: green;
        }
        .border {
            background-color: white;
            width: 200px;
            margin: 10px 15px;
            padding: 25px;
            border-radius: 15px;
            font-family: sans-serif;
        }
        .woowkokwok {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
        }
        .button {
            color: white;
            background-color: green;
            border-radius: 15px;
            padding: 5px 25px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
    <body>
        <div class="woowkokwok">
        <?php
        $dataProduk = array(
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("IPhone 12 Pro Max", "Apple", 20999000, true),
        array("IPhone 12 Mini", "Apple", 10999000, false),
        );
        foreach ($dataProduk as $key => $value) {
        echo '<div class="border">';
        echo '<h3>'.$value[0].'</h3>';
        echo '<p>'.$value[1].'</p>';
        echo '<p class="text-2xl">Rp. '.number_format($value[2]).'</p>';
        if($value[3] === true){
            echo '<p style="color: green">Stok Tersedia</p>'.'<a class="button" href="https://www.youtube.com/watch?v=xvFZjo5PgG0">Order</a>';
        }else {
            echo '<p style="color: red">Stok Habis</p>';
        }
        echo '</div>';
        }
        ?>
        </div>
    </body>
</html>