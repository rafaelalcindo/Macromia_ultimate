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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "jquery.musepolyfill.bgsize.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "historico.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Histórico</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=4078385254"/>
  <link rel="stylesheet" type="text/css" href="css/historico.css?crc=31464807" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_historico.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4171875711"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_historico.css?crc=3805654298" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/lato:n7:default;nunito:n7,n4,n3:default.js" type="text/javascript">\x3C/script>');
</script>
    <!--custom head HTML-->
  <script type="text/javascript">    window.smartlook||(function(d) {    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);    })(document);    smartlook('init', '0a2d43c71b419af12271db7fb0c0f9eceff2d612');</script><script type="text/javascript" src="_js/jquery-1.12.4.min.js"></script>         <script type="text/javascript" src="_js/maskedinput.js"></script>             <script src="_js/datapicker/jquery.ui.timepicker.js" type="text/javascript"></script>         <script type="text/javascript" src="_js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>         <script src="_js/maskedinput.js" type="text/javascript"></script>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css"/>         <link rel="stylesheet" href="_js/datapicker/jquery.ui.timepicker.css"/><style type="text/css">input[type='radio'] {    -webkit-appearance: radio;    -webkit-border-radius: 0;  }  input[type='checkbox']{    -webkit-appearance: checkbox;    -webkit-border-radius: 0;  }</style>
