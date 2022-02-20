<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; 
    $page = 'Sport News';
    ?>
    <title><?= $page?></title>
</head>
<body>
    <header class="bg-primary py-3">
        <nav class="navbar navbar-expand-lg navbar-dark" style="margin: 0 15% 0 10%">
            <div class="container-fluid">
                <div class="container">
                    <h1 style="font-family: 'Monoton', cursive; color: white"><?= $page?></h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-weight: bold;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Club</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                League
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">UEFA</a></li>
                                <li><a class="dropdown-item" href="#">World Cup</a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="#">International Cup</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <form class="d-flex" method="post">
        <div class="input-group" style="margin:0 125px;">
            <div class="form-outline">
                <input placeholder="Cari Pemain" type="search" name="cari" id="form1" class="form-control me-3" aria-label="Search" />
            </div>  
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search">Cari</i>
            </button>
        </div>
    </form>
    <br>

    <div class="container">
        <?php
        if(isset($_POST['cari'])){
            $cari = $_POST['cari'];
            $i = 0;
        }
        include 'koneksi.php';
        if(empty($cari)) {
            $query = "SELECT * FROM barcelona";
        }
        else {
            $query = "SELECT * FROM barcelona WHERE id = '$cari' or nama LIKE '%$cari%' or nomor LIKE '%$cari%' or asal LIKE '%$cari%'";
        }
        $data = mysqli_query($koneksi, $query);
            if(!$query){
                die('SQL Error: '. mysqli_error($koneksi));
            }
            else{
                echo '
                    <table border="2" class="table table-primary table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nomor</th>
                                <th>Asal</th>
                            </tr>
                        </thead>
                        <tbody>';
                            while($row = mysqli_fetch_array($data)){
                                echo '<tr class="table-light">
                                        <td>'.$row['id'].'</td>
                                        <td>'.$row['nama'].'</td>
                                        <td>'.$row['nomor'].'</td>
                                        <td>'.$row['asal'].'</td>
                                    </tr>';
                                    $i++;
                            }
                        echo '</tbody>
                    </table>';
            }
        if(!empty($cari) && $i == mysqli_fetch_array($data)) {
            sleep(2);
            echo '<h5 class="text-center">Data '. $cari .' tidak dapat ditemukan</h5>';
        }
        mysqli_free_result($data);
        mysqli_close($koneksi);
        $_GET['cari'] = '';
        ?>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
