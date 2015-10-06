<?php
// page2.php
session_start();
if (isset($_SESSION['user_id'])) {

header('location:home.php');
} 
?>
<html>                
  <head>                          
    <LINK rel="stylesheet" type="text/css" href="style_login.css">      
<SCRIPT type="text/javascript" src="jquery-1.9.1.min.js"> </script>                       
  </head>      
<script>
$( document ).ready(function() {  
$('#head_container_logo').hide().fadeIn(500);
$('#right_side').hide();
$('#actionpanel').hide().fadeIn(500);
$('#logout').on({
    'mouseenter': function(){
        $('#logout').attr('src','logout_button_clicked.jpg');
    }
}); 
 $('#logout').on({
    'mouseout': function(){
        $('#logout').attr('src','logout_button.jpg');
    }
});  
  $('#settings').on({
    'mouseenter': function(){
        $('#settings').attr('src','settings_button.jpg');
        $('#settings_menu').show('fast');
    }
}); 
 $('#settings').on({
    'mouseout': function(){
        $('#settings').attr('src','settings_button_clicked.jpg');
    }
   
}); 
 $('#page').on({
    'mouseenter': function(){
        $('#settings_menu').hide('drop');
    }
}); 
 $('#left_side').on({
    'mouseenter': function(){
        $('#settings_menu').hide('drop');
    }
}); 
  $('#rightside').on({
    'mouseenter': function(){
        $('#settings_menu').hide('drop');
    }
}); 
  $('#img_logo').on({
    'mouseenter': function(){
        $('#img_logo').attr('src','head_hospital_image_mouseover.jpg');
    }
}); 
 $('#img_logo').on({
    'mouseout': function(){
        $('#img_logo').attr('src','head_hospital_image.jpg');
    }
   
}); 
  $('#name').on({
    'mouseenter': function(){
        $('#settings_menu').hide('drop');
    }
}); 
  $('#logout').on({
    'mouseenter': function(){
        $('#settings_menu').hide('drop');
    }
}); 






      }); 
 </script>                               
  <body>                                  
    <div id="head_container_logo">                                           
      <div id="left_side"> 
        <a href="login.php">                                   
        <img id="img_logo" src="head_hospital_image.jpg" alt="head_hospital_image_mouseover.jpg, 19kB" title="head_hospital_image_mouseover" height="40" width="45">  
                        </a>                                               
        <img src="hospital_imge_text.png" alt="hospital_imge_text.png, 30kB" title="hospital_imge_text" height="30" width="180">                                                             
      </div>                                         
      <div id="right_side">                                      
        <div id="name"><b>NORBERT DURCANSKY</b>                     
          <br>Chirurg                  
        </div>                          
        <img id="avatar" src="avatar_male.jpg" alt="avatar_male.jpg, 23kB" title="avatar_male" height="60px" width="70px">                          
        <img id="settings"  src="settings_button_clicked.jpg" alt="settings_button.jpg, 39kB" title="settings_button" height="60px" width="100px">                          
        <img id="logout" src="logout_button.jpg" alt="logout_button.jpg, 26kB" title="logout_button" height="60px" width="100px">                                        
        <div id="settings_menu">                              
          <ul>                                  
            <li>                         
            <img src="settings_button_clicked.jpg" alt="settings_button_clicked.jpg, 51kB" title="settings_button_clicked" height="60" width="100">                                      
            </li>                                      
            <li>                         
            <img src="settings_button_clicked.jpg" alt="settings_button_clicked.jpg, 51kB" title="settings_button_clicked" height="60" width="100">                         
            </li>                              
          </ul>                          
        </div>                                                                              
      </div>                   
    </div>        
    <div id="back">     
    </div>                                                     
    <div id="page">                      
      <div id="container">              
        <form action="login_submit.php">   
               <img src="login_text.png" alt="login_text.png, 9,3kB" title="login_text" border="0" height="42" width="230">
               <br>
                                                                                                                                                                     
          <input type="text" id="username" name="username" placeholder="Username">            
          <input type="password" id="password" name="password" placeholder="Password">            
          <div id="lower">                
            <input type="submit" value="Prihlasit"> 
            <br>
            
            <a href="retrieve_pass.php">Zabudli ste heslo ?</a>                              
          </div>         
          <!--/ lower-->          
        </form>      
      </div>                                     
    </div>                                
  </body>      
</html>