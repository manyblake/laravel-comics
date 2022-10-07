  <header>
    <div class="container">
      <div class="icon">
        <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" />
      </div>

      @php
          $navbarLinks = [
            ['text' => "Characters",],
            ['text' => "Comics",],
            ['text' => "Movies",],
            ['text' => "TV",],
            ['text' => "Games",],
            ['text' => "Collectibles",],
            ['text' => "Videos",],
            ['text' => "Fans",],
            ['text' => "News",],
            ['text' => "Shop",],
          ];
      @endphp

      <nav class="main-nav">
        <ul class="main-nav__list">
          @foreach ($navbarLinks as $link)
            <li>
              <a class="{{ $loop->first ? 'active' : '' }}">
                {{ $link['text'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </nav>
    </div>
  </header>