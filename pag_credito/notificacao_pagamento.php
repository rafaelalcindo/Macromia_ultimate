<?php

require('../connection.php');
$conexao = mysqli_connect($db_host,$db_user, $db_pass,$db_name);

if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}


header("access-control-allow-origin: https://sandbox.pagseguro.uol.com.br");
define( 'API_ACCESS_KEY', 'AIzaSyDhCklNumxJiyqRSZMgYyv0UU-SO0U9yO4');
require('controller.php');






$email = 'pagamento@mazy.com.br';
$token = 'E547BB2BFAEE40E1AB6998BD39A5A208';

$_POST['notificationCode'] = 'F21173D3DC93DC93F176647FAF96FC4FE787';
$_POST['notificationType'] = 'transaction';

if($_POST['notificationType'] and $_POST['notificationType'] == 'transaction'){
	$url = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/".$_POST['notificationCode']."?email=".$email."&token=".$token;

	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$transactionCurl = curl_exec($curl);
	curl_close($curl);

	$transaction = simplexml_load_string($transactionCurl);
	var_dump($transaction);

	echo "<br/> Credi_nome: ".$transaction->items->item->description;
	echo "<br/> Credi_status: ".$transaction->status;
	echo "<br/> Credi_modo_pay: ".$transaction->paymentMethod->type;
	echo "<br/> Credi_val_pag: ".$transaction->grossAmount;
	echo "<br/> Credi_credi_desc: Pagamento via botão";
	echo "<br/> Credi_id_compra: ".$transaction->items->item->id;
	echo "<br/> Credi_email: ".$transaction->sender->email;

	$credi_nome = $transaction->items->item->description;
	$credi_status = $transaction->status;
	$credi_modo_pay = $transaction->paymentMethod->type;
	$credi_val_pag = $transaction->grossAmount;
	$credi_desc = "Pagamento via botão";
	$credi_id_compra = $transaction->items->item->id;
	$credi_email = $transaction->sender->email;

	RegistroPagamentoPagSeguro($conexao, $credi_nome, $credi_status, $credi_modo_pay, $credi_val_pag, $credi_desc, $credi_id_compra, $credi_email);
	NotificationPush();
	gc_collect_cycles();
}



function NotificationPush(){

	$to02="eJo1rGb1lfg:APA91bGPL2DRQXAP7qBQTVp_HZb2dAvyin-6rjilwCNfYlrJGDGvkU23IMU-PfzlOn1rzsJ8s8dWqfsuBqofQ7UlS3-zKtHDuU7lxl9foWV40bWiH5F4iLXPOI42Cs2z6YEPWUjR3u39";

    $to = "dQqxVPLPKP4:APA91bGl0ZYNjhFJiJwkx1kpnkYX7Pnd4Y8T02Rb9oUtxcrr4TiJ6VAaJrzHj26N-rdjPkZx9YYehKHgbugz382Z6tVG3KO929XMSRvP3WNoj3gAjHZUcdWxO7usoamp9Bq8RdpYD_4J";

    $to03 = "dRRZi-7BEt0:APA91bE9sfR6p7k67WU3uyYifUBmPOCvFf0jX_r_k4mtzx5le_iKOBfTWb7-UQLzSHYeo-2YDhS4Yt-7Og1bUlUAqCWKE_vYmoAihkRfB7go5nVaZIt79h1kI-lm5vz5zfHqOOE0ypjg";

    $title="Teste de pagamento do sandbox...";    

    $image = "https://cdn4.iconfinder.com/data/icons/finance-vol-2-1/512/Funds_Money_Dollar_Finance_Earnings_Savings_Payment-128.png";

    $message = "Um novo Pagamento foi efetuado com sucesso!";
    
    sendPush02($to, $to02, $to03,$title, $message, $image);

}



function sendPush02($to, $to02, $to03,$title, $message, $image){
    
    $registrationIds = array($to, $to02, $to03);
    $msg = array('message' => $message,'title' => $title,'vibrate' => 1,'sound' => 1, 'image' => $image );
    $fields = array('registration_ids' => $registrationIds, 'data' => $msg, 'image_url' => $image );
    $headers = array('Authorization: key=' . API_ACCESS_KEY, 'Content-Type: application/json');
    $ch = curl_init();
    
    curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
    curl_setopt( $ch,CURLOPT_POST, true );
    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
    $result = curl_exec($ch);
    curl_close( $ch );
    echo $result;
    echo "envio para serv do google";
}












