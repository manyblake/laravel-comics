  @php
    $links1 = [
  ['text' => "Characters",],
  ['text' => "Comics",],
  ['text' => "Movies",],
  ['text' => "TV",],
  ['text' => "Games",],
  ['text' => "Videos",],
  ['text' => "News",],
];

$links2 = [
  ['text' => "Shop DC",],
  ['text' => "Shop DC Collectibles",],
];

$links3 = [
  ['text' => "Terms Of Use",],
  ['text' => "Privacy Policy (New)",],
  ['text' => "Ad Choice",],
  ['text' => "Advertising",],
  ['text' => "Jobs",],
  ['text' => "Subscriptions",],
  ['text' => "Talent Workshops",],
  ['text' => "CPSC Certificates",],
  ['text' => "Ratings",],
  ['text' => "Shop Help",],
  ['text' => "Contact Us",],
];

$links4 = [
  ['text' => "DC", ],
  ['text' => "MAD Magazines",],
  ['text' => "DC Kids",],
  ['text' => "DC Universe",],
  ['text' => "DC Power Visa",],
];

$socials = [
  ['src' => "../img/footer-facebook.png",],
  ['src' => "../img/footer-twitter.png",],
  ['src' => "../img/footer-youtube.png",],
  ['src' => "../img/footer-pinterest.png",],
  ['src' => "../img/footer-periscope.png",],
];
  @endphp

  <footer>
    <div class="footer__bg">
      <div class="container">
        <ul class="footer__list">
          <div>
            <li class="footer__links">
              <h3>Dc Comics</h3>
              @foreach ($links1 as $link)
                <a href="#"> {{ $link['text'] }} </a>
              @endforeach
            </li>

            <li class="footer__links">
              <h3>Shop</h3>
              @foreach ($links2 as $link)
                <a href="#"> {{ $link['text'] }} </a>
              @endforeach
            </li>
          </div>

          <li class="footer__links">
            <h3>DC</h3>
            @foreach ($links3 as $link)
              <a href="#"> {{ $link['text'] }} </a>
            @endforeach
          </li>

          <div>
            <li class="footer__links">
              <h3>Sites</h3>
              @foreach ($links4 as $link)
                <a href="#"> {{ $link['text'] }} </a>
              @endforeach
            </li>
          </div>
        </ul>

        <picture>
          <img src={{asset('../img/dc-logo-bg.png')}} alt="DC Logo BG" />
        </picture>
      </div>
    </div>

    <div class="footer__socials">
      <div class="container">
        <button>Sign-Up Now!</button>

        <div class="footer__links">
          <div class="footer__follow-us">
            <p>Follow Us</p>
              @foreach ($socials as $social)
                <a href="#">
                  <img src={{ asset($social['src']) }}>
                </a>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </footer>