<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ public_path('css/app.css') }}">

  <style>
    @foreach($parts as $part)
      @foreach($part['gaugeData'] as $scannerCode => $gauge)
        div.percent.{{ 'md5_' . md5($part['scan']->url) }}.{{ $scannerCode }} {
          background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" version="1.1"><g transform="translate(63,63)"><text x="0" y="0mm" dominant-baseline="central" text-anchor="middle" font-size="25em">{{ $gauge['score'] }}</text> <path d="M-35.35,35.36 A50,50 0 1 1 35.35,35.36" stroke="lightgrey" stroke-width="25" stroke-linecap="round" fill="none"/><path d="M-35.35,35.36 A50,50 0 {{ $gauge['big_arc'] }} 1 {{ $gauge['score_x'] }},{{ $gauge['score_y'] }}" stroke="{{ $gauge['score_col'] }}" stroke-width="25" stroke-linecap="round" fill="none"/></g></svg>');
        }
      @endforeach
    @endforeach

    @foreach($globalScannerGauges as $scannerCode => $gauge)
        div.percent.global.{{ $scannerCode }} {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" version="1.1"><g transform="translate(63,63)"><text x="0" y="0mm" dominant-baseline="central" text-anchor="middle" font-size="25em">{{ $gauge['score'] }}</text> <path d="M-35.35,35.36 A50,50 0 1 1 35.35,35.36" stroke="lightgrey" stroke-width="25" stroke-linecap="round" fill="none"/><path d="M-35.35,35.36 A50,50 0 {{ $gauge['big_arc'] }} 1 {{ $gauge['score_x'] }},{{ $gauge['score_y'] }}" stroke="{{ $gauge['score_col'] }}" stroke-width="25" stroke-linecap="round" fill="none"/></g></svg>');
      }
    @endforeach

    div.percent.global.total {
      background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="126" height="126" version="1.1"><g transform="translate(63,63)"><text x="0" y="0mm" dominant-baseline="central" text-anchor="middle" font-size="25em">{{ $globalGauge['score'] }}</text> <path d="M-35.35,35.36 A50,50 0 1 1 35.35,35.36" stroke="lightgrey" stroke-width="25" stroke-linecap="round" fill="none"/><path d="M-35.35,35.36 A50,50 0 {{ $globalGauge['big_arc'] }} 1 {{ $globalGauge['score_x'] }},{{ $globalGauge['score_y'] }}" stroke="{{ $globalGauge['score_col'] }}" stroke-width="25" stroke-linecap="round" fill="none"/></g></svg>');
    }

    div.page
    {
      page-break-after: always;
      page-break-inside: avoid;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="page">
      <div class="row">
        <div class="col-print-10">
          <img src="{{ public_path('img/siwecos-logo-big.png') }}" class="siwecos-logo" />
          <h3>{{ __('SIWECOS.REPORT_FOR', ['domain' => $parts[0]['scan']->url]) }}</h3>
        </div>
        <div class="col-print-2 fullscore">
          <div class="percent global total"> </div>
        </div>
      </div>

      <div class="row">
        <div class="col-print-12">
          <h1>{{ __('SIWECOS.SCANNER_SCORES') }}</h1>
        </div>
      </div>

      @foreach ($globalScannerGauges as $scannerCode => $gauge)
        <div class="row">
          <div class="col-print-10">
            <h4>{{ __($scannerCode . '.SCANNER_NAME') }}</h4>
          </div>
          <div class="col-print-2 score">
            <div class="percent global {{ $scannerCode }}"></div>
          </div>
        </div>
      @endforeach
    </div>

    @foreach($parts as $part)
    <div class="page">
      <div class="row">
        <div class="col-print-10">
          <h1>{{ __('SIWECOS.DETAILREPORT_FOR', ['domain' => $part['scan']->url]) }}</h1>
        </div>
        <div class="col-print-2 fullscore">
          <div class="percent {{ 'md5_' . md5($part['scan']->url) }} total"> </div>
        </div>
      </div>

      @foreach ($part['report']->report as $scanReport)
        <div class="row">
          <div class="col-print-10">
            <h3>{{ $scanReport['scanner_name'] }}</h3>
          </div>
          <div class="col-print-2 score">
            <div class="percent {{ 'md5_' . md5($part['scan']->url) }} {{ $scanReport['scanner_code'] }}"></div>
          </div>
        </div>
        <div class="row">
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
        </div>
      @endforeach
    </div>
    @endforeach
  </div>
</body>
</html>
