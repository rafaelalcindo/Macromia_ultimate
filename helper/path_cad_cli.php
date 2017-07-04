<?php
require('../connection.php');

$conexao = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno($conexao)){
	echo "Falha na conexão com banco de dados!";
	exit();
}else{
	
}

if(isset($_POST['txt_nome_cli']) && isset($_POST['txt_senha_cli']) && isset($_POST['txt_email_cli']) ){
	$_GET['p'] = 'cad_cli';
	require_once('../login/controller.php');
}
  
	/* echo "Pedido : ".print_r($_POST['Pedido'])." <br/>";
	echo "Orçamento: ".print_r($_POST['Orcamento'])." <br/>";
	echo "Filmagem: ".print_r($_POST['Filmagem'])." <br/>";
	echo "Data:  ".print_r($_POST['txt_data'])." <br/>";
	echo "Hora:  ".print_r($_POST['txt_hora'])." <br/>";
	echo "Estado: ".print_r($_POST['sele_estado'])." <br/>";
	echo "cidade: ".print_r($_POST['sele_cidade'])." <br/>";
	echo "Estado: ".print_r($_POST['txt_endereco'])." <br/>";
	echo "Numero: ".print_r($_POST['txt_numero'])." <br/>";
	echo "Cliente email: ".print_r($_POST['cli_email_pedi'])." <br/>";
	echo "Complementar: ".print_r($_POST['txt_area_observacao'])." <br/>";
	*/
	

if(isset($_POST['sele_servico']) && isset($_POST['sele_orcamento']) && isset($_POST['txt_data']) && isset($_POST['sele_estado']) && isset($_POST['sele_cidade']) && isset($_POST['txt_area_local']) && isset($_POST['txt_cel_cli']) && (isset($_POST['txt_email_cli']))  ){
	
	$email_cli = $_POST['txt_email_cli'];
	
	echo " servico: ".$_POST['sele_servico']." <br/>orcamento: ".$_POST['sele_orcamento'];
	echo "<br/>data: ".$_POST['txt_data']."<br/>";
	echo " estado: ".$_POST['sele_estado']."<br/>";
	echo " cidade: ".$_POST['sele_cidade']."<br/>";
	echo " area local: ".$_POST['txt_cel_cli']."<br/>";
	echo " email: ".$_POST['txt_email_cli']."<br/>";
	
	
	if($email_cli != " "){
		$_GET['s'] = 'solicitar_foto';
	   require_once('../servicos/controller.php');
	}

}

  
   // echo "Nome Fotografo: ".$_POST['txt_nome_emp_foto']."<br/>";
  /*	echo "foto tel      : ".$_POST['txt_tel_foto']."<br/>";
		echo "foto cel      : ".$_POST['txt_cel_foto']."<br/>";
		echo "foto email.      : ".$_POST['txt_email_foto']."<br/>";
		echo "foto senha.      : ".$_POST['txt_senha_foto']."<br/>";
		echo "foto end         : ".$_POST['txt_end_foto']."<br/>";
		echo "foto num         : ".$_POST['txt_num_foto']."<br/>";
		echo "foto cep         : ".$_POST['txt_cep_foto']."<br/>";
		echo "foto bairro      : ".$_POST['txt_bairro_foto']."<br/>";
		echo "foto estado      : ".$_POST['sele_estado']."<br/>";
		echo "foto cidade      : ".$_POST['sele_cidade']."<br/>";
		echo "foto Pedido      : ".print_r($_POST['Pedido'])."<br/>";
		echo "foto Edicao      : ".print_r($_POST['Edicao'])."<br/>";
		echo "foto Filmagem    : ".print_r($_POST['Filmagem'])."<br/>";
		echo "foto rd_sele     : ".$_POST['tipo_foto']."<br/>"; 
	*/

