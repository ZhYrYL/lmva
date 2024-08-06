<?php
    include 'connection.php';
    require_once '../phpqrcode/qrlib.php';
    $path = 'img';
    $qrcode = $path.time().".png";
    $qrimage = time().".png";

    if(isset($_REQUEST['generateQR']))
    {
        $qrtext = $_REQUEST['qrtext'];
        $query = mysqli_query($connection,"INSERT into qrcode set qrtext='$qrtext', qrimage='$qrimage'");
        if($query)
        {
            ?>
            <script>
                alert("Data save successfully");
                
            </script>
            <?php

            header("location: ../adminDerm.php");
        }
    }

    QRcode :: png($qrtext, $qrcode, 'H', 4, 4);
    // echo "<img src='".$qrcode."'>";
?>