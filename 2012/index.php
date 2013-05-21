<?php
include ('/home/a/arkmale/bespredel.su/public_html/forum/config.php');
mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect: " . mysql_error());
mysql_query("set names cp1251");
mysql_select_db($dbname);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="author" lang="en" content="..." />
        <meta name="copyright" lang="en" content="..." />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="robots" content="all,follow" />
        <link rel="shortcut icon" href="favicon.ico" />
        <link href="./css/reset.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="./css/main.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="./css/print.css" type="text/css" rel="stylesheet" media="print" />                
        <script src="./js/jquery/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="./js/functions.js" type="text/javascript"></script>
        <script src="./js/custom.js" type="text/javascript"></script>
        <title>#Bespredel community 2011: жизнь глазами беспредела, концептуальный треш, зоопарк вокруг нас.</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/number_slideshow.js"></script>
    </head>
    <body id="homepage">  

        <script language="javascript" type="text/javascript">
            $(function() {

                $("#number_slideshow1").number_slideshow({
                    slideshow_autoplay: 'enable',//enable disable
                    slideshow_time_interval: '5000',
                    slideshow_window_background_color: "#CCFFCC",
                    slideshow_window_padding: '0',
                    slideshow_window_width: '550',
                    slideshow_window_height: '332',
                    slideshow_border_size: '0',
                    slideshow_border_color: '#006600',
                    slideshow_show_button: 'enable',//enable disable
                    slideshow_show_title: 'enable',//enable disable
                    slideshow_button_text_color: '#FFF',
                    slideshow_button_background_color: '#66CC00',
                    slideshow_button_current_background_color: '#006600',
                    slideshow_button_border_color: '#006600',
                    slideshow_loading_gif: 'loading.gif',//loading pic position, you can replace it use youself gif.
                    slideshow_button_border_size: '0'
                });

            });
        </script>
              
        
        <div id="intro">
            <div class="w900 middle">
       
                <h1>#Bespredel community 2012</h1>                
         
            </div>
            <!-- / .w900 .middle -->      
        </div>
        <!-- / #intro -->       
        
        <hr />
        
        <div id="container">  
            <div class="w900 middle">
<center>                
       <div id="number_slideshow1" class="number_slideshow">
            <ul>
                <li><a href="#"><img src="slide/1.jpg" width="407" height="301" alt="Новый год 2012"/></a></li>
                <li><a href="#"><img src="slide/2.jpg" width="407" height="301" alt="За наше здоровье!"/></a></li>
                <li><a href="#"><img src="slide/3.jpg" width="407" height="301" alt="Дон Olegrus"/></a></li>
                <li><a href="#"><img src="slide/4.jpg" width="407" height="301" alt="Bespredel.SU Бессмертен"/></a></li>
            </ul>
            <ul class="number_slideshow_nav">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
            </ul>
            <div style="clear: both"></div>
        </div>
              </center>  
                <ul class="cols clearFix">


                    
                        

<?php

$query="SELECT * FROM pddd9_posts ORDER BY post_id DESC LIMIT 3";
$result=mysql_query($query);
$hist="HISTORY";
$huy="ХУЙ";

while($row = mysql_fetch_array( $result )) {
      echo "<li><div class='blog'>";
      echo "<p class='qoute'><img src='/new/img/cross.png'><span><h2><b><a href=".$forum."/forum/viewtopic.php?f=".$row['forum_id']."&t=".$row['topic_id'].">".$row['post_subject']."</a></b></h2></span> </p>";
      echo str_replace($hist, $huy, $bold_w)."<p>".substr($row['post_text'],0,300)."..</p><br />";
      echo "</div></li>";
 } 
echo mysql_error();

mysql_close();
?>


                </ul>
                <!-- / .cols .clearFix -->                    
         
            </div>
            <!-- / .w900 .middle -->      
        </div>
        <!-- / #container -->    
        
        <hr class="noPrint" />
        
        <div id="header">
            <div class="w900 middle">
       
                <a href="./" id="logo" title="Sunrise theme">Sunrise theme</a>
                
                <hr />

                <strong class="noScreen">Navigation:</strong>
                <ul id="navigation">
                    <li class="active"><a href="./" title="Домой"><span>BESPREDEL.SU</span></a></li>
                    <li><a href="./Forum" title="Форум"><span>Форум</span></a></li>
                    <li><a href="http://street.bespredel.su" title="Улица Великого Беспредела"><span>У.В.Б.</span></a></li>
                    <li><a href="../Photoshare" title="Photoshare"><span>Галерея</span></a></li>
		    <li><a href="http://www.youtube.com/user/mskBespredel" title="Видео"><span>Видео</span></a></li>

                    <li><a href="./Map" title="Карта"><span>Карта.</span></a></li>
                    <li><a href="./Forum/mchat.php" title="Чат"><span>Чат</span></a></li>

                </ul>  

            </div>
            <!-- / .w900 .middle -->      
        </div>
        <!-- / #header -->        
        
        <hr />
        
        <div id="footer">
            <div class="w900 middle clearFix">
                
                <p class="floatLeft">&copy; 2012 &ndash; <a href="./" title="Bespredel.SU">BESPREDEL.SU COMMUNITY</a></p>
                <p class="floatRight"><script type="text/javascript" src="../rantex.php"></script></p>
         
            </div>
            <!-- / .w900 .middl .clearFix -->      
        </div>
        <!-- / #footer -->    

 
        
    </body>
</html>
