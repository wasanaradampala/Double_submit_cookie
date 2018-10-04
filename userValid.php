<?php
function validateTokens($csrftoken,$csrfcookie) {
    if($csrfcookie==$csrftoken){
		
             return true;
	}
}

$getcsrfToken = $_POST["csrf"];

if(isset($_POST['addname'])){

	if(validateTokens($getcsrfToken,$_COOKIE['csrf_cookie'])){
		echo "<h2>Welcome  ".$_POST['addname']."</h2>" ;
	}
	else{
	echo "<h2> Error in user ".$_COOKIE['user_cookie']."</h2>";
	}
}

?>
