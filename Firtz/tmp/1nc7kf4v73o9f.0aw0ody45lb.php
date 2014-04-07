<div>
   <a id='comment_<?php echo $item['slug']; ?>' onclick="loadDisqus(jQuery(this), '<?php echo $item['guid']; ?>', '<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?>');">
     <span style="cursor:pointer !important;"><i class="icon-chat-2"></i> <?php echo $dict_showcomments; ?></span>
   </a>
</div>
