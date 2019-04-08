<?php include_once 'game.php'; include_once 'service/Database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Behind The Mirror</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/game.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #000000">
<div class="container">
    <div class="row">

        <div class="col">

            <!-- GAME TITLE -->
            <?php include 'layout/title.php'; ?>

            <hr/>

        </div>

    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-md-8">

            <div id="content">
                <?php

                $arr = array(
                    "7 Years Ago...",
                    "The October evening is cold and the room is very dark save for the glow of the television. You and your friend are sitting in the living room watching movies and eating too many sweets. There's popcorn littered all over the place from the last time you two jumped while watching a scary movie. The film isn't boring, but you're both tired from being at school all day. Eventually, you both fall asleep shortly after the next horror movie starts.",
                    "You wake up some time later while the movie's credits roll. Your friend is no longer sitting next to you.");

                showMessage($arr);

                ?>
            </div>

            <br />

            <div id="command">
                <input type="text" value="" autofocus />
            </div>
        </div>

        <div id="map" class="col-sm-4 justify-content-center">
            <div>
                <table>
                    <?php getMap( 6, 3) ?>
                </table>
            </div>
        </div>
    </div>
</div>

<hr/>

<?php include 'layout/footer.php'; ?>

<?php

$db = new Database();

$db->GetLocation("L001");

?>

</body>
</html>