<!DOCTYPE html>
<html lang="en">
  <head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Bttrf.ly Campaign Creator</title>
	{{ HTML::style('/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('/css/flat-ui.css') }}
    {{ HTML::style('/css/ui-lightness/jquery-ui-1.7.1.custom.css') }}
    {{ HTML::style('/css/jquery.qtip.min.css') }}
    {{ HTML::style('/css/simplemodel.css') }}
		{{ HTML::script('js/jquery-1.7.2.min.js') }}
		{{ HTML::script('js/jquery.peity.js') }}
		{{ HTML::script('js/jquery.peity.js') }}
		{{ HTML::script('js/jquery.qtip.min.js') }}

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
		   <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
		    <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
            </div>
             <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href='/'>Home @if(Request::path() == '/') <span class="navbar-unread">1</span> @endif</a></li>
				@if(Auth::check() && (Session::get('role') == 'admin'|| Session::get('role') == 'Admin'))
				<li class="dropdown">
					 <a href="/admin/get_users" class="dropdown-toggle" data-toggle="dropdown">Manage Users @if(Request::path() == 'admin/get_users' || Request::path() == 'admin/get_new_user' || Request::path() == 'admin/get_new_role') <span class="navbar-unread">1</span> @endif<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
					<li><a href='/admin/get_users'>View Users</a></li>
					<li><a href='/admin/get_new_user'>Add User</a></li>
					<li><a href='/admin/get_new_role'>Manage Roles</a></li>
					</ul>
					</li>
					<li class="dropdown">
					 <a href="dashboard" class="dropdown-toggle" data-toggle="dropdown">Campaigns @if(Request::path() == 'dashboard' || Request::path() == 'doc' || Request::path() == 'trustjacker' || Request::path() == 'addlink' || Request::path() == 'editlink') <span class="navbar-unread">1</span> @endif<b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                      <li>{{ HTML::link('/dashboard','Dashboard') }} </li>
                      <li>{{ HTML::link('/trustjacker','Manage Campaigns') }} </li>
                      <li>{{ HTML::link('/addlink','Add Campaign') }} </li>
                      <li>{{ HTML::link('/doc','Documentation') }} </li>
                      <li>{{ HTML::link('/adddomain','Domains') }} </li>
						</ul></li>
                    <li style="margin-left:145px">{{ HTML::link('logout', 'Logout ('.Auth::user()->username.')') }}</li>
                @elseif(Auth::check())
					<li class="dropdown">
					 <a href="dashboard" class="dropdown-toggle" data-toggle="dropdown">Campaigns @if(Request::path() == 'dashboard' || Request::path() == 'doc' || Request::path() == 'trustjacker' || Request::path() == 'addlink' || Request::path() == 'editlink') <span class="navbar-unread">1</span> @endif <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                      <li>{{ HTML::link('/dashboard','Dashboard') }} </li>
                      <li>{{ HTML::link('/trustjacker','Manage Campaigns') }} </li>
                      <li>{{ HTML::link('/addlink','Add Campaign') }} </li>
                      <li>{{ HTML::link('/doc','Documentation') }} </li>
                      <li>{{ HTML::link('/adddomain','Domains') }} </li>
						</ul></li>
                    <li style="margin-left:145px">{{ HTML::link('logout', 'Logout ('.Auth::user()->username.')') }}</li>
                @else
                    <li><a href='/login'>Login @if(Request::path() == 'login') <span class="navbar-unread">1</span> @endif</a></li>
                @endif
            </ul>
			</div>
        </nav><!-- end nav -->
		  
		@yield('script')
            @yield('content')
		
            <footer>
                 <p>&copy; Bttrf.ly 2014</p>
            </footer>
    </div><!-- /.container -->


    <!-- Load JS here for greater good =============================-->
	{{ HTML::script('js/jquery-1.8.3.min.js') }}
	{{ HTML::script('js/jquery-ui-1.10.3.custom.min.js') }}
	{{ HTML::script('js/jquery.ui.touch-punch.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/bootstrap-select.js') }}
	{{ HTML::script('js/bootstrap-switch.js') }}
	{{ HTML::script('js/flatui-checkbox.js') }}
	{{ HTML::script('js/flatui-radio.js') }}
	{{ HTML::script('js/jquery.tagsinput.js') }}
	{{ HTML::script('js/jquery.placeholder.js') }}
	{{ HTML::script('js/jquery-1.8.3.min.js') }}
  </body>
</html>
