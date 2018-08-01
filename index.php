<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>PHP Case Study</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Let's Play a Game!</h1>
            <img src="https://media1.tenor.com/images/7870749c2e94f8fd6c5a0d161edb23b7/tenor.gif?itemid=4890659"/>
            </div>
            <div>
                <h3><button onclick="makeRandomString()">Generate Random Word</button></h3>
            </div>
            <div class="form">

                <form name="user-input" action="game.php" method="post">
                    Word 1: <input type="text" name="word1" maxlength="8"><br>
                    Word 2: <input type="text" name="word2" maxlength="8"><br>
                    Word 3: <input type="text" name="word3" maxlength="8"><br>
                    Rand0: <img class='rambo' src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/John_Rambo.jpg/250px-John_Rambo.jpg"><input type="text" name="randomString" id="random-word"> <br>
                    <input type="submit">
                </form>
            </div>
        </div>
    <script>
    function makeRandomString() {
        let text = "";
        let possibleCharacters = "abcdefghijklmnopqrstuvwxyz";

        for(let i = 0; i < 1024; i ++){
            text += possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
        }   
        // let randomID = document.getElementById("random-word")
        // randomID.innerHTML = text;
        document.forms['user-input'].elements['randomString'].value = text;
        return text;
        
    }
    // console.log(makeRandomString());

    
    </script>
</body>
</html>