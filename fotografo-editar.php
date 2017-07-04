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
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "fotografo-editar.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Fotógrafo-Editar</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=66908463"/>
  <link rel="stylesheet" type="text/css" href="css/fotografo-editar.css?crc=3762533354" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_fotografo-editar.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4177069693"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_fotografo-editar.css?crc=3840281491" id="nomq_pagesheet"/>
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
<?php  include('head_pages/head_edit_foto.php'); ?>  

  <script type="text/javascript">
           $(document).ready(function(){           
              
               var foto_email = $('#foto_email').val();
               var foto_senha = $('#foto_senha').val();
               var foto_ident = $('#foto_ident').val();

               $('#bp_infinity').css('margin-top','-1.1%');



               
               if( (foto_email != " " && foto_senha != " " && foto_ident != " ") ){
                    $('#u217721-4').hide();
                    $('#u11522').show();
                    $('#u292004-4-bw').hide();
                    $('#u292003-4').hide();

            /* perfil imagem topo */ 

            

            /* perfil sair topo */
            

            /* boas vindas topo */
            $('#u330134-8').children().remove('p'); 
            $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'> Sair</a> </p> ");


            if (foto_email != " ") {
                $('#u350754-11').children().remove(); 
                    var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PERFIL</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro02' href='historico.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>HISTÓRICO</a></p> ";
                    $('#u350754-11').append(link_foto);


                $('#u25394').css("background","transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != ''){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>')  no-repeat center center / contain");
                      $('#u25394').css('background-size','100% 100%');
                $('#u25394').css({                  
                  'background-clip': 'padding-box',
                  'background-size': 'cover',
                  'background-position': 'center'
                });




              $('#u56594-5').children().remove();  
              $('#u56594-5').attr('href', 'fotografo-minha-conta.php');
              $('#u56594-5').append('<p>MINHA CONTA</p>');
              /* barra filtro foto */
             
              $('#u56593-5').children().remove();
              $('#u56593-5').attr('href', 'filtro.php');
              $('#u56593-5').append('<p>LISTA DE PEDIDOS</p>');


                $('#u25395-4').children().remove();
                $('#u25395-4').append('<?= $cli_nome ?>');
                      

                     /* -------------------------------- Parte 01 ----------------------------------------------*/

                      if(foto_ident == 'FF'){                        
                        $('#nome').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CPF</p>');
                        $('#doc_foto').mask("999.999.999-99");
                        $('#cep').mask("99999-999");
                        $('#doc_foto').attr('value','<?= $cli_cpf ?>');
                        $('#val_foto').attr('value','cpf');


                        /* esconde nome emp */
                        
                        $('#nome_emp').attr('value','<?= $cli_emp ?>');
                        

                        /* muda cnpj para cpf */
                        $('#u217740-4').children().remove();
                        $('#u217740-4').append('<p>CPF</p>');
                      }else if(foto_ident == 'FJ'){
                        $('#nome_emp').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CNPJ</p>');
                        $('#doc_foto').mask("99.999.999/9999-99");
                        $('#doc_foto').attr('value','<?= isset($cli_cnpj)? $cli_cnpj : " " ?>');
                        $('#val_foto').attr('value','cnpj');

                      }

                      /* email */
                      $('#val_email').attr('value','<?= $cli_email ?>');  

                      /* celular */
                      $('#cel').attr('value','<?= $cli_cel ?>');                 


                      /* Telefone */
                      $('#tel').attr('value','<?= $cli_tel ?>');

                      /* CPF */

                      /* Endereco */
                      $('#endereco').attr('value','<?= $cli_end ?>');                      

                       /* Numero */
                       $('#num').attr('value','<?= $cli_num ?>');

                       /* cep */

                       $('#cep').attr('value','<?= $cli_cep ?>');

                      /* Estado */
                      var estado = '<?php echo $cli_estado ?>'; 
                      //alert($('#estado option').size());
                     // alert($('#estado :nth-child(4)').text() );
                      for(var i = 1; i <= $('#estado option').size(); i++){
                          if($("#estado :nth-child("+i+")").text() == estado){
                            $("#estado :nth-child("+i+")").prop('selected',true);
                            seleCidade($("#estado :nth-child("+i+")").val() );
                          }
                      }

                      $('#estado_foto').append("<?= $cli_estado ?>");

                      /* Cidade */
                      $('#cidade_foto').append("<?= $cli_cidade ?>");

                      /* email */
                      $('#email_foto').append("<?= $cli_email ?>");

                      /* comentário */
                      
                      $('#text_area').prop('value','<?= $cli_comentario ?>');

                      /* -------------------------------- Parte 02 ----------------------------------------------*/

                      if(foto_ident == 'FF'){                        
                        $('#nome02').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CPF</p>');
                        $('#doc_foto02').mask("999.999.999-99");
                        $('#doc_foto02').attr('value','<?= $cli_cpf ?>');
                        $('#val_foto02').attr('value','cpf');


                        /* enconde nome emp */
                        
                        $('#nome_emp02').attr('value','<?= $cli_emp ?>');
                        
                      }else if(foto_ident == 'FJ'){
                        $('#nome_emp02').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CNPJ</p>');
                        $('#doc_foto02').mask("99.999.999/9999-99");
                        $('#doc_foto02').attr('value','<?= isset($cli_cnpj)? $cli_cnpj : " " ?>');
                        $('#val_foto02').attr('value','cnpj');

                      }

                      /* email */
                      $('#val_email02').attr('value','<?= $cli_email ?>');  

                      /* celular */
                      $('#cel02').attr('value','<?= $cli_cel ?>');                 


                      /* Telefone */
                      $('#tel02').attr('value','<?= $cli_tel ?>');

                      /* CPF */

                      /* Endereco */
                      $('#endereco02').attr('value','<?= $cli_end ?>');                      

                       /* Numero */
                       $('#num02').attr('value','<?= $cli_num ?>');

                      /* Estado */
                      var estado = '<?php echo $cli_estado ?>'; 
                      //alert($('#estado option').size());
                     // alert($('#estado :nth-child(4)').text() );
                      for(var i = 1; i <= $('#estado02 option').size(); i++){
                          if($("#estado02 :nth-child("+i+")").text() == estado){
                            $("#estado02 :nth-child("+i+")").prop('selected',true);
                            seleCidade($("#estado02 :nth-child("+i+")").val() );
                          }
                      }

                      $('#estado_foto02').append("<?= $cli_estado ?>");

                      /* Cidade */
                      $('#cidade_foto02').append("<?= $cli_cidade ?>");

                      /* email */
                      $('#email_foto02').append("<?= $cli_email ?>");

                      /* comentário */
                      
                      $('#text_area02').prop('value','<?= $cli_comentario ?>');

                      /*  --------------------------- end 02 --------------------*/


                      /* -------------------------------- Parte 03 ----------------------------------------------*/

                      if(foto_ident == 'FF'){                        
                        $('#nome03').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CPF</p>');
                        $('#doc_foto03').mask("999.999.999-99");
                        $('#doc_foto03').attr('value','<?= $cli_cpf ?>');
                        $('#val_foto03').attr('value','cpf');


                        /* enconde nome emp */
                        
                        $('#nome_emp03').attr('value','<?= $cli_emp  ?>');
                        

                        /* esconde cnpj e sub cpf */
                        $('#u219377-4').children().remove();
                        $('#u219377-4').append('<p>CPF</p>');
                      }else if(foto_ident == 'FJ'){
                        $('#nome_emp03').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CNPJ</p>');
                        $('#doc_foto03').mask("99.999.999/9999-99");
                        $('#doc_foto03').attr('value','<?= isset($cli_cnpj)? $cli_cnpj : " " ?>');
                        $('#val_foto03').attr('value','cnpj');

                      }

                      /* email */
                      $('#email03').attr('value','<?= $cli_email ?>');  

                      /* celular */
                      $('#cel03').attr('value','<?= $cli_cel ?>');                 


                      /* Telefone */
                      $('#tel03').attr('value','<?= $cli_tel ?>');

                      /* CPF */

                      /* Endereco */
                      $('#endereco03').attr('value','<?= $cli_end ?>');                      

                       /* Numero */
                       $('#num03').attr('value','<?= $cli_num ?>');

                       /* cep */
                       $('#cep03').attr('value','<?= $cli_cep ?>');

                      /* Estado */
                      var estado = '<?php echo $cli_estado ?>'; 
                      //alert($('#estado option').size());
                     // alert($('#estado :nth-child(4)').text() );
                      for(var i = 1; i <= $('#estado02 option').size(); i++){
                          if($("#estado02 :nth-child("+i+")").text() == estado){
                            $("#estado02 :nth-child("+i+")").prop('selected',true);
                            seleCidade($("#estado02 :nth-child("+i+")").val() );
                          }
                      }

                      $('#estado_foto03').append("<?= $cli_estado ?>");

                      /* Cidade */
                      $('#cidade_foto03').append("<?= $cli_cidade ?>");

                      /* email */
                      $('#email_foto03').append("<?= $cli_email ?>");

                      /* comentário */
                      
                      $('#text_area03').prop('value','<?= $cli_comentario ?>');

                      /*  --------------------------- end 03 --------------------*/


                      /* -------------------------------- Parte 04 ----------------------------------------------*/

                      if(foto_ident == 'FF'){                        
                        $('#nome04').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CPF</p>');
                        $('#doc_foto04').mask("999.999.999-99");
                        $('#doc_foto04').attr('value','<?= $cli_cpf ?>');
                        $('#val_foto04').attr('value','cpf');


                        /* enconde nome emp */
                        $('#nome_emp04').attr('value','<?= $cli_emp ?>');
                        

                        
                        /* esconde cnpj e coloca cpf */
                        $('#u223171-4').children().remove();
                        $('#u223171-4').append('<p>CPF</p>');
                      }else if(foto_ident == 'FJ'){
                        $('#nome_emp04').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CNPJ</p>');
                        $('#doc_foto04').mask("99.999.999/9999-99");
                        $('#doc_foto04').attr('value','<?= isset($cli_cnpj)? $cli_cnpj : " " ?>');
                        $('#val_foto04').attr('value','cnpj');

                      }

                      /* email */
                      $('#email04').attr('value','<?= $cli_email ?>');  

                      /* celular */
                      $('#cel04').attr('value','<?= $cli_cel ?>');                 


                      /* Telefone */
                      $('#tel04').attr('value','<?= $cli_tel ?>');

                      /* CPF */

                      /* Endereco */
                      $('#endereco04').attr('value','<?= $cli_end ?>');                      

                       /* Numero */
                       $('#num04').attr('value','<?= $cli_num ?>');

                       /* cep */

                       $('#cep04').attr('value','<?= $cli_cep ?>');

                      /* Estado */
                      var estado = '<?php echo $cli_estado ?>'; 
                      //alert($('#estado option').size());
                     // alert($('#estado :nth-child(4)').text() );
                      for(var i = 1; i <= $('#estado04 option').size(); i++){
                          if($("#estado04 :nth-child("+i+")").text() == estado){
                            $("#estado04 :nth-child("+i+")").prop('selected',true);
                            seleCidade($("#estado04 :nth-child("+i+")").val() );
                          }
                      }

                      $('#estado_foto04').append("<?= $cli_estado ?>");

                      /* Cidade */
                      $('#cidade_foto04').append("<?= $cli_cidade ?>");

                      /* email */
                      $('#email_foto04').append("<?= $cli_email ?>");

                      /* comentário */
                      
                      $('#text_area04').prop('value','<?= $cli_comentario ?>');

                      /*  --------------------------- end 04 --------------------*/
                      


                      /* -------------------------------- Parte 05 ----------------------------------------------*/

                      if(foto_ident == 'FF'){                        
                        $('#nome05').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CPF</p>');
                        $('#doc_foto05').mask("999.999.999-99");
                        $('#doc_foto05').attr('value','<?= $cli_cpf ?>');
                        $('#val_foto05').attr('value','cpf');


                        /* enconde nome emp */
                        $('#u47739').hide();
                        $('#nome_emp05').hide();
                        $('#u47726-4').hide();
                      }else if(foto_ident == 'FJ'){
                        $('#nome_emp05').attr('value','<?= $cli_nome ?>');
                        $('#u47794-4').children().remove();
                        $('#u47794-4').append('<p>CNPJ</p>');
                        $('#doc_foto05').mask("99.999.999/9999-99");
                        $('#doc_foto05').attr('value','<?= isset($cli_cnpj)? $cli_cnpj : " " ?>');
                        $('#val_foto05').attr('value','cnpj');

                      }

                      /* email */
                      $('#val_email05').attr('value','<?= $cli_email ?>');  

                      /* celular */
                      $('#cel05').attr('value','<?= $cli_cel ?>');                 


                      /* Telefone */
                      $('#tel05').attr('value','<?= $cli_tel ?>');

                      /* CPF */

                      /* Endereco */
                      $('#endereco05').attr('value','<?= $cli_end ?>');                      

                       /* Numero */
                       $('#num05').attr('value','<?= $cli_num ?>');

                      /* Estado */
                      var estado = '<?php echo $cli_estado ?>'; 
                      //alert($('#estado option').size());
                     // alert($('#estado :nth-child(4)').text() );
                      for(var i = 1; i <= $('#estado05 option').size(); i++){
                          if($("#estado05 :nth-child("+i+")").text() == estado){
                            $("#estado05 :nth-child("+i+")").prop('selected',true);
                            seleCidade($("#estado05 :nth-child("+i+")").val() );
                          }
                      }

                      $('#estado_foto05').append("<?= $cli_estado ?>");

                      /* Cidade */
                      $('#cidade_foto05').append("<?= $cli_cidade ?>");

                      /* email */
                      $('#email_foto05').append("<?= $cli_email ?>");

                      /* comentário */
                      
                      $('#text_area05').prop('value','<?= $cli_comentario ?>');

                      /*  --------------------------- end 05 --------------------*/
                      
                      





                      /* serviços */
                      $('#u46897-50').children().remove();
                     var inserirString = "";

                      var especi_array = <?php echo json_encode($especi_array); ?>
                      
                      for(var i=1; i< especi_array.length; i++){
                        //alert(especi_array[i]);                        
                        $("input[name='Pedido[]']").each(function(){
                            if($(this).val() == especi_array[i] ){
                              $(this).prop('checked',true);
                            }
                        });
                      }

                      /* Edicao  */
                      var edicao_array = <?php echo json_encode($edicao_array); ?>

                      for(var i=0; i< edicao_array.length; i++){
                        $("input[name='Edicao[]']").each(function(){
                            if($(this).val() == edicao_array[i]){
                              $(this).prop('checked',true);
                            }
                        });
                      }


                      /* Parte dos Ultimos contatos */

                      /* Servicos */
                      $('#u28816-4').children().remove();
                      $('#u28816-4').append('<?= isset($ulti_servico)? $ulti_servico : ' ' ?>');

                      /* Nome */
                      $('#u28814-4').children().remove();
                      $('#u28814-4').append('<?= isset($ulti_nome)? $ulti_nome : ' ' ?>');

                      /* Email */
                      $('#email').attr('value','<?= $cli_email ?>');

                      /* Celular */
                      $('#u28818-4').children().remove();
                      $('#u28818-4').append('<?= isset($ulti_cel)? $ulti_cel : ' ' ?>');

                      /* Telefone */
                      $('#u28813-4').children().remove();
                      $('#u28813-4').append('<?= isset($ulti_tel)? $ulti_tel : ' ' ?>');


                   }         
                  
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

               $('#perf_top_sair02').click(function(){
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

               function seleCidade(id_estado){
                  var cidade = '<?php echo $cli_cidade ?>';
                  $.ajax({
                    type: "POST",
                    url:  "servicos/lista_cidade.php?id="+id_estado,
                    dataType: 'text',
                    success: function(res){
                      $('#cidade').children('.cidades').remove();
                      $('#cidade').append(res);
                      $('#cidade').removeAttr('disabled').focus();
                      
                        for(var i = 1; i<= $('#cidade option').size(); i++){
                           if($("#cidade :nth-child("+i+")").text() == cidade){
                              $("#cidade :nth-child("+i+")").prop('selected',true);
                              //alert("Aqui esta a cidade selecionada: "+$("#cidade :nth-child("+i+")").text());
                            }
                        }
                     }
                  });


                  $.ajax({
                    type: "POST",
                    url:  "servicos/lista_cidade.php?id="+id_estado,
                    dataType: 'text',
                    success: function(res){
                      $('#cidade02').children('.cidades').remove();
                      $('#cidade02').append(res);
                      $('#cidade02').removeAttr('disabled').focus();
                      
                        for(var i = 1; i<= $('#cidade option').size(); i++){
                           if($("#cidade02 :nth-child("+i+")").text() == cidade){
                              $("#cidade02 :nth-child("+i+")").prop('selected',true);
                              //alert("Aqui esta a cidade selecionada: "+$("#cidade :nth-child("+i+")").text());
                            }
                        }
                     }
                  });


                  $.ajax({
                    type: "POST",
                    url:  "servicos/lista_cidade.php?id="+id_estado,
                    dataType: 'text',
                    success: function(res){
                      $('#cidade03').children('.cidades').remove();
                      $('#cidade03').append(res);
                      $('#cidade03').removeAttr('disabled').focus();
                      
                        for(var i = 1; i<= $('#cidade option').size(); i++){
                           if($("#cidade03 :nth-child("+i+")").text() == cidade){
                              $("#cidade03 :nth-child("+i+")").prop('selected',true);
                              //alert("Aqui esta a cidade selecionada: "+$("#cidade :nth-child("+i+")").text());
                            }
                        }
                     }
                  });


                  $.ajax({
                    type: "POST",
                    url:  "servicos/lista_cidade.php?id="+id_estado,
                    dataType: 'text',
                    success: function(res){
                      $('#cidade04').children('.cidades').remove();
                      $('#cidade04').append(res);
                      $('#cidade04').removeAttr('disabled').focus();
                      
                        for(var i = 1; i<= $('#cidade option').size(); i++){
                           if($("#cidade04 :nth-child("+i+")").text() == cidade){
                              $("#cidade04 :nth-child("+i+")").prop('selected',true);
                              //alert("Aqui esta a cidade selecionada: "+$("#cidade :nth-child("+i+")").text());
                            }
                        }
                     }
                  });

                  $.ajax({
                    type: "POST",
                    url:  "servicos/lista_cidade.php?id="+id_estado,
                    dataType: 'text',
                    success: function(res){
                      $('#cidade05').children('.cidades').remove();
                      $('#cidade05').append(res);
                      $('#cidade05').removeAttr('disabled').focus();
                      
                        for(var i = 1; i<= $('#cidade05 option').size(); i++){
                           if($("#cidade05 :nth-child("+i+")").text() == cidade){
                              $("#cidade05 :nth-child("+i+")").prop('selected',true);
                              //alert("Aqui esta a cidade selecionada: "+$("#cidade :nth-child("+i+")").text());
                            }
                        }
                     }
                  });
               }


            $('#estado').change(function(){
              var id = $(this).val();
              $.ajax({
                type: "POST",
                url:  "servicos/lista_cidade.php?id="+id,
                dataType: "text",
                success: function(res){
                  $('#cidade').children('.cidades').remove();
                  $('#cidade').append(res);
                  $('#cidade').removeAttr('disabled').focus();
               
                  }
                });   
            });

            $('#estado02').change(function(){
              var id = $(this).val();
              $.ajax({
                type: "POST",
                url:  "servicos/lista_cidade.php?id="+id,
                dataType: "text",
                success: function(res){
                  $('#cidade02').children('.cidades').remove();
                  $('#cidade02').append(res);
                  $('#cidade02').removeAttr('disabled').focus();
               
                  }
                });   
            });

            $('#estado03').change(function(){
              var id = $(this).val();
              $.ajax({
                type: "POST",
                url:  "servicos/lista_cidade.php?id="+id,
                dataType: "text",
                success: function(res){
                  $('#cidade03').children('.cidades').remove();
                  $('#cidade03').append(res);
                  $('#cidade03').removeAttr('disabled').focus();
               
                  }
                });   
            });

            $('#estado04').change(function(){
              var id = $(this).val();
              $.ajax({
                type: "POST",
                url:  "servicos/lista_cidade.php?id="+id,
                dataType: "text",
                success: function(res){
                  $('#cidade04').children('.cidades').remove();
                  $('#cidade04').append(res);
                  $('#cidade04').removeAttr('disabled').focus();
               
                  }
                });   
            });


            $('#estado05').change(function(){
              var id = $(this).val();
              $.ajax({
                type: "POST",
                url:  "servicos/lista_cidade.php?id="+id,
                dataType: "text",
                success: function(res){
                  $('#cidade05').children('.cidades').remove();
                  $('#cidade05').append(res);
                  $('#cidade05').removeAttr('disabled').focus();
               
                  }
                });   
            });









            /*--------------------------------------- parte --------------------------------------------------*/


             $('#frm_cad_foto').submit(function(event){

                var foto_nome   = $('#nome').val();
                var foto_emp    = $('#nome_emp').val();
                var foto_end    = $('#endereco').val();
                var foto_num    = $('#num').val();
                var foto_cpf    = $('#cpf').val();
                var foto_cnpj   = $('#cnpj').val();
                var foto_tel    = $('#tel').val();
                var foto_cel    = $("#cel").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf').val();
                    var cpf_passa = document.getElementById('val_cpf');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj').val();
                    var cnpj_passa = document.getElementById('val_cnpj');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }

                if( !($('#senha').val() == $('#senhaConf').val()) ){                  
                  msgError = "As senha não é igual ao campo confirmar senha!";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();

                }else if($('#email').val() == ''){                    
                    msgError = "Por favor digite o seu email!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!ValidarEmail($('#email').val()) ){
                    msgError = "Por favor Digite seu email corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_nome != null || foto_emp != null)){
                    msgError = "Por favor digite o nome corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_end == ''){
                    msgError = "Por favor digite o seu endereço!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_num == ''){
                    msgError = "Por favor digite o número de sua residencia!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_coment == ''){
                    msgError = "Por favor digite seu comentário!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!$("input[name='Pedido[]']:checked").val() ){
                    msgError = "Por favor selecione o tipo de serviço que você faz!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_tel != '' || foto_cel != '')){
                    msgError = "Por favor digite o número do seu telefone ou celular!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();
                }

                
            });



            $('#frm_cad_foto02').submit(function(event){

                var foto_nome   = $('#nome02').val();
                var foto_emp    = $('#nome_emp02').val();
                var foto_end    = $('#endereco02').val();
                var foto_num    = $('#num02').val();
                var foto_cpf    = $('#cpf02').val();
                var foto_cnpj   = $('#cnpj02').val();
                var foto_tel    = $('#tel02').val();
                var foto_cel    = $("#cel02").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf').val();
                    var cpf_passa = document.getElementById('val_cpf02');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj').val();
                    var cnpj_passa = document.getElementById('val_cnpj02');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }

                if( !($('#senha02').val() == $('#senhaConf02').val()) ){                  
                  msgError = "As senha não é igual ao campo confirmar senha!";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();

                }else if($('#email02').val() == ''){                    
                    msgError = "Por favor digite o seu email!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!ValidarEmail($('#email02').val()) ){
                    msgError = "Por favor Digite seu email corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_nome != null || foto_emp != null)){
                    msgError = "Por favor digite o nome corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_end == ''){
                    msgError = "Por favor digite o seu endereço!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_num == ''){
                    msgError = "Por favor digite o número de sua residencia!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_coment == ''){
                    msgError = "Por favor digite seu comentário!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!$("input[name='Pedido[]']:checked").val() ){
                    msgError = "Por favor selecione o tipo de serviço que você faz!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_tel != '' || foto_cel != '')){
                    msgError = "Por favor digite o número do seu telefone ou celular!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();
                }

                
            });



            $('#frm_cad_foto03').submit(function(event){

                var foto_nome   = $('#nome03').val();
                var foto_emp    = $('#nome_emp03').val();
                var foto_end    = $('#endereco03').val();
                var foto_num    = $('#num03').val();
                var foto_cpf    = $('#cpf03').val();
                var foto_cnpj   = $('#cnpj03').val();
                var foto_tel    = $('#tel03').val();
                var foto_cel    = $("#cel03").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf').val();
                    var cpf_passa = document.getElementById('val_cpf03');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj').val();
                    var cnpj_passa = document.getElementById('val_cnpj03');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }

                if( !($('#senha03').val() == $('#senhaConf03').val()) ){                  
                  msgError = "As senha não é igual ao campo confirmar senha!";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();

                }else if($('#email03').val() == ''){                    
                    msgError = "Por favor digite o seu email!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!ValidarEmail($('#email03').val()) ){
                    msgError = "Por favor Digite seu email corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_nome != null || foto_emp != null)){
                    msgError = "Por favor digite o nome corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_end == ''){
                    msgError = "Por favor digite o seu endereço!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_num == ''){
                    msgError = "Por favor digite o número de sua residencia!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_coment == ''){
                    msgError = "Por favor digite seu comentário!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!$("input[name='Pedido[]']:checked").val() ){
                    msgError = "Por favor selecione o tipo de serviço que você faz!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_tel != '' || foto_cel != '')){
                    msgError = "Por favor digite o número do seu telefone ou celular!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();
                }

                
            });



            $('#frm_cad_foto04').submit(function(event){

                var foto_nome   = $('#nome').val();
                var foto_emp    = $('#nome_emp').val();
                var foto_end    = $('#endereco').val();
                var foto_num    = $('#num').val();
                var foto_cpf    = $('#cpf').val();
                var foto_cnpj   = $('#cnpj').val();
                var foto_tel    = $('#tel').val();
                var foto_cel    = $("#cel").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf').val();
                    var cpf_passa = document.getElementById('val_cpf04');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj04' ){
                    var cnpj_val   = $('#cnpj').val();
                    var cnpj_passa = document.getElementById('val_cnpj');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }

                if( !($('#senha04').val() == $('#senhaConf').val()) ){                  
                  msgError = "As senha não é igual ao campo confirmar senha!";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();

                }else if($('#email04').val() == ''){                    
                    msgError = "Por favor digite o seu email!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!ValidarEmail($('#email04').val()) ){
                    msgError = "Por favor Digite seu email corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_nome != null || foto_emp != null)){
                    msgError = "Por favor digite o nome corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_end == ''){
                    msgError = "Por favor digite o seu endereço!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_num == ''){
                    msgError = "Por favor digite o número de sua residencia!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_coment == ''){
                    msgError = "Por favor digite seu comentário!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!$("input[name='Pedido[]']:checked").val() ){
                    msgError = "Por favor selecione o tipo de serviço que você faz!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_tel != '' || foto_cel != '')){
                    msgError = "Por favor digite o número do seu telefone ou celular!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();
                }

                
            });



            $('#frm_cad_foto05').submit(function(event){

                var foto_nome   = $('#nome05').val();
                var foto_emp    = $('#nome_emp05').val();
                var foto_end    = $('#endereco05').val();
                var foto_num    = $('#num05').val();
                var foto_cpf    = $('#cpf05').val();
                var foto_cnpj   = $('#cnpj05').val();
                var foto_tel    = $('#tel05').val();
                var foto_cel    = $("#cel05").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf05').val();
                    var cpf_passa = document.getElementById('val_cpf05');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj05').val();
                    var cnpj_passa = document.getElementById('val_cnpj05');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }

                if( !($('#senha05').val() == $('#senhaConf05').val()) ){                  
                  msgError = "As senha não é igual ao campo confirmar senha!";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();

                }else if($('#email05').val() == ''){                    
                    msgError = "Por favor digite o seu email!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!ValidarEmail($('#email05').val()) ){
                    msgError = "Por favor Digite seu email corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_nome != null || foto_emp != null)){
                    msgError = "Por favor digite o nome corretamente";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_end == ''){
                    msgError = "Por favor digite o seu endereço!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_num == ''){
                    msgError = "Por favor digite o número de sua residencia!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(foto_coment == ''){
                    msgError = "Por favor digite seu comentário!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!$("input[name='Pedido[]']:checked").val() ){
                    msgError = "Por favor selecione o tipo de serviço que você faz!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();

                }else if(!(foto_tel != '' || foto_cel != '')){
                    msgError = "Por favor digite o número do seu telefone ou celular!";
                    MsgErrorCadFoto(msgError);
                    event.preventDefault();
                }

                //event.preventDefault();
            });

            function ValidarEmail(email) {
            var emailCheck = email;
            var ExRegEmail = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/;
            if (!((emailCheck.match(ExRegEmail)) && (emailCheck != ""))) {
               
                return false;
            } else {
                return true;
            }
        }


        function MsgErrorCadFoto(msg){
          $('#u185455-4').show();
          $('#u185455-4').children().remove();
          $('#u185455-4').append("<p>"+msg+"</p>");

          $('#u217721-4').show();
          $('#u217721-4').children().remove();
          $('#u217721-4').append("<p>"+msg+"</p>");

          $('#u219379-4').show();
          $('#u219379-4').children().remove();
          $('#u219379-4').append("<p>"+msg+"</p>");

          $('#u223050-4').show();
          $('#u223050-4').children().remove();
          $('#u223050-4').append("<p>"+msg+"</p>");



        }


        var fileCollection = new Array();
        $('#file_foto').on('change', function(e){

          var ext = $('#file_foto').val().split('.').pop().toLowerCase();
          alert(ext);
          alert($.inArray(ext,['gif','png','jpg','jpeg']));
          if($.inArray(ext,['gif','png','jpg','jpeg']) > -1){
            var files = e.target.files;

            $.each(files, function(i,file){
              fileCollection.push(file);

              var reader = new FileReader();
              reader.readAsDataURL(file);
              reader.onload = function(e){
                var imagem = e.target.result;
                $('#u25394').css("background","transparent url("+e.target.result+") no-repeat center center / contain");
               /* $('#u25394').css({
                  'width': '200px',
                  'height': '200px',
                  'background-position': 'center'
                }); */
                
                $('#u25394').css({                  
                  'background-clip': 'padding-box',
                  'background-size': 'cover',
                  'background-position': 'center'
                });

              };

            });  
          }else{ /* Fim da validação da extenção*/
            alert('Por favor coloque uma foto extenção gif, png, jpg ou jpeg');
          }                     

        });




    });
  </script>





