<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('frontend')}}/assets/img/logokemkes.png" alt="Kementerian Kesehatan" >
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNav">
        <ul class="navbar-nav ms-auto flex-nowrap">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ruang Publik
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach (\App\Category::all() as $category)
                <li>{{ link_to('category/'.$category->slug,$category->category,['class'=>'dropdown-item'])}}</li>
              @endforeach
            </ul>
          </li>
        </ul>
      </div><!-- /collapse navbar -->
    </div><!-- /container -->
  </nav><!-- /navbar -->