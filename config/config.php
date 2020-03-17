<?php

function kode($user){
    $base=base64_encode($user);
    $kode=md5($base);
    return $kode;
}

function token(){
    $token=md5(date('hisYmd'));
    return $token;
}

function url_page(){
    $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
    $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    return $config['base_url'];
}

function kirim_email($HOST_EMAIL,$PORT_EMAIL,$USERNAME_EMAIL,$EMAILPASSWORD,$SMTP_SECURE,$ADDRESS,$TEXT){
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = $HOST_EMAIL;
	$mail->SMTPDebug= 2;
	$mail->SMTPAuth = true;
	$mail->Username = $USERNAME_EMAIL;
	$mail->Password = $EMAILPASSWORD;
	$mail->SMTPSecure = $SMTP_SECURE;
	$mail->Port = $PORT_EMAIL;
	$mail->addAddress($ADDRESS);

	$mail->setFrom('example@example.com', 'BackNative');
	$mail->addReplyTo('example@example.com', 'BackNative');
	$mail->addCC('example@example.com');
	$mail->addBCC('example@example.com');
	$mail->Subject = 'BackNative';
	$mail->isHTML(true);
	$mail->Body = $TEXT;
	//$mail->addAttachment('../file/'.$file);
	// $mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru
	return $mail;
}