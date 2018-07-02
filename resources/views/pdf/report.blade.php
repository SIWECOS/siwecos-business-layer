<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-print-3">
            <img src="{{URL::asset('img/siwecos-logo.png')}}" class="img-responsive" />
        </div>
        <div class="col-print-2" style="text-align: right;">
            {{$weightedMedia}}%
        </div>
    </div>
    <div class="row">
        <h1>Report für {{$domain}}</h1>
        <p>{{$date}}</p>
    </div>
    @foreach ($data as $result)

        <div class="row">
            <div class="col-print-2">
                <h3>{{$result['score']}}%</h3>
            </div>
            <div class="col-print-10">
                <h3>{{$result['scanner_type']}}</h3>
            </div>

            <ul>
                @foreach ($result['result'] as $detail)
                    <li>
                        <div class="row">
                            <div class="col-print-10">
                                {!! $detail['name']  !!}
                                @if (!$result['has_error'])
                                    <p style="font-style: italic !important; font-size: smaller">{!! $detail['report'] !!}</p>
                                @endif
                            </div>
                            <div class="col-print-2" style="text-align: right;">
                                {{$detail['score']}}%
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    @endforeach
</div>
</body>
