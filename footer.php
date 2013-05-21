
  <?php 
date_default_timezone_set('Russia/Moscow'); // CDT
$current_date = date('H:i:s');
$night='18:00:00';
$day='10:00:00';

if ($current_date>$day && $current_date<$night) {
	
	echo "<script> html_bgr(); </script>";
} else {
	
	echo "<script> html_bgr1(); </script>";
};
 ?>

<!-- / #footer -->  
<footer id="footer">

                <p class="floatLeft">&copy; 2007 &ndash; 2013 <a href="./">BESPREDEL.SU COMMUNITY</a> может содержать контент 18+<br/>Все права защищены.
                <!--<script type="text/javascript" src="../rantex.php"></script>--></p>
                <p class="floatRight">

<a href="https://www.facebook.com/groups/bespredelsu" target="_blank"><img src="../img/facebook.png" alt="bespredel facebook"></a>
<a href="http://vk.com/club1096206" target="_blank"><img src="../img/vkontakte.png" alt="bespredel vkontakte"></a>
<a href="https://twitter.com/BespredelSU" target="_blank"><img src="../img/twitter.png" alt="bespredel twitter"></a>
&nbsp;

<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t44.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->

</p>
         
        </footer>
<!-- / #footer -->  

   </body>
</html>