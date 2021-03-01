<?php
    include 'comment.php';
    include 'database.php';
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
            <li class="navlink"><a href="feed.html">Feed</a></li>
        </ul>
    </header>

    <div id='content'>
        <div id='central'>
            <form id='form' method='POST' action=' <?setComments($conn)?>'>
                Name:<br>
                <input type='text' name='u_name'><br>
                Message:<br>
                <textarea id = 'comment' name='u_comment'></textarea><br><br>
                <input type='hidden' name='message'/>
                <input name='commentSubmit' type='submit' value='Send'>
            </form>

            <?getComments($conn)?>;
        </div>
        
            <aside id='other-left'>
                <h2>Ask me something!</h2>
                <p>I'm here to help in any ways you may need! Weather that be as a mom figure or a friend.</p>
                <p>Ask about outfits, ideas, life! Anything at all</p>
                <p>Enter your name and email along with what you want toi hear from me about and I will email you back shortly!</p>
            </aside>
    </div>

    
</body>
</html>