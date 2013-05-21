<?php
include ('/home/a/arkmale/bespredel.su/public_html/forum/config.php');
mysql_connect($dbhost, $dbuser, $dbpasswd)
        or die("Could not connect: " . mysql_error());
mysql_query("set names utf-8");
mysql_select_db($dbname);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="en" />
        <meta name="author" lang="en" content="Arkanum SunShanti.RU" />
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

        <title>#Bespredel community XX.XIII</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/number_slideshow.js"></script>
    </head>
    <body id="homepage"> 
      
<!-- / #header -->  
        <div id="header">
            <div class="w900 middle">
                <a href="./" id="logo" title="Bespredel theme">Bespredel theme</a>
                <hr />

                <strong class="noScreen">Navigation:</strong>
                <ul id="navigation">
                    <li class="active"><a href="./" title="Главная"><span>BESPREDEL.SU</span></a></li>
                    <li><a href="./forum" title="Форум"><span>Forum</span></a></li>
                    <li class="active"><a href="http://street.bespredel.su" title="Улица Великого Беспредела"><span>Y.B.</span></a></li>
                    <li><a href="http://bespredel.photoshare.ru" title="Photoshare"><span>Photoshare</span></a><a href="../photoshare" title="Photoshare">[+1]</a></li>
		    <li class="active"><a href="http://www.youtube.com/user/mskBespredel" title="Youtube Video"><span>Youtube</span></a></li>

                    <li><a href="./map" title="Карта"><span>Map</span></a></li>

                </ul>  

            </div>
            <!-- / .w900 .middle -->      
        </div>
<!-- / #header -->          
<!-- / #intro -->  
        <div id="intro">
            <div class="w900 middle">
       
                <h1>HAPPY #Bespredel XX.XIII YEAR!<br>
                	
                </h1> 
               
            </div>
            <!-- / .w900 .middle -->      
        </div>
<!-- / #intro -->       
        
        <hr />
<!-- / #content -->         
        <div id="container">  
            <div class="w900 middle">


    <?php

$query="SELECT user_id,
                    poster_id,
                        post_id,
                            forum_name,
                                username,
                                    post_text,
                                        topic_id,
                                            post_subject,
                                                user_posts,
                        from_unixtime(post_time, '%D %M %k:%i') as posttime,
                        from_unixtime(user_regdate, '%D %M %Y %k:%i') as regdate
            FROM pddd9_forums AS forums
                 JOIN pddd9_users AS users
            LEFT JOIN pddd9_posts AS posts 
                        ON forums.forum_id = posts.forum_id
                        AND users.user_id = posts.poster_id
                                ORDER BY post_id DESC LIMIT 10";

$result=mysql_query($query);

while($row = mysql_fetch_array( $result )) {
    echo "<div id='cols3'><div class='col'><b><img src='./img/calendar.png' width='10' height='12'>&nbsp;".$row['posttime']."";
    echo "&nbsp;&nbsp;&nbsp;<img src='./img/user.png' width='10' height='12'>&nbsp;<a href='#' title= 'Posts:&nbsp;".$row['user_posts']."; Registered: ".$row['regdate']."'>".$row['username']."</a></b><br/> ";
    
    echo "<h3>".$row['forum_name']."</h3>";
//    echo "<div class='fb-send' data-href=http://www.bespredel.su/forum/viewtopic.php?&p=".$row['post_id']."#p".$row['post_id']."  data-font='arial'>";   
//  echo "</div>";
echo "<h4><a href=/forum/viewtopic.php?p=".$row['post_id']."#p".$row['post_id'].">".$row['post_subject']."</a></h4>"; 

		     //preg_replace (что, на что, по строке)
$post_text = preg_replace('/\[\w+\:.*]/m', '', $row['post_text']);
$trim = preg_replace ('/^./','',$post_text);
$sub = substr($post_text, 0,1);
echo "<div class='col-text'><font size='3px'><b>".$sub."</b></font>".substr($trim,0,2000)."</div><br/>";
   
             } 
echo mysql_error();

mysql_close(); ?> 
                    </ul>    
                <!-- / .cols .clearFix -->      
            </div>
            <!-- / .w900 .middle -->      
        </div>
<!-- / #content -->  
<!-- / #footer -->  
<div id="footer">
            <div class="w900 middle clearFix">
                
                <p class="floatLeft">&copy; 2013 &ndash; <a href="./" title="Bespredel.SU">BESPREDEL.SU COMMUNITY</a><br/>
                <script type="text/javascript" src="../rantex.php"></script></p>
                <p class="floatRight"></p>
         
            </div>    
        </div>
<!-- / #footer -->  

    </body>
</html>
