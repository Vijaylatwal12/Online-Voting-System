<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    ?>
<html>
    <head>
        <title>E Voting System -Dashboard</title>
    </head>
    <body>
        <button>Back</button>
        <button>Logout</button>
     <h1>E Voting System</h1>
     <hr>
     <div id="profile"></div>
     <div id="group"></div>
    </body>
</html>