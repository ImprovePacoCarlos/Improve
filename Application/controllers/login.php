<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
		
		$password = md5($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM usuario WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['user_password']==$password && $row['user_rol']=="ADMINISTRADOR"){
				
				echo "ok"; // log in
				$_SESSION['user_session'] = $row['user_id'];

			}else if(['user_password']==$password && $row['user_rol']=="VENDEDOR"){

					echo "ven"; // log in
				$_SESSION['user_session'] = $row['user_id'];

			}
			else{
				
				echo "Ops... algo anda mal...!VERIFIQUE SUS DATOS¡"; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>