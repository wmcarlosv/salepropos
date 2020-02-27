<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{url('public/logo', $general_setting->site_logo)}}" />
    <title>{{$general_setting->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo asset('public/css/fontastic.css') ?>" type="text/css">
    <!-- Ion icon font-->
    <link rel="stylesheet" href="<?php echo asset('public/css/ionicons.min.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- virtual keybord stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/keyboard/css/keyboard.css') ?>" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/daterange/css/daterangepicker.min.css') ?>" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/buttons.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/select.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/dataTables.checkboxes.css') ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('public/css/custom-'.$general_setting->theme) ?>" type="text/css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/popper.js/umd/popper.min.js') ?>">
</script>
<script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery.cookie/jquery.cookie.js') ?>">
</script>
<script type="text/javascript" src="<?php echo asset('public/vendor/chart.js/Chart.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/charts-custom.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/js/front.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/moment.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/daterangepicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/pdfmake.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/vfs_fonts.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.buttons.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.colVis.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.html5.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.print.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.select.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/sum().js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>

  </head>
  <body onload="myFunction()">
    <div id="loader"></div>
    <div class="pos-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a href="{{url('/')}}" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><h3>{{trans('file.welcome')}} <span>{{Auth::user()->name}}</span> </h3></div></a></div>
              <span class="brand-big">@if($general_setting->site_logo)<img src="{{url('public/logo', $general_setting->site_logo)}}" width="50">&nbsp;&nbsp;@endif<h1 class="d-inline">{{$general_setting->site_title}}</h1></span>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <?php 
                    $general_setting_permission = DB::table('permissions')->where('name', 'general_setting')->first();
                    $general_setting_permission_active = DB::table('role_has_permissions')->where([
                                ['permission_id', $general_setting_permission->id],
                                ['role_id', Auth::user()->role_id]
                            ])->first();

                    $pos_setting_permission = DB::table('permissions')->where('name', 'pos_setting')->first();

                    $pos_setting_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $pos_setting_permission->id],
                        ['role_id', Auth::user()->role_id]
                    ])->first();
                ?>
                <li class="nav-item">
                  <a class="dropdown-item" href="{{url('/')}}"><i class="fa fa-dashboard"></i> <span>{{ trans('file.dashboard') }}</span></a>
                </li>
                <li class="nav-item"><a class="dropdown-item" href="{{route('sale.pos')}}"><i class="fa fa-th-large"></i>  <span>POS</span></a> </li>
                @if($pos_setting_permission_active)
                <li class="nav-item"><a class="dropdown-item" href="{{route('setting.pos')}}"><i class="fa fa-cog"></i>  <span>{{trans('file.POS Setting')}}</span></a> </li>
                @endif
                @if($alert_product > 0)
                <li class="nav-item">
                      <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="fa fa-bell"></i><span class="badge badge-danger">{{$alert_product}}</span>
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                      </a>
                      <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications" user="menu">
                          <li class="notifications">
                            <a href="{{route('report.qtyAlert')}}" class="btn btn-link"> <i class="fa fa-exclamation-triangle"></i> {{$alert_product}} product exceeds alert quantity</a>
                          </li>
                      </ul>
                </li>
                @endif
                <li class="nav-item"> 
                    <a class="dropdown-item" href="{{ url('read_me') }}" target="_blank"><i class="fa fa-info-circle"></i> {{trans('file.Help')}}</a>
                </li>&nbsp;
                <li class="nav-item">
                      <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="fa fa-user"></i> <span>{{ucfirst(Auth::user()->name)}}</span> <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                          <li> 
                            <a href="{{route('user.profile', ['id' => Auth::id()])}}"><i class="fa fa-user"></i> {{trans('file.profile')}}</a>
                          </li>
                          @if($general_setting_permission_active)
                          <li> 
                            <a href="{{route('setting.general')}}"><i class="fa fa-cog"></i> {{trans('file.settings')}}</a>
                          </li>
                          @endif
                          <li> 
                            <a href="{{url('my-transactions/'.date('Y').'/'.date('m'))}}"><i class="ion-arrow-swap"></i> {{trans('file.My Transaction')}}</a>
                          </li>
                          <li> 
                            <a href="{{url('holidays/my-holiday/'.date('Y').'/'.date('m'))}}"><i class="fa fa-plane"></i> {{trans('file.My Holiday')}}</a>
                          </li>
                          <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                                {{trans('file.logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          </li>
                      </ul>
                </li> 
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div style="display:none;" id="content" class="animate-bottom">
          @yield('content')  
      </div>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>&copy; {{$general_setting->site_title}}</p>
            </div>
            <!-- <div class="col-sm-6 text-right">
              <p>{{trans('file.Developed')}} {{trans('file.By')}} <a href="https://lion-coders.com" class="external">LionCoders</a></p>
            </div> -->
          </div>
        </div>
      </footer>
    </div>
    @yield('scripts')
    <script type="text/javascript">

      function myFunction() {
          setTimeout(showPage, 150);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }

      $("div.alert").delay(3000).slideUp(750);
      $('.selectpicker').selectpicker({
          style: 'btn-link',
      });
    </script>
  </body>
</html>