<style type="text/css">
  
  #estado {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }

 #estado02 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade02 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade02:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }



#estado03 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade03 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade03:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }


 #estado04 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade04 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade04:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }



 #estado05 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade05 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade05:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
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
    <div class="clearfix grpelem shared_content" id="pu25393" data-content-guid="pu25393_content"><!-- group -->
     <div class="browser_width grpelem" id="u25393-bw">
      <div class="museBGSize" id="u25393"><!-- group -->
       <div class="clearfix" id="u25393_align_to_page">
        <div class="museBGSize rounded-corners clearfix grpelem" id="u25394"><!-- group -->
         <div class="museBGSize rounded-corners clearfix grpelem shared_content" id="u28165" data-content-guid="u28165_content1"><!-- group -->
          <div class="grpelem shared_content" id="u363604" data-content-guid="u363604_content"><!-- custom html -->
           <form method="POST" action="helper/path_alter_cli.php" enctype="multipart/form-data" id="frm_cad_foto">
<input type="hidden" id="val_foto" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj" name="txt_cnpj_foto" value="" />

<input type="file" id="file_foto" class="inputfile" name="img_foto" style="width: 100%; height: 100%; opacity: 0; overflow:  hidden; position: absolute; z-index: -1;  cursor: pointer;" maxlength="50"/>

        

         <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />  
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem shared_content" id="u227051-bw" data-content-guid="u227051-bw_content">
      <div class="gradient" id="u227051"><!-- group -->
       <div class="clearfix" id="u227051_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U25395-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u25395-4" data-muse-uid="U25395" data-muse-type="txt_frame"><!-- content -->
         <p>BEM-VINDO</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
     </div>
    </div>
    <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div id="u56895-wrapper">
     <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="grpelem" id="u217643"><!-- custom html -->
     <form method="POST" action="helper/path_alter_cli.php" id="frm_cad_foto">
