<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <meta name="token" content="{{ auth()->user()->getRememberToken() }}">--}}
{{--    <meta name="role" content="{{ auth()->user()->type }}">--}}

    <title>716 ОДКБ</title>

    <!-- Fonts -->

{{--    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <!-- Styles -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vue.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div id="app">

</div>
<?dd('mi tyt');?>
</body>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{--<script src="js/build.js"></script>--}}
{{--<script src="js/application.js"></script>--}}

</html>
