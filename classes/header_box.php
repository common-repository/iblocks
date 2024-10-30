<?php
class Header_Box{

	/*
	 * Underlined 100% width headers
	 */
	public function un_bar_small($atts,$content){
		$style = $this->un_bar_styles($atts);
		return "<div class='under_header_small'>" . do_shortcode($content) . "</div>";
	}

	public function un_bar_medium($atts,$content){
		$style = $this->un_bar_styles($atts);
		return "<div class='under_header_mid'>" . do_shortcode($content) . "</div>";
	}

	public function un_bar_large($atts,$content){
		$style = $this->un_bar_styles($atts);		
		return "<div class='under_header_large' style='".$style."'>" . do_shortcode($content) . "</div>";
	}

	public function un_bar_styles($atts){
		$color = isset ($atts['color']) ? $atts['color'] : '';
		$font_name = isset ($atts['font_name']) ? $atts['font_name'] : '';
		$font_size = isset ($atts['font_size']) ? $atts['font_size'] : '';
		$under_color = isset ($atts['underline_color']) ? $atts['underline_color'] : '';

		$style = "color:$color;border-bottom-color:$under_color;font-family:$font_name;font-size:$font_size;";
		return  $style;
	}

	/*
	 * Underlined Text Content width headers
	 */

	public function un_text_small($atts,$content){
		$style = $this->un_bar_styles($atts);
		return "<div class='under_text_small'>" . do_shortcode($content) . "</div>";
	}

	public function un_text_medium($atts,$content){
		$style = $this->un_bar_styles($atts);
		return "<div class='under_text_mid'>" . do_shortcode($content) . "</div>";
	}

	public function un_text_large($atts,$content){
		$style = $this->un_text_styles($atts);
		return "<div class='under_text_large' style='".$style."'>" . do_shortcode($content) . "</div>";
	}

	public function un_text_styles($atts){
		$color = isset ($atts['color']) ? $atts['color'] : '';
		$font_name = isset ($atts['font_name']) ? $atts['font_name'] : '';
		$font_size = isset ($atts['font_size']) ? $atts['font_size'] : '';

		$style = "color:$color;font-family:$font_name;font-size:$font_size;";
		return  $style;
	}

	/*
	 * Box Headers
	 */
	public function box_head_small($atts,$content){
		$style = $this->box_head_styles($atts);

		return "<div class='box_head_small' style='".$style['part1']."'>
					<div class='box_head_small_sub'>
						<h1 style='".$style['part2']."'>" . do_shortcode($content) . "</h1>
					</div>
				</div>";
	}

	public function box_head_medium($atts,$content){
		$style = $this->box_head_styles($atts);
		return "<div class='box_head_mid' style='".$style['part1']."'>
					<div class='box_head_mid_sub'>
						<h1 style='".$style['part2']."'>" . do_shortcode($content) . "</h1>
					</div>
				</div>";
	}

	public function box_head_large($atts,$content){
		$style = $this->box_head_styles($atts);
		return "<div class='box_head_large' style='".$style['part1']."'>
					<div class='box_head_large_sub'>
						<h1 style='".$style['part2']."'>" . do_shortcode($content) . "</h1>
					</div>
				</div>";
	}

	public function box_head_styles($atts){
		$color = isset ($atts['color']) ? "color:".$atts['color'].";" : '';
		$background = isset ($atts['color']) ? "background-color:".$atts['background'].";" : '';
		$outline = isset ($atts['color']) ? "outline-color:".$atts['outline'].";" : '';

		$style['part1'] = $background.$outline;
		$style['part2'] = $color;
		return  $style;
		
	}

	/*
	 * Normal Bold Headers
	 */
	public function gen_head_small($atts,$content){
		$style = $this->gen_head_styles($atts);
		return "<div class='gen_head_small' style='".$style."'>" . do_shortcode($content) . "</div>";
	}

	public function gen_head_medium($atts,$content){
		$style = $this->gen_head_styles($atts);
		return "<div class='gen_head_mid' style='".$style."'>" . do_shortcode($content) . "</div>";
	}

	public function gen_head_large($atts,$content){
		$style = $this->gen_head_styles($atts);
		return "<div class='gen_head_large' style='".$style."'>" . do_shortcode($content) . "</div>";
	}

	public function gen_head_styles($atts){
		$color     = isset ($atts['color']) ? $atts['color'] : '';
		$font_name = isset ($atts['font_name']) ? $atts['font_name'] : '';
		$font_size = isset ($atts['font_size']) ? $atts['font_size'] : '';

		$style = "color:$color;font-family:$font_name;font-size:$font_size;";
		return  $style;
	}


}

?>
