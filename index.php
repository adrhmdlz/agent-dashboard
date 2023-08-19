<?php

include 'config/config.php';

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agent - Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="style/reset.css"> -->
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container">
                <!-- Brand -->
                <h2 class="navbar-brand text-white">Dashboard</h2>
                <div class="navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white" id="tipeServer" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pilih tipe server</a>
                            <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="tipeServer">
                                <form class="px-4 py-3" action="index.php" method="get">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="semua" name="filter[]">
                                        <label for="checkbox1" class="form-check-label ms-2">Semua</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="1" name="filter[]">
                                        <label for="checkbox2" class="form-check-label ms-2">Tipe 1</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="2" name="filter[]">
                                        <label for="checkbox3" class="form-check-label ms-2">Tipe 2</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="3" name="filter[]">
                                        <label for="checkbox4" class="form-check-label ms-2">Tipe 3</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="4" name="filter[]">
                                        <label for="checkbox5" class="form-check-label ms-2">Tipe 4</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="5" name="filter[]">
                                        <label for="checkbox6" class="form-check-label ms-2">Tipe 5</label>
                                    </div>
                                    <input type="submit" class="mt-3 ms-4 btn btn-dark" value="Pilih">
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Menampilkan informasi server (Card) -->
        <div class="container container-content">
            <div class="row" id="dashboardRow">
                <?php while ($row = mysqli_fetch_assoc($dataServer)) { 
                    // Mengecek apakah tipe server ada dalam filter atau checkbox "semua" terpilih
                    $tipeServer = $row['tipe_server'];
                    if (in_array('semua', $filter) || in_array($tipeServer, $filter)) {
                ?>
                <div class="col-md-2">
                    <div class="card" data-tipe="<?php echo $row['tipe_server']; ?>">
                        <div class="card-header text-center fw-bold bg-dark text-white fs-6"><?php echo $row['nama_server']; ?></div>
                        <div class="card-body">
                            <p class="card-text" style="font-size: 13px; line-height: 6px;">ID : <?php echo $row['id']; ?></p>
                            <p class="card-text" style="font-size: 13px; line-height: 6px;">IP : <?php echo $row['ip_server']; ?></p>
                            <p class="card-text" style="font-size: 13px; line-height: 6px;">Tipe : <?php echo $row['tipe_server']; ?></p>
                            <p class="card-text" style="font-size: 13px; line-height: 6px;">Backup : <?php echo $row['tanggal_backup']; ?></p>
                        </div>
                        <div class="pilihserver mx-auto">
                            <button type="button" class="btn btn-outline-dark btn-sm btn-pilih-server">Pilih server</button>
                        </div>
                    </div>
                </div>
                <?php }
                } ?>
            </div>
            
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                <ul class="dropdown-menu animate slideIn">
                    <li><a href="#" class="dropdown-item">Opsi 1</a></li>
                    <li><a href="#" class="dropdown-item">Opsi 2</a></li>
                    <li><a href="#" class="dropdown-item">Opsi 3</a></li>
                </ul>
            </div>
        </div>
        
        <!-- <footer class="container">
            <h5>Made it with ❤</h5>
        </footer> -->
        
        <!-- <script src="script/script.js" type="text/javascript" ></script> --> <!-- * Dump script, maybe usefull for next day? -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-KyZXEAg3QhqLMpG8r+Y9db1c8sZIqnrw5/16W7v9QCk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>