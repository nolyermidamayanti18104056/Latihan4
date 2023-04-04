<?php 
    $usr= "";
    $pwd= "";
    $salah= 0;

    if(isset($_GET["txUSER"])){
        $usr= $_GET["txUSER"];
        $pwd= $_GET["txPASS"];

        if($user==""){
            $salah= 1;
         } else{
             echo "isi dari field user :" .$user;
         }
     
         if($pwd==""){
             $salah= 1;
         } else{
             echo "isi dari field user :" .$pwd;
         }
    }
    
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Metode GET</title>
</head>
<body>
    
<?php
    if($salah== 1){
        echo "<div style='color: red'>User Name/Password Masih Kosong</div>";
    }
?>
    <form method= "GET" action= "Latihan1.php">
        <div>
            User name
            <input type= "text" name= "txUSER">
        </div>

        <div>
            Password
            <input type= "password" name= "txPASS">
        </div>

        <div>
            <button type= "submit"> login= </bottom>
        </div>
</body>
</html>