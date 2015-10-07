<?php
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

 if ($_SESSION["role"]=="admin"){
echo '<UL>'              
          .'<LI>'          
          .'<A href="home.php">'            
         . '  <IMG src="head_hospital_image.jpg" id="home" alt="head_hospital_image_mouseover.jpg, 26kB" title="head_hospital_image" border="0" height="50" width="60"></A> '         
         .' </LI>'               
          .'<LI>'          
          .'<A href="pacient.php">'             
         .   '<IMG src="pacient_button.jpg" id="pacient" alt="pacient_button.jpg, 21kB" title="pacient_button" border="0" height="50" width="130"></A> '         
         . '</LI> '              
         . '<LI>  '          
         . '<A href="hospitalizacia.php">        '    
         .   '<IMG src="hospitalizacia_button.jpg" id="hosp" alt="hospitalizacia_button.jpg, 26kB" title="hospitalizacia_button" border="0" height="50" width="130"></A>   '         
         . '</LI>                                                                                                                                                       '
         . '<LI>                                                                                                                                                         '
         . '<A href="vysetrenie.php">                                                                                                                                     '
         .   '<IMG src="vysetrenie_button.jpg" id="vysetrenie" alt="vysetrenie_button.jpg, 27kB" title="vysetrenie_button" border="0" height="50" width="130"> </A>       '   
         . '</LI>                                                                                                                                                         '
         .'<LI>                                                                                                                                                           '
          .'<A href="predpis.php">                                                                                                                                        '
          .  '<IMG src="Predpis.jpg" alt="Predpis.jpg 23kB" id="predpis" title="Predpis" border="0" height="50" width="130"></A>                                          '
          .'</LI>                                                                                                                                                        '
          .'<LI>                                                                                                                                                         '
          .'<A href="lieky.php">                                                                                                                                         '
          .  '<IMG src="lieky_button.jpg" id="liek" alt="lieky_button.jpg, 20kB" title="lieky_button" border="0" height="50" width="130"></A>                            '
         . '</LI>                                                                                                                                                        '
         .' <LI>                                                                                                                                                         '
        .  '<A href="zamestnanci.php">                                                                                                                                   '
         .   '<IMG src="Zamestnanci.jpg" id="last_img" alt="Zamestnanci.jpg, 31kB" title="Zamestnanci" border="0" height="50" width="130"></A>                           '
       .   '</LI>                                                                                                                                                        '
      . ' </UL> ' ;  
      
      
      }
   if ($_SESSION["role"]=="lekar"){
echo '<UL>'              
          .'<LI>'          
          .'<A href="home.php">'            
         . '  <IMG src="head_hospital_image.jpg" id="home" alt="head_hospital_image_mouseover.jpg, 26kB" title="head_hospital_image" border="0" height="50" width="60"></A> '         
         .' </LI>'               
          .'<LI>'          
          .'<A href="pacient.php">'             
         .   '<IMG src="pacient_button.jpg" id="pacient" alt="pacient_button.jpg, 21kB" title="pacient_button" border="0" height="50" width="130"></A> '         
         . '</LI> '              
         . '<LI>  '          
         . '<A href="hospitalizacia.php">        '    
         .   '<IMG src="hospitalizacia_button.jpg" id="hosp" alt="hospitalizacia_button.jpg, 26kB" title="hospitalizacia_button" border="0" height="50" width="130"></A>   '         
         . '</LI>                                                                                                                                                       '
         . '<LI>                                                                                                                                                         '
         . '<A href="vysetrenie.php">                                                                                                                                     '
         .   '<IMG src="vysetrenie_button.jpg" id="vysetrenie" alt="vysetrenie_button.jpg, 27kB" title="vysetrenie_button" border="0" height="50" width="130"> </A>       '   
         . '</LI>                                                                                                                                                         '
         .'<LI>                                                                                                                                                           '
          .'<A href="predpis.php">                                                                                                                                        '
          .  '<IMG src="Predpis.jpg" alt="Predpis.jpg 23kB" id="predpis" title="Predpis" border="0" height="50" width="130"></A>                                          '
          .'</LI>                                                                                                                                                        '
          .'<LI>                                                                                                                                                         '
          .'<A href="lieky.php">                                                                                                                                         '
          .  '<IMG src="lieky_button.jpg" id="liek" alt="lieky_button.jpg, 20kB" title="lieky_button" border="0" height="50" width="130"></A>                            '
         . '</LI>                                                                                                                                                        '
      . ' </UL> ' ;  
      
      
      }  
         if ($_SESSION["role"]=="sestra"){
echo '<UL>'              
          .'<LI>'          
          .'<A href="home.php">'            
         . '  <IMG src="head_hospital_image.jpg" id="home" alt="head_hospital_image_mouseover.jpg, 26kB" title="head_hospital_image" border="0" height="50" width="60"></A> '         
         .' </LI>'               
          .'<LI>'          
          .'<A href="pacient.php">'             
         .   '<IMG src="pacient_button.jpg" id="pacient" alt="pacient_button.jpg, 21kB" title="pacient_button" border="0" height="50" width="130"></A> '         
         . '</LI> '              
         . '<LI>  '          
         . '<A href="hospitalizacia.php">        '    
         .   '<IMG src="hospitalizacia_button.jpg" id="hosp" alt="hospitalizacia_button.jpg, 26kB" title="hospitalizacia_button" border="0" height="50" width="130"></A>   '         
         . '</LI>                                                                                                                                                       '
         . '<LI>                                                                                                                                                         '
         . '<A href="vysetrenie.php">                                                                                                                                     '
         .   '<IMG src="vysetrenie_button.jpg" id="vysetrenie" alt="vysetrenie_button.jpg, 27kB" title="vysetrenie_button" border="0" height="50" width="130"> </A>       '   
         . '</LI>                                                                                                                                                         '
      . ' </UL> ' ;  
      
      
      }   
      
      
      
                                                                                                                                                           
?>


