<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.1.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "fotografo-minha-conta.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Fotógrafo-Minha Conta</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=66908463"/>
  <link rel="stylesheet" type="text/css" href="css/fotografo-minha-conta.css?crc=3894560915" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_fotografo-minha-conta.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4177069693"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_fotografo-minha-conta.css?crc=4092267591" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/source-sans-pro:n4:default;nunito:n7,n4,n3:default.js" type="text/javascript">\x3C/script>');
</script>
    <!--custom head HTML-->
  <script type="text/javascript">    window.smartlook||(function(d) {    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);    })(document);    smartlook('init', '0a2d43c71b419af12271db7fb0c0f9eceff2d612');</script><script type="text/javascript" src="_js/jquery-1.12.4.min.js"></script>         <script type="text/javascript" src="_js/maskedinput.js"></script>             <script src="_js/datapicker/jquery.ui.timepicker.js" type="text/javascript"></script>         <script type="text/javascript" src="_js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>         <script src="_js/maskedinput.js" type="text/javascript"></script>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css"/>         <link rel="stylesheet" href="_js/datapicker/jquery.ui.timepicker.css"/><style type="text/css">input[type='radio'] {    -webkit-appearance: radio;    -webkit-border-radius: 0;  }  input[type='checkbox']{    -webkit-appearance: checkbox;    -webkit-border-radius: 0;  }</style>
