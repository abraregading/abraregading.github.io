<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="{{asset ('site') }}/images/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @@about">
                <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item @@about">
                <a class="nav-link" href="{{url('/artikel_v')}}">Artikel</a>
        </li>
        
        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Kategori
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <?php
              $kategori = App\Models\Kategori::all();
          ?>
          <ul class="dropdown-menu">
            @foreach($kategori as $data)
            <li><a class="dropdown-item @@team" href="{{ url ('/artikel_v/menu/'.$data->id) }}">{{ $data->kt }}</a></li>
            @endforeach           
          </ul>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="{{url('/porfolio_v')}}">Porfolio</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="{{url('/kontak_v')}}">Kontak</a>
        </li>
       
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>  
       
      </ul>
    </div>
  </div>
</nav>