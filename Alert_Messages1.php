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
    </head>
    <body>
         <?php
        $_SESSION['message'] = 'User with this email already exists! Try Logging in.';
$message = $_SESSION['message'];

echo "<SCRIPT>
    
//    if(!alert('$message')){window.location.reload();}
    
if(confirm('$message')){
    window.location.reload();  
}
</SCRIPT>";

?>
        
        <div class="dc_message_box1 dc_focused_bg success closeable">
    <p><strong>Success!</strong> Event completed successfully.</p>
  </div>
  <div class="dc_message_box1 dc_focused_bg error">
    <p><strong>Error!</strong> Event did not complete. (Dialog not closable)</p>
  </div>
  <div class="dc_message_box1 dc_focused_bg warning closeable">
    <p><strong>Warning!</strong> 5mb space remaining.</p>
  </div>
  <div class="dc_message_box1 dc_focused_bg tip closeable">
    <p><strong>Handy Tip:</strong> Press Win-L to lock windows.</p>
  </div>
  <div class="dc_message_box1 dc_focused_bg neutral closeable">
    <p><strong>Notify:</strong> Lock down all systems prior to logout.</p>
  </div>
    </body>
</html>
