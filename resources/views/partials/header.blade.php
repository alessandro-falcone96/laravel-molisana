<header>
  <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
  <ul>
    <a class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}" href="{{route('homepage')}}" alt=""><li>Home</li></a>
    <a class="{{Route::getCurrentRoute()->getName() == 'product' ? 'active' : ''}}" href="{{route('product', ['id' => 0])}}" alt=""><li>Prodotti</li></a>
    <a class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}" href="{{route('news')}}" alt=""><li>News</li></a>
  </ul>
</header>