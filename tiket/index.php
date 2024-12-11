<html>

<head>
    <title> | Penyedia Tiket terlucu</title>
    <link rel="icon" href="../image/E-Tiket.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <style>
        .card-panel {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .welcome-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .booking-card {
            padding: 20px;
            text-align: left;
        }

        .booking-card h5 {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .booking-card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #004d40;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .booking-card a:hover {
            background-color: #00796b;
        }
    </style>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s4">
                <div class="card-panel teal white-text">
                    <?php include "koneksi.php";
                    $ss = mysqli_query($conn, 'select * from user where username="' . $_SESSION['user'] . '" ');
                    $ds = mysqli_fetch_array($ss);
                    ?>
                    <h5>Selamat datang,
                        <i><?= $ds['username']; ?>.</i>
                    </h5>
                </div>
            </div>
            <div class="col s12 m8">
                <div class="card-panel green white-text booking-card">
                    <h5><b>Book</b>Bookingan <i class="ion-ios-cart"></i></h5>
                    <a href="keranjang.php" class="white-text">Open</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card-panel default">
                    <center>
                        <h1>Cari Tiket</h1>
                    </center>
                    <form method="post" action="cari.php">
                        <div class="input-field">
                            <input type="text" name="cari" id="price">
                            <label for="price">Cari</label>
                        </div>
                        <button class="btn waves-effect blue"><i class="ion-search"></i> Cari</button>
                    </form>
                </div>
            </div>
            <div class="col s12">
                <b>Nb: </b><i>Sebelum mencari tiket, Pastikan anda sudah mengisi data diri anda</i> <a href="pengaturan.php"><button class="btn waves-effect green"><i class="ion-ios-settings"></i></button></a>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>