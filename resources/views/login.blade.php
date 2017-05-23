<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penduduk Kita | Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/dist/css/sb-admin-2.css") }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="https://www.filepicker.io/api/file/zvOHwL2rSZ63G7eyIQpA">
<br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['url'=>'login2','class'=>'form-horizontal','value'=>"{{ csrf_token() }}"]) !!}
                            <fieldset>
                                <div class="form-group">
                                    {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username",'value'=>"{{ csrf_token() }}"]) !!}
                                </div>
                                <div class="form-group">
                                   {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password",'value'=>"{{ csrf_token() }}"]) !!}
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
                               <button class="btn btn-primary"> Login </button>
                               
                                {!! Form::close() !!}
                            </fieldset>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
