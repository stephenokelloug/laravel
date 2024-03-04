<!--Website Navbar Component-->
<template>
 <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Navbar brand-->
          <a href="index.html" class="navbar-brand font-weight-bold"><img src="img/logo.png" alt="..." class="img-fluid"></a>
          <!-- Navbar toggler button-->
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="icon ion-md-list ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="schedule.html" class="nav-link">Home</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="text.html" class="nav-link">About</a></li>
                  <!-- Link-->
                  <li class="nav-item"> <a href="#" class="nav-link">Projects</a></li>
                  <li class="nav-item"> <a href="#" class="nav-link">Blog</a></li>
            </ul>
            <ul class="navbar-nav d-none">
              <li class="nav-item"><a href="#" data-toggle="modal" data-target="#login" class="nav-link font-weight-bold mr-3">Login</a></li>
              <li class="nav-item"><a href="#" class="navbar-btn btn btn-primary">Get Started</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
</template>

<script>

export default {
   name: 'Navbar',
}
</script>