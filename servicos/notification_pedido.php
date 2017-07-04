<?php

header('Content-Type: text/html; charset=utf-8');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);


if(mysqli_connect_errno($conexao)){
	echo "A conexÃ£o falhou, Erro Reportado ".mysqli_connect_error();
	exit();
}else{
	echo "A conexÃ£o foi estabelecida com sucesso!";
}

define( 'API_ACCESS_KEY', 'AIzaSyDhCklNumxJiyqRSZMgYyv0UU-SO0U9yO4');



//echo "<br/> notification Array: ".print_r($noti_foto)." noti foto <br/>";



function sendPush($conexao, $title, $message, $image, $servicos){


	$noti_foto = array();

	$noti_gcm_banco = gcm_code_foto($conexao, $servicos);

	while($row = mysqli_fetch_array($noti_gcm_banco)){
		$noti_foto[] = $row['foto_gcm'];
	}

	//$to = "e9YP2rRQToA:APA91bF9TxUCDX9Q4Xu9UEK_EiroFcUvlWiluxWYZn6UIqxF3NjeNjsaNOZvKf_8VUF5VbXqjzJKIrgVx4EMOj4LQLqmoHQS3TflaxNJOMcCaMrhbaqoA_Z8Nv9BHn4-hX_S6nBRs8mz";
	$to2 = "dLSqn6x9wdM:APA91bEme10FHCLxyi72iRU_m7dA8wqewYI1dvTdS5OuTKO6qWtSoOuC92wwI6Y4xKW_QZQ3yetSJ0NdI6E8PjFsjQhiP2-yA4sE2eSj2agOgUoxXd-6e_YuS4rEZ_YajjW-OI_ShMDt";
	$to3 = "cd5D3_YZ7_c:APA91bFdn0q63MXg3I8IdiLENvWd9LLbEHjMC41Cl90EZc64FAjBdRjZkmTwLnaYLmtneV6w6OkZHkYtFzfxhjfHiqtbOc8bi8IMJoqsA4D3w96mS4cmU_ycvIaoPvhVxkk6ogRpu7tR";

	//$noti_foto[] = $to;
	$noti_foto[] = $to2;
	$noti_foto[] = $to3;
	$registrationIds = $noti_foto;
    $msg = array('message' => $message,'title' => $title,'vibrate' => 1,'sound' => 1, 'image' => $image);
    $fields = array('registration_ids' => $registrationIds, 'data' => $msg, 'image_url' => $image );
    $headers = array('Authorization: key=' . API_ACCESS_KEY, 'Content-Type: application/json');
    $ch = curl_init();

	curl_setopt( $ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
	curl_setopt( $ch, CURLOPT_POST, true);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ));

	$result = curl_exec($ch);
	curl_close($ch);
	
	echo $result;
	echo "envio para o serv do google";

}