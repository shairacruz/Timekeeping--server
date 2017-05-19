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
            <div class="incover"> 
                <div id="time"> </div>
                <div id="date"> </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <h3 id="comment"> Welcome!</h3>
        </div>
        
        <div class="container-fluid">
            <div class="col-xs-2"> </div>
            <div class="col-xs-8">
                <div class="panel-body">
                    <h3> Time In: &nbsp;</h3> <span id="TimeIn"> </span>
                </div>
            </div>
            <div class="col-xs-2"> </div>
        </div>
        
        <div class="container-fluid">
            <div class="col-xs-12">
                <div class="Login">
                    <input type="submit" value="Time Out" id="TimeOut" class="btn btn-lg btn-block">
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/homepage.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
    </body>
</html>