<input type="hidden" id="email" name="txt_email_foto" maxlength="50"/> 
    </div>
    <div class="clearfix grpelem" id="pu219067-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U219067-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix colelem shared_content" id="u219067-4" data-muse-uid="U219067" data-muse-type="txt_frame" data-content-guid="u219067-4_content"><!-- content -->
      <p>PASSO 1</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U219066-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix colelem shared_content" id="u219066-4" data-muse-uid="U219066" data-muse-type="txt_frame" data-content-guid="u219066-4_content"><!-- content -->
      <p>ATUALIZE SEUS DADOS PESSOAIS</p>
     </div>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="u217644"><!-- group -->
      <div class="clearfix grpelem" id="u217645"><!-- column -->
       <div class="clearfix colelem" id="pu217673-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U217673-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217673-4" data-muse-uid="U217673" data-muse-type="txt_frame"><!-- content -->
         <p>NOME COMPLETO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217677-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217677-4" data-muse-uid="U217677" data-muse-type="txt_frame"><!-- content -->
         <p>NOME DA EMPRESA</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu217735"><!-- group -->
        <div class="rounded-corners grpelem" id="u217735"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U217664-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217664-4" data-muse-uid="U217664" data-muse-type="txt_frame"><!-- content -->
         <p>TELEFONE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217707-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217707-4" data-muse-uid="U217707" data-muse-type="txt_frame"><!-- content -->
         <p>CELULAR</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217716-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217716-4" data-muse-uid="U217716" data-muse-type="txt_frame"><!-- content -->
         <p>EMAIL</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217682-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217682-4" data-muse-uid="U217682" data-muse-type="txt_frame"><!-- content -->
         <p>NÚMERO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217703-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217703-4" data-muse-uid="U217703" data-muse-type="txt_frame"><!-- content -->
         <p>ESTADO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217744-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217744-4" data-muse-uid="U217744" data-muse-type="txt_frame"><!-- content -->
         <p>CEP</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217680-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217680-4" data-muse-uid="U217680" data-muse-type="txt_frame"><!-- content -->
         <p>ENDEREÇO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217698-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217698-4" data-muse-uid="U217698" data-muse-type="txt_frame"><!-- content -->
         <p>CIDADE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217740-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217740-4" data-muse-uid="U217740" data-muse-type="txt_frame"><!-- content -->
         <p>CNPJ</p>
        </div>
        <!-- /m_editable -->
        <div class="clearfix grpelem" id="u217747"><!-- group -->
         <div class="clearfix grpelem" id="u217750"><!-- group -->
          <div class="clearfix grpelem" id="u217751"><!-- column -->
           <div class="clearfix colelem" id="pu217752"><!-- group -->
            <div class="rounded-corners grpelem" id="u217752"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217762"><!-- simple frame --></div>
           </div>
           <div class="clearfix colelem" id="pu217753"><!-- group -->
            <div class="rounded-corners grpelem" id="u217753"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217761"><!-- simple frame --></div>
           </div>
           <div class="clearfix colelem" id="pu217763"><!-- group -->
            <div class="rounded-corners grpelem" id="u217763"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217764"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217760"><!-- simple frame --></div>
           </div>
           <div class="clearfix colelem" id="pu217757"><!-- group -->
            <div class="rounded-corners grpelem" id="u217757"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217759"><!-- simple frame --></div>
            <div class="rounded-corners grpelem" id="u217758"><!-- simple frame --></div>
           </div>
          </div>
         </div>
         <div class="grpelem" id="u217772"><!-- custom html -->
          <input type="text" id="nome" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217771"><!-- custom html -->
          <input type="text" id="nome_emp" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217776"><!-- custom html -->
          <input type="text" id="tel" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217765"><!-- custom html -->
          <input type="text" id="cel" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217774"><!-- custom html -->
          <input type="email" id="email" disabled='true' name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217770"><!-- custom html -->
          <input type="text" id="doc_foto" name="txt_doc_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/>
         </div>
         <div class="grpelem" id="u217778"><!-- custom html -->
          <input type="text" id="endereco" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217767"><!-- custom html -->
          <input type="text" id="num" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217769"><!-- custom html -->
          <input type="text" id="cep" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
         </div>
         <div class="grpelem" id="u217749"><!-- custom html -->
          <select id="estado" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
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
         <div class="grpelem" id="u217775"><!-- custom html -->
          <select id="cidade" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
         </div>
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U217691-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u217691-4" data-muse-uid="U217691" data-muse-type="txt_frame"><!-- content -->
        <p>PASSO 2</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U217657-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u217657-4" data-muse-uid="U217657" data-muse-type="txt_frame"><!-- content -->
        <p>ATUALIZE OS SERVIÇOS QUE VOCÊ FAZ</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="ppu217741"><!-- group -->
        <div class="clearfix grpelem" id="pu217741"><!-- group -->
         <div class="rounded-corners clearfix grpelem" id="u217741"><!-- column -->
          <div class="clearfix colelem" id="pu217697"><!-- group -->
           <div class="grpelem" id="u217697"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Infantil">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217715-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217715-4" data-muse-uid="U217715" data-muse-type="txt_frame"><!-- content -->
            <p>Infantil</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217710"><!-- group -->
           <div class="grpelem" id="u217710"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Gestante">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217705-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217705-4" data-muse-uid="U217705" data-muse-type="txt_frame"><!-- content -->
            <p>Gestante</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217734"><!-- group -->
           <div class="grpelem" id="u217734"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Casal">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217685-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217685-4" data-muse-uid="U217685" data-muse-type="txt_frame"><!-- content -->
            <p>Casal</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217728"><!-- group -->
           <div class="grpelem" id="u217728"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Banda">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217656-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217656-4" data-muse-uid="U217656" data-muse-type="txt_frame"><!-- content -->
            <p>Banda</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <!-- m_editable region-id="editable-static-tag-U217736-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u217736-4" data-muse-uid="U217736" data-muse-type="txt_frame"><!-- content -->
          <p>BOOK</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix grpelem" id="pu217704"><!-- group -->
         <div class="rounded-corners clearfix grpelem" id="u217704"><!-- column -->
          <div class="clearfix colelem" id="pu217690"><!-- group -->
           <div class="grpelem" id="u217690"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Arquitetura">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217674-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217674-4" data-muse-uid="U217674" data-muse-type="txt_frame"><!-- content -->
            <p>Arquitetura</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217712"><!-- group -->
           <div class="grpelem" id="u217712"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Esportes">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217739-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217739-4" data-muse-uid="U217739" data-muse-type="txt_frame"><!-- content -->
            <p>Esportes</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217675"><!-- group -->
           <div class="grpelem" id="u217675"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Josnalistica">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217687-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217687-4" data-muse-uid="U217687" data-muse-type="txt_frame"><!-- content -->
            <p>Jornalística</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu217708"><!-- group -->
           <div class="grpelem" id="u217708"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Documentarista">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217738-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217738-4" data-muse-uid="U217738" data-muse-type="txt_frame"><!-- content -->
            <p>Documentarista</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <!-- m_editable region-id="editable-static-tag-U217668-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u217668-4" data-muse-uid="U217668" data-muse-type="txt_frame"><!-- content -->
          <p>OUTROS</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix grpelem" id="u217743"><!-- column -->
         <div class="clearfix colelem" id="pu217666"><!-- group -->
          <div class="grpelem" id="u217666"><!-- custom html -->
           <input type="checkbox"  name="Pedido[]" value="Casamento" />
          </div>
          <!-- m_editable region-id="editable-static-tag-U217654-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217654-4" data-muse-uid="U217654" data-muse-type="txt_frame"><!-- content -->
           <p>Casamento</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217733"><!-- group -->
          <div class="grpelem" id="u217733"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festa de Aniversario">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217702-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217702-4" data-muse-uid="U217702" data-muse-type="txt_frame"><!-- content -->
           <p>Festa de Aniversário</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217742"><!-- group -->
          <div class="grpelem" id="u217742"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Eventos Sociais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217729-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217729-4" data-muse-uid="U217729" data-muse-type="txt_frame"><!-- content -->
           <p>Eventos Sociais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217724"><!-- group -->
          <div class="grpelem" id="u217724"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festas Infantis">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217731-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217731-4" data-muse-uid="U217731" data-muse-type="txt_frame"><!-- content -->
           <p>Festas Infantis</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <div class="rounded-corners clearfix grpelem" id="u217711"><!-- column -->
         <div class="clearfix colelem" id="pu217725"><!-- group -->
          <div class="grpelem" id="u217725"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Paisagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217650-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217650-4" data-muse-uid="U217650" data-muse-type="txt_frame"><!-- content -->
           <p>Paisagem</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217688"><!-- group -->
          <div class="grpelem" id="u217688"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Vida Submarina">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217661-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217661-4" data-muse-uid="U217661" data-muse-type="txt_frame"><!-- content -->
           <p>Vida Submarina</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217655"><!-- group -->
          <div class="grpelem" id="u217655"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Animais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217737-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217737-4" data-muse-uid="U217737" data-muse-type="txt_frame"><!-- content -->
           <p>Animais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217706"><!-- group -->
          <div class="grpelem" id="u217706"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Aereas">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217669-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217669-4" data-muse-uid="U217669" data-muse-type="txt_frame"><!-- content -->
           <p>Aéreas</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U217723-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217723-4" data-muse-uid="U217723" data-muse-type="txt_frame"><!-- content -->
         <p>NATUREZA</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U217745-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217745-4" data-muse-uid="U217745" data-muse-type="txt_frame"><!-- content -->
         <p>EVENTO</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pppu217663"><!-- group -->
        <div class="clearfix grpelem" id="ppu217663"><!-- column -->
         <div class="clearfix colelem" id="pu217663"><!-- group -->
          <div class="rounded-corners clearfix grpelem" id="u217663"><!-- group -->
           <div class="clearfix grpelem" id="pu217683"><!-- column -->
            <div class="colelem" id="u217683"><!-- custom html -->
             <input type="checkbox" name="Pedido[]" value="Abstrata">
            </div>
            <div class="colelem" id="u217684"><!-- custom html -->
             <input type="checkbox" name="Pedido[]" value="Nu Artistico">
            </div>
           </div>
           <div class="clearfix grpelem" id="pu217701-4"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U217701-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u217701-4" data-muse-uid="U217701" data-muse-type="txt_frame"><!-- content -->
             <p>Abstrata</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id="editable-static-tag-U217713-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u217713-4" data-muse-uid="U217713" data-muse-type="txt_frame"><!-- content -->
             <p>Nú Artístico</p>
            </div>
            <!-- /m_editable -->
           </div>
          </div>
          <!-- m_editable region-id="editable-static-tag-U217695-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217695-4" data-muse-uid="U217695" data-muse-type="txt_frame"><!-- content -->
           <p>ARTÍSTICA</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="rounded-corners clearfix colelem" id="u217646"><!-- column -->
          <div class="position_content" id="u217646_position_content">
           <!-- m_editable region-id="editable-static-tag-U217732-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u217732-4" data-muse-uid="U217732" data-muse-type="txt_frame"><!-- content -->
            <p>CIENTÍFICA</p>
           </div>
           <!-- /m_editable -->
           <div class="clearfix colelem" id="pu217649"><!-- group -->
            <div class="grpelem" id="u217649"><!-- custom html -->
             <input type="checkbox" name="Pedido[]" value="Medica">
            </div>
            <!-- m_editable region-id="editable-static-tag-U217686-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix grpelem" id="u217686-4" data-muse-uid="U217686" data-muse-type="txt_frame"><!-- content -->
             <p>Médica</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="clearfix colelem" id="pu217730"><!-- group -->
            <div class="grpelem" id="u217730"><!-- custom html -->
             <input type="checkbox" name="Pedido[]" value="Odontologica">
            </div>
            <!-- m_editable region-id="editable-static-tag-U217653-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix grpelem" id="u217653-4" data-muse-uid="U217653" data-muse-type="txt_frame"><!-- content -->
             <p>Odontológica</p>
            </div>
            <!-- /m_editable -->
           </div>
          </div>
         </div>
        </div>
        <div class="clearfix grpelem" id="ppu217679"><!-- column -->
         <div class="clearfix colelem" id="pu217679"><!-- group -->
          <div class="rounded-corners clearfix grpelem" id="u217679"><!-- column -->
           <div class="position_content" id="u217679_position_content">
            <!-- m_editable region-id="editable-static-tag-U217672-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u217672-4" data-muse-uid="U217672" data-muse-type="txt_frame"><!-- content -->
             <p>FAZ FILMAGEM?</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu217662"><!-- group -->
             <div class="grpelem" id="u217662"><!-- custom html -->
              <input type="radio" name="Filmagem" value="Sim">
             </div>
             <!-- m_editable region-id="editable-static-tag-U217647-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u217647-4" data-muse-uid="U217647" data-muse-type="txt_frame"><!-- content -->
              <p>SIM</p>
             </div>
             <!-- /m_editable -->
             <div class="grpelem" id="u217670"><!-- custom html -->
              <input type="radio" name="Filmagem" value="Nao" checked>
             </div>
             <!-- m_editable region-id="editable-static-tag-U217671-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u217671-4" data-muse-uid="U217671" data-muse-type="txt_frame"><!-- content -->
              <p>NÃO</p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
          <div class="rounded-corners clearfix grpelem" id="u217699"><!-- group -->
           <div class="clearfix grpelem" id="pu217726-4"><!-- column -->
            <!-- m_editable region-id="editable-static-tag-U217726-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="clearfix colelem" id="u217726-4" data-muse-uid="U217726" data-muse-type="txt_frame"><!-- content -->
             <p>EDIÇÃO</p>
            </div>
            <!-- /m_editable -->
            <div class="clearfix colelem" id="pu217722"><!-- group -->
             <div class="grpelem" id="u217722"><!-- custom html -->
              <input type="checkbox" name="Edicao[]" value="imagem">
             </div>
             <!-- m_editable region-id="editable-static-tag-U217780-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
             <div class="clearfix grpelem" id="u217780-4" data-muse-uid="U217780" data-muse-type="txt_frame"><!-- content -->
              <p>Imagem</p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
           <div class="grpelem" id="u217694"><!-- custom html -->
            <input type="checkbox" name="Edicao[]" value="Video">
           </div>
           <!-- m_editable region-id="editable-static-tag-U217727-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u217727-4" data-muse-uid="U217727" data-muse-type="txt_frame"><!-- content -->
            <p>Vídeo</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <!-- m_editable region-id="editable-static-tag-U217676-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u217676-4" data-muse-uid="U217676" data-muse-type="txt_frame"><!-- content -->
          <p>FALE UM POUCO SOBRE VOCÊ</p>
         </div>
         <!-- /m_editable -->
         <div class="rounded-corners clearfix colelem" id="u217714"><!-- group -->
          <div class="grpelem" id="u217718"><!-- custom html -->
           <textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea>
          </div>
         </div>
        </div>
        <div class="rounded-corners clearfix grpelem" id="u217709"><!-- column -->
         <div class="clearfix colelem" id="pu217717"><!-- group -->
          <div class="grpelem" id="u217717"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Institucional">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217658-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217658-4" data-muse-uid="U217658" data-muse-type="txt_frame"><!-- content -->
           <p>Institucional</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217746"><!-- group -->
          <div class="grpelem" id="u217746"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Produtos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217700-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217700-4" data-muse-uid="U217700" data-muse-type="txt_frame"><!-- content -->
           <p>Produtos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217665"><!-- group -->
          <div class="grpelem" id="u217665"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Moda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217660-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217660-4" data-muse-uid="U217660" data-muse-type="txt_frame"><!-- content -->
           <p>Moda</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217696"><!-- group -->
          <div class="grpelem" id="u217696"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Modelos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217689-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217689-4" data-muse-uid="U217689" data-muse-type="txt_frame"><!-- content -->
           <p>Modelos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217719"><!-- group -->
          <div class="grpelem" id="u217719"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Comercial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217720-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217720-4" data-muse-uid="U217720" data-muse-type="txt_frame"><!-- content -->
           <p>Comercial</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu217678"><!-- group -->
          <div class="grpelem" id="u217678"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Industrial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U217779-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u217779-4" data-muse-uid="U217779" data-muse-type="txt_frame"><!-- content -->
           <p>Industrial</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U217692-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u217692-4" data-muse-uid="U217692" data-muse-type="txt_frame"><!-- content -->
         <p>PUBLICIDADE</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U217721-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u217721-4" data-muse-uid="U217721" data-muse-type="txt_frame"><!-- content -->
        <p>Insira seu email e senha corretamente.</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu217651"><!-- group -->
        <div class="clearfix grpelem" id="u217651"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U217652-BP_infinity" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u217652-4" data-muse-uid="U217652" data-muse-type="txt_frame"><!-- content -->
          <p>CONFIRMAR</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="grpelem" id="u217667"><!-- custom html -->
         <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="clearfix grpelem" id="pu292007-4"><!-- group -->
     <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
     <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    </div>
    <div class="verticalspacer" data-offset-top="1436" data-content-above-spacer="1436" data-content-below-spacer="170"></div>
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
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
    </div>
    <div class="clearfix grpelem" id="ppu25393"><!-- column -->
     <span class="clearfix colelem placeholder" data-placeholder-for="pu25393_content"><!-- placeholder node --></span>
     <div class="colelem" id="u253977"><!-- custom html -->
      <form method="POST" action="helper/path_alter_cli.php" id="frm_cad_foto02">
