<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="#">TRAINS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::route()->getName() == 'welcome' ? 'text-primary fw-bold' : '' }}" aria-current="page" href="{{ route('welcome') }}">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>