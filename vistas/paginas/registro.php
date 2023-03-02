<link rel="stylesheet" href="css/registro.css">

<div class="container bg-light" id="con-form">
          <h2 class="text-center"><strong> Registro</strong></h2>
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example1"><i class="fa-solid fa-envelope-circle-check"></i> Email address</label>
            <input type="email" id="form2Example1" class="form-control" />
          </div>
        
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2"><i class="fa-solid fa-user"></i> Nombre</label>
            <input type="text" id="form2Example2" class="form-control" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2"><i class="fa-solid fa-key"></i> Password</label>
            <input type="password" id="form2Example2" class="form-control" />
          </div>
        
          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <br>
              <br>
          <!-- Submit button -->
          <div>
            <button type="submit" style="margin: 10px" class="btn btn-outline-primary">Registrar</button>  
        </div>
        
        <div>
          <button type="delete" id="cancelar" style="margin: 10px" class="btn btn-outline-danger">Cancelar</button>
        </div>
          
          
        </form>
        
      </div>
      <div>
        <a href="index.php?pagina=ingreso" class="text-decoration-none text-center active">Ya tengo cuenta</a>
      </div>
</div >