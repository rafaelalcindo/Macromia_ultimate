<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $servico, $vagas,  $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		//$hora = substr($hora,0,5);     

         echo "
            <div class='clearfix colelem' id='u366252'><!-- group -->
            <input type='hidden' value=".$codigo." id='id_evento'/>
            <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u366257'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u366264'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366279-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366279-4' data-muse-uid='U366279' data-muse-type='txt_frame'><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366284-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366284-4' data-muse-uid='U366284' data-muse-type='txt_frame'><!-- content -->
             <p>".$servico."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366280'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366260-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366260-4' data-muse-uid='U366260' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366267-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366267-4' data-muse-uid='U366267' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366263'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366281-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366281-4' data-muse-uid='U366281' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366277-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

            if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
                echo "<div class='clearfix colelem' id='u366277-4' style='width: 147px; margin-left: 33%;' data-muse-uid='U366277' data-muse-type='txt_frame'><!-- content -->
                         <p>Acertar com o Cliente!</p>
                    </div>"; 
              }else{ 
                echo "<div class='clearfix colelem' id='u366277-4'  style='width: 100px; margin-left: 40%;' data-muse-uid='U366277' data-muse-type='txt_frame'><!-- content -->
                         <p>".$data."</p>
                    </div>"; 
              }

            
            echo "
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u366276'><!-- column -->
            <div class='clearfix colelem' id='u366275'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366261-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366261-4' data-muse-uid='U366261' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366282-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366282-5' data-muse-uid='U366282' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366282'>NOME: </span> ".$nome."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366283-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366283-5' data-muse-uid='U366283' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366283'>TELEFONE:</span> ".$telefone."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366273-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366273-5' data-muse-uid='U366273' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366273'>CELULAR/WHATSAPP:</span> ".$celular."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366266-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366266-5' data-muse-uid='U366266' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366266'>EMAIL:</span> ".$email."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u366286'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366262-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366262-4' data-muse-uid='U366262' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366259-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366259-4' data-muse-uid='U366259' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu366258-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366258-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366258-5' data-muse-uid='U366258' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366258'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366285-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366285-5' data-muse-uid='U366285' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366285'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366278'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366274-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366274-4' data-muse-uid='U366274' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366268'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U366272-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366272-4' data-muse-uid='U366272' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366270-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

             
                echo "
                <div class='clearfix colelem' id='u366270-4' data-muse-uid='U366270' data-muse-type='txt_frame'><!-- content -->
                  <p>CONTATO ADQUIRIDO</p>
                 </div>
                ";
             

             

             echo"
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366269-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='rounded-corners clearfix colelem' id='u366269-4' data-muse-uid='U366269' data-muse-type='txt_frame'><!-- content -->
              <p>COMPRAR CONTATO</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366271-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366271-5' data-muse-uid='U366271' data-muse-type='txt_frame'><!-- content -->
              <p id='u366271-3'><span id='u366271'>VALOR DO CONTATO:</span><span id='u366271-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";

}











function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico){

	//	$hora = substr($hora,0,5);



         echo "
            <div class='clearfix colelem' id='u366252'><!-- group -->
            <input type='hidden' value=".$codigo." id='id_evento'/>
            <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u366257'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u366264'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366279-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366279-4' data-muse-uid='U366279' data-muse-type='txt_frame'><!-- content -->
             <p>SERVIÇO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366284-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366284-4' data-muse-uid='U366284' data-muse-type='txt_frame'><!-- content -->
             <p>".$servico."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366280'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366260-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366260-4' data-muse-uid='U366260' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366267-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366267-4' data-muse-uid='U366267' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366263'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366281-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366281-4' data-muse-uid='U366281' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366277-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

            if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
                echo "<div class='clearfix colelem' id='u366277-4' style='width: 147px; margin-left: 33%;' data-muse-uid='U366277' data-muse-type='txt_frame'><!-- content -->
                         <p>Acertar com o Cliente!</p>
                    </div>"; 
              }else{ 
                echo "<div class='clearfix colelem' id='u366277-4' style='width: 100px; margin-left: 40%;' data-muse-uid='U366277' data-muse-type='txt_frame'><!-- content -->
                         <p>".$data."</p>
                    </div>"; 
              }

            echo "
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u366276'><!-- column -->
            <div class='clearfix colelem' id='u366275'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366261-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366261-4' data-muse-uid='U366261' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366282-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366282-5' data-muse-uid='U366282' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366282'>NOME: </span> XXXXXXXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366283-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366283-5' data-muse-uid='U366283' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366283'>TELEFONE:</span> XX XXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366273-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366273-5' data-muse-uid='U366273' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366273'>CELULAR/WHATSAPP:</span> XX XXXXX-XXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366266-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366266-5' data-muse-uid='U366266' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366266'>EMAIL:</span> XXXXXXXXXXX@XXXX.XXXX</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u366286'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366262-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366262-4' data-muse-uid='U366262' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÕES</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366259-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366259-4' data-muse-uid='U366259' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu366258-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366258-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366258-5' data-muse-uid='U366258' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366258'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366285-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366285-5' data-muse-uid='U366285' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366285'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366278'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366274-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366274-4' data-muse-uid='U366274' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366268'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U366272-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366272-4' data-muse-uid='U366272' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366270-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->

                
                <div class='clearfix colelem' id='u366270-4' data-muse-uid='U366270' data-muse-type='txt_frame'><!-- content -->
                  <p>VAGAS RESTANTES</p>
                 </div>
                
           
            
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366269-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

             if($vagas > 0){
                echo "
                    <div class='rounded-corners clearfix colelem' id='u366269-4' data-muse-uid='U366269'  style='cursor: pointer;' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' data-muse-type='txt_frame'><!-- content -->
                      <p>COMPRAR CONTATO</p>
                     </div>
                ";
             }else{
                echo "
                    <div class='rounded-corners clearfix colelem' id='u366269-4' data-muse-uid='U366269' data-muse-type='txt_frame'><!-- content -->
                      <p>CONTATO ADQUIRIDO!</p>
                     </div>
                ";
             }

             

             echo"
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366271-BP_768' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366271-5' data-muse-uid='U366271' data-muse-type='txt_frame'><!-- content -->
              <p id='u366271-3'><span id='u366271'>VALOR DO CONTATO:</span><span id='u366271-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";



	}