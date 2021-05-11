@extends('layouts.main')

@section('main')
<main id="mainhome">      
  <div class="containerMain">
    <h2>Le Lunghe</h2>

    <div class="containerPasta">
      
        @foreach ($lunghe as $pasta)
          <div class="card">
            <a href=""><img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}"></a>

            <div class="overlay">
              <a href="{{route('product', ['id' => $pasta['id']])}}"><h3>{{ $pasta['titolo'] }}</h3></a>
              <hr>
            </div>
          </div>
          
        @endforeach
      
    </div>
  
    <h2>Le Corte</h2>

    <div class="containerPasta">
      
        @foreach ($corte as $pasta)
          <div class="card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">

            <div class="overlay">
              <a href="{{route('product', ['id' => $pasta['id']])}}"><h3>{{ $pasta['titolo'] }}</h3></a>
              <hr>
            </div>
          </div>
        @endforeach
      
    </div>
  
    <h2>Le Cortissime</h2>

    <div class="containerPasta">
      
        @foreach ($cortissime as $pasta)
          <div class="card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">

            <div class="overlay">
              <a href="{{route('product', ['id' => $pasta['id']])}}"><h3>{{ $pasta['titolo'] }}</h3></a>
              <hr>
            </div>
          </div>
        @endforeach
      
    </div>
  </div>
</main>
@endsection 