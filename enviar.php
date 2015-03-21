<?php
//Definicao das variaveis
$nome = $_POST['nome'];
$identidade = $_POST['identidade'];
$emissor = $_POST['emissor'];
$datanasc = $_POST['datanasc'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$frequencia = $_POST['frequencia'];
$solicitacao = $_POST['solicitacao'];
$comprometo = $_POST['comprometo'];
$declaracao = $_POST['declaracao'];
$cabecalho = "<h2><hr>Inscrição na Corrida da Paz</h2><hr>";
$destinatario = "anspfeifer@gmail.com";
//Apartir daqui sera as informações que serao enviadas por email para a empresa
$mensagem = "
	$cabecalho
	Nome: $nome 
	Telefone: $telefone
	E-mail: $email
	Identidade: $identidade
	Data de Nascimento: $datanasc
	Endereço: $endereco - $cep
	Cidade: $cidade 
	Estado: $estado
	Com que frequencia eu realizo corridas: $frequencia
	$solicitacao: Solicito-vos que seja realizada a minha inscrição para participar da Corrida da Paz, que sera realizada no Parque das Naçoes Indiginas, na cidade de Campo Grande MS as 09:00 do dia 01 de março de 2015.
	
	$comprometo: Comprometo-me a respeitar e cumprir as regras estabelecidas. Autorizo, ainda, o uso lícito de minha imagem, seja por meios de filmes ou qualquer outro tipo de gravação, para divulgar este evento nos meios de comunicação e imprensa em geral.
	
	$declaracao: Declaro que participo do evento por livre expontanea vontade, estando em boas condições, físicas e mentais, insento os organizadores, patrocinadores e colaboradores do evento, em seu nome, herdeiros ou sucessores, de qualquer responsabilidade por acidentes ou incidentes que eu venha a sofrer antes, durante ou após o mesmo."
	
	//Configuracao de envio
	mail ("$destinatario","$cabecalho","$mensagem","From:$email");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina de Inscrição</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="container" style="width:800px; font-family:Arial, Helvetica, sans-serif">
    	<div class="row">
        	<div class="col-lg-12">
            	<hr><?php echo "$cabecalho"; ?><hr>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-12">
            <table class="table table-bordered table-hover table-responsive">
            	<tr>
                	<td>Nome:</td>
                    <td><?php echo $nome; ?></td>
                 </tr>
                 <tr>
                	<td>E-mail:</td>
                    <td><?php echo $email; ?></td>
                 </tr>
                 <tr>
                	<td>Telefone:</td>
                  	<td><?php echo $telefone; ?></td>
                     
                 </tr>
                 <tr>
                	<td>Identidade:</td>
                    <td>Identidade:</td>
                 </tr>
                  <tr>
                	<td>Data de Nascimento:</td>
                    <td><?php echo $datanasc; ?>:</td>
                 </tr>
                 <tr>
                	<td>Endereço:</td>
                    <td><?php echo $endereco; ?>:</td>
                 </tr>
                 <tr>
                	<td>Cidade:</td>
                    <td><?php echo $cidade; ?></td>
                 </tr>
                  <tr>
                	<td>CEP:</td>
                    <td><?php echo $cep; ?></td>
                 </tr>
                 <tr>
                	<td>Estado:</td>
                    <td><?php echo $estado; ?></td>
                 </tr>
                 <tr>
                	<td>Com que frequencia eu realizo corridas:</td>
                    <td><?php echo $frequencia; ?></td>
                 </tr>
                 <tr>
                	<td><?php if ($solicitacao == 'on')
					{echo "Sim";} 
					?></td>
                    <td>Solicito-vos que seja realizada a minha inscrição para participar da Corrida da Paz, que sera realizada no Parque das Naçoes Indiginas, na cidade de Campo Grande MS as 09:00 do dia 01 de março de 2015.</td>
                 </tr>
                 
                 <tr>
                	<td>
					<?php if ($comprometo == 'on')
					{echo "Sim";} 
					?></td>
                    <td>Comprometo-me a respeitar e cumprir as regras estabelecidas. Autorizo, ainda, o uso lícito de minha imagem, seja por meios de filmes ou qualquer outro tipo de gravação, para divulgar este evento nos meios de comunicação e imprensa em geral/td>
                 </tr>
                 
                 <tr>
                	<td>
					<?php if ($declaracao == 'on')
					{echo "Sim";} 
					?></td>
                    <td>Declaro que participo do evento por livre expontanea vontade, estando em boas condições, físicas e mentais, insento os organizadores, patrocinadores e colaboradores do evento, em seu nome, herdeiros ou sucessores, de qualquer responsabilidade por acidentes ou incidentes que eu venha a sofrer antes, durante ou após o mesmo.</td>
                 </tr>               
            </table>
            </div>
        </div>
    </div>
</body>
</html>