<?php  include('head_pages/head_conta_foto.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        
       
        var foto_email = $('#foto_email').val();
        var foto_senha = $('#foto_senha').val();
        var foto_ident = $('#foto_ident').val();

        $('#bp_infinity').css('margin-top','-1.1%');

        if ((foto_email != " " && foto_senha != " " && foto_ident != " ")) {
            $('#u11522').show();
            $('#u292004-4-bw').hide();
            $('#u292003-4').hide();

            /* perfil imagem topo */         

            $('#u231736').css("background","transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != ''){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>')  no-repeat center center / contain");
            $('#u231736').css('background-size','100% 100%');
            $('#u231736').css({                  
                  'background-clip': 'padding-box',
                  'background-size': 'cover',
                  'background-position': 'center'
            });

            

            /* perfil sair topo */
            

            /* boas vindas topo */
            var link_sair = 
            $('#u330134-8').children().remove('p'); 
              $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'> Sair</a> </p> ");

            $('#u56594-5').children().remove();  
            $('#u56594-5').attr('href', 'fotografo-minha-conta.php');
            $('#u56594-5').append('<p>MINHA CONTA</p>');


              /* barra filtro foto */
             

            $('#u56593-5').children().remove();
            $('#u56593-5').attr('href', 'filtro.php');
            $('#u56593-5').append('<p>LISTA DE PEDIDOS</p>');            


            if (foto_email != " ") {

                $('#u350754-11').children().remove(); 
                  var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PERFIL</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro02' href='historico.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>HISTÓRICO</a></p> ";
                $('#u350754-11').append(link_foto);


                $('#u28732').css("background", "transparent url('<?php if($val_foto_ident == "
                    " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != '' ){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>')  no-repeat center center / contain");
                $('#u28732').css('background-size', '100% 100%'); 

                 $('#u28732').css("background","transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != ' '){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>')  no-repeat center center / contain");
                      $('#u28732').css('background-size','100% 100%');
                $('#u28732').css({                  
                  'background-clip': 'padding-box',
                  'background-size': 'cover',
                  'background-position': 'center'
                });


                /* nome */
                $('#u28559-4').children().remove();
                $('#u28559-4').append('<p><?= $cli_nome ?></p>'); 

                $('#u36508').children().remove();
                $('#u36508').append('<p><?= $cli_nome ?> </p>');

                $('#u231739-4').children().remove();
                $('#u231739-4').append('<p><?= $cli_nome ?></p>');

                /* celular */

                $('#tel_foto').append('<?= $cli_tel ?>');
                $('#u36514').children().remove();
                $('#u36514').append('<p><?= $cli_tel ?></p>');


                $('#u36512').children().remove();
                $('#u36512').append('<p><?= $cli_cel ?></p>');
                $('#cel_foto').append('<?= $cli_cel ?>');

                $('#u36545').children().remove();
                $('#u36545').append('<?= $cli_email ?>');

                $('#u231783').children().remove();
                $('#u231783').append("<?= $cli_email ?>");
                

                $('#endereco_foto').append('<?= $cli_end ?>');
                $('#u36525').children().remove();
                $('#u36525').append('<?= $cli_end ?>');


                $('#numero_foto').append('<?= $cli_num ?>');
                $('#u36527').children().remove();
                $('#u36527').append('<p><?= $cli_num ?> </p>');

                $('#estado_foto').append('<?= $cli_estado ?>');
                $('#u36522').children().remove();
                $('#u36522').append('<p><?= $cli_estado ?></p>');

                $('#cidade_foto').append('<?= $cli_cidade ?>');
                $('#u36537').children().remove();
                $('#u36537').append('<p> <?= $cli_cidade ?> </p>');

                if(foto_ident == 'FF'){
                  $('#u36523').children().remove();
                  $('#u36523').append("<?= $cli_emp ?>");

                  $('#u231794').children().remove();
                  $('#u231794').append("<?= $cli_emp ?>");
                  

                              

                  $('#u95120-4').children().remove();
                  $('#u95120-4').append('<p>PESSOA FÍSICA:</p>');

                  $('#u231799-4').children().remove();
                  $('#u231799-4').append('<p>PESSOA FÍSICA:</p>')

                  $('#u36498').children().remove();
                  $('#u36498').append('<p><?= $cli_cpf ?> </p>');
                  $('#cpf_foto').append('<?= isset($cli_cpf)? $cli_cpf : " " ?>');
                  $('#nome_foto').append('<?= $cli_nome ?>');

                  $('#cpf_foto02').append('<?= isset($cli_cpf)? $cli_cpf : " " ?>');
                  $('#nome_foto02').append('<?= $cli_nome ?>');

                }else if(foto_ident == 'FJ'){
                  $('#u36539').hide();
                  $('#u36529-4').hide();
                  $('#nome_foto').hide();

                  $('#cpf_foto').append('<?= isset($cli_cnpj)? $cli_cnpj : " "  ?>');
                  $('#u36497-4').children().remove();
                  $('#u36497-4').append('<p>CNPJ</p>');
                  $('#nome_empresa').append('<?= $cli_nome ?>');

                  $('#cpf_foto02').append('<?= isset($cli_cnpj)? $cli_cnpj : " "  ?>');
                  $('#u36497-4').children().remove();
                  $('#u36497-4').append('<p>CNPJ</p>');
                  $('#nome_empresa02').append('<?= $cli_nome ?>');
                }


                $('#u28563-8').children().remove();
                $('#u28563-8').append('<?= $cli_comentario ?>');

                $('#u231740-8').children().remove();
                $('#u231740-8').append('<?= $cli_comentario ?>');



                $('#u231800-35').children().remove();
                     var inserirString = "";

                      var especi_array = <?php echo json_encode($especi_array); ?>

                      for(var i=1; i< especi_array.length; i++){
                        
                       /* inserirString = "<p> <span id='u46897-7'></span> <span id='u46918' class='actAsInlineDiv normal_text'>   <span id='u46919' class='actAsDiv clearfix excludeFromNormalFlow'> <span id='u46921' class='actAsDiv grpelem'></span>  <span id='u46920-4' class='actAsDiv clearfix grpelem' data-muse-type='txt_frame' data-muse-uid='U46920'> <span class='actAsPara'>"+especi_array[i]+"</span> </span> </span> </span> <span></span> </p>"; */

                        inserirString = "<p><span id='u231800-4'></span><span class='actAsInlineDiv normal_text' id='u231831'><!-- content --><span class='actAsDiv clearfix excludeFromNormalFlow' id='u231832'><span class='actAsDiv grpelem' id='u231834'><span class='actAsDiv clearfix grpelem' id='u231833-4' data-muse-uid='U231833' data-muse-type='txt_frame'><!-- content --><span class='actAsPara'>"+especi_array[i]+"</span></span><!-- /m_editable --></span></span><span></span></p>"

                        $('#u231800-35').append(inserirString);
                      } 

                      

                      $('#u46897-30').children().remove();
                     var inserirString = "";

                      var especi_array = <?php echo json_encode($especi_array); ?>

                      for(var i=1; i< especi_array.length; i++){
                        //alert(especi_array[i]);
                        inserirString = "<p> <span id='u46897-7'></span> <span id='u46918' class='actAsInlineDiv normal_text'>   <span id='u46919' class='actAsDiv clearfix excludeFromNormalFlow'> <span id='u46921' class='actAsDiv grpelem'></span>  <span id='u46920-4' class='actAsDiv clearfix grpelem' data-muse-type='txt_frame' data-muse-uid='U46920'> <span class='actAsPara'>"+especi_array[i]+"</span> </span> </span> </span> <span></span> </p>";
                        $('#u46897-30').append(inserirString);
                      }



                  /* Parte dos Ultimos contatos */

                  /* CEP */
                  $('#u36517').children().remove();
                  $('#u36517').append("<?= isset($cli_cep)? $cli_cep : ' ' ?>");

                  $('#u231786').children().remove();
                  $('#u231786').append("<?= isset($cli_cep)? $cli_cep : ' ' ?>");

                  /* Servicos */
                  $('#u28816-4').children().remove();
                  $('#u28816-4').append('<?= isset($ulti_servico)? $ulti_servico : ' ' ?>');

                  $('#u231760-4').children().remove();
                  $('#u231760-4').append('<?= isset($ulti_servico)? $ulti_servico : ' ' ?>');


                  /* Nome */
                  $('#u28814-4').children().remove();
                  $('#u28814-4').append('<?= isset($ulti_nome)? $ulti_nome : ' ' ?>');


                  $('#u231758-4').children().remove();
                  $('#u231758-4').append('<?= isset($ulti_nome)? $ulti_nome : ' ' ?>');

                  /* Email */
                  $('#u28822-4').children().remove();
                  $('#u28822-4').append('<?= isset($ulti_email)? $ulti_email : ' ' ?>');

                  $('#u231757-4').children().remove();
                  $('#u231757-4').append('<?= isset($ulti_email)? $ulti_email : ' ' ?>');

                  /* Celular */
                  $('#u28818-4').children().remove();
                  $('#u28818-4').append('<?= isset($ulti_cel)? $ulti_cel : ' ' ?>');

                  $('#u231754-4').children().remove();
                  $('#u231754-4').append('<?= isset($ulti_cel)? $ulti_cel : ' ' ?>');

                  /* Telefone */
                  $('#u28813-4').children().remove();
                  $('#u28813-4').append('<?= isset($ulti_tel)? $ulti_tel : ' ' ?>');

                  $('#u231753-4').children().remove();
                  $('#u231753-4').append('<?= isset($ulti_tel)? $ulti_tel : ' ' ?>');


            }
        } else {
            $('#u11522').hide();
            $('#u292004-4-bw').show();  
            $('#u292003-4').show();            
        }

       
        $('#perf_top_sair').click(function() {
            if (foto_ident == " ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?p=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FF") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FJ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        alert('Funcionou! ' + res);
                        location.reload();
                    }
                });
            }
        });

        $('#perf_top_sair02').click(function() {
            if (foto_ident == " ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?p=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FF") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FJ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        alert('Funcionou! ' + res);
                        location.reload();
                    }
                });
            }
        });


    });