<?php  include('head_pages/head_filtro_foto.php'); ?>

 <script type="text/javascript">

         $(document).ready(function(){

           

             var foto_email = $('#foto_email').val();

             var foto_senha = $('#foto_senha').val();

             var foto_ident = $('#foto_ident').val();

             var pagina_inicio = 1;

            

             if( (foto_email != " " && foto_senha != " " && foto_ident != " ") ){

                 

                  $('#u11522').show();

                  $('#u292004-4-bw').hide();

                  $('#u292003-4').hide();

 

                   

 

                  $('#u11521').css("background", "transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != '' ){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>') no-repeat scroll center center / contain");

          $('#u11521').css('background-size', '100% 100%');

 

 

 

                  /* perfil sair topo */

                  $('#u11535-4').children().remove(); 

                  $('#u11535-4').append('<a  id="perf_top_sair" style="text-decoration: none; color: #c8c8c8; cursor: pointer;"><p>Sair</p></a>');

 

                  $('#u56908-4').children().remove();

                  $('#u56908-4').append('<a  id="perf_top_sair" style="text-decoration: none; color: #c8c8c8; cursor: pointer;"><p>Sair</p></a>');

 

                  $('#u56739-4').children().remove();

                  $('#u56739-4').append('<a  id="perf_top_sair02" style="text-decoration: none; color: #c8c8c8; cursor: pointer;"><p>Sair</p></a>');

 

 

 

                  /* boas vindas topo */

                  $('#u11523-4').children().remove();

                  var boas_vindas = "<p>BEM-VINDO <?= isset($cli_nome)? $cli_nome : " " ?>  </p>";

                  $('#u11523-4').append(boas_vindas);

 

                  $('#u56903-4').children().remove();

                  var boas_vindas = "<p>BEM-VINDO <?= isset($cli_nome)? $cli_nome : " " ?>  </p>";

                  $('#u56903-4').append(boas_vindas);

 

                  $('#u56734-4').children().remove();

                  var boas_vindas = "<p>BEM-VINDO <?= isset($cli_nome)? $cli_nome : " " ?>  </p>";

                  $('#u56734-4').append(boas_vindas);

 

 

 

                 if(foto_email != " " ){

                    $('#u330134-8').children().remove('p');

                    $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'>Sair</a> </p> ");

 

                    $('#u291970-5').children().remove(); 

                    $('#u291970-5').attr('href', 'fotografo-minha-conta.php');

                    $('#u291970-5').append('<p>MINHA CONTA</p>');

 

                    $('#u56594-5').children().remove(); 

                    $('#u56594-5').attr('href', 'fotografo-minha-conta.php');

                    $('#u56594-5').append('<p>MINHA CONTA</p>');

 

 

                    /* barra filtro foto */

                  

 

                    $('#u56593-5').children().remove();

                    $('#u56593-5').attr('href', 'filtro.php');

                    $('#u56593-5').append('<p>LISTA DE PEDIDOS</p>');

 

                    /*Inserindo link para as paginas */

                    $('#u350754-11').children().remove();

                    var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PERFIL</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro02' href='historico.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>HISTÓRICO</a></p> ";

                    $('#u350754-11').append(link_foto);

 

 

 

                    $('#u28732').css("background","transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != '' ){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>')  no-repeat center center / contain");

                    $('#u28732').css('background-size','100% 100%');

 

                    $('#u11535-4').children().remove();

                    $('#u11535-4').append('<a  id="perf_top_sair" style="text-decoration: none; color: #c8c8c8; cursor: pointer;"><p>Sair</p></a>');

 

                    $('#u14351-4').children().remove();

                    $('#u14351-4').append('<p id="btn_procurar" style="text-decoration: none; color: #c8c8c8; cursor: pointer; color: white;">BUSCAR</p>');

                 }

 

                 paginacao_pedidos(pagina_inicio);

               

             }else{

                  $('#u11522').hide();

                  $('#u292004-4-bw').show(); 

                  $('#u292003-4').show();              

             }

            

             $('#perf_top_sair').click(function(){

                 if(foto_ident == " "){

                     $.ajax({

                         type: 'POST',

                         url: 'seleciona_tipo_cli.php?p=logout',

                         dataType: 'text',

                         success: function(res){

                            

                             location.reload();

                         }

                     });

                 }else if(foto_ident == "FF"){

                     $.ajax({

                         type: 'POST',

                         url: 'seleciona_tipo_cli.php?f=logout',

                         dataType: 'text',

                         success: function(res){

                           

                             location.reload();

                         }

                     });

                 }else if(foto_ident == "FJ"){

                     $.ajax({

                         type: 'POST',

                         url: 'seleciona_tipo_cli.php?f=logout',

                         dataType: 'text',

                         success: function(res){

                            

                             location.reload();

                         }

                     });

                 }

             });

 

             $('#btn_procurar').click(function(){

              var servico    = $('#servico').val();

              var estado     = $('#estado').val();

              var cidade     = $('#cidade').val();

              var id_foto    = $('#hidden_id').val();

              var credi_foto = $('#hidden_credi') .val();

              var orcamento  = $("input[name='Orcamento']:checked").val();

              var ordenar    = $("input[name='Ordem']:checked").val();

 

                $.ajax({

                  type: "POST",

                  url: "login_foto/historico_pedido/lista_pedido.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                  dataType: "text",

                  success: function(res){

                   

                    $('#u365383').children().remove();

                    $('#u365383').append(res);

                }

              });

 

             /* $.ajax({

                  type: "POST",

                  url: "login_foto/historico_pedido/lista_pedido02.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                  dataType: "text",

                  success: function(res){

                  

                    $('#u365390').children().remove();                

                    $('#u365390').append(res);

                }

              }); */

 

              $.ajax({

                  type: "POST",

                  url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                  dataType: "text",

                  success: function(res){

                  

                    $('#u505567').children().remove();

                    $('#u505567').append(res);

                }

              });

 

             /* $.ajax({

                  type: "POST",

                  url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                  dataType: "text",

                  success: function(res){

                  

                    $('#u367112').children().remove();

                    $('#u367112').append(res);

                }

              }); */

 

          });

 

             $('#estado').change(function() {

                var id = $(this).val();

                $.ajax({

                    type: "POST",

                    url: "login_foto/lista_cidade.php?id=" + id,

                    dataType: "text",

                    success: function(res) {

                        $('#cidade').children('.cidades').remove();

                        $('#cidade').append(res);

                        $('#cidade').removeAttr('disabled').focus();

                    }

                  });

              });

 

         });

 

 

 

    function paginacao_pedidos(pg, scroll_permission){

     

      var servico    = $('#servico').val();

      var estado     = $('#estado').val();

      var cidade     = $('#cidade').val();

      var id_foto    = $('#hidden_id').val();

      var credi_foto = $('#hidden_credi').val();

      var orcamento  = $("input[name='Orcamento']:checked").val();

      var ordenar    = $("input[name='Ordem']:checked").val();

 

       $.ajax({

                type: "POST",

                url: "login_foto/historico_pedido/lista_pedido.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                dataType: "text",

                success: function(res){

 

                 

                 

                  $('#u506583').children().remove();

                  $('#u506583').append(res);

                }

            });

 

       /*$.ajax({

                type: "POST",

                url: "login_foto/historico_pedido/lista_pedido02.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                dataType: "text",

                success: function(res){

                

                  $('#u365390').children().remove();                

                  $('#u365390').append(res);

                }

            }); */

 

       $.ajax({

                type: "POST",

                url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                dataType: "text",

                success: function(res){

                

                  $('#u505567').children().remove();

                  $('#u505567').append(res);

                }

            });

 

      /* $.ajax({

                type: "POST",

                url: "login_foto/historico_pedido/lista_pedido04.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,

                dataType: "text",

                success: function(res){

                

                 $('#u367112').children().remove();

                 $('#u367112').append(res);

                }

            }); */

 

       if(scroll_permission == true ){

            scrollTop();

        }

 

    }

 

    function scrollTop(){

               /* alert($("#u365383").scrollTop()+" px"); */

                $("html, body").animate({ scrollTop: 0 }, "slow");

 

      }

 

    function comprar_listagem(codigo, creditos, vagas, pg){

 

 

          var cod             = codigo;

          var id_foto         = $('#hidden_id').val();

          var credi_fotografo = $('#hidden_credi').val();

          var creditos        = creditos;

          var vagas_evento    = vagas;

         

         /* $.ajax({

            type: "POST",

            url: "login_foto/filtro_pedido/funcao_foto.php?id_evento="+cod+"&id_foto="+id_foto+"&credi_foto="+credi_fotografo+"&credi_event="+creditos+"&vagas="+vagas_evento,

            dataType: "text",

            success: function(res){            

              paginacao_pedidos(pg);

            }

          }); */

 

          $.ajax({

              type: "POST",

              url: "login_foto/historico_pedido/funcao_foto.php?id_foto="+id_foto+"&cod_active=82124343",

              dataType: "text",

              success: function(res){

                 

                  if(res == 'true'){

                      $.ajax({

                          type: "POST",

                          url: "login_foto/historico_pedido/funcao_foto.php?id_evento="+cod+"&id_foto="+id_foto+"&credi_foto="+credi_fotografo+"&credi_event="+creditos+"&vagas="+vagas_evento,

                          dataType: "text",

                          success: function(res){            

                            paginacao_pedidos(pg);

                          }

                      });

                  }else{

                    alert('O limite para adquirir contatos por dia esgotou');

                  }

              }

          });

         

        }

 

       

     </script> 

 

 

 

 

