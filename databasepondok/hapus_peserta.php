<?php
    include 'proses_login.php';
    
    if(isset($_GET['id'])){
        $delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
        echo '<script> window.location="data_peserta.php"</script>';
    }