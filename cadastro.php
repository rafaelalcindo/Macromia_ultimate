<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="Cadastre-se no Macromia para Receber Gratuitamente Até 5 Orçamentos de Fotografia Profissional."/>
  <meta name="keywords" content="Macromia, Fotógrafo de Casamento, Decoração de Casamento, Fotografia Profissional, Fotografia, Fotógrafo, Estúdio de Fotografia, Studio de Fotógrafia, Fotógrafo de Evento, Newborn, Bolo Fake, "/>
  <meta name="generator" content="2015.2.1.352"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "cadastro.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Cadastre-se e Economize | Macromia</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3771790150"/>
  <link rel="stylesheet" type="text/css" href="css/master_b-mestre.css?crc=3826133859"/>
  <link rel="stylesheet" type="text/css" href="css/cadastro.css?crc=55648481" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_cadastro.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_b-mestre.css?crc=4176712896"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_cadastro.css?crc=4236774657" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/nunito:n7,n4,n3:default.js" type="text/javascript">\x3C/script>');
</script>
    <!--custom head HTML-->
  <script type="text/javascript">    window.smartlook||(function(d) {    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);    })(document);    smartlook('init', '0a2d43c71b419af12271db7fb0c0f9eceff2d612');</script><script type="text/javascript" src="_js/jquery-1.12.4.min.js"></script>         <script type="text/javascript" src="_js/maskedinput.js"></script>             <script src="_js/datapicker/jquery.ui.timepicker.js" type="text/javascript"></script>         <script type="text/javascript" src="_js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>         <script src="_js/maskedinput.js" type="text/javascript"></script>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css"/>         <link rel="stylesheet" href="_js/datapicker/jquery.ui.timepicker.css"/><style type="text/css">input[type='radio'] {    -webkit-appearance: radio;    -webkit-border-radius: 0;  }  input[type='checkbox']{    -webkit-appearance: checkbox;    -webkit-border-radius: 0;  }</style>
<?php
session_start();
require('connection.php');
$conexao = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno($conexao)) {
    echo "Falha ao conectar com banco";
}
?>    

<?php
(isset($_SESSION['cli_email'])) ? $val_email = $_SESSION['cli_email'] : $val_email = " ";
(isset($_SESSION['cli_nome'])) ? $val_nome = $_SESSION['cli_nome'] : $val_nome = " ";
(isset($_SESSION['cli_senha'])) ? $val_senha = $_SESSION['cli_senha'] : $val_senha = " ";

(isset($_GET['errAut']))? $Aut_error = "Email ou sua Senha incorreto!" : $Aut_error = " ";
(isset($_GET['erCadEmail']))? $Aut_errorCad = "Email já cadastrado no sistema!" : $Aut_errorCad = " ";
(isset($_GET['errAtivacao']))? $Aut_ativacao = "Conta não confirmada, verifique seu email!" : $Aut_ativacao = " ";

$cli_nome = " ";
    $cli_img  = " ";
    $cli_dir  = " ";  

?>     <?php
(isset($_SESSION['foto_email'])) ? $val_foto_email = $_SESSION['foto_email'] : $val_foto_email = " ";
(isset($_SESSION['foto_senha'])) ? $val_foto_senha = $_SESSION['foto_senha'] : $val_foto_senha = " ";
(isset($_SESSION['ident'])) ? $val_foto_ident = $_SESSION['ident'] : $val_foto_ident = " ";
if ($val_email != " " && $val_senha != " ") {
    $sql       = sprintf("select cli_nome, cli_email, cli_senha, cli_img_perf_dir, cli_ativo, cli_dir from cliente where cli_email = '%s' and cli_senha = '%s'", $val_email, $val_senha);
    $resultado = mysqli_query($conexao, $sql);
    while ($row = mysqli_fetch_array($resultado)) {
        $cli_nome = $row['cli_nome'];
        $cli_img  = $row['cli_img_perf_dir'];
        $cli_dir  = $row['cli_dir'];
    }
    header("Location: index.php");
} else if (($val_foto_email != " " && $val_foto_senha != " ") || ($val_email != " " && $val_senha != " ")) {
    header("Location: index.php");
}
?>


