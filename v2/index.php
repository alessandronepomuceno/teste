
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
<BR><BR>


    <div class="container">

  <body class="text-center">
    <form class="form-signin" action="index.php">
      <img class="mb-4" src="img/confirma.png" alt="" width="300">
      <h1 class="h4 mb-3 font-weight-normal">Verifique seus dados e confirme sua consulta</h1>
      <BR><BR>

      <?php

class Paciente {
	public $nome;
	public $especialista;
	public $data;
	public $sus;	
	
	public function Confirmar() {
		echo "<b> Paciente: </b>" .$this->nome. " <br> <b>Especialidade: </b>" .$this->especialista. " <b><br> Data Agendamento:</b> " .$this->data. " <b><br> Horário:</b> " .$this->horario. " <b><br> Unidade:</b> " .$this->local.  
				" <!-- <br><br>Confirmou sua consulta com sucesso ! --> ";
	}
}


$consulta = new Paciente();
$consulta->nome = " João da Silva Nascimento ";
$consulta->especialista = " Clinico Geral ";
$consulta->data = " 18/12/1991 ";
$consulta->horario = " 16:00 ";
$consulta->local = " UBS JARDIM PEDROSO ";
$consulta->sus = " 1234567890 ";
$consulta->Confirmar ();

?>




      <div class="checkbox mb-3">
 
      </div>


      <!-- OS DADOS DESTA PAGINA DEVEM VIR PREENCHIDOS POIS JA FORAM ADICIONADOS MA PAGINA DE CADASTRO -->


      <BR><BR>
      <div id="liveAlertPlaceholder"></div>
      <button type="button" class="btn btn-primary" id="liveAlertBtn">Confirmar Agendamento</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

</div>





<script>

var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
var alertTrigger = document.getElementById('liveAlertBtn')

function alert(message, type) {
  var wrapper = document.createElement('div')
  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

  alertPlaceholder.append(wrapper)
}

if (alertTrigger) {
  alertTrigger.addEventListener('click', function () {
    alert('Sua consulta foi confirmada com sucesso !', 'success')
  })
}



</script>


  </body>
</html>



