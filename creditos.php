<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="keywords" content="Macromia, Fotógrafo de Casamento, Decoração de Casamento, Fotografia Profissional, Fotografia, Fotógrafo, Estúdio de Fotografia, Studio de Fotógrafia, Fotógrafo de Evento, Newborn, Bolo Fake, "/>
  <meta name="generator" content="2017.0.1.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "creditos.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Planos</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=66908463"/>
  <link rel="stylesheet" type="text/css" href="css/creditos.css?crc=3763671396" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_creditos.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4177069693"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_creditos.css?crc=277488486" id="nomq_pagesheet"/>
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
   <div class="clearfix borderbox" id="page"><!-- column -->
    <div class="clearfix colelem" id="pu2643"><!-- group -->
     <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
     <div class="browser_width shared_content" id="u330134-8-bw" data-content-guid="u330134-8-bw_content">
      <div class="clearfix" id="u330134-8"><!-- content -->
       <p><span id="u330134">OLÁ NOME DO CLIENTE </span><span id="u330134-2"> </span><span id="u330134-3"><span class="actAsInlineDiv normal_text" id="u330175"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u330176"><!-- simple frame --></span></span></span><span id="u330134-4">&nbsp; </span><span id="u330134-5">Sair</span></p>
      </div>
     </div>
     <div class="browser_width shared_content" id="u292004-4-bw" data-content-guid="u292004-4-bw_content">
      <a class="nonblock nontext clearfix" id="u292004-4" href="http://macromia.com.br/solicitar-fotografo.php"><!-- content --><p><span id="u292004">QUERO CONTRATAR</span></p></a>
     </div>
     <div id="u56894-wrapper">
      <div id="u56894" class="shared_content" data-content-guid="u56894_content"><!-- simple frame --></div>
     </div>
     <div id="u56895-wrapper">
      <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
     </div>
     <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
     <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    </div>
    <a class="anchor_item colelem shared_content" id="standard" data-content-guid="standard_content"></a>
    <div class="browser_width shared_content" id="u292003-4-bw" data-content-guid="u292003-4-bw_content">
     <a class="nonblock nontext clearfix pinned-colelem shared_content" id="u292003-4" href="http://macromia.com.br/sou-fotografo.php" data-content-guid="u292003-4_content"><!-- content --><p><span id="u292003">QUERO FOTOGRAFAR</span></p></a>
    </div>
    <div class="browser_width shared_content" id="u350754-11-bw" data-content-guid="u350754-11-bw_content">
     <div class="clearfix pinned-colelem shared_content" id="u350754-11" data-content-guid="u350754-11_content"><!-- content -->
      <p><span id="u350754">OLÁ NOME FOTÓGRAFO</span><span id="u350754-2"> </span> <span id="u350754-4"><span class="actAsInlineDiv normal_text" id="u350763"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350764"><!-- simple frame --></span></span></span><span id="u350754-5">&nbsp; Créditos: Ilimitados&nbsp; </span><span id="u350754-6"><span class="actAsInlineDiv normal_text" id="u350761"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350762"><!-- simple frame --></span></span></span><span id="u350754-7">&nbsp; </span><span id="u350754-8">Sair</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu35537"><!-- group -->
     <div class="grpelem shared_content" id="u35537" data-content-guid="u35537_content"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="u35570"><!-- column -->
      <div class="rounded-corners clearfix colelem" id="u34764"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U34791-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34791-4" data-muse-uid="U34791" data-muse-type="txt_frame" data-content-guid="u34791-4_content"><!-- content -->
        <p>STANDARD</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem shared_content" id="pu34776" data-content-guid="pu34776_content"><!-- group -->
        <div class="grpelem shared_content" id="u34776" data-content-guid="u34776_content"><!-- simple frame --></div>
        <div class="clearfix grpelem shared_content" id="u34812" data-content-guid="u34812_content"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U34803-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u34803-4" data-muse-uid="U34803" data-muse-type="txt_frame"><!-- content -->
          <p>R$</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34794-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u34794-4" data-muse-uid="U34794" data-muse-type="txt_frame"><!-- content -->
          <p>00</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix grpelem" id="pu34797-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U34797-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u34797-4" data-muse-uid="U34797" data-muse-type="txt_frame"><!-- content -->
           <p>,00</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U34800-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u34800-4" data-muse-uid="U34800" data-muse-type="txt_frame"><!-- content -->
           <p>/mês</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="clearfix colelem shared_content" id="pu34779" data-content-guid="pu34779_content"><!-- group -->
        <div class="grpelem shared_content" id="u34779" data-content-guid="u34779_content"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U34806-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u34806-4" data-muse-uid="U34806" data-muse-type="txt_frame" data-content-guid="u34806-4_content"><!-- content -->
         <p>CRÉDITOS</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34809-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u34809-4" data-muse-uid="U34809" data-muse-type="txt_frame" data-content-guid="u34809-4_content"><!-- content -->
         <p>COMPRA INDIVIDUAL</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U34818-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34818-4" data-muse-uid="U34818" data-muse-type="txt_frame" data-content-guid="u34818-4_content"><!-- content -->
        <p>CLUBE MACROMIA</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U34815-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34815-4" data-muse-uid="U34815" data-muse-type="txt_frame" data-content-guid="u34815-4_content"><!-- content -->
        <p>ACESSO LIMITADO</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem shared_content" id="pu34785" data-content-guid="pu34785_content"><!-- group -->
        <div class="grpelem shared_content" id="u34785" data-content-guid="u34785_content"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U34824-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u34824-4" data-muse-uid="U34824" data-muse-type="txt_frame" data-content-guid="u34824-4_content"><!-- content -->
         <p>PORTFÓLIO ONLINE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34821-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u34821-4" data-muse-uid="U34821" data-muse-type="txt_frame" data-content-guid="u34821-4_content"><!-- content -->
         <p>NÃO INCLUSO</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35543-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="rounded-corners clearfix colelem shared_content" id="u35543-4" data-muse-uid="U35543" data-muse-type="txt_frame" data-content-guid="u35543-4_content"><!-- content -->
       <p>COMPRAR</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem shared_content" id="u35573" data-content-guid="u35573_content"><!-- column -->
      <div class="rounded-corners clearfix colelem" id="u34896"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U34938-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34938-4" data-muse-uid="U34938" data-muse-type="txt_frame" data-content-guid="u34938-4_content"><!-- content -->
        <p>PREMIUM</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem shared_content" id="pu34920" data-content-guid="pu34920_content"><!-- group -->
        <div class="grpelem shared_content" id="u34920" data-content-guid="u34920_content"><!-- simple frame --></div>
        <div class="clearfix grpelem shared_content" id="u34923" data-content-guid="u34923_content"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U34926-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u34926-4" data-muse-uid="U34926" data-muse-type="txt_frame"><!-- content -->
          <p>R$</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34924-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u34924-4" data-muse-uid="U34924" data-muse-type="txt_frame"><!-- content -->
          <p>99</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix grpelem" id="pu34927-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U34927-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u34927-4" data-muse-uid="U34927" data-muse-type="txt_frame"><!-- content -->
           <p>,00</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U34925-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u34925-4" data-muse-uid="U34925" data-muse-type="txt_frame"><!-- content -->
           <p>/mês</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="clearfix colelem shared_content" id="pu34911" data-content-guid="pu34911_content"><!-- group -->
        <div class="grpelem" id="u34911"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U34917-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem" id="u34917-4" data-muse-uid="U34917" data-muse-type="txt_frame"><!-- content -->
         <p>CRÉDITOS</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34914-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem" id="u34914-4" data-muse-uid="U34914" data-muse-type="txt_frame"><!-- content -->
         <p>150 CRÉDITOS</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U34908-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34908-4" data-muse-uid="U34908" data-muse-type="txt_frame" data-content-guid="u34908-4_content"><!-- content -->
        <p>CLUBE MACROMIA</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U34905-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix colelem shared_content" id="u34905-4" data-muse-uid="U34905" data-muse-type="txt_frame" data-content-guid="u34905-4_content"><!-- content -->
        <p>ACESSO ILIMITADO</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem shared_content" id="pu34902" data-content-guid="pu34902_content"><!-- group -->
        <div class="grpelem shared_content" id="u34902" data-content-guid="u34902_content"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U34890-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u34890-4" data-muse-uid="U34890" data-muse-type="txt_frame" data-content-guid="u34890-4_content"><!-- content -->
         <p>PORTFÓLIO ONLINE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34899-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u34899-4" data-muse-uid="U34899" data-muse-type="txt_frame" data-content-guid="u34899-4_content"><!-- content -->
         <p>NÃO INCLUSO</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35546-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="rounded-corners clearfix colelem shared_content" id="u35546-4" data-muse-uid="U35546" data-muse-type="txt_frame" data-content-guid="u35546-4_content"><!-- content -->
       <p>COMPRAR</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem shared_content" id="u35567" data-content-guid="u35567_content"><!-- column -->
      <div class="rounded-corners clearfix colelem" id="u35023"><!-- column -->
       <div class="position_content" id="u35023_position_content">
        <!-- m_editable region-id="editable-static-tag-U35009-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem shared_content" id="u35009-4" data-muse-uid="U35009" data-muse-type="txt_frame" data-content-guid="u35009-4_content"><!-- content -->
         <p>PROFISSIONAL</p>
        </div>
        <!-- /m_editable -->
        <div class="clearfix colelem" id="pu35010"><!-- group -->
         <div class="grpelem shared_content" id="u35010" data-content-guid="u35010_content"><!-- simple frame --></div>
         <div class="clearfix grpelem shared_content" id="u35017" data-content-guid="u35017_content"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U35021-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u35021-4" data-muse-uid="U35021" data-muse-type="txt_frame"><!-- content -->
           <p>R$</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U35018-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u35018-4" data-muse-uid="U35018" data-muse-type="txt_frame"><!-- content -->
           <p>199</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix grpelem" id="pu35019-4"><!-- column -->
           <!-- m_editable region-id="editable-static-tag-U35019-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u35019-4" data-muse-uid="U35019" data-muse-type="txt_frame"><!-- content -->
            <p>,00</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U35020-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u35020-4" data-muse-uid="U35020" data-muse-type="txt_frame"><!-- content -->
            <p>/mês</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class="clearfix colelem shared_content" id="pu35013" data-content-guid="pu35013_content"><!-- group -->
         <div class="grpelem shared_content" id="u35013" data-content-guid="u35013_content"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U35016-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem shared_content" id="u35016-4" data-muse-uid="U35016" data-muse-type="txt_frame" data-content-guid="u35016-4_content"><!-- content -->
          <p>CRÉDITOS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35024-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem shared_content" id="u35024-4" data-muse-uid="U35024" data-muse-type="txt_frame" data-content-guid="u35024-4_content"><!-- content -->
          <p>CRÉDITOS ILIMITADOS</p>
         </div>
         <!-- /m_editable -->
        </div>
        <!-- m_editable region-id="editable-static-tag-U35011-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem shared_content" id="u35011-4" data-muse-uid="U35011" data-muse-type="txt_frame" data-content-guid="u35011-4_content"><!-- content -->
         <p>CLUBE MACROMIA</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U35022-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem shared_content" id="u35022-4" data-muse-uid="U35022" data-muse-type="txt_frame" data-content-guid="u35022-4_content"><!-- content -->
         <p>ACESSO ILIMITADO</p>
        </div>
        <!-- /m_editable -->
        <div class="clearfix colelem shared_content" id="pu35015" data-content-guid="pu35015_content"><!-- group -->
         <div class="grpelem shared_content" id="u35015" data-content-guid="u35015_content"><!-- simple frame --></div>
         <!-- m_editable region-id="editable-static-tag-U35014-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem shared_content" id="u35014-4" data-muse-uid="U35014" data-muse-type="txt_frame" data-content-guid="u35014-4_content"><!-- content -->
          <p>PORTFÓLIO ONLINE</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35012-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem shared_content" id="u35012-4" data-muse-uid="U35012" data-muse-type="txt_frame" data-content-guid="u35012-4_content"><!-- content -->
          <p>INCLUSO</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35549-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="rounded-corners clearfix colelem shared_content" id="u35549-4" data-muse-uid="U35549" data-muse-type="txt_frame" data-content-guid="u35549-4_content"><!-- content -->
       <p>COMPRAR</p>
      </div>
      <!-- /m_editable -->
     </div>
    </div>
    <div class="clearfix colelem shared_content" id="pu35552" data-content-guid="pu35552_content"><!-- group -->
     <div class="grpelem shared_content" id="u35552" data-content-guid="u35552_content"><!-- simple frame --></div>
     <div class="clearfix grpelem shared_content" id="pu35576-4" data-content-guid="pu35576-4_content"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U35576-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u35576-4" data-muse-uid="U35576" data-muse-type="txt_frame" data-content-guid="u35576-4_content"><!-- content -->
       <p>Plano Standard</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U35556-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u35556-4" data-muse-uid="U35556" data-muse-type="txt_frame" data-content-guid="u35556-4_content"><!-- content -->
       <p>Neste plano você tem a liberdade de escolher a quantidade de créditos a inserir. A partir de R$ 6,00 você poderá adquirir o contato de um cliente que te pagará até R$ 1000,00! Ou seja, você terá um retor de até 166 vezes mais do que investiu.</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem" id="pu35555-4"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U35555-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u35555-4" data-muse-uid="U35555" data-muse-type="txt_frame" data-content-guid="u35555-4_content"><!-- content -->
       <p>SISTEMA DE CRÉDITOS</p>
      </div>
      <!-- /m_editable -->
      <div class="rounded-corners colelem shared_content" id="u35557" data-content-guid="u35557_content"><!-- simple frame --></div>
      <!-- m_editable region-id="editable-static-tag-U35582-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u35582-4" data-muse-uid="U35582" data-muse-type="txt_frame" data-content-guid="u35582-4_content"><!-- content -->
       <p>Plano Premium</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U35579-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem shared_content" id="u35579-4" data-muse-uid="U35579" data-muse-type="txt_frame" data-content-guid="u35579-4_content"><!-- content -->
       <p>Esta é a melhor opção custo x benefício! Você ganhará de bônus R$ 50,00 em créditos no qual poderá adquirir até&nbsp; 25 contatos para apresentar seus trabalhos e negociar um bom orçamento. Além disso você terá 100% de acesso ao nosso blog e desfrutar de inúmeras dicas para melhorar seus negócios.</p>
      </div>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem shared_content" id="pu35585-4" data-content-guid="pu35585-4_content"><!-- column -->
      <!-- m_editable region-id="editable-static-tag-U35585-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u35585-4" data-muse-uid="U35585" data-muse-type="txt_frame"><!-- content -->
       <p>Plano Profissional</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U35588-BP_infinity" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u35588-4" data-muse-uid="U35588" data-muse-type="txt_frame"><!-- content -->
       <p>Esta é a chance de adquirir 100% dos contatos gerados no site, mas lembre-se,&nbsp; você precisa ser um dos 5 primeiros. Outra novidade é um perfil em nosso site com portfólio e a chance de concorrer ao top 10! Isso aumenta muito sua chance de ser escolhido pelo cliente, pois você está em evidência.</p>
      </div>
      <!-- /m_editable -->
     </div>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="1131" data-content-above-spacer="1131" data-content-below-spacer="182" data-content-guid="page_6_content"></div>
    <div class="clearfix colelem shared_content" id="pu454361" data-content-guid="pu454361_content"><!-- group -->
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
     <div class="clearfix grpelem" id="pu292007-4"><!-- group -->
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292007-4_content"><!-- placeholder node --></span>
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292008-4_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <span class="anchor_item colelem placeholder" data-placeholder-for="standard_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu35537"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u35537_content"><!-- placeholder node --></span>
     <div class="clearfix grpelem temp_no_id" data-orig-id="u35570"><!-- column -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u34764"><!-- column -->
       <div class="position_content" id="u34764_position_content">
        <!-- m_editable region-id="editable-static-tag-U34791-BP_1024" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34791-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34776_content"><!-- placeholder node --></span>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34779_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U34818-BP_1024" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34818-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34815-BP_1024" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34815-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34785_content"><!-- placeholder node --></span>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35543-BP_1024" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35543-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <span class="clearfix grpelem placeholder" data-placeholder-for="u35573_content"><!-- placeholder node --></span>
     <span class="clearfix grpelem placeholder" data-placeholder-for="u35567_content"><!-- placeholder node --></span>
    </div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu35552_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_6_content"><!-- placeholder node --></span>
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
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <span class="anchor_item colelem placeholder" data-placeholder-for="standard_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
    <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu35537"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u35537_content"><!-- placeholder node --></span>
     <div class="clearfix grpelem temp_no_id" data-orig-id="u35570"><!-- column -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u34764"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u34764_position_content">
        <!-- m_editable region-id="editable-static-tag-U34791-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34791-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34776_content"><!-- placeholder node --></span>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34779_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U34818-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34818-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34815-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34815-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34785_content"><!-- placeholder node --></span>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35543-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35543-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <div class="clearfix grpelem temp_no_id" data-orig-id="u35573"><!-- column -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u34896"><!-- column -->
       <div class="position_content" id="u34896_position_content">
        <!-- m_editable region-id="editable-static-tag-U34938-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34938-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34920_content"><!-- placeholder node --></span>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34911_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U34908-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34908-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U34905-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u34905-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34902_content"><!-- placeholder node --></span>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35546-BP_768" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35546-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <span class="clearfix grpelem placeholder" data-placeholder-for="u35567_content"><!-- placeholder node --></span>
    </div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu35552_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1171" data-content-above-spacer="1170" data-content-below-spacer="186"></div>
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
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u350754-11-bw">
      <span class="clearfix placeholder" data-placeholder-for="u350754-11_content"><!-- placeholder node --></span>
     </div>
     <div class="browser_width temp_no_id" data-orig-id="u292003-4-bw">
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292003-4_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width shared_content" id="u56725-bw" data-content-guid="u56725-bw_content">
      <div id="u56725"><!-- simple frame --></div>
     </div>
     <div class="browser_width" id="accordionu56589-bw">
      <ul class="AccordionWidget clearfix" id="accordionu56589"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100" id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u56598-5"><!-- content --><p id="u56598-3" class="shared_content" data-content-guid="u56598-3_content"><span id="u56598">​</span><span class="actAsInlineDiv normal_text" id="u56599"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u56600"><!-- content --></span></span></p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u56591"><!-- column --><a class="nonblock nontext clearfix colelem shared_content" id="u56593-4" href="http://macromia.com.br/solicitar-fotografo.php" data-content-guid="u56593-4_content"><!-- content --><p>QUERO CONTRATAR</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u56594-5" href="http://macromia.com.br/sou-fotografo.php" data-content-guid="u56594-5_content"><!-- content --><p>&nbsp;</p><p>SOU FOTÓGRAFO</p></a><div class="colelem shared_content" id="u56592" data-content-guid="u56592_content"><!-- simple frame --></div><a class="nonblock nontext clearfix colelem shared_content" id="u56597-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u56597-4_content"><!-- content --><p>COMO FUNCIONA?</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u187692-4" href="http://macromia.com.br/contato.php" data-content-guid="u187692-4_content"><!-- content --><p>FALE CONOSCO</p></a></div></li>
      </ul>
     </div>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35537"><!-- column -->
     <span class="colelem placeholder" data-placeholder-for="u35537_content"><!-- placeholder node --></span>
     <span class="colelem placeholder" data-placeholder-for="u35552_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem" id="pu35570"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="u35570"><!-- column -->
      <div class="clearfix colelem" id="pu34764"><!-- group -->
       <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u34764"><!-- column -->
        <div class="position_content temp_no_id" data-orig-id="u34764_position_content">
         <div class="clearfix colelem temp_no_id" data-orig-id="pu34776"><!-- group -->
          <span class="grpelem placeholder" data-placeholder-for="u34776_content"><!-- placeholder node --></span>
          <!-- m_editable region-id="editable-static-tag-U34791-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34791-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <span class="clearfix colelem placeholder" data-placeholder-for="pu34779_content"><!-- placeholder node --></span>
         <div class="clearfix colelem" id="pu34818-4"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U34818-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34818-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U34815-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34815-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <span class="clearfix colelem placeholder" data-placeholder-for="pu34785_content"><!-- placeholder node --></span>
        </div>
       </div>
       <span class="clearfix grpelem placeholder" data-placeholder-for="u34812_content"><!-- placeholder node --></span>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35543-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35543-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <!-- m_editable region-id="editable-static-tag-U35576-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35576-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U35556-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35556-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35555-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U35555-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35555-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <span class="rounded-corners colelem placeholder" data-placeholder-for="u35557_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="u35567"><!-- column -->
     <div class="clearfix colelem" id="pu35023"><!-- group -->
      <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u35023"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u35023_position_content">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu35010"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u35010_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U35009-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35009-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu35013_content"><!-- placeholder node --></span>
        <div class="clearfix colelem" id="pu35011-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U35011-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35011-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35022-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35022-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu35015_content"><!-- placeholder node --></span>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u35017_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U35549-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35549-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem" id="pu35573"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="u35573"><!-- column -->
      <div class="rounded-corners clearfix colelem temp_no_id" data-orig-id="u34896"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u34896_position_content">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34920"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u34920_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U34938-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34938-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u34923_content"><!-- placeholder node --></span>
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34911_content"><!-- placeholder node --></span>
        <div class="clearfix colelem" id="pu34908-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U34908-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34908-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34905-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34905-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34902_content"><!-- placeholder node --></span>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U35546-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35546-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <!-- m_editable region-id="editable-static-tag-U35582-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35582-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U35579-BP_480" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35579-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu35585-4_content"><!-- placeholder node --></span>
    <div class="clearfix shared_content" id="u283018-4" data-content-guid="u283018-4_content"><!-- content -->
     <p>MENU</p>
    </div>
    <span class="anchor_item grpelem placeholder" data-placeholder-for="standard_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1405" data-content-above-spacer="1404" data-content-below-spacer="185"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u454361-bw">
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
  <div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="u35567"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu35023"><!-- group -->
      <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u35023"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u35023_position_content">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu35010"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u35010_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U35009-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35009-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu35013"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u35013_content"><!-- placeholder node --></span>
         <span class="grpelem placeholder" data-placeholder-for="u35015_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U35016-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35016-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35011-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35011-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35014-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35014-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35024-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35024-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35022-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35022-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U35012-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u35012-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u35017_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U35549-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35549-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u350754-11-bw">
      <span class="clearfix placeholder" data-placeholder-for="u350754-11_content"><!-- placeholder node --></span>
     </div>
     <div class="browser_width temp_no_id" data-orig-id="u292003-4-bw">
      <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292003-4_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u56725-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="accordionu56589-bw">
      <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu56589"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100 temp_no_id" data-orig-id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100 temp_no_id" data-orig-id="u56598-5"><!-- content --><span class="placeholder" data-placeholder-for="u56598-3_content"><!-- placeholder node --></span></div><div class="AccordionPanelContent disn clearfix colelem100 temp_no_id" data-orig-id="u56591"><!-- column --><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56593-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56594-5_content"><!-- placeholder node --></span><span class="colelem placeholder" data-placeholder-for="u56592_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56597-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u187692-4_content"><!-- placeholder node --></span></div></li>
      </ul>
     </div>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35537"><!-- column -->
     <span class="colelem placeholder" data-placeholder-for="u35537_content"><!-- placeholder node --></span>
     <span class="colelem placeholder" data-placeholder-for="u35552_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35555-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U35555-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35555-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <span class="rounded-corners colelem placeholder" data-placeholder-for="u35557_content"><!-- placeholder node --></span>
    </div>
    <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu35576-4_content"><!-- placeholder node --></span>
    <div class="clearfix grpelem temp_no_id" data-orig-id="u35573"><!-- column -->
     <div class="clearfix colelem" id="pu34896"><!-- group -->
      <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u34896"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u34896_position_content">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34920"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u34920_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U34938-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34938-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <span class="clearfix colelem placeholder" data-placeholder-for="pu34911_content"><!-- placeholder node --></span>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34902"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u34902_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U34908-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34908-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34890-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34890-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34905-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34905-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34899-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u34899-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u34923_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U35546-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35546-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="u35570"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu34764"><!-- group -->
      <div class="rounded-corners clearfix grpelem temp_no_id" data-orig-id="u34764"><!-- column -->
       <div class="position_content temp_no_id" data-orig-id="u34764_position_content">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34776"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u34776_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U34791-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34791-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu34779"><!-- group -->
         <span class="grpelem placeholder" data-placeholder-for="u34779_content"><!-- placeholder node --></span>
         <span class="grpelem placeholder" data-placeholder-for="u34785_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U34806-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34806-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34818-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34818-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34824-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34824-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34809-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34809-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34815-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34815-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U34821-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u34821-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
      <span class="clearfix grpelem placeholder" data-placeholder-for="u34812_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U35543-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35543-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <div class="clearfix grpelem" id="pu35582-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U35582-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35582-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U35579-BP_320" template="creditos.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u35579-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
    </div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu35585-4_content"><!-- placeholder node --></span>
    <span class="clearfix placeholder" data-placeholder-for="u283018-4_content"><!-- placeholder node --></span>
    <span class="anchor_item grpelem placeholder" data-placeholder-for="standard_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1718" data-content-above-spacer="1717" data-content-below-spacer="184"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u454361-bw">
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
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","webpro","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
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
   </body>
</html>
