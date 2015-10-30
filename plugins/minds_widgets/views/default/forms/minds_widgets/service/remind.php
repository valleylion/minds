<?php
if (get_input('embed',$vars['embed']) == 'yes') {
    
    
    ?>
    <script>
        var passed_url = '<?= get_input('url', $vars['url']); ?>';
        var url = (window.location != window.parent.location) ? document.referrer : document.location;

        if (passed_url != "")
    	url = passed_url;

    </script>
    <div class="minds-widget minds-widget-remind">
	<div class="widget-button">
	    <a class="entypo minds-remind" href="<?php echo minds_widgets_remove_url_schema(elgg_get_site_url()); ?>widgets/<?php echo $vars['tab']; ?>/service/" title="ReMind (repost)" onClick='window.open(this.href + "?url=" + encodeURIComponent(url) + "&title=<?php echo get_input('title'); ?>", "Remind", "width=800,height=600");
		return false;'><img src="<?php echo minds_widgets_remove_url_schema(elgg_get_site_url()); ?>mod/minds_widgets/gfx/lightbulb_25.png" /></a> 
	    
	    <a class="entypo minds-remind" href="<?php echo minds_widgets_remove_url_schema(elgg_get_site_url()); ?>widgets/<?php echo $vars['tab']; ?>/service/" title="ReMind (repost)" onClick='window.open(this.href + "?url=" + encodeURIComponent(url) + "&title=<?php echo get_input('title'); ?>", "Remind", "width=800,height=600");
		return false;'> reMind </a> 
	</div>
	<div class="count"></div>
    </div>
    <script>
	$(document).ready(function() {
	    $('div.minds-widget div.count').load('<?php echo minds_widgets_remove_url_schema(elgg_get_site_url()); ?>widgets/<?php echo $vars['tab']; ?>/data/?url=' + encodeURIComponent(url));
	});
    </script>
    <?php
} else {
    ?>
    <label>
        Title: <br />
	<?php echo elgg_view('input/text', array('name' => 'title', 'value' => get_input('title'), 'placeholder' => 'Title')); ?>
    </label>
    <label>
        Description: <br />
	<?php echo elgg_view('input/longtext', array('name' => 'description', 'value' => get_input('description'), 'placeholder' => 'Short description')); ?>
    </label>
    <?php echo elgg_view('input/hidden', array('name' => 'url', 'value' => get_input('url'))); ?>
    <?php echo elgg_view('input/submit', array('value' => 'reMind')); ?>

<?php
}?>