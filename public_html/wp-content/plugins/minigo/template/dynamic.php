<?php
header('Content-type: text/css');
require '../../../../wp-load.php';

global $premiothemes_comingsoon_minigo;

if( $premiothemes_comingsoon_minigo['enable-visual-settings'] == 1 ) {
?>

.minigo h1 {
	<?php if( $premiothemes_comingsoon_minigo['heading-1']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-1']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-1']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-1']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-1']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-1']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-1']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-1']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-1']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-1']['color'] ?>;
	<?php } ?>
}
.minigo h2 {
	<?php if( $premiothemes_comingsoon_minigo['heading-2']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-2']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-2']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-2']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-2']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-2']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-2']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-2']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-2']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-2']['color'] ?>;
	<?php } ?>
}
.minigo h3 {
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-3']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-3']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-3']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-3']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-3']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-3']['line-height'] ) { ?>
		line-height: <?php echo $premiothemes_comingsoon_minigo['heading-3']['line-height'] ?>;
	<?php } ?>
}
.minigo h4 {
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-4']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-4']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-4']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-4']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-4']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-4']['line-height'] ) { ?>
		line-height: <?php echo $premiothemes_comingsoon_minigo['heading-4']['line-height'] ?>;
	<?php } ?>
}
.minigo h5 {
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-5']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-5']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-5']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-5']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-5']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-5']['line-height'] ) { ?>
		line-height: <?php echo $premiothemes_comingsoon_minigo['heading-5']['line-height'] ?>;
	<?php } ?>
}
.minigo h6 {
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['heading-6']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['heading-6']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['heading-6']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['text-transform'] ) { ?>
		text-transform: <?php echo $premiothemes_comingsoon_minigo['heading-6']['text-transform'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['heading-6']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['heading-6']['line-height'] ) { ?>
		line-height: <?php echo $premiothemes_comingsoon_minigo['heading-6']['line-height'] ?>;
	<?php } ?>
}
.minigo p, .minigo .contact-info, .minigo form label, .minigo .nav-social a:hover:after {
	<?php if( $premiothemes_comingsoon_minigo['paragraph-styles']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['paragraph-styles']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['paragraph-styles']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['paragraph-styles']['font-size'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['paragraph-styles']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['paragraph-styles']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['paragraph-styles']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['paragraph-styles']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['paragraph-styles']['line-height'] ) { ?>
		line-height: <?php echo $premiothemes_comingsoon_minigo['paragraph-styles']['line-height'] ?>;
	<?php } ?>
}
.minigo .clock ul li a {
	<?php if( $premiothemes_comingsoon_minigo['countdown-numbers']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['countdown-numbers']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['countdown-numbers']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['countdown-numbers']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['countdown-numbers']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['countdown-numbers']['color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['ctw-number-bg']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['ctw-number-bg']['background-color'] ?> ;
	<?php } ?>
}
.minigo .flip-clock-wrapper ul li a div.up {
	<?php if( $premiothemes_comingsoon_minigo['ctw-border']['border-top'] && $premiothemes_comingsoon_minigo['ctw-border']['border-left'] && $premiothemes_comingsoon_minigo['ctw-border']['border-right'] && $premiothemes_comingsoon_minigo['ctw-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['ctw-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['ctw-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['ctw-border']['border-color'] ?>;
	<?php } ?>
}
.minigo .clock .flip-clock-label {
	<?php if( $premiothemes_comingsoon_minigo['countdown-typo-labels']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['countdown-typo-labels']['font-family'] ?> ;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['countdown-typo-labels']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['countdown-typo-labels']['font-weight'] ?> ;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['countdown-typo-labels']['color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['countdown-typo-labels']['color'] ?> ;
	<?php } ?>
}
.minigo .clock-progress:after {
	<?php if( $premiothemes_comingsoon_minigo['prgbar-bg']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['prgbar-bg']['background-color'] ?>;
	<?php } ?>
}
.minigo .clock-progress {
	<?php if( $premiothemes_comingsoon_minigo['prgbar-border']['border-top'] && $premiothemes_comingsoon_minigo['prgbar-border']['border-left'] && $premiothemes_comingsoon_minigo['prgbar-border']['border-right'] && $premiothemes_comingsoon_minigo['prgbar-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['prgbar-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['prgbar-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['prgbar-border']['border-color'] ?>;
	<?php } ?>
}
.minigo .site-page__trigger, .minigo .site-page__close {
	<?php if( $premiothemes_comingsoon_minigo['side-btns']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['side-btns']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['side-btns']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['side-btns']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['side-btns']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['side-btns']['font-size'] ?>;
	<?php } ?>
}
.minigo .btn {
	<?php if( $premiothemes_comingsoon_minigo['btn-typo']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['btn-typo']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-typo']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['btn-typo']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-typo']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['btn-typo']['font-size'] ?>;
	<?php } ?>
}
.minigo .site-page__trigger, .minigo .site-page__close, .minigo .btn {
	<?php if( $premiothemes_comingsoon_minigo['btn-border']['border-top'] && $premiothemes_comingsoon_minigo['btn-border']['border-left'] && $premiothemes_comingsoon_minigo['btn-border']['border-right'] && $premiothemes_comingsoon_minigo['btn-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['btn-border']['border-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-bg']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['btn-bg']['background-color'] ?>;
	<?php } ?>
}
.minigo .site-page__trigger, .minigo .site-page__close, .minigo .btn, .minigo .contact-info a {
	<?php if( $premiothemes_comingsoon_minigo['btn-color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['btn-color'] ?>;
	<?php } ?>
}
.minigo .site-page__trigger:hover, .minigo .site-page__close:hover, .minigo .btn:hover {
	<?php if( $premiothemes_comingsoon_minigo['btn-hvr-border']['border-top'] && $premiothemes_comingsoon_minigo['btn-hvr-border']['border-left'] && $premiothemes_comingsoon_minigo['btn-hvr-border']['border-right'] && $premiothemes_comingsoon_minigo['btn-hvr-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-hvr-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-hvr-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-border']['border-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['btn-bg-hover']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['btn-bg-hover']['background-color'] ?>;
	<?php } ?>
}
.minigo .site-page__trigger:hover, .minigo .site-page__close:hover, .minigo .btn:hover, .minigo .contact-info a:hover {
	<?php if( $premiothemes_comingsoon_minigo['btn-hvr-color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['btn-hvr-color'] ?>;
	<?php } ?>
}
.minigo .text-input, .minigo textarea, .minigo select, .minigo .contact-info, .minigo .contact-info a {
	<?php if( $premiothemes_comingsoon_minigo['input-typo']['font-family'] ) { ?>
		font-family: <?php echo $premiothemes_comingsoon_minigo['input-typo']['font-family'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-typo']['font-weight'] ) { ?>
		font-weight: <?php echo $premiothemes_comingsoon_minigo['input-typo']['font-weight'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-typo']['font-size'] ) { ?>
		font-size: <?php echo $premiothemes_comingsoon_minigo['input-typo']['font-size'] ?>;
	<?php } ?>
}
.minigo .text-input, .minigo textarea, .minigo select {
	<?php if( $premiothemes_comingsoon_minigo['input-border']['border-top'] && $premiothemes_comingsoon_minigo['input-border']['border-left'] && $premiothemes_comingsoon_minigo['input-border']['border-right'] && $premiothemes_comingsoon_minigo['input-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['input-border']['border-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['input-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-bg']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['input-bg']['background-color'] ?>;
	<?php } ?>
}
.minigo input:-moz-placeholder,
.minigo textarea:-moz-placeholder {
	<?php if( $premiothemes_comingsoon_minigo['placeholder-color'] ) { ?>
  		color: <?php echo $premiothemes_comingsoon_minigo['placeholder-color'] ?>;
  	<?php } ?>
}
.minigo input::-moz-placeholder,
.minigo textarea::-moz-placeholder {
	<?php if( $premiothemes_comingsoon_minigo['placeholder-color'] ) { ?>
  		color: <?php echo $premiothemes_comingsoon_minigo['placeholder-color'] ?>;
  	<?php } ?>
}
.minigo input:-ms-input-placeholder,
.minigo textarea:-ms-input-placeholder {
	<?php if( $premiothemes_comingsoon_minigo['placeholder-color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['placeholder-color'] ?>;
	<?php } ?>
}
.minigo input::-webkit-input-placeholder,
.minigo textarea::-webkit-input-placeholder {
	<?php if( $premiothemes_comingsoon_minigo['placeholder-color'] ) { ?>
  		color: <?php echo $premiothemes_comingsoon_minigo['placeholder-color'] ?>;
  	<?php } ?>
}
.minigo .text-input:focus, .minigo textarea:focus, .minigo select:focus {
	<?php if( $premiothemes_comingsoon_minigo['input-hvr-border']['border-top'] && $premiothemes_comingsoon_minigo['input-hvr-border']['border-left'] && $premiothemes_comingsoon_minigo['input-hvr-border']['border-right'] && $premiothemes_comingsoon_minigo['input-hvr-border']['border-bottom'] ) { ?>
		border-top-width: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-top'] ?>;
		border-left-width: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-left'] ?>;
		border-right-width: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-right'] ?>;
		border-bottom-width: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-bottom'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-hvr-border']['border-style'] ) { ?>
		border-style: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-style'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-hvr-border']['border-color'] ) { ?>
		border-color: <?php echo $premiothemes_comingsoon_minigo['input-hvr-border']['border-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-hvr-color'] ) { ?>
		color: <?php echo $premiothemes_comingsoon_minigo['input-hvr-color'] ?>;
	<?php } ?>
	<?php if( $premiothemes_comingsoon_minigo['input-hvr-bg']['background-color'] ) { ?>
		background: <?php echo $premiothemes_comingsoon_minigo['input-hvr-bg']['background-color'] ?>;
	<?php } ?>
}

<?php } ?>