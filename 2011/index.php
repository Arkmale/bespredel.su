<?php
include ('/home/a/arkmale/bespredel.su/public_html/forum/config.php');
mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect: " . mysql_error());
mysql_query("set names cp1251");
mysql_select_db($dbname);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>#Bespredel community 2011: жизнь глазами беспредела, концептуальный треш, зоопарк вокруг нас.</title>
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="style.css" />

<style type="text/css">

		html { 
			background: url(http://www.1zoom.ru/big2/5/232164-Leyzif2000.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}


#menu {
	background: #333;
	float: left;
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}
#menu li {
	float: left;
	font: 67.5% "Lucida Sans Unicode", "Bitstream Vera Sans", "Trebuchet Unicode MS", "Lucida Grande", Verdana, Helvetica, sans-serif;
	margin: 0;
	padding: 0;
}
#menu a {
	background: #333 url("images_menu/seperator.gif") bottom right no-repeat;
	color: #ccc;
	display: block;
	float: left;
	margin: 0;
	padding: 8px 12px;
	text-decoration: none;
}
#menu a:hover {
	background: #2580a2 url("images_menu/hover.gif") bottom center no-repeat;
	color: #fff;
	padding-bottom: 8px;
}

#message_box { 
position: absolute; 
top: 30px;
left: 0px; 
z-index: 10; 
background:#ffc;
padding:5px;
border:2px solid #CCCCCC;
text-align:center; 
font-weight:bold; 
width:99%;
}
</style>

<script type="text/javascript" src="js/jQuery1.2.6.js"></script>
<script type="text/javascript" language="javascript">
        $(document).ready(function()
        {
        $(window).scroll(function()
        {
        $('#message_box').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350}); 
        });
        $('#close_message').click(function()
        {
        $('#message_box').animate({top:"+=15px",opacity:0 }, "slow");
        });
        });
  </script>

<script language=JavaScript>
      <!--
var message="Водить жалом разрешаю!";
///////////////////////////////////
      function clickIE4(){
      if (event.button==2){
      alert(message);
      return false;
      }
      }
function clickNS4(e){
      if (document.layers||document.getElementById&&!document.all){
      if (e.which==2||e.which==3){
      alert(message);
      return false;
      }
      }
      }
if (document.layers){
      document.captureEvents(Event.MOUSEDOWN);
      document.onmousedown=clickNS4;
      }
      else if (document.all&&!document.getElementById){
      document.onmousedown=clickIE4;
      }
document.oncontextmenu=new Function("alert(message);return false")
// --> 
      </script>

</head>
<body>

<ul id="menu">
	<li><a href="http://www.bespredel.su" title="Главная страница Bespredel.su">BESPREDEL.SU</a></li>
	<li><a href="http://street.bespredel.su" title="Улица великого Беспредела">Улица Беспредела</a></li>
	<li><a href="http://bespredel.su/forum/index.php" title="Forum">Форум</a></li>
	<li><a href="http://bespredel.su/forum/mchat.php" title="Chat">Чат</a></li>
	<li><a href="http://www.youtube.com/user/mskBespredel" title="Youtube">Youtube</a></li>
	<li><a href="http://www.bespredel.su/map" title="Maps">Карта</a></li>
	<li><a href="http://www.bespredel.su/photoshare" title="Gallery">Галерея</a></li>
</ul>

<!--
<div id="message_box"><img id="close_message" style="float:right;cursor:pointer"  src="images/cross.png" />
<center>
Всех с последней неделей апреля!
<br />
</center>
</div>
-->

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

<br /><br />
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <!--DWLayoutTable-->
  <tr>
    <td height="100" colspan="5" valign="top"><div align="center">
      <p><br /><a href="http://street.bespredel.su"><img src="/img/bg.gif" alt="#B" border="0"/></a></p>
 <br />       <p>
	    <a href="/forum"><img src="/img/_forum.png"></a>
		          </p>
        </div></td>
  </tr>
  <tr>
    <td width="269" height="18"></td>
    <td colspan="3" valign="top" align="center">
</td>
    <td width="254"></td>
  </tr>
  <tr>
    <td height="1"><img src="spacer.gif" alt="" width="269" height="1" /></td>
    <td width="12"></td>
    <td width="433"></td>
    <td width="39"></td>
    <td></td>
  </tr>
</table>

<br/>
<div id="wrap">
   <div id="content">
    <div class="inner">

<?php

$query="SELECT * FROM pddd9_topics ORDER BY topic_replies DESC LIMIT 3";
$result=mysql_query($query);

while($row = mysql_fetch_array( $result )) {
      echo "<div class='blog'>";
      echo "<h2><b>".substr($row['topic_title'],0,7)."..</b></h2>";
	echo "<h3><b>[".$row['topic_replies']."]</b></h3>";
      echo "</div>";
 } 

echo mysql_error();

$query="SELECT * FROM pddd9_posts ORDER BY post_id DESC LIMIT 3";
$result=mysql_query($query);
$hist="HISTORY";
$huy="ХУЙ";

while($row = mysql_fetch_array( $result )) {
      echo "<div class='blog'>";
      echo "<p class='qoute'><span><i><b><a href=".$forum."/forum/viewtopic.php?f=".$row['forum_id']."&t=".$row['topic_id'].">".$row['post_subject']."</a></b></i></span> </p>";
      echo str_replace($hist, $huy, $bold_w)."<p><i>".substr($row['post_text'],0,300)."..</i></p><br />";
      echo "</div>";
 } 
echo mysql_error();

mysql_close();
?>
<center><iframe src="http://www.facebook.com/plugins/like.php?href=www.bespredel.su&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="1" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></center>
    </div>
  </div>
  <div id="footer">
    <div id="ftlink"> <a href="http://www.photoshare.ru/user/bespredel/">PHOTOSHARE</a> | <a href="http://www.youtube.com/user/mskBespredel">YOUTUBE</a> | <a href="http://www.vkontakte.ru/club1096206">ВКОНТАКТЕ</a> | <a href="http://www.facebook.com/group.php?gid=118770608149707">FACEBOOK</a> | <a href="http://www.bespredel.su/map">КАРТА</a> | <a href="http://www.bespredel.su/chat">IRC-ЧАТ</a> | <a href="http://bespredel.su/history">ИСТОРИЯ</a></div>
    <p id="copyright">© MMXI - #B Production</p>
     <script type="text/javascript" src="rantex.php"></script><p>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t50.15;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
  </div>
</div>
</body>
</html>
