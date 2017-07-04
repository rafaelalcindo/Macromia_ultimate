<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $hora, $servico, $vagas, $numero, $cep, $endereco, $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		$hora = substr($hora,0,5);

    echo "
      <div class='clearfix colelem' id='u365431' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
        <div class='rounded-corners grpelem' id='u365433'><!-- simple frame --></div>
        <div class='rounded-corners grpelem' id='u365434'><!-- simple frame --></div>
        <div class='grpelem' id='u365466'><!-- simple frame --></div>
        <div class='clearfix grpelem' id='u365436'><!-- column -->
         <div class='clearfix colelem' id='pu365455-4'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365455-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365455-4' data-muse-uid='U365455' data-muse-type='txt_frame'><!-- content -->
           <p>DATA DO EVENTO:</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365442-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365442-4' data-muse-uid='U365442' data-muse-type='txt_frame'><!-- content -->
           <p>ORÇAMENTO:</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365464-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365464-4' data-muse-uid='U365464' data-muse-type='txt_frame'><!-- content -->
           <p>HORÁRIO DO EVENTO:</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix colelem' id='pu365463-4'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365463-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";


          if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u365463-4' data-muse-uid='U365463' data-muse-type='txt_frame'><!-- content -->
                    <p>Acertar com o Cliente!</p>
                </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u365463-4' data-muse-uid='U365463' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                </div>"; 
          }

          echo "
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365459-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365459-4' data-muse-uid='U365459' data-muse-type='txt_frame'><!-- content -->
           <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365440-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365440-4' data-muse-uid='U365440' data-muse-type='txt_frame'><!-- content -->
           <p>".$hora."</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix colelem' id='u365461'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365460-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365460-4' data-muse-uid='U365460' data-muse-type='txt_frame'><!-- content -->
           <p>DADOS PESSOAIS</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365438-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365438-4' data-muse-uid='U365438' data-muse-type='txt_frame'><!-- content -->
           <p>OBSERVAÇÃO DO EVENTO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365462-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365462-4' data-muse-uid='U365462' data-muse-type='txt_frame'><!-- content -->
           <p>OFERTA</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='rounded-corners clearfix colelem' id='u365458'><!-- group -->
          <div class='clearfix grpelem' id='pu365451-4'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365451-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365451-4' data-muse-uid='U365451' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365456'>NOME:</span> ".$nome."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365456-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365456-5' data-muse-uid='U365456' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365456'>TELEFONE:</span> ".$telefone."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365454-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365454-5' data-muse-uid='U365454' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365454'>CELULAR:</span> ".$celular."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365443-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365443-5' data-muse-uid='U365443' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365443'>EMAIL:</span> ".$email."</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class='clearfix grpelem' id='pu365439-4'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365439-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365439-4' data-muse-uid='U365439' data-muse-type='txt_frame'><!-- content -->
            <p>".$complementar."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365465-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365465-5' data-muse-uid='U365465' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365465'>ENDEREÇO:</span> ".$endereco.", ".$numero."</p>
           </div>
           <!-- /m_editable -->
           <div class='clearfix colelem' id='pu365441-5'><!-- group -->
            <!-- m_editable region-id='editable-static-tag-U365441-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix grpelem' id='u365441-5' style='width: 85px;' data-muse-uid='U365441' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365441'>ESTADO:</span> ".utf8_encode($estado)."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U365437-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix grpelem' id='u365437-5' data-muse-uid='U365437' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365437'>CIDADE:</span> ".utf8_encode($cidade)."</p>
            </div>
            <!-- /m_editable -->
           </div>
          </div>
          <div class='clearfix grpelem' id='u365445'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365446-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365446-4' data-muse-uid='U365446' data-muse-type='txt_frame'><!-- content -->
            <p>".$vagas."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365449-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365449-4' data-muse-uid='U365449' data-muse-type='txt_frame'><!-- content -->
            <p>VAGAS RESTANTES</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365447-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->

           
                <div class='rounded-corners clearfix colelem' id='u365447-4' data-muse-uid='U365447' data-muse-type='txt_frame'><!-- content -->
                  <p>CONTATO ADQUIRIDO!</p>
                </div> 
           
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365448-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365448-5' data-muse-uid='U365448' data-muse-type='txt_frame'><!-- content -->
            <p id='u365448-3'><span id='u365448'>VALOR DO CONTATO:</span><span id='u365448-2'> GRÁTIS</span></p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class='grpelem' id='u365432'><!-- simple frame --></div>
        <div class='grpelem' id='u365435'><!-- simple frame --></div>
       </div> ";
		

	}






















	function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$hora,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar){

		$hora = substr($hora,0,5);

    echo "
      <div class='clearfix colelem' id='u365431' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
        <div class='rounded-corners grpelem' id='u365433'><!-- simple frame --></div>
        <div class='rounded-corners grpelem' id='u365434'><!-- simple frame --></div>
        <div class='grpelem' id='u365466'><!-- simple frame --></div>
        <div class='clearfix grpelem' id='u365436'><!-- column -->
         <div class='clearfix colelem' id='pu365455-4'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365455-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365455-4' data-muse-uid='U365455' data-muse-type='txt_frame'><!-- content -->
           <p>DATA DO EVENTO:</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365442-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365442-4' data-muse-uid='U365442' data-muse-type='txt_frame'><!-- content -->
           <p>ORÇAMENTO:</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365464-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365464-4' data-muse-uid='U365464' data-muse-type='txt_frame'><!-- content -->
           <p>HORÁRIO DO EVENTO:</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix colelem' id='pu365463-4'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365463-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";

          
          if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u365463-4' data-muse-uid='U365463' data-muse-type='txt_frame'><!-- content -->
                    <p>Acertar com o Cliente!</p>
                </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u365463-4' data-muse-uid='U365463' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                </div>"; 
          }


          echo "
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365459-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365459-4' data-muse-uid='U365459' data-muse-type='txt_frame'><!-- content -->
           <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365440-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365440-4' data-muse-uid='U365440' data-muse-type='txt_frame'><!-- content -->
           <p>".$hora."</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix colelem' id='u365461'><!-- group -->
          <!-- m_editable region-id='editable-static-tag-U365460-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365460-4' data-muse-uid='U365460' data-muse-type='txt_frame'><!-- content -->
           <p>DADOS PESSOAIS</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365438-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365438-4' data-muse-uid='U365438' data-muse-type='txt_frame'><!-- content -->
           <p>OBSERVAÇÃO DO EVENTO</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U365462-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix grpelem' id='u365462-4' data-muse-uid='U365462' data-muse-type='txt_frame'><!-- content -->
           <p>OFERTA</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='rounded-corners clearfix colelem' id='u365458'><!-- group -->
          <div class='clearfix grpelem' id='pu365451-4'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365451-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365451-4' data-muse-uid='U365451' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365456'>NOME:</span>  XXXXXX XXXXXXX XXXXX XX</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365456-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365456-5' data-muse-uid='U365456' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365456'>TELEFONE:</span> XX XXXX-XXXX</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365454-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365454-5' data-muse-uid='U365454' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365454'>CELULAR:</span> XX XXXXX-XXXX</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365443-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365443-5' data-muse-uid='U365443' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365443'>EMAIL:</span> XXXXX@XXXXXXXXX</p>
           </div>
           <!-- /m_editable -->
          </div>
          <div class='clearfix grpelem' id='pu365439-4'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365439-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365439-4' data-muse-uid='U365439' data-muse-type='txt_frame'><!-- content -->
            <p>".$complementar."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365465-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365465-5' data-muse-uid='U365465' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u365465'>ENDEREÇO:</span> XXX XXXXXXXXXXXXXXXX</p>
           </div>
           <!-- /m_editable -->
           <div class='clearfix colelem' id='pu365441-5'><!-- group -->
            <!-- m_editable region-id='editable-static-tag-U365441-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix grpelem' id='u365441-5' style='width: 85px;' data-muse-uid='U365441' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365441'>ESTADO:</span> ".utf8_encode($estado)."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U365437-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix grpelem' id='u365437-5' data-muse-uid='U365437' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365437'>CIDADE:</span> ".utf8_encode($cidade)."</p>
            </div>
            <!-- /m_editable -->
           </div>
          </div>
          <div class='clearfix grpelem' id='u365445'><!-- column -->
           <!-- m_editable region-id='editable-static-tag-U365446-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365446-4' data-muse-uid='U365446' data-muse-type='txt_frame'><!-- content -->
            <p>".$vagas."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365449-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365449-4' data-muse-uid='U365449' data-muse-type='txt_frame'><!-- content -->
            <p>VAGAS RESTANTES</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365447-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";

           if($vagas > 0){
              echo "<div class='rounded-corners clearfix colelem' id='u365447-4' data-muse-uid='U365447' style='cursor: pointer;' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' data-muse-type='txt_frame'><!-- content -->
                      <p>COMPRAR CONTATO</p>
                    </div>";
           }else{
              echo "
                <div class='rounded-corners clearfix colelem' id='u365447-4' data-muse-uid='U365447' data-muse-type='txt_frame'><!-- content -->
                  <p>VAGAS ESGOTADAS!</p>
                </div>";
           }
           


           echo "
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U365448-BP_1024' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix colelem' id='u365448-5' data-muse-uid='U365448' data-muse-type='txt_frame'><!-- content -->
            <p id='u365448-3'><span id='u365448'>VALOR DO CONTATO:</span><span id='u365448-2'> GRÁTIS</span></p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
        </div>
        <div class='grpelem' id='u365432'><!-- simple frame --></div>
        <div class='grpelem' id='u365435'><!-- simple frame --></div>
       </div> ";



	}