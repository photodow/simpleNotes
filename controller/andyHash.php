<?php  ///DIAGRAM\\\

			#######################################
			###			   Andrew's Encryptian Function		  ###
			###			         Writen by James Dow			  ###
			////		    	This file contains two functions	  	   ////
			////		         	        1. creates the encryptian			   ////
			////		         	        2. reverses the ecnryptian		   ////
			#######################################
		
		# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
		#												#
		#	     //Your Keyboard\\			//  Your New Keyboard  \\	#
		#												#
		#  	` 1 2 3 4 5 6 7 8 9 0 - = 			y 5 c ] x 3 m ; r = a 6 u		#
		#   	     q w e r t y u i o p [ ]			    / s 8 z 2 k 0 i , l - t		#
		#    	        a s d f g h j k l ; '			     n 7 b ' w 1 e ` h . f		#
		#     	         z x c v b n m , . /			       q d 9 j [ v g 4 o p		#
		#												#
		# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #
   
   
   
   
   
   
   
   
   
   
   
   
   
 	///  function #1 andyHash()  \\\

		#######################################
		###			   Andrew's Encryptian Function		  ###
		###			         Writen by James Dow			  ###
		////		   This script, crypts messages, or passwords.	   ////
		////		         (mainly was writing for passwords)		   ////
		#######################################
		

