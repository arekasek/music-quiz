<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        window.setTimeout(function(){window.location.href='index.html';}, 2000);
    </script>
</head>
<body>

    <div class="container">
    <?php 
    $host="localhost";
    $user="root";
    $password="";
    $nazwabazy="song";

    $polaczenie=new mysqli($host,$user,$password,$nazwabazy);
    if($polaczenie->connect_error)
    {
    die("Blad polaczenia".$polaczenie->connect_error);
    }
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $tytul=$_POST['tytul'];
    $album=$_POST['album'];

    $zapytanie="INSERT INTO muzyka (id,imie_wyk,nazwisko_wyk,tytul_pios,album) VALUES ('','$imie','$nazwisko','$tytul','$album')";
    $wynik=$polaczenie->query($zapytanie);
    echo '<p>'."Pomyślnie dodane".'</p>';
    $polaczenie->close();
?>
    </div>
</body>
</html>