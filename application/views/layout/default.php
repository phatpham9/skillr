<!DOCTYPE html>
<html lang="en">

<head>
	<base href="{$base_url}">
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

    {if isset($css_arr) and $css_arr}
    <!--external css-->
    {foreach from=$css_arr item=stylesheet}
    <link href="{$stylesheet}" rel="stylesheet">
    {/foreach}
    {/if}

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
        	{include file="layout/header.php"}
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    {include file="layout/sidebar.php"}
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
        	       {include file="$content_tpl"}
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

    {if isset($js_arr) and $js_arr}
    <!--external script-->
    {foreach from=$js_arr item=script}
    <script src="{$script}"></script>
    {/foreach}
    {/if}

    <!--common script init for all pages-->
    <script src="assets/js/scripts.js"></script>
    <!--script for this page-->
</body>

</html>