</script>
 </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1025"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu330134-8"><!-- group -->
     <div class="browser_width shared_content" id="u330134-8-bw" data-content-guid="u330134-8-bw_content">
      <div class="clearfix" id="u330134-8"><!-- content -->
       <p><span id="u330134">OLÁ NOME DO CLIENTE </span><span id="u330134-2"> </span><span id="u330134-3"><span class="actAsInlineDiv normal_text" id="u330175"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u330176"><!-- simple frame --></span></span></span><span id="u330134-4">&nbsp; </span><span id="u330134-5">Sair</span></p>
      </div>
     </div>
     <div class="browser_width shared_content" id="u350754-11-bw" data-content-guid="u350754-11-bw_content">
      <div class="clearfix" id="u350754-11"><!-- content -->
       <p><span id="u350754">OLÁ NOME FOTÓGRAFO</span><span id="u350754-2"> </span> <span id="u350754-4"><span class="actAsInlineDiv normal_text" id="u350763"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350764"><!-- simple frame --></span></span></span><span id="u350754-5">&nbsp; Créditos: Ilimitados&nbsp; </span><span id="u350754-6"><span class="actAsInlineDiv normal_text" id="u350761"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350762"><!-- simple frame --></span></span></span><span id="u350754-7">&nbsp; </span><span id="u350754-8">Sair</span></p>
      </div>
     </div>
     <div class="browser_width shared_content" id="u292003-4-bw" data-content-guid="u292003-4-bw_content">
      <a class="nonblock nontext clearfix" id="u292003-4" href="http://macromia.com.br/sou-fotografo.php"><!-- content --><p><span id="u292003">QUERO FOTOGRAFAR</span></p></a>
     </div>
     <div class="browser_width shared_content" id="u292004-4-bw" data-content-guid="u292004-4-bw_content">
      <a class="nonblock nontext clearfix" id="u292004-4" href="http://macromia.com.br/solicitar-fotografo.php"><!-- content --><p><span id="u292004">QUERO CONTRATAR</span></p></a>
     </div>
     <div id="u56894-wrapper">
      <div id="u56894" class="shared_content" data-content-guid="u56894_content"><!-- simple frame --></div>
     </div>
    </div>
    <div class="clearfix grpelem" id="pu231734"><!-- column -->
     <div class="browser_width colelem" id="u231734-bw">
      <div class="museBGSize" id="u231734"><!-- column -->
       <div class="clearfix" id="u231734_align_to_page">
        <div class="museBGSize rounded-corners colelem" id="u231736"><!-- simple frame --></div>
        <div class="clearfix colelem" id="pu231738"><!-- group -->
         <div class="gradient grpelem" id="u231738"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U231739-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u231739-4" data-muse-uid="U231739" data-muse-type="txt_frame"><!-- content -->
          <p>BEM-VINDO</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <div class="browser_width colelem" id="u231737-bw">
      <div id="u231737"><!-- group -->
       <div class="clearfix" id="u231737_align_to_page">
        <div class="grpelem" id="u231840"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U231746-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u231746-4" data-muse-uid="U231746" data-muse-type="txt_frame"><!-- content -->
         <p>CONTATO PROFISSIONAL</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U231839-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u231839-4" data-muse-uid="U231839" data-muse-type="txt_frame"><!-- content -->
         <p>SOBRE VOCÊ</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="pu231735"><!-- column -->
     <div class="clearfix colelem" id="u231735"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U231761-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
      <a class="nonblock nontext rounded-corners clearfix grpelem" id="u231761-4" href="http://macromia.com.br/fotografo-editar.php" data-muse-uid="U231761" data-muse-type="txt_frame"><!-- content --><p>EDITAR MINHA CONTA</p></a>
      <!-- /m_editable -->
     </div>
     <div class="browser_width colelem" id="u231744-bw">
      <div id="u231744"><!-- group -->
       <div class="clearfix" id="u231744_align_to_page">
        <div class="clearfix grpelem" id="u231748"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U231749-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u231749-4" data-muse-uid="U231749" data-muse-type="txt_frame"><!-- content -->
          <p>SERVIÇOS</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="grpelem" id="u231745"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U231747-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u231747-4" data-muse-uid="U231747" data-muse-type="txt_frame"><!-- content -->
         <p>PORTFÓLIO</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem" id="u231732"><!-- simple frame --></div>
    <div class="grpelem" id="u231743"><!-- simple frame --></div>
    <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div id="u56895-wrapper">
     <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="clearfix grpelem" id="u231835"><!-- column -->
     <div class="clip_frame colelem" id="u231837"><!-- svg -->
      <img class="svg temp_no_img_src" id="u231838" data-orig-src="images/technical-support.svg?crc=3976652051" width="140" height="140" alt="" data-mu-svgfallback="images/technical-support_poster_.png?crc=523767169" src="images/blank.gif?crc=4208392903"/>
     </div>
     <!-- m_editable region-id="editable-static-tag-U231836-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix colelem" id="u231836-4" data-muse-uid="U231836" data-muse-type="txt_frame"><!-- content -->
      <p>EM BREVE ESTA OPÇÃO ESTARÁ DISPONÍVEL</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem" id="u231762"><!-- group -->
     <div class="clearfix grpelem" id="u231763"><!-- column -->
      <div class="colelem" id="u231784"><!-- custom html -->
       
