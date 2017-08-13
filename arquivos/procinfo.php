<?php
$date = date("d/m/Y h:i");
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['phone'];
$assunto_digitado_pelo_usuario = "Serviço de Informação ao Cidadão";
$textodamensagem = $_POST['textarea'];


echo '<br>data: ' . $date;
echo '<br>nome: ' . $nome;
echo '<br>email: ' . $email;
echo '<br>telefone: ' . $telefone;
echo '<br>assunto: ' . $assunto_digitado_pelo_usuario;
echo '<br>texto: ' . $textodamensagem;

switch ($acao) {  // switch= mudar ou trocar
		case 0 : 
			try{
					$nome_do_site="Serviço de Informação ao Cidadão";
					$to = "wordpress@camaraarroiodosratos.rs.gov.br, ";
					$to .= $email;
					$email_para_onde_vai_a_mensagem = $to;

					$nome_de_quem_recebe_a_mensagem = "Serviço de Informação ao Cidadão";
					$exibir_apos_enviar='index.html';

					//MAIS - CONFIGURA�OES DA MENSAGEM ORIGINAL
					$cabecalho_da_mensagem_original="From: ".$email."\n";
					$assunto_da_mensagem_original= $assunto_digitado_pelo_usuario;

					$configuracao_da_mensagem_original="
					ENVIADO POR:\n
					Nome: $nome\n
					Email: $email\n
					Telefone: $telefone\n
					Assunto: $assunto_digitado_pelo_usuario\n
					Mensagem: $textodamensagem\n
					Para: $email_para_onde_vai_a_mensagem\n
					ENVIADO EM: $date";
					
					$confirm = "Confirmação Serviço de Informação ao Cidadão";
					$assunto_da_mensagem_de_resposta = $confirm;
					$cabecalho_da_mensagem_de_resposta = "From: ".$email." \n";
					$configuracao_da_mensagem_de_resposta="Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";

					$assunto_digitado_pelo_usuario="n";
					$headers = "MIME-Version: 1.0" . "\n";
					$headers .= "Content-type: text/html; charset=utf-8" . "\n";
					$headers .= "Return-Path: fagnersutel@gmail.com"."\n";
					$headers .= "Errors-To: fagnersutel@gmail.com"."\n";
					$headers = "$cabecalho_da_mensagem_original";

					if($assunto_digitado_pelo_usuario=="n"){
					$assunto = $assunto_da_mensagem_original;
					}
					$seuemail = "$email_para_onde_vai_a_mensagem";
					$mensagem = "$configuracao_da_mensagem_original";

					include_once("./admin/Classes/Mail.class.php");	
							
					$mail 	= new Mail($seuemail, $assunto, $mensagem, $headers);			
					
					$mail->encaminhaMail($seuemail, $assunto, $mensagem, $headers); 					
			
					// header('location: form3.php'); 
					
				}catch(Exception  $excessao){
					echo "catch";
				}
				
				try{

				  	$assunto = "Resposta Automática Serviço de Informação ao Cidadão";
					$seuemail = $email;
					$mensagem = "Obrigado por entrar em contato!\nEstaremos respondendo em breve...\nAtenciosamente,\n$nome_do_site\n\nEnviado em: $date";
					$headers = "MIME-Version: 1.0" . "\n";
					$headers .= "Content-type: text/html; charset=utf-8" . "\n";
					$headers .= "Return-Path: fagnersutel@gmail.com"."\n";
					$headers .= "Errors-To: fagnersutel@gmail.com"."\n";
					$headers="From: wordpress@camaraarroiodosratos.rs.gov.br\n";
																	
					$mail2 	= new Mail($seuemail, $assunto, $mensagem, $headers);			
					
					$mail2->encaminhaMail($seuemail, $assunto, $mensagem, $headers);  
					
				}catch(Exception  $excessao){
					echo "catch";
				} 
				
				header('location: index.php?pag=arqs/mailSucesso.php');
				
		break;
}
?>