<script type="text/javascript">      

  
  $(document).ready(function() {

      var cli_email = $('#cli_email').val();
      var cli_senha = $('#cli_senha').val();

      var erro_aut  = "<?php echo $Aut_error; ?>";
      var erro_cad  = "<?php echo $Aut_errorCad; ?>";
      var erro_conf = "<?php echo $Aut_ativacao; ?>";
      
      if(erro_aut != " "){
        $('#u458591-4').children().remove();
        $('#u458591-4').append("<p>"+erro_aut+"</p>");
      }else if(erro_conf != " "){
        $('#u458591-4').children().remove();
        $('#u458591-4').append("<p>"+erro_conf+"</p>");
      }else{
        $('#u458591-4').children().remove();
        $('#u458591-4').append('<p>    -   </p>');
      }



      $('#u458591-4').hide();

      if(erro_cad != " "){
         $('#u458591-4').show();
         $('#u458591-4').children().remove();
         $('#u458591-4').append("<p>"+erro_cad+"</p>");
      }else{
         $('#u458591-4').hide();
      }


      if ((cli_email != " " && cli_senha != " ")) {
            $('#u11522').show();
            $('#u292004-4-bw').hide();
            $('#u292003-4').hide();

        /* perfil imagem topo */ 
       

        /* perfil sair topo */


        /* boas vindas topo */
            

            $('#u56594-5').children().remove();
            $('#u56594-5').attr('href', 'cliente-minha-conta.php');
            $('#u56594-5').append('<p>MINHA CONTA</p>');


          if (cli_email != " ") {
              

             $('#u330134-8').children().remove('p'); 
              $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'>Sair</a> </p> ");

              $('#u350754-11').children().remove(); 
              var link_foto = "<p style='color: #ffe587;'><a  id='cli_conta' href='cliente-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a>   <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span>   <a  id='cli_soli' href='solicitar-fotografo.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>SOLICITAR FOTOGRAFO</a></p>";
               $('#u350754-11').append(link_foto);
          }
      } else {
        $('#u11522').hide();
        $('#u292004-4-bw').show();  
        $('#u292003-4').show();
      }


      $('#perf_top_sair').click(function() {
          if (cli_email != " ") {
              $.ajax({
                  type: 'POST',
                  url: 'seleciona_tipo_cli.php?p=logout',
                  dataType: 'text',
                  success: function(res) { /*alert('Funcionou!!!'+res); */
                      location.reload();
                  }
              }); /* fim do ajax cliente */
          }
      });
  });

 </script>    




 <script type="text/javascript">         

 jQuery(function($){             $("#tel").mask("(99)9999-9999");             $("#cel").mask("(99)99999-9999");          });     
 </script>     


 <script type="text/javascript">    

 $(document).ready(function() {
     $('#data').datepicker({
         dateFormat: 'dd/mm/yy',
         dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
         dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
         dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
         monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
         monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
         nextText: "Próximo",
         prevText: "Anterior",
         minDate: '0d'
     });
 });

 </script>


 <script type="text/javascript"> 

  $(document).ready(function(e) {
      $('#hora').timepicker({
          hourText: 'Hora',
          minuteText: 'Minuto',
          amPmText: ['AM', 'PM'],
          closeButtonText: 'Fechar',
          nowButtonText: 'Agora',
          deselectButtonText: 'Limpar'
      });
  });

 </script>


 <script type="text/javascript"> 

 $(function() {
      $('#estado').change(function() {
          var id = $(this).val();
          $.ajax({
              type: "POST",
              url: "servicos/lista_cidade.php?id=" + id,
              dataType: "text",
              success: function(res) {
                  $('#cidade').children('.cidades').remove();
                  $('#cidade').append(res);
                  $('#cidade').removeAttr('disabled').focus();
              }
          });
      });
      $('#frm_cad_cli').submit(function(event) {
          var cli_email = $('#cad_email_cli').val();
          var cli_senha = $('#cad_senha_cli').val();
          var cli_senhaConf = $('#cad_confsenha_cli').val();
          var cli_nome = $('#cad_nome_cli').val();
          var cli_tel = $('#tel').val();
          var cli_cel = $('#cel').val();

          var erro_msg = " ";

          if (cli_email != " " && cli_senha != " " && cli_senhaConf != " " && cli_nome != " ") {
              if (!ValidarEmail(cli_email)) {
                  erro_msg = "Por favor digite seu email corretamente!";
                  MsgErrorCadCli(erro_msg);
                  event.preventDefault();
              }else if (cli_senha != cli_senhaConf) {
                  erro_msg = "Por favor digite a senha e a confirmação de senha iguais!";
                  MsgErrorCadCli(erro_msg);
                  event.preventDefault();
              }else if (!(cli_tel != '' || cli_cel != '')) {
                  erro_msg = "Por favor digite o número de telefone ou celular!";
                  MsgErrorCadCli(erro_msg);
                  event.preventDefault();
              }
          } else {
              erro_msg = "Preencha os campos obrigatórios!";
              MsgErrorCadCli(erro_msg);
          }
      });


      $('#frm_logar').submit(function(event){
          var logar_email = $("input[name='txt_email']").val();
          var logar_senha = $("input[name='txt_senha']").val();

          var erro_msg = " ";

          if(logar_email != null && logar_senha != null){
            if(!ValidarEmail(logar_email)){
              erro_msg = "Por favor digite seu email corretamente!";
              MsgErrorLogaCli(erro_msg);
              event.preventDefault();
            }

          }else{
            erro_msg = "Digite seu Email e a sua Senha!";
            MsgErrorLogaCli(erro_msg);
            event.preventDefault();
          }

      });

      function ValidarEmail(email) {
          var emailCheck = email;
          var ExRegEmail = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/;
          if (!((emailCheck.match(ExRegEmail)) && (emailCheck != ""))) {
              /*alert('Email Inválido'); */
              return false;
          } else {
              return true;
          }
      }

      function MsgErrorCadCli(msg){
          $('#u458591-4').show();
          $('#u458591-4').children().remove();
          $('#u458591-4').append('<p>'+msg+'</p>');
      }

      function MsgErrorLogaCli(msg){
          $('#u424047-4').show();
          $('#u424047-4').children().remove();
          $('#u424047-4').append('<p>'+msg+'</p>');
      }


  });

  </script>


  <script type="text/javascript">  
