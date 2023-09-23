<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container h5">
      <a class="navbar-brand" href="/"><h1>Ridho Site</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse px-3" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($title === "Member") ? 'active' : '' }}" href="/member">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 {{ ($title === "Manager") ? 'active' : '' }}" href="/member/manager">Manager</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
              Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>