<style type="text/css"> 

 

#estado{          /*background-color: transparent; */        

  -webkit-appearance: none;          -moz-appearance:none ;          text-indent: 1px;          text-overflow: "";          border: none;           width:100%;          background-image: url('imagem/downArrow.png');          background-repeat: no-repeat;          background-position: right center;          -webkit-border-radius: 5px;          -moz-border-radius: 5px;          border-radius:      5px;        }        #cidade{          -webkit-appearance: none;          -moz-appearance: none;          text-indent: 1px;          text-overflow: "";          border: none;          width: 90%;          background-image: url('imagem/downArrow.png');          background-repeat: no-repeat;          background-position: right center;          -webkit-border-radius: 5px;          -moz-border-radius:    5px;          border-radius:         5px;        }        #servico{          -webkit-appearance: none;          -moz-appearance: none;          text-indent: 1px;          text-overflow: 1px;          border: none;          width: 100%;          background-image: url('imagem/downArrow.png');          background-repeat: no-repeat;          background-position: right center;          -webkit-border-radius: 5px;          -moz-border-radius:    5px;          border-radius:         5px;        }        #cidade:disabled{          background-color: #FFFFFF;        }

 

</style>

 

 

<style type="text/css">

  #page{

    background-color: #c8c8c8;

  }

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
    <div class="clearfix grpelem" id="pu505641"><!-- column -->
     <div class="browser_width colelem shared_content" id="u505641-bw" data-content-guid="u505641-bw_content">
      <div id="u505641"><!-- group -->
       <div class="clearfix" id="u505641_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U505564-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u505564-4" data-muse-uid="U505564" data-muse-type="txt_frame" data-content-guid="u505564-4_content"><!-- content -->
         <p>SERVIÇO:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u505565" data-content-guid="u505565_content"><!-- group -->
         <div class="grpelem" id="u505553"><!-- custom html -->
          <select name="sele_servico" style="background-color: transparent; border: none; width:100%;"  id="servico">
         <option value=" ">Selecione o serviços</option>
                            <option value="Casamento">Casamento</option>                            
                            <option value="Festa de aniversario">Festa de Aniversário</option>
                            <option value="Eventos Sociais">Eventos Sociais</option>
                            <option value="Festas Infantis">Festas Infantis</option>
                            <option disabled>-----------------</option>
                            <option value="Infantil">Infantil</option>
                            <option value="Gestante">Gestante</option>
                            <option value="Casal">Casal</option>2
                            <option value="Banda">Banda</option>
                            <option disabled>-----------------</option>
                            <option value="Institucional">Institucional</option>
                            <option value="Produtos">Produtos</option>
                            <option value="Moda">Moda</option>
                            <option value="Modelos">Modelos</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Industrial">Industrial</option>
                            <option disabled>-----------------</option>
                            <option value="Artístico">Artístico</option>
                            <option value="Nú Artístico">Nú Artístico</option>
                            <option disabled>-----------------</option>
                            <option value="Médico">Médico</option>
                            <option value="Odontológico">Odontológico</option>
                            <option disabled>-----------------</option>
                            <option value="Paisagem">Paisagem</option>
                            <option value="Vida Submarina">Vida Submarina</option>
                            <option value="Animais">Animais</option>
                            <option value="Aéreas">Aéreas</option>
                            <option disabled>-----------------</option>
                            <option value="Arquitetura">Arquitetura</option>
                            <option value="Esporte">Esporte</option>
                            <option value="Jornalístico">Jornalístico</option>
                            <option value="Documentarista">Documentarista</option>

         </select>
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U505537-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u505537-4" data-muse-uid="U505537" data-muse-type="txt_frame" data-content-guid="u505537-4_content"><!-- content -->
         <p>ESTADO:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u505562" data-content-guid="u505562_content"><!-- group -->
         <div class="grpelem" id="u505551"><!-- custom html -->
          <select id="estado" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado"> 
             <option value=" ">Estado</option>
             <?php $sql = mysqli_query($conexao,"select * from estado");
                   header('Content-type: text/html; charset=utf-8');
                   while ($row = mysqli_fetch_array($sql)) {
                      $id   = utf8_encode($row['id']);
                      $nome = utf8_encode($row['nome']);
                      $uf   = utf8_encode($row['uf']); 
             ?>
             <option value="<?php echo $id; ?>"><?php echo $uf; ?></option>
             <?php } ?>
           </select>
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U505560-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u505560-4" data-muse-uid="U505560" data-muse-type="txt_frame" data-content-guid="u505560-4_content"><!-- content -->
         <p>CIDADE:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u505556" data-content-guid="u505556_content"><!-- group -->
         <div class="grpelem" id="u505555"><!-- custom html -->
          <select id="cidade" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value=" ">Cidade</option>
          </select>
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U505561-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u505561-4" data-muse-uid="U505561" data-muse-type="txt_frame" data-content-guid="u505561-4_content"><!-- content -->
         <p>BUSCAR</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width colelem shared_content" id="u505552-bw" data-content-guid="u505552-bw_content">
      <div id="u505552"><!-- group -->
       <div class="clearfix" id="u505552_align_to_page">
        <div class="grpelem" id="u505554"><!-- custom html -->
         <input type="radio" name="Ordem" value="recente" checked>
        </div>
        <!-- m_editable region-id="editable-static-tag-U505566-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u505566-4" data-muse-uid="U505566" data-muse-type="txt_frame"><!-- content -->
         <p>Mais recentes</p>
        </div>
        <!-- /m_editable -->
        <div class="grpelem" id="u505559"><!-- custom html -->
         <input type="radio" name="Ordem" value="antigo">
        </div>
        <!-- m_editable region-id="editable-static-tag-U505643-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u505643-4" data-muse-uid="U505643" data-muse-type="txt_frame"><!-- content -->
         <p>Mais antigos</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="pu505557"><!-- group -->
      <div class="browser_width grpelem" id="u505557-bw">
       <div id="u505557"><!-- group -->
        <div class="clearfix" id="u505557_align_to_page">
         <div class="clearfix grpelem" id="u505538"><!-- group -->
          <div class="grpelem shared_content" id="u505541" data-content-guid="u505541_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="1">
          </div>
          <!-- m_editable region-id="editable-static-tag-U505546-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505546-4" data-muse-uid="U505546" data-muse-type="txt_frame" data-content-guid="u505546-4_content"><!-- content -->
           <p>R$ 100,00 a R$ 1.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u505550" data-content-guid="u505550_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="2">
          </div>
          <!-- m_editable region-id="editable-static-tag-U505545-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505545-4" data-muse-uid="U505545" data-muse-type="txt_frame" data-content-guid="u505545-4_content"><!-- content -->
           <p>R$ 1.000,00 a R$ 2.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u505539" data-content-guid="u505539_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="3">
          </div>
          <!-- m_editable region-id="editable-static-tag-U505544-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505544-4" data-muse-uid="U505544" data-muse-type="txt_frame" data-content-guid="u505544-4_content"><!-- content -->
           <p>R$ 2.000,00 a R$ 5.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u505549" data-content-guid="u505549_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="4">
          </div>
          <!-- m_editable region-id="editable-static-tag-U505543-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505543-4" data-muse-uid="U505543" data-muse-type="txt_frame" data-content-guid="u505543-4_content"><!-- content -->
           <p>R$ 5.000,00 a R$ 10.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u505548" data-content-guid="u505548_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="5">
          </div>
          <!-- m_editable region-id="editable-static-tag-U505542-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505542-4" data-muse-uid="U505542" data-muse-type="txt_frame" data-content-guid="u505542-4_content"><!-- content -->
           <p>Acima de&nbsp; R$ 10.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u505547" data-content-guid="u505547_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="6" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U505540-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u505540-4" data-muse-uid="U505540" data-muse-type="txt_frame" data-content-guid="u505540-4_content"><!-- content -->
           <p>Todos</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <div class="browser_width grpelem shared_content" id="u505642-bw" data-content-guid="u505642-bw_content">
       <div id="u505642"><!-- group -->
        <div class="clearfix" id="u505642_align_to_page">
         <!-- m_editable region-id="editable-static-tag-U505558-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u505558-4" data-muse-uid="U505558" data-muse-type="txt_frame"><!-- content -->
          <p>FILTRAR POR ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem" id="u505536"><!-- simple frame --></div>
    <a class="nonblock nontext museBGSize shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div id="u56895-wrapper">
     <a class="nonblock nontext museBGSize shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="clearfix grpelem" id="pu506583"><!-- column -->
     <div class="clearfix colelem shared_content" id="u506583" data-content-guid="u506583_content"><!-- column -->
      <div class="clearfix colelem" id="u506584"><!-- group -->
       <div class="rounded-corners grpelem" id="u506616"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u506618"><!-- simple frame --></div>
       <div class="grpelem" id="u506617"><!-- simple frame --></div>
       <div class="clearfix grpelem" id="u506585"><!-- column -->
        <div class="clearfix colelem" id="pu506592-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506592-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506592-4" data-muse-uid="U506592" data-muse-type="txt_frame"><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506603-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506603-4" data-muse-uid="U506603" data-muse-type="txt_frame"><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506608-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506608-4" data-muse-uid="U506608" data-muse-type="txt_frame"><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu506609-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506609-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506609-4" data-muse-uid="U506609" data-muse-type="txt_frame"><!-- content -->
          <p>CASAMENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506586-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506586-4" data-muse-uid="U506586" data-muse-type="txt_frame"><!-- content -->
          <p>R$ 1.000,00 a R$ 2.000,00</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506590-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506590-4" data-muse-uid="U506590" data-muse-type="txt_frame"><!-- content -->
          <p>22/12/2016</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="u506605"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506593-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506593-4" data-muse-uid="U506593" data-muse-type="txt_frame"><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506601-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506601-4" data-muse-uid="U506601" data-muse-type="txt_frame"><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506607-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506607-4" data-muse-uid="U506607" data-muse-type="txt_frame"><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u506611"><!-- group -->
         <div class="clearfix grpelem" id="pu506612-5"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506612-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506612-5" data-muse-uid="U506612" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506612">NOME: </span>XXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506599-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506599-5" data-muse-uid="U506599" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506599">TELEFONE FIXO:</span> XX XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506610-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506610-5" data-muse-uid="U506610" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506610">CELULAR /WHATSAPP:</span> XX XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506591-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506591-5" data-muse-uid="U506591" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506591">EMAIL:</span> XXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu506588-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506588-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506588-4" data-muse-uid="U506588" data-muse-type="txt_frame"><!-- content -->
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu506613-5"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U506613-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u506613-5" data-muse-uid="U506613" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u506613">ESTADO:</span> SP</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U506600-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u506600-5" data-muse-uid="U506600" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u506600">CIDADE:</span> CIDADE TAL</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix grpelem" id="u506594"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506596-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506596-4" data-muse-uid="U506596" data-muse-type="txt_frame"><!-- content -->
           <p>2</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506598-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506598-4" data-muse-uid="U506598" data-muse-type="txt_frame"><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506597-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u506597-4" data-muse-uid="U506597" data-muse-type="txt_frame"><!-- content -->
           <p>COMPRAR CONTATO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506595-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506595-5" data-muse-uid="U506595" data-muse-type="txt_frame"><!-- content -->
           <p id="u506595-3"><span id="u506595">VALOR DO CONTATO:</span><span id="u506595-2"> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="grpelem" id="u506614"><!-- simple frame --></div>
       <div class="grpelem" id="u506615"><!-- simple frame --></div>
      </div>
      <div class="clearfix colelem" id="u506619"><!-- group -->
       <div class="rounded-corners grpelem" id="u506653"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u506622"><!-- simple frame --></div>
       <div class="grpelem" id="u506620"><!-- simple frame --></div>
       <div class="clearfix grpelem" id="u506623"><!-- column -->
        <div class="clearfix colelem" id="pu506626-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506626-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506626-4" data-muse-uid="U506626" data-muse-type="txt_frame"><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506641-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506641-4" data-muse-uid="U506641" data-muse-type="txt_frame"><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506631-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506631-4" data-muse-uid="U506631" data-muse-type="txt_frame"><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu506633-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506633-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506633-4" data-muse-uid="U506633" data-muse-type="txt_frame"><!-- content -->
          <p>CASAMENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506639-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506639-4" data-muse-uid="U506639" data-muse-type="txt_frame"><!-- content -->
          <p>R$ 1.000,00 a R$ 2.000,00</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506632-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506632-4" data-muse-uid="U506632" data-muse-type="txt_frame"><!-- content -->
          <p>22/12/2016</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="u506638"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U506651-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506651-4" data-muse-uid="U506651" data-muse-type="txt_frame"><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506637-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506637-4" data-muse-uid="U506637" data-muse-type="txt_frame"><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U506629-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u506629-4" data-muse-uid="U506629" data-muse-type="txt_frame"><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u506635"><!-- group -->
         <div class="clearfix grpelem" id="pu506650-5"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506650-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506650-5" data-muse-uid="U506650" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506650">NOME: </span>XXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506627-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506627-5" data-muse-uid="U506627" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506627">TELEFONE FIXO:</span> XX XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506634-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506634-5" data-muse-uid="U506634" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506634">CELULAR /WHATSAPP:</span> XX XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506640-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506640-5" data-muse-uid="U506640" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u506640">EMAIL:</span> XXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu506636-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506636-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506636-4" data-muse-uid="U506636" data-muse-type="txt_frame"><!-- content -->
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu506625-5"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U506625-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u506625-5" data-muse-uid="U506625" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u506625">ESTADO:</span> SP</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U506630-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u506630-5" data-muse-uid="U506630" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u506630">CIDADE:</span> CIDADE TAL</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix grpelem" id="u506642"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U506645-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506645-4" data-muse-uid="U506645" data-muse-type="txt_frame"><!-- content -->
           <p>2</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506646-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506646-4" data-muse-uid="U506646" data-muse-type="txt_frame"><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506644-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u506644-4" data-muse-uid="U506644" data-muse-type="txt_frame"><!-- content -->
           <p>COMPRAR CONTATO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U506643-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u506643-5" data-muse-uid="U506643" data-muse-type="txt_frame"><!-- content -->
           <p id="u506643-3"><span id="u506643">VALOR DO CONTATO:</span><span id="u506643-2"> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="grpelem" id="u506652"><!-- simple frame --></div>
       <div class="grpelem" id="u506621"><!-- simple frame --></div>
      </div>
      <div class="clearfix colelem" id="u506654"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U506655-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix grpelem" id="u506655-4" data-muse-uid="U506655" data-muse-type="txt_frame"><!-- content -->
        <p id="u506655-2"><span id="u506655">ANTERIOR</span></p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U506656-BP_infinity" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix grpelem" id="u506656-4" data-muse-uid="U506656" data-muse-type="txt_frame"><!-- content -->
        <p id="u506656-2"><span id="u506656">PRÓXIMO</span></p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
     <div class="colelem shared_content" id="u505563" data-content-guid="u505563_content"><!-- custom html -->
      <input type="hidden" id="hidden_id" value="<?= isset($cli_id)? $cli_id : ' '?>"/>
   <input type="hidden" id="hidden_credi" value="<?= isset($cli_credito)? $cli_credito : ' '?>" />
     </div>
    </div>
    <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
    <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    <div class="verticalspacer" data-offset-top="1234" data-content-above-spacer="1234" data-content-below-spacer="169"></div>
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
        <div class="museBGSize colelem shared_content" id="u37776" data-content-guid="u37776_content"><!-- simple frame --></div>
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
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <span class="browser_width colelem placeholder" data-placeholder-for="u505641-bw_content"><!-- placeholder node --></span>
    <span class="browser_width colelem placeholder" data-placeholder-for="u505552-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu505557"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u505557-bw">
      <div class="temp_no_id" data-orig-id="u505557"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u505557_align_to_page">
        <div class="clearfix grpelem temp_no_id" data-orig-id="u505538"><!-- group -->
         <div class="clearfix grpelem" id="pu505541"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505541_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505549_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu505546-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505546-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505546-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505543-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505543-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu505550"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505550_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505548_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu505545-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505545-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505545-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505542-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505542-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu505539"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505539_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505547_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu505544-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505544-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505544-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505540-BP_1024" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505540-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u505642-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem" id="u505536-bw">
     <div class="temp_no_id" data-orig-id="u505536"><!-- column -->
      <div class="clearfix" id="u505536_align_to_page">
       <span class="clearfix colelem placeholder" data-placeholder-for="u506583_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u505563_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1247" data-content-above-spacer="1247" data-content-below-spacer="171"></div>
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
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem temp_no_id" data-orig-id="u505641-bw">
     <div class="temp_no_id" data-orig-id="u505641"><!-- group -->
      <div class="clearfix temp_no_id" data-orig-id="u505641_align_to_page">
       <div class="clearfix grpelem" id="pu505564-4"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U505564-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u505564-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U505560-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u505560-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix grpelem" id="pppu505565"><!-- group -->
        <div class="clearfix grpelem" id="ppu505565"><!-- column -->
         <div class="clearfix colelem" id="pu505565"><!-- group -->
          <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505565_content"><!-- placeholder node --></span>
          <!-- m_editable region-id="editable-static-tag-U505537-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix grpelem placeholder" data-placeholder-for="u505537-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u505556_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix grpelem" id="pu505562"><!-- column -->
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u505562_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U505561-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u505561-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
    </div>
    <span class="browser_width colelem placeholder" data-placeholder-for="u505552-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu505557"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u505557-bw">
      <div class="temp_no_id" data-orig-id="u505557"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u505557_align_to_page">
        <div class="clearfix grpelem temp_no_id" data-orig-id="u505538"><!-- group -->
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505541"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505541_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505549_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505546-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505546-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505546-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505543-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505543-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505550"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505550_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505548_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505545-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505545-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505545-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505542-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505542-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505539"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u505539_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u505547_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu505544-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U505544-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505544-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505540-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u505540-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u505642-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem temp_no_id shared_content" data-orig-id="u505536-bw" data-content-guid="u505536-bw_content">
     <div class="temp_no_id" data-orig-id="u505536"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u505536_align_to_page">
       <div class="position_content" id="u505536_position_content">
        <div class="clearfix colelem shared_content" id="u505567" data-content-guid="u505567_content"><!-- column -->
         <div class="clearfix colelem" id="u505571"><!-- group -->
          <div class="clearfix grpelem" id="u505572"><!-- column -->
           <div class="rounded-corners clearfix colelem" id="u505585"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505573-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505573-4" data-muse-uid="U505573" data-muse-type="txt_frame"><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505589-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505589-4" data-muse-uid="U505589" data-muse-type="txt_frame"><!-- content -->
             <p>CASAMENTO</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u505579"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505587-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505587-4" data-muse-uid="U505587" data-muse-type="txt_frame"><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505580-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505580-4" data-muse-uid="U505580" data-muse-type="txt_frame"><!-- content -->
             <p>R$ 1.000,00 a R$ 2.000,00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u505599"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505588-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505588-4" data-muse-uid="U505588" data-muse-type="txt_frame"><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505576-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505576-4" data-muse-uid="U505576" data-muse-type="txt_frame"><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="rounded-corners clearfix colelem" id="u505597"><!-- column -->
            <div class="clearfix colelem" id="u505577"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505581-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505581-4" data-muse-uid="U505581" data-muse-type="txt_frame"><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U505590-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505590-5" data-muse-uid="U505590" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505590">NOME: </span>XXXXXXX XXXXX XX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505586-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505586-5" data-muse-uid="U505586" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505586">TELEFONE:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505600-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505600-5" data-muse-uid="U505600" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505600">CELULAR/WHATSAPP:</span> XXXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505575-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505575-5" data-muse-uid="U505575" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505575">EMAIL:</span> XXXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="u505574"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505578-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505578-4" data-muse-uid="U505578" data-muse-type="txt_frame"><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U505598-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505598-4" data-muse-uid="U505598" data-muse-type="txt_frame"><!-- content -->
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu505582-5"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505582-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505582-5" data-muse-uid="U505582" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u505582">ESTADO:</span> SP</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505584-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505584-5" data-muse-uid="U505584" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u505584">CIDADE:</span> CIDADE TAL</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u505583"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505591-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505591-4" data-muse-uid="U505591" data-muse-type="txt_frame"><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u505592"><!-- column -->
             <!-- m_editable region-id="editable-static-tag-U505594-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505594-4" data-muse-uid="U505594" data-muse-type="txt_frame"><!-- content -->
              <p>2</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505596-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505596-4" data-muse-uid="U505596" data-muse-type="txt_frame"><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505593-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="rounded-corners clearfix colelem" id="u505593-4" data-muse-uid="U505593" data-muse-type="txt_frame"><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505595-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505595-5" data-muse-uid="U505595" data-muse-type="txt_frame"><!-- content -->
              <p id="u505595-3"><span id="u505595">VALOR DO CONTATO:</span><span id="u505595-2"> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="u505606"><!-- group -->
          <div class="clearfix grpelem" id="u505612"><!-- column -->
           <div class="rounded-corners clearfix colelem" id="u505637"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505633-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505633-4" data-muse-uid="U505633" data-muse-type="txt_frame"><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505639-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505639-4" data-muse-uid="U505639" data-muse-type="txt_frame"><!-- content -->
             <p>CASAMENTO</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u505615"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505625-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505625-4" data-muse-uid="U505625" data-muse-type="txt_frame"><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505631-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505631-4" data-muse-uid="U505631" data-muse-type="txt_frame"><!-- content -->
             <p>R$ 1.000,00 a R$ 2.000,00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u505616"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U505638-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505638-4" data-muse-uid="U505638" data-muse-type="txt_frame"><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505617-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505617-4" data-muse-uid="U505617" data-muse-type="txt_frame"><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="rounded-corners clearfix colelem" id="u505636"><!-- column -->
            <div class="clearfix colelem" id="u505618"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505627-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505627-4" data-muse-uid="U505627" data-muse-type="txt_frame"><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U505628-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505628-5" data-muse-uid="U505628" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505628">NOME: </span>XXXXXXX XXXXX XX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505632-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505632-5" data-muse-uid="U505632" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505632">TELEFONE:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505626-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505626-5" data-muse-uid="U505626" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505626">CELULAR/WHATSAPP:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U505634-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505634-5" data-muse-uid="U505634" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u505634">EMAIL:</span> XXXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="u505635"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505630-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505630-4" data-muse-uid="U505630" data-muse-type="txt_frame"><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U505629-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u505629-4" data-muse-uid="U505629" data-muse-type="txt_frame"><!-- content -->
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu505613-5"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505613-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505613-5" data-muse-uid="U505613" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u505613">ESTADO:</span> SP</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505614-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505614-5" data-muse-uid="U505614" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u505614">CIDADE:</span> CIDADE TAL</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u505640"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U505619-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u505619-4" data-muse-uid="U505619" data-muse-type="txt_frame"><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u505620"><!-- column -->
             <!-- m_editable region-id="editable-static-tag-U505622-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505622-4" data-muse-uid="U505622" data-muse-type="txt_frame"><!-- content -->
              <p>2</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505621-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505621-4" data-muse-uid="U505621" data-muse-type="txt_frame"><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505624-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="rounded-corners clearfix colelem" id="u505624-4" data-muse-uid="U505624" data-muse-type="txt_frame"><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U505623-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u505623-5" data-muse-uid="U505623" data-muse-type="txt_frame"><!-- content -->
              <p id="u505623-3"><span id="u505623">VALOR DO CONTATO:</span><span id="u505623-2"> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="u505568"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U505569-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix grpelem" id="u505569-4" data-muse-uid="U505569" data-muse-type="txt_frame"><!-- content -->
           <p id="u505569-2"><span id="u505569">ANTERIOR</span></p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U505570-BP_768" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix grpelem" id="u505570-4" data-muse-uid="U505570" data-muse-type="txt_frame"><!-- content -->
           <p id="u505570-2"><span id="u505570">PRÓXIMO</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <span class="colelem placeholder" data-placeholder-for="u505563_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="2073" data-content-above-spacer="2073" data-content-below-spacer="186"></div>
    <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
     <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
       <span class="museBGSize colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
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
        <li class="AccordionPanel clearfix colelem100" id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u56598-5"><!-- content --><p id="u56598-3" class="shared_content" data-content-guid="u56598-3_content"><span id="u56598">​</span><span class="actAsInlineDiv normal_text" id="u56599"><!-- content --><span class="actAsDiv museBGSize excludeFromNormalFlow" id="u56600"><!-- content --></span></span></p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u56591"><!-- column --><a class="nonblock nontext clearfix colelem shared_content" id="u56593-4" href="http://macromia.com.br/solicitar-fotografo.php" data-content-guid="u56593-4_content"><!-- content --><p>QUERO CONTRATAR</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u56594-5" href="http://macromia.com.br/sou-fotografo.php" data-content-guid="u56594-5_content"><!-- content --><p>&nbsp;</p><p>SOU FOTÓGRAFO</p></a><div class="colelem shared_content" id="u56592" data-content-guid="u56592_content"><!-- simple frame --></div><a class="nonblock nontext clearfix colelem shared_content" id="u56597-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u56597-4_content"><!-- content --><p>COMO FUNCIONA?</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u187692-4" href="http://macromia.com.br/contato.php" data-content-guid="u187692-4_content"><!-- content --><p>FALE CONOSCO</p></a></div></li>
       </ul>
      </div>
      <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
     </div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u505641-bw">
      <div class="temp_no_id" data-orig-id="u505641"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u505641_align_to_page">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu505564-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505564-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505564-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505565_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem" id="pu505537-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505537-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505537-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505562_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem" id="pu505560-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505560-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505560-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505556_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U505561-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505561-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u505552-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu505557"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u505557-bw">
       <div class="temp_no_id" data-orig-id="u505557"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u505557_align_to_page">
         <div class="clearfix grpelem temp_no_id" data-orig-id="u505538"><!-- column -->
          <div class="clearfix colelem temp_no_id" data-orig-id="pu505541"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505541_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505546-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505546-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu505550"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505550_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505545-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505545-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu505539"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505539_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505544-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505544-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu505549"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505549_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505543-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505543-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu505548"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505548_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505542-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505542-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu505547"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u505547_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U505540-BP_480" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u505540-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u505642-bw_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u505536-bw_content"><!-- placeholder node --></span>
     <div class="verticalspacer" data-offset-top="2179" data-content-above-spacer="2179" data-content-below-spacer="186"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
      <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
        <span class="museBGSize colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
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
      <span class="nonblock nontext museBGSize placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
     </div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u505641-bw">
      <div class="temp_no_id" data-orig-id="u505641"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u505641_align_to_page">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu505564-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505564-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505564-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505565_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu505537-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505537-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505537-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505562_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem temp_no_id" data-orig-id="pu505560-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U505560-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u505560-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505556_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U505561-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u505561-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u505552-bw_content"><!-- placeholder node --></span>
     <span class="browser_width colelem placeholder" data-placeholder-for="u505642-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="u505557"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="u505538"><!-- column -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505541"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505541_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505546-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505546-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505550"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505550_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505545-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505545-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505539"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505539_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505544-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505544-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505549"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505549_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505543-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505543-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505548"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505548_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505542-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505542-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu505547"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u505547_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U505540-BP_320" template="historico.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u505540-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u505536-bw">
      <div class="temp_no_id" data-orig-id="u505536"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u505536_align_to_page">
        <span class="clearfix colelem placeholder" data-placeholder-for="u505567_content"><!-- placeholder node --></span>
        <span class="colelem placeholder" data-placeholder-for="u505563_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="2166" data-content-above-spacer="2166" data-content-below-spacer="185"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u454361-bw">
      <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
        <span class="museBGSize colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
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
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","jquery.musepolyfill.bgsize","webpro","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
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
