<style>
  .menu-active{
    color:#000000 !important;
    font-weight: bold;
  }
  
</style>

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Company Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/') ? 'menu-active' : ''); ?>" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('about') ? 'menu-active' : ''); ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('services') ? 'menu-active' : ''); ?>" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('blog') ? 'menu-active' : ''); ?>" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('contact') ? 'menu-active' : ''); ?>" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="" class="btn btn-primary"<i class="fas fa-sign-in-alt" >Login</a>
        </form>
    </div>
  </div>
  </nav>
</header><?php /**PATH D:\00 Belajar LKS\companyprofile\resources\views/home/layouts/header.blade.php ENDPATH**/ ?>