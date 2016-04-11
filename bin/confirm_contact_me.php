<?php

/*-- Entreprise: Belle Demeure
		---- Site web: belledemeure-ci.com
		---- Developpeurs: Dominique MENSAH , Konan N'GUESSAN
		---- Date: 18-Novembre 2015

		 FONCTION QUI ENVOI UN EMAIL A L'ADMINISTRATEUR DE BELLE DEMEURE A LA SUITE D'UNE DEMANDE DE CONTACT */

	require_once 'PHPMailer/PHPMailerAutoload.php';
	// check if fields passed are empty
	if(empty($_POST['name'])  		||
	   empty($_POST['email']) 		||
	   empty($_POST['objet']) 		||
	   empty($_POST['message'])		||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
			echo "No arguments Provided!";
			return false;
	   }
		
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$objet = $_POST['objet'];
	$message = $_POST['message'];
		

	$mail = new PHPMailer();
	$mail->IsSMTP(); //indique que le message sera envoyé par la méthode SMTP
	$mail->Host = 'mx01.cloud4africa.net'; //le hostname du serveur mail de cloud4africa
	$mail->Port = 25; //
	$mail->CharSet = 'UTF-8'; //l'encodage à utilisé. c'est une bonne pratique de toujours utiliser l'UTF-8 si aucun besoin particulier
	$mail->SMTPAuth = true; //indique que vous désirez vous identifier. vous ne pourrez pas envoyez votre mail sinon.
	$mail->SMTPDebug = 2; //facultatif, niveau de débogage pour un maximu d'infos en cas d'erreurs;
	$mail->Username = 'info@icej-ao.org'; //entrez un adresse mail valable pour votre nom de domaine
	$mail->Password = 'icej-ao2016'; //entrez le mot de passe de l'adresse mail



	//A ce stade, l'objet PHPMailer est correctement configuré. Reste plus qu'à fournir l'expéditeur et le contenu du mail

	$mail->setFrom('info@icej-ao.org', 'ICEJ Afrique de l ouest'); //entrez l'expéditeur du mail
	$mail->addAddress($email_address); //permet d'ajouter un ou plusieurs destinataires.
	$mail->isHTML(true); 
	$mail->Subject = "ICEJ Afrique de l'Ouest, votre demande de contact";
	$mail->Body = "Nous vous remercions pour votre visite sur le site d'ICEJ Afrique de l'Ouest. <br><br/> Nous traiterons votre demande dans les plus brefs délais. <br><br/>Cordialement,<br><br/>L'équipe technique d'ICEJ Afrique de L'Ouest ";

	//Reste plus qu'a envoyer le message et vérifier qu'on à pas reçu une erreur.
	if(!$mail->send()) {
	echo 'Erreur envoi du message : ' . $mail->ErrorInfo;
	} else {
	return true;
	}

?>