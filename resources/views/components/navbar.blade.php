<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand text-warning" href="{{route('homePage')}}">ScuolaTennis</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link {{(Route::currentRouteName() == 'contact') ? 'active' : ''}}" aria-current="page" href="{{route('contact')}}">Scrivici</a>
          </li>
          <li>
              <a class="nav-link {{(Route::currentRouteName() == 'aboutUs') ? 'active' : ''}}" aria-current="page" href="{{route('aboutUs')}}">Chi siamo</a>
          </li>
          <li>
            <a class="nav-link {{(Route::currentRouteName() == 'newArticle') ? 'active' : ''}}" aria-current="page" href="{{route('newArticle')}}">Inserisci un articolo</a>
          </li>
        </ul>
      </div>
    </div>
</nav>