<!DOCTYPE html>
<html lang="en-us">
  <head>
  </head>
  <body>
    <section class="page-header">
    </section>

    <section class="main-content">
    <br/> <br/>
      
<?php
  #remove the directory path we don't want
  $request  = str_replace("/oneapp/", "", $_SERVER['REQUEST_URI']);
 
  #split the path by '/'
  $params     = split("/", $request);
  print "<br/> <br/> <p>" . "Neutral Random Value (Universal Linking Parameter) : " . $params[0] . "</p>"; //  
      
  
  
 // print "Request Operating System: " . $_SERVER['HTTP_USER_AGENT'];
      

      
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
      
//do something with this information
if( $iPod || $iPhone || $iPad){
   // print "Request Operating System is : iOS";
    print "<br/> <br/> <p>". "Request Operating System is : iOS" . "</p>";
} else if($Android){
    //print "Request Operating System is : Android";
    print "<br/> <br/> <p>". "Request Operating System is : Android" . "</p>";
}else if($webOS){
    //print "Request Operating System is : webOS";
    print "<br> <br/> <p>" . "Request Operating System is : Android" . "</p>";
}
      
  $iosRandVal = "ios-random-value-789"; 
  print "<br/> <br/> <p>" . "Generated iOS Relevant Random Value: " . $iosRandVal . "</p>";
      
 print " <br/> <br/>    
   <form>
     iOS Relevant Random Value: <input type="text" name="iOSRandVal"><br>
   </form> 
  "; 
 // print "parma 1: " . $params[1];
?>
      <footer class="site-footer">
      </footer>

    </section>

  
  </body>
</html>
