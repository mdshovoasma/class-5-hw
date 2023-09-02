<?php
$name =null; // empty ar kaj holo value chak kora;empty($vareable-name);
if(empty($name)){
    echo " name is empty <br>";

}else{
echo "name is not empty <br>";
}
var_dump(isset($name)); //isset return true or false ;it declaration isset($name);

//  implode and join same ;  ata kno akta array ka  (, ' ' . ) etc jukto korta para 

$country = [
    "name",
    "email",
    "deft",
];
$imp = implode(" .",$country);
echo " $imp <br>";
// array explode ata kno akta string  ka (" ", . , "," etc) ar por thaka alada kora palba and return array ; it declaration explode("jar por thaka baga hoba",vareablename)

$hoby = "i love my hobby";
$expl = explode(' ',$hoby);
print_r($expl);

$hoby1 = "i . lov.e . my . ho.bby";
$expl1= explode('.',$hoby1);
echo "<pre>";
print_r($expl1);
echo "</pre>";

// array compact ata 2ta array ka aksata anno akta pagea a pataba;
$user = [
    "name",
    "email",
    "mobail",
];
echo "<br> <br>";
$country = [
    "name" => "shovo",
    "email" => "shovom677@gmail.com",
    "deft"=> "cse",
];
$emp = compact("user","country");
echo "<pre>";
print_r($emp);
echo "</pre>";

// count/sizeof ak rokom kaj kora,  ata dea  array ar item  count kora jai
echo count($country);


// array_diff ata anak gulo arrar modda jagulo diffarent aca sagulo kuja deba;

$user = [
    "name"=> "shovo",
    "email",
    "mobail",
];
echo "<br> <br>";
$country = [
    "name" => "shovo",
    "email" => "shovom677@gmail.com",
    "deft"=> "cse",
];
echo "<pre>";
print_r(array_diff($user,$country));
echo "</pre>";
echo "<br> <br>";


echo array_rand($user);

echo "<br> <br>";

// in_array ata array ar modda kno value aca kina daka and return koea true or false;
// echo in_array("email",$user);
echo "<pre>";
var_dump(array_search("deft",$country)) ;

// array_filter atkta array thaka condetion ar maddoma kico data tula anba and return korba array;
$num = [
    12,23,34,45,56,67,

];
$fil = array_filter($num,function($even){
    return  $even < 67;

});
print_r($fil) ;
echo "<br> <br>";
//  arra_slice
echo "<pre>";
print_r(array_slice($country,1,3));
echo "</pre>";


//class-5 hw
function thumnil($youtube_link){
 $youtube_api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg ";

$link_code = explode("?si",$youtube_link );

$mainlink = $link_code[0];
$main_code_link =explode("/",$mainlink);
$link_end = end($main_code_link );

$youtube_api_replace = str_replace("<insert-youtube-video-id-here>",$link_end ,$youtube_api);

echo "<img src=  $youtube_api_replace >";
}

thumnil("https://youtu.be/huxhqphtDrM?si=XGEJTIlAI4tHwkPp");

echo "<br> <br>";


// file validation
function file_chack($file){ 

$file_explode = explode(".",$file);

$file_end_name = end($file_explode);

$accepted_arra = ["csv","zip"];

if(in_array($file_end_name,$accepted_arra)==true){

    echo "Yes file accepted";

}else{

    echo " file Not accepted";
}
}
file_chack("fill.zip");
?>