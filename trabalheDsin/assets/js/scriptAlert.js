
var button = document.getElementById('enviar');
button.addEventListener('click',  valida_form );
var alertmodel = document.getElementById('active');


function fechar(){
    document.getElementById('active').style.display="none";
  }    

function valida_form (){
   if(document.getElementById("nome").value == ""){
       $('#enviar').prop('type', 'button');
       alertmodel.style.display="flex";
       document.getElementById('msg').innerHTML="Por favor! digite o nome.";
       document.getElementById("nome").focus();
       return false
   }else if(document.getElementById("cpf").value == ""){
       $('#enviar').prop('type', 'button');
       alertmodel .style.display="flex";
       document.getElementById('msg').innerHTML="Por favor! digite o cpf.";
       document.getElementById("nome").focus();
       return false
   }else if(document.getElementById("email").value == ""){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor! digite o email.";
      document.getElementById("nome").focus();
      return false
   }else if(document.getElementById("celular").value == ""){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor! digite o celular.";
      document.getElementById("nome").focus();
    } else if($("input[name='area']").is(':checked') == false){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor, escolha pelo menos uma área de interesse.";
    } else if($("input[name='tipotrabalho']").is(':checked') == false){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor, escolha o tipo de emprego que lhe interessa (estágio e/ou efetivo)";
      return false; 
    }else if($("input[name='opcao']").is(':checked') == false){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor! selecione já trabalhou.";
      return false
    }else if(!$('input[name="curriculo"]').val()){
      $('#enviar').prop('type', 'button');
      alertmodel.style.display="flex";
      document.getElementById('msg').innerHTML="Por favor! selecione um currículo.";
      return false
    }else{
      $('#enviar').prop('type', 'submit');
    }
}

function preview(){
  var text = document.getElementById('upload');
    var namearquivo = $('input[name="curriculo"]').val();
    text.innerHTML= namearquivo;
  }