<input type="hidden" id="email02" name="txt_email_foto" maxlength="50"/> 
     </div>
    </div>
    <div class="clearfix grpelem" id="pu2643"><!-- group -->
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu219067-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U219067-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219067-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U219066-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="u253978"><!-- column -->
      <div class="clearfix colelem" id="pu254081-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U254081-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254081-4" data-muse-uid="U254081" data-muse-type="txt_frame"><!-- content -->
        <p>NOME COMPLETO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U253992-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u253992-4" data-muse-uid="U253992" data-muse-type="txt_frame"><!-- content -->
        <p>NOME DA EMPRESA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu254086-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U254086-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254086-4" data-muse-uid="U254086" data-muse-type="txt_frame"><!-- content -->
        <p>TELEFONE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U253995-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u253995-4" data-muse-uid="U253995" data-muse-type="txt_frame"><!-- content -->
        <p>CELULAR</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U253999-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u253999-4" data-muse-uid="U253999" data-muse-type="txt_frame"><!-- content -->
        <p>EMAIL</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254097-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254097-4" data-muse-uid="U254097" data-muse-type="txt_frame"><!-- content -->
        <p>NÚMERO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254090-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254090-4" data-muse-uid="U254090" data-muse-type="txt_frame"><!-- content -->
        <p>ESTADO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254018-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254018-4" data-muse-uid="U254018" data-muse-type="txt_frame"><!-- content -->
        <p>CEP</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254005-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254005-4" data-muse-uid="U254005" data-muse-type="txt_frame"><!-- content -->
        <p>ENDEREÇO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254066-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254066-4" data-muse-uid="U254066" data-muse-type="txt_frame"><!-- content -->
        <p>CIDADE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U254053-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254053-4" data-muse-uid="U254053" data-muse-type="txt_frame"><!-- content -->
        <p>CNPJ</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix grpelem" id="u254020"><!-- group -->
        <div class="clearfix grpelem" id="u254021"><!-- column -->
         <div class="clearfix colelem" id="pu254022"><!-- group -->
          <div class="rounded-corners grpelem" id="u254022"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254027"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu254023"><!-- group -->
          <div class="rounded-corners grpelem" id="u254023"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254032"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254030"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu254026"><!-- group -->
          <div class="rounded-corners grpelem" id="u254026"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254025"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254028"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu254024"><!-- group -->
          <div class="rounded-corners grpelem" id="u254024"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254029"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u254031"><!-- simple frame --></div>
         </div>
        </div>
        <div class="grpelem" id="u254043"><!-- custom html -->
         <input type="text" id="nome02" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254038"><!-- custom html -->
         <input type="text" id="nome_emp02" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254044"><!-- custom html -->
         <input type="text" id="tel02" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254037"><!-- custom html -->
         <input type="text" id="cel02" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254039"><!-- custom html -->
         <input type="email" id="email02" disabled='true' name="txt_email2" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254041"><!-- custom html -->
         <input type="text" id="doc_foto02" name="txt_doc_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/>
        </div>
        <div class="grpelem" id="u254035"><!-- custom html -->
         <input type="text" id="endereco02" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254033"><!-- custom html -->
         <input type="text" id="num02" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254042"><!-- custom html -->
         <input type="text" id="cep02" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u254034"><!-- custom html -->
         <select id="estado02" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
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
        <div class="grpelem" id="u254040"><!-- custom html -->
         <select id="cidade02" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
        </div>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U253991-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u253991-4" data-muse-uid="U253991" data-muse-type="txt_frame"><!-- content -->
       <p>PASSO 2</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U254067-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u254067-4" data-muse-uid="U254067" data-muse-type="txt_frame"><!-- content -->
       <p>ATUALIZE OS SERVIÇOS QUE VOCÊ FAZ</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="ppu253984"><!-- group -->
       <div class="clearfix grpelem" id="pu253984"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u253984"><!-- column -->
         <div class="clearfix colelem" id="pu254000"><!-- group -->
          <div class="grpelem" id="u254000"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Infantil">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254046-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254046-4" data-muse-uid="U254046" data-muse-type="txt_frame"><!-- content -->
           <p>Infantil</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu254080"><!-- group -->
          <div class="grpelem" id="u254080"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Gestante">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254082-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254082-4" data-muse-uid="U254082" data-muse-type="txt_frame"><!-- content -->
           <p>Gestante</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu254100"><!-- group -->
          <div class="grpelem" id="u254100"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Casal">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254008-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254008-4" data-muse-uid="U254008" data-muse-type="txt_frame"><!-- content -->
           <p>Casal</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu254013"><!-- group -->
          <div class="grpelem" id="u254013"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Banda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254059-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254059-4" data-muse-uid="U254059" data-muse-type="txt_frame"><!-- content -->
           <p>Banda</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U254051-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u254051-4" data-muse-uid="U254051" data-muse-type="txt_frame"><!-- content -->
         <p>BOOK</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix grpelem" id="u254088"><!-- column -->
        <div class="clearfix colelem" id="pu254001"><!-- group -->
         <div class="grpelem" id="u254001"><!-- custom html -->
          <input type="checkbox"  name="Pedido[]" value="Casamento" />
         </div>
         <!-- m_editable region-id="editable-static-tag-U254068-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254068-4" data-muse-uid="U254068" data-muse-type="txt_frame"><!-- content -->
          <p>Casamento</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu253987"><!-- group -->
         <div class="grpelem" id="u253987"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Festa de Aniversario">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254050-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254050-4" data-muse-uid="U254050" data-muse-type="txt_frame"><!-- content -->
          <p>Festa de Aniversário</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254057"><!-- group -->
         <div class="grpelem" id="u254057"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Eventos Sociais">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254075-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254075-4" data-muse-uid="U254075" data-muse-type="txt_frame"><!-- content -->
          <p>Eventos Sociais</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254074"><!-- group -->
         <div class="grpelem" id="u254074"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Festas Infantis">
         </div>
         <!-- m_editable region-id="editable-static-tag-U253998-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u253998-4" data-muse-uid="U253998" data-muse-type="txt_frame"><!-- content -->
          <p>Festas Infantis</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U254049-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254049-4" data-muse-uid="U254049" data-muse-type="txt_frame"><!-- content -->
        <p>EVENTO</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="ppu254095"><!-- group -->
       <div class="clearfix grpelem" id="pu254095"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u254095"><!-- column -->
         <div class="clearfix colelem" id="pu254076"><!-- group -->
          <div class="grpelem" id="u254076"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Arquitetura">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254092-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254092-4" data-muse-uid="U254092" data-muse-type="txt_frame"><!-- content -->
           <p>Arquitetura</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu253997"><!-- group -->
          <div class="grpelem" id="u253997"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Esportes">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254079-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254079-4" data-muse-uid="U254079" data-muse-type="txt_frame"><!-- content -->
           <p>Esportes</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu253981"><!-- group -->
          <div class="grpelem" id="u253981"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Josnalistica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254011-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254011-4" data-muse-uid="U254011" data-muse-type="txt_frame"><!-- content -->
           <p>Jornalística</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu254056"><!-- group -->
          <div class="grpelem" id="u254056"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Documentarista">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254083-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254083-4" data-muse-uid="U254083" data-muse-type="txt_frame"><!-- content -->
           <p>Documentarista</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U254052-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u254052-4" data-muse-uid="U254052" data-muse-type="txt_frame"><!-- content -->
         <p>OUTROS</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix grpelem" id="u253982"><!-- column -->
        <div class="clearfix colelem" id="pu254098"><!-- group -->
         <div class="grpelem" id="u254098"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Paisagem">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254096-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254096-4" data-muse-uid="U254096" data-muse-type="txt_frame"><!-- content -->
          <p>Paisagem</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254072"><!-- group -->
         <div class="grpelem" id="u254072"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Vida Submarina">
         </div>
         <!-- m_editable region-id="editable-static-tag-U253980-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u253980-4" data-muse-uid="U253980" data-muse-type="txt_frame"><!-- content -->
          <p>Vida Submarina</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254084"><!-- group -->
         <div class="grpelem" id="u254084"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Animais">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254078-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254078-4" data-muse-uid="U254078" data-muse-type="txt_frame"><!-- content -->
          <p>Animais</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254063"><!-- group -->
         <div class="grpelem" id="u254063"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Aereas">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254048-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254048-4" data-muse-uid="U254048" data-muse-type="txt_frame"><!-- content -->
          <p>Aéreas</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U253983-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u253983-4" data-muse-uid="U253983" data-muse-type="txt_frame"><!-- content -->
        <p>NATUREZA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pppu254065"><!-- group -->
       <div class="clearfix grpelem" id="ppu254065"><!-- column -->
        <div class="clearfix colelem" id="pu254065"><!-- group -->
         <div class="rounded-corners clearfix grpelem" id="u254065"><!-- group -->
          <div class="clearfix grpelem" id="pu254087"><!-- column -->
           <div class="colelem" id="u254087"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Abstrata">
           </div>
           <div class="colelem" id="u253985"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Nu Artistico">
           </div>
          </div>
          <div class="clearfix grpelem" id="pu254007-4"><!-- column -->
           <!-- m_editable region-id="editable-static-tag-U254007-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u254007-4" data-muse-uid="U254007" data-muse-type="txt_frame"><!-- content -->
            <p>Abstrata</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U254019-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u254019-4" data-muse-uid="U254019" data-muse-type="txt_frame"><!-- content -->
            <p>Nú Artístico</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <!-- m_editable region-id="editable-static-tag-U254089-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254089-4" data-muse-uid="U254089" data-muse-type="txt_frame"><!-- content -->
          <p>ARTÍSTICA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u254094"><!-- column -->
         <div class="position_content" id="u254094_position_content">
          <!-- m_editable region-id="editable-static-tag-U254047-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u254047-4" data-muse-uid="U254047" data-muse-type="txt_frame"><!-- content -->
           <p>CIENTÍFICA</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu254091"><!-- group -->
           <div class="grpelem" id="u254091"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Medica">
           </div>
           <!-- m_editable region-id="editable-static-tag-U254064-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u254064-4" data-muse-uid="U254064" data-muse-type="txt_frame"><!-- content -->
            <p>Médica</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu254045"><!-- group -->
           <div class="grpelem" id="u254045"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Odontologica">
           </div>
           <!-- m_editable region-id="editable-static-tag-U254014-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u254014-4" data-muse-uid="U254014" data-muse-type="txt_frame"><!-- content -->
            <p>Odontológica</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u254054"><!-- column -->
        <div class="clearfix colelem" id="pu253990"><!-- group -->
         <div class="grpelem" id="u253990"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Institucional">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254015-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254015-4" data-muse-uid="U254015" data-muse-type="txt_frame"><!-- content -->
          <p>Institucional</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254055"><!-- group -->
         <div class="grpelem" id="u254055"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Produtos">
         </div>
         <!-- m_editable region-id="editable-static-tag-U253993-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u253993-4" data-muse-uid="U253993" data-muse-type="txt_frame"><!-- content -->
          <p>Produtos</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254077"><!-- group -->
         <div class="grpelem" id="u254077"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Moda">
         </div>
         <!-- m_editable region-id="editable-static-tag-U253986-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u253986-4" data-muse-uid="U253986" data-muse-type="txt_frame"><!-- content -->
          <p>Moda</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254085"><!-- group -->
         <div class="grpelem" id="u254085"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Modelos">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254070-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254070-4" data-muse-uid="U254070" data-muse-type="txt_frame"><!-- content -->
          <p>Modelos</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu253988"><!-- group -->
         <div class="grpelem" id="u253988"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Comercial">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254009-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254009-4" data-muse-uid="U254009" data-muse-type="txt_frame"><!-- content -->
          <p>Comercial</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu254010"><!-- group -->
         <div class="grpelem" id="u254010"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Industrial">
         </div>
         <!-- m_editable region-id="editable-static-tag-U254061-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u254061-4" data-muse-uid="U254061" data-muse-type="txt_frame"><!-- content -->
          <p>Industrial</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U254002-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u254002-4" data-muse-uid="U254002" data-muse-type="txt_frame"><!-- content -->
        <p>PUBLICIDADE</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu253994"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u253994"><!-- column -->
        <div class="position_content" id="u253994_position_content">
         <!-- m_editable region-id="editable-static-tag-U254012-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u254012-4" data-muse-uid="U254012" data-muse-type="txt_frame"><!-- content -->
          <p>FAZ FILMAGEM?</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu254093"><!-- group -->
          <div class="grpelem" id="u254093"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Sim">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254071-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254071-4" data-muse-uid="U254071" data-muse-type="txt_frame"><!-- content -->
           <p>SIM</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem" id="u254004"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Nao" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U254058-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254058-4" data-muse-uid="U254058" data-muse-type="txt_frame"><!-- content -->
           <p>NÃO</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u254003"><!-- group -->
        <div class="clearfix grpelem" id="pu254073-4"><!-- column -->
         <!-- m_editable region-id="editable-static-tag-U254073-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u254073-4" data-muse-uid="U254073" data-muse-type="txt_frame"><!-- content -->
          <p>EDIÇÃO</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu253989"><!-- group -->
          <div class="grpelem" id="u253989"><!-- custom html -->
           <input type="checkbox" name="Edicao[]" value="imagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U254062-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u254062-4" data-muse-uid="U254062" data-muse-type="txt_frame"><!-- content -->
           <p>Imagem</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <div class="grpelem" id="u254099"><!-- custom html -->
         <input type="checkbox" name="Edicao[]" value="Video">
        </div>
        <!-- m_editable region-id="editable-static-tag-U253979-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u253979-4" data-muse-uid="U253979" data-muse-type="txt_frame"><!-- content -->
         <p>Vídeo</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U254101-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u254101-4" data-muse-uid="U254101" data-muse-type="txt_frame"><!-- content -->
       <p>FALE UM POUCO SOBRE VOCÊ</p>
      </div>
      <!-- /m_editable -->
      <div class="rounded-corners clearfix colelem" id="u254069"><!-- group -->
       <div class="grpelem" id="u253996"><!-- custom html -->
        <textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U254060-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u254060-4" data-muse-uid="U254060" data-muse-type="txt_frame"><!-- content -->
       <p>Insira seu email e senha corretamente.</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="pu254016"><!-- group -->
       <div class="clearfix grpelem" id="u254016"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U254017-BP_1024" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem" id="u254017-4" data-muse-uid="U254017" data-muse-type="txt_frame"><!-- content -->
         <p>CONFIRMAR</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="grpelem" id="u254006"><!-- custom html -->
        <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form>
       </div>
      </div>
     </div>
    </div>
    <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292007-4_content"><!-- placeholder node --></span>
    <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292008-4_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1890" data-content-above-spacer="1890" data-content-below-spacer="171"></div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu454361_content"><!-- placeholder node --></span>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu25393"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu25393"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u25393-bw">
       <div class="museBGSize temp_no_id" data-orig-id="u25393"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u25393_align_to_page">
         <div class="museBGSize rounded-corners grpelem temp_no_id shared_content" data-orig-id="u25394" data-content-guid="u25394_content"><!-- simple frame --></div>
         <div class="museBGSize rounded-corners grpelem temp_no_id shared_content" data-orig-id="u28165" data-content-guid="u28165_content"><!-- simple frame --></div>
         <span class="grpelem placeholder" data-placeholder-for="u363604_content"><!-- placeholder node --></span>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u227051-bw_content"><!-- placeholder node --></span>
     </div>
     <div class="colelem" id="u219302"><!-- custom html -->
      <form method="POST" action="helper/path_alter_cli.php" id="frm_cad_foto03">
