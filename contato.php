<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="Entre em contato com o Macromia para tirar suas dúvida e deixar suas sugestões."/>
  <meta name="keywords" content="Macromia, Fotógrafo de Casamento, Decoração de Casamento, Fotografia Profissional, Fotografia, Fotógrafo, Estúdio de Fotografia, Studio de Fotógrafia, Fotógrafo de Evento, Newborn, Bolo Fake, "/>
  <meta name="generator" content="2017.0.1.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "contato.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Entre em Contato | Macromia</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=66908463"/>
  <link rel="stylesheet" type="text/css" href="css/contato.css?crc=3977980986" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_contato.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4177069693"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_contato.css?crc=4189715572" id="nomq_pagesheet"/>
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
<?php  include('head_pages/head_index.php'); ?>  

<script type="text/javascript">
    $(document).ready(function() {
        var cli_email = $('#cli_email').val();
        var cli_senha = $('#cli_senha').val();
        var foto_email = $('#foto_email').val();
        var foto_senha = $('#foto_senha').val();
        var foto_ident = $('#foto_ident').val();

        $('#bp_infinity').css('margin-top','-1.1%');

        if ((cli_email != " " && cli_senha != " ") || (foto_email != " " && foto_senha != " " && foto_ident != " ")) {
            $('#u11522').show();
            $('#u292004-4-bw').hide();
            $('#u292003-4').hide(); /* perfil imagem topo */
            $('#u11521').css("background", "transparent url('<?php if($val_foto_ident == "
                " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != '' ){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>') no-repeat scroll center center / contain");
            $('#u11521').css('background-size', '100% 100%'); /* perfil sair topo */ /* boas vindas topo */
            if (foto_email != " " && cli_email == " ") { /* barra minha conta foto */
                $('#u330134-8').children().remove('p');
                $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : "
                    " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'> Sair</a> </p> ");
                $('#u291970-5').children().remove();
                $('#u291970-5').attr('href', 'fotografo-minha-conta.php');
                $('#u291970-5').append('<p>MINHA CONTA</p>');
                $('#u56594-5').children().remove();
                $('#u56594-5').attr('href', 'fotografo-minha-conta.php');
                $('#u56594-5').append('<p>MINHA CONTA</p>'); /* barra filtro foto */
                $('#u56593-5').children().remove();
                $('#u56593-5').attr('href', 'filtro.php');
                $('#u56593-5').append('<p>LISTA DE PEDIDOS</p>'); /*Inserindo link para as paginas */


                $('#u350754-11').children().remove(); 
                  var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PERFIL</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro02' href='historico.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>HISTÓRICO</a></p> ";
                $('#u350754-11').append(link_foto);



            } else {
                $('#u56471-4').children().remove();
                $('#u56471-4').attr('href', 'cliente-minha-conta.php');
                $('#u56471-4').append('<p>MINHA CONTA</p>');
                $('#u56594-5').children().remove();
                $('#u56594-5').attr('href', 'cliente-minha-conta.php');
                $('#u56594-5').append('<p>MINHA CONTA</p>');
                $('#u330134-8').children().remove('p');
                $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : "
                    " ?> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'>Sair</a> </p> ");
                $('#u350754-11').children().remove();
                var link_foto = "<p style='color: #ffe587;'><a  id='cli_conta' href='cliente-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a>   <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span>   <a  id='cli_soli' href='solicitar-fotografo.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>SOLICITAR FOTÓGRAFO</a></p>";
                $('#u350754-11').append(link_foto);
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
                        location.reload();
                    }
                });
            }
        });
    });
</script>
  <!--HTML Widget code-->
    
<style>
#u212675 { font-size: 1px; line-height: 0px;}
</style>
  
