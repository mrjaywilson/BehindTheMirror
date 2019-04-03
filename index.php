<?php include 'game.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Behind The Mirror</title>

    <style>

        #message {
            color: #80bdff;
            font-family: "Lucida Console";
        }

        #content {
            height: 500px;
            width: 100%;
            padding: 15px 15px 15px 15px;
        }

        input[type="text"] {
            background-color: #000000;
            border-color: #000000;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);

            color: #80bdff;
            padding-left: 10px;

            width: 100%;
        }

        input[type="text"]:focus {
            border-color: #000000;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);

            font-family: "Lucida Console";
        }

        label {
            color: #80bdff;
        }

        h2 {
            align-content: center;
            color: #80bdff;
        }

        hr {
            border-color: #0c5460;
            background-color: #0c5460;
            color: #0c5460;
        }

        #title {
            color: #80bdff;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #000000">
<div class="container">
    <div class="col">

        <div class="row">
            <div class="col-md-12 text-center">
                <pre id="title">
╔╗ ┌─┐┬ ┬┬┌┐┌┌┬┐  ╔╦╗┬ ┬┌─┐  ╔╦╗┬┬─┐┬─┐┌─┐┬─┐
╠╩╗├┤ ├─┤││││ ││   ║ ├─┤├┤   ║║║│├┬┘├┬┘│ │├┬┘
╚═╝└─┘┴ ┴┴┘└┘─┴┘   ╩ ┴ ┴└─┘  ╩ ╩┴┴└─┴└─└─┘┴└─
By: Jay Wilson</pre>
            </div>
        </div>

        <hr/>

        <div id="content" class="row">
            <?php showMessage("7 Years Ago...<br/><br/>The October evening is cold and the room is very dark save for the glow of the television. You and your friend are sitting in the living room watching movies and eating too many sweets. There's popcorn littered all over the place from the last time you two jumped while watching a scary movie. The film isn't boring, but you're both tired from being at school all day. Eventually, you both fall asleep shortly after the next horror movie starts.<br/><br/>You wake up some time later while the movie's credits roll. Your friend is no longer sitting next to you."); ?>
        </div>
        <div class="row">
            <input type="text" value="" autofocus />
        </div>
    </div>
</div>

</body>
</html>