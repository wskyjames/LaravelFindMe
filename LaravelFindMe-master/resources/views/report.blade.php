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

            p {
                padding-top: 10px;
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
                <li class="active">
                    <a href="/lost/create">Report Lost</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- main body -->
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
               
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               
                <div class="row">                
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">Report an Item</h3>
                            </div>
                            <div class="panel-body">

                                {!! Form::open(array('url' => 'lost')) !!}

                                <p>Select Item</p>
                                <select name="item_type">
                                    @foreach ($itemTypes as $item)

                                        <option value="{{ $item->id }}">
                                            {{ $item->make }} {{ $item->model }}
                                        </option>

                                    @endforeach
                                </select>   

                                <p>Description</p>
                                <textarea class="form-control" 
                                          rows="5" 
                                          id="comment" 
                                          style="max-width:100%;"
                                          name="description"></textarea> 

                                <p>Location</p>
                                <input type="text" 
                                       class="form-control"
                                       name="location">

                                <button class="btn btn-success pull-right"
                                        style="margin-top:10px;">
                                    Report
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
 