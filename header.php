
<?php
include ('/home/a/arkmale/bespredel.su/public_html/forum/config.php');
mysql_connect($dbhost, $dbuser, $dbpasswd)
        or die("Could not connect: " . mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_select_db($dbname);
?>

<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    	
        <meta charset="UTF-8">
        <meta name="author" lang="ru" content="BespredelSU">
        <meta name="description" content="" >
        <meta name="keywords" content="" >
        <meta name="robots" content="all,follow" >
        <link rel="shortcut icon" href="favicon.ico" >
        <link href="./css/reset.css" type="text/css" rel="stylesheet" media="screen,projection" >
        <link href="./css/main.css" type="text/css" rel="stylesheet" media="screen,projection" >
        <link href="./css/print.css" type="text/css" rel="stylesheet" media="print" >   
 		<link href="./css/stars.css" rel="stylesheet" />       
        <link rel="stylesheet" href="./css/hint.css"> 
        <link rel="stylesheet" href="./css/slide.css">           
        
        <script src="./js/functions.js"></script>
        <script src="./js/custom.js"></script>

	 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
        <title>#Bespredel community XX.XIII</title>


<script> function html_bgr() {document.documentElement.style.background='url(../img/background.png) repeat-x';
		document.body.style.background='url(../img/bg-header.png) no-repeat 50% 0';
		var h1Elements = document.getElementsByTagName('h1');
			for(var i = 0; i < h1Elements.length; i++) {
  				h1Elements[i].style.color = '#F3AB30';
			}}
</script>
<script> function html_bgr1() {document.documentElement.style.background='url(../img/background-night.png) repeat-x';
				document.body.style.background='url(../img/bg-header_night.png) no-repeat 50% 0';
				var h1Elements = document.getElementsByTagName('h1');
			for(var i = 0; i < h1Elements.length; i++) {
  				h1Elements[i].style.color = '#262626';
			}}</script>

    </head>
    <body id="homepage"> 
    	<?php include 'simple_html_dom.php'; 
    	$html = file_get_html('http://street.bespredel.su/');
		$ps = file_get_html('http://photoshare.ru/user/bespredel/');
    	?>



<!-- / #header -->  
<div id="main">
        <header id="header">
            <div class="w900 middle">
            	
            	   	<div id="circ1" onclick="html_bgr()" title="день"></div>
            	   	<div id="circ2" onclick="html_bgr1()" title="ночь"></div>


					
         <div id="wrapper">
                <a href="./" id="logo"></a>
         </div>
                <hr />
                
<!-- НАВИГАЦИЯ -->
                <div id="navigation"> 
                    <ul><li><a href="./about.php"><span class="hint  hint--bottom hint--success" data-hint="Зачем нам это всё">BESPREDEL.SU</span></a></li>
                    <li class="active"><a href="./forum"><span>Форум<img src="../img/menu_down_arrow.png" style="padding-left: 5px" alt="Bespredel Форум"></span></a>
                    	<ul>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=2">Первый</a></li>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=4">Online</a></li>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=7">Кухня</a></li>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=14">Движуха</a></li>    
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=16">Фильмы</a></li>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=17">Музыка</a></li>
                    		<li><a href="http://www.bespredel.su/forum/viewforum.php?f=18">Игры</a></li>           
                    	</ul>
                    </li>
                    		<li class="active"><a href="http://street.bespredel.su"><span>Улица Великого Беспредела</span></a></li>
               			    <li class="active"><a href="http://bespredel.photoshare.ru"><span>Галерея</span></a></li>
		  					<li class="active"><a href="http://www.youtube.com/user/mskBespredel"><span>Видео</span></a></li>
                </ul></div>  

            </div>
            <!-- ЗВЁЗДНОЕ НЕБО МЕРЦАНИЕ-->
                    <div class="stars"></div>
                    <div class="stars2"></div>
                    <div class="stars3"></div>
                    <div class="stars4"></div>
                    <div class="stars5"></div>
                    <div class="stars6"></div>
                    <div class="stars7"></div>
            <!-- / .w900 .middle -->      
        </header>
<!-- / #header -->          
<!-- / #intro -->  

        <div id="intro">

            <div class="w900 middle" style="cursor:pointer">
                <h1>bespredel.su</h1>
            </div>
<script type="text/javascript">
$(document).ready(function(){
	$('#logo').draggable();
});
function setCookie(name, value, expires, path, domain, secure) {
    if (!name || !value) return false;
    var str = name + '=' + encodeURIComponent(value);
    
    if (expires) str += '; expires=' + expires.toGMTString();
    if (path)    str += '; path=' + path;
    if (domain)  str += '; domain=' + domain;
    if (secure)  str += '; secure';
    
    document.cookie = str;
    return true;
}
function getCookie(name) {
    var pattern = "(?:; )?" + name + "=([^;]*);?";
    var regexp  = new RegExp(pattern);
    
    if (regexp.test(document.cookie))
    return decodeURIComponent(RegExp["$1"]);
    
    return false;
}
</script>			
            <!-- / .w900 .middle -->      
        </div>
<!-- / #intro -->    