<input type="email" id="email03" name="txt_email3" maxlength="50"/> 
     </div>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu2643"><!-- group -->
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu219067-4"><!-- column -->
     <!-- m_editable region-id="editable-static-tag-U219067-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219067-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U219066-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="u219303"><!-- column -->
      <div class="clearfix colelem" id="pu219314-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U219314-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219314-4" data-muse-uid="U219314" data-muse-type="txt_frame"><!-- content -->
        <p>NOME COMPLETO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219371-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219371-4" data-muse-uid="U219371" data-muse-type="txt_frame"><!-- content -->
        <p>NOME DA EMPRESA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu219317-4"><!-- group -->
       <!-- m_editable region-id="editable-static-tag-U219317-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219317-4" data-muse-uid="U219317" data-muse-type="txt_frame"><!-- content -->
        <p>TELEFONE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219356-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219356-4" data-muse-uid="U219356" data-muse-type="txt_frame"><!-- content -->
        <p>CELULAR</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219392-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219392-4" data-muse-uid="U219392" data-muse-type="txt_frame"><!-- content -->
        <p>EMAIL</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219378-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219378-4" data-muse-uid="U219378" data-muse-type="txt_frame"><!-- content -->
        <p>NÚMERO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219327-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219327-4" data-muse-uid="U219327" data-muse-type="txt_frame"><!-- content -->
        <p>ESTADO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219393-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219393-4" data-muse-uid="U219393" data-muse-type="txt_frame"><!-- content -->
        <p>CEP</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219352-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219352-4" data-muse-uid="U219352" data-muse-type="txt_frame"><!-- content -->
        <p>ENDEREÇO</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219329-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219329-4" data-muse-uid="U219329" data-muse-type="txt_frame"><!-- content -->
        <p>CIDADE</p>
       </div>
       <!-- /m_editable -->
       <!-- m_editable region-id="editable-static-tag-U219377-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219377-4" data-muse-uid="U219377" data-muse-type="txt_frame"><!-- content -->
        <p>CNPJ</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix grpelem" id="u219404"><!-- group -->
        <div class="clearfix grpelem" id="u219419"><!-- column -->
         <div class="clearfix colelem" id="pu219427"><!-- group -->
          <div class="rounded-corners grpelem" id="u219427"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219432"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu219423"><!-- group -->
          <div class="rounded-corners grpelem" id="u219423"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219425"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219431"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu219422"><!-- group -->
          <div class="rounded-corners grpelem" id="u219422"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219424"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219420"><!-- simple frame --></div>
         </div>
         <div class="clearfix colelem" id="pu219426"><!-- group -->
          <div class="rounded-corners grpelem" id="u219426"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219421"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u219433"><!-- simple frame --></div>
         </div>
        </div>
        <div class="grpelem" id="u219412"><!-- custom html -->
         <input type="text" id="nome03" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219417"><!-- custom html -->
         <input type="text" id="nome_emp03" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219408"><!-- custom html -->
         <input type="text" id="tel03" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219416"><!-- custom html -->
         <input type="text" id="cel03" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219410"><!-- custom html -->
         <input type="email" id="email03" disabled='true' name="txt_email3" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219415"><!-- custom html -->
         <input type="text" id="doc_foto03" name="txt_doc_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/>
        </div>
        <div class="grpelem" id="u219407"><!-- custom html -->
         <input type="text" id="endereco03" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219434"><!-- custom html -->
         <input type="text" id="num03" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219418"><!-- custom html -->
         <input type="text" id="cep03" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u219413"><!-- custom html -->
         <select id="estado03" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
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
        <div class="grpelem" id="u219435"><!-- custom html -->
         <select id="cidade03" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
        </div>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U219323-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u219323-4" data-muse-uid="U219323" data-muse-type="txt_frame"><!-- content -->
       <p>PASSO 2</p>
      </div>
      <!-- /m_editable -->
      <!-- m_editable region-id="editable-static-tag-U219363-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u219363-4" data-muse-uid="U219363" data-muse-type="txt_frame"><!-- content -->
       <p>ATUALIZE OS SERVIÇOS QUE VOCÊ FAZ</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="ppu219347"><!-- group -->
       <div class="clearfix grpelem" id="pu219347"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u219347"><!-- column -->
         <div class="clearfix colelem" id="pu219381"><!-- group -->
          <div class="grpelem" id="u219381"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Infantil">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219389-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219389-4" data-muse-uid="U219389" data-muse-type="txt_frame"><!-- content -->
           <p>Infantil</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219355"><!-- group -->
          <div class="grpelem" id="u219355"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Gestante">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219372-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219372-4" data-muse-uid="U219372" data-muse-type="txt_frame"><!-- content -->
           <p>Gestante</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219367"><!-- group -->
          <div class="grpelem" id="u219367"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Casal">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219370-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219370-4" data-muse-uid="U219370" data-muse-type="txt_frame"><!-- content -->
           <p>Casal</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219325"><!-- group -->
          <div class="grpelem" id="u219325"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Banda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219328-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219328-4" data-muse-uid="U219328" data-muse-type="txt_frame"><!-- content -->
           <p>Banda</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U219374-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u219374-4" data-muse-uid="U219374" data-muse-type="txt_frame"><!-- content -->
         <p>BOOK</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix grpelem" id="u219383"><!-- column -->
        <div class="clearfix colelem" id="pu219334"><!-- group -->
         <div class="grpelem" id="u219334"><!-- custom html -->
          <input type="checkbox"  name="Pedido[]" value="Casamento" />
         </div>
         <!-- m_editable region-id="editable-static-tag-U219346-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219346-4" data-muse-uid="U219346" data-muse-type="txt_frame"><!-- content -->
          <p>Casamento</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219437"><!-- group -->
         <div class="grpelem" id="u219437"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Festa de Aniversario">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219373-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219373-4" data-muse-uid="U219373" data-muse-type="txt_frame"><!-- content -->
          <p>Festa de Aniversário</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219436"><!-- group -->
         <div class="grpelem" id="u219436"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Eventos Sociais">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219326-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219326-4" data-muse-uid="U219326" data-muse-type="txt_frame"><!-- content -->
          <p>Eventos Sociais</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219321"><!-- group -->
         <div class="grpelem" id="u219321"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Festas Infantis">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219385-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219385-4" data-muse-uid="U219385" data-muse-type="txt_frame"><!-- content -->
          <p>Festas Infantis</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U219305-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219305-4" data-muse-uid="U219305" data-muse-type="txt_frame"><!-- content -->
        <p>EVENTO</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="ppu219364"><!-- group -->
       <div class="clearfix grpelem" id="pu219364"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u219364"><!-- column -->
         <div class="clearfix colelem" id="pu219342"><!-- group -->
          <div class="grpelem" id="u219342"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Arquitetura">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219353-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219353-4" data-muse-uid="U219353" data-muse-type="txt_frame"><!-- content -->
           <p>Arquitetura</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219312"><!-- group -->
          <div class="grpelem" id="u219312"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Esportes">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219384-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219384-4" data-muse-uid="U219384" data-muse-type="txt_frame"><!-- content -->
           <p>Esportes</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219402"><!-- group -->
          <div class="grpelem" id="u219402"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Josnalistica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219396-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219396-4" data-muse-uid="U219396" data-muse-type="txt_frame"><!-- content -->
           <p>Jornalística</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu219306"><!-- group -->
          <div class="grpelem" id="u219306"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Documentarista">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219319-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219319-4" data-muse-uid="U219319" data-muse-type="txt_frame"><!-- content -->
           <p>Documentarista</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U219349-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u219349-4" data-muse-uid="U219349" data-muse-type="txt_frame"><!-- content -->
         <p>OUTROS</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix grpelem" id="u219375"><!-- column -->
        <div class="clearfix colelem" id="pu219360"><!-- group -->
         <div class="grpelem" id="u219360"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Paisagem">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219345-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219345-4" data-muse-uid="U219345" data-muse-type="txt_frame"><!-- content -->
          <p>Paisagem</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219400"><!-- group -->
         <div class="grpelem" id="u219400"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Vida Submarina">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219401-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219401-4" data-muse-uid="U219401" data-muse-type="txt_frame"><!-- content -->
          <p>Vida Submarina</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219357"><!-- group -->
         <div class="grpelem" id="u219357"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Animais">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219399-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219399-4" data-muse-uid="U219399" data-muse-type="txt_frame"><!-- content -->
          <p>Animais</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219318"><!-- group -->
         <div class="grpelem" id="u219318"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Aereas">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219354-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219354-4" data-muse-uid="U219354" data-muse-type="txt_frame"><!-- content -->
          <p>Aéreas</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U219331-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219331-4" data-muse-uid="U219331" data-muse-type="txt_frame"><!-- content -->
        <p>NATUREZA</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pppu219333"><!-- group -->
       <div class="clearfix grpelem" id="ppu219333"><!-- column -->
        <div class="clearfix colelem" id="pu219333"><!-- group -->
         <div class="rounded-corners clearfix grpelem" id="u219333"><!-- group -->
          <div class="clearfix grpelem" id="pu219359"><!-- column -->
           <div class="colelem" id="u219359"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Abstrata">
           </div>
           <div class="colelem" id="u219391"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Nu Artistico">
           </div>
          </div>
          <div class="clearfix grpelem" id="pu219332-4"><!-- column -->
           <!-- m_editable region-id="editable-static-tag-U219332-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u219332-4" data-muse-uid="U219332" data-muse-type="txt_frame"><!-- content -->
            <p>Abstrata</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id="editable-static-tag-U219335-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix colelem" id="u219335-4" data-muse-uid="U219335" data-muse-type="txt_frame"><!-- content -->
            <p>Nú Artístico</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <!-- m_editable region-id="editable-static-tag-U219390-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219390-4" data-muse-uid="U219390" data-muse-type="txt_frame"><!-- content -->
          <p>ARTÍSTICA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="rounded-corners clearfix colelem" id="u219344"><!-- column -->
         <div class="position_content" id="u219344_position_content">
          <!-- m_editable region-id="editable-static-tag-U219394-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u219394-4" data-muse-uid="U219394" data-muse-type="txt_frame"><!-- content -->
           <p>CIENTÍFICA</p>
          </div>
          <!-- /m_editable -->
          <div class="clearfix colelem" id="pu219311"><!-- group -->
           <div class="grpelem" id="u219311"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Medica">
           </div>
           <!-- m_editable region-id="editable-static-tag-U219351-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u219351-4" data-muse-uid="U219351" data-muse-type="txt_frame"><!-- content -->
            <p>Médica</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class="clearfix colelem" id="pu219368"><!-- group -->
           <div class="grpelem" id="u219368"><!-- custom html -->
            <input type="checkbox" name="Pedido[]" value="Odontologica">
           </div>
           <!-- m_editable region-id="editable-static-tag-U219388-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
           <div class="clearfix grpelem" id="u219388-4" data-muse-uid="U219388" data-muse-type="txt_frame"><!-- content -->
            <p>Odontológica</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u219395"><!-- column -->
        <div class="clearfix colelem" id="pu219304"><!-- group -->
         <div class="grpelem" id="u219304"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Institucional">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219398-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219398-4" data-muse-uid="U219398" data-muse-type="txt_frame"><!-- content -->
          <p>Institucional</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219316"><!-- group -->
         <div class="grpelem" id="u219316"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Produtos">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219322-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219322-4" data-muse-uid="U219322" data-muse-type="txt_frame"><!-- content -->
          <p>Produtos</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219320"><!-- group -->
         <div class="grpelem" id="u219320"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Moda">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219330-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219330-4" data-muse-uid="U219330" data-muse-type="txt_frame"><!-- content -->
          <p>Moda</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219341"><!-- group -->
         <div class="grpelem" id="u219341"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Modelos">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219309-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219309-4" data-muse-uid="U219309" data-muse-type="txt_frame"><!-- content -->
          <p>Modelos</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219343"><!-- group -->
         <div class="grpelem" id="u219343"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Comercial">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219310-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219310-4" data-muse-uid="U219310" data-muse-type="txt_frame"><!-- content -->
          <p>Comercial</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="clearfix colelem" id="pu219339"><!-- group -->
         <div class="grpelem" id="u219339"><!-- custom html -->
          <input type="checkbox" name="Pedido[]" value="Industrial">
         </div>
         <!-- m_editable region-id="editable-static-tag-U219362-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix grpelem" id="u219362-4" data-muse-uid="U219362" data-muse-type="txt_frame"><!-- content -->
          <p>Industrial</p>
         </div>
         <!-- /m_editable -->
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U219361-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix grpelem" id="u219361-4" data-muse-uid="U219361" data-muse-type="txt_frame"><!-- content -->
        <p>PUBLICIDADE</p>
       </div>
       <!-- /m_editable -->
      </div>
      <div class="clearfix colelem" id="pu219338"><!-- group -->
       <div class="rounded-corners clearfix grpelem" id="u219338"><!-- column -->
        <div class="position_content" id="u219338_position_content">
         <!-- m_editable region-id="editable-static-tag-U219308-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u219308-4" data-muse-uid="U219308" data-muse-type="txt_frame"><!-- content -->
          <p>FAZ FILMAGEM?</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu219324"><!-- group -->
          <div class="grpelem" id="u219324"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Sim">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219313-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219313-4" data-muse-uid="U219313" data-muse-type="txt_frame"><!-- content -->
           <p>SIM</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem" id="u219337"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Nao" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U219336-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219336-4" data-muse-uid="U219336" data-muse-type="txt_frame"><!-- content -->
           <p>NÃO</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix grpelem" id="u219340"><!-- group -->
        <div class="clearfix grpelem" id="pu219350-4"><!-- column -->
         <!-- m_editable region-id="editable-static-tag-U219350-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u219350-4" data-muse-uid="U219350" data-muse-type="txt_frame"><!-- content -->
          <p>EDIÇÃO</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu219387"><!-- group -->
          <div class="grpelem" id="u219387"><!-- custom html -->
           <input type="checkbox" name="Edicao[]" value="imagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U219382-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u219382-4" data-muse-uid="U219382" data-muse-type="txt_frame"><!-- content -->
           <p>Imagem</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <div class="grpelem" id="u219397"><!-- custom html -->
         <input type="checkbox" name="Edicao[]" value="Video">
        </div>
        <!-- m_editable region-id="editable-static-tag-U219386-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u219386-4" data-muse-uid="U219386" data-muse-type="txt_frame"><!-- content -->
         <p>Vídeo</p>
        </div>
        <!-- /m_editable -->
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U219358-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u219358-4" data-muse-uid="U219358" data-muse-type="txt_frame"><!-- content -->
       <p>FALE UM POUCO SOBRE VOCÊ</p>
      </div>
      <!-- /m_editable -->
      <div class="rounded-corners clearfix colelem" id="u219380"><!-- group -->
       <div class="grpelem" id="u219403"><!-- custom html -->
        <textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea>
       </div>
      </div>
      <!-- m_editable region-id="editable-static-tag-U219379-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
      <div class="clearfix colelem" id="u219379-4" data-muse-uid="U219379" data-muse-type="txt_frame"><!-- content -->
       <p>Insira seu email e senha corretamente.</p>
      </div>
      <!-- /m_editable -->
      <div class="clearfix colelem" id="pu219365"><!-- group -->
       <div class="clearfix grpelem" id="u219365"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U219366-BP_768" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="rounded-corners clearfix grpelem" id="u219366-4" data-muse-uid="U219366" data-muse-type="txt_frame"><!-- content -->
         <p>CONFIRMAR</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="grpelem" id="u219348"><!-- custom html -->
        <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form>
       </div>
      </div>
     </div>
    </div>
    <a class="nonblock nontext clearfix" id="u330533-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
    <a class="nonblock nontext clearfix" id="u330534-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
    <div class="verticalspacer" data-offset-top="1889" data-content-above-spacer="1889" data-content-below-spacer="186"></div>
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
     <div class="clearfix colelem temp_no_id" data-orig-id="pu25393"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u25393-bw">
       <div class="museBGSize temp_no_id" data-orig-id="u25393"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u25393_align_to_page">
         <span class="museBGSize rounded-corners grpelem placeholder" data-placeholder-for="u25394_content"><!-- placeholder node --></span>
         <span class="museBGSize rounded-corners clearfix grpelem placeholder" data-placeholder-for="u28165_content1"><!-- placeholder node --></span>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u227051-bw_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U219067-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219067-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U219066-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="pu223047"><!-- group -->
      <div class="grpelem" id="u223047"><!-- custom html -->
       <form method="POST" action="helper/path_alter_cli.php" id="frm_cad_foto04">
