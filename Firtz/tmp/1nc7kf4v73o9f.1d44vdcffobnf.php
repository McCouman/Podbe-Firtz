<!DOCTYPE html>
<html lang="<?php echo substr($feedattr['language'],0,2); ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $feedattr['title']; ?><?php if ($showpage): ?> - <?php echo basename($showpage,'.html'); ?><?php endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php echo $feedattr['description']; ?>"/>
    <meta name="author" content="<?php echo Base::instance()->raw($feedattr['author']); ?>"/>
    <?php if ($feedattr['image']): ?>
      <meta property="og:image" content="<?php echo $feedattr['image']; ?>"/>
    <?php endif; ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!$showpage): ?><?php echo $og['title']; ?><?php else: ?><?php echo basename($showpage,'.html'); ?><?php endif; ?>"/>
    <meta property="og:url" content="<?php if (!$showpage): ?><?php echo $og['url']; ?><?php else: ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($showpage); ?><?php endif; ?>"/>
    <meta property="og:site_name" content="<?php echo $feedattr['title']; ?>"/>
    <?php if ($og['audio']): ?>
      <meta property="og:<?php echo $og['audio']['typename']; ?>" content="<?php echo $og['audio']['url']; ?>"/>
      <meta propertyp="og:<?php echo $og['audio']['typename']; ?>:type" content="<?php echo $og['audio']['type']; ?>"/>
    <?php endif; ?>
    
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo $BASEURL; ?>css/foundation.css" />
	<link href="<?php echo $BASEURL; ?>pwp/static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo $BASEURL; ?>css/font-css/fontello.css">
    <link rel="stylesheet" href="<?php echo $BASEURL; ?>css/font-css/animation.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo $BASEURL; ?>css/font-css/fontello-ie7.css">
    <![endif]-->
    
    
    <!--JS-->
	<script src="<?php echo $BASEURL; ?>js/vendor/jquery.js"></script>
	<script src="<?php echo $BASEURL; ?>pwp/static/podlove-web-player.js"></script>
    <script src="<?php echo $BASEURL; ?>js/vendor/modernizr.js"></script>
    
    <!--apple-icons-->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $feedattr['image']; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $feedattr['image']; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $feedattr['image']; ?>">
	<!--favicon-->
	<link rel="shortcut icon" href="http://podbe.img.wikibyte.org/Podbe-Icon/podbe-icon.podbe.ico">
    

    <?php foreach ((glob($templatepath.'/head/*.html')?:array()) as $template): ?>
      <?php echo $this->render('head/'.basename($template),$this->mime,get_defined_vars()); ?>
    <?php endforeach; ?>




   
