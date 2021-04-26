
<?php
session_start();

require('configuration.php' );
$errors = array();
error_reporting(0);


if(isset($_POST['login'])){
	$fullname = preg_replace('/[^A-Za-z]/', '', $_POST['fullname']);
	$nickname =$_POST['nickname'];
	$bestfriendname =$_POST['bestfriendname'];
	$firstchildhoodfriendname =$_POST['firstchildhoodfriendname'];
	$howdidyouknowme =$_POST['howdidyouknowme'];
	$doornumber =$_POST['doornumber'];
	$landmark =$_POST['landmark'];
	$townname =$_POST['townname'];
	$distict =$_POST['distict'];
	$postalcode =$_POST['postalcode'];
	$emailid =$_POST['emailid'];
	$linkedin =$_POST['linkedin'];
	$twitter =$_POST['twitter'];
	$facebook =$_POST['facebook'];
	$otherid =$_POST['otherid'];
	$mobilenumber =$_POST['mobilenumber'];
	$dateofbirth =$_POST['dateofbirth'];
	$gender =$_POST['gender'];
	$favcolor =$_POST['favcolor'];
	$favdress =$_POST['favdress'];
	$favmusic =$_POST['favmusic'];
	$favgame =$_POST['favgame'];
	$favdish =$_POST['favdish'];
	$favbook =$_POST['favbook'];
	$favactor =$_POST['favactor'];
	$favsportsperson =$_POST['favsportsperson'];
	$moreinterestabout =$_POST['moreinterestabout'];
	$thingsyoulikemostly =$_POST['thingsyoulikemostly'];
	$funniestmoment =$_POST['funniestmoment'];
	$dislikedish =$_POST['dislikedish'];
	$dislikethingst =$_POST['dislikethingst'];
	$crazyaboutthings =$_POST['crazyaboutthings'];
	$anyotherdislikes =$_POST['anyotherdislikes'];
	$whatyoulikeonme =$_POST['whatyoulikeonme'];
	$whatyoudislikeonme =$_POST['whatyoudislikeonme'];
	$mostremembermomentwithme =$_POST['mostremembermomentwithme'];
	$suggestionstome =$_POST['suggestionstome'];
	$undesirablemonentbyme =$_POST['undesirablemonentbyme'];
	$firstmeetwithme =$_POST['firstmeetwithme'];
	$lifeambition =$_POST['lifeambition'];
	$inspiredby =$_POST['inspiredby'];
	$yourrolemodel =$_POST['yourrolemodel'];
	$aboutyou =$_POST['aboutyou'];

	
}
	
$db = "database2";
$link = mysqli_connect("localhost","root", "",$db);
mysqli_select_db( $link,$db);
if(mysqli_query($link,"INSERT INTO slambook(fullname,nickname,bestfriendname,firstchildhoodfriendname,howdidyouknowme,doornumber,landmark,townname,distict,postalcode,emailid,linkedin,twitter,facebook,otherid,mobilenumber,dateofbirth,gender,favcolor,favdress,favmusic,favgame,favdish,favbook,favactor,favsportsperson,moreinterestabout,thingsyoulikemostly,funniestmoment,dislikedish,dislikethingst,crazyaboutthings,anyotherdislikes,whatyoulikeonme,whatyoudislikeonme,mostremembermomentwithme,suggestionstome,undesirablemonentbyme,firstmeetwithme,lifeambition,inspiredby,yourrolemodel,aboutyou) VALUES ('$fullname','$nickname','$bestfriendname','$firstchildhoodfriendname','$howdidyouknowme','$doornumber','$landmark','$townname','$distict','$postalcode','$emailid','$linkedin','$twitter','$facebook','$otherid','$mobilenumber','$dateofbirth','$gender','$favcolor','$favdress','$favmusic','$favgame','$favdish','$favbook','$favactor','$favsportsperson','$moreinterestabout','$thingsyoulikemostly','$funniestmoment','$dislikedish','$dislikethingst','$crazyaboutthings','$anyotherdislikes','$whatyoulikeonme','$whatyoudislikeonme','$mostremembermomentwithme','$suggestionstome','$undesirablemonentbyme','$firstmeetwithme','$lifeambition','$inspiredby','$yourrolemodel','$aboutyou')")){
    echo nl2br("slambook is sucessfully generated.");
	#header('Location: thankyou.html')
	
} else{
    echo nl2br('Slambook already exists by that name') ;
}
    
       die;
	
	


?>
