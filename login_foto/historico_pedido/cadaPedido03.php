<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $servico, $vagas,  $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		//$hora = substr($hora,0,5);     


      echo "<div class='clearfix colelem' style='margin-top: 5%;' id='u505571'><!-- group -->
            <input type='hidden' value=".$codigo." id='id_evento'/>
            <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u505572'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u505585'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505573-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505573-4' data-muse-uid='U505573' data-muse-type='txt_frame'><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505589-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505589-4' data-muse-uid='U505589' data-muse-type='txt_frame'><!-- content -->
             <p>".$servico."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u505579'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505587-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505587-4' data-muse-uid='U505587' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505580-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505580-4' data-muse-uid='U505580' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo 'Acima de R$ '.number_format($val_min, 2,',','.').''; }else{ echo 'R$ '.number_format($val_min, 2, ',','.').' a R$ '.number_format($val_max, 2, ',', '.').' '; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u505599'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505588-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505588-4' data-muse-uid='U505588' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505576-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505576-4' data-muse-uid='U505576' data-muse-type='txt_frame'><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u505597'><!-- column -->
            <div class='clearfix colelem' id='u505577'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505581-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505581-4' data-muse-uid='U505581' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U505590-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505590-5' data-muse-uid='U505590' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505590'>NOME: </span> ".$nome."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505586-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505586-5' data-muse-uid='U505586' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505586'>TELEFONE:</span> ".$telefone."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505600-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505600-5' data-muse-uid='U505600' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505600'>CELULAR/WHATSAPP:</span> ".$celular."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505575-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505575-5' data-muse-uid='U505575' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505575'>EMAIL:</span> ".$email."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u505574'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505578-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505578-4' data-muse-uid='U505578' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U505598-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505598-4' data-muse-uid='U505598' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu505582-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505582-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505582-5' data-muse-uid='U505582' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u505582'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505584-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505584-5' data-muse-uid='U505584' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u505584'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u505583'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505591-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505591-4' data-muse-uid='U505591' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u505592'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U505594-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505594-4' data-muse-uid='U505594' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505596-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505596-4' data-muse-uid='U505596' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505593-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='rounded-corners clearfix colelem' id='u505593-4' data-muse-uid='U505593' data-muse-type='txt_frame'><!-- content -->
              <p>CONTATO ADQUIRIDO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505595-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505595-5' data-muse-uid='U505595' data-muse-type='txt_frame'><!-- content -->
              <p id='u505595-3'><span id='u505595'>VALOR DO CONTATO:</span><span id='u505595-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";





}











function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico){

	//	$hora = substr($hora,0,5);



         echo "<div class='clearfix colelem' style='margin-top: 5%;' id='u505571'><!-- group -->
            <input type='hidden' value=".$codigo." id='id_evento'/>
            <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u505572'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u505585'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505573-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505573-4' data-muse-uid='U505573' data-muse-type='txt_frame'><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505589-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505589-4' data-muse-uid='U505589' data-muse-type='txt_frame'><!-- content -->
             <p>".$servico."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u505579'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505587-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505587-4' data-muse-uid='U505587' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505580-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505580-4' data-muse-uid='U505580' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo 'Acima de R$ '.number_format($val_min, 2,',','.').''; }else{ echo 'R$ '.number_format($val_min, 2, ',','.').' a R$ '.number_format($val_max, 2, ',', '.').' '; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u505599'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U505588-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505588-4' data-muse-uid='U505588' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505576-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505576-4' data-muse-uid='U505576' data-muse-type='txt_frame'><!-- content -->
             <p>13:00</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u505597'><!-- column -->
            <div class='clearfix colelem' id='u505577'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505581-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505581-4' data-muse-uid='U505581' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U505590-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505590-5' data-muse-uid='U505590' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505590'>NOME: </span> XXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505586-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505586-5' data-muse-uid='U505586' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505586'>TELEFONE:</span> XXXXXX-XXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505600-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505600-5' data-muse-uid='U505600' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505600'>CELULAR/WHATSAPP:</span> XXXXXX-XXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U505575-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505575-5' data-muse-uid='U505575' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u505575'>EMAIL:</span> XXXXXXXXXXXXXX@XXXXX.XXXX</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u505574'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505578-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505578-4' data-muse-uid='U505578' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U505598-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u505598-4' data-muse-uid='U505598' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu505582-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505582-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505582-5' data-muse-uid='U505582' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u505582'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505584-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505584-5' data-muse-uid='U505584' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u505584'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u505583'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U505591-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u505591-4' data-muse-uid='U505591' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u505592'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U505594-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505594-4' data-muse-uid='U505594' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505596-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505596-4' data-muse-uid='U505596' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505593-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='rounded-corners clearfix colelem' id='u505593-4' data-muse-uid='U505593' data-muse-type='txt_frame'><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U505595-BP_768' template='historico.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u505595-5' data-muse-uid='U505595' data-muse-type='txt_frame'><!-- content -->
              <p id='u505595-3'><span id='u505595'>VALOR DO CONTATO:</span><span id='u505595-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";



	}