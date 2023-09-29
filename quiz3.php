<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="image-top">
            <img src="img/zapomniec.jpg" alt="zapomniec"/>
            <audio id="audio">
                <source src="music/jak.mp3" type="audio/mpeg">
              </audio>
        </div>
        <div class="player">
                <div class="buttons-play">
                    <input type="image" id="prev" src="img/prev.png" onclick="reset()" alt="next"/>
                </div>
                <div class="buttons-pause">
                    <input type="image" id="pause" src="img/play.png" onclick='playtone()' alt="pause"/>
                </div>
                <div class="buttons-play">
                    <input type="image" src="img/next.png" alt="next"/>
                </div>
            </div>
            <script>
            var audio = document.getElementById('audio');
            var pause = document.getElementById('pause');
            var c=0;
             function playtone(){
            if(c==0){
                c=1;
                audio.play();
            }
            else{
                c=0;
                audio.pause();
            }
            }
            function reset(){
            audio.currentTime = 0;
            }
            </script>
    </div>
    <div class="container-answers">
        <div class="answer">
            <form action="quiz3.php" method="POST">
            <button type="submit" name="q3" value="a">Ta miłość</button>
            <button type="submit" name="q3" value="b">Jak zapomnieć</button>
            <button type="submit" name="q3" value="c">Tango</button>
        </form>
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
    $zapytanie="SELECT odp FROM odpowiedzi WHERE id=3";
    $wynik=$polaczenie->query($zapytanie);
    while($wiersz=$wynik->fetch_assoc()){
    if(isset($_POST['q3'])){
        if($_POST['q3'] == $wiersz['odp'])
        {
        header("location:tak.php");
        }
        else
        {
        header("location:nie.php");
        }
        }
        }
        $polaczenie->close();
        ?>
        </div>
    </div>
</body>
</html>