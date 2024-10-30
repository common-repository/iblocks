<?php 
class Block_Quote{

	/*
	 * Create shaded block quotes
	 */
	public function thick_shadow($atts,$content){

		$styles		= $this->quote_shadow_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='quote_thick_shadow' $style>$content</div>";

		return $output;

	}

	public function thin_shadow($atts,$content){

		$styles		= $this->quote_shadow_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='quote_thin_shadow' $style>$content</div>";

		return $output;

	}

	public function box_shadow($atts,$content){

		$styles		= $this->quote_shadow_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='quote_box_shadow' $style>$content</div>";

		return $output;

	}

	public function drop_right_shadow($atts,$content){

		$styles		= $this->quote_shadow_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='quote_right_drop_shadow' $style>$content</div>";

		return $output;

	}

	public function drop_bottom_shadow($atts,$content){

		$styles		= $this->quote_shadow_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='quote_bottom_drop_shadow' $style>$content</div>";

		return $output;

	}

	public function quote_shadow_styles($atts){

		$color			= isset ($atts['color']) ? "color:".$atts['color'].";" : '';
		$background		= isset ($atts['background']) ? "background-color:".$atts['background'].";" : '';
		$font_size		= isset ($atts['font_size']) ? "font-size:".$atts['font_size'].";" : '';
		$font_name		= isset ($atts['font_name']) ? "font-family:".$atts['font_name'].";" : '';

		$width			= isset ($atts['width']) ? "width:".$atts['width'].";" : '';
		$space_top		= isset ($atts['space_top']) ? "margin-top:".$atts['space_top'].";" : '';
		$space_bottom	= isset ($atts['space_bottom']) ? "margin-bottom:".$atts['space_bottom'].";" : '';

		$shadow_color	= isset ($atts['shadow_color']) ? $atts['shadow_color'] : '';
		$shadow_prop    = ($shadow_color != '' ) ? "-moz-box-shadow:3px 3px 25px $shadow_color;-webkit-box-shadow: 3px 3px 25px $shadow_color;box-shadow: 3px 3px 25px $shadow_color;":'';

		$style['p']	= $color.$background.$font_size.$font_name.$shadow_prop.$space_bottom.$space_top.$width;
		return  $style;
		
	}

	/*
	 * Create normal block quotes
	 */
	public function lines_quote($atts,$content){

		$styles		= $this->quote_lines_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='lines_quote' $style>$content</div>";

		return $output;

	}

	public function quote_lines_styles($atts){

		$color			= isset ($atts['color']) ? "color:".$atts['color'].";" : '';
		$background		= isset ($atts['background']) ? "background-color:".$atts['background'].";" : '';
		$font_size		= isset ($atts['font_size']) ? "font-size:".$atts['font_size'].";" : '';
		$font_name		= isset ($atts['font_name']) ? "font-family:".$atts['font_name'].";" : '';
		$width			= isset ($atts['width']) ? "width:".$atts['width'].";" : '';

		$left_border	= isset ($atts['left_border']) ? "border-left: 2px solid ".$atts['left_border'].";" : '';
		$right_border	= isset ($atts['right_border']) ? "border-right: 2px solid ".$atts['right_border'].";" : '';

		$style['p']	= $color.$background.$font_size.$font_name.$width.$left_border.$right_border;
		return  $style;

	}

	public function rounded_quote($atts,$content){

		$plugin_dir = WP_PLUGIN_URL . "/";
		$img_path = $plugin_dir . 'iblocks/images/';

		$styles		= $this->quote_double_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='rounded_quote' $style><img src='".$img_path."rounded_black_start.png' />$content<img src='".$img_path."rounded_black_end.png' /></div>";

		return $output;

	}

	public function squared_quote($atts,$content){

		$plugin_dir = WP_PLUGIN_URL . "/";
		$img_path = $plugin_dir . 'iblocks/images/';

		$styles		= $this->quote_double_styles($atts);
		$style		= "style='".$styles['p']."'";
		$output		= "<div class='squared_quote' $style><img src='".$img_path."squared_black_start.png' />$content<img src='".$img_path."squared_black_end.png' /></div>";

		return $output;

	}

	public function quote_double_styles($atts){

		$color			= isset ($atts['color']) ? "color:".$atts['color'].";" : '';
		$background		= isset ($atts['background']) ? "background-color:".$atts['background'].";" : '';
		$font_size		= isset ($atts['font_size']) ? "font-size:".$atts['font_size'].";" : '';
		$font_name		= isset ($atts['font_name']) ? "font-family:".$atts['font_name'].";" : '';

		$width			= isset ($atts['width']) ? "width:".$atts['width'].";" : '';

		$style['p']	= $color.$background.$font_size.$font_name.$width;
		return  $style;

	}

}

?>
