<div class="frame-container registration">
    <script src="js/regFormScript.js"></script>
    <?php    
    /*//include 'api/valid.php';
    	
    $name = $surname = $email = $password = $adress = $city = $pcode = "";
    $nameErr = $emailErr = $passwordErr = "";
    
    $security = new Security();
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    	
    	if($security->inputCheck($_POST['name'])){
    		$name = $_POST['name'];
    	}
    	else{
    		$nameErr = "Enter name and Surname.";
    	}
    	
    	if($security->inputCheck($_POST['last-name'])){
    		$surname = $_POST['last-name'];
    	}
    	else{
    		$nameErr = "Enter name and Surname.";
    	}
    	
    	if($security->inputCheck($_POST['mail'])){
    		$email = $_POST['mail'];
    	}
    	else{
    		$emialErr = "Enter email.";
    	}
    	
    	if($security->inputCheck($_POST['password'])){
    		$password = $_POST['password'];
    	}
    	else{
    		$passwordErr = "Enter password.";
    	}
    	
    	if($name != null && $surname != null && $email != null){
    		//to do register
    	}   	    	
    }    */
    ?>
    <form action="" method="POST" class="registration">
        <ul class="registration-container">
            <li>
                <h4 class="headline">Registration</h4>
                <ul>
                    <li class="registration-item"><label for="name">First name:</label><input type="text" name="name" placeholder="First name..." maxlength="20" value = ""><span>*<?php/* echo $nameErr;*/?></span></li>
                    <li class="registration-item"><label for="last-name">Last name:</label><input type="text" name="last-name" placeholder="Last name..." maxlength="20" value=""><span>*</span></li>
                    <li class="registration-item"><label for="mail">E-mail:</label><input type="email" name="mail" placeholder="johnSmith@mail.com" maxlength="40" value=""><span>*<?php/* echo $emailErr;*/?></span></li>
                    <li class="registration-item"><label for="password">Password:</label><input type="password" name="password" placeholder="*******" maxlength="30"><span>*<?php/* echo $passwordErr;*/?></span></li>
                </ul>
            </li>
            <li>
                <h4 class="headline scalable"><a href="#" class="hideShow-button">-</a>Fakturacne udaje</h4>
                <ul class="hide">
                    <li class="registration-item"><label for="adress">Adress:</label><input type="text" name="addres" placeholder="Adress..." maxlength="30"></li>
                    <li class="registration-item"><label for="city">City:</label><input type="text" name="city" placeholder="City..." maxlength="20"></li>
                    <li class="registration-item"><label for="state">Post code:</label><input type="text" name="state" placeholder="Postcode..." maxlength="5"></li>
                </ul>
            </li>
            <li class="registration-item"><input type="submit" value="Register"></li>
        </ul>
    </form>
</div>