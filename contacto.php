
<?php include 'header.php'; ?>



<div class="page-title-area ptb-100">
<div class="container">
<div class="page-title-content">
<h1>Contactanos</h1>
<ul>
<li class="item"><a href="inicio.php">Inicio</a></li>
<li class="item"><a href="login.html"><i class='bx bx-chevrons-right'></i>Contacto</a></li>
</ul>
</div>
</div>
<div class="bg-image">
<img src="assets/img/Turismo/turismo.jpg" alt="Demo Image">
</div>
</div>


<div class="contact-section">
<div class="container">
<div class="main-form ptb-100">
<form id="contactForm">
<h3 class="sub-title">Contacto</h3>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<div class="input-icon"><i class='bx bx-user'></i></div>
<input type="text" name="name" class="form-control" id="name" required="" data-error="Digite Nombre" placeholder="Nombre" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-icon"><i class='bx bx-at'></i></div>
<input type="email" name="email" class="form-control" id="email" required="" data-error="Digite Correo" placeholder="Email" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<div class="input-icon"><i class='bx bx-comment-detail'></i></div>
<input type="text" name="subject" class="form-control" id="subject" required="" data-error="Digite Asunto" placeholder="Asunto" />
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<div class="input-icon textarea"><i class='bx bx-envelope'></i></div>
<textarea name="message" id="message" class="form-control" cols="100" rows="6" required="" data-error="Digite mensaje" placeholder="Mensaje..."></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn-primary">Enviar</button>
<div id="msgSubmit" class="h5 text-center hidden"></div>
</div>
</div>
</form>
</div>
</div>
<div class="contact-footer bg-light">
<div class="container-fluid p-0">
<div class="row">
<div class="col-lg-5">
<div class="content pt-100 pb-70 ">
<div class="info-content">
<h3 class="sub-title">Ubicación</h3>
<div class="content-list">
<i class='bx bx-map'></i>
<h6>Universidad de la Costa - Cl. 58 ##55 - 66, Barranquilla, Atlántico</h6>
</div>
<div class="content-list">
<i class='bx bx-receipt'></i>
<h6>Ingenieria de Software 2 - Proyecto Turismo</h6>
</div>
</div>
</div>
</div>
<div class="col-lg-7">
<div class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.582631707773!2d-74.79257428473879!3d10.994842558129465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d7974b945fd%3A0x58d2cc28a018ba1!2sCorporaci%C3%B3n%20Universidad%20De%20La%20Costa%2C%20CUC!5e0!3m2!1sen!2sco!4v1636318908621!5m2!1sen!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'footer.php'; ?>