//password encrypting
function andyHash($pass, $salt) {

//creating array's

if ($salt == true) {
$salt = "1234567890-=qwertyuiop[]asdfghjkl;_zxcvbnm,./";
$mixitup = str_shuffle($salt);
$arraySalt = str_split($mixitup);
$pepper = null;
}

$arrayPass = str_split(stripslashes($pass));
$numArray = count($arrayPass);


$num = 0;
while($num < $numArray){

//mixing in the salt while encrypting

//Row 1
if($arrayPass[$num]=="`"){
$b[$num] = str_replace("`", "y", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='1'){
$b[$num] = str_replace("1", "5", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='2'){
$b[$num] = str_replace("2", "c", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='3'){
$b[$num] = str_replace("3", "]", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='4'){
$b[$num] = str_replace("4", "x", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='5'){
$b[$num] = str_replace("5", "3", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='6'){
$b[$num] = str_replace("6", "m", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='7'){
$b[$num] = str_replace("7", ";", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='8'){
$b[$num] = str_replace("8", "r", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='9'){
$b[$num] = str_replace("9", "=", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='0'){
$b[$num] = str_replace("0", "a", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='-'){
$b[$num] = str_replace("-", "6", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='='){
$b[$num] = str_replace("=", "u", $arrayPass[$num]).$arraySalt[$num];
}

//row 2
elseif($arrayPass[$num]=='q'){
$b[$num] = str_replace("q", "/", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='w'){
$b[$num] = str_replace("w", "s", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='e'){
$b[$num] = str_replace("e", "8", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='r'){
$b[$num] = str_replace("r", "z", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='t'){
$b[$num] = str_replace("t", "2", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='y'){
$b[$num] = str_replace("y", "k", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='u'){
$b[$num] = str_replace("u", "0", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='i'){
$b[$num] = str_replace("i", "i", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='o'){
$b[$num] = str_replace("o", ",", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='p'){
$b[$num] = str_replace("p", "l", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='['){
$b[$num] = str_replace("[", "-", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]==']'){
$b[$num] = str_replace("]", "t", $arrayPass[$num]).$arraySalt[$num];
}

//row 3

elseif($arrayPass[$num]=='a'){
$b[$num] = str_replace("a", "n", $arrayPass[$num]).$arraySalt[$num];
}


elseif($arrayPass[$num]=='s'){
$b[$num] = str_replace("s", "7", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='d'){
$b[$num] = str_replace("d", "b", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='f'){
$b[$num] = str_replace("f", "'", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='g'){
$b[$num] = str_replace("g", "w", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='h'){
$b[$num] = str_replace("h", "1", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='j'){
$b[$num] = str_replace("j", "e", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='k'){
$b[$num] = str_replace("k", "`", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='l'){
$b[$num] = str_replace("l", "h", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]==';'){
$b[$num] = str_replace(";", ".", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=="'"){
$b[$num] = stripslashes(str_replace("'", "f", $arrayPass[$num])).$arraySalt[$num];
}

//row 4


elseif($arrayPass[$num]=='z'){
$b[$num] = str_replace("z", "q", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='x'){
$b[$num] = str_replace("x", "d", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='c'){
$b[$num] = str_replace("c", "9", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='v'){
$b[$num] = str_replace("v", "j", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='b'){
$b[$num] = str_replace("b", "[", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='n'){
$b[$num] = str_replace("n", "v", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='m'){
$b[$num] = str_replace("m", "g", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]==','){
$b[$num] = str_replace(",", "4", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='.'){
$b[$num] = str_replace(".", "o", $arrayPass[$num]).$arraySalt[$num];
}

elseif($arrayPass[$num]=='/'){
$b[$num] = str_replace("/", "p", $arrayPass[$num]).$arraySalt[$num];
}











else{ $b[$num] = $arrayPass[$num].$arraySalt[$num]; }




$num = $num + 1;

}



//final result
if($salt == true) {$join = '*'.implode("", $b); }
else {$join = '!'.implode("", $b);}

return $join;



}  


















	///  function #2 UNandyHash()  \\\

		#######################################
		###	                Andrew's Ecryptian Reverse Function		###
		###			           Writtin by James Dow			###
		////		   This script reverses what andyHash() does.	////
		######################################
		

//password encrypting
function UNandyHash($pass) {



if(stripos($pass, '*') === 0 || stripos($pass, '!') === 0){
//creating array's
$arrayPass = str_split(stripslashes($pass));
$numArray = count($arrayPass);



$num = 1;
$n = 0;

if(stripos($pass, '*') === 0) {$spn = 1;} else {$spn = 0;}

while($spn < $numArray){

if(stripos($pass, '*') === 0) {$spn = $spn + 2;} else {$spn = $spn + 1;}

if(stripos($pass, '*') === 0) {
$arrayFilter[$n] = $arrayPass[$num]; }
else { $arrayFilter[$n] = $arrayPass[$n+1]; }

//Row 1
if($arrayFilter[$n]=="y"){
$b[$n] = str_replace("y", "`", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='5'){
$b[$n] = str_replace("5", "1", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='c'){
$b[$n] = str_replace("c", "2", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]==']'){
$b[$n] = str_replace("]", "3", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='x'){
$b[$n] = str_replace("x", "4", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='3'){
$b[$n] = str_replace("3", "5", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='m'){
$b[$n] = str_replace("m", "6", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]==';'){
$b[$n] = str_replace(";", "7", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='r'){
$b[$n] = str_replace("r", "8", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='='){
$b[$n] = str_replace("=", "9", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='a'){
$b[$n] = str_replace("a", "0", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='6'){
$b[$n] = str_replace("6", "-", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='u'){
$b[$n] = str_replace("u", "=", $arrayFilter[$n]);
}

//row 2
elseif($arrayFilter[$n]=='/'){
$b[$n] = str_replace("/", "q", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='s'){
$b[$n] = str_replace("s", "w", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='8'){
$b[$n] = str_replace("8", "e", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='z'){
$b[$n] = str_replace("z", "r", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='2'){
$b[$n] = str_replace("2", "t", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='k'){
$b[$n] = str_replace("k", "y", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='0'){
$b[$n] = str_replace("0", "u", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='i'){
$b[$n] = str_replace("i", "i", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]==','){
$b[$n] = str_replace(",", "o", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='l'){
$b[$n] = str_replace("l", "p", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='-'){
$b[$n] = str_replace("-", "[", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='t'){
$b[$n] = str_replace("t", "]", $arrayFilter[$n]);
}

//row 3

elseif($arrayFilter[$n]=='n'){
$b[$n] = str_replace("n", "a", $arrayFilter[$n]);
}


elseif($arrayFilter[$n]=='7'){
$b[$n] = str_replace("7", "s", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='b'){
$b[$n] = str_replace("b", "d", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=="'"){
$b[$n] = str_replace("'", "f", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='w'){
$b[$n] = str_replace("w", "g", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='1'){
$b[$n] = str_replace("1", "h", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='e'){
$b[$n] = str_replace("e", "j", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='`'){
$b[$n] = str_replace("`", "k", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='h'){
$b[$n] = str_replace("h", "l", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='.'){
$b[$n] = str_replace(".", ";", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=="f"){
$b[$n] = str_replace("f", "'", $arrayFilter[$n]);
}

//row 4


elseif($arrayFilter[$n]=='q'){
$b[$n] = str_replace("q", "z", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='d'){
$b[$n] = str_replace("d", "x", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='9'){
$b[$n] = str_replace("9", "c", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='j'){
$b[$n] = str_replace("j", "v", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='['){
$b[$n] = str_replace("[", "b", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='v'){
$b[$n] = str_replace("v", "n", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='g'){
$b[$n] = str_replace("g", "m", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='4'){
$b[$n] = str_replace("4", ",", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='o'){
$b[$n] = str_replace("o", ".", $arrayFilter[$n]);
}

elseif($arrayFilter[$n]=='p'){
$b[$n] = str_replace("p", "/", $arrayFilter[$n]);
}











else{ $b[$n] = $arrayFilter[$n]; }




$n = $n + 1;
$num = $num + 2;

}
$glue = implode("", $b);

return $glue;



} else {return 'This is not an andyHash()';}


} ?>


<?php

$newPassword = $_GET['pass'];
echo $newPassword;
echo '<br />';
echo andyHash($newPassword);
echo '<br />';
echo UNandyHash(andyHash($newPassword));

?>