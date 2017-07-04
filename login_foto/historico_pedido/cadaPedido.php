<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $servico, $vagas, $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		//$hora = substr($hora,0,5);

    echo "
        <div class='clearfix colelem' style='margin-top: 5%;' id='u506584'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u506616'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u506618'><!-- simple frame --></div>
       <div class='grpelem' id='u506617'><!-- simple frame --></div>
       <div class='clearfix grpelem' id='u506585'><!-- column -->
        <div class='clearfix colelem' id='pu506592-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506592-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506592-4' data-muse-uid='U506592' data-muse-type='txt_frame'><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506603-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506603-4' data-muse-uid='U506603' data-muse-type='txt_frame'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506608-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506608-4' data-muse-uid='U506608' data-muse-type='txt_frame'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu506609-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506609-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506609-4' data-muse-uid='U506609' data-muse-type='txt_frame'><!-- content -->
          <p>".$servico."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506586-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506586-4' style='width: 250px;' data-muse-uid='U506586' data-muse-type='txt_frame'><!-- content -->
          <p>"; if($val_min >= 10000){echo 'Acima de R$ '.number_format($val_min, 2,',','.').''; }else{ echo 'R$ '.number_format($val_min, 2, ',','.').' a R$ '.number_format($val_max, 2, ',', '.').' '; } echo"</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506590-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->";



         if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u506590-4' style='width: 150px; margin-left: 46%;' data-muse-uid='U506590' data-muse-type='txt_frame'><!-- content -->
                    <p>acertar com o cliente</p>
                  </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u506590-4' data-muse-uid='U506590' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                   </div>"; 
          }


         echo "
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u506605'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506593-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506593-4' data-muse-uid='U506593' data-muse-type='txt_frame'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506601-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506601-4' data-muse-uid='U506601' data-muse-type='txt_frame'><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506607-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506607-4' data-muse-uid='U506607' data-muse-type='txt_frame'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u506611'><!-- group -->
         <div class='clearfix grpelem' id='pu506612-5'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506612-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506612-5' data-muse-uid='U506612' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506612'>NOME: </span>".$nome."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506599-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506599-5' data-muse-uid='U506599' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506599'>TELEFONE FIXO:</span> ".$telefone."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506610-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506610-5' data-muse-uid='U506610' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506610'>CELULAR /WHATSAPP:</span> ".$celular."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506591-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506591-5' data-muse-uid='U506591' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506591'>EMAIL:</span> ".$email."</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu506588-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506588-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506588-4' data-muse-uid='U506588' data-muse-type='txt_frame'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem' id='pu506613-5'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U506613-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u506613-5' data-muse-uid='U506613' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u506613'>ESTADO:</span> ".utf8_encode($estado)."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U506600-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u506600-5' data-muse-uid='U506600' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u506600'>CIDADE:</span> ".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem' id='u506594'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506596-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506596-4' data-muse-uid='U506596' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506598-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506598-4' data-muse-uid='U506598' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506597-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='rounded-corners clearfix colelem' id='u506597-4' data-muse-uid='U506597' data-muse-type='txt_frame'><!-- content -->
           <p>CONTATO AQUIRIDO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506595-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506595-5' data-muse-uid='U506595' data-muse-type='txt_frame'><!-- content -->
           <p id='u506595-3'><span id='u506595'>VALOR DO CONTATO:</span><span id='u506595-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class='grpelem' id='u506614'><!-- simple frame --></div>
       <div class='grpelem' id='u506615'><!-- simple frame --></div>


      </div>";



	}

  




















	function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico){

		//$hora = substr($hora,0,5);

  
    
     echo "<div class='clearfix colelem' style='margin-top: 5%;' id='u506584'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u506616'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u506618'><!-- simple frame --></div>
       <div class='grpelem' id='u506617'><!-- simple frame --></div>
       <div class='clearfix grpelem' id='u506585'><!-- column -->
        <div class='clearfix colelem' id='pu506592-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506592-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506592-4' data-muse-uid='U506592' data-muse-type='txt_frame'><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506603-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506603-4' data-muse-uid='U506603' data-muse-type='txt_frame'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506608-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506608-4' data-muse-uid='U506608' data-muse-type='txt_frame'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu506609-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506609-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506609-4' data-muse-uid='U506609' data-muse-type='txt_frame'><!-- content -->
          <p>".$servico."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506586-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506586-4' style='width: 250px;' data-muse-uid='U506586' data-muse-type='txt_frame'><!-- content -->
          <p>"; if($val_min >= 10000){echo 'Acima de R$ '.number_format($val_min, 2,',','.').''; }else{ echo 'R$ '.number_format($val_min, 2, ',','.').' a R$ '.number_format($val_max, 2, ',', '.').' '; } echo"</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506590-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->";



         if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u506590-4' style='width: 150px; margin-left: 46%;' data-muse-uid='U506590' data-muse-type='txt_frame'><!-- content -->
                    <p>acertar com o cliente</p>
                  </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u506590-4' data-muse-uid='U506590' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                   </div>"; 
          }


         echo "
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u506605'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U506593-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506593-4' data-muse-uid='U506593' data-muse-type='txt_frame'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506601-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506601-4' data-muse-uid='U506601' data-muse-type='txt_frame'><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U506607-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u506607-4' data-muse-uid='U506607' data-muse-type='txt_frame'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u506611'><!-- group -->
         <div class='clearfix grpelem' id='pu506612-5'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506612-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506612-5' data-muse-uid='U506612' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506612'>NOME: </span>XXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506599-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506599-5' data-muse-uid='U506599' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506599'>TELEFONE FIXO:</span> XXXX-XXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506610-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506610-5' data-muse-uid='U506610' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506610'>CELULAR /WHATSAPP:</span> XXXXXX-XXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506591-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506591-5' data-muse-uid='U506591' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u506591'>EMAIL:</span> XXXXXXXXXXXXX@XXXXX.XXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu506588-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506588-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506588-4' data-muse-uid='U506588' data-muse-type='txt_frame'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem' id='pu506613-5'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U506613-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u506613-5' data-muse-uid='U506613' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u506613'>ESTADO:</span> ".utf8_encode($estado)."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U506600-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u506600-5' data-muse-uid='U506600' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u506600'>CIDADE:</span> ".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem' id='u506594'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U506596-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506596-4' data-muse-uid='U506596' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506598-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506598-4' data-muse-uid='U506598' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506597-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='rounded-corners clearfix colelem' id='u506597-4' data-muse-uid='U506597' data-muse-type='txt_frame'><!-- content -->
           <p>COMPRAR CONTATO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U506595-BP_infinity' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u506595-5' data-muse-uid='U506595' data-muse-type='txt_frame'><!-- content -->
           <p id='u506595-3'><span id='u506595'>VALOR DO CONTATO:</span><span id='u506595-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class='grpelem' id='u506614'><!-- simple frame --></div>
       <div class='grpelem' id='u506615'><!-- simple frame --></div>

       
      </div>"; 

	}