<input type="hidden" id="email04" name="txt_email_foto"  maxlength="50"/> 
      </div>
      <div class="clearfix grpelem" id="u223048"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U223068-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u223068-4" data-muse-uid="U223068" data-muse-type="txt_frame"><!-- content -->
        <p>PASSO 2</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu223084-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U223084-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223084-4" data-muse-uid="U223084" data-muse-type="txt_frame"><!-- content -->
         <p>ATUALIZE OS SERVIÇOS QUE VOCÊ FAZ</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners grpelem" id="u223101"><!-- simple frame --></div>
       </div>
       <div class="clearfix colelem" id="pu223061"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223061"><!-- column -->
         <div class="clearfix colelem" id="pu223106"><!-- group -->
          <div class="grpelem" id="u223106"><!-- custom html -->
           <input type="checkbox"  name="Pedido[]" value="Casamento" />
          </div>
          <!-- m_editable region-id="editable-static-tag-U223062-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223062-4" data-muse-uid="U223062" data-muse-type="txt_frame"><!-- content -->
           <p>Casamento</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223058"><!-- group -->
          <div class="grpelem" id="u223058"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festa de Aniversario">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223049-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223049-4" data-muse-uid="U223049" data-muse-type="txt_frame"><!-- content -->
           <p>Festa de Aniversário</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223122"><!-- group -->
          <div class="grpelem" id="u223122"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Eventos Sociais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223083-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223083-4" data-muse-uid="U223083" data-muse-type="txt_frame"><!-- content -->
           <p>Eventos Sociais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223114"><!-- group -->
          <div class="grpelem" id="u223114"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festas Infantis">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223065-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223065-4" data-muse-uid="U223065" data-muse-type="txt_frame"><!-- content -->
           <p>Festas Infantis</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223118-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223118-4" data-muse-uid="U223118" data-muse-type="txt_frame"><!-- content -->
         <p>EVENTO</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu223108"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223108"><!-- column -->
         <div class="clearfix colelem" id="pu223095"><!-- group -->
          <div class="grpelem" id="u223095"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Infantil">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223104-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223104-4" data-muse-uid="U223104" data-muse-type="txt_frame"><!-- content -->
           <p>Infantil</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223066"><!-- group -->
          <div class="grpelem" id="u223066"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Gestante">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223064-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223064-4" data-muse-uid="U223064" data-muse-type="txt_frame"><!-- content -->
           <p>Gestante</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223054"><!-- group -->
          <div class="grpelem" id="u223054"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Casal">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223072-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223072-4" data-muse-uid="U223072" data-muse-type="txt_frame"><!-- content -->
           <p>Casal</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223078"><!-- group -->
          <div class="grpelem" id="u223078"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Banda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223087-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223087-4" data-muse-uid="U223087" data-muse-type="txt_frame"><!-- content -->
           <p>Banda</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223097-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223097-4" data-muse-uid="U223097" data-muse-type="txt_frame"><!-- content -->
         <p>BOOK</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu223136"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223136"><!-- column -->
         <div class="clearfix colelem" id="pu223119"><!-- group -->
          <div class="grpelem" id="u223119"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Paisagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223060-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223060-4" data-muse-uid="U223060" data-muse-type="txt_frame"><!-- content -->
           <p>Paisagem</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223073"><!-- group -->
          <div class="grpelem" id="u223073"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Vida Submarina">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223110-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223110-4" data-muse-uid="U223110" data-muse-type="txt_frame"><!-- content -->
           <p>Vida Submarina</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223130"><!-- group -->
          <div class="grpelem" id="u223130"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Animais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223056-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223056-4" data-muse-uid="U223056" data-muse-type="txt_frame"><!-- content -->
           <p>Animais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223107"><!-- group -->
          <div class="grpelem" id="u223107"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Aereas">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223125-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223125-4" data-muse-uid="U223125" data-muse-type="txt_frame"><!-- content -->
           <p>Aéreas</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223070-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223070-4" data-muse-uid="U223070" data-muse-type="txt_frame"><!-- content -->
         <p>NATUREZA</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu223076"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223076"><!-- column -->
         <div class="clearfix colelem" id="pu223124"><!-- group -->
          <div class="grpelem" id="u223124"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Arquitetura">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223092-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223092-4" data-muse-uid="U223092" data-muse-type="txt_frame"><!-- content -->
           <p>Arquitetura</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223059"><!-- group -->
          <div class="grpelem" id="u223059"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Esportes">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223069-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223069-4" data-muse-uid="U223069" data-muse-type="txt_frame"><!-- content -->
           <p>Esportes</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223080"><!-- group -->
          <div class="grpelem" id="u223080"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Josnalistica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223116-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223116-4" data-muse-uid="U223116" data-muse-type="txt_frame"><!-- content -->
           <p>Jornalística</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223123"><!-- group -->
          <div class="grpelem" id="u223123"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Documentarista">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223057-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223057-4" data-muse-uid="U223057" data-muse-type="txt_frame"><!-- content -->
           <p>Documentarista</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223103-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223103-4" data-muse-uid="U223103" data-muse-type="txt_frame"><!-- content -->
         <p>OUTROS</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu223089"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223089"><!-- column -->
         <div class="clearfix colelem" id="pu223052"><!-- group -->
          <div class="grpelem" id="u223052"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Institucional">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223135-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223135-4" data-muse-uid="U223135" data-muse-type="txt_frame"><!-- content -->
           <p>Institucional</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223051"><!-- group -->
          <div class="grpelem" id="u223051"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Produtos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223102-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223102-4" data-muse-uid="U223102" data-muse-type="txt_frame"><!-- content -->
           <p>Produtos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223077"><!-- group -->
          <div class="grpelem" id="u223077"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Moda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223081-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223081-4" data-muse-uid="U223081" data-muse-type="txt_frame"><!-- content -->
           <p>Moda</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223134"><!-- group -->
          <div class="grpelem" id="u223134"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Modelos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223063-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223063-4" data-muse-uid="U223063" data-muse-type="txt_frame"><!-- content -->
           <p>Modelos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223121"><!-- group -->
          <div class="grpelem" id="u223121"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Comercial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223113-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223113-4" data-muse-uid="U223113" data-muse-type="txt_frame"><!-- content -->
           <p>Comercial</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223133"><!-- group -->
          <div class="grpelem" id="u223133"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Industrial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223075-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223075-4" data-muse-uid="U223075" data-muse-type="txt_frame"><!-- content -->
           <p>Industrial</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223117-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223117-4" data-muse-uid="U223117" data-muse-type="txt_frame"><!-- content -->
         <p>PUBLICIDADE</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu223109"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u223109"><!-- group -->
         <div class="clearfix grpelem" id="pu223128"><!-- column -->
          <div class="colelem" id="u223128"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Abstrata">
          </div>
          <div class="colelem" id="u223105"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Nu Artistico">
          </div>
         </div>
         <div class="clearfix grpelem" id="pu223129-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U223129-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u223129-4" data-muse-uid="U223129" data-muse-type="txt_frame"><!-- content -->
           <p>Abstrata</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U223090-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u223090-4" data-muse-uid="U223090" data-muse-type="txt_frame"><!-- content -->
           <p>Nú Artístico</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223094-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223094-4" data-muse-uid="U223094" data-muse-type="txt_frame"><!-- content -->
         <p>ARTÍSTICA</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix colelem" id="u223112"><!-- column -->
        <div class="position_content" id="u223112_position_content">
         <!-- m_editable region-id="editable-static-tag-U223053-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u223053-4" data-muse-uid="U223053" data-muse-type="txt_frame"><!-- content -->
          <p>CIENTÍFICA</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu223111"><!-- group -->
          <div class="grpelem" id="u223111"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Medica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223100-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223100-4" data-muse-uid="U223100" data-muse-type="txt_frame"><!-- content -->
           <p>Médica</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu223099"><!-- group -->
          <div class="grpelem" id="u223099"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Odontologica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223098-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223098-4" data-muse-uid="U223098" data-muse-type="txt_frame"><!-- content -->
           <p>Odontológica</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix colelem" id="u223079"><!-- column -->
        <div class="position_content" id="u223079_position_content">
         <!-- m_editable region-id="editable-static-tag-U223085-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u223085-4" data-muse-uid="U223085" data-muse-type="txt_frame"><!-- content -->
          <p>FAZ FILMAGEM?</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu223127"><!-- group -->
          <div class="grpelem" id="u223127"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Sim">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223120-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223120-4" data-muse-uid="U223120" data-muse-type="txt_frame"><!-- content -->
           <p>SIM</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem" id="u223093"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Nao" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U223082-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223082-4" data-muse-uid="U223082" data-muse-type="txt_frame"><!-- content -->
           <p>NÃO</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix colelem" id="u223088"><!-- group -->
        <div class="clearfix grpelem" id="pu223096-4"><!-- column -->
         <!-- m_editable region-id="editable-static-tag-U223096-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u223096-4" data-muse-uid="U223096" data-muse-type="txt_frame"><!-- content -->
          <p>EDIÇÃO</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu223091"><!-- group -->
          <div class="grpelem" id="u223091"><!-- custom html -->
           <input type="checkbox" name="Edicao[]" value="imagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U223071-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u223071-4" data-muse-uid="U223071" data-muse-type="txt_frame"><!-- content -->
           <p>Imagem</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <div class="grpelem" id="u223055"><!-- custom html -->
         <input type="checkbox" name="Edicao[]" value="Video">
        </div>
        <!-- m_editable region-id="editable-static-tag-U223126-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223126-4" data-muse-uid="U223126" data-muse-type="txt_frame"><!-- content -->
         <p>Vídeo</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U223086-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u223086-4" data-muse-uid="U223086" data-muse-type="txt_frame"><!-- content -->
        <p>FALE UM POUCO SOBRE VOCÊ</p>
       </div>
       <!-- /m_editable -->
       <div class="rounded-corners clearfix colelem" id="u223115"><!-- group -->
        <div class="grpelem" id="u223067"><!-- custom html -->
         <textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea>
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U223050-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u223050-4" data-muse-uid="U223050" data-muse-type="txt_frame"><!-- content -->
        <p>Insira seu email e senha corretamente.</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu223131"><!-- group -->
        <div class="clearfix grpelem" id="u223131"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U223132-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u223132-4" data-muse-uid="U223132" data-muse-type="txt_frame"><!-- content -->
          <p>CONFIRMAR</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="grpelem" id="u223074"><!-- custom html -->
         <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form>
        </div>
       </div>
      </div>
      <div class="clearfix grpelem" id="u223137"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U223180-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u223180-4" data-muse-uid="U223180" data-muse-type="txt_frame"><!-- content -->
        <p>NOME COMPLETO</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu223144"><!-- group -->
        <div class="clearfix grpelem" id="u223144"><!-- column -->
         <div class="rounded-corners colelem" id="u223153"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u223148"><!-- simple frame --></div>
         <div class="clearfix colelem" id="pu223151"><!-- group -->
          <div class="rounded-corners grpelem" id="u223151"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u223150"><!-- simple frame --></div>
         </div>
         <div class="rounded-corners colelem" id="u223156"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u223146"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u223149"><!-- simple frame --></div>
         <div class="clearfix colelem" id="pu223145"><!-- group -->
          <div class="rounded-corners grpelem" id="u223145"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u223158"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u223147"><!-- simple frame --></div>
         </div>
         <div class="rounded-corners colelem" id="u223154"><!-- simple frame --></div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U223172-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223172-4" data-muse-uid="U223172" data-muse-type="txt_frame"><!-- content -->
         <p>NOME DA EMPRESA</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223182-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223182-4" data-muse-uid="U223182" data-muse-type="txt_frame"><!-- content -->
         <p>TELEFONE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223167-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223167-4" data-muse-uid="U223167" data-muse-type="txt_frame"><!-- content -->
         <p>CELULAR</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223164-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223164-4" data-muse-uid="U223164" data-muse-type="txt_frame"><!-- content -->
         <p>EMAIL</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223139-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223139-4" data-muse-uid="U223139" data-muse-type="txt_frame"><!-- content -->
         <p>NÚMERO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223173-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223173-4" data-muse-uid="U223173" data-muse-type="txt_frame"><!-- content -->
         <p>ESTADO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223141-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223141-4" data-muse-uid="U223141" data-muse-type="txt_frame"><!-- content -->
         <p>CEP</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223165-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223165-4" data-muse-uid="U223165" data-muse-type="txt_frame"><!-- content -->
         <p>ENDEREÇO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223162-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223162-4" data-muse-uid="U223162" data-muse-type="txt_frame"><!-- content -->
         <p>CIDADE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U223171-BP_480" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u223171-4" data-muse-uid="U223171" data-muse-type="txt_frame"><!-- content -->
         <p>CNPJ</p>
        </div>
        <!-- /m_editable -->
        <div class="grpelem" id="u223166"><!-- custom html -->
         <input type="text" id="nome04" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223178"><!-- custom html -->
         <input type="text" id="nome_emp04" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223160"><!-- custom html -->
         <input type="text" id="tel04" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223161"><!-- custom html -->
         <input type="text" id="cel04" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223159"><!-- custom html -->
         <input type="email" id="email04" disabled='true' name="txt_email4" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223175"><!-- custom html -->
         <input type="text" id="doc_foto04" name="txt_doc_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/>
        </div>
        <div class="grpelem" id="u223138"><!-- custom html -->
         <input type="text" id="endereco04" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223169"><!-- custom html -->
         <input type="text" id="num04" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223181"><!-- custom html -->
         <input type="text" id="cep04" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u223168"><!-- custom html -->
         <select id="estado04" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
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
        <div class="grpelem" id="u223143"><!-- custom html -->
         <select id="cidade04" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
        </div>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="2946" data-content-above-spacer="2946" data-content-below-spacer="199"></div>
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
     <div class="clearfix colelem temp_no_id" data-orig-id="pu25393"><!-- group -->
      <div class="browser_width grpelem temp_no_id" data-orig-id="u25393-bw">
       <div class="museBGSize temp_no_id" data-orig-id="u25393"><!-- group -->
        <div class="clearfix temp_no_id" data-orig-id="u25393_align_to_page">
         <span class="museBGSize rounded-corners grpelem placeholder" data-placeholder-for="u25394_content"><!-- placeholder node --></span>
         <div class="clearfix grpelem" id="pu28165"><!-- group -->
          <span class="museBGSize rounded-corners grpelem placeholder" data-placeholder-for="u28165_content"><!-- placeholder node --></span>
          <span class="grpelem placeholder" data-placeholder-for="u363604_content"><!-- placeholder node --></span>
         </div>
        </div>
       </div>
      </div>
      <span class="browser_width grpelem placeholder" data-placeholder-for="u227051-bw_content"><!-- placeholder node --></span>
     </div>
     <!-- m_editable region-id="editable-static-tag-U219067-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219067-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U219066-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u219066-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem" id="pu225037"><!-- group -->
      <div class="grpelem" id="u225037"><!-- custom html -->
       <form method="POST" action="helper/path_alter_cli.php" id="frm_cad_foto05">
