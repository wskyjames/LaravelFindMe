<!DOCTYPE html>
<html>
    <head>
        <title>Find Me</title>  

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script> 

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- AngularJS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

        <!-- Spacing for navbar -->
        <style>
            body {
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" 
                      class="navbar-toggle collapsed" 
                      data-toggle="collapse" 
                      data-target="#navbar" 
                      aria-expanded="false" 
                      aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" 
                 class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
                    <a href="/lost">Lost Items</a>
                </li>
                <li>
                    <a href="/lost/create">Report Lost</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- main body -->
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="row">                
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Mark Item found</h3>
                            </div>
                            <div class="panel-body">
                                <p>Are you sure you want to mark the <b>{{ $lostItem->itemType->make }}</b> as found?</p>
                                
                                {!! Form::open(array('url' => 'found/'.$lostItem->id)) !!}

                                <button class="btn btn-danger pull-right">
                                    Mark Found
                                </button>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>        
                </div>
            </div>  
        </div>

    </body>
</html>
 