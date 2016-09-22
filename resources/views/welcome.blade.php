<html lang="en">
    <head>
        <title>Language</title>
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>

    <nav class="navbar navbar-inverse container">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('lang', ['en']) }}">En</a></li>
                    <li><a href="{{ url('lang', ['es']) }}">Es</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron container" style="background-color: #cacaca; border: 1px solid #a9a9a9;
    border-radius: 5px 5px 5px 5px">
        <p>@lang('welcome.home')</p>
        <p>{{trans('welcome.home')}}</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </body>
</html>
