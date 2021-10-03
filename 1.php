<?php 
//test cookies

if(count($_COOKIE) > 0) {
  echo "Unesene vrijednosti će biti sačuvane u cookie.";
} else {
  echo "Unesene vrijednosti neće biti sačuvane u cookie.";
}

//scroll function
$scroll = "";
if (isset($_POST["send"])):
  $scroll = 'onload="scrollFunction()"/';
endif;

//date function
 $d = date("m");
      $datearray = [10,11,12,1,2,3];
if (in_array($d, $datearray)):
              
          $avt3 = 0.1486;
          $amt3 = 0.0743;
          $kw2 = 1.4149;
          $kw4 = 0.0064;
          $ast1 = 0.1486;
          $ast2 = 0.0743;
          $ast3 = 0.1229;
          $ast4 = 3.3;
          $ast5 = 5.2;
          else :
          $avt3 = 0.1140;
          $amt3 = 0.0570;
          $kw2 = 1.0884;
          $kw4 = 0.0064;
          $ast1 = 0.1140;
          $ast2 = 0.0570;
          $ast3 = 0.0945;
          $ast4 = 3.3;
          $ast5 = 5.2;
  endif;

  

//delete this row before publishing 
//echo "$avt3 <br> $amt3 <br> $kw2 <br> $d";
      
//Setcookie
//Load data from cookie
// the array that will be used
// in the example
if (isset($_POST["send"])):
$array = array(
    'avt1' => str_replace(",", ".",$_POST["avt1"]),
    'avt2' => str_replace(",", ".",$_POST["avt2"]),
    'avt3' => str_replace(",", ".",$_POST["avt3"]),
    'amt1' => str_replace(",", ".",$_POST["amt1"]),
    'amt2' => str_replace(",", ".",$_POST["amt2"]),
    'amt3' => str_replace(",", ".",$_POST["amt3"]),
    'kw1' => str_replace(",", ".",$_POST["kw1"]),
    'kw2' => str_replace(",", ".",$_POST["kw2"]),
    'kw4' => str_replace(",", ".",$_POST["kw4"])
  );

  
  // build the cookie from an array into
  // one single string
  function build_cookie($var_array) {
    $out = '';
    if (is_array($var_array)) {
      foreach ($var_array as $index => $data) {
        $out .= ($data != "") ? $index . "=" . $data . "|" : "";
      }
    }
    return rtrim($out, "|");
  }

  // then set the cookie once the array 
  // has been through build_cookie func
  $cookie_value = build_cookie($array);
  setcookie('struja_cookie', $cookie_value, time() + (86400 * 45), '/');
endif;





  // make the func to break the cookie
  // down into an array
  function break_cookie($cookie_string) {
    $array = explode("|", $cookie_string);
    foreach ($array as $i => $stuff) {
      $stuff = explode("=", $stuff);
      $array[$stuff[0]] = $stuff[1];
      unset($array[$i]);
    }
    return $array;
  }

  // get array from cookie by using the
  // break_cookie func
  if (isset($_COOKIE['struja_cookie']) && !isset($_POST['send'])) {
    $new_array = break_cookie($_COOKIE['struja_cookie']);
    $avt1 = $new_array["avt1"];
    $avt2 = $new_array["avt2"];
   if (isset($new_array["avt3"])) { $avt3 = $new_array["avt3"];}

    $amt1 = $new_array["amt1"];
    $amt2 = $new_array["amt2"];
    if (isset($new_array["amt3"])) { $amt3 = $new_array["amt3"];}
   
    $kw1 = $new_array["kw1"];
    if (isset($new_array["kw2"])) { $kw2 = $new_array["kw2"];}
    if (isset($new_array["kw4"])) { $kw4 = $new_array["kw4"];}
    //var_dump($new_array);
  } else {
    $avt1 = 0;
    $amt1 = 0;
    $avt2 = 0;
    $amt2 = 0;
    $kw1 = 5.2;
  }
         //Def. variables
         
          $mm = 2.48;

        //Def. avt1
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["avt1"])){
            $avtErr1 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $avt1 = test_input($_POST["avt1"]);
        }
        //Def. avt2
        if (empty($_POST["avt2"])){
            $avtErr2 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $avt2 =test_input($_POST["avt2"]);
        }
        //Def. avt3
        if (empty($_POST["avt3"])){
            $avtErr3 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $avt3 = test_input($_POST["avt3"]);
        }
        //Def. amt1
        if (empty($_POST["amt1"])){
            $amtErr1 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $amt1 = test_input($_POST["amt1"]);
        }
         //Def. amt2
         if (empty($_POST["amt2"])){
            $amtErr2 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $amt2 = test_input($_POST["amt2"]);
        }

         //Def. amt1
         if (empty($_POST["amt3"])){
            $amtErr3 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $amt3 = test_input($_POST["amt3"]);
        }
         //Def. kw1
         if (empty($_POST["kw1"])){
            $kwErr1 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $kw1 = test_input($_POST["kw1"]);
        }
        //Def. kw2
        if (empty($_POST["kw2"])){
            $kwErr2 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $kw2 = test_input($_POST["kw2"]);
        }
       //Def. kw3
       if (empty($_POST["kw3"])){
        $kwErr3 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $kw3 = test_input($_POST["kw3"]);}
        }
    
        //Def. kw4
       if (empty($_POST["kw4"])){
        $kwErr3 = "<span class=\"error\">Polje je obavezno</span>";
        }
        else {
            $kw4 = test_input($_POST["kw4"]);}
        
        //Test input funkcija
        function test_input($data) {
            $data = str_replace(",", ".", $data); //This replace , with .
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
      