<?php if ($feedattr['color']): ?> 
<style>
div#jumbo {
	background: url(http://podbe.de/wp-content/themes/Foundation-master/img/bg-dblue.png) <?php echo $feedattr['dark']; ?> ;
	border-bottom: 1px solid #eee;
}
div.orbit-bullets-container,
div.orbit-slide-number {
	display:none !important;
}
i.icon-mic,
i.icon-tags,
i.icon-heart-empty,
i.icon-network {
	color: #FFF;
	background: #94ADB9;
	padding: 5px 3px;
	border-radius: 50%;
}
i.icon-rss,
i.icon-rss-squared {
	color: #F57F00;
}
ul.off-canvas-list li label {
	background: <?php echo $feedattr['color']; ?> ;
}
.podlovewebplayer_wrapper {
	background: transparent !important;
}
.mejs-button.mejs-volume-button button, 
.mejs-controls .mejs-mute button { color: #ffffff !important; }
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
	background: #e6e6e6 !important;
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
	background: <?php echo $feedattr['dark']; ?> !important;
}
.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls .mejs-time-rail .mejs-time-total 
.mejs-time-loaded { 
	background: <?php echo $feedattr['light']; ?> !important; 
}
.mejs-controls .mejs-time-rail .mejs-time-total {
	background: <?php echo $feedattr['dark']; ?> !important; 
}
.mejs-controls .mejs-time-rail .mejs-time-current {
	background: #e6e6e6 !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_meta,.podlovewebplayer_wrapper 
.podlovewebplayer_meta .subtitle,.podlovewebplayer_wrapper 
.podlovewebplayer_meta h3,.podlovewebplayer_wrapper .podlovewebplayer_meta h3 a,
.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox,
.podlovewebplayer_wrapper .podlovewebplayer_meta .togglers{
	color: #ffffff !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_top,.podlovewebplayer_wrapper .podlovewebplayer_meta{
	background: <?php echo $feedattr['color']; ?> !important;
}
.podlovewebplayer_meta .bigplay{
	color: #ffffff;
	border-color: #ffffff !important;
} 
.podlovewebplayer_meta .bigplay:hover,
.podlovewebplayer_meta .bigplay:active,
.podlovewebplayer_meta .bigplay.playing:hover,
.podlovewebplayer_meta .bigplay:focus,
.podlovewebplayer_meta .bigplay:hover,
.podlovewebplayer_meta .bigplay:active {
	border: 5px solid #ffffff !important;
	-webkit-text-shadow: 0px 0px 10px #ffffff !important;
	-moz-text-shadow: 0px 0px 10px #ffffff !important;
	-o-text-shadow: 0px 0px 10px #ffffff !important;
	text-shadow: 0px 0px 10px #ffffff !important;
}  
.podlovewebplayer_meta .bigplay {
	color: #ffffff !important;
} 
.podlovewebplayer_meta .bigplay.playing:active {
	color:#ffffff !important; 
	border-color:#ffffff !important;
	text-shadow:0px 0px 4px #ffffff !important;
	text-decoration:none;
	filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;
}
.podlovewebplayer_meta .togglers .infobuttons,.podlovewebplayer_meta .togglers .infobuttons a,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a{
	color:#ffffff;
	text-shadow:0px 0px 1px #ffffff !important; 
	text-decoration:none;
}
.podlovewebplayer_meta .togglers .infobuttons:hover,
.podlovewebplayer_meta .togglers .infobuttons a:hover,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons:hover,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a:hover{
	text-shadow:0px 0px 4px #ffffff !important; 
	text-decoration:none;
	filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;
}
.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox{
	background: <?php echo $feedattr['color']; ?> !important;
	border-left:3px <?php echo $feedattr['color']; ?> !important;
	border-right:3px <?php echo $feedattr['color']; ?> !important;
}
/*hier*/
.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls .mejs-time-rail .mejs-time-total .mejs-time-loaded {
	background: <?php echo $feedattr['light']; ?>!important;
}


.podlovewebplayer_wrapper .podlovewebplayer_controlbox{
	background: <?php echo $feedattr['dark']; ?> !important;
	border-left:3px <?php echo $feedattr['dark']; ?> solid !important;
	border-right:3px <?php echo $feedattr['dark']; ?> solid !important;
}
.mejs-controls .mejs-play button{
	background-position:0 0;
}
.mejs-controls .mejs-pause button{
	background-position:0 -16px;
}
.mejs-controls .mejs-stop button{
	background-position:-112px 0;
}
.mejs-controls .mejs-fullscreen-button button{
	background-position:-32px 0;
}
.mejs-controls .mejs-unfullscreen button{background-position:-32px -16px;}
.mejs-controls .mejs-mute button{background-position:-16px -16px;}
.mejs-controls .mejs-unmute button{background-position:-16px 0;}
.mejs-controls .mejs-captions-button button{background-position:-48px 0;}
.mejs-controls .mejs-loop-off button{background-position:-64px -16px;}
.mejs-controls .mejs-loop-on button{background-position:-64px 0;}
.mejs-controls .mejs-backlight-off button{background-position:-80px -16px;}
.mejs-controls .mejs-backlight-on button{background-position:-80px 0;}
.mejs-controls .mejs-sourcechooser-button button{background-position:-128px 0;}
.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls {
	background: <?php echo $feedattr['color']; ?> !important;
	-webkit-box-shadow: 0px 1px transparent !important;
	-moz-box-shadow: 0px 1px transparent !important;
	box-shadow: 0px 1px transparent !important;
}
.mejs-container .mejs-controls .mejs-time span{
	color:#111;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapterbox{
	border:0px <?php echo $feedattr['dark']; ?> solid !important;
	border-bottom:0px <?php echo $feedattr['dark']; ?> solid !important;
	margin-top: 20px;
}
.podlovewebplayer_wrapper .podlovewebplayer_tableend{
	background: <?php echo $feedattr['color']; ?> !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr {
	background: #FFF !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr.active, 
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr.active:hover {
	background: <?php echo $feedattr['light']; ?> !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_tableend {
	background: transparent !important;
	-webkit-box-shadow: 0px 0px transparent !important;
}
.podlovewebplayer_meta .bigplay, 
.podlovewebplayer_meta .togglers .infobuttons, 
.podlovewebplayer_meta .togglers .infobuttons a, 
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons, 
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a {
	color: #ffffff !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_meta .bigplay {
	border: 5px solid #ffffff !important;
}
.mejs-container .mejs-controls .mejs-time span{
	color: #ffffff !important;
}
.podlovewebplayer_chapters * {
	height: 40px;
}
.podlovewebplayer_wrapper .podlovewebplayer_top, .podlovewebplayer_wrapper .podlovewebplayer_meta {
	-webkit-border-top-left-radius: 0px !important;
	-webkit-border-top-right-radius: 0px !important;
	-moz-border-radius-topleft: 0px !important;
	-moz-border-radius-topright:  0px !important;
	border-top-left-radius: 0px !important;
	border-top-right-radius: 0px !important;
}
</style>
<?php endif; ?>
    
  </head>
<body>

<div class="off-canvas-wrap">
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title"><a href="<?php echo $BASEURL; ?>" style="color: #D3D3D3;"><img style="width: 120px; margin-top: -4px;" src="http://podbe.img.wikibyte.org/Podbe-logo/logo3-280x87.podbe.png"> <i>Podcast</i></a></h1>
      </section>
    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Menu</label></li>
        <li><center><a style="background:#fff !important;" class="homebut" href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/"><img style="margin-left: -5px;" src="http://podbe.img.wikibyte.org/Podbe-logo/logo4-280x88.podbe.png" /></a></center></li>
	  </ul>
		<!-- page menu li -->	
		<ul class="off-canvas-list">
			<?php foreach ((glob($templatepath.'/pages/*',GLOB_ONLYDIR)?:array()) as $dir): ?>
				<li><label><?php echo basename($dir); ?></li>
				<?php foreach ((glob($templatepath.'/pages/'.basename($dir).'/*.html')?:array()) as $template): ?>
					<li><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($dir); ?>/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a></li>
				<?php endforeach; ?>	
			<?php endforeach; ?>
				<li><label>Abonnieren</label></li>	
				<?php foreach (($feedattr['audioformats']?:array()) as $format): ?>
				<li><a href="<?php echo $feedattr['baserel']; ?><?php echo $format; ?><?php echo $extxml; ?>"><i class="icon-rss-squared"></i> <?php echo $format; ?></a></li>
			<?php endforeach; ?>
				<?php if ($feedattr['itunes']): ?>
				<li><a href="<?php echo $feedattr['itunes']; ?>"><i class="icon-rss"></i> iTunes</a></li>
			<?php endif; ?>
			<script type="text/javascript">
				//if (navigator.userAgent.match(/iPhone|iPad|iPod/i))				
				document.write('<li><a href="<?php echo str_replace('http://','podcast://',$feedattr['instacast']); ?>"><i class="icon-rss"></i> Instacast</a></li>');
			</script>
    	</ul>
		<!-- //page menu li -->
		
		<ul class="off-canvas-list">
       		<li><label>Interessante Projekte</label></li>
        </ul>
        <br>
		  <center>
		  	<a href="http://podunion.com/">
		  		<img class="img responsive" src="<?php echo $BASEURL; ?>img/werber-podunion.png">
		  	</a>
		  	<hr />
		  	<a href="http://firtz.org/">
		  		<img class="img responsive" src="<?php echo $BASEURL; ?>img/werber-firtz.png">
		  	</a>
		  	<hr />
		  </center>
		
    </aside>

<section class="main-section">
<!-- content goes here -->
<div id="jumbo">
<div class="row">
<div class="large-12 columns">
		<center>
		<br>
		<br>
			<h1 style="color: #fff;"><?php echo $feedattr['title']; ?></h1>
        	<p style="color: #eee;" class="lead"><?php echo $feedattr['description']; ?></p>
<!--
<ul class="example-orbit-content" data-orbit>
  <li>
    <img src="http://foundation.zurb.com/docs/assets/img/examples/andromeda-orbit.jpg" alt="slide 2" />
    <div class="orbit-caption">
      <h1 style="color: #fff;"><?php echo $feedattr['title']; ?></h1>
      <p style="color: #eee;" class="lead"><?php echo $feedattr['description']; ?></p>	
    </div>
  </li>
  <?php if (!$showpage): ?>
  	
  		<?php foreach (($items?:array()) as $item): ?>			
  			<li>
    			<img src="http://foundation.zurb.com/docs/assets/img/examples/andromeda-orbit.jpg" alt="slide 1" />
    			<div class="orbit-caption">		
      				<h1 style="color: #fff;"><a href="<?php if ($singlepage==false): ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?><?php endif; ?>" name="<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a></h1>
      				<p style="color: #eee;" class="lead"><?php echo Base::instance()->raw($item['description']); ?></p>
    			</div>
  			</li>
  		<?php endforeach; ?>
  	
  <?php endif; ?> 
</ul>
-->
		
		
		<br>		
		</center>
</div>        
</div> 
</div>






<!--navigation-->
	<div data-magellan-expedition="fixed">
  		<div class="row">
		<div class="large-12 columns">
  		<dl class="sub-nav"> 			
  			<?php if ($page!=0): ?>
  				<?php if ($page>1): ?>
    				<dd data-magellan-arrival="build"><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page-1; ?>"><i class="icon-left-open"></i></a></dd>
  				<?php endif; ?>
  			<?php endif; ?>
  					<dd data-magellan-arrival="build"><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/Podcast/About">About</a></dd>
					<dd data-magellan-arrival="build"><a href="#" data-reveal-id="myModal">Infos</a></dd>
				<?php foreach ((glob($templatepath.'/pages/*.html')?:array()) as $template): ?>
					<dd data-magellan-arrival="build"><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a></dd>
				<?php endforeach; ?>
				
  			<?php if ($page!=0): ?>
  				<?php if ($page<$maxpage): ?>
  					<dd class="right" data-magellan-arrival="build">
  					<a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page+1; ?>"><i class="icon-right-open"></i></a></dd>
				<?php endif; ?>
  			<?php endif; ?>
  		</dl>
		</div>
		</div>
	</div>
<!--//navigation-->




<div class="row active">
<div class="large-12 columns">
 <br>
 <br>

<?php if (!$showpage): ?>
	
	   <?php foreach (($items?:array()) as $item): ?>			
			<!--episode title-->
			<h2 class="active" name="build"><a href="<?php if ($singlepage==false): ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?><?php endif; ?>" name="<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a></h2>
			<!--date-->
			<p style="color: #A5B2B9">Erstellt am: <?php echo Base::instance()->format($dict_pubdate,strtotime($item['pubDate'])); ?></p>
			<?php foreach ((glob($templatepath.'/header/*.html')?:array()) as $template): ?>
				<?php echo $this->render('header/'.basename($template),$this->mime,get_defined_vars()); ?>
			<?php endforeach; ?>			
			<div class="row">	
			<div class="large-8 medium-8 columns">
			<!--player-->
			<?php if ($item['noaudio']==''): ?>
				<div><?php echo $this->render('podlove-player.html',$this->mime,get_defined_vars()); ?></div>				
				<!--//player-->
				<div class="row">
					<div class="large-6 medium-6 columns">
							<a href="#" style="width: 100%;" data-dropdown="up<?php echo $item['slug']; ?>" class="small alert round button dropdown"><i class="icon-down-open"></i>Download </a><br>
							<ul id="up<?php echo $item['slug']; ?>" data-dropdown-content class="f-dropdown">
 							<?php foreach (($item['audiofiles']?:array()) as $audiotype=>$audiofile): ?>
								<li><a title="download <?php echo $audiotype; ?> - size: <?php echo ceil($audiofile['length'] / 1048576); ?> MByte" href="<?php echo $audiofile['link']; ?>"><?php echo $audiotype; ?></a></li>
							<?php endforeach; ?>
							</ul>
					</div>
					<div class="large-6 medium-6 columns">
						<?php if ($feedattr['bitlove']): ?>
							<a href="#" style="width: 100%;" data-dropdown="up<?php echo $item['slug']; ?>3" class="small success round button dropdown"><i class="icon-down-open"></i> Bitlove </a><br>
								<ul id="up<?php echo $item['slug']; ?>3" class="f-dropdown" data-dropdown-content>
									<?php foreach (($feedattr['bitlove']?:array()) as $audiotype=>$bitlove): ?>
										<li><a title="bitlove torrent <?php echo $audiotype; ?>" href="http://bitlove.org/<?php echo $bitlove['user']; ?>/<?php echo $bitlove['feed']; ?>/<?php echo $item['slug']; ?>.<?php echo $audiotype; ?>.torrent"><?php echo $audiotype; ?></a></li>
									<?php endforeach; ?>
								</ul>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>	
			</div>
			<div class="large-4 medium-4 columns">
			<div style="padding: 1px 0px 0px 10px; background: #FDFDFD; border-left: 3px solid #2CABCA;">			
				<?php if ($feedattr['flattrid']): ?>
					<h4><i class="icon-heart-empty"></i> Unterstützen</h4>
					<p style="color: #5B676D;"><?php echo Base::instance()->raw($item['description']); ?></p>
					<iframe src="http://api.flattr.com/button/view/?user_id=<?php echo $feedattr['flattrid']; ?>&amp;url=<?php echo Base::instance()->raw($item['flattrlink']); ?>&amp;language=<?php echo Base::instance()->raw($feedattr['flattrlanguage']); ?>&amp;category=audio&amp;title=<?php echo Base::instance()->raw($item['flattrtitle']); ?>&amp;description=<?php echo Base::instance()->raw($item['flattrdescription']); ?>&amp;tags=<?php echo Base::instance()->raw($item['flattrkeywords']); ?>&amp;popout=0&amp;button=compact"
					class="FlattrButton" width="110" height="20" frameborder="0" scrolling="no" border="0" marginheight="0" marginwidth="0" allowtransparency="true">
					</iframe>
				<?php endif; ?>
				<br>
				<br>
				<h4><i class="icon-mic"></i> Moderator</h4>
				<p style="color: #5B676D;"><?php echo Base::instance()->raw($feedattr['author']); ?></p>
				
				<?php if ($feedattr['licensename']): ?>
					<h4><i class="icon-network"></i> <?php echo $dict_license; ?></h4> 
					<p style="color: #5B676D;">Dieser Podcast steht unter <a href="<?php echo $feedattr['licenseurl']; ?>"><?php echo $feedattr['licensename']; ?></a>.</p>
				<?php endif; ?>


				<h4><i class="icon-tags"></i> Keywords</h4>
				<p style="color: #5B676D;"><?php echo Base::instance()->raw($feedattr['keywords']); ?></p>
				
			</div>
			</div>
		</div>

			<br>
		
			<!--discription-->
			<?php if ((trim($item['article'])!='')): ?>			
				<div class="shownotes"><h3>Shownotes</h3><?php echo Base::instance()->raw($item['article']); ?></div>
			<?php endif; ?>	
			<?php foreach ((glob($templatepath.'/episode/*.html')?:array()) as $template): ?>
				<?php echo $this->render('episode/'.basename($template),$this->mime,get_defined_vars()); ?>
			<?php endforeach; ?>
			<?php if ($feedattr['disqus']): ?>
			 <br>
				<?php echo $this->render('disqus.html',$this->mime,get_defined_vars()); ?>
			<?php endif; ?>
			<br>
			<hr />
			<br>
			<br>
			
		<?php endforeach; ?>
    
 <!--pagination-bottom-->      
<?php if ($page!=0): ?>		
	<div class="pagination-centered">
  		<ul class="pagination">
  			<?php if ($page>1): ?>
    			<li class="arrow unavailable"><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page-1; ?>">&laquo; <?php echo $dict_newer; ?></a></li>
  			<?php endif; ?>
  			<?php if ($page<$maxpage): ?>
    			<li class="arrow"><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page+1; ?>">&raquo; <?php echo $dict_older; ?></a></li>
  			<?php endif; ?>
  		</ul>
	</div>	
<?php endif; ?>	
<!--//pagination-bottom-->	

      
      <hr />   
    
    
	
<?php else: ?>
		<?php echo $this->render($showpage,$this->mime,get_defined_vars()); ?>
	<?php endif; ?>


      
      	<!--episode footer-->
        <?php foreach ((glob($templatepath.'/footer/*.html')?:array()) as $template): ?>
				<?php echo $this->render('footer/'.basename($template),$this->mime,get_defined_vars()); ?>
		<?php endforeach; ?>		
		<?php if ($feedattr['flattrid']): ?>
			<iframe src="http://api.flattr.com/button/view/?user_id=<?php echo $feedattr['flattrid']; ?>&amp;url=<?php echo Base::instance()->raw($feedattr['flattrlink']); ?>&amp;language=<?php echo Base::instance()->raw($feedattr['flattrlanguage']); ?>&amp;category=audio&amp;title=<?php echo Base::instance()->raw($feedattr['flattrtitle']); ?>&amp;description=<?php echo Base::instance()->raw($feedattr['flattrdescription']); ?>&amp;tags=<?php echo Base::instance()->raw($feedattr['flattrkeywords']); ?>&amp;popout=0&amp;button=compact"
				class="FlattrButton" width="110" height="20" frameborder="0" scrolling="no" border="0" marginheight="0" marginwidth="0" allowtransparency="true">
			</iframe>
		<?php endif; ?>
		<!--model-->
		<div id="myModal" class="reveal-modal" data-reveal>					
  			<a class="close-reveal-modal">&#215;</a>
  			<div class="large-8 columns">
  				<h2>Über diesen Podcast</h2>
  				<p class="lead">Dies ist ein Podcast rund um die Entwicklung von <a target="_blank" href="http://podbe.de">Podbe.de</a></p>
  			</div>
  			<div class="large-4 columns">	
  				<img src="http://podbe.de/wp-content/themes/Foundation-master/img/podbe.png">
  			</div>	
  			<hr />
  			<div class="large-8 columns">
  				<p>Im a cool paragraph that lives inside of an even cooler modal. Wins</p>
  			</div>
  			<div class="large-4 columns">	
  				<img src="http://podcast.firtz.org/feedimages/firtz.png">
  			</div>	
		</div>
		<!--//model-->
      <!--//episode footer-->     

</div>
</div>
 
  <br>
  <br>
  <br>       
<!-- /content goes here -->     
</section>
  <a class="exit-off-canvas"></a>  
  </div>
</div>
   
<style>
/* -----------------------------------------
   Footer
----------------------------------------- */
.firtz-footer-bottom {
  background: #333;
  padding: 24px 0 10px; }
  .firtz-footer-bottom .design-border {
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom: 25px; }
  .firtz-footer-bottom a.firtz-logo {
    color: #858585;
    font-weight: normal;
    background: url(<?php echo $BASEURL; ?>img/footer-icons.png) no-repeat 0 3px;
    padding: 25px 0 0 0;
    font-size: 0.88889rem;
    display: inline-block;
    width: 90px; }
    .firtz-footer-bottom a.firtz-logo:hover {
      opacity: 0.8; }
  .firtz-footer-bottom ul.firtz-links {
    margin: 0;
    display: inline-block; }
    .firtz-footer-bottom ul.firtz-links li {
      display: block;
      float: left;
      margin-left: 6px;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 0.77778rem; }
      .firtz-footer-bottom ul.firtz-links li a {
        color: #666;
        padding: 3px 6px; }
        .firtz-footer-bottom ul.firtz-links li a:hover {
          color: #777; }
  .firtz-footer-bottom p.copyright {
    margin: 6px 0 0;
    font-size: 0.66667rem;
    color: #666; }
  .firtz-footer-bottom ul.home-social {
    display: block;
    float: right;
    margin-bottom: 8px; }
    .firtz-footer-bottom ul.home-social li {
      list-style: none;
      display: block;
      float: left;
      margin-left: 10px; }
      .firtz-footer-bottom ul.home-social li:first-child {
        margin-left: 0; }
      .firtz-footer-bottom ul.home-social li a {
        display: block;
        height: 50px;
        width: 50px;
        background: url(<?php echo $BASEURL; ?>img/social.png) no-repeat center 0; }
        .firtz-footer-bottom ul.home-social li a:hover {
          opacity: 0.8; }
        .firtz-footer-bottom ul.home-social li a.twitter {
          background-position: center 0; }
        .firtz-footer-bottom ul.home-social li a.adn {
          background-position: center -210px; }
        .firtz-footer-bottom ul.home-social li a.mail {
          background-position: center -400px; }

@media only screen and (max-width: 767px) {
  .firtz-footer-bottom {
    text-align: center; }
    .firtz-footer-bottom .columns {
      padding: 0; }
    .firtz-footer-bottom a.firtz-logo {
      display: block;
      margin: 0 auto; }
    .firtz-footer-bottom ul.firtz-links {
      margin: 16px 0 10px; }
    .firtz-footer-bottom ul.home-social {
      float: none;
      margin: 0 0 20px 0;
      text-align: center;
      height: 44px;
      display: inline-block; } }

@media only screen and (max-width: 320px) {
  .firtz-footer-bottom ul.firtz-links li a {
    font-size: 12px; } }

.custom-block-grid {
  display: block;
  padding: 0;
  margin: 0 -0.55556rem;
  *zoom: 1; }
  .custom-block-grid:before, .custom-block-grid:after {
    content: " ";
    display: table; }
  .custom-block-grid:after {
    clear: both; }
  .custom-block-grid > li {
    display: block;
    height: auto;
    float: left;
    padding: 0 0.55556rem 1.11111rem; }
  .custom-block-grid > li {
    width: 33.33333%;
    padding: 0 0.55556rem 1.11111rem;
    list-style: none; }
    .custom-block-grid > li:nth-of-type(n) {
      clear: none; }
    .custom-block-grid > li:nth-of-type(3n+1) {
      clear: both; }

.autocomplete-suggestions {
  border: 1px solid #e7e7e7;
  background: #FFF;
  overflow: auto; }

.autocomplete-suggestion {
  padding: 6px;
  font-size: 0.8rem;
  white-space: nowrap;
  overflow: hidden; }

.autocomplete-selected {
  background-color: #00a2d3;
  transition: all 100ms ease-in-out;
  color: #fff; }
  .autocomplete-selected strong {
    color: #fff !important; }

.autocomplete-suggestions strong {
  font-weight: bold;
  color: #008CBA; }

.section-header h1 {
  border-bottom: 1px solid #ddd; }
.section-header ul.inline-list {
  display: inline-block;
  position: absolute;
  top: 47px;
  right: 0.9375rem; }

table.plugin-options {
  width: 100%;
  border: none; }
  table.plugin-options td[rowspan] {
    background: #f9f9f9;
    vertical-align: top; }
  table.plugin-options tbody td:not([rowspan]) {
    font-family: Consolas, 'Liberation Mono', Courier, monospace; }
  table.plugin-options thead td:first-child {
    width: 20%; }

.easel, .full-grid .panel {
  border-style: solid;
  border-width: 1px;
  border-color: #dfdfdf;
  margin-bottom: 1.11111rem;
  padding: 1.11111rem;
  background: #FAFAFA;
  border: solid 1px #ebebeb;
  border-radius: 3px; }
  .easel > :first-child, .easel > .full-grid .panel, .full-grid .easel > .panel {
    margin-top: 0; }
  .easel > :last-child, .easel > .full-grid .panel, .full-grid .easel > .panel {
    margin-bottom: 0; }
  .easel h1, .easel .full-grid .panel, .full-grid .easel .panel, .easel h2, .easel .full-grid .panel, .full-grid .easel .panel, .easel h3, .easel .full-grid .panel, .full-grid .easel .panel, .easel h4, .easel .full-grid .panel, .full-grid .easel .panel, .easel h5, .easel .full-grid .panel, .full-grid .easel .panel, .easel h6, .easel .full-grid .panel, .full-grid .easel .panel, .easel p, .easel .full-grid .panel, .full-grid .easel .panel {
    color: #333; }
  .easel h1, .easel .full-grid .panel, .full-grid .easel .panel, .easel h2, .easel .full-grid .panel, .full-grid .easel .panel, .easel h3, .easel .full-grid .panel, .full-grid .easel .panel, .easel h4, .easel .full-grid .panel, .full-grid .easel .panel, .easel h5, .easel .full-grid .panel, .full-grid .easel .panel, .easel h6, .easel .full-grid .panel, .full-grid .easel .panel {
    line-height: 1;
    margin-bottom: 0.55556rem; }
    .easel h1.subheader, .easel .full-grid .panel, .full-grid .easel .panel, .easel h2.subheader, .easel .full-grid .panel, .full-grid .easel .panel, .easel h3.subheader, .easel .full-grid .panel, .full-grid .easel .panel, .easel h4.subheader, .easel .full-grid .panel, .full-grid .easel .panel, .easel h5.subheader, .easel .full-grid .panel, .full-grid .easel .panel, .easel h6.subheader, .easel .full-grid .panel, .full-grid .easel .panel {
      line-height: 1.4; }

.full-grid {
  padding-left: 0.83333rem;
  padding-right: 0.83333rem;
  width: 100%;
  float: left; }

.half-grid {
  padding-left: 0.83333rem;
  padding-right: 0.83333rem;
  width: 50%;
  float: left; }

.code {
  padding-left: 0.83333rem;
  padding-right: 0.83333rem;
  width: 58.33333%;
  float: left;
  padding-right: 0; }

.options {
  padding-left: 0.83333rem;
  padding-right: 0.83333rem;
  width: 41.66667%;
  float: left; }

.options-bg {
  padding: 18px;
  background-color: #fafafa;
  border: solid 1px #f0f0f0;
  border-radius: 4px; }
  .options-bg ul {
    margin-left: 20px; }
  .options-bg dt {
    color: #008080; }

pre {
  margin-bottom: 15px; }
  pre code .code-container {
    margin: 10px 0px;
    padding: 5px;
    overflow-x: auto;
    line-height: 1.3rem;
    font-weight: normal; }

#masthead {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 55.55556rem;
  *zoom: 1;
  border-style: solid;
  border-width: 1px;
  border-color: #d8d8d8;
  margin-bottom: 1.11111rem;
  padding: 1.11111rem;
  background: #f2f2f2;
  max-width: none; }
  #masthead:before, #masthead:after {
    content: " ";
    display: table; }
  #masthead:after {
    clear: both; }
  #masthead > :first-child {
    margin-top: 0; }
  #masthead > :last-child {
    margin-bottom: 0; }
  #masthead h1, #masthead h2, #masthead h3, #masthead h4, #masthead h5, #masthead h6, #masthead p {
    color: #333; }
  #masthead h1, #masthead h2, #masthead h3, #masthead h4, #masthead h5, #masthead h6 {
    line-height: 1;
    margin-bottom: 0.55556rem; }
    #masthead h1.subheader, #masthead h2.subheader, #masthead h3.subheader, #masthead h4.subheader, 
    #masthead h5.subheader, #masthead h6.subheader {
      line-height: 1.4; }
  #masthead hgroup {
    padding-left: 0.83333rem;
    padding-right: 0.83333rem;
    width: 33.33333%;
    float: left; }
  #masthead section {
    padding-left: 0.83333rem;
    padding-right: 0.83333rem;
    width: 66.66667%;
    float: left; }

footer {
  margin-top: 45px; }
</style>  
<div class="firtz-footer-bottom">
  <div class="row">
    <div class="medium-4 medium-4 push-8 columns">
      <ul class="home-social">
        <?php if ($feedattr['twitter']): ?>
          	<li><a href="https://twitter.com/<?php echo $feedattr['twitter']; ?>" class="twitter"></a></li>
		<?php endif; ?>
		<?php if ($feedattr['adn']): ?>
          	<li><a rel="me" href="https://alpha.app.net/<?php echo $feedattr['adn']; ?>" class="adn"></a></li>
		<?php endif; ?>
		<?php if ($feedattr['email']): ?>
          	<li><a href="mailto:<?php echo $feedattr['email']; ?>" class="mail"></a></li>
		<?php endif; ?>
        </ul>
     </div>
     <div class="medium-8 medium-8 pull-4 columns">
        <a href="<?php echo $BASEURL; ?>" class="firtz-logo regular"></a>
        <ul class="firtz-links">
          <li><a href="<?php echo $BASEURL; ?>podbe/show/page/Podcast/About">About</a></li>
          <li><a href="<?php echo $BASEURL; ?>podbe/show/page/Archiv">Archiv</a></li>
          <li><a href="http://podbe.de/about/kontakt/">Kontakt</a></li>
          <li><a href="<?php echo $BASEURL; ?>podbe/show/page/Weiteres/Impressum">Impressum</a></li>
       </ul>
       <p class="copyright">&copy; 2013‐2014 Podbe.de | All rights reserved.</p>
    </div>
  </div>
</div> 
   

    <script src="<?php echo $BASEURL; ?>pwp/libs/html5shiv.js"></script>
    <script src="<?php echo $BASEURL; ?>js/foundation.min.js"></script>
    <script src="<?php echo $BASEURL; ?>js/foundation/foundation.reveal.js"></script>
    <script src="<?php echo $BASEURL; ?>js/foundation/foundation.magellan.js"></script>
    <script src="<?php echo $BASEURL; ?>js/foundation/foundation.orbit.js"></script>
    <script>
      $(document).foundation();
    </script>
    
    
	<?php if ($feedattr['disqus']): ?>
		<?php echo $this->render('disqus_multiple.js',$this->mime,get_defined_vars()); ?>
		<?php if ($singlepage==true && isset($item)): ?>
			<script type="text/javascript">
				jQuery(function() {
					loadDisqus(jQuery('#comment_<?php echo $item['slug']; ?>'), '<?php echo $item['guid']; ?>', '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>');				
				});
			</script>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>