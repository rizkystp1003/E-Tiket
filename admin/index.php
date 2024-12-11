<!DOCTYPE html>
<html>

<head>
    <title>E-Tiket | Mode Admin</title>
    <link rel="icon" href="../image/E-Tiket.png">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <style>
        .card {
            margin: 10px 0;
            padding: 10px;
            min-height: 150px;
            /* Menyamakan tinggi kartu */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card h5 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .btn {
            padding: 0 10px;
            font-size: 0.9rem;
            height: auto;
            line-height: 2rem;
        }

        .card-content {
            padding: 10px;
        }

        .card-action {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <?php include "nav.php"; ?>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <?php include "koneksi.php";
                    $ss = mysqli_query($conn, 'select * from admin where username="' . $_SESSION['admin'] . '" ');
                    $ds = mysqli_fetch_array($ss);
                    ?>
                    <div class="card-content">
                        <h5>Selamat datang,</h5>
                        <p><i><?= $ds['username']; ?>.</i></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card red white-text">
                    <div class="card-content">
                        <h5>Transportation</h5>
                    </div>
                    <div class="card-action">
                        <a href="trans.php" target="_blank" class="btn white-text">Open</a>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card green white-text">
                    <div class="card-content">
                        <h5>Rute</h5>
                    </div>
                    <div class="card-action">
                        <a href="rute.php" target="_blank" class="btn white-text">Open</a>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card" style="background-color: #F39C12; color: white;">
                    <div class="card-content">
                        <h5>Reservation</h5>
                    </div>
                    <div class="card-action">
                        <a href="reserv.php" target="_blank" class="btn white-text">Open</a>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="card" style="background-color: #283646; color: white;">
                    <div class="card-content">
                        <h5>User</h5>
                    </div>
                    <div class="card-action">
                        <a href="user.php" target="_blank" class="btn white-text">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>