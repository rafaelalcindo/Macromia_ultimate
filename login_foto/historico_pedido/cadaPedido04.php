<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $servico, $vagas,  $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		//$hora = substr($hora,0,5);

    echo "
      <div class='clearfix colelem' id='u367153' style='margin-top: 6%; margin-bottom: 5%;'><!-- group -->
          <div class='clearfix grpelem' id='u367158'><!-- column -->
           <input type='hidden' value=".$codigo." id='id_evento'/>
           <input type='hidden' value=".$pg." />
           <div class='rounded-corners clearfix colelem' id='u367172'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367177-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367177-4' data-muse-uid='U367177' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367185-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367185-4' data-muse-uid='U367185' data-muse-type='txt_frame'><!-- content -->
             <p>".$data."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u367175'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367164-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367164-4' data-muse-uid='U367164' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367181-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367181-4' data-muse-uid='U367181' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u367174'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367186-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367186-4' data-muse-uid='U367186' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367162-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367162-4' data-muse-uid='U367162' data-muse-type='txt_frame'><!-- content -->
             <p>".$hora."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u367180'><!-- column -->
            <div class='clearfix colelem' id='u367183'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367182-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367182-4' data-muse-uid='U367182' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U367173-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367173-4' data-muse-uid='U367173' data-muse-type='txt_frame'><!-- content -->
             <p>NOME: ".$nome."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367178-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367178-5' data-muse-uid='U367178' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367178'>TELEFONE:</span> ".$telefone."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367176-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367176-5' data-muse-uid='U367176' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367176'>CELULAR:</span> ".$celular."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367165-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367165-5' data-muse-uid='U367165' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367165'>EMAIL:</span> ".$email."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u367166'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367160-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367160-4' data-muse-uid='U367160' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÃO DO EVENTO</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U367161-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367161-4' data-muse-uid='U367161' data-muse-type='txt_frame'><!-- content -->
             <p> ".$complementar." </p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367187-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367187-5' data-muse-uid='U367187' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367187'>ENDEREÇO:</span> ".$endereco.", ".$numero."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu367163-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367163-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367163-5'  style='width: 85px;' data-muse-uid='U367163' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u367163'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367159-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367159-5' data-muse-uid='U367159' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u367159'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u367179'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367184-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367184-4' data-muse-uid='U367184' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u367167'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U367168-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367168-4' data-muse-uid='U367168' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367171-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367171-4' data-muse-uid='U367171' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367169-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->

             
             <div class='rounded-corners clearfix colelem' id='u367169-4' data-muse-uid='U367169' data-muse-type='txt_frame'><!-- content -->
                <p>CONTATO ADQUIRIDO!</p>
              </div>
             
             
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367170-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367170-5' data-muse-uid='U367170' data-muse-type='txt_frame'><!-- content -->
              <p id='u367170-3'><span id='u367170'>VALOR DO CONTATO:</span><span id='u367170-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div> ";

	}






















	function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar, $servico){

		//$hora = substr($hora,0,5);



    echo "
      <div class='clearfix colelem' id='u367153' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
          <div class='clearfix grpelem' id='u367158'><!-- column -->
           <input type='hidden' value=".$codigo." id='id_evento'/>
           <input type='hidden' value=".$pg." />
           <div class='rounded-corners clearfix colelem' id='u367172'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367177-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367177-4' data-muse-uid='U367177' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367185-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367185-4' data-muse-uid='U367185' data-muse-type='txt_frame'><!-- content -->
             <p>".$data."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u367175'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367164-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367164-4' data-muse-uid='U367164' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367181-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367181-4' data-muse-uid='U367181' data-muse-type='txt_frame'><!-- content -->
             <p>"; if($val_min >= 10000){echo "Acima de R$ ".number_format($val_min, 2,',','.').""; }else{ echo "R$ ".number_format($val_min, 2, ',','.')." a R$ ".number_format($val_max, 2, ',', '.')." "; } echo"</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u367174'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U367186-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367186-4' data-muse-uid='U367186' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367162-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367162-4' data-muse-uid='U367162' data-muse-type='txt_frame'><!-- content -->
             <p>".$hora."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u367180'><!-- column -->
            <div class='clearfix colelem' id='u367183'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367182-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367182-4' data-muse-uid='U367182' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U367173-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367173-4' data-muse-uid='U367173' data-muse-type='txt_frame'><!-- content -->
             <p>NOME: xxxxxxxx xxxxxxx xxxxxx</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367178-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367178-5' data-muse-uid='U367178' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367178'>TELEFONE:</span> (xx)xxxxxx-xxxxx </p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367176-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367176-5' data-muse-uid='U367176' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367176'>CELULAR:</span> (xx)xxxxxx-xxxxx</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367165-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367165-5' data-muse-uid='U367165' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367165'>EMAIL:</span> xxxxxxxxxxx@xxxxx.xxx</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u367166'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367160-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367160-4' data-muse-uid='U367160' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÃO DO EVENTO</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U367161-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367161-4' data-muse-uid='U367161' data-muse-type='txt_frame'><!-- content -->
             <p> ".$complementar." </p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U367187-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u367187-5' data-muse-uid='U367187' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u367187'>ENDEREÇO:</span> xxxxxxxxxxxxx  NUMERO: xxxxxxx</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu367163-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367163-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367163-5' data-muse-uid='U367163' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u367163'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367159-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367159-5' data-muse-uid='U367159' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u367159'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u367179'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U367184-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u367184-4' data-muse-uid='U367184' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u367167'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U367168-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367168-4' data-muse-uid='U367168' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367171-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367171-4' data-muse-uid='U367171' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367169-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";

             if($vagas > 0){
                echo "<div class='rounded-corners clearfix colelem' id='u367169-4' style='cursor: pointer;' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' data-muse-uid='U367169' data-muse-type='txt_frame'><!-- content -->
                      <p>COMPRAR CONTATO</p>
                     </div>";
             }else{
                echo "<div class='rounded-corners clearfix colelem' id='u367169-4' data-muse-uid='U367169' data-muse-type='txt_frame'><!-- content -->
                    <p>VAGAS ESGOTADAS!</p>
                   </div>";
             }
             

             echo "
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U367170-BP_480' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u367170-5' data-muse-uid='U367170' data-muse-type='txt_frame'><!-- content -->
              <p id='u367170-3'><span id='u367170'>VALOR DO CONTATO:</span><span id='u367170-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div> ";

		

	}