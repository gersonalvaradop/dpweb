
<?php include 'cabeza.php'; ?>


<style>
  * {box-sizing: border-box}

  /* Add padding to containers */
  .container {
    padding: 16px;
  }

  /* Full-width input fields */
  input[type=text], input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for the submit/register button */
  .registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .registerbtn:hover {
    opacity:1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
</style>

<div class="container">

  <form action="registro.html">
    <div class="container">
      <h1>Registro</h1>
      <p>Llene el siguiente formulario.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Ingrese Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Ingrese Password" name="psw" required>

      <label for="psw-repeat"><b>Repita Password</b></label>
      <input type="password" placeholder="Repita Password" name="psw-repeat" required>
      <hr>

      <p>Esta de acuerdo con nuestras <a href="#">Politicas de privacidad</a>.</p>
      <button type="submit" class="registerbtn">Registrarme</button>
    </div>

    <div class="container signin">
      <p>Ya tengo cuenta <a href="login.php">Login</a>.</p>
    </div>
  </form>



</div>
<?php include 'pie.php' ?>