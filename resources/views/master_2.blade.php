<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penduduk Kita | Beranda </title>

    <!-- Bootstrap Core CSS -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- MetisMenu CSS -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/dist/css/sb-admin-2.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom Fonts -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    strong.a{color: blue}
</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Penduduk Kita</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                    </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout1')}}"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
            
                        <li>
                            <a href="#"><i class="nav nav-second-level"></i>Penduduk<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level-level">
                                <li>
                                    <a href="{{url('penduduk')}}"><i class="fa fa-circle fa-fw"></i> Data Penduduk</a>
                                </li>
                                <li>
                                    <a href="{{url('pindah')}}"><i class="fa fa-square fa-fw"></i> Penduduk Pindah</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="akta"><i class="fa fa-table fa-fw"></i> Akta Kelahiran</a>
                        </li>
                        <li>
                            <a href="anggota"><i class="fa fa-table fa-fw"></i> Anggota Keluarga</a>
                        </li>
                        <li>
                            <a href="#"><i class="nav nav-second-level"></i>Kematian & Kelahiran<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level-level">
                                <li>
                                    <a href="{{url('kelahiran')}}"><i class="fa fa-circle fa-fw"></i> Data Kelahiran</a>
                                </li>
                                <li>
                                    <a href="{{url('kematian')}}"><i class="fa fa-square fa-fw"></i> Data Kematian</a>
                        </li>
                    
                            <!-- /.nav-second-level -->
                     
                      <!--   <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="{{url('login')}}">Masuk Pengguna</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
       <div id="page-wrapper">
            <div align="center" class="container-fluid">
            <br><br> <br><br><img align="center" src="http://www.indonesia.travel/img/logo/logo.png">
                <div class="row">
                    <div class="col-lg-12">

                        @yield('container')
                        
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
