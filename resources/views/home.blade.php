<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Playfair+Display&family=Teko:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home La Molisana</title>
  </head>
  <body>
    
      @include('partials/header')

      <main>
        
        <div class="containerMain">
          <h2>Le Lunghe</h2>

          <div class="containerPasta">
            
              @foreach ($lunghe as $pasta)
                <div class="card">
                  <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">

                  <div class="overlay">
                    <h3>{{ $pasta['titolo'] }}</h3>
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
                    <h3>{{ $pasta['titolo'] }}</h3>
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
                    <h3>{{ $pasta['titolo'] }}</h3>
                    <hr>
                  </div>
                </div>
              @endforeach
            
          </div>
        </div>

        

      </main>

      @include('partials/footer')

  </body>
</html>