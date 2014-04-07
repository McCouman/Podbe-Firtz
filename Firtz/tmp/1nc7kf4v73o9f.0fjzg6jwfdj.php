	<p>
	<<?php echo substr($item['audiofiles'][$feedattr['audioformats']['0']]['type'],0,5); ?> id="player-<?php echo $item['slug']; ?>" preload="none">
		<?php foreach (($item['audiofiles']?:array()) as $audio): ?>
			<?php if (substr($audio['type'],0,5)=='audio' || substr($audio['type'],0,5)=='video'): ?>
			<source src="<?php echo $audio['link']; ?>" type="<?php echo $audio['type']; ?>"></source>
			<?php endif; ?>
		<?php endforeach; ?>
	</<?php echo substr($item['audiofiles'][$feedattr['audioformats']['0']]['type'],0,5); ?>>

	<script>
		$(document).ready( function() {
			jQuery('#player-<?php echo $item['slug']; ?>').podlovewebplayer({
				title: '<?php echo $item['title']; ?>',
				subtitle: <?php echo json_encode(nl2br(firtz_markdown($item['description']))); ?>,
				permalink: '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>',
				duration: '<?php echo $item['duration']; ?>',
				poster: '<?php echo $item['image']; ?>',
				<?php if ($item['chapters']): ?>
chapters: <?php echo json_encode($item['chapters']); ?>,
				<?php endif; ?>
				alwaysShowHours: true,
				startVolume: 0.8,
				preload: 'none',
				width: 'auto',
				summaryVisible: false,
				timecontrolsVisible: false,
				pluginPath: '../../pwp/static/',
				chaptersVisible: true	
			});
		});
	</script>
	</p>