<style>
#u95069 { font-size: 1px; line-height: 0px;}
</style>
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
    <div class="grpelem shared_content" id="u37798" data-content-guid="u37798_content"><!-- simple frame --></div>
    <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div class="clearfix grpelem" id="pu37710-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U37710-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37710-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37710" data-muse-type="txt_frame" data-content-guid="u37710-4_content"><!-- content --><p>CONTATO</p></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37810-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37810-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37810" data-muse-type="txt_frame" data-content-guid="u37810-4_content"><!-- content --><p>Telefone:</p></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37712-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37712-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37712" data-muse-type="txt_frame" data-content-guid="u37712-4_content"><!-- content --><p>11 3742.0262</p></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37801-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37801-6" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37801" data-muse-type="txt_frame" data-content-guid="u37801-6_content"><!-- content --><p>Horário de Atendimento:</p><p>Segunda a Sexta: 10hrs às 17hrs</p></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37813-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37813-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37813" data-muse-type="txt_frame" data-content-guid="u37813-4_content"><!-- content --><p>E-mail:</p></a>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37807-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37807-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37807" data-muse-type="txt_frame" data-content-guid="u37807-4_content"><!-- content --><p>contato@macromia.com.br</p></a>
     <!-- /m_editable -->
    </div>
    <div id="u56895-wrapper">
     <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="clearfix grpelem" id="pu37711-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U37711-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <a class="nonblock nontext clearfix colelem shared_content" id="u37711-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U37711" data-muse-type="txt_frame" data-content-guid="u37711-4_content"><!-- content --><p>DÚVIDAS?</p></a>
     <!-- /m_editable -->
     <form class="form-grp clearfix colelem" id="widgetu37714" method="post" enctype="multipart/form-data" action="scripts/form-u37714.php"><!-- none box -->
      <div class="fld-grp clearfix grpelem" id="widgetu37715" data-required="true"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37718-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u37718-4" data-muse-uid="U37718" data-muse-type="txt_frame" for="widgetu37715_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u37718-4_0_content">Nome:</span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u37717-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu37715_input" name="custom_U37715" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu37715_prompt" for="widgetu37715_input"><span class="actAsPara shared_content" data-content-guid="widgetu37715_prompt_0_content">Inserir nome</span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu37722" data-required="true" data-type="email"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37723-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u37723-4" data-muse-uid="U37723" data-muse-type="txt_frame" for="widgetu37722_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u37723-4_0_content">Email:</span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u37725-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu37722_input" name="Email" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu37722_prompt" for="widgetu37722_input"><span class="actAsPara shared_content" data-content-guid="widgetu37722_prompt_0_content">Inserir email</span></label></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U37726-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u37726-4" data-muse-uid="U37726" data-muse-type="txt_frame"><!-- content -->
       <p class="shared_content" data-content-guid="u37726-4_0_content">Enviando formulário…</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37720-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u37720-4" data-muse-uid="U37720" data-muse-type="txt_frame"><!-- content -->
       <p class="shared_content" data-content-guid="u37720-4_0_content">O servidor encontrou um erro.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37721-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem" id="u37721-4" data-muse-uid="U37721" data-muse-type="txt_frame"><!-- content -->
       <p class="shared_content" data-content-guid="u37721-4_0_content">Formulário recebido.</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37719-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u37719-4" data-muse-uid="U37719" data-muse-type="txt_frame" type="submit" value="Enviar" tabindex="4"><!-- content -->
       <div style="margin-top:-14px;height:14px;" class="shared_content" data-content-guid="u37719-4_0_content">
        <p>Enviar</p>
       </div>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem" id="widgetu37727" data-required="false"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37730-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u37730-4" data-muse-uid="U37730" data-muse-type="txt_frame" for="widgetu37727_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u37730-4_0_content">Mensagem:</span></label>
       <!-- /m_editable -->
       <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem" id="u37729-4"><!-- content --><textarea class="wrapped-input" id="widgetu37727_input" name="custom_U37727" tabindex="3"></textarea><label class="wrapped-input fld-prompt" id="widgetu37727_prompt" for="widgetu37727_input"><span class="actAsPara shared_content" data-content-guid="widgetu37727_prompt_0_content">Insira sua mensagem</span></label></span>
      </div>
     </form>
    </div>
    <!-- m_editable region-id="editable-static-tag-U394339-BP_infinity" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix grpelem shared_content" id="u394339-4" data-muse-uid="U394339" data-muse-type="txt_frame" data-content-guid="u394339-4_content"><!-- content -->
     <h1>FOTOGRAFIA PROFISSIONAL</h1>
    </div>
    <!-- /m_editable -->
    <div class="museBGSize grpelem shared_content" id="u238589" data-content-guid="u238589_content"><!-- simple frame --></div>
    <div class="clearfix grpelem shared_content" id="pu292007-4" data-content-guid="pu292007-4_content"><!-- group -->
     <a class="nonblock nontext clearfix" id="u292007-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
     <a class="nonblock nontext clearfix" id="u292008-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
    </div>
    <div class="verticalspacer" data-offset-top="770" data-content-above-spacer="770" data-content-below-spacer="170"></div>
    <div class="clearfix grpelem shared_content" id="pu454361" data-content-guid="pu454361_content"><!-- group -->
     <div class="browser_width grpelem" id="u454361-bw">
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
     <div class="browser_width grpelem" id="u279000-4-bw">
      <a class="nonblock nontext clearfix shared_content" id="u279000-4" href="http://mazy.com.br/" data-content-guid="u279000-4_content"><!-- content --><p>(11) 3742-0262 | © MACROMIA. DESENVOLVIDO POR AGÊNCIA MAZY</p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-min-width="769" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="ppu292007-4"><!-- group -->
     <span class="clearfix grpelem placeholder" data-placeholder-for="pu292007-4_content"><!-- placeholder node --></span>
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
    <!-- m_editable region-id="editable-static-tag-U394339-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u394339-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu37710-4"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U37710-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u37710-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U37711-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u37711-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix colelem" id="pu37810-4"><!-- group -->
     <!-- m_editable region-id="editable-static-tag-U37810-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix grpelem placeholder" data-placeholder-for="u37810-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <form class="form-grp clearfix grpelem temp_no_id" method="post" enctype="multipart/form-data" action="scripts/form-u37714.php" data-orig-id="widgetu37714"><!-- none box -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu37715"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37718-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U37718" data-muse-type="txt_frame" for="widgetu37715_input" data-orig-id="u37718-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u37718-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u37717-4"><!-- content --><input class="wrapped-input temp_no_id" type="text" spellcheck="false" name="custom_U37715" tabindex="5" data-orig-id="widgetu37715_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu37715_input" data-orig-id="widgetu37715_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu37715_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-type="email" data-orig-id="widgetu37722"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37723-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U37723" data-muse-type="txt_frame" for="widgetu37722_input" data-orig-id="u37723-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u37723-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u37725-4"><!-- content --><input class="wrapped-input temp_no_id" type="email" spellcheck="false" name="Email" tabindex="6" data-orig-id="widgetu37722_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu37722_input" data-orig-id="widgetu37722_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu37722_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U37726-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U37726" data-muse-type="txt_frame" data-orig-id="u37726-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u37726-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37720-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U37720" data-muse-type="txt_frame" data-orig-id="u37720-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u37720-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37721-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U37721" data-muse-type="txt_frame" data-orig-id="u37721-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u37721-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U37719-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" data-muse-uid="U37719" data-muse-type="txt_frame" type="submit" value="Enviar" tabindex="8" data-orig-id="u37719-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u37719-4_0_content"><!-- placeholder node --></span>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu37727"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U37730-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U37730" data-muse-type="txt_frame" for="widgetu37727_input" data-orig-id="u37730-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u37730-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u37729-4"><!-- content --><textarea class="wrapped-input temp_no_id" name="custom_U37727" tabindex="7" data-orig-id="widgetu37727_input"></textarea><label class="wrapped-input fld-prompt temp_no_id" for="widgetu37727_input" data-orig-id="widgetu37727_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu37727_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
     </form>
    </div>
    <!-- m_editable region-id="editable-static-tag-U37712-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u37712-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U37801-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u37801-6_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U37813-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u37813-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U37807-BP_1024" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u37807-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu37798"><!-- group -->
     <div class="browser_width grpelem" id="u37798-bw">
      <span class="placeholder" data-placeholder-for="u37798_content"><!-- placeholder node --></span>
     </div>
     <span class="museBGSize grpelem placeholder" data-placeholder-for="u238589_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer" data-offset-top="901" data-content-above-spacer="901" data-content-below-spacer="171"></div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu454361_content"><!-- placeholder node --></span>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
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
    <!-- m_editable region-id="editable-static-tag-U394339-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u394339-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238833-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238833-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238833" data-muse-type="txt_frame" data-content-guid="u238833-4_content"><!-- content --><p>CONTATO</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238836-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238836-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238836" data-muse-type="txt_frame" data-content-guid="u238836-4_content"><!-- content --><p>Telefone:</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238835-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238835-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238835" data-muse-type="txt_frame" data-content-guid="u238835-4_content"><!-- content --><p>11 3742.0262</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238839-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238839-6" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238839" data-muse-type="txt_frame" data-content-guid="u238839-6_content"><!-- content --><p id="u238839-2">Horário de Atendimento:</p><p id="u238839-4">Segunda a Sexta: 10hrs às 17hrs</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238838-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238838-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238838" data-muse-type="txt_frame" data-content-guid="u238838-4_content"><!-- content --><p>E-mail:</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238837-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238837-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238837" data-muse-type="txt_frame" data-content-guid="u238837-4_content"><!-- content --><p>contato@macromia.com.br</p></a>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U238834-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u238834-4" href="como-funciona.html" data-href="page:U415" data-muse-uid="U238834" data-muse-type="txt_frame" data-content-guid="u238834-4_content"><!-- content --><p>DÚVIDAS?</p></a>
    <!-- /m_editable -->
    <form class="form-grp clearfix colelem" id="widgetu238840" method="post" enctype="multipart/form-data" action="scripts/form-u238840.php"><!-- none box -->
     <div class="fld-grp clearfix grpelem" id="widgetu238853" data-required="true"><!-- none box -->
      <!-- m_editable region-id="editable-static-tag-U238855-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u238855-4" data-muse-uid="U238855" data-muse-type="txt_frame" for="widgetu238853_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u238855-4_0_content">Nome:</span></label>
      <!-- /m_editable -->
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u238854-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu238853_input" name="custom_U238853" tabindex="9"/><label class="wrapped-input fld-prompt" id="widgetu238853_prompt" for="widgetu238853_input"><span class="actAsPara shared_content" data-content-guid="widgetu238853_prompt_0_content">Inserir nome</span></label></span>
     </div>
     <div class="fld-grp clearfix grpelem" id="widgetu238841" data-required="true" data-type="email"><!-- none box -->
      <!-- m_editable region-id="editable-static-tag-U238844-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u238844-4" data-muse-uid="U238844" data-muse-type="txt_frame" for="widgetu238841_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u238844-4_0_content">Email:</span></label>
      <!-- /m_editable -->
      <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u238842-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu238841_input" name="Email" tabindex="10"/><label class="wrapped-input fld-prompt" id="widgetu238841_prompt" for="widgetu238841_input"><span class="actAsPara shared_content" data-content-guid="widgetu238841_prompt_0_content">Inserir email</span></label></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U238852-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u238852-4" data-muse-uid="U238852" data-muse-type="txt_frame"><!-- content -->
      <p class="shared_content" data-content-guid="u238852-4_0_content">Enviando formulário…</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238846-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u238846-4" data-muse-uid="U238846" data-muse-type="txt_frame"><!-- content -->
      <p class="shared_content" data-content-guid="u238846-4_0_content">O servidor encontrou um erro.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238847-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u238847-4" data-muse-uid="U238847" data-muse-type="txt_frame"><!-- content -->
      <p class="shared_content" data-content-guid="u238847-4_0_content">Formulário recebido.</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238845-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <button class="submit-btn NoWrap rounded-corners clearfix grpelem" id="u238845-4" data-muse-uid="U238845" data-muse-type="txt_frame" type="submit" value="Enviar" tabindex="12"><!-- content -->
      <div style="margin-top:-14px;height:14px;" class="shared_content" data-content-guid="u238845-4_0_content">
       <p>Enviar</p>
      </div>
     </button>
     <!-- /m_editable -->
     <div class="fld-grp clearfix grpelem" id="widgetu238848" data-required="false"><!-- none box -->
      <!-- m_editable region-id="editable-static-tag-U238849-BP_768" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <label class="fld-label actAsDiv clearfix grpelem" id="u238849-4" data-muse-uid="U238849" data-muse-type="txt_frame" for="widgetu238848_input"><!-- content --><span class="actAsPara shared_content" data-content-guid="u238849-4_0_content">Mensagem:</span></label>
      <!-- /m_editable -->
      <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem" id="u238851-4"><!-- content --><textarea class="wrapped-input" id="widgetu238848_input" name="custom_U238848" tabindex="11"></textarea><label class="wrapped-input fld-prompt" id="widgetu238848_prompt" for="widgetu238848_input"><span class="actAsPara shared_content" data-content-guid="widgetu238848_prompt_0_content">Insira sua mensagem</span></label></span>
     </div>
    </form>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu37798"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u37798-bw">
      <span class="placeholder" data-placeholder-for="u37798_content"><!-- placeholder node --></span>
     </div>
     <span class="museBGSize grpelem placeholder" data-placeholder-for="u238589_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer" data-offset-top="990" data-content-above-spacer="990" data-content-below-spacer="186"></div>
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
  <div class="breakpoint" id="bp_480" data-min-width="321" data-max-width="480"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
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
     <!-- m_editable region-id="editable-static-tag-U394339-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u394339-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238833-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238833-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238836-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238836-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238835-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238835-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238839-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238839-6_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238838-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238838-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238837-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238837-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238834-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238834-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <form class="form-grp clearfix colelem temp_no_id" method="post" enctype="multipart/form-data" action="scripts/form-u238840.php" data-orig-id="widgetu238840"><!-- none box -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu238853"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238855-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238855" data-muse-type="txt_frame" for="widgetu238853_input" data-orig-id="u238855-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238855-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238854-4"><!-- content --><input class="wrapped-input temp_no_id" type="text" spellcheck="false" name="custom_U238853" tabindex="13" data-orig-id="widgetu238853_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238853_input" data-orig-id="widgetu238853_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238853_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-type="email" data-orig-id="widgetu238841"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238844-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238844" data-muse-type="txt_frame" for="widgetu238841_input" data-orig-id="u238844-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238844-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238842-4"><!-- content --><input class="wrapped-input temp_no_id" type="email" spellcheck="false" name="Email" tabindex="14" data-orig-id="widgetu238841_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238841_input" data-orig-id="widgetu238841_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238841_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U238852-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238852" data-muse-type="txt_frame" data-orig-id="u238852-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238852-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238846-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238846" data-muse-type="txt_frame" data-orig-id="u238846-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238846-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238847-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238847" data-muse-type="txt_frame" data-orig-id="u238847-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238847-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238845-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" data-muse-uid="U238845" data-muse-type="txt_frame" type="submit" value="Enviar" tabindex="16" data-orig-id="u238845-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238845-4_0_content"><!-- placeholder node --></span>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu238848"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238849-BP_480" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238849" data-muse-type="txt_frame" for="widgetu238848_input" data-orig-id="u238849-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238849-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238851-4"><!-- content --><textarea class="wrapped-input temp_no_id" name="custom_U238848" tabindex="15" data-orig-id="widgetu238848_input"></textarea><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238848_input" data-orig-id="widgetu238848_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238848_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
     </form>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu37798"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u37798-bw">
       <span class="placeholder" data-placeholder-for="u37798_content"><!-- placeholder node --></span>
      </div>
      <span class="museBGSize grpelem placeholder" data-placeholder-for="u238589_content"><!-- placeholder node --></span>
     </div>
     <div class="verticalspacer" data-offset-top="967" data-content-above-spacer="967" data-content-below-spacer="186"></div>
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
     <!-- m_editable region-id="editable-static-tag-U394339-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u394339-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238833-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238833-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238836-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238836-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238835-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238835-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238839-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238839-6_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238838-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238838-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238837-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238837-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U238834-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u238834-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <form class="form-grp clearfix colelem temp_no_id" method="post" enctype="multipart/form-data" action="scripts/form-u238840.php" data-orig-id="widgetu238840"><!-- none box -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-orig-id="widgetu238853"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238855-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238855" data-muse-type="txt_frame" for="widgetu238853_input" data-orig-id="u238855-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238855-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238854-4"><!-- content --><input class="wrapped-input temp_no_id" type="text" spellcheck="false" name="custom_U238853" tabindex="17" data-orig-id="widgetu238853_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238853_input" data-orig-id="widgetu238853_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238853_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="true" data-type="email" data-orig-id="widgetu238841"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238844-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238844" data-muse-type="txt_frame" for="widgetu238841_input" data-orig-id="u238844-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238844-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238842-4"><!-- content --><input class="wrapped-input temp_no_id" type="email" spellcheck="false" name="Email" tabindex="18" data-orig-id="widgetu238841_input"/><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238841_input" data-orig-id="widgetu238841_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238841_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U238852-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238852" data-muse-type="txt_frame" data-orig-id="u238852-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238852-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238846-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238846" data-muse-type="txt_frame" data-orig-id="u238846-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238846-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238847-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix grpelem temp_no_id" data-muse-uid="U238847" data-muse-type="txt_frame" data-orig-id="u238847-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238847-4_0_content"><!-- placeholder node --></span>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U238845-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <button class="submit-btn NoWrap rounded-corners clearfix grpelem temp_no_id" data-muse-uid="U238845" data-muse-type="txt_frame" type="submit" value="Enviar" tabindex="20" data-orig-id="u238845-4"><!-- content -->
       <span class="placeholder" data-placeholder-for="u238845-4_0_content"><!-- placeholder node --></span>
      </button>
      <!-- /m_editable -->
      <div class="fld-grp clearfix grpelem temp_no_id" data-required="false" data-orig-id="widgetu238848"><!-- none box -->
       <!-- m_editable region-id="editable-static-tag-U238849-BP_320" template="contato.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <label class="fld-label actAsDiv clearfix grpelem temp_no_id" data-muse-uid="U238849" data-muse-type="txt_frame" for="widgetu238848_input" data-orig-id="u238849-4"><!-- content --><span class="actAsPara placeholder" data-placeholder-for="u238849-4_0_content"><!-- placeholder node --></span></label>
       <!-- /m_editable -->
       <span class="fld-textarea actAsDiv rounded-corners clearfix grpelem temp_no_id" data-orig-id="u238851-4"><!-- content --><textarea class="wrapped-input temp_no_id" name="custom_U238848" tabindex="19" data-orig-id="widgetu238848_input"></textarea><label class="wrapped-input fld-prompt temp_no_id" for="widgetu238848_input" data-orig-id="widgetu238848_prompt"><span class="actAsPara placeholder" data-placeholder-for="widgetu238848_prompt_0_content"><!-- placeholder node --></span></label></span>
      </div>
     </form>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu37798"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u37798-bw">
       <span class="placeholder" data-placeholder-for="u37798_content"><!-- placeholder node --></span>
      </div>
      <span class="museBGSize grpelem placeholder" data-placeholder-for="u238589_content"><!-- placeholder node --></span>
     </div>
     <div class="verticalspacer" data-offset-top="967" data-content-above-spacer="967" data-content-below-spacer="185"></div>
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
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","webpro","jquery.musepolyfill.bgsize","jquery.watch","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#widgetu37714', ['#bp_infinity', '#bp_1024'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu37714 */
Muse.Utils.initWidget('#widgetu238840', ['#bp_768', '#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu238840 */
Muse.Utils.initWidget('#accordionu56589', ['#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu56589 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4159430777" type="text/javascript" async data-main="scripts/museconfig.js?crc=4179431180" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
