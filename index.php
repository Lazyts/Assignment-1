<!DOCTYPE html>
<html>
    <head>
        <title>Chen Shen</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div class="container">
            <h1>Chen Shen</h1>
            <img src="profilepic.jpg" alt="dusty" height="350" width=auto>
            <h2>About me</h2>
            
            <p>The above is a picture of Dusty. Male, single and ready to mingle~</p>
            <p>I was born and raised in Sichuan, China, where is oftenly seen as "szechuan" for spicy Chinese food. 
            I worked in fashion industry for a few years and now I am a real estate agent. I believe digital media is the future and I do want to learn more. </p>
            <h2>Walt Disney Quote</h2>
            <p>
                <?php
                $quotes = array (
                "The more you like yourself, the less you are like anyone else, which makes you unique.",
                "The way to get started is to quit talking and begin doing".
                "If you can dream it, you can do it. "
                );
                $random_keys = array_rand($quotes,1);
                echo $quotes[$random_keys[0]]."<br>";
                ?>
            </p>
        </div>
    </body>
</html>