<input type="hidden" id="email05" name="txt_email_foto" maxlength="50"/> 
      </div>
      <div class="clearfix grpelem" id="u225038"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U225059-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u225059-4" data-muse-uid="U225059" data-muse-type="txt_frame"><!-- content -->
        <p>PASSO 2</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu225076-4"><!-- group -->
        <!-- m_editable region-id="editable-static-tag-U225076-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225076-4" data-muse-uid="U225076" data-muse-type="txt_frame"><!-- content -->
         <p>ATUALIZE OS SERVIÇOS QUE VOCÊ FAZ</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners grpelem" id="u225087"><!-- simple frame --></div>
       </div>
       <div class="clearfix colelem" id="pu225077"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225077"><!-- column -->
         <div class="clearfix colelem" id="pu225067"><!-- group -->
          <div class="grpelem" id="u225067"><!-- custom html -->
           <input type="checkbox"  name="Pedido[]" value="Casamento" />
          </div>
          <!-- m_editable region-id="editable-static-tag-U225097-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225097-4" data-muse-uid="U225097" data-muse-type="txt_frame"><!-- content -->
           <p>Casamento</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225066"><!-- group -->
          <div class="grpelem" id="u225066"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festa de Aniversario">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225058-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225058-4" data-muse-uid="U225058" data-muse-type="txt_frame"><!-- content -->
           <p>Festa de Aniversário</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225111"><!-- group -->
          <div class="grpelem" id="u225111"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Eventos Sociais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225050-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225050-4" data-muse-uid="U225050" data-muse-type="txt_frame"><!-- content -->
           <p>Eventos Sociais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225041"><!-- group -->
          <div class="grpelem" id="u225041"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Festas Infantis">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225069-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225069-4" data-muse-uid="U225069" data-muse-type="txt_frame"><!-- content -->
           <p>Festas Infantis</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225049-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225049-4" data-muse-uid="U225049" data-muse-type="txt_frame"><!-- content -->
         <p>EVENTO</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu225112"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225112"><!-- column -->
         <div class="clearfix colelem" id="pu225054"><!-- group -->
          <div class="grpelem" id="u225054"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Infantil">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225042-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225042-4" data-muse-uid="U225042" data-muse-type="txt_frame"><!-- content -->
           <p>Infantil</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225057"><!-- group -->
          <div class="grpelem" id="u225057"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Gestante">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225115-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225115-4" data-muse-uid="U225115" data-muse-type="txt_frame"><!-- content -->
           <p>Gestante</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225099"><!-- group -->
          <div class="grpelem" id="u225099"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Casal">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225051-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225051-4" data-muse-uid="U225051" data-muse-type="txt_frame"><!-- content -->
           <p>Casal</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225089"><!-- group -->
          <div class="grpelem" id="u225089"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Banda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225096-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225096-4" data-muse-uid="U225096" data-muse-type="txt_frame"><!-- content -->
           <p>Banda</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225063-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225063-4" data-muse-uid="U225063" data-muse-type="txt_frame"><!-- content -->
         <p>BOOK</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu225078"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225078"><!-- column -->
         <div class="clearfix colelem" id="pu225086"><!-- group -->
          <div class="grpelem" id="u225086"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Paisagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225100-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225100-4" data-muse-uid="U225100" data-muse-type="txt_frame"><!-- content -->
           <p>Paisagem</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225104"><!-- group -->
          <div class="grpelem" id="u225104"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Vida Submarina">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225064-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225064-4" data-muse-uid="U225064" data-muse-type="txt_frame"><!-- content -->
           <p>Vida Submarina</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225073"><!-- group -->
          <div class="grpelem" id="u225073"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Animais">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225074-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225074-4" data-muse-uid="U225074" data-muse-type="txt_frame"><!-- content -->
           <p>Animais</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225056"><!-- group -->
          <div class="grpelem" id="u225056"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Aereas">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225085-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225085-4" data-muse-uid="U225085" data-muse-type="txt_frame"><!-- content -->
           <p>Aéreas</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225120-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225120-4" data-muse-uid="U225120" data-muse-type="txt_frame"><!-- content -->
         <p>NATUREZA</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu225109"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225109"><!-- column -->
         <div class="clearfix colelem" id="pu225093"><!-- group -->
          <div class="grpelem" id="u225093"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Arquitetura">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225098-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225098-4" data-muse-uid="U225098" data-muse-type="txt_frame"><!-- content -->
           <p>Arquitetura</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225119"><!-- group -->
          <div class="grpelem" id="u225119"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Esportes">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225105-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225105-4" data-muse-uid="U225105" data-muse-type="txt_frame"><!-- content -->
           <p>Esportes</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225114"><!-- group -->
          <div class="grpelem" id="u225114"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Josnalistica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225107-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225107-4" data-muse-uid="U225107" data-muse-type="txt_frame"><!-- content -->
           <p>Jornalística</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225083"><!-- group -->
          <div class="grpelem" id="u225083"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Documentarista">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225072-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225072-4" data-muse-uid="U225072" data-muse-type="txt_frame"><!-- content -->
           <p>Documentarista</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225103-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225103-4" data-muse-uid="U225103" data-muse-type="txt_frame"><!-- content -->
         <p>OUTROS</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu225088"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225088"><!-- column -->
         <div class="clearfix colelem" id="pu225126"><!-- group -->
          <div class="grpelem" id="u225126"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Institucional">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225118-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225118-4" data-muse-uid="U225118" data-muse-type="txt_frame"><!-- content -->
           <p>Institucional</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225092"><!-- group -->
          <div class="grpelem" id="u225092"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Produtos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225094-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225094-4" data-muse-uid="U225094" data-muse-type="txt_frame"><!-- content -->
           <p>Produtos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225117"><!-- group -->
          <div class="grpelem" id="u225117"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Moda">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225068-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225068-4" data-muse-uid="U225068" data-muse-type="txt_frame"><!-- content -->
           <p>Moda</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225043"><!-- group -->
          <div class="grpelem" id="u225043"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Modelos">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225079-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225079-4" data-muse-uid="U225079" data-muse-type="txt_frame"><!-- content -->
           <p>Modelos</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225062"><!-- group -->
          <div class="grpelem" id="u225062"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Comercial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225102-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225102-4" data-muse-uid="U225102" data-muse-type="txt_frame"><!-- content -->
           <p>Comercial</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225048"><!-- group -->
          <div class="grpelem" id="u225048"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Industrial">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225095-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225095-4" data-muse-uid="U225095" data-muse-type="txt_frame"><!-- content -->
           <p>Industrial</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225084-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225084-4" data-muse-uid="U225084" data-muse-type="txt_frame"><!-- content -->
         <p>PUBLICIDADE</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="clearfix colelem" id="pu225046"><!-- group -->
        <div class="rounded-corners clearfix grpelem" id="u225046"><!-- group -->
         <div class="clearfix grpelem" id="pu225060"><!-- column -->
          <div class="colelem" id="u225060"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Abstrata">
          </div>
          <div class="colelem" id="u225113"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Nu Artistico">
          </div>
         </div>
         <div class="clearfix grpelem" id="pu225106-4"><!-- column -->
          <!-- m_editable region-id="editable-static-tag-U225106-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u225106-4" data-muse-uid="U225106" data-muse-type="txt_frame"><!-- content -->
           <p>Abstrata</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id="editable-static-tag-U225052-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix colelem" id="u225052-4" data-muse-uid="U225052" data-muse-type="txt_frame"><!-- content -->
           <p>Nú Artístico</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225123-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225123-4" data-muse-uid="U225123" data-muse-type="txt_frame"><!-- content -->
         <p>ARTÍSTICA</p>
        </div>
        <!-- /m_editable -->
       </div>
       <div class="rounded-corners clearfix colelem" id="u225061"><!-- column -->
        <div class="position_content" id="u225061_position_content">
         <!-- m_editable region-id="editable-static-tag-U225125-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u225125-4" data-muse-uid="U225125" data-muse-type="txt_frame"><!-- content -->
          <p>CIENTÍFICA</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu225124"><!-- group -->
          <div class="grpelem" id="u225124"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Medica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225053-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225053-4" data-muse-uid="U225053" data-muse-type="txt_frame"><!-- content -->
           <p>Médica</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class="clearfix colelem" id="pu225090"><!-- group -->
          <div class="grpelem" id="u225090"><!-- custom html -->
           <input type="checkbox" name="Pedido[]" value="Odontologica">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225091-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225091-4" data-muse-uid="U225091" data-muse-type="txt_frame"><!-- content -->
           <p>Odontológica</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix colelem" id="u225047"><!-- column -->
        <div class="position_content" id="u225047_position_content">
         <!-- m_editable region-id="editable-static-tag-U225082-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u225082-4" data-muse-uid="U225082" data-muse-type="txt_frame"><!-- content -->
          <p>FAZ FILMAGEM?</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu225055"><!-- group -->
          <div class="grpelem" id="u225055"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Sim">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225075-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225075-4" data-muse-uid="U225075" data-muse-type="txt_frame"><!-- content -->
           <p>SIM</p>
          </div>
          <!-- /m_editable -->
          <div class="grpelem" id="u225039"><!-- custom html -->
           <input type="radio" name="Filmagem" value="Nao" checked>
          </div>
          <!-- m_editable region-id="editable-static-tag-U225081-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225081-4" data-muse-uid="U225081" data-muse-type="txt_frame"><!-- content -->
           <p>NÃO</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class="rounded-corners clearfix colelem" id="u225108"><!-- group -->
        <div class="clearfix grpelem" id="pu225044-4"><!-- column -->
         <!-- m_editable region-id="editable-static-tag-U225044-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="clearfix colelem" id="u225044-4" data-muse-uid="U225044" data-muse-type="txt_frame"><!-- content -->
          <p>EDIÇÃO</p>
         </div>
         <!-- /m_editable -->
         <div class="clearfix colelem" id="pu225116"><!-- group -->
          <div class="grpelem" id="u225116"><!-- custom html -->
           <input type="checkbox" name="Edicao[]" value="imagem">
          </div>
          <!-- m_editable region-id="editable-static-tag-U225101-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
          <div class="clearfix grpelem" id="u225101-4" data-muse-uid="U225101" data-muse-type="txt_frame"><!-- content -->
           <p>Imagem</p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
        <div class="grpelem" id="u225080"><!-- custom html -->
         <input type="checkbox" name="Edicao[]" value="Video">
        </div>
        <!-- m_editable region-id="editable-static-tag-U225065-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225065-4" data-muse-uid="U225065" data-muse-type="txt_frame"><!-- content -->
         <p>Vídeo</p>
        </div>
        <!-- /m_editable -->
       </div>
       <!-- m_editable region-id="editable-static-tag-U225071-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u225071-4" data-muse-uid="U225071" data-muse-type="txt_frame"><!-- content -->
        <p>FALE UM POUCO SOBRE VOCÊ</p>
       </div>
       <!-- /m_editable -->
       <div class="rounded-corners clearfix colelem" id="u225040"><!-- group -->
        <div class="grpelem" id="u225070"><!-- custom html -->
         <textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea>
        </div>
       </div>
       <!-- m_editable region-id="editable-static-tag-U225045-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u225045-4" data-muse-uid="U225045" data-muse-type="txt_frame"><!-- content -->
        <p>Insira seu email e senha corretamente.</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu225121"><!-- group -->
        <div class="clearfix grpelem" id="u225121"><!-- group -->
         <!-- m_editable region-id="editable-static-tag-U225122-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
         <div class="rounded-corners clearfix grpelem" id="u225122-4" data-muse-uid="U225122" data-muse-type="txt_frame"><!-- content -->
          <p>CONFIRMAR</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class="grpelem" id="u225110"><!-- custom html -->
         <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form>
        </div>
       </div>
      </div>
      <div class="clearfix grpelem" id="u225127"><!-- column -->
       <!-- m_editable region-id="editable-static-tag-U225167-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
       <div class="clearfix colelem" id="u225167-4" data-muse-uid="U225167" data-muse-type="txt_frame"><!-- content -->
        <p>NOME COMPLETO</p>
       </div>
       <!-- /m_editable -->
       <div class="clearfix colelem" id="pu225130"><!-- group -->
        <div class="clearfix grpelem" id="u225130"><!-- column -->
         <div class="rounded-corners colelem" id="u225132"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u225135"><!-- simple frame --></div>
         <div class="clearfix colelem" id="pu225138"><!-- group -->
          <div class="rounded-corners grpelem" id="u225138"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u225142"><!-- simple frame --></div>
         </div>
         <div class="rounded-corners colelem" id="u225133"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u225140"><!-- simple frame --></div>
         <div class="rounded-corners colelem" id="u225139"><!-- simple frame --></div>
         <div class="clearfix colelem" id="pu225144"><!-- group -->
          <div class="rounded-corners grpelem" id="u225144"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u225137"><!-- simple frame --></div>
          <div class="rounded-corners grpelem" id="u225134"><!-- simple frame --></div>
         </div>
         <div class="rounded-corners colelem" id="u225143"><!-- simple frame --></div>
        </div>
        <!-- m_editable region-id="editable-static-tag-U225162-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225162-4" data-muse-uid="U225162" data-muse-type="txt_frame"><!-- content -->
         <p>NOME DA EMPRESA</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225149-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225149-4" data-muse-uid="U225149" data-muse-type="txt_frame"><!-- content -->
         <p>TELEFONE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225168-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225168-4" data-muse-uid="U225168" data-muse-type="txt_frame"><!-- content -->
         <p>CELULAR</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225159-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225159-4" data-muse-uid="U225159" data-muse-type="txt_frame"><!-- content -->
         <p>EMAIL</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225171-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225171-4" data-muse-uid="U225171" data-muse-type="txt_frame"><!-- content -->
         <p>NÚMERO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225170-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225170-4" data-muse-uid="U225170" data-muse-type="txt_frame"><!-- content -->
         <p>CIDADE</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225164-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225164-4" data-muse-uid="U225164" data-muse-type="txt_frame"><!-- content -->
         <p>ESTADO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225157-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225157-4" data-muse-uid="U225157" data-muse-type="txt_frame"><!-- content -->
         <p>CEP</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225165-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225165-4" data-muse-uid="U225165" data-muse-type="txt_frame"><!-- content -->
         <p>ENDEREÇO</p>
        </div>
        <!-- /m_editable -->
        <!-- m_editable region-id="editable-static-tag-U225169-BP_320" template="fotografo-editar.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix grpelem" id="u225169-4" data-muse-uid="U225169" data-muse-type="txt_frame"><!-- content -->
         <p>CNPJ</p>
        </div>
        <!-- /m_editable -->
        <div class="grpelem" id="u225146"><!-- custom html -->
         <input type="text" id="nome05" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225152"><!-- custom html -->
         <input type="text" id="nome_emp05" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225145"><!-- custom html -->
         <input type="text" id="tel05" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225160"><!-- custom html -->
         <input type="text" id="cel05" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225156"><!-- custom html -->
         <input type="email" id="email05" disabled='true' name="txt_email5" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225129"><!-- custom html -->
         <input type="text" id="doc_foto05" name="txt_doc_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/>
        </div>
        <div class="grpelem" id="u225161"><!-- custom html -->
         <input type="text" id="endereco05" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225148"><!-- custom html -->
         <input type="text" id="num05" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225163"><!-- custom html -->
         <input type="text" id="cep05" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
        </div>
        <div class="grpelem" id="u225150"><!-- custom html -->
         <select id="estado05" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
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
        <div class="grpelem" id="u225128"><!-- custom html -->
         <select id="cidade05" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
        </div>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="2960" data-content-above-spacer="2960" data-content-below-spacer="195"></div>
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
   </body>
</html>
