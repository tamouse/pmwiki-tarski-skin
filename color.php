<?php
/**
 * color - color scheming for tarski theme
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version 2012-02-24
 * @copyright 2012 Tamara Temple Web Development
 * @package tarski theme - pmwiki
 **/

header("Content-type: text/css");

$SkinDirUrl = (isset($_REQUEST['d']) && !empty($_REQUEST['d'])) ? $_REQUEST['d'] : dirname($_SERVER['PHP_SELF']);

$scheme = (isset($_REQUEST['scheme']) && !empty($_REQUEST['scheme'])) ? $_REQUEST['scheme'] : '';
switch ($scheme) {
	case 'dark':
		$main_background = "#333333";
		$main_text = "#DDDDDD";
		$accent_text = "#0099FF";
		$alt_accent_text = "#009999";
		$dim_text = $main_text;
		$important_background = "#660000";
		$important_text = "#FFFFFF";
		$important_border = "#FF0000";
		$audience_background = "#333300";
		$audience_text = $main_text;
		$audience_border = $main_text;
		$quote_background = "#444444";
		$quote_text = $main_text;
		$quote_border = $main_text;
		break;


	case 'sunny':
		$main_background = "#FFFF47";
		$main_text = "#000000";
		$accent_text = "#001D1D";
		$alt_accent_text = "#003300";
		$dim_text = "#333333";
		$important_background = "#660000";
		$important_text = "#FFFFFF";
		$important_border = "#FF0000";
		$audience_background = "#DDDD00";
		$audience_text = $main_text;
		$audience_border = $main_text;
		$quote_background = "#EEEEEE";
		$quote_text = $main_text;
		$quote_border = $main_text;
		break;

	case 'light':
	default:
		$main_background = "#F3F1F1";
		$main_text = "#000000";
		$accent_text = "#001D39";
		$alt_accent_text = "#001E2E";
		$dim_text = "#333333";
		$important_background = "#660000";
		$important_text = "#FFFFFF";
		$important_border = "#FF0000";
		$audience_background = "#DDDD00";
		$audience_text = $main_text;
		$audience_border = $main_text;
		$quote_background = "#EEEEEE";
		$quote_text = $main_text;
		$quote_border = $main_text;
		
		break;
}

?>

body {
       background-color:<?php echo $main_background; ?>;
       color:<?php echo $main_text; ?>;
}
header #sitetag {color:<?php echo $accent_text; ?>;}

a:link {
	color:<?php echo $accent_text; ?>;
	background-color:transparent;
}
a:visited {color:<?php echo $alt_accent_text; ?>;}
dt {color:<?php echo $dim_text; ?>;}
h3 {color:<?php echo $dim_text; ?>;}
.listtag {background:transparent;}
.sidehead {color:<?php echo $dim_text ?>;}
.important {
	background-color: <?php echo $important_background; ?>;
	color: <?php echo $important_text; ?>; 
	border-color: <?php echo $important_border ?>;	
}
.audience {
	background-color:<?php echo $audience_background; ?>;
	color:<?php echo $audience_text; ?>;
	border-color: <?php echo $audience_border; ?>;
}
.quote { 
	background-color: <?php echo $quote_background; ?>;
	color: <?php echo $quote_text; ?>;
	border-color: <?php echo $quote_border; ?>;
}
.navtrailleft {
background: transparent url("<?php echo $SkinDirUrl; ?>/img/nav/prev24.png") center left no-repeat;
  padding-left: 28px;
 }
.navtrailright {
background: transparent url("<?php echo $SkinDirUrl; ?>/img/nav/next24.png") center right no-repeat;
  padding-right: 28px;
 }
