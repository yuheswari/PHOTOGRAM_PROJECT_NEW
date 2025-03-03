<pre>
<?php
include 'libs/load.php';
// include 'libs/includes/Mic.class.php';
// print("_SERVER \n");
// print_r($_SERVER);
// print("_GET \n");
// print_r($_GET);
// print("_POST \n");
// print_r($_POST);
// print("_FILE \n");
// print_r($_FILES);
// print("_COOKIES\n"); 
// print_r($_COOKIE);

// if(signup("yuhess","passwordd","yuheds@gmail.com","999909999")){ 
//     echo "Success";
// }else{
//     echo "Failed";
// }

 $mic1 = new Mic("Roda"); //constructing the object
 $mic2 = new Mic("HyperX"); //constructing the object

Mic::testfunction(); //calling static function no constructor is called no destruct is called

 $mic1->setLight("White");
 $mic2->setLight("Green");

 print(ucwords("hyper quad cast"));
 $mic1->setModel("hyper quad cast");
 print("Model of 1st mic is ".$mic1->getModelProxy());
 print("\n".$mic1->getBrand());
 print("\n".$mic2->getBrand());

 print("Value of 10+12 is ".$mic1->add(10, 12));
 print("this is mono inside the pre tag");

 $conn=Database::getConnection();
 $conn=Database::getConnection();
 $conn=Database::getConnection();
 $conn=Database::getConnection();





 ?>
 </pre>