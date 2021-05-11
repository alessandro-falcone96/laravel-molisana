@extends('layouts.main')

@section('main')
  <main id="mainproduct">
    
    <div>

      <h2>{{ $pasta['titolo'] }}</h2>
      <img class="srch" src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
      <img class="srcp" src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
      <p>{{ $pasta['descrizione'] }}</p>

    </div>

    <a href=""><i class="fas fa-chevron-left"></i></a>
    <a href=""><i class="fas fa-chevron-right"></i></a>

  </main>
@endsection