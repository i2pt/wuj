<?php
include "configuration.php"
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Home of Dr. Jingxian Wu</title>

<!--
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<style type="text/css">
</style>
-->

<link type="text/css" rel="stylesheet" href="mystyle.css">

</head>


<body>



<div id="wrap"> <!-- #wrap - for centering -->

<!-- Web page header, shared by all pages -->
<?php 
	$headerTitle1="Dr. Jingxian Wu";
	$headerTitle2="Department of Engineering Science <br /> Sonoma State University";
	include $layout . "header.php"
?>

<div id="content"> <!-- #content wrapper -->

<!-- Navigation Bar, shared by all pages -->
<?php
	include $layout . "navibar.php"
?>

<!-- Begin #main-content -->
<div id="main-content">


  <div class="category">
  	<h2 class="category-title">
  	<a href="research/research.php"> Research </a>
  	</h2>
  	<div class="category-body">
  		<p> Publications, Resources, more ... </p>
  	</div>
  
  </div>
 
  <div class="category">
  	<h2 class="category-title">
 			<a href="teaching/teaching.php"> Teaching </a> 
  	</h2>
  	<div class="category-body">
  		<p> CES 450 Data Communication, CES 550 Digital Data Transmissions, more ... </p>
  	</div>
  
  </div>
   
  <div class="category">
  	<h2 class="category-title">
  	Curriculum Vitae
  	</h2>
  	<div class="category-body">
  		<p> Education, Research Interests,  more ... </p>
  	</div>
  </div> 
  
  <div class="category">
  	<h2 class="category-title">
  	Albums
  	</h2>
  	<div class="category-body">
  		<p> Sonoma State University, White Mountain,  more ... </p>
  	</div>
  </div> 
  
  <div class="category">
  	<h2 class="category-title">
  	Links
  	</h2>
  	<div class="category-body">
  		<p> Sports, Rohnert Park,  more ... </p>
  	</div>
  </div> 
  
  <div class="category">
  	<h2 class="category-title">
  	Contact Me
  	</h2>
  	<div class="category-body">
  		<p> Email, Guest Book,  more ... </p>
  	</div>
  </div> 
  

  
  <h2 class="date-header">Monday, June 13, 2005</h2>
  
  
  
     
  <!-- Begin .post -->
  <div class="post"><a name="111870482160895721"></a>
     
    
    <h3 class="post-title">
	 
	 How to password protect a website
	 
    </h3>
    
     
    <div class="post-body">
    
      <p>1. Create the file <em>.<strong>htaccess</strong></em> in the folder that needs password protect.<br /><br /><span style="color:#3366ff;">Example:</span><br /><span style="color:#3366ff;"></span><br /><span style="color:#3366ff;">If the contents in the folder <em><strong>/www/diary</strong></em> (including all the sub-folders) needs to be password protected, create the file <em><strong>.htaccess</strong></em> in the folder <em><strong>/www/diary.</strong></em><br /><br /></span>2. Example contents of the file <em><strong>.htaccess </strong></em><br /><strong><em></em></strong><br /><span style="color:#3366ff;"><em>AuthType Basic<br />AuthName "Password Required"<br />AuthUserFile /users/c/jw87c/htpasswd/password.file<br />Require user jingxianw jw87c<br /></em><br /><em>AuthName</em>: the phrase that is going to be displayed in the password dialoge box</span><br /><span style="color:#3366ff;"><em>AuthUserFile</em>: the file storing the password, generated with the command <strong>htpasswd.</strong></span><br /><span style="color:#3366ff;"><em>Require user</em>: the user names that allow to access the website</span>.<br /><br />3. Use the command <strong>htpasswd</strong> generate the password file.<br /><br /><span style="color:#3366ff;">Example: </span><br /><span style="color:#3366ff;"></span><br /><span style="color:#3366ff;"><strong>htpasswd <em>-c /users/c/jw87c/htpasswd/password.file jingxianw</em></strong></span><br /><span style="color:#3366ff;"><strong>htpasswd <em>/users/c/jw87c/htpasswd/password.file jw87c</em></strong></span><em> </em><br /><strong><span style="color:#3366ff;"></span></strong><br /><span style="color:#3366ff;"><strong>-c: </strong>create a new password file. If the file exists, all the contents will be override.</span><br /><br /><span style="color:#ff6600;">Notice (Security):</span><br /><span style="color:#ff6600;"></span><br /><span style="color:#ff6600;">The password file must be in a place that can not be accessed by the web browser. For example, if the web site is restricted to <strong><em>/users/c/jw87c/www/</em></strong>, then the password file should not be placed inside any subfolder of <strong><em>/users/c/jw87c/www/</em></strong>.</span><br /><span style="color:#ff6600;"></span><br /><span style="color:#000000;">(P.S. In order for the <strong><em>.htaccess</em></strong> working, the Apache server configuration directive <em>AllowOveride </em>must be set to <em>All </em>or <em>AuthConfig. </em></span>The AllowOveride directive is usually set inthe file <em><strong>/etc/httpd/conf/httpd.conf.)</strong></em><br /><span style="color:#ff0000;"></span><br /><span style="color:#ff0000;"></span></p>
    
    </div>
    
    <p class="post-footer">posted by Jingxian Wu at 
      <a href="http://www.missouri.edu/~jw87c/blogTech/2005/06/how-to-password-protect-website.html" title="permanent link">4:12 PM</a> 
       |
         <a class="comment-link" href="http://www.blogger.com/comment.g?blogID=13646871&amp;postID=111870482160895721"location.href=http://www.blogger.com/comment.g?blogID=13646871&amp;postID=111870482160895721;>0 comments</a>
       <span class="item-control admin-1785120863 pid-1040488860"><a style="border:none;" href="http://www.blogger.com/post-edit.g?blogID=13646871&amp;postID=111870482160895721&amp;quickEdit=true" title="Edit Post"><span class="quick-edit-icon">&nbsp;</span></a></span></p>
  
  </div>
  <!-- End .post -->
  
  
   <!-- Begin #comments -->
 
  <!-- End #comments -->    
  
     
  <!-- Begin .post -->
  <div class="post"><a name="111869733679550645"></a>
     
    
    <h3 class="post-title">
	 
	 My first post
	 
    </h3>
    
     
    <div class="post-body">
    
      <p>This is my first post.</p>
    
    </div>
    
    <p class="post-footer">posted by Jingxian Wu at 
      <a href="http://www.missouri.edu/~jw87c/blogTech/2005/06/my-first-post.html" title="permanent link">2:14 PM</a> 
       |
         <a class="comment-link" href="http://www.blogger.com/comment.g?blogID=13646871&amp;postID=111869733679550645"location.href=http://www.blogger.com/comment.g?blogID=13646871&amp;postID=111869733679550645;>0 comments</a>
       <span class="item-control admin-1785120863 pid-1040488860"><a style="border:none;" href="http://www.blogger.com/post-edit.g?blogID=13646871&amp;postID=111869733679550645&amp;quickEdit=true" title="Edit Post"><span class="quick-edit-icon">&nbsp;</span></a></span></p>
  
  </div>
  <!-- End .post -->
  
  
   <!-- Begin #comments -->
 
  <!-- End #comments -->



  <hr />
</div><!-- End #main-content -->
</div><!-- End #content -->

<?php
	include $layout."sidebar.php"
?>

<div class="clear">&nbsp;</div>

<?php
	include $layout."footer.php"
?>

</div> <!-- end #wrap -->

<!-- c(~) -->
</body>
</html>


<?
?>
