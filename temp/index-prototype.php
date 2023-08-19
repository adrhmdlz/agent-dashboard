<?php

include 'config.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <h2 class="navbar-brand text-white">Dashboard</h2>
                <div class="navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" id="tipeServer" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih tipe server
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="tipeServer">
                                <form class="px-4 py-3" action="index.php" method="GET">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option1" name="semua" id="checkbox1" checked="checked">
                                        <label for="checkbox1" class="form-check-label">
                                            Semua
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option2" name="tipe1" id="checkbox2">
                                        <label for="checkbox2" class="form-check-label">
                                            Tipe 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option3" name="tipe2" id="checkbox3">
                                        <label for="checkbox3" class="form-check-label">
                                            Tipe 2
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option4" name="tipe3" id="checkbox4">
                                        <label for="checkbox4" class="form-check-label">
                                            Tipe 3
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option5" name="tipe4" id="checkbox5">
                                        <label for="checkbox5" class="form-check-label">
                                            Tipe 4
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="option6" name="tipe5" id="checkbox6">
                                        <label for="checkbox6" class="form-check-label">
                                            Tipe 5
                                        </label>
                                    </div>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <div class="row" id="dashboardRow">
            <?php

            if (isset($_GET['semua'])) {
                $selector = $_GET['semua'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server");
            } elseif (isset($_GET['tipe1'])) {
                $selector = $_GET['tipe1'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server WHERE tipe_server like '%".$selector."%'");
            } elseif (isset($_GET['tipe2'])) {
                $selector = $_GET['tipe2'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server WHERE tipe_server like '%".$selector."%'");
            } elseif (isset($_GET['tipe3'])) {
                $selector = $_GET['tipe3'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server WHERE tipe_server like '%".$selector."%'");
            } elseif (isset($_GET['tipe4'])) {
                $selector = $_GET['tipe4'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server WHERE tipe_server like '%".$selector."%'");
            } elseif (isset($_GET['tipe5'])) {
                $selector = $_GET['tipe5'];
                $data_selector = mysqli_query($koneksi, "SELECT * FROM data_server WHERE tipe_server like '%".$selector."%'");
            } else {

            }
            
            while ($row = mysqli_fetch_assoc($data_selector)) {
            ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-header text-center fw-bold bg-dark text-white"><?php echo $row['nama_server']; ?></div>
                        <div class="card-body">
                            <p class="card-text">ID : <?php echo $row['id']; ?></p>
                            <p class="card-text">IP : <?php echo $row['ip_server']; ?></p>
                            <p class="card-text">Tipe : <?php echo $row['tipe_server']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>