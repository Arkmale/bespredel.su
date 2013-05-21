
   <? include ('./header.php'); ?>
       
        
        <hr />
<!-- / #content -->         
        <section id="container">  
        	
            <div id="w650">
            	
            	<!-- / СЛАЙДЕР -->              
            	    	<div id="slider">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            <a href="#">
            <img src="slide/img_3.jpg" alt="апрель 2010 moscow city" height="350px" width="100%">
            </a>
            <div class="tooltip">
            <h1>апрель 2010</h1>
            </div>
            </li>

            <li id="second" class="secondanimation">
            <a href="#">
            <img src="slide/img_2.jpg" alt="Jasna '12-13" height="350px">
            </a>
            <div class="tooltip">
            <h1>Bespredel in Jasna '12-13</h1>
            </div>
            </li>
            
            <li id="third" class="thirdanimation">
            <a href="#">
            <img src="slide/img_4.jpg" alt="Альпы: долина Шамони и Куршевель" height="350px" width="100%">
            </a>
            <div class="tooltip">
            <h1>Bespredel в Альпах</h1>
            </div>
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <a href="#">
            <img src="slide/img_5.jpg" alt="Альпы: долина Шамони и Куршевель" height="350px" width="100%">
            </a>
            <div class="tooltip">
            <h1>Bespredel в Альпах</h1>
            </div>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <a href="#">
            <img src="slide/img_6.jpg" alt="Альпы: долина Шамони и Куршевель" height="350px" width="100%">
            </a>
            <div class="tooltip">
            <h1>Bespredel в Альпах</h1>
            </div>
            </li>
            
            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
            	
<div id='cols3'>
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
                                ORDER BY post_id DESC LIMIT 5";

$result=mysql_query($query);

while($row = mysql_fetch_array( $result )) {
    echo "<div class='col'><img src='./img/calendar.png' width='10' height='12' alt='icon'>&nbsp;".$row['posttime']."";
    echo "&nbsp;&nbsp;&nbsp;<img src='./img/user.png' width='10' height='12' alt='icon'>&nbsp;<a href='#' title= 'Posts:&nbsp;".$row['user_posts']."; Registered: ".$row['regdate']."'>".$row['username']."</a><br/> ";
    

echo "<h3>".$row['forum_name']." <img src='../img/arrow-right.png' height='10'> <a href=/forum/viewtopic.php?p=".$row['post_id']."#p".$row['post_id'].">".$row['post_subject']."</a></h3>"; 

		     //preg_replace (что, на что, по строке)
$post_text = preg_replace('/\[\w+\:.*]/m', '', $row['post_text']);
$trim = preg_replace ('/^./','',$post_text);
$sub = substr($post_text, 0,2);
echo "<div class='col-text'><b>".$sub."</b>".substr($trim,1,2000)."</div></div><br/>";
             } 
echo mysql_error();

mysql_close(); ?> 
						<!-- / .cols3 -->
					</div>
                <!-- / .cols .clearFix -->     
           </div>
            <!-- / .w650 .middle -->   
        	<!-- / #right -->  
            <div id="w250">
<div class='cloud'>
            	<div class="street">Улица Беспредел</div>
 
            	<?php 
  $url = file_get_contents ( 'http://street.bespredel.su',"r" );

preg_match_all ("/<a\s*class=\"post_article\"\s*href=\"(.*)\">(.*)<\/a>/", $url, $text);

				foreach ($text[0] as $item) {
					echo $item."<br>";
				}
            	?>

            	<div class="street">Новое на Photoshare</div>
            	
            	<?php 
				foreach($ps->find('div.albumtxt a') as $ps_element)
				echo "<a href=http://photoshare.ru".$ps_element->href." target =_blank>".$ps_element->plaintext."</a><br/>";
            	?>
</div>
<div class='cloud'>
            	<?php 
            	//foreach($ps->find('span.grey,1') as $last)
				$last3 = $html->find('div#tags',0);
				echo $last3;
            	?>
</div>
            	</div>
<!-- / #right -->   
        </section>
<!-- / #content -->

<!-- / #MAIN --> 
</div>
		<div class="clear"></div>
<? include ('./footer.php'); ?>  