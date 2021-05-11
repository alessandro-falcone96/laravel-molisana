@extends('layouts.main')

@section('main')
  <main id="mainproduct">
    
    <div>

      <h2>{{ $pasta['titolo'] }}</h2>
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

    <a href=""><i class="fas fa-chevron-left"></i></a>
    <a href=""><i class="fas fa-chevron-right"></i></a>

  </main>
@endsection