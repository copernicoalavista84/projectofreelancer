<?php
// =============================== My Flickr widget  ======================================
class MY_FlickrWidget extends WP_Widget {
	/* constructor */
	function __construct() {
		parent::__construct( false, $name = __( 'Cherry - Flickr', CHERRY_PLUGIN_DOMAIN ) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract( $args );
		$title     = apply_filters('widget_title', $instance['title']);
		$flickr_id = apply_filters('flickr_id', $instance['flickr_id']);
		$amount    = intval( apply_filters('flickr_image_amount', $instance['image_amount']) );
		$linktext  = apply_filters('cherry_text_translate', $instance['linktext'], $instance['title'] . ' linktext');
		$suf       = rand(100000, 999999);

	echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title; ?>

	<?php if ($amount) { ?>
		<ul id="flickr" class="flickr_list unstyled clearfix row-fluid"></ul>
		<a href="http://flickr.com/photos/<?php echo $flickr_id ?>" class="link" target="_blank"><?php echo $linktext; ?></a>
		<script>
			jQuery('#flickr').jflickrfeed({
				limit: <?php echo $amount ?>,
				qstrings: {
					id: '<?php echo $flickr_id ?>'
				},
				itemTemplate: '<li class="flickr_li span4"><a class="thumbnail" rel="prettyPhoto[gallery-<?php echo $suf; ?>]" href="{{image_b}}" title="{{title}}"><div class="wrapper"><img class="flickr_img" src="{{image_s}}" alt="{{title}}" /><span class="zoom-icon"></span></div></a></li>'
			}, function(data) {
				magnific_popup_init(jQuery("#flickr"));
				jQuery(".flickr_li:nth-child(3n-2)").addClass("nomargin");
			});
		</script>

	<?php } else { ?>
		<div style="margin:20px 0 15px;padding:10px;background:#ff9b9b;color:#fff;"><?php echo __('You need enter number of images in widget settings.', CHERRY_PLUGIN_DOMAIN) ?></div>
	<?php } ?>

<?php wp_reset_query();
	echo $after_widget;
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
		/* Set up some default widget settings. */
		$defaults = array( 'title' => '', 'flickr_id' => '', 'image_amount' => '4', 'linktext' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults );

		$title     = esc_attr($instance['title']);
		$flickr_id = esc_attr($instance['flickr_id']);
		$amount    = intval($instance['image_amount']);
		$linktext  = esc_attr($instance['linktext']);
	?>
	<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', CHERRY_PLUGIN_DOMAIN); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

	<p><label for="<?php echo $this->get_field_id('flickr_id'); ?>"><?php _e('Flickr ID', CHERRY_PLUGIN_DOMAIN).':'; ?> <input class="widefat" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" type="text" value="<?php echo $flickr_id; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('image_amount'); ?>"><?php _e('Images count', CHERRY_PLUGIN_DOMAIN).':'; ?> <input class="widefat" id="<?php echo $this->get_field_id('image_amount'); ?>" name="<?php echo $this->get_field_name('image_amount'); ?>" type="text" value="<?php echo $amount; ?>" /></label></p>
	<p><label for="<?php echo $this->get_field_id('linktext'); ?>"><?php _e('Link Text', CHERRY_PLUGIN_DOMAIN).':'; ?> <input class="widefat" id="<?php echo $this->get_field_id('linktext'); ?>" name="<?php echo $this->get_field_name('linktext'); ?>" type="text" value="<?php echo $linktext; ?>" /></label></p>
<?php }
} ?>