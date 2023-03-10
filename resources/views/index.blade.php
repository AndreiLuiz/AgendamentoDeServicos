<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agendamento de Serviços</title>

       @vite([
       'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])

       <form>
<div class="container">
    

<h1> Agendamento de Serviços </h1><br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label><br>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Telefone:</label><br>
  <input type="text" class="form-control" placeHOLDER="(XX) XXXXX-XXXX" id="exampleInputPassword1">
  </div><br>
  
  <label for="exampleInputPassword1" class="form-label">Origem:</label><br>
  <select id="disabledSelect" class="form-select">
<option>Celular</option>
  </select><br>

  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Data do Contrato:</label><br>
  <input type="date" class="form-control" id="exampleInputPassword1">
  </div><br>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
  <br> <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>
    </head>
    </body>
</html>