<form method="POST" action="login/index.php?r=login_foto&f=view_cad_foto" id="frm_logar">
      </div>
      <div class="clearfix colelem" id="pu231782-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U231782-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231782-4" data-muse-uid="U231782" data-muse-type="txt_frame"><!-- content -->
        <p>NOME</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231795-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231795-4" data-muse-uid="U231795" data-muse-type="txt_frame"><!-- content -->
        <p>NOME DA EMPRESA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu231775"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u231775"><!-- group -->
        <div class="grpelem" id="u231778"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="nome_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231764"><!-- group -->
        <div class="grpelem" id="u231794"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="nome_empresa"></p> 
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="pu231781-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U231781-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231781-4" data-muse-uid="U231781" data-muse-type="txt_frame"><!-- content -->
        <p>TELEFONE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231767-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231767-4" data-muse-uid="U231767" data-muse-type="txt_frame"><!-- content -->
        <p>CELULAR</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231777-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231777-4" data-muse-uid="U231777" data-muse-type="txt_frame"><!-- content -->
        <p>EMAIL</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu231766"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u231766"><!-- group -->
        <div class="grpelem" id="u231793"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="tel_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231780"><!-- group -->
        <div class="grpelem" id="u231791"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cel_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231765"><!-- group -->
        <div class="grpelem" id="u231783"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="email_foto"></p> 
        </div>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U231772-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u231772-4" data-muse-uid="U231772" data-muse-type="txt_frame"><!-- content -->
       <p>ENDEREÇO</p>
      </div>
      <!-- /m_editable -->
      <div class="rounded-corners clearfix colelem" id="u231771"><!-- group -->
       <div class="grpelem" id="u231768"><!-- custom html -->
        <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="endereco_foto"></p> 
       </div>
      </div>
      <div class="clearfix colelem" id="pu231776-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U231776-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231776-4" data-muse-uid="U231776" data-muse-type="txt_frame"><!-- content -->
        <p>CEP</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231788-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231788-4" data-muse-uid="U231788" data-muse-type="txt_frame"><!-- content -->
        <p>ESTADO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231790-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231790-4" data-muse-uid="U231790" data-muse-type="txt_frame"><!-- content -->
        <p>CIDADE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U231770-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u231770-4" data-muse-uid="U231770" data-muse-type="txt_frame"><!-- content -->
        <p>NÚMERO</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu231785"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u231785"><!-- group -->
        <div class="grpelem" id="u231786"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cep_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231787"><!-- group -->
        <div class="grpelem" id="u231769"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="estado_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231792"><!-- group -->
        <div class="grpelem" id="u231773"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cidade_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u231774"><!-- group -->
        <div class="grpelem" id="u231789"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="numero_foto"></p> 
        </div>
       </div>
      </div>
      <div class="colelem" id="u231779"><!-- custom html -->
       </form>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u231796"><!-- group -->
      <div class="grpelem" id="u231798"><!-- custom html -->
       <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cpf_foto"></p> 
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U231797-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u231797-4" data-muse-uid="U231797" data-muse-type="txt_frame"><!-- content -->
      <p>CPF</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U231799-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u231799-4" data-muse-uid="U231799" data-muse-type="txt_frame"><!-- content -->
      <p>PESSOA TAL</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="grpelem" id="u231733"><!-- simple frame --></div>
    <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
    <!-- m_editable region-id="editable-static-tag-U231740-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem" id="u231740-8" data-muse-uid="U231740" data-muse-type="txt_frame"><!-- content -->
     <p><span class="actAsDiv normal_text" id="u231741"><!-- content --><span class="actAsDiv size_fixed" id="u231742"><!-- custom html --><script type="text/javascript">!function(t){var e,o,d=document.getElementById("u231742"),i=d.parentNode.parentNode;for(d.style.display="none";i.tagName.toLowerCase().indexOf("div")<0&&!i.getAttribute("id")&&i!=document.body;)i=i.parentNode;e=t.getComputedStyle?t.getComputedStyle(i).minHeight:i.currentStyle.minHeight,o=Math.round(i.offsetHeight-parseInt(e)),d.setAttribute("data-parentuid","#"+i.getAttribute("id")),i.style.height=e,i.style.overflow="auto"}(window);</script></span></span> This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
     <p>except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
     <p>except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
    </div>
    <!-- /m_editable -->
    <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    <div class="verticalspacer" data-offset-top="1351" data-content-above-spacer="1351" data-content-below-spacer="169"></div>
    <div class="clearfix grpelem" id="pu231800-35"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U231800-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u231800-35" data-muse-uid="U231800" data-muse-type="txt_frame"><!-- content -->
      <p><span class="actAsDiv normal_text" id="u231825"><!-- content --><span class="actAsDiv size_fixed" id="u231826"><!-- custom html --><script type="text/javascript">!function(t){var e,o,d=document.getElementById("u231826"),i=d.parentNode.parentNode;for(d.style.display="none";i.tagName.toLowerCase().indexOf("div")<0&&!i.getAttribute("id")&&i!=document.body;)i=i.parentNode;e=t.getComputedStyle?t.getComputedStyle(i).minHeight:i.currentStyle.minHeight,o=Math.round(i.offsetHeight-parseInt(e)),d.setAttribute("data-parentuid","#"+i.getAttribute("id")),i.style.height=e,i.style.overflow="auto"}(window);</script></span></span><span></span></p>
      <p>&nbsp;</p>
      <p><span id="u231800-4">​</span><span class="actAsInlineDiv normal_text" id="u231831"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231832"><!-- group --><span class="actAsDiv grpelem" id="u231834"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231833-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231833-4" data-muse-uid="U231833" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Casamento</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-7">​</span><span class="actAsInlineDiv normal_text" id="u231801"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231802"><!-- group --><span class="actAsDiv grpelem" id="u231803"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231804-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231804-4" data-muse-uid="U231804" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Festa de Aniversário</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-10">​</span><span class="actAsInlineDiv normal_text" id="u231821"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231822"><!-- group --><span class="actAsDiv grpelem" id="u231823"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231824-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231824-4" data-muse-uid="U231824" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Eventos Sociais</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-13">​</span><span class="actAsInlineDiv normal_text" id="u231817"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231818"><!-- group --><span class="actAsDiv grpelem" id="u231820"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231819-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231819-4" data-muse-uid="U231819" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Festas Infantis</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-16">​</span><span class="actAsInlineDiv normal_text" id="u231805"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231806"><!-- group --><span class="actAsDiv grpelem" id="u231807"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231808-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231808-4" data-muse-uid="U231808" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Infantil</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-19">​</span><span class="actAsInlineDiv normal_text" id="u231809"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231810"><!-- group --><span class="actAsDiv grpelem" id="u231812"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231811-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231811-4" data-muse-uid="U231811" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Gestante</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-22">​</span><span class="actAsInlineDiv normal_text" id="u231827"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231828"><!-- group --><span class="actAsDiv grpelem" id="u231830"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231829-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231829-4" data-muse-uid="U231829" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Casal</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u231800-25">​</span><span class="actAsInlineDiv normal_text" id="u231813"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u231814"><!-- group --><span class="actAsDiv grpelem" id="u231815"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U231816-BP_infinity" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u231816-4" data-muse-uid="U231816" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Banda</span></span><!-- /m_editable --></span></span><span></span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <div class="browser_width grpelem shared_content" id="u454361-bw" data-content-guid="u454361-bw_content">
      <div id="u454361"><!-- column -->
       <div class="clearfix" id="u454361_align_to_page">
        <div class="colelem shared_content" id="u330085" data-content-guid="u330085_content"><!-- custom html -->
         <input type="hidden" value="<?= (isset($_GET['errAut']))? $_GET['errAut'] : ' '; ?>" id="val_warnnig" />
  <input type="hidden" value="<?= $val_email ?>" id="cli_email" />
  <input type="hidden" value="<?= $val_senha ?>" id="cli_senha" />
  <input type="hidden" value="<?= $val_foto_email ?>" id="foto_email" />     
  <input type="hidden" value="<?= $val_foto_senha ?>" id="foto_senha" />
  <input type="hidden" value="<?= $val_foto_ident ?>" id="foto_ident" />
        </div>
        <div class="colelem shared_content" id="u37776" data-content-guid="u37776_content"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem shared_content" id="u279000-4-bw" data-content-guid="u279000-4-bw_content">
      <a class="nonblock nontext clearfix shared_content" id="u279000-4" href="http://mazy.com.br/" data-content-guid="u279000-4_content"><!-- content --><p>(11) 3742-0262 | © MACROMIA. DESENVOLVIDO POR AGÊNCIA MAZY</p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-min-width="769" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="ppu292007-4"><!-- group -->
     <div class="clearfix grpelem" id="pu292007-4"><!-- group -->
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292007-4_content"><!-- placeholder node --></span>
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292008-4_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem shared_content" id="u28568-bw" data-content-guid="u28568-bw_content">
     <div class="museBGSize" id="u28568"><!-- column -->
      <div class="clearfix" id="u28568_align_to_page">
       <div class="museBGSize rounded-corners colelem" id="u28732"><!-- simple frame --></div>
       <div class="clearfix colelem" id="pu28569"><!-- group -->
        <div class="gradient grpelem" id="u28569"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U28559-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u28559-4" data-muse-uid="U28559" data-muse-type="txt_frame"><!-- content -->
         <p>BEM-VINDO</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <div class="browser_width colelem shared_content" id="u28567-bw" data-content-guid="u28567-bw_content">
     <div id="u28567"><!-- group -->
      <div class="clearfix" id="u28567_align_to_page">
       <!-- m_editable region-id="editable-static-tag-U28566-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u28566-4" data-muse-uid="U28566" data-muse-type="txt_frame"><!-- content -->
        <p>CONTATO PROFISSIONAL</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
    </div>
    <div class="clearfix colelem shared_content" id="u95123" data-content-guid="u95123_content"><!-- group -->
     <div class="clearfix grpelem" id="u36481"><!-- column -->
      <div class="colelem shared_content" id="u36520" data-content-guid="u36520_content"><!-- custom html -->
       
