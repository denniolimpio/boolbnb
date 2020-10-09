@extends('layouts.app')

@section('content')

  <div class="container py-5">
    <h1><span style="color: #333;">Appartamento</span>{{$apartment->title}}</h1>
    <div class="chart-container">
      <div class="statistics">
        <div style="display: none;">

          {{-- Visite totali --}}
          <div id="total-visits"> <?php echo views($apartment)->count(); ?> </div>

          {{-- Visite ultimo trimestre --}}
          <div id="trimester-visits">{{$pastTrimester}}</div>

          {{-- Visite ultimo semestre --}}
          <div id="semester-visits">{{$pastSemester}}</div>

          {{-- Visite mensili --}}
          <span id="january">{{$january}}</span>
          <span id="february">{{$february}}</span>
          <span id="march">{{$march}}</span>
          <span id="april">{{$april}}</span>
          <span id="may">{{$may}}</span>
          <span id="june">{{$june}}</span>
          <span id="july">{{$july}}</span>
          <span id="august">{{$august}}</span>
          <span id="september">{{$september}}</span>
          <span id="october">{{$october}}</span>
          <span id="november">{{$november}}</span>
          <span id="december">{{$december}}</span>

          {{-- Visite giornaliere --}}
          <div id="daily-visits">{{$thisDay}}</div>

          {{-- Visite settimanali --}}
          {{-- <div id="weekly-visits">{{$thisWeek}}</div> --}


          {{-- TEST!!! - Visite settimanali --}}
          <div id="this-day">{{$thisDay}}</div>
          <div id="yesterday">{{$yesterday}}</div>
          <div id="two-days-ago">{{$twoDaysAgo}}</div>
          <div id="three-days-ago">{{$threeDaysAgo}}</div>
          <div id="four-days-ago">{{$fourDaysAgo}}</div>
          <div id="five-days-ago">{{$fiveDaysAgo}}</div>
          <div id="six-days-ago">{{$sixDaysAgo}}</div>


        </div>
      </div>



      {{-- Grafici Charts.js --}}
      <h2><i class="fas fa-chart-line"></i>Statistiche</h2>


      {{-- Visite Giornaliere --}}
      <div class="stats">
        <h3>Visite di oggi: {{$thisDay}}</h3>
        {{-- <canvas id="myChartDaily" width="500" height="100"></canvas>   --}}
      </div>

      {{-- Visite Totali --}}
      <div class="stats" >
        <h3>Visite Totali: <?php echo views($apartment)->count(); ?> </h3>
        {{-- <canvas id="myChartTotal" width="500" height="100"></canvas> --}}
      </div>

      {{-- Visite Settimanali --}}
      <div class="stats">
        <h3 id="margin-title-chart">Visite negli ultimi sette giorni: {{$thisWeek}}</h3>
        <canvas id="myChartWeekly" width="500" height="100"></canvas>
      </div>

      {{-- Visite Mensili --}}
      <div class="stats">
        <h3>Visite Mensili</h3>
        <canvas id="myChartMonths" width="500" height="100"></canvas>
      </div>

      {{-- Visite Utlimi 3 Mesi --}}
      {{-- <div class="stats">
        <h3>Visite negli ultimi 3 mesi: {{$pastTrimester}}</h3>
        <canvas id="myChartTrimester" width="500" height="100"></canvas>
      </div> --}}

      {{-- Visite Utlimi 6 Mesi --}}
      {{-- <div class="stats" >
        <h3>Visite negli ultimi 6 mesi: {{$pastSemester}}</h3>
        <canvas id="myChartSemester" width="500" height="100"></canvas>
      </div> --}}

  </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="{{asset('js/boolbnb/admin/visits/show.js')}}"></script>
@endsection
