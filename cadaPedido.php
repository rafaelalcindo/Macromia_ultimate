<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $servico, $vagas, $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		//$hora = substr($hora,0,5);

      echo "
        <div class='clearfix colelem' id='u468557'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u468591'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u468588'><!-- simple frame --></div>
       <div class='grpelem' id='u468590'><!-- simple frame --></div>

       <div class='clearfix grpelem' id='u468558'><!-- column -->
        <div class='clearfix colelem' id='pu468567-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468567-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468567-4' data-muse-uid='U468567' data-muse-type='txt_frame'><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468579-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468579-4' data-muse-uid='U468579' data-muse-type='txt_frame'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468560-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468560-4' data-muse-uid='U468560' data-muse-type='txt_frame'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu468586-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468586-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468586-4' data-muse-uid='U468586' data-muse-type='txt_frame'><!-- content -->
          <p>".$servico."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468566-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468566-4' data-muse-uid='U468566' data-muse-type='txt_frame'><!-- content -->
          <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468576-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";


         if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u468576-4' style='width: 150px; margin-left: 46%;' data-muse-uid='U468576' data-muse-type='txt_frame'><!-- content -->
                    <p>Acertar com o Cliente!</p>
                 </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u468576-4' data-muse-uid='U468576' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                 </div>"; 
          }

          echo "
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u468583'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468571-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468571-4' data-muse-uid='U468571' data-muse-type='txt_frame'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468568-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468568-4' data-muse-uid='U468568' data-muse-type='txt_frame'><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468574-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468574-4' data-muse-uid='U468574' data-muse-type='txt_frame'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u468570'><!-- group -->
         <div class='clearfix grpelem' id='pu468573-5'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468573-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468573-5' data-muse-uid='U468573' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468573'>NOME: </span> ".$nome." </p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468582-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468582-5' data-muse-uid='U468582' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468582'>TELEFONE FIXO:</span> ".$telefone."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468572-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468572-5' data-muse-uid='U468572' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468572'>CELULAR /WHATSAPP:</span> ".$celular." </p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468581-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468581-5' data-muse-uid='U468581' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468581'>EMAIL:</span> ".$email."</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu468585-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468585-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468585-4' data-muse-uid='U468585' data-muse-type='txt_frame'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem' id='pu468584-5'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U468584-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u468584-5' data-muse-uid='U468584' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u468584'>ESTADO:</span> ".utf8_encode($estado)."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U468578-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u468578-5' data-muse-uid='U468578' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u468578'>CIDADE:</span> ".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem' id='u468561'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468564-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468564-4' data-muse-uid='U468564' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468562-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468562-4' data-muse-uid='U468562' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468565-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

            echo "
            <div class='rounded-corners clearfix colelem' id='u468565-4' data-muse-uid='U468565' data-muse-type='txt_frame'><!-- content -->
             <p>CONTATO ADQUIRIDO!</p>
            </div>";
          

          
          echo "
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468563-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468563-5' data-muse-uid='U468563' data-muse-type='txt_frame'><!-- content -->
           <p id='u468563-3'><span id='u468563'>VALOR DO CONTATO:</span><span id='u468563-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>

       <div class='grpelem' id='u468587'><!-- simple frame --></div>
       <div class='grpelem' id='u468589'><!-- simple frame --></div>
      </div>";
		

	}






















	function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico){

		//$hora = substr($hora,0,5);

  
    



      echo "
        <div class='clearfix colelem' id='u468557'><!-- group -->
        <input type='hidden' value=".$codigo." id='id_evento'/>
        <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u468591'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u468588'><!-- simple frame --></div>
       <div class='grpelem' id='u468590'><!-- simple frame --></div>

       <div class='clearfix grpelem' id='u468558'><!-- column -->
        <div class='clearfix colelem' id='pu468567-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468567-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468567-4' data-muse-uid='U468567' data-muse-type='txt_frame'><!-- content -->
          <p>SERVIÇO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468579-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468579-4' data-muse-uid='U468579' data-muse-type='txt_frame'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468560-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468560-4' data-muse-uid='U468560' data-muse-type='txt_frame'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu468586-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468586-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468586-4' data-muse-uid='U468586' data-muse-type='txt_frame'><!-- content -->
          <p>".$servico."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468566-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468566-4' data-muse-uid='U468566' data-muse-type='txt_frame'><!-- content -->
          <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468576-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";
         if( $data == date('d/m/Y', mktime(0,0,0,12,25,2030)) ){ 
            echo "<div class='clearfix grpelem' id='u468576-4' style='width: 150px; margin-left: 46%;' data-muse-uid='U468576' data-muse-type='txt_frame'><!-- content -->
                    <p>Acertar com o Cliente!</p>
                 </div>"; 
          }else{ 
            echo "<div class='clearfix grpelem' id='u468576-4' data-muse-uid='U468576' data-muse-type='txt_frame'><!-- content -->
                    <p>".$data."</p>
                 </div>"; 
          }
         

         echo "
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u468583'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U468571-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468571-4' data-muse-uid='U468571' data-muse-type='txt_frame'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468568-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468568-4' data-muse-uid='U468568' data-muse-type='txt_frame'><!-- content -->
          <p>OBSERVAÇÕES</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U468574-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem' id='u468574-4' data-muse-uid='U468574' data-muse-type='txt_frame'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u468570'><!-- group -->
         <div class='clearfix grpelem' id='pu468573-5'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468573-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468573-5' data-muse-uid='U468573' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468573'>NOME: </span>XXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468582-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468582-5' data-muse-uid='U468582' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468582'>TELEFONE FIXO:</span> XX XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468572-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468572-5' data-muse-uid='U468572' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468572'>CELULAR /WHATSAPP:</span> XX XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468581-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468581-5' data-muse-uid='U468581' data-muse-type='txt_frame'><!-- content -->
           <p><span id='u468581'>EMAIL:</span> XXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu468585-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468585-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468585-4' data-muse-uid='U468585' data-muse-type='txt_frame'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem' id='pu468584-5'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U468584-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u468584-5' data-muse-uid='U468584' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u468584'>ESTADO:</span> ".utf8_encode($estado)."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U468578-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u468578-5' data-muse-uid='U468578' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u468578'>CIDADE:</span> ".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem' id='u468561'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U468564-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468564-4' data-muse-uid='U468564' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468562-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468562-4' data-muse-uid='U468562' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468565-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->";

          if($vagas > 0){
            echo "<div class='rounded-corners clearfix colelem' id='u468565-4' data-muse-uid='U468565' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' style='cursor: pointer;' data-muse-type='txt_frame'><!-- content -->
                   <p>COMPRAR CONTATO</p>
                  </div>";
          }else{
            echo "
            <div class='rounded-corners clearfix colelem' id='u468565-4' data-muse-uid='U468565' data-muse-type='txt_frame'><!-- content -->
             <p>VAGAS ESGOTADAS! </p>
            </div>";
          }

          
          echo "
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U468563-BP_infinity' template='filtro.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u468563-5' data-muse-uid='U468563' data-muse-type='txt_frame'><!-- content -->
           <p id='u468563-3'><span id='u468563'>VALOR DO CONTATO:</span><span id='u468563-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>

       <div class='grpelem' id='u468587'><!-- simple frame --></div>
       <div class='grpelem' id='u468589'><!-- simple frame --></div>
      </div>";

	}