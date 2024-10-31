 #pc-popup-overlay-<?php echo $val->id;?> {
	 top: 0; 
	 right: 0; 
	 bottom: 0; 
	 left: 0; 
	 z-index: 99999; 
	 background-color: rgba(0, 0, 0, 0.7); 
	 position: fixed; 
	 cursor: default; 
	 display: none; 
	 width: 100%; 
	 height: 100%; 
	 overflow: auto;	  
} 
#pc-popup-overclose-<?php echo $val->id;?> {
	top: 0; 
	right: 0; 
	bottom: 0; 
	left: 0; 
	z-index: 99999; 
	cursor: default;		
	width: 100%; 
	height: 100%; 
} 

#pc-popup-window-<?php echo $val->id;?>{
	width:<?php if(empty($param['modal_width'] )){echo "662";}else{echo $param['modal_width'];}?><?php if($param['modal_width_par'] == 'pr'){echo "%";}else{echo 'px';}?>; 
	padding:<?php if($param['modal_padding'] == ""){echo "10";}else{echo $param['modal_padding'];}?>px; 
	border: <?php if($param['border_width'] == ""){echo "0";}else{echo $param['border_width'] ;}?>px solid #000000; 
	z-index:99999; 
	position: fixed; 
	top:<?php if($param['modal_top'] == ""){echo "10";}else{echo $param['modal_top'] ;}?>%;	
	border-radius:<?php if($param['border_radius'] == ""){echo "5";}else{echo $param['border_radius'];}?>px; 
	right:0%;
	left:0%;
	margin: auto; 
	display: none;	
	height: <?php if(empty($param['modal_height'])){echo "auto";}else{
	if (empty($param['modal_height_par'])) {
		echo $param['modal_height'].'px';
	}
	if ($param['modal_height_par'] == 'px') {
		echo $param['modal_height'].'px';
	}
	if ($param['modal_height_par'] == 'pr') {
		echo $param['modal_height'].'%';
	}
	if ($param['modal_height_par'] == 'auto') {
		echo 'auto';
	}	
	}?>;
	<?php if(empty($param['modal_height']) || $param['modal_height_par'] == 'auto'){echo "margin-bottom:40px;";} ?>	
	background: #ffffff;
}
#pc-popup-window-<?php echo $val->id;?> img{
	max-width:100%;
	height: auto;
}
#pc-popup-close-<?php echo $val->id; ?> {
	position: absolute; 
	top: -7px; 
	right: -6px;	 
	font-size: <?php if($param['close_size'] == ""){echo "14";}else{echo $param['close_size'];}?>px; 	
	font-weight: bold; 
	cursor:pointer; 
	display: none; 
} 

#pc-close-circle-<?php echo $val->id; ?>{
	color: #ffffff;
}
#pc-close-times-<?php echo $val->id; ?>{
	color: #000000;
}
.pc-popup-botton-<?php echo $val->id; ?> {
	text-decoration: none;
	color: white;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
  -ms-border-radius: 4px;
	border-radius: 4px;
	padding: 14px 14px 12px;
	line-height: 14px;
	float: none;
	text-shadow: none;
	cursor:pointer;
	z-index: 9999;
	background: #383838; 
}
.pc-popup-botton-<?php echo $val->id; ?>:hover {	
	background: #797979; 
}


@media only screen and (max-width: <?php if(empty($param['screen_size'])){echo "1024";} else {echo $param['screen_size'];} ?>px){
#pc-popup-window-<?php echo $val->id;?> {
    max-width:<?php if(empty($param['mobile_width'])){echo "85";} else {echo $param['mobile_width'];} ?><?php if($param['mobile_width_par'] == 'pr'){echo "%";}else{echo 'px';}?>;
}
}