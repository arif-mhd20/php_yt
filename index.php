

 

   <?php ?>

   <?php ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      
      <?php 
      $name = "Arif";
      $Lname = "Muhammad";
      $salary = 500000;
      $job = "PHP DEVELOPER";
      ?>
      <h1>HELLO PHP my name is: <?php echo $Lname ?>, <?PHP echo $name ?> <br></h1>
      
      <h2>my salary is <?php echo $salary ?> ,and i am a <?php echo $job?> </h2>

   </body>
   </html>


   <?php
   
//description 
#start
/*================================
this is the discription about 
MYSELF
===================================*/
   $name = "Arif";

   $Lname = "Muhammad";

   $rent = 22000 ;

   $telephone =  '0191856623' ;

   $total_amount = 12000;

   $second_Name= "ASAD";

   $my_major = "Information System";

   $job_description = "PHP Developer";

   $course1 = "internship";

   $course2 = "thesis";

   $first_name = "Arif";
   $Tname= "first_name";
   //description start end

//product price calculation start
   $value1 = 50;
   $value2 = 20;
   $total_value = $value1 + $value2;
   $total_value1 = $value1 - $value2;
   $total_value2 = $value1 * $value2;
   $total_value3 = $value1 / $value2;
   $total_value4 = $value1 % $value2;
   $result = 2000+ 567- 256+(35*2)+5;

   //product price calculation end
   
   /*---------------------------------------
   constant values in php using function START
   ----------------------------------------*/
    define ("NAME" , "ahmed");
    define ("AGE" , 28);
    $text = "constant";

    define ("SALARY" , 500000);

    define("STUDENT" , "undergraduate");
    $department = "CSE";
    

    /*---------------------------------------
   constant values in php using function END
   ----------------------------------------*/

   /*---------------------------------------
   diferrence of pprint and echo startd
   ----------------------------------------*/

   $word = print("asad");//print returns value where as echo doesnt 
   echo "<br";
   echo $word ;
   echo "<br>";
   //echo "<h1 class = \"text-colour\"> raj <\h1>";
   //$name = "Asad";
   //echo "<h1>".$name."<\h1>";
   //echo "<br>";
   //echo ">h1>$name<\h1>";

   /*---------------------------------------
   diferrence of pprint and echo end
   ----------------------------------------*/


   /*---------------------------------------
   PHP data TYpe startd
   ----------------------------------------*/
   $Sname = "";
   $Sname = null ;
   $Sname = "Shohan"; 
   $Sname = "";
   $Samount = 20000;
   //$Samount = null;
   $Samount = 30000;
   $Samount = 0;
   $Samount = null;


   /*---------------------------------------
   PHP data type end
   ----------------------------------------*/
   

   
    /*---------------------------------------
   var dump startd
   ----------------------------------------*/
   
   $Sname = "Shohan";
   var_dump($Sname);
   echo "<br>";
   $Samount = 30000;

   var_dump($Samount);
   echo "<br>";

   $value = 24.56;
   var_dump($value);
   echo "<br>";
   
   $sentence = true;
   var_dump($sentence);
   echo "<br>";
  
   var_dump($sentence, $Samount, $Sname );
   echo "<br>";
    /*---------------------------------------
   var dump end
   ----------------------------------------*/

   /*---------------------------------------
   printf startd
   ----------------------------------------*/
   $Mname = "mashwd";
   $MLname = "mohaimen molla";
   $new_name= ucwords($Mname);
   $position = "engineer";
   $salary = 200000;
   $salary_hourly = 1956.66;
   echo "<br>";
   //echo "Hello $Mname";
   //echo "<br>Hello " .ucwords($Mname);
   printf("<br> Hello , my name is: %s , i am an %s and my salary is : %d taka , also the salary per hour is : %f taka ",ucwords($Mname) , ucwords($position), $salary, $salary_hourly) ;
   
   //using echo
   /* $html_way = "<div> 
   <h1> ".ucwords($MLname). "<h1/>
   <h2>" .ucwords($Mname). "<h2/>
   <div/>";
   echo $html_way; */ 

   //using printf
 /*  $html_way = "<div> 
   <h1> %s <h1/>
   <h2> %s <h2/>
   <div/>";

   printf($html_way, ucwords($MLname), ucwords($Mname)); */

   $test = 71;
   printf("<br> %c", $test);//character
   $ttest = 71;
   printf("<br> %b", $ttest);//binary no
   $tttest = 71;
   printf("<br> %o", $tttest);//octal
   $ttttest = 12;
   printf("<br> %f", $ttttest);//float
   $tttttest = 12;
   printf("<br> %x", $tttttest);//hexa decimal
   $ttttttest = 12;
   $test1 = 13;
   $test2= 14; 
   printf("<br> :%3\$X  :%1\$o  :%2\$b", $ttttttest, $test1, $test2);//hexa decimal//with double cotation
   $test3 = 71;
   $test4 = 63;
   printf('<br> %2$x , %b' , $test3, $test4);//with single cotation
   $test5 = 71;
   $test6 = 63;
   $test7 = 20.65;
   printf('<br> %2$d , %1$.0f , %3$.2f' , $test5, $test6, $test7);//with single cotation
   $value = 6.738 * 100;
   $namee = "ARIF";
   printf("<br> %.1f , [%10s]", $value, $namee); //right alined - %10s & left alined %-10s(10 space will be created for the character d)
   //if we want zero on the alined space of a character we put  it like this- %010s(right alined) or %-010s(left alined)
   //we can put any symbol of the alined space to show it


   /*---------------------------------------
   printf end
   ----------------------------------------*/


     /*---------------------------------------
   arithmatic operator starts
   ----------------------------------------*/
   $value1 = 10;
   $value2 = 5;
   $total = $value1 * $value2;
   echo "<br>";
   echo ($total);
   $value3=6;
   $value4 = 3;
   $total1 = $value1 / $value2;
   echo "<br>";
   echo $total1 ; 

   $value5=7;
   $value6 = 3;
   $total2 = $value5 % $value6;
   echo "<br>";
   echo $total2 ; 
   //exponential
   $value7=7;
   $value8 = 3;
   $total3 = $value5 ** $value6;//7*7*7(coz it multified 3 times as our value7 is 7 and value8 is 3 ie how many times it will have to be multiflied)
   echo "<br>";
   echo $total3 ; 



     /*---------------------------------------
   arithmatic  operator ends
   ----------------------------------------*/
   


     /*---------------------------------------
   assignment operator starts
   ----------------------------------------*/
   $aamount = 10;
   //$aamount = $aamount + 5;
  // $aamount=$aamount+15;
   $aamount +=15;
   echo "<br>";
   echo $aamount;

   $aamount = 10;
  // $aamount -= 5;
   //$aamount *= 5;
   //$aamount /= 5;
   $aamount %= 5;
   echo "<br>";
   echo $aamount;
   echo "<br>";

   
    /*---------------------------------------
   assignment operator ends
   ----------------------------------------*/


      /*---------------------------------------
   inc/dec operator starts
   ----------------------------------------*/
    $amount = 15;
    echo $amount++;//postfix
    echo "<br>";
    echo $amount;
    echo"<br>//////";
   /* $amount = 15;
    $amount--;
    echo "<br>";
    echo $amount;*/
    $amount = 15;
    echo ++$amount;//prefix
    echo "<br>";
    echo $amount;
    echo "<br>";
    


     /*---------------------------------------
   inc/dec operator ends
   ----------------------------------------*/

   //concatination 
   $frname= "AS'AD";
   $lsname = "MUHAMMAD";
   $fullname = "Hello this is ".$frname." ".$lsname ;
   echo $fullname;
   echo "<br>";
   //concatinating string 
   $frname= "AS'AD";
   $frname .= " MUHAMMAD";//$fname = $fname." MUHAMMAD";
   echo $frname;
   echo "<br>";

    /*---------------------------------------
   comparison operator starts
   ----------------------------------------*/
   $var1 = 30;
   $var2 = 20;
   echo "<br>" ;
   var_dump($var1  != $var2);
   echo "<br>";
   echo $var1 != $var2;
   //echo "<br>" .$var1<$var2;
   //echo "<br>" .$var1>=$var2;
   //echo "<br>" .$var1<=$var2;
   //echo "<br>" .$var1==$var2;
   //echo "<br>" .$var1!=$var2;
   //echo "<br>" .$var1===$var2;
   

      /*---------------------------------------
   comparison operator ends
   ----------------------------------------*/

    /*---------------------------------------
   comparison operator //spaceship operator starts
   ----------------------------------------*/

   $va1= 5;//if the first operant is smaller than the second operant =-1
   $va2= 6;//if the first operant is equal than the second operant =0
   echo "<br>";//if the first operant is grater than the second operant =1
   //echo $va1<=>$va2;
   //echo "<br";
   echo var_dump($va1<=>$va2);
   echo "<br>";


    /*---------------------------------------
   comparison operator // spaceship operator ends
   ----------------------------------------*/

   /*---------------------------------------
   if/else operator in php starts
   ----------------------------------------*/
   $number = 2500;
   if($number >= 2500){
      echo " the number is okey";
      } else {
      echo "number is wrong";
      }

   $username1 = "asad";
   if($username1=="asd"){
      echo "<br>";
      echo "login successful";
   }else {
      echo"<br>";
      echo "login failed";
   }

   $this_month = "feb";
   if($this_month == "may"){
      echo "<br>";
      echo "May";
   }
   else if($this_month == "feb"){
      echo "<br>";
      echo "February";
   } else if($this_month == "March"){
      echo "<br>";
      echo "March";
   } else if($this_month == "April"){
      echo "<br>";
      echo "April";
   }  else
   {echo "<br>";
      echo "Nothing";

   }





   /*---------------------------------------
   if/else operator in php ends
   ----------------------------------------*/

    /*---------------------------------------
   ternary operator in php starts
   ----------------------------------------*/
   $user = "";
   $age = 35;

   $user = ($age>30) ? "admin" : "guest";//true as age is greater than 30
   
   echo "<br>";
   echo $user;


   $age1 = 20;

    $val1 = 40;
    $val2 = 30;

   $user = ($age1>30) ? $val1 : $val2;//false as age is not greater than 30
   
   echo "<br>";
   echo $user;


   $user1 = "Asad";
   $user2 = "Muhammad";

   if(($user1 == "Asad" ) || ($user2 == "Khan")){  //or operatoe used
      echo "<br>";
      echo "Hello Asad Muhammad";


   }


   $user3 = "Arif";
   $user4 = "md";

   if(($user3 == "Arif") && ($user4 == "mhd")){  //and operator used
      echo "<br>";
      echo "Arif mhd";
   }else 
   {
      echo "<br>";
      echo "Arif Muhammad";
   }


   $username = "Islam";
   $user_ID = 1234;

   if(($username == "Islam") && ($user_ID == 1234)){
      echo "<br>";
      echo "Hello Islam , WELCOME to our Official site";
   }else
   {
      echo "<br>";
      echo "User Is Invalid";
   }

   $amt = 700;
   if((($amt >= 200) && ($amt <= 300)) || (($amt >=400) && ($amt < 500))){//and or both used
      echo "<br>";
      echo "amount  is between 200 to 500";

   }else if((($amt >= 500) && ($amt <= 600)) || (($amt >=700) && ($amt < 800))){
      echo "<br>";
      echo "amount is between 500 to 800";
   }else {
      echo "<br>";
      echo "amount  not found" ;
   }
   


   // logical no operator used

   $user = "Arif_mhd20" ;
   $user_length = strlen($user);

   if (!(($user_length >= 4) && ($user_length <=11))){// logical not operator
      echo "<br>";
      echo "invalid User !!";
   }else {
      echo "<br>";
      echo "Valid User ^_^";
   }



    /*---------------------------------------
   ternary operator in php ends
   ----------------------------------------*/

   
    /*---------------------------------------
   Nested if in  php starts
   ----------------------------------------*/
   $userN = "ASAD";
   $userP = 243;

   if($userN == "ASAD"){
      if($userP == 243){
         echo "<br>";
         echo "Hello User (^_^)";
      }else
       {
         echo "<br>";
         echo "Invadid Passward!";
      }

   }
   else {
      echo "<br>";
      echo "Invalid Username";
   }


   $name = "Arif";
   $id = 19-39;
   $pass = 243;

   if($name == "Arif"){
      if($id == 19-39){
         if($pass == 243){
            echo "<br>";
      echo "Valid USER !! Welcome Arif to Our Official Site (^_^)=(^_^)";
         }else {
            echo "<br>";
      echo "Invalid Password";
         }
      }else{
         echo "<br>";
      echo "Invalid ID";
      }
      
   }else{
      echo "<br>";
      echo "Invalid Name ^.^";
   }

   $name = "mhd";
   $occupation = "engineer";
   $pass = 12;

   if($name == "mhd" && $occupation == "engineer" && $pass == 123){
      echo "<br>";
      echo "Valid User!! WELCOME MHD . WE ARE GLAD TO HAVE YOU HERE ^_^";
   }else if($name != "mhd" && $occupation == "engineer" && $pass == 123){
      echo "<br>";
      echo "Invalid Name";
   }else if($name == "mhd" && $occupation != "engineer" && $pass == 123){
      echo "<br>";
      echo "invalid Occupation";
   }else if($name == "mhd" && $occupation == "engineer" && $pass != 123){
      echo "<br>";
      echo "Invalid Password";
   }else {
      echo "<br>";
      echo "Invalid name , occupation and Password";
      echo "<br>";
   }

   
    /*---------------------------------------
   Nested if in php ends
   ----------------------------------------*/

   /*---------------------------------------
   Loop in php starts 
   ----------------------------------------*/
   $count =1;
   while($count <= 10){
      echo "<br>";
      echo "Arif";
      $count++ ;
      echo "<br>";
   }

   //while loop

   $count =1;
   while($count <=5){
      echo "<br>";
      echo $count;
      $count ++;
   }

   //do while loop

   $count1 =2;
   do{
      echo "<br>";
      echo $count1."<br>" ;
      $count1 ++;
   }while( $count1 <= 20);

   //loop

   for($count=1; $count <= 5; $count++){
      echo "<br>";
      echo $count;
   }
 
   for($count=1; $count <= 10; $count+=3){
      echo "<br>";
      echo "hello".$count;
   }
   
