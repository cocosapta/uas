<!doctype html>
<html lang="en">
  <head>
    @include('parts.head')
  </head>
  <body>
        <!-- Navigation-->
       @include('parts.nav')
      @yield('login')
      @yield('daftar')
       @yield('home')
       @yield('belanja')
       @yield('transaksi')
       @yield('keranjang')
       @yield('detailbarang')
       @yield('bayar')
       @yield('profile')
       @yield('setting')
       @yield('kontak')
       @yield('tentangkami')


        <!-- Footer-->
       @include('parts.footer')
        <!-- Bootstrap core JS-->
       @include('parts.script')

  </body>
</html>
    
    
        
