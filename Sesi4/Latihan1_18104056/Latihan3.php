<?php
    $path= "upgambar/";

    if(isset($_POST["kirim"])){
        
        $_file= $_path . basename($_FILES["upGAMBAR"]["name"]);
        move_uploaded_file($_FILES["upGAMBAR"]["TMP_name"],$filex);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ufload File</title>
</head>
<body>
    
<?php
if(isset($_POST["kirim"])){
    echo"<img src=' ".$_filex."'>";
}
?>
    <form method="POST" action="Latihan3.php" enctype="multipart/form-data">
        <div>
            upload file gambar
            <input type= "file" name="upGAMBAR">
        </div>

        <div>
            <button type="submit"> upload gambar </button>
            <input type="hidden" name="kirim" value="OK">
        </div>

    </form>
</body>
</html>