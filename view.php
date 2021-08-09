<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
    <h1>Language Quiz</h1>
    <div class="gamefield">

        <!-- TODO: add a form for the user to play the game -->
        <form action="" method="post" id="quiz" name="quiz">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- TODO display french word-->
                    <label for="translation">Translate: </label>
                    <input type="text" id="frenchword" name="frenchword" value="<?= ""; ?>"><br>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <!-- TODO player input field-->
                    <label for="translation">Your answer: </label>
                    <input type="text" id="translation" name="translation" value="<?= ""; ?>"><br>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="buttonfield">
                        <!-- check result button-->
                        <input type="submit" value="Check my translation" class="btn"/>

                        <!-- reset button-->
                        <input type="reset" value="Reset my score" class="btn"/>
                    </div>
                </div>
             </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <!--TODO display result right/wrong-->

                </div>
            </div>

        </form>
    </div>

</body>
</html>