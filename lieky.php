
<?php
// page2.php
session_start();

if(!isset($_SESSION['user_id']))
{
header('location:login.php');
}

$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header('location:login.php');
} 
?>
<html>             
  <head>                     
    <LINK rel="stylesheet" type="text/css" href="style_subpages.css">     
<SCRIPT type="text/javascript" src="jquery-1.9.1.min.js"> </script>                   
  </head>     
<script>
$( document ).ready(function() {  
$('#head_container_logo').hide().fadeIn(500);
$('#actionpanel').hide().fadeIn(500);
$('#settings_menu').hide();
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
  $('#page').on({
    'mouseout': function(){
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

  $('#liek').on({
    'mouseenter': function(){
        $('#liek').attr('src','lieky_button_clicked.jpg');
    }
   
}); 
  $('#liek').on({
    'mouseout': function(){
        $('#liek').attr('src','lieky_button.jpg');
    }
   
});

  

   $('#hosp').on({
    'mouseenter': function(){
        $('#hosp').attr('src','hospitalizacia_button_clicked.jpg');
    }
   
}); 
  $('#hosp').on({
    'mouseout': function(){
        $('#hosp').attr('src','hospitalizacia_button.jpg');
    }
   
});


    $('#predpis').on({
    'mouseenter': function(){
        $('#predpis').attr('src','Predpis_clicked.jpg');
    }
   
}); 
  $('#predpis').on({
    'mouseout': function(){
        $('#predpis').attr('src','Predpis.jpg');
    }
   
});


    $('#last_img').on({
    'mouseenter': function(){
        $('#last_img').attr('src','pridat_button_clicked.jpg');
    }
   
}); 
  $('#last_img').on({
    'mouseout': function(){
        $('#last_img').attr('src','pridat_button.jpg');
    }
   
});


     $('#profil_button').on({
    'mouseenter': function(){
        $('#profil_button').attr('src','profil_clicked.jpg');
    }
   
}); 
  $('#profil_button').on({
    'mouseout': function(){
        $('#profil_button').attr('src','profil.jpg');
    }
   
});
  $('#home').on({
    'mouseenter': function(){
        $('#home').attr('src','head_hospital_image_mouseover.jpg');
    }
}); 
 $('#home').on({
    'mouseout': function(){
        $('#home').attr('src','head_hospital_image.jpg');
    }
   
}); 
    $('#last_img').on({
    'mouseenter': function(){
        $('#last_img').attr('src','pridat_button_clicked.jpg');
    }
   
}); 
  $('#last_img').on({
    'mouseout': function(){
        $('#last_img').attr('src','pridat_button.jpg');
    }
   
});
    $('#moji').on({
    'mouseenter': function(){
        $('#moji').attr('src','pacienti_button_clicked.jpg');
    }
   
}); 
  $('#moji').on({
    'mouseout': function(){
        $('#moji').attr('src','pacienti_button.jpg');
    }
   
});

    $('#vyhladat').on({
    'mouseenter': function(){
        $('#vyhladat').attr('src','vyhladat_button_clicked.jpg');
    }
   
}); 
  $('#vyhladat').on({
    'mouseout': function(){
        $('#vyhladat').attr('src','vyhladat_button.jpg');
    }
   
});

















      }); 

 </script>                           
  <body>                             
    <div id="head_container_logo">                                    
      <div id="left_side">  
      <a href="home.php">                           
        <img id="img_logo" src="head_hospital_image.jpg" alt="head_hospital_image_mouseover.jpg, 19kB" title="head_hospital_image_mouseover" height="40" width="45">                                                            
        </a>
        <img src="hospital_imge_text.png" alt="hospital_imge_text.png, 30kB" title="hospital_imge_text" height="30" width="180">                                                      
      </div>                                  
      <div id="right_side">                             
<?php
      if ($_SESSION['role']=="admin"){                                    
        echo '<div id="name"><B>ADMIN</B><BR>FULL RIGHTS'; 
                                    }
          elseif($_SESSION['role']=="lekar")
          {
            echo '<DIV id="name"><b>'.strtoupper($_SESSION['firstname']).' '.strtoupper($_SESSION['surname']).'</b><BR><span class="green">lekar</span>'; 
          } 
          elseif($_SESSION['role']=="sestra")
          {
            echo '<DIV id="name"><B>'.strtoupper($_SESSION['firstname']).' '.strtoupper($_SESSION['surname']).'</B><BR><span class="green">sestra</span>'; 
          }                        
                    ?>                                   
      </DIV>                   
<?php  
        
        if ($_SESSION['role']=="admin"){ 
         echo '<img id="avatar" src="avatar_male.jpg" alt="avatar_male.jpg, 23kB" title="avatar_male" height="60px" width="70px">' ;
        }
        elseif ($_SESSION['sex']=="muz"){
                               
        echo '<IMG id="avatar" src="avatar_male.jpg" alt="avatar_male.jpg, 23kB" title="avatar_male" height="60px" width="70px">' ;
              }
              else
              {echo '<IMG id="avatar" src="avatar_female.jpg" alt="avatar_female.jpg, 23kB" title="avatar_male" height="60px" width="70px">' ;}
                   ?>                         
               <a href="profil.php">           
            <img src="profil.jpg" id="profil_button"  alt="settings_button_clicked.jpg, 51kB" title="settings_button_clicked" height="60" width="100">                         
              </a>                   
        <a href="logout_submit.php">  
        <img id="logout" src="logout_button.jpg" alt="logout_button.jpg, 26kB" title="logout_button" height="60px" width="100px"> 
        </a>                              
                                                                     
      </div>              
    </div>                                         
    <div id="page"> 
    
    
    
    <div id="menu">
    
    <ul>
    <li><a href="home.php"><img src="head_hospital_image.jpg" id="home" alt="head_hospital_image_mouseover.jpg, 26kB" title="head_hospital_image" border="0" height="50" width="60"></a></li>
    <li> <img src="lieky_button_clicked.jpg" id="pacient" alt="pacient_button.jpg, 21kB" title="pacient_button" border="0" height="50" width="130"></li>
   
        <li> <img src="vyhladat_button.jpg" id="vyhladat" alt="vyhladat_button.jpg, 27kB" title="vyhladat_button" border="0" height="50" width="130"></li>
    <li> <img src="pridat_button.jpg"  id="last_img"alt="pridat_button.jpg, 24kB" title="pridat_button" border="0" height="50" width="130"> </li> 
    </ul>
    </div>
    
    
    
    <div  id="contentbox">
    <br>
    Spolu mate: 256 pacientov
    
        
    </div>
    
    <br> 

    
    
    
    
                                                 
    </div>   
                              
  </body>     
</html>
