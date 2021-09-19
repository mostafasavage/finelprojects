@include('admin.includes.header')
  @include('admin.includes.sidebar')
    <div class="main-panel">
      <!-- Navbar -->
     @include('admin.includes.navbar')
      <!-- End Navbar -->

    <div class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  @include('admin.includes.footer')
</body>

</html>