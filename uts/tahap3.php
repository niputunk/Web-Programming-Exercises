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
        session_start();
        include_once("./dbcon.php");
        if(isset($_COOKIE['player'])){
            if($_SESSION['nyawa']==0){
                $insert = "INSERT INTO game_mtk (player, skor) VALUES ('{$_COOKIE['player']}', '{$_SESSION['skor']}')";
                if(!mysqli_query($conn, $insert)){
                    die ("Koneksi gagal:". $conn->connect_error);
                }
                $fetch = "SELECT * FROM game_mtk ORDER BY skor DESC LIMIT 10";
                $search = mysqli_query($conn,$fetch);
                $index = 1;
                if (mysql_num_rows($search)>0){
                    ?>
                    <h1>Leaderboard</h1>
                    <table>
                        <tr>
                            <th>Player</th>
                            <th>Score</th>
                        </tr>
                        <?php
                        while ($data = mysqli_fetch_assoc($search)){
                            echo("<tr>
                                <td>{$data['Player']}</td>
                                <td>{$data['Skor']}</td>
                                </tr>");
                        }
                        mysqli_close($conn);
                        ?>
                    </table>
                    <?php
                }
                ?>
                <h1>Hello, <?php echo $_COOKIE['player']?> Permainan sudah selesai, semoga lain kali bisa lebih baik.</h1>
                <h1>Skor : <?php echo $_COOKIE['skor']?></h1>
                <a href="tahap3.php" class="btn">Main lagi</a>
                <?php
                $_SESSION['angka1'] = rand(0,20);
                $_SESSION['angka2'] = rand(0,20);
                $_SESSION['nyawa'] = rand(0,20);
                $_SESSION['skor'] = rand(0,20);
                    ?>
            } 
        }
        ?>
    </div>
    </body>
</html>