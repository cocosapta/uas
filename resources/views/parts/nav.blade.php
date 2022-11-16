<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand fw-bolder" href="/home">SHOESHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/home">Beranda</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/belanja" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Belanja
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/belanja/populer">Populer</a></li>
            <li><a class="dropdown-item" href="/belanja/terbaru">Terbaru</a></li>
             <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/belanja">Semua Item</a></li>
          </ul>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="/transaksi">Transaksi</a>
      </li>
       <li class="nav-item ms-3">
        <a class="btn btn-outline-secondary position-relative" href="/keranjang" ><img src="/user_icon/keranjang.png" height="20px"></a>
      </li>
       
      </ul>
    </div>
      <div>
         <a class="btn btn-outline-success ms-1 shadow-lg" type="button" aria-expanded="false" href="/">
          Login
         </a>
      </div>
      <div>
         <a class="btn btn-outline-success ms-1 shadow-lg" type="button" aria-expanded="false" href="/daftar">
          Daftar
         </a>
      </div>
      @if ( $name = 1)
          <div class="dropdown ">
          <a class="nav-link dropdown-toggle ms-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="text-dark ms-1"><img  class="" src="/user_icon/loginuser/us.png" class="ms-2" width="25px"> Username </span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/setting">Setting</a></li>
             <li><a class="dropdown-item" href="/logout">Logout</a></li>
            
          </ul>
      </div>
      @endif
      
  </div>
</nav>