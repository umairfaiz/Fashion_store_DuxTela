<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="alert_msg/alertMsg.css" rel="stylesheet"> 
    </head>
    <body>
       
        <div class="alert">
            <span class="closebtn">&times;</span>  
            <strong><?php
        echo $_SESSION['message'];
        ?></strong>
        </div>
        
    </body>
    <script src="alert_msg/alertmsg.js"></script>
</html>
