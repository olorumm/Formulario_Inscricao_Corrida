<?php
	$quebra_linha = "\n";
	$emailsender = "contato@suportems.com.br";
	$nomeremetente = "Anselmo Pfeifer";
	$emaildestinatario = "anspfeifer@gmail.com";
	$emailcopia = "contat@anselmopfeifer.com";
	$emailcopiaoculta = "aselmopfeifer@hotmail.com";
	$assunto = "Teste de Email";
	$mensagem = "Conteudo da mensagem";
	$mensagemHTML = '<p>Teste da função mail ():!</p>
			<p><h1>Teste da função mail</h1></p>
			<p><p>Teste da função mail ():!</h1></p>
			<p><b><i>'.$mensagem.'</i></b></p>
			<hr>';
	$headers = "MIME-Version: 1.1".$quebra_linha;
	$headers = "Content-type:text/html;charset=utf8".$quebra_linha;
	$headers = "From: ".$emailsender.$quebra_linha;
	$headers = "Returne-Path: ".$emailsender.$quebra_linha;
	$headers = "Cc: ".$emailcopiaoculta.$quebra_linha;
	$headers = "Bcc: ".$emailcopia.$quebra_linha;
	$headers = "Replay-To: ".$emailsender.$quebra_linha;	
	print "Mensagem enviada com sucesso !!"
?>