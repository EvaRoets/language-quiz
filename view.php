<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language Quiz</title>
</head>
<body>
<h1>Language Quiz</h1>
<div class="gamefield">

    <!-- add a form for the user to play the game -->
    <form action="" method="post" id="quiz" name="quiz">
        <!--            <div class="form-row">-->
        <!--                <div class="form-group col-md-6">-->
        <!--                    <label for="player">Player Name: </label>-->
        <!--                    <input type="text" id="player" name="player" value="-->
        <? //= $player->name; ?><!--"><br>-->
        <!--                </div>-->
        <!--            </div>-->
        <div class="form-row">
            <div class="form-group col-md-6">
                <!-- display french word-->
                <label for="randomWord">What is the translation
                    of...<b><?= $game->randomWord->frenchWord; ?></b>?</label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <!-- player input field-->
                <label for="playerTranslation">Your answer: </label>
                <input type="text" id="playerTranslation" name="playerTranslation" placeholder="Your translation"><br>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="buttonfield">
                    <!-- check result button-->
                    <input type="submit" name="submit" value="Check my translation" class="btn"/>

                    <!-- reset button-->
                    <input type="reset" name="reset" value="Reset my score" class="btn"/>
                </div>
            </div>
        </div>

<!--        <div class="form-row">-->
<!--            <div class="form-group col-md-6">-->
<!--                <!-- display result right/wrong-->-->
<!--                <p class="message">--><?//= $game->message ?><!--</p>-->
<!--                <!--                    <p class="score">-->--><?// //= $game->totalScore ?><!--<!--</p>-->-->
<!--                <!--                    TODO check why message is not being displayed-->-->
<!--            </div>-->
<!--        </div>-->

    </form>
</div>

</body>
</html>