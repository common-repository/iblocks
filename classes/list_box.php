<?php 
class List_Box{
	
	/*
	 * Create minimum styled 1 column list with content only
	 */
	public function min_list($atts,$content){

		$items		= $this->extract_min_list_contents($content);

		$styles		= $this->min_list_styles($atts);
		$style		= "style='".$styles['ul']."'";
		$style_li	= "style='".$styles['li']."'";

		$output		= "<ul class='min-list' ".$style.">";

		foreach ($items as $key => $value) {
			$output.= "<li $style_li>".$value."</li>";
		}

		$output .= "</ul>";
		return $output;
	}

	public function min_list_bold($atts,$content){

		$items		= $this->extract_min_list_contents($content);
		$styles		= $this->min_list_styles($atts);
		$style		= "style='".$styles['ul']."'";
		$style_li	= "style='".$styles['li']."'";

		$output		= "<ul class='min-list' ".$style.">";

		foreach ($items as $key => $value) {
			$output.= "<li class='min-list-bold' $style_li>".$value."</li>";
		}

		$output .= "</ul>";
		return $output;
	}

	public function min_list_2col($atts,$content){

		$items		= $this->extract_min_list_contents($content);
		$styles		= $this->min_list_styles($atts);
		$style		= "style='".$styles['ul']."'";
		$style_li	= "style='".$styles['li']."'";

		$output		= "<ul class='min-list' ".$style.">";

		foreach ($items as $key => $value) {
			$output.= "<li class='min-list-2col' $style_li>".$value."</li>";
		}

		$output .= "</ul>";
		return $output;
	}

	public function min_list_3col($atts,$content){

		$items		= $this->extract_min_list_contents($content);
		$styles		= $this->min_list_styles($atts);
		$style		= "style='".$styles['ul']."'";
		$style_li	= "style='".$styles['li']."'";

		$output		= "<ul class='min-list' ".$style.">";

		foreach ($items as $key => $value) {
			$output.= "<li class='min-list-3col' $style_li>".$value."</li>";
		}

		$output .= "</ul>";
		return $output;
	}


	public function extract_min_list_contents($content){
		$items = explode("@item:", $content);
		array_shift($items);
		return $items;
	}

	public function min_list_styles($atts){
		$color			= isset ($atts['color']) ? "color:".$atts['color'].";" : '';
		$background		= isset ($atts['background']) ? "background-color:".$atts['background'].";" : '';
		$border			= isset ($atts['border']) ? "border:1px solid ".$atts['border'].";" : '';
		$font_size		= isset ($atts['font_size']) ? "font-size:".$atts['font_size'].";" : '';
		$font_name		= isset ($atts['font_name']) ? "font-family:".$atts['font_name'].";" : '';

		$list_image		= isset ($atts['list_image']) ? "list-style-image: url(".$atts['list_image'].");" : '';

		$style['ul']	= $color.$background.$border.$font_size.$font_name;
		$style['li']	= $list_image;
		return  $style;
	}


	/*
	 * List with titles and descriptions
	 */
	public function title_list($atts,$content){

		$items	= $this->extract_title_list_contents($content);

		$output = "<ul class='title-list'>";

		foreach ($items as $key => $value) {
			$title	= isset ($value[0]) ? "<p class='title'>".$value[0]."</p>" : '';
			$desc	= isset ($value[1]) ? "<p class='desc'>".$value[1]."</p>" : '';
			$output.= "<li>".$title.$desc."</li>";
		}

		$output .= "</ul>";
		return $output;
	}

	public function extract_title_list_contents($content){
		$title_items = explode("@title:", $content);
		array_shift($title_items);

		$items = array();

		foreach ($title_items as $key => $value) {
			$item = explode("@item:", $value);
			array_push($items, $item);
		}
		//array_shift($items);
		return $items;
	}


	/*
	 * Lists like feature Boxes
	 */
	public function small_img_features($atts,$content){

		$styles = $this->small_img_features_styles($atts);

		$styles['small_img_features']			= ($styles['small_img_features'] != '') ? "style='".$styles['small_img_features']."'" : "" ;
		$styles['small_img_features_title']		= ($styles['small_img_features_title'] != '') ? "style='".$styles['small_img_features_title']."'" : "" ;
		$styles['small_img_features_content']	= ($styles['small_img_features_content'] != '') ? "style='".$styles['small_img_features_content']."'" : "" ;

		return "<dl class='small_img_features' ".$styles['small_img_features'].">
					<dt class='small_img_features_title'  ".$styles['small_img_features_title'].">
						<img style='vertical-align: middle;padding-right: 10px' src='".$atts['image']."' />".$atts['title']."
					</dt>
					<dd class='small_img_features_content'  ".$styles['small_img_features_content'].">".$atts['content']."</dd>
				</dl>";

	}

	
	public function small_img_features_styles($atts){
		
		$width			= isset ($atts['width']) ? "width:".$atts['width'].";" : '';
		$height			= isset ($atts['height']) ? "height:".$atts['height'].";" : '';
		$back_color		= isset ($atts['back_color']) ? "background-color:".$atts['back_color'].";" : '';
		$border_color	= isset ($atts['border_color']) ? "border:1px solid ".$atts['border_color'].";" : '';

		$title_color		= isset ($atts['title_color']) ? "color:".$atts['title_color'].";" : '';
		$title_width		= isset ($atts['title_width']) ? "width:".$atts['title_width'].";" : '';
		$title_font_size	= isset ($atts['title_font_size']) ? "font-size:".$atts['title_font_size'].";" : '';
		$title_margin		= isset ($atts['title_margin']) ? "padding:".$atts['title_margin'].";" : '';
		$title_font_name	= isset ($atts['title_font_name']) ? "font-family:".$atts['title_font_name'].";" : '';

		$content_color		= isset ($atts['content_color']) ? "color:".$atts['content_color'].";" : '';
		$content_back_color	= isset ($atts['content_back_color']) ? "background-color:".$atts['content_back_color'].";" : '';
		$content_width		= isset ($atts['content_width']) ? "width:".$atts['content_width'].";" : '';
		$content_font_size	= isset ($atts['content_font_size']) ? "font-size:".$atts['content_font_size'].";" : '';
		$content_font_name  = isset ($atts['content_font_name']) ? "font-family:".$atts['content_font_name'].";" : '';
		

		$style['small_img_features']		= $width.$height.$back_color.$border_color;
		$style['small_img_features_title']	= $title_color.$title_width.$title_font_size.$title_margin.$title_font_name;
		$style['small_img_features_content']= $content_color.$content_width.$content_font_size.$content_font_name.$content_back_color;
		return  $style;
		
	}




}

?>
