<?php

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM karyawan");
?>
<html>

<head>
    <title>Homepage</title>
    <style>
        #container {
            background-color: skyblue;
            background-size: cover;
        }
        button {
            padding: 15px;
        }
        #button:hover {
            box-shadow: snow;
        }
        h1 {
            font-size: 30px;
            color: black;
        }
    </style>
</head>

<body>
    <div id="container">
        <center>
        <h1>Selamat datang :)</h1>
        <button><a href="add.php">Tambah Karyawan</a></button>
        </center>
    </div>
    <section id="table">
        <center>
            <table width='80%' border=1>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Update</th>
                </tr>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$user_data['idkaryawan']."</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['mobile'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>".$user_data['alamat']."</td>";
                echo "<td>".$user_data['jeniskelamin']."</td>";
                echo "<td>".$user_data['tempatlahir']."</td>";
                echo "<td>".$user_data['tanggallahir']."</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
            }
            ?>
            </table>
        </center>
    </section>
</body>
</html>