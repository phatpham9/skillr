<?php /*%%SmartyHeaderCode:157695462dce341f6b9-23095231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514ef1d13e157d4ed2366cc40adbe32ac1f68e6a' => 
    array (
      0 => 'application\\views\\layout\\default.php',
      1 => 1415764790,
      2 => 'file',
    ),
    'c26513e9ba60b8caafe0fa1726923939fbbdefb3' => 
    array (
      0 => 'application\\views\\layout\\header.php',
      1 => 1415379994,
      2 => 'file',
    ),
    '136b0e385b1834906a2d4cd5733a8e45ee438b11' => 
    array (
      0 => 'application\\views\\layout\\sidebar.php',
      1 => 1409211724,
      2 => 'file',
    ),
    'c4a7d1c638842fe3809148d31537be13a1f70ec5' => 
    array (
      0 => 'application\\views\\browse\\index.php',
      1 => 1409213276,
      2 => 'file',
    ),
    'a8a435152db44ee9b388be64a56b23805f19e68b' => 
    array (
      0 => 'application\\views\\browse\\details.php',
      1 => 1409210036,
      2 => 'file',
    ),
    '44b4c57dffa3977ba7ed8d65ae300f8fb818fecb' => 
    array (
      0 => 'application\\views\\browse\\recent_done.php',
      1 => 1409214146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157695462dce341f6b9-23095231',
  'variables' => 
  array (
    'base_url' => 0,
    'css_arr' => 0,
    'stylesheet' => 0,
    'js_arr' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce36aa8d6_59492239',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce36aa8d6_59492239')) {function content_5462dce36aa8d6_59492239($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<base href="http://skillr.local/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Skill-set Development Tool">
    <meta name="author" content="http://phatpham.com">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Skill-Set Development</title>

    <!--Core CSS -->
    <link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
        	<!--logo start-->
<div class="brand">
    <a href="http://skillr.local/" class="logo">
        <img src="assets/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
                <li>
            <a href="http://skillr.local/auth/login">
                <img alt="" src="http://skillr.local/uploads/ava/no_ava.jpg">
                <span class="username">Login</span>
            </a>
        </li>
            </ul>
    <!--search & user info end-->
</div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a class="active" href="http://skillr.local/browse">
            <i class="fa fa-globe"></i>
            <span>Browse</span>
        </a>
    </li>
    <li>
        <a  href="http://skillr.local/skill">
            <i class="fa fa-user"></i>
            <span>My Skills</span>
        </a>
    </li>
</ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
        	       <div class="col-lg-8">
    <div id="div-skills-list">
									<aside class="profile-nav fade in" data-id="54">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-10-13</strong> - <strong>2014-10-19</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Cassandra</h1>
            <p>Wide-column Stores DBMS</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn to code Cassandra. Goals:<br />
- Understand pros and cons comparison of Cassandra and another wide-column store DBMS<br />
- Deploy Cassandra for using<br />
- Code basic Cassandra queries</li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 1 Week
                                <span class="label label-danger pull-right r-activity" style="margin-top:3px;">3 weeks, 3 days, 1 hour delayed</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="50">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-10-06</strong> - <strong>2014-10-12</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>PostgresSQL</h1>
            <p>Object RDBMS</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn to code PostgresSQL. Goals:<br />
- Understand pros and cons comparison of PostgresSQL and another Object DBMS<br />
- Understand pros and cons comparison of PostgresSQL and MySQL, Oracle<br />
- Understand differences of query syntax between PostgresSQL and MySQL, Oracle<br />
- Deploy PostgresSQL for using<br />
- Code PostgresSQL for Wordpress website</li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 1 Week
                                <span class="label label-danger pull-right r-activity" style="margin-top:3px;">1 month, 15 hours delayed</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="47">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-09-29</strong> - <strong>2014-10-05</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Nginx</h1>
            <p>HTTP Server</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn how to use Nginx, the high performance HTTP server better to use for static contents. Goals:<br />
- Understand basic Nginx mechanism<br />
- Understand pros and cons comparison of Nginx and Apache<br />
- Doploy Nginx for hosting Wordpress website</li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 1 Week
                                <span class="label label-danger pull-right r-activity" style="margin-top:3px;">1 month, 1 week, 15 hours delayed</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="51">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-09-29</strong> - <strong>2015-03-29</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Toefl iBT</h1>
            <p>English Certificate</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Study and do Toefl iBT tests. Goal: 90/120 score</li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 5 Months, 4 Weeks, 1 Day, 22 Hours
                                <span class="label label-warning pull-right r-activity" style="margin-top:3px;">4 months, 2 weeks, 1 day, 8 hours left</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="45">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-09-01</strong> - <strong>2014-09-28</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Wordpress</h1>
            <p>CMS Framework</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn to code Wordpress. Goals:<br />
- Understand pros and cons comparison of Wordpress and Joomla, Drupal framework<br />
- Understand Wordpress architecture and sourcecode structure<br />
- Deploy Wordpress for developing<br />
- Code personal website using Wordpress<br />
- Code Wordpress theme</li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 4 Weeks
                                <span class="label label-danger pull-right r-activity" style="margin-top:3px;">1 month, 2 weeks, 15 hours delayed</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="55">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-08-25</strong> - <strong>2014-08-27</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Redis</h1>
            <p>Key-value Stores DBMS</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn to code Redis.<br />
<b>Goals</b>:<br />
- Understand pros and cons comparison of Redis and Memcached<br />
- Understand differences of query syntax and protocol between Redis and Memcached<br />
- Deploy Redis for using<br />
- Code basic Redis queries<br />
<b>Books</b>:<br />
- Redis in Action: <a href="http://www.it-ebooks.info/book/2447" target="_blank" >http://www.it-ebooks.info/book/2447</a><br />
- Redis Cookbook: <a href="http://www.it-ebooks.info/book/562" target="_blank" >http://www.it-ebooks.info/book/562</a><br />
<b>References</b>:<br />
- Redis documentation: <a href="http://redis.io/documentation" target="_blank" >http://redis.io/documentation</a><br />
- Redis features: <a href="http://kkovacs.eu/cassandra-vs-mongodb-vs-couchdb-vs-redis" target="_blank" >http://kkovacs.eu/cassandra-vs-mongodb-vs-couchdb-vs-redis</a></li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 3 Days
                                <span class="label label-primary pull-right r-activity" style="margin-top:3px;">Done</span>
                            </li>
        </ul>
    </section>
</aside>
		    				<aside class="profile-nav fade in" data-id="52">
    <section class="panel">
        <header class="panel-heading">
            <strong>2014-08-18</strong> - <strong>2014-08-24</strong>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="http://skillr.local/uploads/ava/no_ava.jpg">
            </a>
            <h1>Smarty</h1>
            <p>Template Framework</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
                        <li> <i class="fa fa-book"></i> Learn to code Smarty.<br />
<b>Goals</b>:<br />
- Understand Smarty syntax and another stuff<br />
- Integrate Smarty to CodeIgniter framework<br />
- Code Smarty for skillr website<br />
<b>References</b>:<br />
- Smarty documentation: <a href="http://www.smarty.net/docs/en" target="_blank" >http://www.smarty.net/docs/en</a><br />
- CodeIgniter integration guide: <a href="http://www.coolphptools.com/codeigniter-smarty" target="_blank" >http://www.coolphptools.com/codeigniter-smarty</a></li>
                        <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: 1 Week
                                <span class="label label-primary pull-right r-activity" style="margin-top:3px;">Done</span>
                            </li>
        </ul>
    </section>
</aside>
		    	    	</div>
</div>

<div class="col-lg-4">
	<section id="sec-create" class="panel">
    <header class="panel-heading">
        Recent Done
    	<span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
    	    				<p>
			admin - 2014-08-27 08:00:44<br>
			<strong>Redis</strong><br>
			<strong>Key-value Stores DBMS</strong>
		</p>
    				<p>
			admin - 2014-08-23 15:01:36<br>
			<strong>Smarty</strong><br>
			<strong>Template Framework</strong>
		</p>
    		    	    </div>
</section>
</div>
               </div>
            </section>
        </section>
        <!--main content end-->
    </section>
    <!-- Placed js at the end of the document so the pages load faster -->
    <!--Core js-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="assets/bs3/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>

    
    <!--common script init for all pages-->
    <script src="assets/js/scripts.js"></script>
    <!--script for this page-->
</body>

</html><?php }} ?>
