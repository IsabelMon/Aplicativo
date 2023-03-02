<link rel="stylesheet" href="css/registro.css">

<div class="container bg-light" id="con-form">
          <h2 class="text-center"><strong>Iniciar sesión</strong></h2>
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1"><i class="fa-solid fa-envelope-circle-check"></i> Email address</label>
            <input type="email" id="form2Example1" class="form-control" />
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2"><i class="fa-solid fa-key"></i> Password</label>
            <input type="password" id="form2Example2" class="form-control" />
          </div>
        
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Recordar contraseña</label>
            </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <br>
  
          <!-- Submit button -->
          <div>
            <button type="submit" style="margin: 20px" class="btn btn-outline-primary">Registrar</button>  
        </div>
        
        <div>
          <button type="delete" id="cancelar" style="margin: 20px" class="btn btn-outline-danger">Cancelar</button>
        </div>
          
        
        </form>
        
      </div>
      <div>
        <h4>¿No tienes una cuenta?</h4>
        <a href="index.php?pagina=registro" class="text-decoration-none text-center active">Crea una</a>
      </div>
</div >