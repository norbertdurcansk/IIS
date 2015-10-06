<?php
// page2.php
session_start();

if(!isset($_SESSION['user_id']))
{
header('location:login.php');
}

?>
<html>                
  <head>                          
    <LINK rel="stylesheet" type="text/css" href="style.css">      
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
   $('#pacient').on({
    'mouseenter': function(){
        $('#pacient').attr('src','pacient_button_clicked.jpg');
    }
   
}); 
  $('#pacient').on({
    'mouseout': function(){
        $('#pacient').attr('src','pacient_button.jpg');
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
   $('#vysetrenie').on({
    'mouseenter': function(){
        $('#vysetrenie').attr('src','vysetrenie_button_clicked.jpg');
    }
   
}); 
  $('#vysetrenie').on({
    'mouseout': function(){
        $('#vysetrenie').attr('src','vysetrenie_button.jpg');
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
        $('#last_img').attr('src','Zamestnanci_clicked.jpg');
    }
   
}); 
  $('#last_img').on({
    'mouseout': function(){
        $('#last_img').attr('src','Zamestnanci.jpg');
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
      }); 
   
      
      
      
 </script>                               
  <body>                                  
    <div id="head_container_logo">                                           
      <div id="left_side">         
        <a href="home.php">                                    
          <img id="img_logo" src="head_hospital_image.jpg" alt="head_hospital_image_mouseover.jpg, 19kB" title="head_hospital_image_mouseover" height="40" width="45">                                                                     </a>        
        <img src="hospital_imge_text.png" alt="hospital_imge_text.png, 30kB" title="hospital_imge_text" height="30" width="180">                                                             
      </div>                                         
      <div id="right_side">                                      
        <div id="name"><b>NORBERT DURCANSKY</b>                     
          <br>Chirurg                  
        </div>                          
        <img id="avatar" src="avatar_male.jpg" alt="avatar_male.jpg, 23kB" title="avatar_male" height="60px" width="70px">                          
        <a href="profil.php">                        
          <img src="profil.jpg" id="profil_button"  alt="settings_button_clicked.jpg, 51kB" title="settings_button_clicked" height="60" width="100">                                        </a>                                                              
        <a href="logout_submit.php">           
          <img id="logout" src="logout_button.jpg" alt="logout_button.jpg, 26kB" title="logout_button" height="60px" width="100px">          </a>                                                                                                            
      </div>                   
    </div>                                              
    <div id="page">                     
      <div id="menu">         
        <ul>   
          <li>
          <a href="home.php">
            <img src="head_hospital_image.jpg" id="home" alt="head_hospital_image_mouseover.jpg, 26kB" title="head_hospital_image" border="0" height="50" width="60"></a>
          </li>    
          <li>
          <a href="pacient.php"> 
            <img src="pacient_button.jpg" id="pacient" alt="pacient_button.jpg, 21kB" title="pacient_button" border="0" height="50" width="130"></a>
          </li>    
          <li> 
          <a href="hospitalizacia.php">
            <img src="hospitalizacia_button.jpg" id="hosp" alt="hospitalizacia_button.jpg, 26kB" title="hospitalizacia_button" border="0" height="50" width="130"></a> 
          </li>    
          <li>
          <a href="vysetrenie.php">
            <img src="vysetrenie_button.jpg" id="vysetrenie" alt="vysetrenie_button.jpg, 27kB" title="vysetrenie_button" border="0" height="50" width="130"> </a>
          </li>    
          <li> 
          <a href="predpis.php">
            <img src="Predpis.jpg" alt="Predpis.jpg 23kB" id="predpis" title="Predpis" border="0" height="50" width="130"></a>
          </li>    
          <li>
          <a href="lieky.php">
            <img src="lieky_button.jpg" id="liek" alt="lieky_button.jpg, 20kB" title="lieky_button" border="0" height="50" width="130"></a> 
          </li>    
          <li>
          <a href="zamestnanci.php">
            <img src="Zamestnanci.jpg" id="last_img" alt="Zamestnanci.jpg, 31kB" title="Zamestnanci" border="0" height="50" width="130"></a>
          </li>         
        </ul>    
      </div>    
      <br> 
            <span id="Plan" >Dnesny rozvrh:
      </span> 
      <br>
 <!-- start of the insert section -->
 <a href="pacient.php?id=01211121">     
 <div id="content_todaylist">     
        <div class="todaylist">   
        <div class="right_list">
        <span class="green">Vysetrenie</span>
        </div>
        <div class="left_list">
        <b>Meno:</b> Norbert Durcansky    <br>
        <b>Pohlavie:</b> muz               <br>
        <b>Rod.c.: </b>95sas <br>
        
        </div>
        <div class="corner_list">
        <b>Bydlisko: </b>Kolejni10<br>
        <b>Alergie: </b>X                                       <br>
        Vysetrenie je <span class="green">platene</span>   
          
        </div>
        
                               
      </div> 
      </a>
      <a href="pacient.php?id=01211121">   
              <div class="todaylist">   
        <div class="right_list">
        <span class="green">Kontrola</span>
        </div>
        <div class="left_list">
        <b>Meno:</b> Norbert Durcansky    <br>
        <b>Pohlavie:</b> muz               <br>
        <b>Rod.c.: </b>95sas <br>
        
        </div>
        <div class="corner_list">
        <b>Bydlisko: </b>Kolejni10<br>
        <b>Alergie: </b>X                                       <br>
        Vysetrenie je <span class="green">platene</span>
        
          
        </div>                       
      </div> 
      </a>
      
      
      
                            
     </div>
                                                                   
    
    
    </div>                                               
  </body>      
</html>