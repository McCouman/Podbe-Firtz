<?php foreach (($items?:array()) as $item): ?>	
<div class="row">	
	<div class="large-2 columns">
		<img class="im th responsive" src="<?php echo $item['image']; ?>">
		<br>
	</div>	
	<div class="large-10 columns">
		<h4 class="media-heading"><?php echo Base::instance()->format($dict_pubdate,strtotime($item['pubDate'])); ?>: <a href="/<?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>" name="<?php echo $item['slug']; ?>">
			<span class="text-center"><?php echo $item['title']; ?></span></a>
		</h4>	
			
		<p><?php echo $item['description']; ?><br>
		<?php if ($item['duration']): ?><?php echo $dict_duration; ?>: <?php echo $item['duration']; ?><?php endif; ?></p>
		<p>
		<a class="right small round button" data-reveal-id="Modal<?php echo $item['slug']; ?>">Jetzt Reinhören</a>
		Moderator: <?php echo Base::instance()->raw($feedattr['author']); ?>
		</p>
		
		
		
		<div id="Modal<?php echo $item['slug']; ?>" class="reveal-modal" data-reveal>					
  			<a class="close-reveal-modal">&#215;</a>
  			<h4><center><b>Aus dem Archiv:</b> <?php echo $item['title']; ?></center></h4>
  			<hr>
  			
			<div><?php echo $this->render('podlove-player.html',$this->mime,get_defined_vars()); ?></div>
		</div>
	</div>
</div>
<hr />
<?php endforeach; ?>