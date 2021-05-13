@extends('layouts.main')

@section('main')
  <main id="mainproduct">

    <h2><a href="{{route('homepage')}}" alt="">TUTTI I PRODOTTI ></a> {{ $pasta['titolo'] }}</h2>
    <hr>
    
    <div>

      <img class="srch" src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
      <img class="srcp" src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">

      <table>

        <tr>
          <td><img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana"></td>
          <td><span>grano decorticato a pietra <br> trafilatatura al bronzo</span></td>
          <td><img src="{{ asset('images/marchio-matese-tab.png') }}" alt="Logo Acqua del Molise"></td>
        </tr>

        <tr>
          <td><span>{{ $pasta['titolo'] }}</span></td>
          <td><span>tempi di cottura:</span> {{ $pasta['cottura'] }}</td>
          <td>{{ $pasta['peso'] }}</td>
        </tr>

      </table>

      <p>{{ $pasta['descrizione'] }}</p>

    </div>

    @if ($idProdotto > 0)
      <a href="{{route('product', ['id' => $idProdotto - 1])}}"><i class="fas fa-chevron-left"></i></a>
    @endif
  
    @if ($idProdotto < $maxIndex)
      <a href="{{route('product', ['id' => $idProdotto + 1])}}"><i class="fas fa-chevron-right"></i></a>
    @endif
    
    

  </main>
@endsection