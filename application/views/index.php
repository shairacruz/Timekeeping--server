<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Time</title>

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/stylesheet.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    </head>

    <body>
        <div class="container-fluid no-gutter">
            <div class="cover"> 
                <div id="time" class="big"> </div>
                <div id="date"> </div>
                <div id="datetime"> </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <h1>Timetables</h1>     
        </div>
        
        <div class="container-fluid">
            <div class="col-xs-2"> </div>
            <div class="col-xs-8">
                <div class="panel-body">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" maxlength="15" placeholder="Username" id="Username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" maxlength="15" placeholder="Password" id="Password" type="password" autofocus>
                            </div>
                      </fieldset>
                </div>
            </div>
            <div class="col-xs-2"> </div>
        </div>
        
        <div class="container-fluid">
            <div class="col-xs-12">
                <div class="Login">
                    <input type="submit" value="Time In" id="Login" class="btn btn-lg btn-block">
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>
