<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Berhitung</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            background-color: gray;
            min-height: 100%;
            background-position: center;
        }
    </style>
</head>

<body>
<div class="container">
    <?php
        if (!isset($_COOKIE['player'])){
            ?>
            <a>LOGIN</a>
            <form action="tahap2.php" method="post">
                <div class="mb-3">
                    <label for='player' class="form-label">Player</label>
                    <input type="text" class="form-control" name="Player">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
            <?php
        } else {
            echo "Halo ".$_COOKIE['player'].", selamat datang kembali di permainan ini!"; 
            ?>
            <a class="btn btn-primary" href="tahap3.php" >START GAME</a>
            <?php
        }
        ?>
</body>
</html>