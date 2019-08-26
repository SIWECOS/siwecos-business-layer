<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ public_path('css/app.css') }}">

  <style>
    .col-print-1 {
      width: 8%;
      float: left;
    }

    .col-print-2 {
      width: 16%;

      float: left;
    }

    .col-print-3 {
      width: 25%;
      float: left;
    }

    .col-print-4 {
      width: 33%;
      float: left;
    }

    .col-print-5 {
      width: 42%;
      float: left;
    }

    .col-print-6 {
      width: 50%;
      float: left;
    }

    .col-print-7 {
      width: 58%;
      float: left;
    }

    .col-print-8 {
      width: 66%;
      float: left;
    }

    .col-print-9 {
      width: 75%;
      float: left;
    }

    .col-print-10 {
      width: 83%;
      float: left;
    }

    .col-print-11 {
      width: 92%;
      float: left;
    }

    .col-print-12 {
      width: 100%;
      float: left;
    }

    div.fullscore,
    div.score {
      float: right;
    }

    div.fullscore div.percent {
      width: 25mm;
      height: 25mm;
      padding-left: 10mm;
      padding-top: 10mm;
      font-weight: bold;
    }

    div.percent {
      background-size: cover;
      background-repeat: no-repeat;
      width: 16mm;
      height: 16mm;
      float: right;
      padding-left: 4.5mm;
      padding-top: 5.5mm;
    }

    .siwecos-logo {
      height: 25mm;
    }

    @foreach($gaugeData as $scannerCode => $gauge)
      div.{{ $scannerCode }} {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" version="1.1"><g transform="translate(63,63)"><text x="0" y="0mm" dominant-baseline="central" text-anchor="middle" font-size="25em">{{ $gauge['score'] }}</text> <path d="M-35.35,35.36 A50,50 0 1 1 35.35,35.36" stroke="lightgrey" stroke-width="25" stroke-linecap="round" fill="none"/><path d="M-35.35,35.36 A50,50 0 {{ $gauge['big_arc'] }} 1 {{ $gauge['score_x'] }},{{ $gauge['score_y'] }}" stroke="{{ $gauge['score_col'] }}" stroke-width="25" stroke-linecap="round" fill="none"/></g></svg>');
      }
    @endforeach

    li {
      list-style: none ;
      margin-left: 2em;
    }
  </style>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-print-10">
        <img src="{{ public_path('img/siwecos-logo-big.png') }}" class="siwecos-logo" />
      </div>
      <div class="col-print-2 fullscore">
        <div class="percent total"> </div>
      </div>
    </div>
    <div class="row">
      <h1>{{ __('SIWECOS.REPORT_FOR', ['domain' => $scan->domain->domain]) }}</h1>
      <p>{{ $scan->finished_at->toDateTimeString() }}</p>
    </div>
    @foreach ($report->report as $scanReport)
    <div class="row">
      <div class="col-print-10">
        <h3>{{ $scanReport['scanner_name'] }}</h3>
      </div>
      <div class="col-print-2 score">
        <div class="percent {{ $scanReport['scanner_code'] }}"></div>
      </div>
    </div>
    <ul>
      @foreach ($scanReport['tests'] as $test)
      <li>
        <div class="row">
          <div class="col-print-10">
            {!! $test['headline'] !!}
            @if ($test['has_error'])
            <p style="font-size: smaller; color: red">{!! $test['result'] !!}</p>
            @else
            <p style="font-size: smaller;">{!! $test['result'] !!}</p>
            @endif

            @if ($test['result_details'])
              @foreach ($test['result_details'] as $resultDetail)
              <p style="font-style: italic !important; font-size: smaller">{!! $resultDetail !!}</p>
              @endforeach
            @endif
          </div>
          <div class="col-print-2" style="text-align: right;">
            {{ $test['score'] }} / 100
          </div>
        </div>
      </li>
      @endforeach
    </ul>
    @endforeach
  </div>
</body>
</html>
