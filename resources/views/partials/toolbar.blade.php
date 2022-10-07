<div class="main-toolbar">
    <div class="container">
      <ul class="main-toolbar__list">
        @foreach ($widgets as $widget)
          <li class="main-toolbar__item">
              <a href="#">
                <picture>
                  <img src={{ asset($widget['img']) }}>
                </picture>
                <span>{{ $widget['text'] }}</span>
              </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>