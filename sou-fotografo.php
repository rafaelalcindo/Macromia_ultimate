<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="O Macromia foi desenvolvido especialmente para fotógrafo profissional. Nós investimos em campanhas por você."/>
  <meta name="keywords" content="Macromia, Fotógrafo de Casamento, Decoração de Casamento, Fotografia Profissional, Fotografia, Fotógrafo, Estúdio de Fotografia, Studio de Fotógrafia, Fotógrafo de Evento, Newborn, Bolo Fake, "/>
  <meta name="generator" content="2017.0.1.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "sou-fotografo.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Profissionais de Fotografia | Macromia</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=66908463"/>
  <link rel="stylesheet" type="text/css" href="css/sou-fotografo.css?crc=268903430" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_sou-fotografo.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4177069693"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_sou-fotografo.css?crc=3871345081" id="nomq_pagesheet"/>
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
<?php  include('head_pages/head_sou_foto.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {  
        
        $('#u36898').show();
        $('#val_foto').val('cpf');
        $('#val_foto02').val('cpf');
        $('#val_foto03').val('cpf');
        $('#val_foto04').val('cpf');
        $('#val_foto05').val('cpf');

        var cli_email = $('#cli_email').val();
        var cli_senha = $('#cli_senha').val();
        var foto_email = $('#foto_email').val();
        var foto_senha = $('#foto_senha').val();
        var foto_ident = $('#foto_ident').val();

        var erro_aut  = "<?php echo $Aut_error; ?>";
        var erro_cad  = "<?php echo $Aut_errorCad ?>";
        var erro_ati  = "<?php echo $Aut_ativacao ?>";

        
        if(erro_aut != " "){
          $('#u295103-4').children().remove();
          $('#u295103-4').append("<p>"+erro_aut+"</p>");

          $('#u292946-4').children().remove();
          $('#u292946-4').append("<p>"+erro_aut+"</p>");

          $('#u180991-4').children().remove();
          $('#u180991-4').append("<p>"+erro_aut+"</p>");

          $('#u180991-4').children().remove();
          $('#u180991-4').append("<p>"+erro_aut+"</p>");
        }else if(erro_ati != " "){
          $('#u295103-4').children().remove();
          $('#u295103-4').append("<p>"+erro_ati+"</p>");

          $('#u292946-4').children().remove();
          $('#u292946-4').append("<p>"+erro_ati+"</p>");

          $('#u180991-4').children().remove();
          $('#u180991-4').append("<p>"+erro_ati+"</p>");

          $('#u269861-4').children().remove();
          $('#u180991-4').append("<p>"+erro_ati+"</p>");
        }else{
          $('#u295103-4').children().remove();
          $('#u295103-4').append("<p>   -   </p>");

          $('#u292946-4').children().remove();
          $('#u292946-4').append("<p>   -   </p>");

          $('#u180991-4').children().remove();
          $('#u180991-4').append("<p>   -   </p>");

          $('#u269861-4').children().remove();
          $('#u269861-4').append("<p>   -   </p>");
        }


        $('#u185455-4').hide();
        $('#u195344-4').hide();
        $('#u180925-4').hide();

        if(erro_cad != " "){
          $('#u185455-4').show();
          $('#u185455-4').children().remove();
          $('#u185455-4').append("<p>"+erro_cad+"</p>");

          $('#u195344-4').show();
          $('#u195344-4').children().remove();
          $('#u195344-4').append("<p>"+erro_cad+"</p>");

          $('#u180925-4').show();
          $('#u180925-4').children().remove();
          $('#u180925-4').append("<p>"+erro_cad+"</p>");

          $('#u183196-4').show();
          $('#u183196-4').children().remove();
          $('#u183196-4').append("<p>"+erro_cad+"</p>");
        }else{
          $('#u185455-4').hide();
          $('#u195344-4').hide();
          $('#u180925-4').hide();
          $('#u183196-4').hide();
        }



        if( (cli_email != " " && cli_senha != " ") || (foto_email != " " && foto_senha != " " && foto_ident != " ")) {
          $('#u11522').show();
          $('#u292004-4-bw').hide();
          $('#u292003-4').hide();

        /* perfil imagem topo */ 
        

        /* perfil sair topo */
         


        /* boas vindas topo */
        


        if (foto_email != " " && cli_email == " ") {
            /* barra minha conta foto */
            $('#u330134-8').children().remove('p'); 
            $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'> Sair</a> </p> ");

            $('#u350754-11').children().remove(); 
              var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>PEDIDOS</a></p>";
              $('#u350754-11').append(link_foto);


            
        } else {
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

<script type="text/javascript">
         jQuery(function($){
             $("#tel").mask("(99)9999-9999");
             $("#cel").mask("(99)99999-9999");
             $("#cpf").mask("999.999.999-99");
             $("#cnpj").mask("99.999.999/9999-99");

             $("#tel02").mask("(99)9999-9999");
             $("#cel02").mask("(99)99999-9999");
             $("#cpf02").mask("999.999.999-99");
             $("#cnpj02").mask("99.999.999/9999-99");

             $("#tel03").mask("(99)9999-9999");
             $("#cel03").mask("(99)99999-9999");
             $("#cpf03").mask("999.999.999-99");
             $("#cnpj03").mask("99.999.999/9999-99");

             $("#tel04").mask("(99)9999-9999");
             $("#cel04").mask("(99)99999-9999");
             $("#cpf04").mask("999.999.999-99");
             $("#cnpj04").mask("99.999.999/9999-99");

             $("#tel05").mask("(99)9999-9999");
             $("#cel05").mask("(99)99999-9999");
             $("#cpf05").mask("999.999.999-99");
             $("#cnpj05").mask("99.999.999/9999-99");
          });
     </script>

<script type="text/javascript">

       $(function(){

            var msgError = " ";

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

            $('#rd_cpf').change(function(){                
                $('#val_foto').val('cpf');
            });

            $('#rd_cpf02').change(function(){                
                $('#val_foto02').val('cpf');
            });

            $('#rd_cpf03').change(function(){                
                $('#val_foto03').val('cpf');
            });

            $('#rd_cpf04').change(function(){                
                $('#val_foto04').val('cpf');
            });

            $('#rd_cpf05').change(function(){                
                $('#val_foto05').val('cpf');
            });


            $('#rd_cnpj').change(function(){                          
                $('#val_foto').val('cnpj');
            });

            $('#rd_cnpj02').change(function(){                          
                $('#val_foto02').val('cnpj');
            });

            $('#rd_cnpj03').change(function(){                          
                $('#val_foto03').val('cnpj');
            });

            $('#rd_cnpj04').change(function(){                          
                $('#val_foto04').val('cnpj');
            });

            $('#rd_cnpj05').change(function(){                          
                $('#val_foto05').val('cnpj');
            });


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

                }else{                  
                  msgError = "Por favor escolha a opção entre fotografo fisico ou jurídico";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();
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
                    var cpf_val   = $('#cpf02').val();
                    var cpf_passa = document.getElementById('val_cpf02');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj02').val();
                    var cnpj_passa = document.getElementById('val_cnpj02');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }else{                  
                  msgError = "Por favor escolha a opção entre fotografo fisico ou jurídico";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();
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
                    var cpf_val   = $('#cpf03').val();
                    var cpf_passa = document.getElementById('val_cpf03');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj03').val();
                    var cnpj_passa = document.getElementById('val_cnpj03');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }else{                  
                  msgError = "Por favor escolha a opção entre fotografo fisico ou jurídico";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();
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

                var foto_nome   = $('#nome04').val();
                var foto_emp    = $('#nome_emp04').val();
                var foto_end    = $('#endereco04').val();
                var foto_num    = $('#num04').val();
                var foto_cpf    = $('#cpf04').val();
                var foto_cnpj   = $('#cnpj04').val();
                var foto_tel    = $('#tel04').val();
                var foto_cel    = $("#cel04").val();
                

                if($("input[name='rd_ident']:checked").val() == 'cpf'){
                    var cpf_val   = $('#cpf04').val();
                    var cpf_passa = document.getElementById('val_cpf04');
                    cpf_passa.value = cpf_val;
                    if(cpf_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CPF!"; MsgErrorCadFoto(msgError); }

                }else if($("input[name='rd_ident']:checked").val() == 'cnpj' ){
                    var cnpj_val   = $('#cnpj04').val();
                    var cnpj_passa = document.getElementById('val_cnpj04');
                    cnpj_passa.value = cnpj_val;
                    if(cnpj_passa.value == ''){ event.preventDefault(); msgError="Por favor digite seu CNPJ!"; MsgErrorCadFoto(msgError); }

                }else{                  
                  msgError = "Por favor escolha a opção entre fotografo fisico ou jurídico";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();
                }

                if( !($('#senha04').val() == $('#senhaConf04').val()) ){                  
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

                }else{                  
                  msgError = "Por favor escolha a opção entre fotografo fisico ou jurídico";
                  MsgErrorCadFoto(msgError);
                  event.preventDefault();
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

          $('#u195344-4').show();
          $('#u195344-4').children().remove();
          $('#u195344-4').append("<p>"+msg+"</p>");

          $('#u180925-4').show();
          $('#u180925-4').children().remove();
          $('#u180925-4').append("<p>"+msg+"</p>");

          $('#u183196-4').show();
          $('#u183196-4').children().remove();
          $('#u183196-4').append("<p>"+msg+"</p>");
        }



} );



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
   <div class="clearfix borderbox" id="page"><!-- column -->
    <div class="clearfix colelem" id="pu2643"><!-- group -->
     <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
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
     <div id="u56895-wrapper">
      <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
     </div>
     <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
     <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    </div>
    <!-- m_editable region-id="editable-static-tag-U394264-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u394264-4" data-muse-uid="U394264" data-muse-type="txt_frame" data-content-guid="u394264-4_content"><!-- content -->
     <h1>FOTOGRAFIA PROFISSIONAL</h1>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U488375-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u488375-4" data-muse-uid="U488375" data-muse-type="txt_frame" data-content-guid="u488375-4_content"><!-- content -->
     <p>CADASTRE-SE E VEJA A LISTA DE PEDIDOS DE PESSOAS QUE ESTÃO PRECISANDO DE FOTÓGRAFOS(AS). ADQUIRA O PEDIDO E ENTRE EM CONTATO PARA OFERECER SUA PROPOSTA.</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36873-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u36873-4" data-muse-uid="U36873" data-muse-type="txt_frame" data-content-guid="u36873-4_content"><!-- content -->
     <p>PASSO 1</p>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36872-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u36872-4" data-muse-uid="U36872" data-muse-type="txt_frame" data-content-guid="u36872-4_content"><!-- content -->
     <p>FAÇA SEU LOGIN OU CADASTRE-SE</p>
    </div>
    <!-- /m_editable -->
    <div class="browser_width colelem" id="accordionu295086-bw">
     <ul class="AccordionWidget clearfix" id="accordionu295086"><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem100" id="u295087"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U295104-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem100" id="u295104-4" data-muse-uid="U295104" data-muse-type="txt_frame"><!-- content --><p>JÁ TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem100" id="u295088"><!-- group --><div class="clearfix grpelem" id="u295089"><!-- column --><div class="clearfix colelem" id="u295090"><!-- column --><div class="colelem" id="u295091"><!-- custom html --><?= (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
      <input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
        <form method="POST" action="seleciona_tipo_cli.php" id="frm_logar"></div><div class="clearfix colelem" id="pu295092"><!-- group --><div class="clearfix grpelem" id="u295092"><!-- column --><div class="clearfix colelem" id="pu295093"><!-- group --><div class="clearfix grpelem" id="u295093"><!-- column --><!-- m_editable region-id="editable-static-tag-U295095-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u295095-4" data-muse-uid="U295095" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u295097"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U295096-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u295096-4" data-muse-uid="U295096" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u295094"><!-- simple frame --></div></div><div class="grpelem" id="u295098"><!-- custom html --><input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u295099"><!-- custom html --><input type="password" name="txt_senha" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div><!-- m_editable region-id="editable-static-tag-U295100-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix colelem" id="u295100-4" data-muse-uid="U295100" data-muse-type="txt_frame"><!-- content --><p>LOGIN</p></div><!-- /m_editable --></div><div class="rounded-corners grpelem" id="u295101"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  /></div></div></div><div class="colelem" id="u295102"><!-- custom html --><input type="hidden" value="<?= basename($_SERVER['PHP_SELF']) ?>" id="page_name" name="page_name"/>
</form></div></div><!-- m_editable region-id="editable-static-tag-U295103-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u295103-4" data-muse-uid="U295103" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div></li>
     </ul>
    </div>
    <!-- m_editable region-id="editable-static-tag-U407422-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <a class="nonblock nontext clearfix colelem shared_content" id="u407422-4" href="http://macromia.com.br/esqueci-minha-senha.php" data-muse-uid="U407422" data-muse-type="txt_frame" data-content-guid="u407422-4_content"><!-- content --><p><span id="u407422">Esqueci minha senha</span></p></a>
    <!-- /m_editable -->
    <div class="clearfix colelem" id="pu272125"><!-- group -->
     <div class="browser_width grpelem shared_content" id="u272125-bw" data-content-guid="u272125-bw_content">
      <div id="u272125"><!-- simple frame --></div>
     </div>
     <div class="browser_width grpelem" id="accordionu185391-bw">
      <ul class="AccordionWidget clearfix" id="accordionu185391"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100" id="u185392"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U185393-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem100" id="u185393-4" data-muse-uid="U185393" data-muse-type="txt_frame"><!-- content --><p>NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem100" id="u185394"><!-- group --><div class="grpelem" id="u185395"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_foto">

<input type="hidden" id="val_foto" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj" name="txt_cnpj_foto" value="" />
</div><div class="clearfix grpelem" id="u185396"><!-- group --><div class="clearfix grpelem" id="u185397"><!-- column --><div class="clearfix colelem" id="pu185404-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U185404-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185404-4" data-muse-uid="U185404" data-muse-type="txt_frame"><!-- content --><p>NOME COMPLETO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185498-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185498-4" data-muse-uid="U185498" data-muse-type="txt_frame"><!-- content --><p>NOME DA EMPRESA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185403-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U185403-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185403-4" data-muse-uid="U185403" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u185405"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U185452-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185452-4" data-muse-uid="U185452" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185504-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185504-4" data-muse-uid="U185504" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185464-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185464-4" data-muse-uid="U185464" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185406-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185406-4" data-muse-uid="U185406" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185451-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185451-4" data-muse-uid="U185451" data-muse-type="txt_frame"><!-- content --><p>NÚMERO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185422-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185422-4" data-muse-uid="U185422" data-muse-type="txt_frame"><!-- content --><p>ESTADO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185507-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185507-4" data-muse-uid="U185507" data-muse-type="txt_frame"><!-- content --><p>CEP</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185413-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185413-4" data-muse-uid="U185413" data-muse-type="txt_frame"><!-- content --><p>ENDEREÇO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185424-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185424-4" data-muse-uid="U185424" data-muse-type="txt_frame"><!-- content --><p>CIDADE</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185516-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185516-4" data-muse-uid="U185516" data-muse-type="txt_frame"><!-- content --><p>CPF</p></div><!-- /m_editable --><div class="clearfix grpelem" id="u211779"><!-- group --><div class="clearfix grpelem" id="u211793"><!-- group --><div class="clearfix grpelem" id="u211786"><!-- column --><div class="clearfix colelem" id="pu185444"><!-- group --><div class="rounded-corners grpelem" id="u185444"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185481"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu185502"><!-- group --><div class="rounded-corners grpelem" id="u185502"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185438"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu185467"><!-- group --><div class="rounded-corners grpelem" id="u185467"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185448"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185506"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu185408"><!-- group --><div class="rounded-corners grpelem" id="u185408"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185486"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu185494"><!-- group --><div class="rounded-corners grpelem" id="u185494"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185488"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u185440"><!-- simple frame --></div></div></div></div><div class="grpelem" id="u185474"><!-- custom html --><input type="text" id="nome" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185407"><!-- custom html --><input type="text" id="nome_emp" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185508"><!-- custom html --><input type="text" id="tel" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185482"><!-- custom html --><input type="text" id="cel" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185466"><!-- custom html --><input type="email" id="email" name="txt_email_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="rounded-corners grpelem" id="u185400"><!-- custom html --><input type="radio" id="rd_cpf" name="rd_ident" value="cpf" checked></div><div class="grpelem" id="u185523"><!-- custom html --><input type="text" id="cpf" name="txt_cpf" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/></div><div class="grpelem" id="u185427"><!-- custom html --><input type="password" id="senha" name="txt_senha_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185435"><!-- custom html --><input type="password" id="senhaConf" name="txt_senhaconf_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185511"><!-- custom html --><input type="text" id="endereco" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185489"><!-- custom html --><input type="text" id="num" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185420"><!-- custom html --><input type="text" id="cep" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u185500"><!-- custom html --><select id="estado" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
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
</div><div class="grpelem" id="u185487"><!-- custom html --><select id="cidade" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select></div></div></div><!-- m_editable region-id="editable-static-tag-U185518-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185518-4" data-muse-uid="U185518" data-muse-type="txt_frame"><!-- content --><p>PASSO 2</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu185441-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U185441-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185441-4" data-muse-uid="U185441" data-muse-type="txt_frame"><!-- content --><p>SELECIONE O TIPO DE SERVIÇO QUE VOCÊ FAZ</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u185402"><!-- simple frame --></div></div><div class="clearfix colelem" id="ppu185462"><!-- group --><div class="clearfix grpelem" id="pu185462"><!-- group --><div class="rounded-corners clearfix grpelem" id="u185462"><!-- column --><div class="clearfix colelem" id="pu185529"><!-- group --><div class="grpelem" id="u185529"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Infantil"></div><!-- m_editable region-id="editable-static-tag-U185461-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185461-4" data-muse-uid="U185461" data-muse-type="txt_frame"><!-- content --><p>Infantil</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185521"><!-- group --><div class="grpelem" id="u185521"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Gestante"></div><!-- m_editable region-id="editable-static-tag-U185415-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185415-4" data-muse-uid="U185415" data-muse-type="txt_frame"><!-- content --><p>Gestante</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185460"><!-- group --><div class="grpelem" id="u185460"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Casal"></div><!-- m_editable region-id="editable-static-tag-U185526-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185526-4" data-muse-uid="U185526" data-muse-type="txt_frame"><!-- content --><p>Book em Geral</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185398"><!-- group --><div class="grpelem" id="u185398"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Banda"></div><!-- m_editable region-id="editable-static-tag-U185490-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185490-4" data-muse-uid="U185490" data-muse-type="txt_frame"><!-- content --><p>Banda</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185443-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185443-4" data-muse-uid="U185443" data-muse-type="txt_frame"><!-- content --><p>BOOK</p></div><!-- /m_editable --></div><div class="clearfix grpelem" id="pu185524"><!-- group --><div class="rounded-corners clearfix grpelem" id="u185524"><!-- column --><div class="clearfix colelem" id="pu185470"><!-- group --><div class="grpelem" id="u185470"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Arquitetura"></div><!-- m_editable region-id="editable-static-tag-U185432-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185432-4" data-muse-uid="U185432" data-muse-type="txt_frame"><!-- content --><p>Arquitetura</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185434"><!-- group --><div class="grpelem" id="u185434"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Esportes"></div><!-- m_editable region-id="editable-static-tag-U185459-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185459-4" data-muse-uid="U185459" data-muse-type="txt_frame"><!-- content --><p>Esportes</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185421"><!-- group --><div class="grpelem" id="u185421"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Josnalistica"></div><!-- m_editable region-id="editable-static-tag-U185418-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185418-4" data-muse-uid="U185418" data-muse-type="txt_frame"><!-- content --><p>Jornalística</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185510"><!-- group --><div class="grpelem" id="u185510"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Documentarista"></div><!-- m_editable region-id="editable-static-tag-U185423-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185423-4" data-muse-uid="U185423" data-muse-type="txt_frame"><!-- content --><p>Documentarista</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185492-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185492-4" data-muse-uid="U185492" data-muse-type="txt_frame"><!-- content --><p>OUTROS</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix grpelem" id="u185522"><!-- column --><div class="clearfix colelem" id="pu185409"><!-- group --><div class="grpelem" id="u185409"><!-- custom html --><input type="checkbox"  name="Pedido[]" value="Casamento" /></div><!-- m_editable region-id="editable-static-tag-U185456-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185456-4" data-muse-uid="U185456" data-muse-type="txt_frame"><!-- content --><p>Casamento</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185426"><!-- group --><div class="grpelem" id="u185426"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festa de Aniversario"></div><!-- m_editable region-id="editable-static-tag-U185493-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185493-4" data-muse-uid="U185493" data-muse-type="txt_frame"><!-- content --><p>Festa de Aniversário</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185495"><!-- group --><div class="grpelem" id="u185495"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Eventos Sociais"></div><!-- m_editable region-id="editable-static-tag-U185430-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185430-4" data-muse-uid="U185430" data-muse-type="txt_frame"><!-- content --><p>Eventos Sociais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185425"><!-- group --><div class="grpelem" id="u185425"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festas Infantis"></div><!-- m_editable region-id="editable-static-tag-U185512-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185512-4" data-muse-uid="U185512" data-muse-type="txt_frame"><!-- content --><p>Festas Infantis</p></div><!-- /m_editable --></div></div><div class="rounded-corners clearfix grpelem" id="u185446"><!-- column --><div class="clearfix colelem" id="pu185509"><!-- group --><div class="grpelem" id="u185509"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Paisagem"></div><!-- m_editable region-id="editable-static-tag-U185478-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185478-4" data-muse-uid="U185478" data-muse-type="txt_frame"><!-- content --><p>Paisagem</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185431"><!-- group --><div class="grpelem" id="u185431"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Vida Submarina"></div><!-- m_editable region-id="editable-static-tag-U185449-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185449-4" data-muse-uid="U185449" data-muse-type="txt_frame"><!-- content --><p>Vida Submarina</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185439"><!-- group --><div class="grpelem" id="u185439"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Animais"></div><!-- m_editable region-id="editable-static-tag-U185514-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185514-4" data-muse-uid="U185514" data-muse-type="txt_frame"><!-- content --><p>Animais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185429"><!-- group --><div class="grpelem" id="u185429"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Aereas"></div><!-- m_editable region-id="editable-static-tag-U185476-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185476-4" data-muse-uid="U185476" data-muse-type="txt_frame"><!-- content --><p>Aéreas</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185480-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185480-4" data-muse-uid="U185480" data-muse-type="txt_frame"><!-- content --><p>NATUREZA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185501-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185501-4" data-muse-uid="U185501" data-muse-type="txt_frame"><!-- content --><p>EVENTO</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pppu185401"><!-- group --><div class="clearfix grpelem" id="ppu185401"><!-- column --><div class="clearfix colelem" id="pu185401"><!-- group --><div class="rounded-corners clearfix grpelem" id="u185401"><!-- group --><div class="clearfix grpelem" id="pu185503"><!-- column --><div class="colelem" id="u185503"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Abstrata"></div><div class="colelem" id="u185411"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Nu Artistico"></div></div><div class="clearfix grpelem" id="pu185513-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U185513-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185513-4" data-muse-uid="U185513" data-muse-type="txt_frame"><!-- content --><p>Abstrata</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U185433-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185433-4" data-muse-uid="U185433" data-muse-type="txt_frame"><!-- content --><p>Nú Artístico</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185465-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185465-4" data-muse-uid="U185465" data-muse-type="txt_frame"><!-- content --><p>ARTÍSTICA</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix colelem" id="u185499"><!-- column --><div class="position_content" id="u185499_position_content"><!-- m_editable region-id="editable-static-tag-U185417-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185417-4" data-muse-uid="U185417" data-muse-type="txt_frame"><!-- content --><p>CIENTÍFICA</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu185525"><!-- group --><div class="grpelem" id="u185525"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Medica"></div><!-- m_editable region-id="editable-static-tag-U185447-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185447-4" data-muse-uid="U185447" data-muse-type="txt_frame"><!-- content --><p>Médica</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185479"><!-- group --><div class="grpelem" id="u185479"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Odontologica"></div><!-- m_editable region-id="editable-static-tag-U185505-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185505-4" data-muse-uid="U185505" data-muse-type="txt_frame"><!-- content --><p>Odontológica</p></div><!-- /m_editable --></div></div></div></div><div class="clearfix grpelem" id="ppu185515"><!-- column --><div class="clearfix colelem" id="pu185515"><!-- group --><div class="rounded-corners clearfix grpelem" id="u185515"><!-- column --><div class="position_content" id="u185515_position_content"><!-- m_editable region-id="editable-static-tag-U185454-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185454-4" data-muse-uid="U185454" data-muse-type="txt_frame"><!-- content --><p>FAZ FILMAGEM?</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu185497"><!-- group --><div class="grpelem" id="u185497"><!-- custom html --><input type="radio" name="Filmagem" value="Sim"></div><!-- m_editable region-id="editable-static-tag-U185468-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185468-4" data-muse-uid="U185468" data-muse-type="txt_frame"><!-- content --><p>SIM</p></div><!-- /m_editable --><div class="grpelem" id="u185485"><!-- custom html --><input type="radio" name="Filmagem" value="Nao" checked></div><!-- m_editable region-id="editable-static-tag-U185412-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185412-4" data-muse-uid="U185412" data-muse-type="txt_frame"><!-- content --><p>NÃO</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix grpelem" id="u185527"><!-- group --><div class="clearfix grpelem" id="pu185442-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U185442-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185442-4" data-muse-uid="U185442" data-muse-type="txt_frame"><!-- content --><p>EDIÇÃO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu185520"><!-- group --><div class="grpelem" id="u185520"><!-- custom html --><input type="checkbox" name="Edicao[]" value="imagem"></div><!-- m_editable region-id="editable-static-tag-U185517-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185517-4" data-muse-uid="U185517" data-muse-type="txt_frame"><!-- content --><p>Imagem</p></div><!-- /m_editable --></div></div><div class="grpelem" id="u185471"><!-- custom html --><input type="checkbox" name="Edicao[]" value="Video"></div><!-- m_editable region-id="editable-static-tag-U185419-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185419-4" data-muse-uid="U185419" data-muse-type="txt_frame"><!-- content --><p>Vídeo</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185410-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185410-4" data-muse-uid="U185410" data-muse-type="txt_frame"><!-- content --><p>FALE UM POUCO SOBRE VOCÊ</p></div><!-- /m_editable --><div class="rounded-corners clearfix colelem" id="u185475"><!-- group --><div class="grpelem" id="u185436"><!-- custom html --><textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea></div></div></div><div class="rounded-corners clearfix grpelem" id="u185458"><!-- column --><div class="clearfix colelem" id="pu185473"><!-- group --><div class="grpelem" id="u185473"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Institucional"></div><!-- m_editable region-id="editable-static-tag-U185445-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185445-4" data-muse-uid="U185445" data-muse-type="txt_frame"><!-- content --><p>Institucional</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185450"><!-- group --><div class="grpelem" id="u185450"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Produtos"></div><!-- m_editable region-id="editable-static-tag-U185477-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185477-4" data-muse-uid="U185477" data-muse-type="txt_frame"><!-- content --><p>Produtos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185457"><!-- group --><div class="grpelem" id="u185457"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Moda"></div><!-- m_editable region-id="editable-static-tag-U185453-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185453-4" data-muse-uid="U185453" data-muse-type="txt_frame"><!-- content --><p>Moda</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185437"><!-- group --><div class="grpelem" id="u185437"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Modelos"></div><!-- m_editable region-id="editable-static-tag-U185399-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185399-4" data-muse-uid="U185399" data-muse-type="txt_frame"><!-- content --><p>Modelos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185428"><!-- group --><div class="grpelem" id="u185428"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Comercial"></div><!-- m_editable region-id="editable-static-tag-U185519-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185519-4" data-muse-uid="U185519" data-muse-type="txt_frame"><!-- content --><p>Comercial</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu185496"><!-- group --><div class="grpelem" id="u185496"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Industrial"></div><!-- m_editable region-id="editable-static-tag-U185472-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185472-4" data-muse-uid="U185472" data-muse-type="txt_frame"><!-- content --><p>Industrial</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U185416-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u185416-4" data-muse-uid="U185416" data-muse-type="txt_frame"><!-- content --><p>PUBLICIDADE</p></div><!-- /m_editable --></div><!-- m_editable region-id="editable-static-tag-U185455-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u185455-4" data-muse-uid="U185455" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu185483"><!-- group --><div class="clearfix grpelem" id="u185483"><!-- group --><!-- m_editable region-id="editable-static-tag-U185484-BP_infinity" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u185484-4" data-muse-uid="U185484" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR</p></div><!-- /m_editable --></div><div class="grpelem" id="u185491"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form></div></div></div></div></div></li>
      </ul>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="2016" data-content-above-spacer="2015" data-content-below-spacer="170"></div>
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
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <!-- m_editable region-id="editable-static-tag-U394264-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u394264-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U488375-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u488375-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36873-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u36873-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36872-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u36872-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="browser_width colelem" id="accordionu292804-bw">
     <ul class="AccordionWidget clearfix" id="accordionu292804"><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem100" id="u292944"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U292961-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem100" id="u292961-4" data-muse-uid="U292961" data-muse-type="txt_frame"><!-- content --><p>JÁ TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem100" id="u292945"><!-- group --><div class="clearfix grpelem" id="u292947"><!-- column --><div class="clearfix colelem" id="u292949"><!-- column --><div class="colelem" id="u292950"><!-- custom html --><?= (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
      <input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
        <form method="POST" action="seleciona_tipo_cli.php" id="frm_logar"></div><div class="clearfix colelem" id="pu292952"><!-- group --><div class="clearfix grpelem" id="u292952"><!-- column --><div class="clearfix colelem" id="pu292955"><!-- group --><div class="clearfix grpelem" id="u292955"><!-- column --><!-- m_editable region-id="editable-static-tag-U292959-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u292959-4" data-muse-uid="U292959" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u292958"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U292956-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u292956-4" data-muse-uid="U292956" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u292957"><!-- simple frame --></div></div><div class="grpelem" id="u292960"><!-- custom html --><input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u292953"><!-- custom html --><input type="password" name="txt_senha" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div><!-- m_editable region-id="editable-static-tag-U292954-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix colelem" id="u292954-4" data-muse-uid="U292954" data-muse-type="txt_frame"><!-- content --><p>LOGIN</p></div><!-- /m_editable --></div><div class="rounded-corners grpelem" id="u292951"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  /></div></div></div><div class="colelem" id="u292948"><!-- custom html --><input type="hidden" value="<?= basename($_SERVER['PHP_SELF']) ?>" id="page_name" name="page_name"/>
</form></div></div><!-- m_editable region-id="editable-static-tag-U292946-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u292946-4" data-muse-uid="U292946" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div></li>
     </ul>
    </div>
    <!-- m_editable region-id="editable-static-tag-U407422-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u407422-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu272125"><!-- group -->
     <span class="browser_width grpelem placeholder" data-placeholder-for="u272125-bw_content"><!-- placeholder node --></span>
     <div class="browser_width grpelem" id="accordionu183120-bw">
      <ul class="AccordionWidget clearfix" id="accordionu183120"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100" id="u183121"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U183258-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem100" id="u183258-4" data-muse-uid="U183258" data-muse-type="txt_frame"><!-- content --><p>NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem100" id="u183122"><!-- group --><div class="grpelem" id="u183257"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_foto02">

<input type="hidden" id="val_foto02" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf02"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj02" name="txt_cnpj_foto" value="" /></div><div class="clearfix grpelem" id="u183124"><!-- column --><div class="clearfix colelem" id="pu183136-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U183136-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183136-4" data-muse-uid="U183136" data-muse-type="txt_frame"><!-- content --><p>NOME COMPLETO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183200-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183200-4" data-muse-uid="U183200" data-muse-type="txt_frame"><!-- content --><p>NOME DA EMPRESA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183191-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U183191-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183191-4" data-muse-uid="U183191" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183184-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183184-4" data-muse-uid="U183184" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183248-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183248-4" data-muse-uid="U183248" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183245-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183245-4" data-muse-uid="U183245" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183220-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183220-4" data-muse-uid="U183220" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183187-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183187-4" data-muse-uid="U183187" data-muse-type="txt_frame"><!-- content --><p>NÚMERO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183130-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183130-4" data-muse-uid="U183130" data-muse-type="txt_frame"><!-- content --><p>ESTADO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183246-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183246-4" data-muse-uid="U183246" data-muse-type="txt_frame"><!-- content --><p>CEP</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183158-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183158-4" data-muse-uid="U183158" data-muse-type="txt_frame"><!-- content --><p>ENDEREÇO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183160-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183160-4" data-muse-uid="U183160" data-muse-type="txt_frame"><!-- content --><p>CIDADE</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183198-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183198-4" data-muse-uid="U183198" data-muse-type="txt_frame"><!-- content --><p>CPF</p></div><!-- /m_editable --><div class="clearfix grpelem" id="u211800"><!-- group --><div class="clearfix grpelem" id="u211807"><!-- column --><div class="clearfix colelem" id="pu183165"><!-- group --><div class="rounded-corners grpelem" id="u183165"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183197"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu183156"><!-- group --><div class="rounded-corners grpelem" id="u183156"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183241"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183173"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu183194"><!-- group --><div class="rounded-corners grpelem" id="u183194"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183254"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183242"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu183186"><!-- group --><div class="rounded-corners grpelem" id="u183186"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183125"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu211749"><!-- group --><div class="rounded-corners grpelem" id="u211749"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183175"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u183244"><!-- simple frame --></div></div></div><div class="grpelem" id="u183232"><!-- custom html --><input type="text" id="nome02" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183231"><!-- custom html --><input type="text" id="nome_emp02" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183217"><!-- custom html --><input type="text" id="tel02" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183239"><!-- custom html --><input type="text" id="cel02" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183206"><!-- custom html --><input type="email" id="email02" name="txt_email_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="rounded-corners grpelem" id="u183141"><!-- custom html --><input type="radio" id="rd_cpf02" name="rd_ident" value="cpf" checked></div><div class="grpelem" id="u183252"><!-- custom html --><input type="text" id="cpf02" name="txt_cpf" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/></div><div class="grpelem" id="u183227"><!-- custom html --><input type="password" id="senha02" name="txt_senha_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183256"><!-- custom html --><input type="password" id="senhaConf02" name="txt_senhaconf_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183233"><!-- custom html --><input type="text" id="endereco02" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183190"><!-- custom html --><input type="text" id="num02" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183145"><!-- custom html --><input type="text" id="cep02" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u183240"><!-- custom html --><select id="estado02" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
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
</div><div class="grpelem" id="u183236"><!-- custom html --><select id="cidade02" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select></div></div></div><!-- m_editable region-id="editable-static-tag-U183170-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183170-4" data-muse-uid="U183170" data-muse-type="txt_frame"><!-- content --><p>PASSO 2</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu183229-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U183229-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183229-4" data-muse-uid="U183229" data-muse-type="txt_frame"><!-- content --><p>SELECIONE O TIPO DE SERVIÇO QUE VOCÊ FAZ</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u183164"><!-- simple frame --></div></div><div class="clearfix colelem" id="ppu183193"><!-- group --><div class="clearfix grpelem" id="pu183193"><!-- group --><div class="rounded-corners clearfix grpelem" id="u183193"><!-- column --><div class="clearfix colelem" id="pu183134"><!-- group --><div class="grpelem" id="u183134"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Infantil"></div><!-- m_editable region-id="editable-static-tag-U183147-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183147-4" data-muse-uid="U183147" data-muse-type="txt_frame"><!-- content --><p>Infantil</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183172"><!-- group --><div class="grpelem" id="u183172"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Gestante"></div><!-- m_editable region-id="editable-static-tag-U183185-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183185-4" data-muse-uid="U183185" data-muse-type="txt_frame"><!-- content --><p>Gestante</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183235"><!-- group --><div class="grpelem" id="u183235"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Casal"></div><!-- m_editable region-id="editable-static-tag-U183168-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183168-4" data-muse-uid="U183168" data-muse-type="txt_frame"><!-- content --><p>Book em Geral</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183140"><!-- group --><div class="grpelem" id="u183140"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Banda"></div><!-- m_editable region-id="editable-static-tag-U183255-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183255-4" data-muse-uid="U183255" data-muse-type="txt_frame"><!-- content --><p>Banda</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183174-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183174-4" data-muse-uid="U183174" data-muse-type="txt_frame"><!-- content --><p>BOOK</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix grpelem" id="u183127"><!-- column --><div class="clearfix colelem" id="pu183144"><!-- group --><div class="grpelem" id="u183144"><!-- custom html --><input type="checkbox"  name="Pedido[]" value="Casamento" /></div><!-- m_editable region-id="editable-static-tag-U183226-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183226-4" data-muse-uid="U183226" data-muse-type="txt_frame"><!-- content --><p>Casamento</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183216"><!-- group --><div class="grpelem" id="u183216"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festa de Aniversario"></div><!-- m_editable region-id="editable-static-tag-U183199-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183199-4" data-muse-uid="U183199" data-muse-type="txt_frame"><!-- content --><p>Festa de Aniversário</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183150"><!-- group --><div class="grpelem" id="u183150"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Eventos Sociais"></div><!-- m_editable region-id="editable-static-tag-U183210-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183210-4" data-muse-uid="U183210" data-muse-type="txt_frame"><!-- content --><p>Eventos Sociais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183179"><!-- group --><div class="grpelem" id="u183179"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festas Infantis"></div><!-- m_editable region-id="editable-static-tag-U183250-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183250-4" data-muse-uid="U183250" data-muse-type="txt_frame"><!-- content --><p>Festas Infantis</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183132-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183132-4" data-muse-uid="U183132" data-muse-type="txt_frame"><!-- content --><p>EVENTO</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="ppu183131"><!-- group --><div class="clearfix grpelem" id="pu183131"><!-- group --><div class="rounded-corners clearfix grpelem" id="u183131"><!-- column --><div class="clearfix colelem" id="pu183183"><!-- group --><div class="grpelem" id="u183183"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Arquitetura"></div><!-- m_editable region-id="editable-static-tag-U183171-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183171-4" data-muse-uid="U183171" data-muse-type="txt_frame"><!-- content --><p>Arquitetura</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183166"><!-- group --><div class="grpelem" id="u183166"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Esportes"></div><!-- m_editable region-id="editable-static-tag-U183149-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183149-4" data-muse-uid="U183149" data-muse-type="txt_frame"><!-- content --><p>Esportes</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183192"><!-- group --><div class="grpelem" id="u183192"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Josnalistica"></div><!-- m_editable region-id="editable-static-tag-U183152-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183152-4" data-muse-uid="U183152" data-muse-type="txt_frame"><!-- content --><p>Jornalística</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183167"><!-- group --><div class="grpelem" id="u183167"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Documentarista"></div><!-- m_editable region-id="editable-static-tag-U183162-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183162-4" data-muse-uid="U183162" data-muse-type="txt_frame"><!-- content --><p>Documentarista</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183176-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183176-4" data-muse-uid="U183176" data-muse-type="txt_frame"><!-- content --><p>OUTROS</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix grpelem" id="u183182"><!-- column --><div class="clearfix colelem" id="pu183253"><!-- group --><div class="grpelem" id="u183253"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Paisagem"></div><!-- m_editable region-id="editable-static-tag-U183142-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183142-4" data-muse-uid="U183142" data-muse-type="txt_frame"><!-- content --><p>Paisagem</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183154"><!-- group --><div class="grpelem" id="u183154"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Vida Submarina"></div><!-- m_editable region-id="editable-static-tag-U183212-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183212-4" data-muse-uid="U183212" data-muse-type="txt_frame"><!-- content --><p>Vida Submarina</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183201"><!-- group --><div class="grpelem" id="u183201"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Animais"></div><!-- m_editable region-id="editable-static-tag-U183251-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183251-4" data-muse-uid="U183251" data-muse-type="txt_frame"><!-- content --><p>Animais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183177"><!-- group --><div class="grpelem" id="u183177"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Aereas"></div><!-- m_editable region-id="editable-static-tag-U183215-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183215-4" data-muse-uid="U183215" data-muse-type="txt_frame"><!-- content --><p>Aéreas</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183159-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183159-4" data-muse-uid="U183159" data-muse-type="txt_frame"><!-- content --><p>NATUREZA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pppu183202"><!-- group --><div class="clearfix grpelem" id="ppu183202"><!-- column --><div class="clearfix colelem" id="pu183202"><!-- group --><div class="rounded-corners clearfix grpelem" id="u183202"><!-- group --><div class="clearfix grpelem" id="pu183228"><!-- column --><div class="colelem" id="u183228"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Abstrata"></div><div class="colelem" id="u183146"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Nu Artistico"></div></div><div class="clearfix grpelem" id="pu183247-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U183247-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183247-4" data-muse-uid="U183247" data-muse-type="txt_frame"><!-- content --><p>Abstrata</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U183129-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183129-4" data-muse-uid="U183129" data-muse-type="txt_frame"><!-- content --><p>Nú Artístico</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183205-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183205-4" data-muse-uid="U183205" data-muse-type="txt_frame"><!-- content --><p>ARTÍSTICA</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix colelem" id="u183234"><!-- column --><div class="position_content" id="u183234_position_content"><!-- m_editable region-id="editable-static-tag-U183138-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183138-4" data-muse-uid="U183138" data-muse-type="txt_frame"><!-- content --><p>CIENTÍFICA</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu183135"><!-- group --><div class="grpelem" id="u183135"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Medica"></div><!-- m_editable region-id="editable-static-tag-U183155-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183155-4" data-muse-uid="U183155" data-muse-type="txt_frame"><!-- content --><p>Médica</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183214"><!-- group --><div class="grpelem" id="u183214"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Odontologica"></div><!-- m_editable region-id="editable-static-tag-U183249-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183249-4" data-muse-uid="U183249" data-muse-type="txt_frame"><!-- content --><p>Odontológica</p></div><!-- /m_editable --></div></div></div></div><div class="rounded-corners clearfix grpelem" id="u183178"><!-- column --><div class="clearfix colelem" id="pu183161"><!-- group --><div class="grpelem" id="u183161"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Institucional"></div><!-- m_editable region-id="editable-static-tag-U183188-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183188-4" data-muse-uid="U183188" data-muse-type="txt_frame"><!-- content --><p>Institucional</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183207"><!-- group --><div class="grpelem" id="u183207"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Produtos"></div><!-- m_editable region-id="editable-static-tag-U183219-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183219-4" data-muse-uid="U183219" data-muse-type="txt_frame"><!-- content --><p>Produtos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183153"><!-- group --><div class="grpelem" id="u183153"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Moda"></div><!-- m_editable region-id="editable-static-tag-U183128-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183128-4" data-muse-uid="U183128" data-muse-type="txt_frame"><!-- content --><p>Moda</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183213"><!-- group --><div class="grpelem" id="u183213"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Modelos"></div><!-- m_editable region-id="editable-static-tag-U183222-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183222-4" data-muse-uid="U183222" data-muse-type="txt_frame"><!-- content --><p>Modelos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183143"><!-- group --><div class="grpelem" id="u183143"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Comercial"></div><!-- m_editable region-id="editable-static-tag-U183204-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183204-4" data-muse-uid="U183204" data-muse-type="txt_frame"><!-- content --><p>Comercial</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183221"><!-- group --><div class="grpelem" id="u183221"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Industrial"></div><!-- m_editable region-id="editable-static-tag-U183148-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183148-4" data-muse-uid="U183148" data-muse-type="txt_frame"><!-- content --><p>Industrial</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183151-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183151-4" data-muse-uid="U183151" data-muse-type="txt_frame"><!-- content --><p>PUBLICIDADE</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu183209"><!-- group --><div class="rounded-corners clearfix grpelem" id="u183209"><!-- column --><div class="position_content" id="u183209_position_content"><!-- m_editable region-id="editable-static-tag-U183195-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183195-4" data-muse-uid="U183195" data-muse-type="txt_frame"><!-- content --><p>FAZ FILMAGEM?</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu183243"><!-- group --><div class="grpelem" id="u183243"><!-- custom html --><input type="radio" name="Filmagem" value="Sim"></div><!-- m_editable region-id="editable-static-tag-U183224-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183224-4" data-muse-uid="U183224" data-muse-type="txt_frame"><!-- content --><p>SIM</p></div><!-- /m_editable --><div class="grpelem" id="u183126"><!-- custom html --><input type="radio" name="Filmagem" value="Nao" checked></div><!-- m_editable region-id="editable-static-tag-U183225-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183225-4" data-muse-uid="U183225" data-muse-type="txt_frame"><!-- content --><p>NÃO</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix grpelem" id="u183208"><!-- group --><div class="clearfix grpelem" id="pu183211-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U183211-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183211-4" data-muse-uid="U183211" data-muse-type="txt_frame"><!-- content --><p>EDIÇÃO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu183230"><!-- group --><div class="grpelem" id="u183230"><!-- custom html --><input type="checkbox" name="Edicao[]" value="imagem"></div><!-- m_editable region-id="editable-static-tag-U183163-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183163-4" data-muse-uid="U183163" data-muse-type="txt_frame"><!-- content --><p>Imagem</p></div><!-- /m_editable --></div></div><div class="grpelem" id="u183189"><!-- custom html --><input type="checkbox" name="Edicao[]" value="Video"></div><!-- m_editable region-id="editable-static-tag-U183133-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u183133-4" data-muse-uid="U183133" data-muse-type="txt_frame"><!-- content --><p>Vídeo</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U183157-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183157-4" data-muse-uid="U183157" data-muse-type="txt_frame"><!-- content --><p>FALE UM POUCO SOBRE VOCÊ</p></div><!-- /m_editable --><div class="rounded-corners clearfix colelem" id="u183238"><!-- group --><div class="grpelem" id="u183237"><!-- custom html --><textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea></div></div><!-- m_editable region-id="editable-static-tag-U183196-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u183196-4" data-muse-uid="U183196" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu183180"><!-- group --><div class="clearfix grpelem" id="u183180"><!-- group --><!-- m_editable region-id="editable-static-tag-U183181-BP_1024" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u183181-4" data-muse-uid="U183181" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR</p></div><!-- /m_editable --></div><div class="grpelem" id="u183223"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form></div></div></div></div></li>
      </ul>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="2016" data-content-above-spacer="2016" data-content-below-spacer="171"></div>
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
    <!-- m_editable region-id="editable-static-tag-U394264-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u394264-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U488375-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u488375-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36873-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u36873-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U36872-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u36872-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="browser_width colelem" id="accordionu180849-bw">
     <ul class="AccordionWidget clearfix" id="accordionu180849"><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem100" id="u180988"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U180989-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem100" id="u180989-4" data-muse-uid="U180989" data-muse-type="txt_frame"><!-- content --><p>JÁ TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem100" id="u180990"><!-- group --><div class="clearfix grpelem" id="u180992"><!-- column --><div class="clearfix colelem" id="u180994"><!-- column --><div class="colelem" id="u180995"><!-- custom html --><?= (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
      <input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
        <form method="POST" action="seleciona_tipo_cli.php" id="frm_logar"></div><div class="clearfix colelem" id="pu180997"><!-- group --><div class="clearfix grpelem" id="u180997"><!-- column --><div class="clearfix colelem" id="pu181001"><!-- group --><div class="clearfix grpelem" id="u181001"><!-- column --><!-- m_editable region-id="editable-static-tag-U181003-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u181003-4" data-muse-uid="U181003" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u181002"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U181004-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u181004-4" data-muse-uid="U181004" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u181005"><!-- simple frame --></div></div><div class="grpelem" id="u180998"><!-- custom html --><input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u180999"><!-- custom html --><input type="password" name="txt_senha" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div><!-- m_editable region-id="editable-static-tag-U181000-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix colelem" id="u181000-4" data-muse-uid="U181000" data-muse-type="txt_frame"><!-- content --><p>LOGIN</p></div><!-- /m_editable --></div><div class="rounded-corners grpelem" id="u180996"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  /></div></div></div><div class="colelem" id="u180993"><!-- custom html --><input type="hidden" value="<?= basename($_SERVER['PHP_SELF']) ?>" id="page_name" name="page_name"/>
</form></div></div><!-- m_editable region-id="editable-static-tag-U180991-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u180991-4" data-muse-uid="U180991" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div></li>
     </ul>
    </div>
    <!-- m_editable region-id="editable-static-tag-U407422-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
    <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u407422-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <div class="browser_width colelem temp_no_id" data-orig-id="u272125-bw">
     <div class="temp_no_id" data-orig-id="u272125"><!-- group -->
      <div class="clearfix" id="u272125_align_to_page">
       <ul class="AccordionWidget clearfix grpelem" id="accordionu272132"><!-- vertical box -->
        <li class="AccordionPanel clearfix colelem" id="u272133"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U272272-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u272272-4" data-muse-uid="U272272" data-muse-type="txt_frame"><!-- content --><p>NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem" id="u272134"><!-- group --><div class="grpelem" id="u272135"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_foto03">

<input type="hidden" id="val_foto03" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf03"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj03" name="txt_cnpj_foto" value="" /></div><div class="clearfix grpelem" id="u272136"><!-- group --><div class="clearfix grpelem" id="u272137"><!-- column --><div class="clearfix colelem" id="pu272225-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U272225-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272225-4" data-muse-uid="U272225" data-muse-type="txt_frame"><!-- content --><p>NOME COMPLETO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272210-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272210-4" data-muse-uid="U272210" data-muse-type="txt_frame"><!-- content --><p>NOME DA EMPRESA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272222-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U272222-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272222-4" data-muse-uid="U272222" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272267-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272267-4" data-muse-uid="U272267" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272240-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272240-4" data-muse-uid="U272240" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272250-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272250-4" data-muse-uid="U272250" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272167-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272167-4" data-muse-uid="U272167" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272209-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272209-4" data-muse-uid="U272209" data-muse-type="txt_frame"><!-- content --><p>NÚMERO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272242-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272242-4" data-muse-uid="U272242" data-muse-type="txt_frame"><!-- content --><p>ESTADO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272143-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272143-4" data-muse-uid="U272143" data-muse-type="txt_frame"><!-- content --><p>CEP</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272263-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272263-4" data-muse-uid="U272263" data-muse-type="txt_frame"><!-- content --><p>ENDEREÇO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272224-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272224-4" data-muse-uid="U272224" data-muse-type="txt_frame"><!-- content --><p>CIDADE</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272155-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272155-4" data-muse-uid="U272155" data-muse-type="txt_frame"><!-- content --><p>CPF</p></div><!-- /m_editable --><div class="clearfix grpelem" id="u272173"><!-- group --><div class="clearfix grpelem" id="u272177"><!-- column --><div class="clearfix colelem" id="pu272184"><!-- group --><div class="rounded-corners grpelem" id="u272184"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272188"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu272185"><!-- group --><div class="rounded-corners grpelem" id="u272185"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272180"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272190"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu272182"><!-- group --><div class="rounded-corners grpelem" id="u272182"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272189"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272186"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu272178"><!-- group --><div class="rounded-corners grpelem" id="u272178"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272179"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu272181"><!-- group --><div class="rounded-corners grpelem" id="u272181"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272183"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u272191"><!-- simple frame --></div></div></div><div class="grpelem" id="u272203"><!-- custom html --><input type="text" id="nome03" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272195"><!-- custom html --><input type="text" id="nome_emp03" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272197"><!-- custom html --><input type="text" id="tel03" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272193"><!-- custom html --><input type="text" id="cel03" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272175"><!-- custom html --><input type="email" id="email03" name="txt_email_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272192"><!-- custom html --><input type="text" id="cpf03" name="txt_cpf" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/></div><div class="rounded-corners grpelem" id="u272196"><!-- custom html --><input type="radio" id="rd_cpf03" name="rd_ident" value="cpf" checked></div><div class="grpelem" id="u272204"><!-- custom html --><input type="password" id="senha03" name="txt_senha_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272200"><!-- custom html --><input type="password" id="senhaConf03" name="txt_senhaconf_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272194"><!-- custom html --><input type="text" id="endereco03" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272198"><!-- custom html --><input type="text" id="num03" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272199"><!-- custom html --><input type="text" id="cep03" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u272201"><!-- custom html --><select id="estado03" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
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
</div><div class="grpelem" id="u272202"><!-- custom html --><select id="cidade03" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select></div></div></div><!-- m_editable region-id="editable-static-tag-U272233-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272233-4" data-muse-uid="U272233" data-muse-type="txt_frame"><!-- content --><p>PASSO 2</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu272146-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U272146-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272146-4" data-muse-uid="U272146" data-muse-type="txt_frame"><!-- content --><p>SELECIONE O TIPO DE SERVIÇO QUE VOCÊ FAZ</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u272220"><!-- simple frame --></div></div><div class="clearfix colelem" id="ppu272249"><!-- group --><div class="clearfix grpelem" id="pu272249"><!-- group --><div class="rounded-corners clearfix grpelem" id="u272249"><!-- column --><div class="clearfix colelem" id="pu272259"><!-- group --><div class="grpelem" id="u272259"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Infantil"></div><!-- m_editable region-id="editable-static-tag-U272251-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272251-4" data-muse-uid="U272251" data-muse-type="txt_frame"><!-- content --><p>Infantil</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272235"><!-- group --><div class="grpelem" id="u272235"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Gestante"></div><!-- m_editable region-id="editable-static-tag-U272138-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272138-4" data-muse-uid="U272138" data-muse-type="txt_frame"><!-- content --><p>Gestante</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272227"><!-- group --><div class="grpelem" id="u272227"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Casal"></div><!-- m_editable region-id="editable-static-tag-U272207-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272207-4" data-muse-uid="U272207" data-muse-type="txt_frame"><!-- content --><p>Book em Geral</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272261"><!-- group --><div class="grpelem" id="u272261"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Banda"></div><!-- m_editable region-id="editable-static-tag-U272169-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272169-4" data-muse-uid="U272169" data-muse-type="txt_frame"><!-- content --><p>Banda</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272144-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272144-4" data-muse-uid="U272144" data-muse-type="txt_frame"><!-- content --><p>BOOK</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix grpelem" id="u272230"><!-- column --><div class="clearfix colelem" id="pu272145"><!-- group --><div class="grpelem" id="u272145"><!-- custom html --><input type="checkbox"  name="Pedido[]" value="Casamento" /></div><!-- m_editable region-id="editable-static-tag-U272214-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272214-4" data-muse-uid="U272214" data-muse-type="txt_frame"><!-- content --><p>Casamento</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272156"><!-- group --><div class="grpelem" id="u272156"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festa de Aniversario"></div><!-- m_editable region-id="editable-static-tag-U272212-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272212-4" data-muse-uid="U272212" data-muse-type="txt_frame"><!-- content --><p>Festa de Aniversário</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272139"><!-- group --><div class="grpelem" id="u272139"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Eventos Sociais"></div><!-- m_editable region-id="editable-static-tag-U272260-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272260-4" data-muse-uid="U272260" data-muse-type="txt_frame"><!-- content --><p>Eventos Sociais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272205"><!-- group --><div class="grpelem" id="u272205"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festas Infantis"></div><!-- m_editable region-id="editable-static-tag-U272158-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272158-4" data-muse-uid="U272158" data-muse-type="txt_frame"><!-- content --><p>Festas Infantis</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272269-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272269-4" data-muse-uid="U272269" data-muse-type="txt_frame"><!-- content --><p>EVENTO</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="ppu272218"><!-- group --><div class="clearfix grpelem" id="pu272218"><!-- group --><div class="rounded-corners clearfix grpelem" id="u272218"><!-- column --><div class="clearfix colelem" id="pu272148"><!-- group --><div class="grpelem" id="u272148"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Arquitetura"></div><!-- m_editable region-id="editable-static-tag-U272239-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272239-4" data-muse-uid="U272239" data-muse-type="txt_frame"><!-- content --><p>Arquitetura</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272164"><!-- group --><div class="grpelem" id="u272164"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Esportes"></div><!-- m_editable region-id="editable-static-tag-U272262-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272262-4" data-muse-uid="U272262" data-muse-type="txt_frame"><!-- content --><p>Esportes</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272245"><!-- group --><div class="grpelem" id="u272245"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Josnalistica"></div><!-- m_editable region-id="editable-static-tag-U272163-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272163-4" data-muse-uid="U272163" data-muse-type="txt_frame"><!-- content --><p>Jornalística</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272152"><!-- group --><div class="grpelem" id="u272152"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Documentarista"></div><!-- m_editable region-id="editable-static-tag-U272140-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272140-4" data-muse-uid="U272140" data-muse-type="txt_frame"><!-- content --><p>Documentarista</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272257-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272257-4" data-muse-uid="U272257" data-muse-type="txt_frame"><!-- content --><p>OUTROS</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix grpelem" id="u272237"><!-- column --><div class="clearfix colelem" id="pu272234"><!-- group --><div class="grpelem" id="u272234"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Paisagem"></div><!-- m_editable region-id="editable-static-tag-U272268-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272268-4" data-muse-uid="U272268" data-muse-type="txt_frame"><!-- content --><p>Paisagem</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272213"><!-- group --><div class="grpelem" id="u272213"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Vida Submarina"></div><!-- m_editable region-id="editable-static-tag-U272141-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272141-4" data-muse-uid="U272141" data-muse-type="txt_frame"><!-- content --><p>Vida Submarina</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272252"><!-- group --><div class="grpelem" id="u272252"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Animais"></div><!-- m_editable region-id="editable-static-tag-U272221-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272221-4" data-muse-uid="U272221" data-muse-type="txt_frame"><!-- content --><p>Animais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272142"><!-- group --><div class="grpelem" id="u272142"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Aereas"></div><!-- m_editable region-id="editable-static-tag-U272147-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272147-4" data-muse-uid="U272147" data-muse-type="txt_frame"><!-- content --><p>Aéreas</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272151-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272151-4" data-muse-uid="U272151" data-muse-type="txt_frame"><!-- content --><p>NATUREZA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pppu272223"><!-- group --><div class="clearfix grpelem" id="ppu272223"><!-- column --><div class="clearfix colelem" id="pu272223"><!-- group --><div class="rounded-corners clearfix grpelem" id="u272223"><!-- group --><div class="clearfix grpelem" id="pu272150"><!-- column --><div class="colelem" id="u272150"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Abstrata"></div><div class="colelem" id="u272247"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Nu Artistico"></div></div><div class="clearfix grpelem" id="pu272248-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U272248-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272248-4" data-muse-uid="U272248" data-muse-type="txt_frame"><!-- content --><p>Abstrata</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U272231-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272231-4" data-muse-uid="U272231" data-muse-type="txt_frame"><!-- content --><p>Nú Artístico</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272161-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272161-4" data-muse-uid="U272161" data-muse-type="txt_frame"><!-- content --><p>ARTÍSTICA</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix colelem" id="u272153"><!-- column --><div class="position_content" id="u272153_position_content"><!-- m_editable region-id="editable-static-tag-U272238-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272238-4" data-muse-uid="U272238" data-muse-type="txt_frame"><!-- content --><p>CIENTÍFICA</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu272271"><!-- group --><div class="grpelem" id="u272271"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Medica"></div><!-- m_editable region-id="editable-static-tag-U272168-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272168-4" data-muse-uid="U272168" data-muse-type="txt_frame"><!-- content --><p>Médica</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272226"><!-- group --><div class="grpelem" id="u272226"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Odontologica"></div><!-- m_editable region-id="editable-static-tag-U272162-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272162-4" data-muse-uid="U272162" data-muse-type="txt_frame"><!-- content --><p>Odontológica</p></div><!-- /m_editable --></div></div></div></div><div class="rounded-corners clearfix grpelem" id="u272255"><!-- column --><div class="clearfix colelem" id="pu272211"><!-- group --><div class="grpelem" id="u272211"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Institucional"></div><!-- m_editable region-id="editable-static-tag-U272244-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272244-4" data-muse-uid="U272244" data-muse-type="txt_frame"><!-- content --><p>Institucional</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272236"><!-- group --><div class="grpelem" id="u272236"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Produtos"></div><!-- m_editable region-id="editable-static-tag-U272160-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272160-4" data-muse-uid="U272160" data-muse-type="txt_frame"><!-- content --><p>Produtos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272157"><!-- group --><div class="grpelem" id="u272157"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Moda"></div><!-- m_editable region-id="editable-static-tag-U272206-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272206-4" data-muse-uid="U272206" data-muse-type="txt_frame"><!-- content --><p>Moda</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272266"><!-- group --><div class="grpelem" id="u272266"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Modelos"></div><!-- m_editable region-id="editable-static-tag-U272215-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272215-4" data-muse-uid="U272215" data-muse-type="txt_frame"><!-- content --><p>Modelos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272243"><!-- group --><div class="grpelem" id="u272243"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Comercial"></div><!-- m_editable region-id="editable-static-tag-U272265-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272265-4" data-muse-uid="U272265" data-muse-type="txt_frame"><!-- content --><p>Comercial</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272149"><!-- group --><div class="grpelem" id="u272149"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Industrial"></div><!-- m_editable region-id="editable-static-tag-U272165-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272165-4" data-muse-uid="U272165" data-muse-type="txt_frame"><!-- content --><p>Industrial</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272159-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272159-4" data-muse-uid="U272159" data-muse-type="txt_frame"><!-- content --><p>PUBLICIDADE</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu272254"><!-- group --><div class="rounded-corners clearfix grpelem" id="u272254"><!-- column --><div class="position_content" id="u272254_position_content"><!-- m_editable region-id="editable-static-tag-U272228-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272228-4" data-muse-uid="U272228" data-muse-type="txt_frame"><!-- content --><p>FAZ FILMAGEM?</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu272172"><!-- group --><div class="grpelem" id="u272172"><!-- custom html --><input type="radio" name="Filmagem" value="Sim"></div><!-- m_editable region-id="editable-static-tag-U272219-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272219-4" data-muse-uid="U272219" data-muse-type="txt_frame"><!-- content --><p>SIM</p></div><!-- /m_editable --><div class="grpelem" id="u272253"><!-- custom html --><input type="radio" name="Filmagem" value="Nao" checked></div><!-- m_editable region-id="editable-static-tag-U272232-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272232-4" data-muse-uid="U272232" data-muse-type="txt_frame"><!-- content --><p>NÃO</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix grpelem" id="u272256"><!-- group --><div class="clearfix grpelem" id="pu272170-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U272170-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272170-4" data-muse-uid="U272170" data-muse-type="txt_frame"><!-- content --><p>EDIÇÃO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu272246"><!-- group --><div class="grpelem" id="u272246"><!-- custom html --><input type="checkbox" name="Edicao[]" value="imagem"></div><!-- m_editable region-id="editable-static-tag-U272208-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272208-4" data-muse-uid="U272208" data-muse-type="txt_frame"><!-- content --><p>Imagem</p></div><!-- /m_editable --></div></div><div class="grpelem" id="u272258"><!-- custom html --><input type="checkbox" name="Edicao[]" value="Video"></div><!-- m_editable region-id="editable-static-tag-U272154-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u272154-4" data-muse-uid="U272154" data-muse-type="txt_frame"><!-- content --><p>Vídeo</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U272264-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272264-4" data-muse-uid="U272264" data-muse-type="txt_frame"><!-- content --><p>FALE UM POUCO SOBRE VOCÊ</p></div><!-- /m_editable --><div class="rounded-corners clearfix colelem" id="u272229"><!-- group --><div class="grpelem" id="u272270"><!-- custom html --><textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea></div></div><!-- m_editable region-id="editable-static-tag-U272241-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u272241-4" data-muse-uid="U272241" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu272216"><!-- group --><div class="clearfix grpelem" id="u272216"><!-- group --><!-- m_editable region-id="editable-static-tag-U272217-BP_768" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u272217-4" data-muse-uid="U272217" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR</p></div><!-- /m_editable --></div><div class="grpelem" id="u272171"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form></div></div></div></div></div></li>
       </ul>
      </div>
     </div>
    </div>
    <div class="verticalspacer" data-offset-top="2029" data-content-above-spacer="2029" data-content-below-spacer="186"></div>
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
     <div class="clearfix colelem" id="pu330134-8"><!-- group -->
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
     <!-- m_editable region-id="editable-static-tag-U394264-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u394264-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U488375-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u488375-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U36873-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u36873-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U36872-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u36872-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <ul class="AccordionWidget clearfix colelem" id="accordionu269843"><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem" id="u269844"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U269845-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u269845-4" data-muse-uid="U269845" data-muse-type="txt_frame"><!-- content --><p>JÁ TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem" id="u269846"><!-- group --><div class="clearfix grpelem" id="u269847"><!-- column --><div class="clearfix colelem" id="u269849"><!-- column --><div class="colelem" id="u269850"><!-- custom html --><?= (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
      <input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
        <form method="POST" action="seleciona_tipo_cli.php" id="frm_logar"></div><div class="clearfix colelem" id="pu269851"><!-- group --><div class="clearfix grpelem" id="u269851"><!-- column --><div class="clearfix colelem" id="pu269854"><!-- group --><div class="clearfix grpelem" id="u269854"><!-- column --><!-- m_editable region-id="editable-static-tag-U269855-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u269855-4" data-muse-uid="U269855" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u269858"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U269856-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u269856-4" data-muse-uid="U269856" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u269857"><!-- simple frame --></div></div><div class="grpelem" id="u269853"><!-- custom html --><input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u269859"><!-- custom html --><input type="password" name="txt_senha" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div><!-- m_editable region-id="editable-static-tag-U269852-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix colelem" id="u269852-4" data-muse-uid="U269852" data-muse-type="txt_frame"><!-- content --><p>LOGIN</p></div><!-- /m_editable --></div><div class="rounded-corners grpelem" id="u269860"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  /></div></div></div><div class="colelem" id="u269848"><!-- custom html --><input type="hidden" value="<?= basename($_SERVER['PHP_SELF']) ?>" id="page_name" name="page_name"/>
</form></div></div><!-- m_editable region-id="editable-static-tag-U269861-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u269861-4" data-muse-uid="U269861" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div></li>
     </ul>
     <!-- m_editable region-id="editable-static-tag-U407422-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u407422-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="browser_width colelem temp_no_id" data-orig-id="u272125-bw">
      <div class="temp_no_id" data-orig-id="u272125"><!-- group -->
       <div class="clearfix temp_no_id" data-orig-id="u272125_align_to_page">
        <ul class="AccordionWidget clearfix grpelem" id="accordionu195203"><!-- vertical box -->
         <li class="AccordionPanel clearfix colelem" id="u195222"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U195358-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab clearfix colelem" id="u195358-4" data-muse-uid="U195358" data-muse-type="txt_frame"><!-- content --><p>NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent clearfix colelem" id="u195223"><!-- group --><div class="grpelem" id="u195357"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_foto04">

<input type="hidden" id="val_foto04" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf04"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj04" name="txt_cnpj_foto" value="" /></div><div class="clearfix grpelem" id="u211828"><!-- column --><!-- m_editable region-id="editable-static-tag-U195237-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195237-4" data-muse-uid="U195237" data-muse-type="txt_frame"><!-- content --><p>NOME COMPLETO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu212444"><!-- group --><div class="clearfix grpelem" id="u212444"><!-- column --><div class="rounded-corners colelem" id="u195263"><!-- simple frame --></div><div class="rounded-corners colelem" id="u195242"><!-- simple frame --></div><div class="clearfix colelem" id="pu195226"><!-- group --><div class="rounded-corners grpelem" id="u195226"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u195230"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u195255"><!-- simple frame --></div><div class="rounded-corners colelem" id="u195318"><!-- simple frame --></div><div class="clearfix colelem" id="pu195280"><!-- group --><div class="rounded-corners grpelem" id="u195280"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u195341"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u195252"><!-- simple frame --></div><div class="clearfix colelem" id="pu195271"><!-- group --><div class="rounded-corners grpelem" id="u195271"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u195265"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u195300"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u195231"><!-- simple frame --></div></div><!-- m_editable region-id="editable-static-tag-U195241-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195241-4" data-muse-uid="U195241" data-muse-type="txt_frame"><!-- content --><p>NOME DA EMPRESA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195347-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195347-4" data-muse-uid="U195347" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195269-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195269-4" data-muse-uid="U195269" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195352-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195352-4" data-muse-uid="U195352" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195295-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195295-4" data-muse-uid="U195295" data-muse-type="txt_frame"><!-- content --><p>CPF</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195333-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195333-4" data-muse-uid="U195333" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195228-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195228-4" data-muse-uid="U195228" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195279-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195279-4" data-muse-uid="U195279" data-muse-type="txt_frame"><!-- content --><p>ENDEREÇO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195309-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195309-4" data-muse-uid="U195309" data-muse-type="txt_frame"><!-- content --><p>NÚMERO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195340-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195340-4" data-muse-uid="U195340" data-muse-type="txt_frame"><!-- content --><p>CEP</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195331-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195331-4" data-muse-uid="U195331" data-muse-type="txt_frame"><!-- content --><p>ESTADO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195245-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195245-4" data-muse-uid="U195245" data-muse-type="txt_frame"><!-- content --><p>CIDADE</p></div><!-- /m_editable --><div class="grpelem" id="u195251"><!-- custom html --><input type="text" id="nome04" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195290"><!-- custom html --><input type="text" id="nome_emp04" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195288"><!-- custom html --><input type="text" id="tel04" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195270"><!-- custom html --><input type="text" id="cel04" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195292"><!-- custom html --><input type="email" id="email04" name="txt_email_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="rounded-corners grpelem" id="u195239"><!-- custom html --><input type="radio" id="rd_cpf04" name="rd_ident" value="cpf" checked></div><div class="grpelem" id="u195268"><!-- custom html --><input type="text" id="cpf04" name="txt_cpf" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/></div><div class="grpelem" id="u195322"><!-- custom html --><input type="password" id="senha04" name="txt_senha_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195304"><!-- custom html --><input type="password" id="senhaConf04" name="txt_senhaconf_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195324"><!-- custom html --><input type="text" id="endereco04" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195276"><!-- custom html --><input type="text" id="num04" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195325"><!-- custom html --><input type="text" id="cep04" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u195346"><!-- custom html --><select id="estado04" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
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
</div><div class="grpelem" id="u195335"><!-- custom html --><select id="cidade04" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select></div></div></div><div class="clearfix grpelem" id="u195224"><!-- column --><!-- m_editable region-id="editable-static-tag-U195337-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195337-4" data-muse-uid="U195337" data-muse-type="txt_frame"><!-- content --><p>PASSO 2</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu195256-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U195256-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195256-4" data-muse-uid="U195256" data-muse-type="txt_frame"><!-- content --><p>SELECIONE O TIPO DE SERVIÇO QUE VOCÊ FAZ</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u195334"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu195262"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195262"><!-- column --><div class="clearfix colelem" id="pu195302"><!-- group --><div class="grpelem" id="u195302"><!-- custom html --><input type="checkbox"  name="Pedido[]" value="Casamento" /></div><!-- m_editable region-id="editable-static-tag-U195303-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195303-4" data-muse-uid="U195303" data-muse-type="txt_frame"><!-- content --><p>Casamento</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195317"><!-- group --><div class="grpelem" id="u195317"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festa de Aniversario"></div><!-- m_editable region-id="editable-static-tag-U195267-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195267-4" data-muse-uid="U195267" data-muse-type="txt_frame"><!-- content --><p>Festa de Aniversário</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195296"><!-- group --><div class="grpelem" id="u195296"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Eventos Sociais"></div><!-- m_editable region-id="editable-static-tag-U195281-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195281-4" data-muse-uid="U195281" data-muse-type="txt_frame"><!-- content --><p>Eventos Sociais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195328"><!-- group --><div class="grpelem" id="u195328"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festas Infantis"></div><!-- m_editable region-id="editable-static-tag-U195248-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195248-4" data-muse-uid="U195248" data-muse-type="txt_frame"><!-- content --><p>Festas Infantis</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195260-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195260-4" data-muse-uid="U195260" data-muse-type="txt_frame"><!-- content --><p>EVENTO</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195275"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195275"><!-- column --><div class="clearfix colelem" id="pu195277"><!-- group --><div class="grpelem" id="u195277"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Infantil"></div><!-- m_editable region-id="editable-static-tag-U195307-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195307-4" data-muse-uid="U195307" data-muse-type="txt_frame"><!-- content --><p>Infantil</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195326"><!-- group --><div class="grpelem" id="u195326"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Gestante"></div><!-- m_editable region-id="editable-static-tag-U195236-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195236-4" data-muse-uid="U195236" data-muse-type="txt_frame"><!-- content --><p>Gestante</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195266"><!-- group --><div class="grpelem" id="u195266"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Casal"></div><!-- m_editable region-id="editable-static-tag-U195250-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195250-4" data-muse-uid="U195250" data-muse-type="txt_frame"><!-- content --><p>Book em Geral</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195305"><!-- group --><div class="grpelem" id="u195305"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Banda"></div><!-- m_editable region-id="editable-static-tag-U195291-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195291-4" data-muse-uid="U195291" data-muse-type="txt_frame"><!-- content --><p>Banda</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195299-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195299-4" data-muse-uid="U195299" data-muse-type="txt_frame"><!-- content --><p>BOOK</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195320"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195320"><!-- column --><div class="clearfix colelem" id="pu195235"><!-- group --><div class="grpelem" id="u195235"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Paisagem"></div><!-- m_editable region-id="editable-static-tag-U195351-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195351-4" data-muse-uid="U195351" data-muse-type="txt_frame"><!-- content --><p>Paisagem</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195254"><!-- group --><div class="grpelem" id="u195254"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Vida Submarina"></div><!-- m_editable region-id="editable-static-tag-U195283-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195283-4" data-muse-uid="U195283" data-muse-type="txt_frame"><!-- content --><p>Vida Submarina</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195348"><!-- group --><div class="grpelem" id="u195348"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Animais"></div><!-- m_editable region-id="editable-static-tag-U195323-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195323-4" data-muse-uid="U195323" data-muse-type="txt_frame"><!-- content --><p>Animais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195313"><!-- group --><div class="grpelem" id="u195313"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Aereas"></div><!-- m_editable region-id="editable-static-tag-U195314-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195314-4" data-muse-uid="U195314" data-muse-type="txt_frame"><!-- content --><p>Aéreas</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195261-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195261-4" data-muse-uid="U195261" data-muse-type="txt_frame"><!-- content --><p>NATUREZA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195293"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195293"><!-- column --><div class="clearfix colelem" id="pu195247"><!-- group --><div class="grpelem" id="u195247"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Arquitetura"></div><!-- m_editable region-id="editable-static-tag-U195329-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195329-4" data-muse-uid="U195329" data-muse-type="txt_frame"><!-- content --><p>Arquitetura</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195259"><!-- group --><div class="grpelem" id="u195259"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Esportes"></div><!-- m_editable region-id="editable-static-tag-U195286-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195286-4" data-muse-uid="U195286" data-muse-type="txt_frame"><!-- content --><p>Esportes</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195287"><!-- group --><div class="grpelem" id="u195287"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Josnalistica"></div><!-- m_editable region-id="editable-static-tag-U195244-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195244-4" data-muse-uid="U195244" data-muse-type="txt_frame"><!-- content --><p>Jornalística</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195345"><!-- group --><div class="grpelem" id="u195345"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Documentarista"></div><!-- m_editable region-id="editable-static-tag-U195327-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195327-4" data-muse-uid="U195327" data-muse-type="txt_frame"><!-- content --><p>Documentarista</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195350-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195350-4" data-muse-uid="U195350" data-muse-type="txt_frame"><!-- content --><p>OUTROS</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195238"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195238"><!-- column --><div class="clearfix colelem" id="pu195319"><!-- group --><div class="grpelem" id="u195319"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Institucional"></div><!-- m_editable region-id="editable-static-tag-U195321-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195321-4" data-muse-uid="U195321" data-muse-type="txt_frame"><!-- content --><p>Institucional</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195355"><!-- group --><div class="grpelem" id="u195355"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Produtos"></div><!-- m_editable region-id="editable-static-tag-U195253-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195253-4" data-muse-uid="U195253" data-muse-type="txt_frame"><!-- content --><p>Produtos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195233"><!-- group --><div class="grpelem" id="u195233"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Moda"></div><!-- m_editable region-id="editable-static-tag-U195274-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195274-4" data-muse-uid="U195274" data-muse-type="txt_frame"><!-- content --><p>Moda</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195310"><!-- group --><div class="grpelem" id="u195310"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Modelos"></div><!-- m_editable region-id="editable-static-tag-U195232-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195232-4" data-muse-uid="U195232" data-muse-type="txt_frame"><!-- content --><p>Modelos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195297"><!-- group --><div class="grpelem" id="u195297"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Comercial"></div><!-- m_editable region-id="editable-static-tag-U195343-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195343-4" data-muse-uid="U195343" data-muse-type="txt_frame"><!-- content --><p>Comercial</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195243"><!-- group --><div class="grpelem" id="u195243"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Industrial"></div><!-- m_editable region-id="editable-static-tag-U195336-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195336-4" data-muse-uid="U195336" data-muse-type="txt_frame"><!-- content --><p>Industrial</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195308-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195308-4" data-muse-uid="U195308" data-muse-type="txt_frame"><!-- content --><p>PUBLICIDADE</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195273"><!-- group --><div class="rounded-corners clearfix grpelem" id="u195273"><!-- group --><div class="clearfix grpelem" id="pu195289"><!-- column --><div class="colelem" id="u195289"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Abstrata"></div><div class="colelem" id="u195298"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Nu Artistico"></div></div><div class="clearfix grpelem" id="pu195294-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U195294-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195294-4" data-muse-uid="U195294" data-muse-type="txt_frame"><!-- content --><p>Abstrata</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U195278-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195278-4" data-muse-uid="U195278" data-muse-type="txt_frame"><!-- content --><p>Nú Artístico</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U195316-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195316-4" data-muse-uid="U195316" data-muse-type="txt_frame"><!-- content --><p>ARTÍSTICA</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix colelem" id="u195339"><!-- column --><div class="position_content" id="u195339_position_content"><!-- m_editable region-id="editable-static-tag-U195330-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195330-4" data-muse-uid="U195330" data-muse-type="txt_frame"><!-- content --><p>CIENTÍFICA</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu195332"><!-- group --><div class="grpelem" id="u195332"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Medica"></div><!-- m_editable region-id="editable-static-tag-U195353-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195353-4" data-muse-uid="U195353" data-muse-type="txt_frame"><!-- content --><p>Médica</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu195227"><!-- group --><div class="grpelem" id="u195227"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Odontologica"></div><!-- m_editable region-id="editable-static-tag-U195301-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195301-4" data-muse-uid="U195301" data-muse-type="txt_frame"><!-- content --><p>Odontológica</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix colelem" id="u195285"><!-- column --><div class="position_content" id="u195285_position_content"><!-- m_editable region-id="editable-static-tag-U195284-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195284-4" data-muse-uid="U195284" data-muse-type="txt_frame"><!-- content --><p>FAZ FILMAGEM?</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu195342"><!-- group --><div class="grpelem" id="u195342"><!-- custom html --><input type="radio" name="Filmagem" value="Sim"></div><!-- m_editable region-id="editable-static-tag-U195272-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195272-4" data-muse-uid="U195272" data-muse-type="txt_frame"><!-- content --><p>SIM</p></div><!-- /m_editable --><div class="grpelem" id="u195349"><!-- custom html --><input type="radio" name="Filmagem" value="Nao" checked></div><!-- m_editable region-id="editable-static-tag-U195258-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195258-4" data-muse-uid="U195258" data-muse-type="txt_frame"><!-- content --><p>NÃO</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix colelem" id="u195249"><!-- group --><div class="clearfix grpelem" id="pu195338-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U195338-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195338-4" data-muse-uid="U195338" data-muse-type="txt_frame"><!-- content --><p>EDIÇÃO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu195225"><!-- group --><div class="grpelem" id="u195225"><!-- custom html --><input type="checkbox" name="Edicao[]" value="imagem"></div><!-- m_editable region-id="editable-static-tag-U195240-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195240-4" data-muse-uid="U195240" data-muse-type="txt_frame"><!-- content --><p>Imagem</p></div><!-- /m_editable --></div></div><div class="grpelem" id="u195354"><!-- custom html --><input type="checkbox" name="Edicao[]" value="Video"></div><!-- m_editable region-id="editable-static-tag-U195234-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u195234-4" data-muse-uid="U195234" data-muse-type="txt_frame"><!-- content --><p>Vídeo</p></div><!-- /m_editable --></div><!-- m_editable region-id="editable-static-tag-U195246-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195246-4" data-muse-uid="U195246" data-muse-type="txt_frame"><!-- content --><p>FALE UM POUCO SOBRE VOCÊ</p></div><!-- /m_editable --><div class="rounded-corners clearfix colelem" id="u195306"><!-- group --><div class="grpelem" id="u195264"><!-- custom html --><textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea></div></div><!-- m_editable region-id="editable-static-tag-U195344-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u195344-4" data-muse-uid="U195344" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu195311"><!-- group --><div class="clearfix grpelem" id="u195311"><!-- group --><!-- m_editable region-id="editable-static-tag-U195312-BP_480" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u195312-4" data-muse-uid="U195312" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR</p></div><!-- /m_editable --></div><div class="grpelem" id="u195282"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form></div></div></div></div></li>
        </ul>
       </div>
      </div>
     </div>
     <div class="verticalspacer" data-offset-top="3186" data-content-above-spacer="3185" data-content-below-spacer="186"></div>
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
     <!-- m_editable region-id="editable-static-tag-U394264-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u394264-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U488375-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u488375-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U178571-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix colelem" id="u178571-4" data-muse-uid="U178571" data-muse-type="txt_frame"><!-- content -->
      <p>PASSO 1</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U178572-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix colelem" id="u178572-4" data-muse-uid="U178572" data-muse-type="txt_frame"><!-- content -->
      <p>PREENCHA SEUS DADOS PESSOAIS</p>
     </div>
     <!-- /m_editable -->
     <ul class="AccordionWidget clearfix colelem" id="accordionu276718"><!-- vertical box -->
      <li class="AccordionPanel borderbox clearfix colelem" id="u276858"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U276875-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u276875-4" data-muse-uid="U276875" data-muse-type="txt_frame"><!-- content --><p>JÁ TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u276859"><!-- group --><div class="clearfix grpelem" id="u276861"><!-- column --><div class="clearfix colelem" id="u276863"><!-- column --><div class="colelem" id="u276874"><!-- custom html --><?= (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
      <input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
        <form method="POST" action="seleciona_tipo_cli.php" id="frm_logar"></div><div class="clearfix colelem" id="pu276865"><!-- group --><div class="clearfix grpelem" id="u276865"><!-- column --><div class="clearfix colelem" id="pu276868"><!-- group --><div class="clearfix grpelem" id="u276868"><!-- column --><!-- m_editable region-id="editable-static-tag-U276870-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u276870-4" data-muse-uid="U276870" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u276872"><!-- simple frame --></div><!-- m_editable region-id="editable-static-tag-U276869-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u276869-4" data-muse-uid="U276869" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><div class="rounded-corners colelem" id="u276871"><!-- simple frame --></div></div><div class="grpelem" id="u276867"><!-- custom html --><input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u276873"><!-- custom html --><input type="password" name="txt_senha" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div></div><!-- m_editable region-id="editable-static-tag-U276866-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix colelem" id="u276866-4" data-muse-uid="U276866" data-muse-type="txt_frame"><!-- content --><p>LOGIN</p></div><!-- /m_editable --></div><div class="rounded-corners grpelem" id="u276864"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  /></div></div></div><div class="colelem" id="u276862"><!-- custom html --><input type="hidden" value="<?= basename($_SERVER['PHP_SELF']) ?>" id="page_name" name="page_name"/>
</form></div></div><!-- m_editable region-id="editable-static-tag-U276860-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u276860-4" data-muse-uid="U276860" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --></div></li>
     </ul>
     <!-- m_editable region-id="editable-static-tag-U407422-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" data-ice-editable="link" -->
     <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u407422-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <div class="clearfix colelem temp_no_id" data-orig-id="u272125"><!-- group -->
      <ul class="AccordionWidget clearfix grpelem" id="accordionu178573"><!-- vertical box -->
       <li class="AccordionPanel borderbox clearfix colelem" id="u178592"><!-- vertical box --><!-- m_editable region-id="editable-static-tag-U178728-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link,clickable" --><div class="AccordionPanelTab borderbox clearfix colelem" id="u178728-4" data-muse-uid="U178728" data-muse-type="txt_frame"><!-- content --><p>NÃO TENHO CADASTRO</p></div><!-- /m_editable --><div class="AccordionPanelContent borderbox clearfix colelem" id="u178593"><!-- group --><div class="grpelem" id="u178594"><!-- custom html --><form method="POST" action="helper/path_cad_cli.php" id="frm_cad_foto05">

<input type="hidden" id="val_foto05" name="tipo_foto" value="" />
      <input type="hidden" id="val_cpf05"  name="txt_cpf_foto" value="" />
      <input type="hidden" id="val_cnpj05" name="txt_cnpj_foto" value="" /></div><div class="clearfix grpelem" id="u178595"><!-- column --><!-- m_editable region-id="editable-static-tag-U178611-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178611-4" data-muse-uid="U178611" data-muse-type="txt_frame"><!-- content --><p>PASSO 2</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu178727-4"><!-- group --><!-- m_editable region-id="editable-static-tag-U178727-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178727-4" data-muse-uid="U178727" data-muse-type="txt_frame"><!-- content --><p>SELECIONE O TIPO DE SERVIÇO QUE VOCÊ FAZ</p></div><!-- /m_editable --><div class="rounded-corners grpelem" id="u178701"><!-- simple frame --></div></div><div class="clearfix colelem" id="pu178624"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178624"><!-- column --><div class="clearfix colelem" id="pu178709"><!-- group --><div class="grpelem" id="u178709"><!-- custom html --><input type="checkbox"  name="Pedido[]" value="Casamento" /></div><!-- m_editable region-id="editable-static-tag-U178640-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178640-4" data-muse-uid="U178640" data-muse-type="txt_frame"><!-- content --><p>Casamento</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178725"><!-- group --><div class="grpelem" id="u178725"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festa de Aniversario"></div><!-- m_editable region-id="editable-static-tag-U178613-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178613-4" data-muse-uid="U178613" data-muse-type="txt_frame"><!-- content --><p>Festa de Aniversário</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178657"><!-- group --><div class="grpelem" id="u178657"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Eventos Sociais"></div><!-- m_editable region-id="editable-static-tag-U178721-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178721-4" data-muse-uid="U178721" data-muse-type="txt_frame"><!-- content --><p>Eventos Sociais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178687"><!-- group --><div class="grpelem" id="u178687"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Festas Infantis"></div><!-- m_editable region-id="editable-static-tag-U178715-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178715-4" data-muse-uid="U178715" data-muse-type="txt_frame"><!-- content --><p>Festas Infantis</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178627-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178627-4" data-muse-uid="U178627" data-muse-type="txt_frame"><!-- content --><p>EVENTO</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178685"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178685"><!-- column --><div class="clearfix colelem" id="pu178679"><!-- group --><div class="grpelem" id="u178679"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Infantil"></div><!-- m_editable region-id="editable-static-tag-U178710-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178710-4" data-muse-uid="U178710" data-muse-type="txt_frame"><!-- content --><p>Infantil</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178648"><!-- group --><div class="grpelem" id="u178648"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Gestante"></div><!-- m_editable region-id="editable-static-tag-U178658-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178658-4" data-muse-uid="U178658" data-muse-type="txt_frame"><!-- content --><p>Gestante</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178636"><!-- group --><div class="grpelem" id="u178636"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Casal"></div><!-- m_editable region-id="editable-static-tag-U178720-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178720-4" data-muse-uid="U178720" data-muse-type="txt_frame"><!-- content --><p>Book em Geral</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178707"><!-- group --><div class="grpelem" id="u178707"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Banda"></div><!-- m_editable region-id="editable-static-tag-U178599-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178599-4" data-muse-uid="U178599" data-muse-type="txt_frame"><!-- content --><p>Banda</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178614-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178614-4" data-muse-uid="U178614" data-muse-type="txt_frame"><!-- content --><p>BOOK</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178684"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178684"><!-- column --><div class="clearfix colelem" id="pu178675"><!-- group --><div class="grpelem" id="u178675"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Paisagem"></div><!-- m_editable region-id="editable-static-tag-U178621-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178621-4" data-muse-uid="U178621" data-muse-type="txt_frame"><!-- content --><p>Paisagem</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178667"><!-- group --><div class="grpelem" id="u178667"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Vida Submarina"></div><!-- m_editable region-id="editable-static-tag-U178669-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178669-4" data-muse-uid="U178669" data-muse-type="txt_frame"><!-- content --><p>Vida Submarina</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178722"><!-- group --><div class="grpelem" id="u178722"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Animais"></div><!-- m_editable region-id="editable-static-tag-U178712-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178712-4" data-muse-uid="U178712" data-muse-type="txt_frame"><!-- content --><p>Animais</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178612"><!-- group --><div class="grpelem" id="u178612"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Aereas"></div><!-- m_editable region-id="editable-static-tag-U178605-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178605-4" data-muse-uid="U178605" data-muse-type="txt_frame"><!-- content --><p>Aéreas</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178717-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178717-4" data-muse-uid="U178717" data-muse-type="txt_frame"><!-- content --><p>NATUREZA</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178654"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178654"><!-- column --><div class="clearfix colelem" id="pu178694"><!-- group --><div class="grpelem" id="u178694"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Arquitetura"></div><!-- m_editable region-id="editable-static-tag-U178664-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178664-4" data-muse-uid="U178664" data-muse-type="txt_frame"><!-- content --><p>Arquitetura</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178711"><!-- group --><div class="grpelem" id="u178711"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Esportes"></div><!-- m_editable region-id="editable-static-tag-U178688-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178688-4" data-muse-uid="U178688" data-muse-type="txt_frame"><!-- content --><p>Esportes</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178597"><!-- group --><div class="grpelem" id="u178597"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Josnalistica"></div><!-- m_editable region-id="editable-static-tag-U178697-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178697-4" data-muse-uid="U178697" data-muse-type="txt_frame"><!-- content --><p>Jornalística</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178719"><!-- group --><div class="grpelem" id="u178719"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Documentarista"></div><!-- m_editable region-id="editable-static-tag-U178603-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178603-4" data-muse-uid="U178603" data-muse-type="txt_frame"><!-- content --><p>Documentarista</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178700-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178700-4" data-muse-uid="U178700" data-muse-type="txt_frame"><!-- content --><p>OUTROS</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178670"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178670"><!-- column --><div class="clearfix colelem" id="pu178644"><!-- group --><div class="grpelem" id="u178644"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Institucional"></div><!-- m_editable region-id="editable-static-tag-U178608-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178608-4" data-muse-uid="U178608" data-muse-type="txt_frame"><!-- content --><p>Institucional</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178702"><!-- group --><div class="grpelem" id="u178702"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Produtos"></div><!-- m_editable region-id="editable-static-tag-U178606-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178606-4" data-muse-uid="U178606" data-muse-type="txt_frame"><!-- content --><p>Produtos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178649"><!-- group --><div class="grpelem" id="u178649"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Moda"></div><!-- m_editable region-id="editable-static-tag-U178683-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178683-4" data-muse-uid="U178683" data-muse-type="txt_frame"><!-- content --><p>Moda</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178600"><!-- group --><div class="grpelem" id="u178600"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Modelos"></div><!-- m_editable region-id="editable-static-tag-U178708-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178708-4" data-muse-uid="U178708" data-muse-type="txt_frame"><!-- content --><p>Modelos</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178677"><!-- group --><div class="grpelem" id="u178677"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Comercial"></div><!-- m_editable region-id="editable-static-tag-U178652-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178652-4" data-muse-uid="U178652" data-muse-type="txt_frame"><!-- content --><p>Comercial</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178662"><!-- group --><div class="grpelem" id="u178662"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Industrial"></div><!-- m_editable region-id="editable-static-tag-U178655-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178655-4" data-muse-uid="U178655" data-muse-type="txt_frame"><!-- content --><p>Industrial</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178631-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178631-4" data-muse-uid="U178631" data-muse-type="txt_frame"><!-- content --><p>PUBLICIDADE</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178630"><!-- group --><div class="rounded-corners clearfix grpelem" id="u178630"><!-- group --><div class="clearfix grpelem" id="pu178628"><!-- column --><div class="colelem" id="u178628"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Abstrata"></div><div class="colelem" id="u178651"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Nu Artistico"></div></div><div class="clearfix grpelem" id="pu178726-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U178726-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178726-4" data-muse-uid="U178726" data-muse-type="txt_frame"><!-- content --><p>Abstrata</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178716-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178716-4" data-muse-uid="U178716" data-muse-type="txt_frame"><!-- content --><p>Nú Artístico</p></div><!-- /m_editable --></div></div><!-- m_editable region-id="editable-static-tag-U178704-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178704-4" data-muse-uid="U178704" data-muse-type="txt_frame"><!-- content --><p>ARTÍSTICA</p></div><!-- /m_editable --></div><div class="rounded-corners clearfix colelem" id="u178633"><!-- column --><div class="position_content" id="u178633_position_content"><!-- m_editable region-id="editable-static-tag-U178668-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178668-4" data-muse-uid="U178668" data-muse-type="txt_frame"><!-- content --><p>CIENTÍFICA</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu178705"><!-- group --><div class="grpelem" id="u178705"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Medica"></div><!-- m_editable region-id="editable-static-tag-U178622-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178622-4" data-muse-uid="U178622" data-muse-type="txt_frame"><!-- content --><p>Médica</p></div><!-- /m_editable --></div><div class="clearfix colelem" id="pu178695"><!-- group --><div class="grpelem" id="u178695"><!-- custom html --><input type="checkbox" name="Pedido[]" value="Odontologica"></div><!-- m_editable region-id="editable-static-tag-U178618-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178618-4" data-muse-uid="U178618" data-muse-type="txt_frame"><!-- content --><p>Odontológica</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix colelem" id="u178650"><!-- column --><div class="position_content" id="u178650_position_content"><!-- m_editable region-id="editable-static-tag-U178672-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178672-4" data-muse-uid="U178672" data-muse-type="txt_frame"><!-- content --><p>FAZ FILMAGEM?</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu178645"><!-- group --><div class="grpelem" id="u178645"><!-- custom html --><input type="radio" name="Filmagem" value="Sim"></div><!-- m_editable region-id="editable-static-tag-U178676-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178676-4" data-muse-uid="U178676" data-muse-type="txt_frame"><!-- content --><p>SIM</p></div><!-- /m_editable --><div class="grpelem" id="u178666"><!-- custom html --><input type="radio" name="Filmagem" value="Nao" checked></div><!-- m_editable region-id="editable-static-tag-U178634-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178634-4" data-muse-uid="U178634" data-muse-type="txt_frame"><!-- content --><p>NÃO</p></div><!-- /m_editable --></div></div></div><div class="rounded-corners clearfix colelem" id="u178615"><!-- group --><div class="clearfix grpelem" id="pu178671-4"><!-- column --><!-- m_editable region-id="editable-static-tag-U178671-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178671-4" data-muse-uid="U178671" data-muse-type="txt_frame"><!-- content --><p>EDIÇÃO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu178681"><!-- group --><div class="grpelem" id="u178681"><!-- custom html --><input type="checkbox" name="Edicao[]" value="imagem"></div><!-- m_editable region-id="editable-static-tag-U178646-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178646-4" data-muse-uid="U178646" data-muse-type="txt_frame"><!-- content --><p>Imagem</p></div><!-- /m_editable --></div></div><div class="grpelem" id="u178607"><!-- custom html --><input type="checkbox" name="Edicao[]" value="Video"></div><!-- m_editable region-id="editable-static-tag-U178696-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178696-4" data-muse-uid="U178696" data-muse-type="txt_frame"><!-- content --><p>Vídeo</p></div><!-- /m_editable --></div><!-- m_editable region-id="editable-static-tag-U178629-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178629-4" data-muse-uid="U178629" data-muse-type="txt_frame"><!-- content --><p>FALE UM POUCO SOBRE VOCÊ</p></div><!-- /m_editable --><div class="rounded-corners clearfix colelem" id="u178724"><!-- group --><div class="grpelem" id="u178638"><!-- custom html --><textarea cols=20 rows=20 id="text_area" name="txt_area_observacao"  style="resize: none; width: 100%; height: 91px; text-align: justify;
-webkit-text-align: justify;
-moz-text-align: justify;
 background-color:transparent; border: none;" placeholder="Fale um pouco sobre você ou sobre sua empresa."></textarea></div></div><!-- m_editable region-id="editable-static-tag-U178713-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178713-4" data-muse-uid="U178713" data-muse-type="txt_frame"><!-- content --><p>Insira seu email e senha corretamente.</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu178692"><!-- group --><div class="clearfix grpelem" id="u178692"><!-- group --><!-- m_editable region-id="editable-static-tag-U178693-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="rounded-corners clearfix grpelem" id="u178693-4" data-muse-uid="U178693" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR</p></div><!-- /m_editable --></div><div class="grpelem" id="u178637"><!-- custom html --><input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>
</form></div></div></div><div class="clearfix grpelem" id="u212661"><!-- column --><!-- m_editable region-id="editable-static-tag-U178632-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix colelem" id="u178632-4" data-muse-uid="U178632" data-muse-type="txt_frame"><!-- content --><p>NOME COMPLETO</p></div><!-- /m_editable --><div class="clearfix colelem" id="pu212668"><!-- group --><div class="clearfix grpelem" id="u212668"><!-- column --><div class="rounded-corners colelem" id="u178690"><!-- simple frame --></div><div class="rounded-corners colelem" id="u178617"><!-- simple frame --></div><div class="clearfix colelem" id="pu178598"><!-- group --><div class="rounded-corners grpelem" id="u178598"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u178623"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u178699"><!-- simple frame --></div><div class="rounded-corners colelem" id="u178674"><!-- simple frame --></div><div class="clearfix colelem" id="pu178626"><!-- group --><div class="rounded-corners grpelem" id="u178626"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u178698"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u178682"><!-- simple frame --></div><div class="clearfix colelem" id="pu178673"><!-- group --><div class="rounded-corners grpelem" id="u178673"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u178619"><!-- simple frame --></div><div class="rounded-corners grpelem" id="u178659"><!-- simple frame --></div></div><div class="rounded-corners colelem" id="u178686"><!-- simple frame --></div></div><!-- m_editable region-id="editable-static-tag-U178703-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178703-4" data-muse-uid="U178703" data-muse-type="txt_frame"><!-- content --><p>CONFIRMAR SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178604-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178604-4" data-muse-uid="U178604" data-muse-type="txt_frame"><!-- content --><p>NOME DA EMPRESA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178616-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178616-4" data-muse-uid="U178616" data-muse-type="txt_frame"><!-- content --><p>TELEFONE FIXO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178602-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178602-4" data-muse-uid="U178602" data-muse-type="txt_frame"><!-- content --><p>CELULAR</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178656-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178656-4" data-muse-uid="U178656" data-muse-type="txt_frame"><!-- content --><p>SENHA</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178661-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178661-4" data-muse-uid="U178661" data-muse-type="txt_frame"><!-- content --><p>EMAIL</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178663-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178663-4" data-muse-uid="U178663" data-muse-type="txt_frame"><!-- content --><p>NÚMERO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178641-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178641-4" data-muse-uid="U178641" data-muse-type="txt_frame"><!-- content --><p>CIDADE</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178610-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178610-4" data-muse-uid="U178610" data-muse-type="txt_frame"><!-- content --><p>ESTADO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178706-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178706-4" data-muse-uid="U178706" data-muse-type="txt_frame"><!-- content --><p>CEP</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178639-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178639-4" data-muse-uid="U178639" data-muse-type="txt_frame"><!-- content --><p>ENDEREÇO</p></div><!-- /m_editable --><!-- m_editable region-id="editable-static-tag-U178647-BP_320" template="sou-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" --><div class="clearfix grpelem" id="u178647-4" data-muse-uid="U178647" data-muse-type="txt_frame"><!-- content --><p>CPF</p></div><!-- /m_editable --><div class="grpelem" id="u178635"><!-- custom html --><input type="text" id="nome05" name="txt_nome_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178678"><!-- custom html --><input type="text" id="nome_emp05" name="txt_nome_emp_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178620"><!-- custom html --><input type="text" id="tel05" name="txt_tel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178609"><!-- custom html --><input type="text" id="cel05" name="txt_cel_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178691"><!-- custom html --><input type="email" id="email05" name="txt_email_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="rounded-corners grpelem" id="u178660"><!-- custom html --><input type="radio" id="rd_cpf05" name="rd_ident" value="cpf" checked></div><div class="grpelem" id="u178689"><!-- custom html --><input type="text" id="cpf05" name="txt_cpf" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/></div><div class="grpelem" id="u178718"><!-- custom html --><input type="password" id="senha05" name="txt_senha_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178596"><!-- custom html --><input type="password" id="senhaConf05" name="txt_senhaconf_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178723"><!-- custom html --><input type="text" id="endereco05" name="txt_end_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178680"><!-- custom html --><input type="text" id="num05" name="txt_num_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178601"><!-- custom html --><input type="text" id="cep05" name="txt_cep_foto" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> </div><div class="grpelem" id="u178643"><!-- custom html --><select id="estado05" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
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
</div><div class="grpelem" id="u178665"><!-- custom html --><select id="cidade05" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select></div></div></div></div></li>
      </ul>
     </div>
     <div class="verticalspacer" data-offset-top="3157" data-content-above-spacer="3157" data-content-below-spacer="185"></div>
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
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","webpro","musewpdisclosure","jquery.watch","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#accordionu295086', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu295086 */
Muse.Utils.initWidget('#accordionu185391', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu185391 */
Muse.Utils.initWidget('#accordionu292804', ['#bp_1024'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu292804 */
Muse.Utils.initWidget('#accordionu183120', ['#bp_1024'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu183120 */
Muse.Utils.initWidget('#accordionu180849', ['#bp_768'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu180849 */
Muse.Utils.initWidget('#accordionu272132', ['#bp_768'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu272132 */
Muse.Utils.initWidget('#accordionu56589', ['#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu56589 */
Muse.Utils.initWidget('#accordionu269843', ['#bp_480'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu269843 */
Muse.Utils.initWidget('#accordionu195203', ['#bp_480'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu195203 */
Muse.Utils.initWidget('#accordionu276718', ['#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu276718 */
Muse.Utils.initWidget('#accordionu178573', ['#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu178573 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4159430777" type="text/javascript" async data-main="scripts/museconfig.js?crc=4179431180" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