//break statement
   for($count =1; $count<=10; $count++){
      echo "PHP <br>";
      if($count != 6){
      echo "is <br>";
      if($count == 7){
         continue;}
         echo "amazing <br>";
      
      }
   }echo"__________________<br>";

//continue satement
   for($count =1; $count<=5; $count++){
      echo "PHP <br>";
      if($count == 3){
         continue;}
      echo "is <br>";
      echo "amazing <br>";
      
      
   }

   //nested loop

   for($main_list = 1; $main_list <=5; $main_list++){
         echo "list".$main_list."<br>";
         for($inner_list = 1; $inner_list <= 4; $inner_list++){
            echo "--------------inner list".$inner_list."<br>";
         }
   }

   for($main_list = 1; $main_list <=5; $main_list++){
      echo "list".$main_list."<br>";
      for($inner_list = 1; $inner_list <= 4; $inner_list++){
         echo "--------------inner list".$inner_list."<br>";
         if($main_list== 2 && $inner_list == 2){
            break 2;//its for getting out of the main loop completely using break
         }
      }
} 

echo "end";


for($main_list = 1; $main_list <=5; $main_list++){
   echo "list".$main_list."<br>";
   for($inner_list = 1; $inner_list <= 4; $inner_list++){
      echo "--------------inner list".$inner_list."<br>";
      if($main_list== 2 && $inner_list == 2){
         goto out;//its for getting out of the main loop completely using goto
      }
   }
} 
out://for marking where to go
echo "end";
echo "<br>";


   /*---------------------------------------
   loop in php ends
   ----------------------------------------*/


  /*---------------------------------------
   switch case in php starts
   ----------------------------------------*/
   $name = "Arif";
   switch ($name) {
      case  "Arif":
         echo "HELLO ". $name;
         break;

         case  "Asad":
            echo "HELLO ". $name;
            break;

            case  "Ahmed":
               echo "HELLO ". $name;
               break;

               case  "Azooz":
                  echo "HELLO ". $name;
                  break;

                  default:
                  echo "BYE BYE <br>";
                  echo "<br>";
   }


   echo "<br>";
   $name = "Ahmed";
   switch (true) {
      case  "Arif":
         echo "HELLO ". $name;
         break;

         case  "Asad":
            echo "HELLO ". $name;
            break;

            case  "Ahmed":
               echo "HELLO ". $name;
               break;

               case  "Azooz":
                  echo "HELLO ". $name;
                  break;

                  default:
                  echo "BYE BYE";
   }



     /*---------------------------------------
   switch case in php ends
   ----------------------------------------*/







   echo "<br>";

   echo "<br>my first Name is<br> .$name. <br>";

   echo "my last Name is $Lname<br>";

   echo 'my house rent is'.$rent.'<br>';

   echo 'my telephone number is' .$telephone.'<br>';

   echo "total amount spend per month $total_amount<br>";

   echo "my second name is $second_Name<br>";

   echo "my major was $my_major<br>";

   echo "my current job is $job_description<br>";

   echo 'this is my last semeter for completing my graduation , i am left with '.$course1.' and '.$course2.'<br>';

   echo 'just for trying (('.$$Tname. '))<br>';

   echo $total_value.'<br>' ;
   echo $total_value1.'<br>' ;
   echo $total_value2.'<br>' ;
   echo $total_value3.'<br>' ;
   echo $total_value4.'<br>' ;
   echo $result.'<br>' ;

   echo NAME. "<br>";
   echo constant("NAME"). "<br>";
   echo "your name is : " .$text("NAME") ;
   echo "<br>";

   echo AGE. "<br>";
   echo SALARY. "<br>";
   echo "i am an " .STUDENT. " student belonging to the department $department <br>"; 

   echo $Sname;
   echo $Samount ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
    year 
    <select name="" id="">
      <?php
      $year = 2000;
      while ($year<=2050){
         ?>
                 <option value="<?php echo $year; ?>"><?php echo $year; ?></option>

         <?php
         $year ++;
      } 
      ?>
        
    </select>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <form action="@">
      month
      <select name="" id="">
         <?php 
         $month = 1;
         while ($month <= 12){
            ?>
            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
            <?php
            $month++;
         }
         ?>
      

      </select>

    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="#">
      days
         <select name="" id="">
         <?php  
         $day = 1;
         while($day <= 31){
            ?>
            <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
         <?php
         $day++;
         }
         ?>

         </select>

   </form>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <ul>
      <li>user 1</li>
      <li>user 2</li>
      <li>user 3</li>
      <li>user 4</li>
      <li>user 5</li>
      <li>user 6</li>
      <li>user 7</li>

   </ul>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=\, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <ul>
      <?php 
      for($count_user = 1; $count_user <= 40; $count_user+=4){
      ?>

      <li>user <?php echo $count_user ?></li>
            
      <?php

      break;
      }
      ?>
   </ul>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>nested loop</title>
</head>
<body>
   <ul>
      <li>list 1
         <li>inner 1</li>
         <li>inner 2</li>
      </li>
      <li>list 2
         <li>inner 1</li>
         <li>inner 2</li>
      <li>list 3
         <ul>
            <li>inner 1</li>
            <li>inner 2</li>
         </ul>
      </li>
   </ul>  
</body>
</html>