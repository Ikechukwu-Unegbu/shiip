<style>
  #menu{
    display: flex;
    justify-content:space-between;
    align-items: center;
  }
  .navbar{
    display: none;
  }

  @media(max-width:800px){
    .navbar{
      display:inline-block;
      float:right;
    }
    .myName{
      display: none;
    }
  }
</style>
<nav  id="menu">
  <div><b class="myName">Vincent.exe</b></div>
  <!-- <div class="bread_crumb">
    <div></div>
    <div></div>
    <div></div>
  </div> -->
  <nav style="float:right" class="navbar navbar-light bg-light fixed-top ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Offcanvas navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <b>Holla Vincent.exe</b>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <!-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> -->
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a href="/portfolio" class="nav-link">Portfolio</a>
          </li>
          <li class="nav-item">
            <a href="https://api.whatsapp.com/send?phone=+2348064133376" class="nav-link">Contact Me</a>
          </li>
          <li class="nav-item">
            <a href="/blog" class="nav-link">My Blog</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
        </ul>
        <!-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </div>
</nav>
  <div class="" id="nav">

    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/contact"><i class="fab fa-whatsapp-square fa-2x"></i></a></li>
      <li><a href="/store">About</a></li>
    </ul>
  </div>
</nav>