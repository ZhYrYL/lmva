<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // require_once 'connection.php';
        require_once 'phpqrcode/qrlib.php';
        $path = 'img/';
        $qrcode = $path.time().".png";
        // $qrimage = time().".png";
        
        // if(isset($_REQUEST['sbt-btn']))
        // {
        // $qrtext = $_REQUEST['qrtext'];
        // $query = mysqli_query($connection,"insert into qrcode set qrtext='$qrtext', qrimage='$qrimage'");
        //     if($query)
        //     {
        //         ?>
                 <script>
        //             alert("Data save successfully");
        //         </script>
                 <?php
        //     }
        // }
        
        QRcode :: png("Zhyryll", $qrcode, 'H', 4, 4);
        echo "<img src='".$qrcode."'>";

    ?>
</body>
</html>