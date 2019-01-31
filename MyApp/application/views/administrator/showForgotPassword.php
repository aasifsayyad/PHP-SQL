<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Cube - Bootstrap Admin Template</title>
 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"87e617fe26d58954b6ac66b8a081629a",petok:"9d87832b29fdb11a5d4107be501b254f9a0a1432-1447830373-1800",zone:"adbee.technology",rocket:"0",apps:{"ga_key":{"ua":"UA-49262924-2","ga_bs":"2"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d247a80cdfa/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/partnerIT/css/bootstrap/bootstrap.min.css"/>
 
<script src="<?php echo base_url();?>/partnerIT/js/demo-rtl.js"></script>
 
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/partnerIT/css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/partnerIT/css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/partnerIT/css/compiled/theme_styles.css"/>
 
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
 
<link type="image/x-icon" href="<?php echo base_url();?>/partnerIT/img/logo-small.png" rel="shortcut icon"/>

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
<body id="login-page-full">
<div id="login-full-wrapper" class="reset-password-wrapper">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div id="login-box">
<div id="login-box-holder">
<div class="row">
<div class="col-xs-12">
<header id="login-header">
<div id="login-logo">
<img src="<?php echo base_url();?>/partnerIT/img/logo.png" alt=""/>
</div>
</header>
<div id="login-box-inner" class="with-heading">
<h4>Forgot your password?</h4>
<p>
Enter your email address to recover your password.
</p>
<form role="form" action="http://cube.adbee.technology/index.html">
<div class="input-group reset-pass-input">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control" type="text" placeholder="Email address">
</div>
<div class="row">
<div class="col-xs-12">
<button type="submit" class="btn btn-success col-xs-12">Reset password</button>
</div>
<div class="col-xs-12">
<br/>
<a href="<?php echo base_url();?>index.php/TestApp/login/" id="login-forget-link" class="forgot-link col-xs-12">Back to login</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
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
 
<script src="<?php echo base_url();?>/partnerIT/js/demo-skin-changer.js"></script>  
<script src="<?php echo base_url();?>/partnerIT/js/jquery.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/jquery.nanoscroller.min.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/demo.js"></script>  
 
 
<script src="<?php echo base_url();?>/partnerIT/js/scripts.js"></script>
 
</body>

</html>