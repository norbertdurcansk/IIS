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
<HTML>                   
  <HEAD>                               
    <LINK rel="stylesheet" type="text/css" href="style.css">       
<SCRIPT type="text/javascript" src="jquery-1.9.1.min.js"> </SCRIPT>                           
  </HEAD>       
<SCRIPT>

$( document ).ready(function() {


 $("#menu")
    .load("menugen.php", function () {
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
   
 </SCRIPT>                                   
  <BODY>                                       
    <DIV id="head_container_logo">                                                  
      <DIV id="left_side">                  
        <A href="home.php">                                               
          <IMG id="img_logo" src="head_hospital_image.jpg" alt="head_hospital_image_mouseover.jpg, 19kB" title="head_hospital_image_mouseover" height="40" width="45">                                                                     </A>                 
        <IMG src="hospital_imge_text.png" alt="hospital_imge_text.png, 30kB" title="hospital_imge_text" height="30" width="180">                                                                    
      </DIV>                                                
      <DIV id="right_side">               
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
      <A href="profil.php">                                   
        <IMG src="profil.jpg" id="profil_button"  alt="settings_button_clicked.jpg, 51kB" title="settings_button_clicked" height="60" width="100">                                        </A>                                                                       
      <A href="logout_submit.php">                      
        <IMG id="logout" src="logout_button.jpg" alt="logout_button.jpg, 26kB" title="logout_button" height="60px" width="100px">          </A>                                                                                                                   
    </DIV>                        
    </DIV>                                                   
    <DIV id="page">

    
                                
      <DIV id="menu">
       
      
      
      
      </DIV>           
      <BR>              
      <SPAN id="Plan" >Dnesny rozvrh:       
      </SPAN>        
      <BR> 
      <!-- start of the insert section --> 
      
<form action="pacient.php" id="todaylist_link" method="post" style="display: none;">
<input type="hidden" name="show" value="idofthepacient" />
</form>
<a href="javascript:;" onclick="javascript:
document.getElementById('todaylist_link').submit()">  
        <DIV id="content_todaylist">              
          <DIV class="todaylist">            
            <DIV class="right_list">        
              <SPAN class="green">Vysetrenie
              </SPAN>        
            </DIV>        
            <DIV class="left_list">        <B>Meno:</B> Norbert Durcansky    
              <BR>        <B>Pohlavie:</B> muz               
              <BR>        <B>Rod.c.: </B>95sas 
              <BR>                 
            </DIV>        
            <DIV class="corner_list">        <B>Bydlisko: </B>Kolejni10
              <BR>        <B>Alergie: </B>X                                       
              <BR>        Vysetrenie je 
              <SPAN class="green">platene
              </SPAN>                       
            </DIV>                                               
          </DIV>        </A>    
          
          
          
          
            
      <A href="pacient.php?id=01211121">                  
        <DIV class="todaylist">            
          <DIV class="right_list">        
            <SPAN class="green">Kontrola
            </SPAN>        
          </DIV>        
          <DIV class="left_list">        <B>Meno:</B> Norbert Durcansky    
            <BR>        <B>Pohlavie:</B> muz               
            <BR>        <B>Rod.c.: </B>95sas 
            <BR>                 
          </DIV>        
          <DIV class="corner_list">        <B>Bydlisko: </B>Kolejni10
            <BR>        <B>Alergie: </B>X                                       
            <BR>        Vysetrenie je 
            <SPAN class="green">platene
            </SPAN>                            
          </DIV>                              
        </DIV>        </A>                                                       
    </DIV>                                                                                  
    </DIV>                                                  
  </BODY>       
</HTML>