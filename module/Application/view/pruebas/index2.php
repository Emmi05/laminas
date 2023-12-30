<!DOCTYPE html>
<html lang="es">
<head>
  <title>Inicio de sesión | Coordinador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<style>
    
    body{
    height: 100vh;
    background: #1f2029 !important;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  
  .card{
    overflow: hidden;
    border: 0 !important;
    border-radius: 20px !important;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  }
  
  .img-left{
    width: %;
    background: url('https://bemira.com/wp-content/uploads/2023/08/logo_bemira_2019.jpg') center;
    background-size: cover;
  }
  
  .card-body{
    padding: 2rem;
   
  }
  
  .title{
    margin-bottom: 2rem;
  }
  
  
  
  .form-input span{
    position: absolute;
    top: 10px;
    padding-left: 15px;
    color: #00A5CD;
  }
  
  

 
  
 
  
</style>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Inicio de sesion
          </h4>
          <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="inputEmail" placeholder="exameple@gmail.com" require>
      <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com"> -->
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="pasword" requiere minlength="4">
    </div>
  </div>
  <div class="col-12">
  <!-- <a href="">Laminas Project</a> -->
 
  <a href="form.phtml" class="btn btn-primary">Iniciar sesión</a>

    
  </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>