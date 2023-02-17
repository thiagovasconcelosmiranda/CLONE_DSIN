<?php
if(!isset($_POST['curriculo'])){
  $nameupload = ' Anexar Currículo';
}else{
  $nameupload = $_POST['curriculo'];
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" media="screen"/><link>
    <link rel="stylesheet" type="text/css" href="assets/css/alert.css"/><link>

    <!--js-->
    <script type="text/javascript" src="jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="/scripts.js"></script>
    
    <title>DSIN - Carreira</title>
</head>
<body>
    <header class="cabecalho  fundocinzaescuro">
        <div class="alignHeader">
          <a href="#">
           <img class="imglogo" src="./images/logo-tipoDSIN.png" alt="logo"/>
          </a>
           <input type='button' value="Trabalhe conosco" class="btn "/>
        </div>
    </header>
    <div class="slide">
        <img id="slide"/>
    </div>
    <div class="conteudo">
      <div class="textoCentro text150 textoNegrito colorTexto paddingTexto">
        Cadastre-se e fique sabendo das vagas!
      </div>
      <form method="POST" action="./Dados.php" class="wrapper conteudo"
         style="max-width: 1200px; margin: auto;" enctype="multipart/form-data">
         <fieldset>
            <legend>Dados</legend>
            <div class="vbox space20">
                <div class="vbox">
                   <label class="fontSmall fontBold">Nome completo*</label>
                   <input type="text" inputmode="latin-name"
                   maxlength="60" tabindex="0" name="nome" id="nome"/>
                </div>
                <div class="vbox " style="margin-top: 20px;">
                    <label class="fontSmall fontBold">CPF*</label>
                    <input type="text" inputmode="latin-name"
                    maxlength="60" tabindex="0" name="cpf" id="cpf" />
                 </div>
                 <div class="vbox " style="margin-top: 20px;">
                    <label class="fontSmall fontBold">Email*</label>
                    <input type="email" inputmode="latin-name"
                    maxlength="60" tabindex="0" name="email" id="email" />
                 </div>
                 <div class="vbox " style="margin-top: 20px;">
                    <label class="fontSmall fontBold">Celular*</label>
                    <input type="text" inputmode="latin-name"
                    maxlength="60" tabindex="0" name="celular" id="celular"/>
                 </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Áreas de interesse</legend>
            <div class="vbox space20">
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" name="area" id="areateste" value="Desenvolvimento de Sistemas"/>
                    " Desenvolvimento de Sistemas - "
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" class="analista" name="area" value=" Designer/Marketing"/>
                     Designer/Marketing - 
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" name="area"  value="Qualidade/Teste"/>
                     Qualidade/Teste - 
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" name="area" value="Atendimento ao cliente /Suporte Tenico"/>
                     Atendimento ao cliente/Suporte Tenico - 
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" name="area" id="area"  value=" Analista de implantação"/>
                    Analista de implantação - 
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
                <label class="hbox fontSmall chkInput">
                    <input type="checkbox" name="area"  value=" Administrativo/Processamento de dados"/>
                    Administrativo/Processamento de dados - 
                    <a class="areaLink" href="#">Saiba mais</a>
                </label>
            </div>
        </fieldset>
        <div class="vbox space20 vBoxMax">
          <fieldset>
            <legend>Tipos</legend>
            <div class="vbox space20 bPadding20 vBoxMax">
              <label class="hbox space5 hbox space5 chkInput">
                <input type="checkbox" name="tipotrabalho" value="Estágio"/>
                Estágio  
              </label>
            <label class="hbox space5 fontSmall chkInput">
                <input type="checkbox" name="tipotrabalho" value="Efetivo"/>
                Efetivo
            </label>
            </div>
          </fieldset>
          <fieldset class="vBoxMax">
            <legend>Processo Anterior</legend>
             <div class="vbox space20 vBoxMax bPadding20">
                <span class="hbox space5">
                  <label class="fontSmall fontBold chkInput ">
                    Você já participou de algum processo
                     seletivo <br> anteriormente na DSIN
                 </label>
              </span>
                <label class="hbox space5 chkInput ">
                   <input type="radio" name="opcao" value="Não"/>
                   Não
                </label>
                <label class="hbox space5 chkInput">
                   <input type="radio" name="opcao" value="Sim"/>
                   Sim
                </label>
            </div>
           </fieldset>
          </div>
        </div>
        <div class="alinhaFildset">
            <fieldset class="padding20 flex">
            <legend>Observações</legend>
            <textarea type="text" class="vbox space20" maxlength="500" name="descricao" tabindex="10"></textarea>
           </fieldset>
           </div>
           <div class="background">
             <div class="vbox space20 bPadding25 vBoxMax" style="max-width: 1200px; margin: auto; padding: 20px;">  
               <label for="uploadImage" class="btnclaro" id="upload">Anexar Currículo*</label>
               <input   id="uploadImage" type="file" name="curriculo" style="display: none;" />
               <label class="btnclaro">
                 <input type="submit" value="Enviar" id="enviar"/>
               </label>
              </div>   
            </div>
      </form>
    </div>
    <footer class=" rodape hbox  fundoCinzaEscuro"> 
      <div class="vbox space10 textobranco" style="display: block;">
         <div class=" textobranco space10  texto150 textoNegrito">
            DSIN Tecnologia da Informação
         </div>
         <div class=" textobranco  space10 texto100" >
            Rua Eugênio Pessine, 73 - jardim Itaipu - Marília - SP -  17519-610
         </div>
         <div class=" textobranco space10 texto100" >
          (14) 3451-4098 /carreira@dsin.com.br
         </div>
       </div>
       <div class="expand"></div>
       <div class="vbox space10 textobranco">
         <div class="textobranco textoNegrito texto110" >Siga nossas mídias:</div>
         <div class="vbox space10 textobranco flex">
           <div class="fundoborda">
               <img class="corbranco cursor" src="./images//facebook.svg" height="40"/>
           </div>
          <a href="#">
            <img class="imglogo" src="./images/logo.png"/>
          </a>
         </div>
       </div>
       <script src="./script.js" text="javascript" ></script>

       <div class="container" id="active">
         <div class="modal">
            <div class="title">
             <bold><h4>Atenção</h4></bold>
            </div>
            <div class="message">
               <p id="msg"><p>
            </div>
            <div class="align-button">
               <button type="button" class="style-button"   onclick="fechar()">Ok</button>
            </div>
         </div> 
       </div>
       <script type="text/javascript" src="assets/js/scriptalert.js"></script>
</body>
</html>