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
                <div id="time" class="small"> </div>
                <div id="date"> </div>
                <div id="datetime"> </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <h3 id="comment"> Good Day!</h3>
        </div>
        
        <div class="container-fluid">
            <div class="col-xs-2"> </div>
            <div class="col-xs-8">
                <div class="panel-body">
                    <div class="smaller"> Logged Username: <?php echo $user_id; ?></div>
                    <input id="user" value="<?php echo $user_id; ?>" type="hidden">
                    <div class="timeLogs">
                        <h3 class="smaller"> Time In: &nbsp;
                            <div class="smaller" id="Time-In"> --:--:-- </div>
                        </h3>
                        <h3 class="smaller"> Time Out: &nbsp;
                            <div class="smaller" id="Time-Out"> --:--:--  </div>
                        </h3>
                    </div>
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
        
        <div class="footer container-fluid no-gutter"> 
            <div class="col-xs-4">
                <a href="#" class="ui-btn"> <img src="/img/summary.svg" />
                    <p class="label">Summary</p>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="ui-btn"> <img src="/img/today-active.svg" />
                    <p class="label active">Today</p>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="ui-btn"> <img src="/img/acc.svg" />
                    <p class="label">Account</p>
                </a>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/homepage.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
    </body>
</html>
