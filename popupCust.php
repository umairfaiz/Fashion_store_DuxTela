<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dux-Tela</title>
        <link href="popup_customization/css/popup.css " rel="stylesheet">
    </head>
    <body>
        <!-- Trigger/Open The Modal -->
        <p>Dux-Tela Terms and conditions</p><br><br>  
          <p>Dux-Tela Size chart</p><br><br> 
       <button id="mycustBtn">I understand, proceed</button>

        <!-- The Modal -->
        <div id="mycustModal" class="custermization_modal">

            <!-- Modal content -->
            <div class="custermization_modal-content">
                <div class="custermization_modal-header">
                    <span class="close">&times;</span>
                    <h2>Create your own</h2>
                </div>
                <div class="custermization_modal-body">
                      <?php
                    include 'index1.php';
                    ?>
                </div>
<!--                <div class="custermization_modal-footer">
                    <h3>Modal Footer</h3>
                </div>-->
            </div>

        </div>

        <script src="popup_customization/js/popup.js"></script>
    </body>
</html>
