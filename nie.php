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
<iframe src="" allow="autoplay" id="audio" style="display: none"></iframe>
            <audio autoplay loop>
                <source src="music/boo.mp3" type="audio/mpeg">
              </audio>
    <div class="container">
    <?php 
        echo '<p>'."Nieprawidłowa odpowiedź!".'</p>';
    ?>
    </div>
</body>
</html>