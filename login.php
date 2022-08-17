<?php include 'header.php'; ?>


<div class="page-title-area ptb-100">
<div class="container">
<div class="page-title-content">
<h1>Inicia sesión</h1>
<ul>
<li class="item"><a href="index.html">Inicio</a></li>
<li class="item"><a href="login.html"><i class='bx bx-chevrons-right'></i>Inciar Sesión</a></li>
</ul>
</div>
</div>
<div class="bg-image">
<img src="assets/img/turismo/turismo.jpg" alt="Demo Image">
</div>
</div>


<div class="authentication-section">
<div class="container">
<div class="main-form ptb-100">
<form id="#authForm">
<div class="content">
<h3>Bienvenido</h3>
<p>Ingrese sus datos</p>
</div>
<div class="form-group">
<div class="input-icon"><i class='bx bx-user'></i></div>
<input type="text" class="form-control" placeholder="Usuario" required>
</div>
<div class="form-group">
<div class="input-icon"><i class="bx bx-lock"></i></div>
<input type="password" class="form-control" placeholder="Contraseña" required>
</div>
<div class="row align-items-center mb-30">
<div class="col-lg-6 col-sm-6 col-6">
<div class="checkbox">
<input type="checkbox" id="remember">
<label for="remember">Recordar</label>
</div>
</div>
<div class="col-lg-6 col-sm-6 col-6">
<div class="link">
<a href="forget-password.html">¿Olvidaste tu contraseña?</a>
</div>
</div>
</div>
<button type="submit" class="btn-primary">
Login
</button>
</form>
</div>
</div>
</div>

<?php include 'footer.php'; ?>