<form method="POST" action="login/index.php?r=login_foto&f=view_cad_foto" id="frm_logar">
      </div>
      <div class="clearfix colelem" id="pu36529-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U36529-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36529-4" data-muse-uid="U36529" data-muse-type="txt_frame" data-content-guid="u36529-4_content"><!-- content -->
        <p>NOME</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36513-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36513-4" data-muse-uid="U36513" data-muse-type="txt_frame" data-content-guid="u36513-4_content"><!-- content -->
        <p>NOME DA EMPRESA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu36539"><!-- group -->
       <div class="rounded-corners clearfix grpelem shared_content" id="u36539" data-content-guid="u36539_content"><!-- group -->
        <div class="grpelem" id="u36508"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="nome_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36528" data-content-guid="u36528_content"><!-- group -->
        <div class="grpelem" id="u36523"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="nome_empresa"></p> 
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="pu36544-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U36544-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36544-4" data-muse-uid="U36544" data-muse-type="txt_frame" data-content-guid="u36544-4_content"><!-- content -->
        <p>TELEFONE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36504-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36504-4" data-muse-uid="U36504" data-muse-type="txt_frame" data-content-guid="u36504-4_content"><!-- content -->
        <p>CELULAR</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36510-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36510-4" data-muse-uid="U36510" data-muse-type="txt_frame" data-content-guid="u36510-4_content"><!-- content -->
        <p>EMAIL</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu36526"><!-- group -->
       <div class="rounded-corners clearfix grpelem shared_content" id="u36526" data-content-guid="u36526_content"><!-- group -->
        <div class="grpelem" id="u36514"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="tel_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36521" data-content-guid="u36521_content"><!-- group -->
        <div class="grpelem" id="u36512"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cel_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36532" data-content-guid="u36532_content"><!-- group -->
        <div class="grpelem" id="u36545"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="email_foto"></p> 
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="pu36497-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U36497-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36497-4" data-muse-uid="U36497" data-muse-type="txt_frame" data-content-guid="u36497-4_content"><!-- content -->
        <p>CPF</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36509-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36509-4" data-muse-uid="U36509" data-muse-type="txt_frame" data-content-guid="u36509-4_content"><!-- content -->
        <p>ENDEREÇO</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu95120-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U95120-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u95120-4" data-muse-uid="U95120" data-muse-type="txt_frame" data-content-guid="u95120-4_content"><!-- content -->
        <p>PESSOA TAL</p>
       </div>
       <!-- /m_editable -->
       <div class="rounded-corners clearfix grpelem shared_content" id="u36496" data-content-guid="u36496_content"><!-- group -->
        <div class="grpelem" id="u36498"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cpf_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36506" data-content-guid="u36506_content"><!-- group -->
        <div class="grpelem" id="u36525"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="endereco_foto"></p> 
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="pu36503-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U36503-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36503-4" data-muse-uid="U36503" data-muse-type="txt_frame" data-content-guid="u36503-4_content"><!-- content -->
        <p>CEP</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36543-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36543-4" data-muse-uid="U36543" data-muse-type="txt_frame" data-content-guid="u36543-4_content"><!-- content -->
        <p>ESTADO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36511-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36511-4" data-muse-uid="U36511" data-muse-type="txt_frame" data-content-guid="u36511-4_content"><!-- content -->
        <p>CIDADE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U36507-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u36507-4" data-muse-uid="U36507" data-muse-type="txt_frame" data-content-guid="u36507-4_content"><!-- content -->
        <p>NÚMERO</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu36531"><!-- group -->
       <div class="rounded-corners clearfix grpelem shared_content" id="u36531" data-content-guid="u36531_content"><!-- group -->
        <div class="grpelem" id="u36517"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cep_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36542" data-content-guid="u36542_content"><!-- group -->
        <div class="grpelem" id="u36522"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="estado_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36530" data-content-guid="u36530_content"><!-- group -->
        <div class="grpelem" id="u36537"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="cidade_foto"></p> 
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem shared_content" id="u36538" data-content-guid="u36538_content"><!-- group -->
        <div class="grpelem" id="u36527"><!-- custom html -->
         <p style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" id="numero_foto"></p> 
        </div>
       </div>
      </div>
      <div class="colelem shared_content" id="u36518" data-content-guid="u36518_content"><!-- custom html -->
       </form>
      </div>
     </div>
    </div>
    <div class="browser_width colelem" id="u28552-bw">
     <div id="u28552"><!-- group -->
      <div class="clearfix" id="u28552_align_to_page">
       <div class="grpelem shared_content" id="u28561" data-content-guid="u28561_content"><!-- simple frame --></div>
       <!-- m_editable region-id="editable-static-tag-U28553-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem shared_content" id="u28553-4" data-muse-uid="U28553" data-muse-type="txt_frame" data-content-guid="u28553-4_content"><!-- content -->
        <p>PORTFÓLIO</p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
    </div>
    <div class="clearfix colelem" id="pu28555"><!-- group -->
     <div class="clearfix grpelem" id="u28555"><!-- column -->
      <div class="position_content" id="u28555_position_content">
       <!-- m_editable region-id="editable-static-tag-U32182-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
       <a class="nonblock nontext rounded-corners clearfix colelem shared_content" id="u32182-4" href="http://macromia.com.br/fotografo-editar.php" data-muse-uid="U32182" data-muse-type="txt_frame" data-content-guid="u32182-4_content"><!-- content --><p>EDITAR MINHA CONTA</p></a>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="u236174"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U28557-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u28557-4" data-muse-uid="U28557" data-muse-type="txt_frame" data-content-guid="u28557-4_content"><!-- content -->
         <p>SERVIÇOS</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U46897-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem shared_content" id="u46897-30" data-muse-uid="U46897" data-muse-type="txt_frame" data-content-guid="u46897-30_content"><!-- content -->
      <p><span class="actAsDiv normal_text" id="u46938"><!-- content --><span class="actAsDiv size_fixed" id="u46939"><!-- custom html --><script type="text/javascript">!function(t){var e,o,d=document.getElementById("u46939"),i=d.parentNode.parentNode;for(d.style.display="none";i.tagName.toLowerCase().indexOf("div")<0&&!i.getAttribute("id")&&i!=document.body;)i=i.parentNode;e=t.getComputedStyle?t.getComputedStyle(i).minHeight:i.currentStyle.minHeight,o=Math.round(i.offsetHeight-parseInt(e)),d.setAttribute("data-parentuid","#"+i.getAttribute("id")),i.style.height=e,i.style.overflow="auto"}(window);</script></span></span><span></span></p>
      <p>&nbsp;</p>
      <p><span id="u46897-4">​</span><span class="actAsInlineDiv normal_text" id="u46910"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46911"><!-- group --><span class="actAsDiv grpelem" id="u46913"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46912-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46912-4" data-muse-uid="U46912" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Casamento</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-7">​</span><span class="actAsInlineDiv normal_text" id="u46918"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46919"><!-- group --><span class="actAsDiv grpelem" id="u46921"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46920-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46920-4" data-muse-uid="U46920" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Festa de Aniversário</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-10">​</span><span class="actAsInlineDiv normal_text" id="u46926"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46927"><!-- group --><span class="actAsDiv grpelem" id="u46929"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46928-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46928-4" data-muse-uid="U46928" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Eventos Sociais</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-13">​</span><span class="actAsInlineDiv normal_text" id="u46922"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46923"><!-- group --><span class="actAsDiv grpelem" id="u46924"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46925-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46925-4" data-muse-uid="U46925" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Festas Infantis</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-16">​</span><span class="actAsInlineDiv normal_text" id="u46960"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46961"><!-- group --><span class="actAsDiv grpelem" id="u46963"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46962-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46962-4" data-muse-uid="U46962" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Infantil</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-19">​</span><span class="actAsInlineDiv normal_text" id="u46902"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46903"><!-- group --><span class="actAsDiv grpelem" id="u46904"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46905-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46905-4" data-muse-uid="U46905" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Gestante</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-22">​</span><span class="actAsInlineDiv normal_text" id="u46948"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46949"><!-- group --><span class="actAsDiv grpelem" id="u46951"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46950-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46950-4" data-muse-uid="U46950" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Casal</span></span><!-- /m_editable --></span></span><span></span></p>
      <p><span id="u46897-25">​</span><span class="actAsInlineDiv normal_text" id="u46934"><!-- content --><span class="actAsDiv clearfix excludeFromNormalFlow" id="u46935"><!-- group --><span class="actAsDiv grpelem" id="u46936"><!-- simple frame --></span><!-- m_editable region-id="editable-static-tag-U46937-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" --><span class="actAsDiv clearfix grpelem" id="u46937-4" data-muse-uid="U46937" data-muse-type="txt_frame"><!-- content --><span class="actAsPara">Banda</span></span><!-- /m_editable --></span></span><span></span></p>
      <p>&nbsp;</p>
     </div>
     <!-- /m_editable -->
     <div class="clearfix grpelem shared_content" id="u49994" data-content-guid="u49994_content"><!-- column -->
      <div class="clip_frame colelem shared_content" id="u49996" data-content-guid="u49996_content"><!-- svg -->
       <img class="svg temp_no_img_src" id="u49997" data-orig-src="images/technical-support.svg?crc=3976652051" width="140" height="140" alt="" data-mu-svgfallback="images/technical-support_poster_.png?crc=523767169" src="images/blank.gif?crc=4208392903"/>
      </div>
      <!-- m_editable region-id="editable-static-tag-U49995-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u49995-4" data-muse-uid="U49995" data-muse-type="txt_frame" data-content-guid="u49995-4_content"><!-- content -->
       <p>EM BREVE ESTA OPÇÃO ESTARÁ DISPONÍVEL</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U28570-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u28570-4" data-muse-uid="U28570" data-muse-type="txt_frame" data-content-guid="u28570-4_content"><!-- content -->
       <p>SOBRE VOCÊ</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="grpelem shared_content" id="u230269" data-content-guid="u230269_content"><!-- simple frame --></div>
     <!-- m_editable region-id="editable-static-tag-U28563-BP_1024" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem shared_content" id="u28563-8" data-muse-uid="U28563" data-muse-type="txt_frame" data-content-guid="u28563-8_content"><!-- content -->
      <p><span class="actAsDiv normal_text" id="u230255"><!-- content --><span class="actAsDiv size_fixed" id="u230256"><!-- custom html --><script type="text/javascript">!function(t){var e,o,d=document.getElementById("u230256"),i=d.parentNode.parentNode;for(d.style.display="none";i.tagName.toLowerCase().indexOf("div")<0&&!i.getAttribute("id")&&i!=document.body;)i=i.parentNode;e=t.getComputedStyle?t.getComputedStyle(i).minHeight:i.currentStyle.minHeight,o=Math.round(i.offsetHeight-parseInt(e)),d.setAttribute("data-parentuid","#"+i.getAttribute("id")),i.style.height=e,i.style.overflow="auto"}(window);</script></span></span> This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
      <p>except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
      <p>except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.except you'll want to keep that little arrow in the corner.This is a simple scrollable text frame. You can modify this text frame like any other text frame in Muse, except you'll want to keep that little arrow in the corner.</p>
     </div>
     <!-- /m_editable -->
    </div>
    <div class="verticalspacer" data-offset-top="1496" data-content-above-spacer="1496" data-content-below-spacer="171"></div>
    <div class="clearfix colelem" id="pu454361"><!-- group -->
     <span class="browser_width grpelem placeholder" data-placeholder-for="u454361-bw_content"><!-- placeholder node --></span>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u279000-4-bw_content"><!-- placeholder node --></span>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
     <div class="clearfix colelem" id="ppu330533-4"><!-- group -->
      <div class="clearfix grpelem" id="pu330533-4"><!-- group -->
       <a class="nonblock nontext clearfix" id="u330533-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
       <a class="nonblock nontext clearfix" id="u330534-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
      </div>
      <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
      <div class="browser_width temp_no_id" data-orig-id="u56894-bw">
       <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
      </div>
      <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28568-bw_content"><!-- placeholder node --></span>
     <div class="browser_width colelem temp_no_id" data-orig-id="u28552-bw">
      <div class="temp_no_id" data-orig-id="u28552"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u28552_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U28553-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u28553-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <span class="clearfix colelem placeholder" data-placeholder-for="u95123_content"><!-- placeholder node --></span>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28567-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="u49994"><!-- column -->
      <span class="clip_frame colelem placeholder" data-placeholder-for="u49996_content"><!-- placeholder node --></span>
      <!-- m_editable region-id="editable-static-tag-U49995-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix colelem placeholder" data-placeholder-for="u49995-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <div class="browser_width colelem" id="u230269-bw">
      <div class="temp_no_id" data-orig-id="u230269"><!-- group -->
       <div class="clearfix" id="u230269_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U28570-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u28570-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U28563-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u28563-8_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="browser_width colelem" id="u236174-bw">
      <div class="temp_no_id" data-orig-id="u236174"><!-- group -->
       <div class="clearfix" id="u236174_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U28557-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u28557-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="u28555"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U32182-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
      <span class="nonblock nontext rounded-corners clearfix grpelem placeholder" data-placeholder-for="u32182-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U46897-BP_768" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u46897-30_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <div class="verticalspacer" data-offset-top="1794" data-content-above-spacer="1784" data-content-below-spacer="195"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
      <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
        <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_480" data-min-width="321" data-max-width="480"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content temp_no_id" data-orig-id="page_position_content">
     <div class="clearfix colelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
      <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
      <div class="browser_width shared_content" id="u56725-bw" data-content-guid="u56725-bw_content">
       <div id="u56725"><!-- simple frame --></div>
      </div>
      <div class="clearfix shared_content" id="u283018-4" data-content-guid="u283018-4_content"><!-- content -->
       <p>MENU</p>
      </div>
      <div class="browser_width" id="accordionu56589-bw">
       <ul class="AccordionWidget clearfix" id="accordionu56589"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem100" id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u56598-5"><!-- content --><p id="u56598-3" class="shared_content" data-content-guid="u56598-3_content"><span id="u56598">​</span><span class="actAsInlineDiv normal_text" id="u56599"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u56600"><!-- content --></span></span></p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u56591"><!-- column --><a class="nonblock nontext clearfix colelem shared_content" id="u56593-4" href="http://macromia.com.br/solicitar-fotografo.php" data-content-guid="u56593-4_content"><!-- content --><p>QUERO CONTRATAR</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u56594-5" href="http://macromia.com.br/sou-fotografo.php" data-content-guid="u56594-5_content"><!-- content --><p>&nbsp;</p><p>SOU FOTÓGRAFO</p></a><div class="colelem shared_content" id="u56592" data-content-guid="u56592_content"><!-- simple frame --></div><a class="nonblock nontext clearfix colelem shared_content" id="u56597-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u56597-4_content"><!-- content --><p>COMO FUNCIONA?</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u187692-4" href="http://macromia.com.br/contato.php" data-content-guid="u187692-4_content"><!-- content --><p>FALE CONOSCO</p></a></div></li>
       </ul>
      </div>
      <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28568-bw_content"><!-- placeholder node --></span>
     <div class="browser_width colelem temp_no_id" data-orig-id="u28552-bw">
      <div class="temp_no_id" data-orig-id="u28552"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u28552_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U28553-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u28553-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="u95123"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="u36481"><!-- column -->
       <span class="colelem placeholder" data-placeholder-for="u36520_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36529-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36529-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36539_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36513-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36513-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36528_content"><!-- placeholder node --></span>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36544-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U36544-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36544-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36504-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36504-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36526"><!-- group -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36526_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36521_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36510-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36510-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36532_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36497-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36497-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu95120-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U95120-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u95120-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36496_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36509-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36509-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36506_content"><!-- placeholder node --></span>
       <div class="clearfix colelem" id="pu36507-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U36507-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36507-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36503-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36503-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36543-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36543-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu36538"><!-- group -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36538_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36531_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36542_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36511-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36511-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36530_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u36518_content"><!-- placeholder node --></span>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28567-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem" id="pu230269"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u230269-bw">
       <span class="placeholder" data-placeholder-for="u230269_content"><!-- placeholder node --></span>
      </div>
      <div class="clearfix grpelem temp_no_id" data-orig-id="u49994"><!-- column -->
       <div class="position_content" id="u49994_position_content">
        <span class="clip_frame colelem placeholder" data-placeholder-for="u49996_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U49995-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u49995-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U28570-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u28570-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U28563-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u28563-8_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="browser_width colelem" id="u28561-bw">
      <span class="placeholder" data-placeholder-for="u28561_content"><!-- placeholder node --></span>
     </div>
     <div class="clearfix colelem shared_content" id="ppu32182-4" data-content-guid="ppu32182-4_content"><!-- group -->
      <div class="clearfix grpelem" id="pu32182-4"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U32182-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
       <span class="nonblock nontext rounded-corners clearfix colelem placeholder" data-placeholder-for="u32182-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U46897-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u46897-30_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
      </div>
      <div class="grpelem temp_no_id" data-orig-id="u28555"><!-- simple frame --></div>
      <div class="browser_width grpelem temp_no_id" data-orig-id="u236174-bw">
       <div class="temp_no_id" data-orig-id="u236174"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u236174_align_to_page">
         <!-- m_editable region-id="editable-static-tag-U28557-BP_480" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u28557-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="2423" data-content-above-spacer="2422" data-content-below-spacer="186"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
      <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
        <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content temp_no_id" data-orig-id="page_position_content">
     <div class="clearfix colelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
      <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
      <span class="browser_width placeholder" data-placeholder-for="u56725-bw_content"><!-- placeholder node --></span>
      <span class="clearfix placeholder" data-placeholder-for="u283018-4_content"><!-- placeholder node --></span>
      <div class="browser_width temp_no_id" data-orig-id="accordionu56589-bw">
       <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu56589"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem100 temp_no_id" data-orig-id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100 temp_no_id" data-orig-id="u56598-5"><!-- content --><span class="placeholder" data-placeholder-for="u56598-3_content"><!-- placeholder node --></span></div><div class="AccordionPanelContent disn clearfix colelem100 temp_no_id" data-orig-id="u56591"><!-- column --><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56593-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56594-5_content"><!-- placeholder node --></span><span class="colelem placeholder" data-placeholder-for="u56592_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56597-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u187692-4_content"><!-- placeholder node --></span></div></li>
       </ul>
      </div>
      <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28568-bw_content"><!-- placeholder node --></span>
     <div class="browser_width colelem temp_no_id" data-orig-id="u28552-bw">
      <div class="temp_no_id" data-orig-id="u28552"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u28552_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U28553-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u28553-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="u95123"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="u36481"><!-- column -->
       <span class="colelem placeholder" data-placeholder-for="u36520_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36529-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36529-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36539_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36513-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36513-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36528_content"><!-- placeholder node --></span>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36544-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U36544-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36544-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36504-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36504-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36526"><!-- group -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36526_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36521_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36510-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36510-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36532_content"><!-- placeholder node --></span>
       <!-- m_editable region-id="editable-static-tag-U36497-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36497-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu95120-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U95120-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u95120-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36496_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36509-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36509-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36506_content"><!-- placeholder node --></span>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36507-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U36507-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36507-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36503-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36503-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U36543-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u36543-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu36538"><!-- group -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36538_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36531_content"><!-- placeholder node --></span>
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u36542_content"><!-- placeholder node --></span>
       </div>
       <!-- m_editable region-id="editable-static-tag-U36511-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <span class="clearfix colelem placeholder" data-placeholder-for="u36511-4_content"><!-- placeholder node --></span>
       <!-- /m_editable -->
       <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u36530_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u36518_content"><!-- placeholder node --></span>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u28567-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem" id="pu28563-8"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U28563-BP_320" template="fotografo-minha-conta.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u28563-8_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u230269-bw">
       <span class="placeholder" data-placeholder-for="u230269_content"><!-- placeholder node --></span>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u49994_content"><!-- placeholder node --></span>
     </div>
     <span class="colelem placeholder" data-placeholder-for="u28561_content"><!-- placeholder node --></span>
     <span class="clearfix colelem placeholder" data-placeholder-for="ppu32182-4_content"><!-- placeholder node --></span>
     <div class="verticalspacer" data-offset-top="2621" data-content-above-spacer="2620" data-content-below-spacer="185"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
      <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
        <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch","webpro","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#accordionu56589', ['#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu56589 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4159430777" type="text/javascript" async data-main="scripts/museconfig.js?crc=4179431180" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  <script type="text/javascript">!function(t){var s=t(t("#u231742").data("parentuid")).css("height",""),h=s.height();s.css("height",s.css("min-height")),s.css("margin-bottom","+="+(h-parseInt(s.css("height"))))}(jQuery);</script><script type="text/javascript">!function(t){var s=t(t("#u231826").data("parentuid")).css("height",""),h=s.height();s.css("height",s.css("min-height")),s.css("margin-bottom","+="+(h-parseInt(s.css("height"))))}(jQuery);</script><script type="text/javascript">!function(t){var s=t(t("#u46939").data("parentuid")).css("height",""),h=s.height();s.css("height",s.css("min-height")),s.css("margin-bottom","+="+(h-parseInt(s.css("height"))))}(jQuery);</script><script type="text/javascript">!function(t){var s=t(t("#u230256").data("parentuid")).css("height",""),h=s.height();s.css("height",s.css("min-height")),s.css("margin-bottom","+="+(h-parseInt(s.css("height"))))}(jQuery);</script>
   </body>
</html>
