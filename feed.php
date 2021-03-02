<?php
    include 'comment.php';
    include 'databse.js';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Feed</title>
    <link rel="icon" type="image/jpg" href="images/favicon.jpg">
    <link rel="stylesheet" href="css/sharedstyle.css">
    <link rel="stylesheet" href="css/feed.css">
    
</head>
<body>
    <header>
        <h1>No Mama, No Mirror, No Friends</h1>

        <ul id="navlinks">
            <li class="navlink"><a href="index.html">Home</a></li>
            <li class="navlink"><a href="advice.html">Ask Advice</a></li>
            <li class="navlink"><a href="blog.html">Blog</a></li>
            <li class="navlink"><a href="musthaves.html">My Must Haves</a></li>
            <li class="navlink"><a href="feed.php">Feed</a></li>
        </ul>
    </header>

    <div id='content'>
        <main id='central'>
            <form id='form' method='POST' action='<?=setComments()?>'>
                Name:<br>
                <input type='text' name='u_name'><br>
                Message:<br>
                <textarea id = 'comment' name='u_comment'></textarea><br><br>
                <input type='hidden' name='message'/>
                <input name='commentSubmit' type='submit' value='Send'>
            </form>

            <?=getComments()?>

        </main>
        
        <aside id="other-left">
            <h2>Fashion Feed</h2>
            <p>I wanna hear about all your favorite things</p>
            <p>Share your favorite outfits, products, recepies or read about others.</p>
            <p>Let's share all our tips and tricks.</p>
        </aside>
    </div>

    
</body>
</html>