<?php
class Promotion_Box{

	public function gen_left($atts,$content){
            $output = "<div class='promotion_box_container'>
                            <div class='promotion-head-type1'>
                            <div class='promotion-head-type1-small'>".$atts['head_text']."</div>
                        </div>
                        <div class='promotion_box_image' style='float:left;padding-left:5%'>
                            <a  href='".$atts['link']."' >
                                <img src='".$atts['image']."'  />
                            </a>
                        </div>
                        <div class='promotion_box_message'>$content</div>
                        </div>";
		return $output;
	}

        public function gen_right($atts,$content){
            $output = "<div class='promotion_box_container'>
                            <div class='promotion-head-type1'>
                            <div class='promotion-head-type1-small'>".$atts['head_text']."</div>
                        </div>
                        <div class='promotion_box_image' style='float:right;padding-right:5%'>
                            <a  href='".$atts['link']."' >
                                <img src='".$atts['image']."'  />
                            </a>
                        </div>
                        $content
                        </div>";
		return $output;
	}

}

?>
