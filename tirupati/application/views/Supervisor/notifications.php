<!DOCTYPE html>
<html>

<!-- Mirrored from cube.adbee.technology/notifications.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 18 Nov 2015 07:12:17 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Cube - Bootstrap Admin Template</title>
 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"87e617fe26d58954b6ac66b8a081629a",petok:"e79be0a3500182d166c1a08e6e8c0097ceba761a-1447830365-1800",zone:"adbee.technology",rocket:"0",apps:{"ga_key":{"ua":"UA-49262924-2","ga_bs":"2"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d247a80cdfa/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css';?>"/>
 
<script src="<?php echo base_url().'assets/js/demo-rtl.js';?>"></script>
 
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/font-awesome.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/nanoscroller.css';?>"/>
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/compiled/theme_styles.css';?>"/>
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-default.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-style-growl.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-style-bar.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-style-attached.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-style-other.css';?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/libs/ns-style-theme.css';?>"/>
 
<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-49262924-2']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body>
<div id="theme-wrapper">
<header class="navbar" id="header-navbar">
<div class="container">
<a href="index.html" id="logo" class="navbar-brand">
<img src="<?php echo base_url().'assets/img/logo.png';?>" alt="" class="normal-logo logo-white"/>
<img src="<?php echo base_url().'assets/img/logo-black.png';?>" alt="" class="normal-logo logo-black"/>
<img src="<?php echo base_url().'assets/img/logo-small.png';?>" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
</a>
<div class="clearfix">
<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
<ul class="nav navbar-nav pull-left">
<li>
<a class="btn" id="make-small-nav">
<i class="fa fa-bars"></i>
</a>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell"></i>
<span class="count">8</span>
</a>
<ul class="dropdown-menu notifications-list">
<li class="pointer">
<div class="pointer-inner">
<div class="arrow"></div>
</div>
</li>
<li class="item-header">You have 6 new notifications</li>
<li class="item">
<a href="#">
<i class="fa fa-comment"></i>
<span class="content">New comment on ‘Awesome P...</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-plus"></i>
<span class="content">New user registration</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-envelope"></i>
<span class="content">New Message from George</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-shopping-cart"></i>
<span class="content">New purchase</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-eye"></i>
<span class="content">New order</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item-footer">
<a href="#">
View all notifications
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-envelope-o"></i>
<span class="count">16</span>
</a>
<ul class="dropdown-menu notifications-list messages-list">
<li class="pointer">
<div class="pointer-inner">
<div class="arrow"></div>
</div>
</li>
<li class="item first-item">
<a href="#">
<img src="<?php echo base_url().'assets/img/samples/messages-photo-1.png';?>" alt=""/>
<span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<img src="<?php echo base_url().'assets/img/samples/messages-photo-2.png';?>" alt=""/>
<span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="#">
<img src="<?php echo base_url().'assets/img/samples/messages-photo-3.png';?>" alt=""/>
<span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item-footer">
<a href="#">
View all messages
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
New Item
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu">
<li class="item">
<a href="#">
<i class="fa fa-archive"></i>
New Product
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-shopping-cart"></i>
New Order
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-sitemap"></i>
New Category
</a>
</li>
<li class="item">
<a href="#">
<i class="fa fa-file-text"></i>
New Page
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
English
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu">
<li class="item">
<a href="#">
Spanish
</a>
</li>
<li class="item">
<a href="#">
German
</a>
</li>
<li class="item">
<a href="#">
Italian
</a>
</li>
</ul>
</li>
</ul>
</div>
<div class="nav-no-collapse pull-right" id="header-nav">
<ul class="nav navbar-nav pull-right">
<li class="mobile-search">
<a class="btn">
<i class="fa fa-search"></i>
</a>
<div class="drowdown-search">
<form role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search...">
<i class="fa fa-search nav-search-icon"></i>
</div>
</form>
</div>
</li>
<li class="dropdown profile-dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="<?php echo base_url().'assets/img/samples/scarlet-159.png';?>" alt=""/>
<span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</li>
<li class="hidden-xxs">
<a class="btn">
<i class="fa fa-power-off"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</header>
<div id="page-wrapper" class="container">
<div class="row">
<div id="nav-col">
<section id="col-left" class="col-left-nano">
<div id="col-left-inner" class="col-left-nano-content">
<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
<img alt="" src="<?php echo base_url().'assets/img/samples/scarlet-159.png';?>"/>
<div class="user-box">
<span class="name">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
Scarlett J.
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</span>
<span class="status">
<i class="fa fa-circle"></i> Online
</span>
</div>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
<ul class="nav nav-pills nav-stacked">
<li class="nav-header nav-header-first hidden-sm hidden-xs">
Navigation
</li>
<li>
<a href="index.html">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
<span class="label label-primary label-circle pull-right">28</span>
</a>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Tables</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="tables.html">
Simple
</a>
</li>
<li>
<a href="tables-advanced.html">
Advanced
</a>
</li>
<li>
<a href="users.html">
Users
</a>
</li>
<li>
<a href="tables-footables.html">
FooTables
</a>
</li>
</ul>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-envelope"></i>
<span>Email</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="email-inbox.html">
Inbox
</a>
</li>
<li>
<a href="email-detail.html">
Detail
</a>
</li>
<li>
<a href="email-compose.html">
Compose
</a>
</li>
</ul>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-bar-chart-o"></i>
<span>Graphs</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="graphs-morris.html">
Morris &amp; Mixed
</a>
</li>
<li>
<a href="graphs-flot.html">
Flot
</a>
</li>
<li>
<a href="graphs-dygraphs.html">
Dygraphs
</a>
</li>
<li>
<a href="graphs-xcharts.html">
xCharts
</a>
</li>
</ul>
</li>
<li>
<a href="widgets.html">
<i class="fa fa-th-large"></i>
<span>Widgets</span>
<span class="label label-success pull-right">New</span>
</a>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-copy"></i>
<span>Pages</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="calendar.html">
Calendar
</a>
</li>
<li>
<a href="gallery.html">
Gallery
</a>
</li>
<li>
<a href="gallery-v2.html">
Gallery v2
</a>
</li>
<li>
<a href="pricing.html">
Pricing
</a>
</li>
<li>
<a href="projects.html">
Projects
</a>
</li>
<li>
<a href="team-members.html">
Team Members
</a>
</li>
<li>
<a href="timeline.html">
Timeline
</a>
</li>
<li>
<a href="timeline-grid.html">
Timeline Grid
</a>
</li>
<li>
<a href="user-profile.html">
User Profile
</a>
</li>
<li>
<a href="search.html">
Search Results
</a>
</li>
<li>
<a href="invoice.html">
Invoice
</a>
</li>
<li>
<a href="intro.html">
Tour Layout
</a>
</li>
</ul>
</li>
<li class="nav-header hidden-sm hidden-xs">
Components
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-edit"></i>
<span>Forms</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="form-elements.html">
Elements
</a>
</li>
<li>
<a href="x-editable.html">
X-Editable
</a>
</li>
<li>
<a href="form-wizard.html">
Wizard
</a>
</li>
<li>
<a href="form-wizard-popup.html">
Wizard popup
</a>
</li>
<li>
<a href="form-wysiwyg.html">
WYSIWYG
</a>
</li>
<li>
<a href="form-summernote.html">
WYSIWYG Summernote
</a>
</li>
<li>
<a href="form-ckeditor.html">
WYSIWYG CKEditor
</a>
</li>
<li>
<a href="form-dropzone.html">
Multiple File Upload
</a>
</li>
</ul>
</li>
<li class="active">
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>UI Kit</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="ui-elements.html">
Elements
</a>
</li>
<li>
<a href="notifications.html" class="active">
Notifications &amp; Alerts
</a>
</li>
<li>
<a href="modals.html">
Modals
</a>
</li>
<li>
<a href="video.html">
Video
</a>
</li>
<li>
<a href="#" class="dropdown-toggle">
Icons
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="icons-awesome.html">
Awesome Icons
</a>
</li>
<li>
<a href="icons-halflings.html">
Halflings Icons
</a>
</li>
</ul>
</li>
<li>
<a href="ui-nestable.html">
Nestable List
</a>
</li>
<li>
<a href="typography.html">
Typography
</a>
</li>
<li>
<a href="#" class="dropdown-toggle">
3 Level Menu
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="#">
3rd Level
</a>
</li>
<li>
<a href="#">
3rd Level
</a>
</li>
<li>
<a href="#">
3rd Level
</a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a href="maps.html">
<i class="fa fa-map-marker"></i>
<span>Google Maps</span>
<span class="label label-danger pull-right">Updated</span>
</a>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-file-text-o"></i>
<span>Extra pages</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="faq.html">
FAQ
</a>
</li>
<li>
<a href="emails.html">
Email Templates
</a>
</li>
<li>
<a href="login.html">
Login
</a>
</li>
<li>
<a href="login-full.html">
Login Full
</a>
</li>
<li>
<a href="registration.html">
Registration
</a>
</li>
<li>
<a href="registration-full.html">
Registration Full
</a>
</li>
<li>
<a href="forgot-password.html">
Forgot Password
</a>
</li>
<li>
<a href="forgot-password-full.html">
Forgot Password Full
</a>
</li>
<li>
<a href="lock-screen.html">
Lock Screen
</a>
</li>
<li>
<a href="lock-screen-full.html">
Lock Screen Full
</a>
</li>
<li>
<a href="error-404.html">
Error 404
</a>
</li>
<li>
<a href="error-404-v2.html">
Error 404 Nested
</a>
</li>
<li>
<a href="error-500.html">
Error 500
</a>
</li>
<li>
<a href="extra-grid.html">
Grid
</a>
</li>
</ul>
</li>
<li>
<a href="angularjs/index.html">
<i class="fa fa-google"></i>
<span>AngularJS Demo</span>
</a>
</li>
</ul>
</div>
</div>
</section>
<div id="nav-col-submenu"></div>
</div>
<div id="content-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active"><span>Alerts &amp; Notifications</span></li>
</ol>
<h1>Alerts &amp; Notifications</h1>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="main-box clearfix">
<header class="main-box-header clearfix">
<h2>Notifications</h2>
</header>
<div class="main-box-body clearfix">
<p>
Click on every button to see different notification style. All notifications are very easy to implement.
</p>
 
<div class="notification-shape shape-box" id="notification-shape" data-path-to="m 0,0 500,0 0,500 -500,0 z">
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 500 500" preserveAspectRatio="none">
<path d="m 0,0 500,0 0,500 0,-500 z"/>
</svg>
</div>
 
<div class="notification-shape shape-progress" id="notification-shape-loading-circle">
<svg width="70px" height="70px"><path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/></svg>
</div>
<button id="notification-trigger" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Scale</span>
</button>
<button id="notification-trigger-slide" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Slide IN</span>
</button>
<button id="notification-trigger-jelly" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Jelly</span>
</button>
<br/>
<button id="notification-trigger-genie" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Genie</span>
</button>
<button id="notification-trigger-flip" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Flip</span>
</button>
<button id="notification-trigger-bouncyflip" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Bouncy Flip</span>
</button>
<br/>
<button id="notification-trigger-slide-on-top" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Slide On Top</span>
</button>
<button id="notification-trigger-expanding-loader" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Expanding Loader</span>
</button>
<button id="notification-trigger-cornerexpand" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Corner Expand</span>
</button>
<br/>
<button id="notification-trigger-loading-circle" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Loading Circle</span>
</button>
<button id="notification-trigger-box-spinner" class="btn btn-primary progress-button mrg-b-lg">
<span class="content">Box Spinner</span>
</button>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="main-box clearfix">
<header class="main-box-header clearfix">
<h2>Simple alerts</h2>
</header>
<div class="main-box-body clearfix">
<div class="alert alert-success">
<i class="fa fa-check-circle fa-fw fa-lg"></i>
<strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info">
<i class="fa fa-info-circle fa-fw fa-lg"></i>
<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning">
<i class="fa fa-warning fa-fw fa-lg"></i>
<strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>
<div class="alert alert-danger">
<i class="fa fa-times-circle fa-fw fa-lg"></i>
<strong>Oh snap!</strong> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="main-box clearfix">
<header class="main-box-header clearfix">
<h2>Dismissible alerts with links</h2>
</header>
<div class="main-box-body clearfix">
<div class="alert alert-success fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-check-circle fa-fw fa-lg"></i>
<strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert alert-info fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-info-circle fa-fw fa-lg"></i>
<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-warning fa-fw fa-lg"></i>
<strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>
<div class="alert alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<i class="fa fa-times-circle fa-fw fa-lg"></i>
<strong>Oh snap!</strong> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="main-box clearfix">
<header class="main-box-header clearfix">
<h2>Custom alerts</h2>
</header>
<div class="main-box-body clearfix">
<div class="alert alert-block alert-danger fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4>Oh snap! You got an error!</h4>
<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
<p>
<a class="btn btn-danger" href="#">Take this action</a> <a class="btn btn-default" href="#">Or do this</a>
</p>
</div>
<div class="alert alert-block alert-success fade in">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4>Successfully saved!</h4>
<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
<p>
<a class="btn btn-success" href="#">Take this action</a> <a class="btn btn-default" href="#">Or do this</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer id="footer-bar" class="row">
<p id="footer-copyright" class="col-xs-12">
Powered by Cube Theme.
</p>
</footer>
</div>
</div>
</div>
</div>
<div id="config-tool" class="closed">
<a id="config-tool-cog">
<i class="fa fa-cog"></i>
</a>
<div id="config-tool-options">
<h4>Layout Options</h4>
<ul>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-header"/>
<label for="config-fixed-header">
Fixed Header
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-sidebar"/>
<label for="config-fixed-sidebar">
Fixed Left Menu
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-footer"/>
<label for="config-fixed-footer">
Fixed Footer
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-boxed-layout"/>
<label for="config-boxed-layout">
Boxed Layout
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-rtl-layout"/>
<label for="config-rtl-layout">
Right-to-Left
</label>
</div>
</li>
</ul>
<br/>
<h4>Skin Color</h4>
<ul id="skin-colors" class="clearfix">
<li>
<a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
</a>
</li>
<li>
<a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
</a>
</li>
</ul>
</div>
</div>
 
<script src="<?php echo base_url().'assets/js/demo-skin-changer.js';?>"></script>  
<script src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js';?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.nanoscroller.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/demo.js';?>"></script>  
 
<script src="<?php echo base_url().'assets/js/modernizr.custom.js';?>"></script>
<script src="<?php echo base_url().'assets/js/snap.svg-min.js';?>"></script>  
<script src="<?php echo base_url().'assets/js/classie.js';?>"></script>
<script src="<?php echo base_url().'assets/js/notificationFx.js';?>"></script>
 
<script src="<?php echo base_url().'assets/js/scripts.js';?>"></script>
<script src="<?php echo base_url().'assets/js/pace.min.js';?>"></script>
 
<script>
		(function() {
			//Scale effect
			var bttn = document.getElementById( 'notification-trigger' );

			// make sure..
			bttn.disabled = false;
			
			bttn.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttn, 'active' );

				classie.remove( bttn, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
					layout : 'growl',
					effect : 'scale',
					type : 'warning', // notice, warning, error or success
					onClose : function() {
						bttn.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Jelly effect
			var bttnJelly = document.getElementById( 'notification-trigger-jelly' );

			// make sure..
			bttnJelly.disabled = false;

			bttnJelly.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnJelly, 'active' );

				classie.remove( bttnJelly, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<p>Hello there! I\'m a classic notification but I have some elastic jelliness thanks to <a href="http://bouncejs.com/">bounce.js</a>. </p>',
					layout : 'growl',
					effect : 'jelly',
					type : 'error', // notice, warning, error or success
					onClose : function() {
						bttnJelly.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			//Slide IN effect
			var bttnSlide = document.getElementById( 'notification-trigger-slide' );

			// make sure..
			bttnSlide.disabled = false;

			bttnSlide.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnSlide, 'active' );

				classie.remove( bttnSlide, 'active' );
					
				// create the notification
				var notification = new NotificationFx({
					message : '<p>This notification has slight elasticity to it thanks to <a href="http://bouncejs.com/">bounce.js</a>.</p>',
					layout : 'growl',
					effect : 'slide',
					type : 'notice', // notice, warning or error
					onClose : function() {
						bttnSlide.disabled = false;
					}
				});

				// show the notification
				notification.show();

				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Genie effect
			var bttnGenie = document.getElementById( 'notification-trigger-genie' );

			// make sure..
			bttnGenie.disabled = false;

			bttnGenie.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnGenie, 'active' );
				classie.remove( bttnGenie, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
					layout : 'growl',
					effect : 'genie',
					type : 'notice', // notice, warning or error
					onClose : function() {
						bttnGenie.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Flip effect
			var bttnFlip = document.getElementById( 'notification-trigger-flip' );

			// make sure..
			bttnFlip.disabled = false;

			bttnFlip.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnFlip, 'active' );
				classie.remove( bttnFlip, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
					layout : 'attached',
					effect : 'flip',
					type : 'notice', // notice, warning or error
					onClose : function() {
						bttnFlip.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Bouncy Flip effect
			var bttnBouncyflip = document.getElementById( 'notification-trigger-bouncyflip' );

			// make sure..
			bttnBouncyflip.disabled = false;

			bttnBouncyflip.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnBouncyflip, 'active' );
				classie.remove( bttnBouncyflip, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<span class="fa fa-calendar fa-3x pull-left"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
					layout : 'attached',
					effect : 'bouncyflip',
					type : 'success', // notice, warning or error
					onClose : function() {
						bttnBouncyflip.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Slide On Top effect
			var bttnSlideOnTop = document.getElementById( 'notification-trigger-slide-on-top' );

			// make sure..
			bttnSlideOnTop.disabled = false;

			bttnSlideOnTop.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnSlideOnTop, 'active' );
				classie.remove( bttnSlideOnTop, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					message : '<span class="icon fa fa-bullhorn fa-2x"></span><p>You have some interesting news in your inbox. Go <a href="#">check it out</a> now.</p>',
					layout : 'bar',
					effect : 'slidetop',
					type : 'error', // notice, warning or error
					onClose : function() {
						bttnSlideOnTop.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Expanding loader effect
			var bttnExpandingLoader = document.getElementById( 'notification-trigger-expanding-loader' );

				// make sure..
			bttnExpandingLoader.disabled = false;

			bttnExpandingLoader.addEventListener( 'click', function() {
					
				// create the notification
				var notification = new NotificationFx({
					message : '<span class="icon fa fa-cog fa-2x"></span><p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
					layout : 'bar',
					effect : 'exploader',
					type : 'success', // notice, warning or error
					onClose : function() {
						bttnExpandingLoader.disabled = false;
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Corner expand effect
			var svgshape = document.getElementById( 'notification-shape' ),
				s = Snap( svgshape.querySelector( 'svg' ) ),
				path = s.select( 'path' ),
				pathConfig = {
					from : path.attr( 'd' ),
					to : svgshape.getAttribute( 'data-path-to' )
				},
				bttnCornerexpand = document.getElementById( 'notification-trigger-cornerexpand' );
	
			// make sure..
			bttnCornerexpand.disabled = false;
	
			bttnCornerexpand.addEventListener( 'click', function() {
				// simulate loading (for demo purposes only)
				classie.add( bttnCornerexpand, 'active' );
				path.animate( { 'path' : pathConfig.to }, 300, mina.easeinout );

				classie.remove( bttnCornerexpand, 'active' );
				
				// create the notification
				var notification = new NotificationFx({
					wrapper : svgshape,
					message : '<p><span class="icon"></span> I\'m appaering in a morphed shape thanks to <a href="http://snapsvg.io/">Snap.svg</a></p>',
					layout : 'other',
					effect : 'cornerexpand',
					type : 'warning', // notice, warning or error
					onClose : function() {
						bttnCornerexpand.disabled = false;
						setTimeout(function() {
							path.animate( { 'path' : pathConfig.from }, 300, mina.easeinout );
						}, 200 );
					}
				});

				// show the notification
				notification.show();
				
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Loading circle effect
			var svgshapeLoadingCircle = document.getElementById( 'notification-shape-loading-circle' ),
				bttnLoadingCircle = document.getElementById( 'notification-trigger-loading-circle' );
	
			// make sure..
			bttnLoadingCircle.disabled = false;
	
			bttnLoadingCircle.addEventListener( 'click', function() {
				// create the notification
				var notification = new NotificationFx({
					wrapper : svgshapeLoadingCircle,
					message : '<p>Whatever you did, it was successful!</p>',
					layout : 'other',
					effect : 'loadingcircle',
					ttl : 9000,
					type : 'notice', // notice, warning or error
					onClose : function() {
						bttnLoadingCircle.disabled = false;
					}
				});
	
				// show the notification
				notification.show();
	
				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
			
			
			//Box Spinner effect
			var bttnBoxSpinner = document.getElementById( 'notification-trigger-box-spinner' );

			// make sure..
			bttnBoxSpinner.disabled = false;

			bttnBoxSpinner.addEventListener( 'click', function() {
				// create the notification
				var notification = new NotificationFx({
					message : '<p>I am using a beautiful spinner from <a href="http://tobiasahlin.com/spinkit/">SpinKit</a></p>',
					layout : 'other',
					effect : 'boxspinner',
					ttl : 9000,
					type : 'success', // notice, warning or error
					onClose : function() {
						bttnBoxSpinner.disabled = false;
					}
				});

				// show the notification
				notification.show();

				// disable the button (for demo purposes only)
				this.disabled = true;
			} );
		})();
	</script>
</body>

<!-- Mirrored from cube.adbee.technology/notifications.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 18 Nov 2015 07:12:22 GMT -->
</html>