<?php
include('conn.php');
include('style.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>BUS TRANS UPN</title>
    <link href="style.css" rel="stylesheet">
    <link href="" rel="stylesheet">
</head>

<body>
    <header>
        <h2 class="header-title">DATABASE SYSTEM TRANS UPN</h2>
    </header>

    <nav>
        <ul >
            <li class="current"><a href="index.php"> Trans UPN</a></li>
            <li><a href="databus.php">Data Bus</a></li>
            <li><a href="datadriver.php">Data Driver</a></li>
            <li><a href="datakondektur.php">Data Kondektur</a></li>
            <li><a href="addtransupn.php">Add Trans UPN</a></li>
            <li><a href="addbus.php">Add Bus</a></li>
            <li><a href="adddriver.php">Add Driver</a></li>
            <li><a href="addkondektur.php">Add Kondektur</a></li>
            <li><a href="gajidriver.php">Gaji Driver</a></li>
            <li><a href="gajiKondektur.php">Gaji Kondektur</a></li>
        </ul>
    </nav>

    <main role="main">
        <section class="data-section">
            <table border="1" class="data-table">
                <thead>
                    <tr>
                        <th>ID TRANS UPN</th>
                        <th>ID KONDEKTUR</th>
                        <th>ID BUS</th>
                        <th>ID DRIVER</th>
                        <th>JUMLAH KM</th>
                        <th>TANGGAL</th>
                        <th>EDIT DATA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM trans_upn";
                    $result = mysqli_query(connection(), $query);
                    ?>
                    <?php while ($data = mysqli_fetch_array($result)) : ?>
                        <tr>
                            <td><?php echo $data['id_trans_upn']; ?></td>
                            <td><?php echo $data['id_kondektur']; ?></td>
                            <td><?php echo $data['id_bus']; ?></td>
                            <td><?php echo $data['id_driver']; ?></td>
                            <td><?php echo $data['jumlah_km']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td>
                                <a href="<?php echo "updateTransupn.php?id=" . $data['id_trans_upn']; ?>"> Update</a>
                                &nbsp;&nbsp;
                                <a href="<?php echo "deltransupn.php?id=" . $data['id_trans_upn']; ?>"> Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </section>

        <section class="status-section">
            <?php
            if (@$_GET['status'] !== NULL) {
                $status = $_GET['status'];
                if ($status == 'okay')

                {
                  echo '<br><br><div class="status-message">ID Trans BUS berhasil di-update</div>';
              } else if ($status == 'error') {
                  echo '<br><br><div class="status-message status-error" role="alert">ID Trans BUS gagal di-update</div>';
              }
          }
          ?>
  </section>
</main>
</body>

</html>