$foto_ident = (isset($_POST['tipo_foto']))? $_POST['tipo_foto'] : " ";
if($foto_ident == 'cpf') { // fotografo físico
	if(isset($_POST["txt_nome_foto"]) && (isset($_POST["txt_tel_foto"]) || isset($_POST["txt_cel_foto"])) && 
		isset($_POST["txt_email_foto"]) && isset($_POST["txt_senha_foto"]) && isset($_POST["txt_end_foto"]) && 
		isset($_POST["txt_num_foto"]) && isset($_POST['sele_estado']) && isset($_POST['sele_cidade']) &&
		isset($_POST['Pedido']) && isset($_POST['Filmagem']) ) {

	/*echo "Nome Fotografo: ".$_POST['txt_nome_foto']."<br/>";
	echo "foto tel      : ".$_POST['txt_tel_foto']."<br/>";
	echo "foto cel      : ".$_POST['txt_cel_foto']."<br/>";
	echo "foto email.      : ".$_POST['txt_email_foto']."<br/>";
	echo "foto senha.      : ".$_POST['txt_senha_foto']."<br/>";
	echo "foto end         : ".$_POST['txt_end_foto']."<br/>";
	echo "foto num         : ".$_POST['txt_num_foto']."<br/>";
	echo "foto cep         : ".$_POST['txt_cep_foto']."<br/>";
	echo "foto bairro      : ".$_POST['txt_bairro_foto']."<br/>";
	echo "foto estado      : ".$_POST['sele_estado']."<br/>";
	echo "foto cidade      : ".$_POST['sele_cidade']."<br/>";
	echo "foto rd_sele     : ".$_POST['rd_ident']."<br/>"; */


		//$_POST['txt_cpf_foto'] = "111.111.111.33";
		echo "<br/> Entrou no rd_ident_cpf<br/>";
		echo "<br/> teste de cpf no post: ".$_POST['txt_cpf_foto']."<br/>";


		
		$_GET['f'] = 'cad_foto';
		require_once('../login_foto/controller.php');

	}

}else if(isset($_POST['tipo_foto']) == 'cnpj'){ // fotografo Jurídico
	if(isset($_POST["txt_nome_emp_foto"]) && (isset($_POST["txt_tel_foto"]) || isset($_POST["txt_cel_foto"])) && 
		isset($_POST["txt_email_foto"]) && isset($_POST["txt_senha_foto"]) && isset($_POST["txt_end_foto"]) && 
		isset($_POST["txt_num_foto"]) && isset($_POST['sele_estado']) && isset($_POST['sele_cidade']) &&
		isset($_POST['Pedido']) && isset($_POST['Filmagem'])  ) {

		$_POST['txt_cnpj_foto'] = "112.333.444/233.444-23";
		echo "<br/> Entrou no rd_ident_cnpj<br/>";
		echo "<br/> teste de cpf no post: ".$_POST['txt_cnpj_foto']."<br/>";

		$_GET['f'] = 'cad_foto';
		require_once('../login_foto/controller.php');
	}
}else{
	echo "por favor selecione se você é fotografo físico ou Jurídico";
}


if(isset($_GET['em'])){
	$_GET['p'] = "ativa_cli";
	require_once('../login/controller.php');
}

if(isset($_GET['em_foto']) && $_GET['in']){
	$_GET['em'] = $_GET['em_foto'];
	$_GET['f'] = 'ativa_foto';
	require_once('../login_foto/controller.php');
}

/*else{
	echo "Erro em algum post <br/>";
	echo "Pedido : ".print_r($_POST['Pedido'])." <br/>";
	echo "Orçamento: ".print_r($_POST['Orcamento'])." <br/>";
	echo "Filmagem: ".print_r($_POST['Filmagem'])." <br/>";
	echo "Data:  ".print_r($_POST['txt_data'])." <br/>";
	echo "Hora:  ".print_r($_POST['txt_hora'])." <br/>";
	echo "Estado: ".print_r($_POST['sele_estado'])." <br/>";
	echo "cidade: ".print_r($_POST['sele_cidade'])." <br/>";
	echo "Estado: ".print_r($_POST['txt_endereco'])." <br/>";
	echo "Numero: ".print_r($_POST['txt_numero'])." <br/>";
	echo "Cliente email: ".print_r($_POST['cli_email_pedi'])." <br/>";
	echo "Complementar: ".print_r($_POST['txt_area_observacao'])." <br/>";
} */
