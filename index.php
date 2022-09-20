<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Paskaita_4</title>
</head>
<body>
<!-- 1. Sukurkite programą, kuri priklausomai nuo naršyklės (Chrome - "juoda", Mozzila - "raudona" ,  Edge - "melyna"), puslapis nusidažo atitinkama spalva. Taip pat, puslapyje priklausomai nuo naršyklės, turi atsirasti tos naršyklės logotipas.
P.S užduotį jau įkelti į GitHub -->
<?php 

    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE){
        $narsykle = "Edge";}
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE){
        $narsykle =  "Firefox";}
    elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){
        $narsykle =  "Chrome";}

      

    if($narsykle == "Chrome"){
        echo "Tu naudoji : ";
        echo '<style> body,html {background:url(chrome.png) no-repeat center center fixed</style>';
        echo '<style> body,html {background-color:black}</style>';
        echo '<style> body,html {color:white}</style>';
    }
    else if($narsykle == "Firefox"){
        echo "Tu naudoji : ";
        echo '<style> body,html {background:url(mozzila.png) no-repeat center center fixed</style>';
        echo '<style> body,html {background-color:red}</style>';
        echo '<style> body,html {color:white}</style>';
    }
else if($narsykle == "Edge"){
        echo "Tu naudoji : ";
        echo '<style> body,html {background:url(edge.png) no-repeat center center fixed</style>';
        echo '<style> body,html {background-color:blue}</style>';
        echo '<style> body,html {color:white}</style>';
    }

echo $narsykle;





   
 




?>



</body>
</html>