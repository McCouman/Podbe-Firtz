<?php if ($feedattr['adntoken'] && $item['adnthread']): ?>
<div class="showcomments" onclick="$('#adnthread-<?php echo $item['adnthread']; ?>').load('/<?php echo $feedattr['slug']; ?>/adnthread/<?php echo $item['adnthread']; ?>');" id="adnthread-<?php echo $item['adnthread']; ?>" class="adnthread"><a href="#c-<?php echo $item['adnthread']; ?>"><i class="icon-comment"></i> <?php echo $dict_show_adn_thread; ?></a></div>
&nbsp;<br>
<a name="#c-<?php echo $item['adnthread']; ?>"></a><?php endif; ?>