$(function() {
    

    function ValidaData(data) {
        var dataCheck = data;
        var RegExPatternData = /^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])      [\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/;
        if (!((dataCheck.match(RegExPatternData)) && (dataCheck != ''))) {
            alert('Data Inválida');
            return false;
        } else {
            return true;
        }
    }

    function ValidaHora(hora) {
        horaCheck = hora;
        var RegExPatternHora = /^([0-1][0-9]|2[0-3]):[0-5][0-9]$/;
        if (!((horaCheck.match(RegExPatternHora)) && (horaCheck != ''))) {
            alert('Hora Inválida');
            return false;
        } else {
            return true;
        }
    }
});

  </script>





  <style type="text/css">  input[type='radio'] {    -webkit-appearance: radio;    -webkit-border-radius: 0;  }  input[type='checkbox']{    -webkit-appearance: checkbox;    -webkit-border-radius: 0;  }    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {        border: 1px solid #ccc;    color: #084E43;    font-weight: bold;  }  .ui-widget-header{    background: #009B82;    border: 1px solid #00816C;  }    .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {    background: #009B82;    border: 1px solid #3AEACF;    color: #FFE587;    font-weight: bold;  }    .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {    background: #BCFFF4;    border: 1px solid #3284D0;    color: #CB9F00;    font-weight: bold;  }  #estado{    /*background-color: transparent; */    -webkit-appearance: none;    -moz-appearance:none ;    text-indent: 1px;    text-overflow: "";    border: none;     width:100%;    background-image: url('imagem/downArrow.png');    background-repeat: no-repeat;    background-position: right center;    -webkit-border-radius: 5px;    -moz-border-radius: 5px;    border-radius:      5px;  }  #cidade{    -webkit-appearance: none;    -moz-appearance: none;    text-indent: 1px;    text-overflow: "";    border: none;    width: 90%;    background-image: url('imagem/downArrow.png');    background-repeat: no-repeat;    background-position: right center;    -webkit-border-radius: 5px;    -moz-border-radius:    5px;    border-radius:         5px;  }  #cidade:disabled{    background-color: #FFFFFF;  }  input:required{    background-color: #FFFFFF;  }  input[type="email"]:invalid{    box-shadow: none;  }
</style>
 </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1025"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- column -->
    <div class="clearfix colelem" id="pu458292"><!-- group -->
     <div id="u458292-wrapper">
      <div id="u458292" class="shared_content" data-content-guid="u458292_content"><!-- simple frame --></div>
     </div>
     <a class="nonblock nontext museBGSize shared_content" id="u458000" href="http://macromia.com.br/index.php" data-content-guid="u458000_content"><!-- simple frame --></a>
     <div id="u458311-wrapper">
      <a class="nonblock nontext museBGSize shared_content" id="u458311" href="http://macromia.com.br/index.php" data-content-guid="u458311_content"><!-- simple frame --></a>
     </div>
     <a class="nonblock nontext clearfix shared_content" id="u458297-4" href="http://macromia.com.br/contato.php" data-content-guid="u458297-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    </div>
    <!-- m_editable region-id="editable-static-tag-U459066-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u459066-4" data-muse-uid="U459066" data-muse-type="txt_frame" data-content-guid="u459066-4_content"><!-- content -->
     <h1>FOTOGRAFIA PROFISSIONAL</h1>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459065-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u459065-4" data-muse-uid="U459065" data-muse-type="txt_frame" data-content-guid="u459065-4_content"><!-- content -->
     <p>PASSO 1</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459067-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u459067-4" data-muse-uid="U459067" data-muse-type="txt_frame" data-content-guid="u459067-4_content"><!-- content -->
     <p>CADASTRE-SE E RECEBA ATÉ 5 ORÇAMENTOS DE FOTOGRAFIA PROFISSIONAL!</p>
    </div>
    <!-- /m_editable -->
    <div class="accordion_wrapper colelem" id="accordionu458573wrapper"><!-- vertical box -->
     <ul class="AccordionWidget clearfix" id="accordionu458573"><!-- column -->
      <li class="AccordionPanel borderbox clearfix colelem" id="u458574"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U458575-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u458575-4" data-muse-uid="U458575" data-muse-type="txt_frame"><!-- content --><p class="shared_content" data-content-guid="u458575-4_0_content">NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u458576"><!-- group --><div class="clearfix grpelem shared_content" id="u458577" data-content-guid="u458577_content"><!-- group --><div class="clearfix grpelem" id="u458578"><!-- group --><div class="clearfix grpelem" id="u458579"><!-- group --><div class="rounded-corners grpelem" id="u458581"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_cli" >
</div><!-- m_editable region-id="editable-static-tag-U458580-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u458580-4" data-muse-uid="U458580" data-muse-type="txt_frame"><!-- content --><p>CADASTRAR</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u458582"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>

</div></div><div class="clearfix grpelem" id="u458583"><!-- group --><div class="clearfix grpelem" id="u458584"><!-- column --><div class="clearfix colelem" id="pu458589-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U458589-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458589-4" data-muse-uid="U458589" data-muse-type="txt_frame"><!-- content --><p>NOME</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U458593-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458593-4" data-muse-uid="U458593" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu458595"><!-- group --><div class="rounded-corners grpelem" id="u458595"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u458596"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu458598-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U458598-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458598-4" data-muse-uid="U458598" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U458594-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458594-4" data-muse-uid="U458594" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu458588"><!-- group --><div class="rounded-corners grpelem" id="u458588"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u458597"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu458586-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U458586-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458586-4" data-muse-uid="U458586" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U458592-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u458592-4" data-muse-uid="U458592" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu458585"><!-- group --><div class="rounded-corners grpelem" id="u458585"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u458587"><!-- simple frame --></div></div><!-- m_editable region-id="editable-static-tag-U458590-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" --><a class="nonblock nontext clearfix colelem" id="u458590-4" href="http://macromia.com.br/termo-de-uso.php" target="_blank" data-muse-uid="U458590" data-muse-type="txt_frame"><!-- content --><p>Antes leia o termo de uso.</p></a><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U458591-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u458591-4" data-muse-uid="U458591" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div><div class="grpelem" id="u458603"><!-- custom html --><input type="text" id="cad_nome_cli" name="txt_nome_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u458599"><!-- custom html --><input type="text" id="tel" name="txt_tel_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u458604"><!-- custom html --><input type="text" id="cel" name="txt_cel_cli" style="background-color: transparent; bfont-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u458600"><!-- custom html --><input type="email" id="cad_email_cli" name="txt_email_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u458601"><!-- custom html --><input type="password" id="cad_senha_cli" name="txt_senha_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u458602"><!-- custom html --><input type="password" id="cad_confsenha_cli" name="txt_senhaconf_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div></div></div></div></li>
     </ul>
    </div>
    <div class="clearfix colelem shared_content" id="pu462339" data-content-guid="pu462339_content"><!-- group -->
     <div class="browser_width grpelem" id="u462339-bw">
      <div id="u462339"><!-- column -->
       <div class="clearfix" id="u462339_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U462342-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u462342-4" data-muse-uid="U462342" data-muse-type="txt_frame"><!-- content -->
         <h2>QUERO CONTRATAR</h2>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners colelem" id="u462343"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U462341-BP_infinity" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u462341-4" data-muse-uid="U462341" data-muse-type="txt_frame"><!-- content -->
         <p>Para Solicitar um Orçamento é muito simples e 100% Grátis. Basta se Cadastrar e Pronto! Você receberá até 5 propostas de orçamento de fotógrafos.</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u462340-bw">
      <div id="u462340"><!-- simple frame --></div>
     </div>
     <div class="clip_frame grpelem" id="u462344"><!-- svg -->
      <img class="svg temp_no_img_src" id="u462345" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="155" height="247" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=346926653" src="images/blank.gif?crc=4208392903"/>
     </div>
     <div class="clip_frame grpelem" id="u462346"><!-- svg -->
      <img class="svg temp_no_img_src" id="u462347" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="173" height="358" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=423625952" src="images/blank.gif?crc=4208392903"/>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="911" data-content-above-spacer="911" data-content-below-spacer="170"></div>
    <div class="clearfix colelem shared_content" id="pu457998" data-content-guid="pu457998_content"><!-- group -->
     <div class="browser_width grpelem" id="u457998-bw">
      <div id="u457998"><!-- column -->
       <div class="clearfix" id="u457998_align_to_page">
        <div class="colelem shared_content" id="u458288" data-content-guid="u458288_content"><!-- custom html -->
         <input type="hidden" value="<?= (isset($_GET['errAut']))? $_GET['errAut'] : ' '; ?>" id="val_warnnig" />
  <input type="hidden" value="<?= $val_email ?>" id="cli_email" />
  <input type="hidden" value="<?= $val_senha ?>" id="cli_senha" />
  <input type="hidden" value="<?= $val_foto_email ?>" id="foto_email" />     
  <input type="hidden" value="<?= $val_foto_senha ?>" id="foto_senha" />
  <input type="hidden" value="<?= $val_foto_ident ?>" id="foto_ident" />
        </div>
        <div class="museBGSize colelem shared_content" id="u458001" data-content-guid="u458001_content"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u457782-4-bw">
      <a class="nonblock nontext clearfix shared_content" id="u457782-4" href="http://mazy.com.br/" data-content-guid="u457782-4_content"><!-- content --><p>(11) 3742-0262 | © MACROMIA. DESENVOLVIDO POR AGÊNCIA MAZY</p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-min-width="769" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="pu458000"><!-- group -->
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458000_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u458292-bw">
      <span class="placeholder" data-placeholder-for="u458292_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458311_content"><!-- placeholder node --></span>
     <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u458297-4_content"><!-- placeholder node --></span>
    </div>
    <!-- m_editable region-id="editable-static-tag-U459066-BP_1024" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459066-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459065-BP_1024" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459065-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459067-BP_1024" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459067-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="accordion_wrapper colelem temp_no_id" data-orig-id="accordionu458573wrapper"><!-- vertical box -->
     <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu458573"><!-- column -->
      <li class="AccordionPanel borderbox clearfix colelem temp_no_id" data-orig-id="u458574"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U458575-BP_1024" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem temp_no_id" data-muse-uid="U458575" data-muse-type="txt_frame" data-orig-id="u458575-4"><!-- content --><span class="placeholder" data-placeholder-for="u458575-4_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem temp_no_id" data-orig-id="u458576"><!-- group --><span class="clearfix grpelem placeholder" data-placeholder-for="u458577_content"><!-- placeholder node --></span></div></li>
     </ul>
    </div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu462339_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="966" data-content-above-spacer="966" data-content-below-spacer="171"></div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu457998_content"><!-- placeholder node --></span>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="ppu458293-4"><!-- group -->
     <div class="clearfix grpelem" id="pu458293-4"><!-- group -->
      <a class="nonblock nontext clearfix" id="u458293-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
      <a class="nonblock nontext clearfix" id="u458312-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
     </div>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458000_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u458292-bw">
      <span class="placeholder" data-placeholder-for="u458292_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458311_content"><!-- placeholder node --></span>
    </div>
    <!-- m_editable region-id="editable-static-tag-U459066-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459066-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459065-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459065-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U459067-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u459067-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="accordion_wrapper colelem temp_no_id" data-orig-id="accordionu458573wrapper"><!-- vertical box -->
     <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu458573"><!-- column -->
      <li class="AccordionPanel borderbox clearfix colelem temp_no_id" data-orig-id="u458574"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U458575-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem temp_no_id" data-muse-uid="U458575" data-muse-type="txt_frame" data-orig-id="u458575-4"><!-- content --><span class="placeholder" data-placeholder-for="u458575-4_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem temp_no_id" data-orig-id="u458576"><!-- group --><span class="clearfix grpelem placeholder" data-placeholder-for="u458577_content"><!-- placeholder node --></span></div></li>
     </ul>
    </div>
    <div class="clearfix colelem" id="pu462508"><!-- group -->
     <div class="browser_width grpelem shared_content" id="u462508-bw" data-content-guid="u462508-bw_content">
      <div id="u462508"><!-- column -->
       <div class="clearfix" id="u462508_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U462511-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u462511-4" data-muse-uid="U462511" data-muse-type="txt_frame"><!-- content -->
         <p>PRECISO DE UM FOTÓGRAFO</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners colelem" id="u462512"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U462510-BP_768" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u462510-4" data-muse-uid="U462510" data-muse-type="txt_frame"><!-- content -->
         <p>Para Solicitar um Orçamento é muito simples e 100% Grátis. Basta se Cadastrar e Pronto! Você receberá até 5 propostas de orçamento de fotógrafos.</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width grpelem shared_content" id="u462509-bw" data-content-guid="u462509-bw_content">
      <div id="u462509"><!-- simple frame --></div>
     </div>
     <div class="clip_frame grpelem" id="u462513"><!-- svg -->
      <img class="svg temp_no_img_src" id="u462514" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="123" height="196" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=346926653" src="images/blank.gif?crc=4208392903"/>
     </div>
     <div class="clip_frame grpelem" id="u462515"><!-- svg -->
      <img class="svg temp_no_img_src" id="u462516" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="138" height="285" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=423625952" src="images/blank.gif?crc=4208392903"/>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1121" data-content-above-spacer="1121" data-content-below-spacer="186"></div>
    <div class="browser_width colelem temp_no_id" data-orig-id="u457998-bw">
     <div class="temp_no_id" data-orig-id="u457998"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u457998_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u458288_content"><!-- placeholder node --></span>
       <span class="museBGSize colelem placeholder" data-placeholder-for="u458001_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u457782-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_480" data-min-width="321" data-max-width="480"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
     <div class="clearfix colelem" id="pu458294"><!-- group -->
      <div class="browser_width shared_content" id="u458294-bw" data-content-guid="u458294-bw_content">
       <div id="u458294"><!-- simple frame --></div>
      </div>
      <div class="clearfix shared_content" id="u458310-4" data-content-guid="u458310-4_content"><!-- content -->
       <p>MENU</p>
      </div>
      <div class="browser_width" id="accordionu458299-bw">
       <ul class="AccordionWidget clearfix" id="accordionu458299"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem100" id="u458300"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u458301-5"><!-- content --><p id="u458301-3" class="shared_content" data-content-guid="u458301-3_content"><span id="u458301">​</span><span class="actAsInlineDiv normal_text" id="u458302"><!-- content --><span class="actAsDiv museBGSize excludeFromNormalFlow" id="u458303"><!-- content --></span></span></p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u458304"><!-- column --><a class="nonblock nontext clearfix colelem shared_content" id="u458305-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u458305-4_content"><!-- content --><p>COMO FUNCIONA?</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u458309-4" href="http://macromia.com.br/contato.php" data-content-guid="u458309-4_content"><!-- content --><p>FALE CONOSCO</p></a></div></li>
       </ul>
      </div>
      <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458311_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U459066-BP_480" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u459066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U459065-BP_480" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u459065-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U459067-BP_480" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u459067-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="accordion_wrapper colelem temp_no_id" data-orig-id="accordionu458573wrapper"><!-- vertical box -->
      <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu458573"><!-- column -->
       <li class="AccordionPanel borderbox clearfix colelem temp_no_id" data-orig-id="u458574"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U458575-BP_480" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem temp_no_id" data-muse-uid="U458575" data-muse-type="txt_frame" data-orig-id="u458575-4"><!-- content --><span class="placeholder" data-placeholder-for="u458575-4_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem temp_no_id" data-orig-id="u458576"><!-- group --><span class="clearfix grpelem placeholder" data-placeholder-for="u458577_content"><!-- placeholder node --></span></div></li>
      </ul>
     </div>
     <div class="clearfix colelem temp_no_id shared_content" data-orig-id="pu462508" data-content-guid="pu462508_content"><!-- group -->
      <span class="browser_width grpelem placeholder" data-placeholder-for="u462508-bw_content"><!-- placeholder node --></span>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u462509-bw_content"><!-- placeholder node --></span>
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u462513"><!-- svg -->
       <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="77" height="122" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=346926653" data-orig-id="u462514" src="images/blank.gif?crc=4208392903"/>
      </div>
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u462515"><!-- svg -->
       <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="86" height="178" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=423625952" data-orig-id="u462516" src="images/blank.gif?crc=4208392903"/>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="960" data-content-above-spacer="960" data-content-below-spacer="186"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u457998-bw">
      <div class="temp_no_id" data-orig-id="u457998"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u457998_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u458288_content"><!-- placeholder node --></span>
        <span class="museBGSize colelem placeholder" data-placeholder-for="u458001_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u457782-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content temp_no_id" data-orig-id="page_position_content">
     <div class="clearfix colelem temp_no_id" data-orig-id="pu458294"><!-- group -->
      <span class="browser_width placeholder" data-placeholder-for="u458294-bw_content"><!-- placeholder node --></span>
      <span class="clearfix placeholder" data-placeholder-for="u458310-4_content"><!-- placeholder node --></span>
      <div class="browser_width temp_no_id" data-orig-id="accordionu458299-bw">
       <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu458299"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem100 temp_no_id" data-orig-id="u458300"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100 temp_no_id" data-orig-id="u458301-5"><!-- content --><span class="placeholder" data-placeholder-for="u458301-3_content"><!-- placeholder node --></span></div><div class="AccordionPanelContent disn clearfix colelem100 temp_no_id" data-orig-id="u458304"><!-- column --><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u458305-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u458309-4_content"><!-- placeholder node --></span></div></li>
       </ul>
      </div>
      <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u458311_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U459066-BP_320" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u459066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="browser_width colelem" id="u459065-4-bw">
      <!-- m_editable region-id="editable-static-tag-U459065-BP_320" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix placeholder" data-placeholder-for="u459065-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <div class="browser_width colelem" id="u459067-4-bw">
      <!-- m_editable region-id="editable-static-tag-U459067-BP_320" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix placeholder" data-placeholder-for="u459067-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <div class="accordion_wrapper colelem temp_no_id" data-orig-id="accordionu458573wrapper"><!-- vertical box -->
      <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu458573"><!-- column -->
       <li class="AccordionPanel borderbox clearfix colelem temp_no_id" data-orig-id="u458574"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U458575-BP_320" template="cadastro.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem temp_no_id" data-muse-uid="U458575" data-muse-type="txt_frame" data-orig-id="u458575-4"><!-- content --><span class="placeholder" data-placeholder-for="u458575-4_0_content"><!-- placeholder node --></span></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem temp_no_id" data-orig-id="u458576"><!-- group --><span class="clearfix grpelem placeholder" data-placeholder-for="u458577_content"><!-- placeholder node --></span></div></li>
      </ul>
     </div>
     <span class="clearfix colelem placeholder" data-placeholder-for="pu462508_content"><!-- placeholder node --></span>
     <div class="verticalspacer" data-offset-top="945" data-content-above-spacer="945" data-content-below-spacer="185"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u457998-bw">
      <div class="temp_no_id" data-orig-id="u457998"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u457998_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u458288_content"><!-- placeholder node --></span>
        <span class="museBGSize colelem placeholder" data-placeholder-for="u458001_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u457782-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),i=0;i<f.length;i++)if("text/css"==f[i].type){var h=(f[i].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!h||!h[1]||!h[2])break;b[h[1]]=h[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(i=0;i<Muse.assets.required.length;){var h=Muse.assets.required[i],l=h.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(i,1),"undefined"!=typeof b[h]&&(k!=b[h]>>>24||l!=(b[h]&16777215))&&Muse.assets.outOfDate.push(h)):i++;f.className="version";break;case "js":k.match(/^jquery-[\d\.]+/gi)&&d&&d().jquery=="1.8.3"?Muse.assets.required.splice(i,1):i++;break;default:throw Error("Unsupported file type: "+
l);}}f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","webpro","musewpdisclosure","jquery.watch","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#accordionu458573', ['#bp_infinity', '#bp_1024', '#bp_768', '#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu458573 */
Muse.Utils.initWidget('#accordionu458299', ['#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu458299 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4108833657" type="text/javascript" async data-main="scripts/museconfig.js?crc=169177150" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
