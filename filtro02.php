<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.0.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "filtro.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Filtro</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=403182001"/>
  <link rel="stylesheet" type="text/css" href="css/filtro.css?crc=4241406897" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_filtro.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4171875711"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_filtro.css?crc=4234713546" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/nunito:n7,n4,n3:default;lato:n7:default.js" type="text/javascript">\x3C/script>');
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
                    var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PERFIL</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro02' href='filtro02.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>HISTÓRICO</a></p> ";
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

              $.ajax({
                  type: "POST",
                  url: "login_foto/historico_pedido/lista_pedido02.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                  dataType: "text",
                  success: function(res){
                   
                    $('#u365390').children().remove();                 
                    $('#u365390').append(res);
                }
              });

              $.ajax({
                  type: "POST",
                  url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                  dataType: "text",
                  success: function(res){
                   
                    $('#u366251').children().remove();
                    $('#u366251').append(res);
                }
              });

              $.ajax({
                  type: "POST",
                  url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                  dataType: "text",
                  success: function(res){
                   
                    $('#u367112').children().remove();
                    $('#u367112').append(res);
                }
              });

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
                 
                  $('#u365383').children().remove();
                  $('#u365383').append(res);
                }
            });

       $.ajax({
                type: "POST",
                url: "login_foto/historico_pedido/lista_pedido02.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                dataType: "text",
                success: function(res){
                 
                  $('#u365390').children().remove();                 
                  $('#u365390').append(res);
                }
            });

       $.ajax({
                type: "POST",
                url: "login_foto/historico_pedido/lista_pedido03.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                dataType: "text",
                success: function(res){
                 
                  $('#u366251').children().remove();
                  $('#u366251').append(res);
                }
            });

       $.ajax({
                type: "POST",
                url: "login_foto/historico_pedido/lista_pedido04.php?sele_servico="+servico+"&estado="+estado+"&cidade="+cidade+"&id_foto="+id_foto+"&credi_foto="+credi_foto+"&pg="+pg+"&Orcamento="+orcamento+"&Ordem="+ordenar,
                dataType: "text",
                success: function(res){
                 
                 $('#u367112').children().remove();
                 $('#u367112').append(res);
                }
            });

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
    <div class="clearfix grpelem" id="pu14008"><!-- column -->
     <div class="browser_width colelem shared_content" id="u14008-bw" data-content-guid="u14008-bw_content">
      <div id="u14008"><!-- group -->
       <div class="clearfix" id="u14008_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U14035-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u14035-4" data-muse-uid="U14035" data-muse-type="txt_frame" data-content-guid="u14035-4_content"><!-- content -->
         <p>SERVIÇO:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u14014" data-content-guid="u14014_content"><!-- group -->
         <div class="grpelem" id="u14015"><!-- custom html -->
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
        <!-- m_editable region-id="editable-static-tag-U14057-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u14057-4" data-muse-uid="U14057" data-muse-type="txt_frame" data-content-guid="u14057-4_content"><!-- content -->
         <p>ESTADO:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u14054" data-content-guid="u14054_content"><!-- group -->
         <div class="grpelem" id="u14049"><!-- custom html -->
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
        <!-- m_editable region-id="editable-static-tag-U14060-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem shared_content" id="u14060-4" data-muse-uid="U14060" data-muse-type="txt_frame" data-content-guid="u14060-4_content"><!-- content -->
         <p>CIDADE:</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u14068" data-content-guid="u14068_content"><!-- group -->
         <div class="grpelem" id="u14063"><!-- custom html -->
          <select id="cidade" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value=" ">Cidade</option>
          </select>
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U14351-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem shared_content" id="u14351-4" data-muse-uid="U14351" data-muse-type="txt_frame" data-content-guid="u14351-4_content"><!-- content -->
         <p>BUSCAR</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width colelem shared_content" id="u14533-bw" data-content-guid="u14533-bw_content">
      <div id="u14533"><!-- group -->
       <div class="clearfix" id="u14533_align_to_page">
        <div class="grpelem" id="u14500"><!-- custom html -->
         <input type="radio" name="Ordem" value="recente" checked>
        </div>
        <!-- m_editable region-id="editable-static-tag-U14499-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u14499-4" data-muse-uid="U14499" data-muse-type="txt_frame"><!-- content -->
         <p>Mais recentes</p>
        </div>
        <!-- /m_editable -->
        <div class="grpelem" id="u14510"><!-- custom html -->
         <input type="radio" name="Ordem" value="antigo">
        </div>
        <!-- m_editable region-id="editable-static-tag-U14507-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u14507-4" data-muse-uid="U14507" data-muse-type="txt_frame"><!-- content -->
         <p>Mais antigos</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="clearfix colelem" id="pu14481"><!-- group -->
      <div class="browser_width grpelem" id="u14481-bw">
       <div id="u14481"><!-- group -->
        <div class="clearfix" id="u14481_align_to_page">
         <div class="clearfix grpelem" id="u17704"><!-- group -->
          <div class="grpelem shared_content" id="u14793" data-content-guid="u14793_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="1">
          </div>
          <!-- m_editable region-id="editable-static-tag-U14788-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u14788-4" data-muse-uid="U14788" data-muse-type="txt_frame" data-content-guid="u14788-4_content"><!-- content -->
           <p>R$ 100,00 a R$ 1.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u14795" data-content-guid="u14795_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="2">
          </div>
          <!-- m_editable region-id="editable-static-tag-U14789-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u14789-4" data-muse-uid="U14789" data-muse-type="txt_frame" data-content-guid="u14789-4_content"><!-- content -->
           <p>R$ 1.000,00 a R$ 2.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u14794" data-content-guid="u14794_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="3">
          </div>
          <!-- m_editable region-id="editable-static-tag-U14790-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u14790-4" data-muse-uid="U14790" data-muse-type="txt_frame" data-content-guid="u14790-4_content"><!-- content -->
           <p>R$ 2.000,00 a R$ 5.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u14796" data-content-guid="u14796_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="4">
          </div>
          <!-- m_editable region-id="editable-static-tag-U14791-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u14791-4" data-muse-uid="U14791" data-muse-type="txt_frame" data-content-guid="u14791-4_content"><!-- content -->
           <p>R$ 5.000,00 a R$ 10.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u14797" data-content-guid="u14797_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="5">
          </div>
          <!-- m_editable region-id="editable-static-tag-U14792-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u14792-4" data-muse-uid="U14792" data-muse-type="txt_frame" data-content-guid="u14792-4_content"><!-- content -->
           <p>Acima de&nbsp; R$ 10.000,00</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem shared_content" id="u17710" data-content-guid="u17710_content"><!-- custom html -->
           <input type="radio" name="Orcamento" value="6" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U17707-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem shared_content" id="u17707-4" data-muse-uid="U17707" data-muse-type="txt_frame" data-content-guid="u17707-4_content"><!-- content -->
           <p>Todos</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
      <div class="browser_width grpelem shared_content" id="u14922-bw" data-content-guid="u14922-bw_content">
       <div id="u14922"><!-- group -->
        <div class="clearfix" id="u14922_align_to_page">
         <!-- m_editable region-id="editable-static-tag-U14785-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14785-4" data-muse-uid="U14785" data-muse-type="txt_frame"><!-- content -->
          <p>FILTRAR POR ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="grpelem" id="u370860"><!-- simple frame --></div>
    <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div id="u56895-wrapper">
     <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="clearfix grpelem" id="pu365383"><!-- column -->
     <div class="clearfix colelem shared_content" id="u365383" data-content-guid="u365383_content"><!-- column -->
      <div class="clearfix colelem" id="u364001"><!-- group -->
       <div class="rounded-corners grpelem" id="u14530"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u14675"><!-- simple frame --></div>
       <div class="grpelem" id="u14729"><!-- simple frame --></div>
       <div class="clearfix grpelem" id="u363181"><!-- column -->
        <div class="clearfix colelem" id="pu468471-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U468471-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468471-4" data-muse-uid="U468471" data-muse-type="txt_frame"><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14663-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14663-4" data-muse-uid="U14663" data-muse-type="txt_frame"><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14684-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14684-4" data-muse-uid="U14684" data-muse-type="txt_frame"><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu468486-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U468486-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468486-4" data-muse-uid="U468486" data-muse-type="txt_frame"><!-- content -->
          <p>CASAMENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14666-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14666-4" data-muse-uid="U14666" data-muse-type="txt_frame"><!-- content -->
          <p>R$ 1.000,00 a R$ 2.000,00</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14687-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14687-4" data-muse-uid="U14687" data-muse-type="txt_frame"><!-- content -->
          <p>22/12/2016</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="u14639"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14642-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14642-4" data-muse-uid="U14642" data-muse-type="txt_frame"><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14648-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14648-4" data-muse-uid="U14648" data-muse-type="txt_frame"><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U14732-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u14732-4" data-muse-uid="U14732" data-muse-type="txt_frame"><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u14401"><!-- group -->
         <div class="clearfix grpelem" id="pu14383-5"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14383-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14383-5" data-muse-uid="U14383" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u14383">NOME: </span>XXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14386-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14386-5" data-muse-uid="U14386" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u14386">TELEFONE FIXO:</span> XX XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14389-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14389-5" data-muse-uid="U14389" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u14389">CELULAR /WHATSAPP:</span> XX XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14392-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14392-5" data-muse-uid="U14392" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u14392">EMAIL:</span> XXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu15438-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U15438-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u15438-4" data-muse-uid="U15438" data-muse-type="txt_frame"><!-- content -->
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu364015-5"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U364015-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u364015-5" data-muse-uid="U364015" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u364015">ESTADO:</span> SP</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U364676-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u364676-5" data-muse-uid="U364676" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u364676">CIDADE:</span> CIDADE TAL</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix grpelem" id="u362909"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14472-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14472-4" data-muse-uid="U14472" data-muse-type="txt_frame"><!-- content -->
           <p>2</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14779-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14779-4" data-muse-uid="U14779" data-muse-type="txt_frame"><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14404-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u14404-4" data-muse-uid="U14404" data-muse-type="txt_frame"><!-- content -->
           <p>COMPRAR CONTATO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14478-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u14478-5" data-muse-uid="U14478" data-muse-type="txt_frame"><!-- content -->
           <p id="u14478-3"><span id="u14478">VALOR DO CONTATO:</span><span id="u14478-2"> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="grpelem" id="u14484"><!-- simple frame --></div>
       <div class="grpelem" id="u14487"><!-- simple frame --></div>
      </div>
      <div class="clearfix colelem" id="u468557"><!-- group -->
       <div class="rounded-corners grpelem" id="u468591"><!-- simple frame --></div>
       <div class="rounded-corners grpelem" id="u468588"><!-- simple frame --></div>
       <div class="grpelem" id="u468590"><!-- simple frame --></div>
       <div class="clearfix grpelem" id="u468558"><!-- column -->
        <div class="clearfix colelem" id="pu468567-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U468567-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468567-4" data-muse-uid="U468567" data-muse-type="txt_frame"><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468579-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468579-4" data-muse-uid="U468579" data-muse-type="txt_frame"><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468560-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468560-4" data-muse-uid="U468560" data-muse-type="txt_frame"><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu468586-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U468586-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468586-4" data-muse-uid="U468586" data-muse-type="txt_frame"><!-- content -->
          <p>CASAMENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468566-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468566-4" data-muse-uid="U468566" data-muse-type="txt_frame"><!-- content -->
          <p>R$ 1.000,00 a R$ 2.000,00</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468576-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468576-4" data-muse-uid="U468576" data-muse-type="txt_frame"><!-- content -->
          <p>22/12/2016</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="u468583"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U468571-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468571-4" data-muse-uid="U468571" data-muse-type="txt_frame"><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468568-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468568-4" data-muse-uid="U468568" data-muse-type="txt_frame"><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id="editable-static-tag-U468574-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u468574-4" data-muse-uid="U468574" data-muse-type="txt_frame"><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u468570"><!-- group -->
         <div class="clearfix grpelem" id="pu468573-5"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U468573-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468573-5" data-muse-uid="U468573" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u468573">NOME: </span>XXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468582-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468582-5" data-muse-uid="U468582" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u468582">TELEFONE FIXO:</span> XX XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468572-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468572-5" data-muse-uid="U468572" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u468572">CELULAR /WHATSAPP:</span> XX XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468581-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468581-5" data-muse-uid="U468581" data-muse-type="txt_frame"><!-- content -->
           <p><span id="u468581">EMAIL:</span> XXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu468585-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U468585-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468585-4" data-muse-uid="U468585" data-muse-type="txt_frame"><!-- content -->
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu468584-5"><!-- group -->
           <!-- m_editable region-id="editable-static-tag-U468584-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u468584-5" data-muse-uid="U468584" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u468584">ESTADO:</span> SP</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U468578-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u468578-5" data-muse-uid="U468578" data-muse-type="txt_frame"><!-- content -->
            <p><span id="u468578">CIDADE:</span> CIDADE TAL</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class="clearfix grpelem" id="u468561"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U468564-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468564-4" data-muse-uid="U468564" data-muse-type="txt_frame"><!-- content -->
           <p>2</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468562-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468562-4" data-muse-uid="U468562" data-muse-type="txt_frame"><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468565-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix colelem" id="u468565-4" data-muse-uid="U468565" data-muse-type="txt_frame"><!-- content -->
           <p>COMPRAR CONTATO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U468563-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u468563-5" data-muse-uid="U468563" data-muse-type="txt_frame"><!-- content -->
           <p id="u468563-3"><span id="u468563">VALOR DO CONTATO:</span><span id="u468563-2"> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="grpelem" id="u468587"><!-- simple frame --></div>
       <div class="grpelem" id="u468589"><!-- simple frame --></div>
      </div>
      <div class="clearfix colelem" id="u364008"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U50015-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix grpelem" id="u50015-4" data-muse-uid="U50015" data-muse-type="txt_frame"><!-- content -->
        <p id="u50015-2"><span id="u50015">ANTERIOR</span></p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U50009-BP_infinity" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="rounded-corners clearfix grpelem" id="u50009-4" data-muse-uid="U50009" data-muse-type="txt_frame"><!-- content -->
        <p id="u50009-2"><span id="u50009">PRÓXIMO</span></p>
       </div>
       <!-- /m_editable -->
      </div>
     </div>
     <div class="colelem shared_content" id="u368010" data-content-guid="u368010_content"><!-- custom html -->
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
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <span class="browser_width colelem placeholder" data-placeholder-for="u14008-bw_content"><!-- placeholder node --></span>
    <span class="browser_width colelem placeholder" data-placeholder-for="u14533-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu14481"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u14481-bw">
      <div class="temp_no_id" data-orig-id="u14481"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u14481_align_to_page">
        <div class="clearfix grpelem temp_no_id" data-orig-id="u17704"><!-- group -->
         <div class="clearfix grpelem" id="pu14793"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14793_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u14796_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu14788-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14788-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14788-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14791-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14791-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu14795"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14795_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u14797_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu14789-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14789-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14789-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14792-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14792-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem" id="pu14794"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14794_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u17710_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem" id="pu14790-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14790-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14790-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17707-BP_1024" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u17707-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u14922-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem" id="u370860-bw">
     <div class="temp_no_id" data-orig-id="u370860"><!-- column -->
      <div class="clearfix" id="u370860_align_to_page">
       <span class="clearfix colelem placeholder" data-placeholder-for="u365383_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u368010_content"><!-- placeholder node --></span>
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
    <div class="browser_width colelem temp_no_id" data-orig-id="u14008-bw">
     <div class="temp_no_id" data-orig-id="u14008"><!-- group -->
      <div class="clearfix temp_no_id" data-orig-id="u14008_align_to_page">
       <div class="clearfix grpelem" id="pu14035-4"><!-- column -->
        <!-- m_editable region-id="editable-static-tag-U14035-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u14035-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U14060-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u14060-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix grpelem" id="pppu14014"><!-- group -->
        <div class="clearfix grpelem" id="ppu14014"><!-- column -->
         <div class="clearfix colelem" id="pu14014"><!-- group -->
          <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14014_content"><!-- placeholder node --></span>
          <!-- m_editable region-id="editable-static-tag-U14057-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix grpelem placeholder" data-placeholder-for="u14057-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u14068_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix grpelem" id="pu14054"><!-- column -->
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u14054_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U14351-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u14351-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
    </div>
    <span class="browser_width colelem placeholder" data-placeholder-for="u14533-bw_content"><!-- placeholder node --></span>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu14481"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u14481-bw">
      <div class="temp_no_id" data-orig-id="u14481"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u14481_align_to_page">
        <div class="clearfix grpelem temp_no_id" data-orig-id="u17704"><!-- group -->
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14793"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14793_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u14796_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14788-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14788-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14788-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14791-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14791-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14795"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14795_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u14797_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14789-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14789-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14789-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U14792-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14792-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14794"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u14794_content"><!-- placeholder node --></span>
          <span class="colelem placeholder" data-placeholder-for="u17710_content"><!-- placeholder node --></span>
         </div>
         <div class="clearfix grpelem temp_no_id" data-orig-id="pu14790-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U14790-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u14790-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U17707-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <span class="clearfix colelem placeholder" data-placeholder-for="u17707-4_content"><!-- placeholder node --></span>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u14922-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="browser_width colelem temp_no_id shared_content" data-orig-id="u370860-bw" data-content-guid="u370860-bw_content">
     <div class="temp_no_id" data-orig-id="u370860"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u370860_align_to_page">
       <div class="position_content" id="u370860_position_content">
        <div class="clearfix colelem shared_content" id="u366251" data-content-guid="u366251_content"><!-- column -->
         <div class="clearfix colelem" id="u366292"><!-- group -->
          <div class="clearfix grpelem" id="u366297"><!-- column -->
           <div class="rounded-corners clearfix colelem" id="u366311"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366316-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366316-4" data-muse-uid="U366316" data-muse-type="txt_frame"><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366324-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366324-4" data-muse-uid="U366324" data-muse-type="txt_frame"><!-- content -->
             <p>CASAMENTO</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u366314"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366303-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366303-4" data-muse-uid="U366303" data-muse-type="txt_frame"><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366320-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366320-4" data-muse-uid="U366320" data-muse-type="txt_frame"><!-- content -->
             <p>R$ 1.000,00 a R$ 2.000,00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u366313"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366325-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366325-4" data-muse-uid="U366325" data-muse-type="txt_frame"><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366301-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366301-4" data-muse-uid="U366301" data-muse-type="txt_frame"><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="rounded-corners clearfix colelem" id="u366319"><!-- column -->
            <div class="clearfix colelem" id="u366322"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366321-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366321-4" data-muse-uid="U366321" data-muse-type="txt_frame"><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U366312-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366312-5" data-muse-uid="U366312" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366312">NOME: </span>XXXXXXX XXXXX XX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366317-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366317-5" data-muse-uid="U366317" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366317">TELEFONE:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366315-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366315-5" data-muse-uid="U366315" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366315">CELULAR/WHATSAPP:</span> XXXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366304-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366304-5" data-muse-uid="U366304" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366304">EMAIL:</span> XXXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="u366305"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366299-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366299-4" data-muse-uid="U366299" data-muse-type="txt_frame"><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U366300-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366300-4" data-muse-uid="U366300" data-muse-type="txt_frame"><!-- content -->
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu366302-5"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366302-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366302-5" data-muse-uid="U366302" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u366302">ESTADO:</span> SP</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366298-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366298-5" data-muse-uid="U366298" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u366298">CIDADE:</span> CIDADE TAL</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u366318"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366323-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366323-4" data-muse-uid="U366323" data-muse-type="txt_frame"><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u366306"><!-- column -->
             <!-- m_editable region-id="editable-static-tag-U366307-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366307-4" data-muse-uid="U366307" data-muse-type="txt_frame"><!-- content -->
              <p>2</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366310-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366310-4" data-muse-uid="U366310" data-muse-type="txt_frame"><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366308-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="rounded-corners clearfix colelem" id="u366308-4" data-muse-uid="U366308" data-muse-type="txt_frame"><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366309-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366309-5" data-muse-uid="U366309" data-muse-type="txt_frame"><!-- content -->
              <p id="u366309-3"><span id="u366309">VALOR DO CONTATO:</span><span id="u366309-2"> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="u366252"><!-- group -->
          <div class="clearfix grpelem" id="u366257"><!-- column -->
           <div class="rounded-corners clearfix colelem" id="u366264"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366279-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366279-4" data-muse-uid="U366279" data-muse-type="txt_frame"><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366284-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366284-4" data-muse-uid="U366284" data-muse-type="txt_frame"><!-- content -->
             <p>CASAMENTO</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u366280"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366260-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366260-4" data-muse-uid="U366260" data-muse-type="txt_frame"><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366267-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366267-4" data-muse-uid="U366267" data-muse-type="txt_frame"><!-- content -->
             <p>R$ 1.000,00 a R$ 2.000,00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="u366263"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U366281-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366281-4" data-muse-uid="U366281" data-muse-type="txt_frame"><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366277-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366277-4" data-muse-uid="U366277" data-muse-type="txt_frame"><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="rounded-corners clearfix colelem" id="u366276"><!-- column -->
            <div class="clearfix colelem" id="u366275"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366261-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366261-4" data-muse-uid="U366261" data-muse-type="txt_frame"><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U366282-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366282-5" data-muse-uid="U366282" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366282">NOME: </span>XXXXXXX XXXXX XX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366283-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366283-5" data-muse-uid="U366283" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366283">TELEFONE:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366273-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366273-5" data-muse-uid="U366273" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366273">CELULAR/WHATSAPP:</span> XXXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U366266-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366266-5" data-muse-uid="U366266" data-muse-type="txt_frame"><!-- content -->
             <p><span id="u366266">EMAIL:</span> XXXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="u366286"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366262-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366262-4" data-muse-uid="U366262" data-muse-type="txt_frame"><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id="editable-static-tag-U366259-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u366259-4" data-muse-uid="U366259" data-muse-type="txt_frame"><!-- content -->
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat volutpat. um dolor sit amet, consectetur adipiscing elit. Donec sed dignissim tortor, eu tincidunt risus. Fusce sed pretium lorem. Aliquam erat</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu366258-5"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366258-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366258-5" data-muse-uid="U366258" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u366258">ESTADO:</span> SP</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366285-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366285-5" data-muse-uid="U366285" data-muse-type="txt_frame"><!-- content -->
              <p><span id="u366285">CIDADE:</span> CIDADE TAL</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u366278"><!-- group -->
             <!-- m_editable region-id="editable-static-tag-U366274-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u366274-4" data-muse-uid="U366274" data-muse-type="txt_frame"><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class="clearfix colelem" id="u366268"><!-- column -->
             <!-- m_editable region-id="editable-static-tag-U366272-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366272-4" data-muse-uid="U366272" data-muse-type="txt_frame"><!-- content -->
              <p>2</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366270-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366270-4" data-muse-uid="U366270" data-muse-type="txt_frame"><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366269-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="rounded-corners clearfix colelem" id="u366269-4" data-muse-uid="U366269" data-muse-type="txt_frame"><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id="editable-static-tag-U366271-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix colelem" id="u366271-5" data-muse-uid="U366271" data-muse-type="txt_frame"><!-- content -->
              <p id="u366271-3"><span id="u366271">VALOR DO CONTATO:</span><span id="u366271-2"> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>
         <div class="clearfix colelem" id="u366289"><!-- group -->
          <!-- m_editable region-id="editable-static-tag-U366291-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix grpelem" id="u366291-4" data-muse-uid="U366291" data-muse-type="txt_frame"><!-- content -->
           <p id="u366291-2"><span id="u366291">ANTERIOR</span></p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U366290-BP_768" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="rounded-corners clearfix grpelem" id="u366290-4" data-muse-uid="U366290" data-muse-type="txt_frame"><!-- content -->
           <p id="u366290-2"><span id="u366290">PRÓXIMO</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <span class="colelem placeholder" data-placeholder-for="u368010_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="2073" data-content-above-spacer="2073" data-content-below-spacer="186"></div>
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
     <div class="browser_width colelem temp_no_id" data-orig-id="u14008-bw">
      <div class="temp_no_id" data-orig-id="u14008"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u14008_align_to_page">
        <div class="clearfix colelem temp_no_id" data-orig-id="pu14035-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14035-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u14035-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14014_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem" id="pu14060-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14060-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u14060-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14068_content"><!-- placeholder node --></span>
        </div>
        <div class="clearfix colelem" id="pu14057-4"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U14057-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="clearfix grpelem placeholder" data-placeholder-for="u14057-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14054_content"><!-- placeholder node --></span>
         <!-- m_editable region-id="editable-static-tag-U14351-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14351-4_content"><!-- placeholder node --></span>
         <!-- /m_editable -->
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u14533-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu14481"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u14481-bw">
       <div class="temp_no_id" data-orig-id="u14481"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u14481_align_to_page">
         <div class="clearfix grpelem temp_no_id" data-orig-id="u17704"><!-- column -->
          <div class="clearfix colelem temp_no_id" data-orig-id="pu14793"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u14793_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U14788-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u14788-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu14795"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u14795_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U14789-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u14789-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu14794"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u14794_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U14790-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u14790-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu14796"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u14796_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U14791-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u14791-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu14797"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u14797_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U14792-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u14792-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu17710"><!-- group -->
           <span class="grpelem placeholder" data-placeholder-for="u17710_content"><!-- placeholder node --></span>
           <!-- m_editable region-id="editable-static-tag-U17707-BP_480" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <span class="clearfix grpelem placeholder" data-placeholder-for="u17707-4_content"><!-- placeholder node --></span>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u14922-bw_content"><!-- placeholder node --></span>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u370860-bw_content"><!-- placeholder node --></span>
     <div class="verticalspacer" data-offset-top="2179" data-content-above-spacer="2179" data-content-below-spacer="186"></div>
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
     <div class="browser_width colelem temp_no_id" data-orig-id="u14008-bw">
      <div class="temp_no_id" data-orig-id="u14008"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u14008_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U14035-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14035-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14014_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu14060-4"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U14060-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u14060-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14068_content"><!-- placeholder node --></span>
     </div>
     <div class="clearfix colelem temp_no_id" data-orig-id="pu14057-4"><!-- group -->
      <!-- m_editable region-id="editable-static-tag-U14057-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="clearfix grpelem placeholder" data-placeholder-for="u14057-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
      <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14054_content"><!-- placeholder node --></span>
      <!-- m_editable region-id="editable-static-tag-U14351-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <span class="rounded-corners clearfix grpelem placeholder" data-placeholder-for="u14351-4_content"><!-- placeholder node --></span>
      <!-- /m_editable -->
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u14533-bw_content"><!-- placeholder node --></span>
     <span class="browser_width colelem placeholder" data-placeholder-for="u14922-bw_content"><!-- placeholder node --></span>
     <div class="clearfix colelem temp_no_id" data-orig-id="u14481"><!-- group -->
      <div class="clearfix grpelem temp_no_id" data-orig-id="u17704"><!-- column -->
       <div class="clearfix colelem temp_no_id" data-orig-id="pu14793"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u14793_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U14788-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14788-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu14795"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u14795_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U14789-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14789-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu14794"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u14794_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U14790-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14790-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu14796"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u14796_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U14791-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14791-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu14797"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u14797_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U14792-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u14792-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem temp_no_id" data-orig-id="pu17710"><!-- group -->
        <span class="grpelem placeholder" data-placeholder-for="u17710_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U17707-BP_320" template="filtro.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix grpelem placeholder" data-placeholder-for="u17707-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u370860-bw">
      <div class="temp_no_id" data-orig-id="u370860"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u370860_align_to_page">
        <span class="clearfix colelem placeholder" data-placeholder-for="u366251_content"><!-- placeholder node --></span>
        <span class="colelem placeholder" data-placeholder-for="u368010_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="2166" data-content-above-spacer="2166" data-content-below-spacer="185"></div>
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
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=36584860" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
