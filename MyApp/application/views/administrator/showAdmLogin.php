<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title><?php echo $page_title;?></title>
 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"87e617fe26d58954b6ac66b8a081629a",petok:"ef4497f35f8a6b7bc1e6028fb5b98a002056f493-1447830371-1800",zone:"adbee.technology",rocket:"0",apps:{"ga_key":{"ua":"UA-49262924-2","ga_bs":"2"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3d247a80cdfa/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
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
<div id="login-full-wrapper">
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
<div id="login-box-inner">
<form role="form" action="http://cube.adbee.technology/index.html">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control" type="text" placeholder="Email address">
</div>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" class="form-control" placeholder="Password">
</div>

<div class="row">
<div class="col-xs-12">
<button type="submit" class="btn btn-success col-xs-12">Login</button>
</div>
</div>
<div id="remember-me-wrapper">
<div class="row">
<!---<div class="col-xs-6">
<div class="checkbox-nice">
<input type="checkbox" id="remember-me" checked="checked"/>
<label for="remember-me">
Remember me
</label>
</div>
</div>-->
<a href="<?php echo base_url();?>index.php/TestApp/forgotPassword/" id="login-forget-link" class="col-xs-12">
Forgot password?
</a>
</div>
</div>	
<p class="social-text">
Do not have an account?
<a href="<?php echo base_url();?>index.php/TestApp/register/">
Register now
</a>
</p>
<!--
<div class="row">
<div class="col-xs-12 col-sm-6">
<button type="submit" class="btn btn-primary col-xs-12 btn-facebook">
<i class="fa fa-facebook"></i> facebook
</button>
</div>
<div class="col-xs-12 col-sm-6">
<button type="submit" class="btn btn-primary col-xs-12 btn-twitter">
<i class="fa fa-twitter"></i> Twitter
</button>
</div>
</div>-->
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

<?php include('skin.php');?>
 
<script src="<?php echo base_url();?>/partnerIT/js/demo-skin-changer.js"></script>  
<script src="<?php echo base_url();?>/partnerIT/js/jquery.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/jquery.nanoscroller.min.js"></script>
<script src="<?php echo base_url();?>/partnerIT/js/demo.js"></script>  
 
 
<script src="<?php echo base_url();?>/partnerIT/js/scripts.js"></script>
 
</body>

</html>