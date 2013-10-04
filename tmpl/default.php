<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Here's where we turn the parameters into variables

$cycle_time = $params->get('cycle_time');

$headline_one = $params->get('headline_one');
$headline_two = $params->get('headline_two');
$headline_three = $params->get('headline_three');
$headline_four = $params->get('headline_four');

$headline_one_link = $params->get('headline_one_link');
$headline_two_link = $params->get('headline_two_link');
$headline_three_link = $params->get('headline_three_link');
$headline_four_link = $params->get('headline_four_link');

$headline_one_image = $params->get('headline_one_image');
$headline_two_image = $params->get('headline_two_image');
$headline_three_image = $params->get('headline_three_image');
$headline_four_image = $params->get('headline_four_image');
 
$headline_one_text = $params->get('headline_one_text');
$headline_two_text = $params->get('headline_two_text');
$headline_three_text = $params->get('headline_three_text');
$headline_four_text = $params->get('headline_four_text');

?>

<?php
$document = JFactory::getDocument();
$document->addScriptDeclaration('

	function cycle_features() {
  
	$(function(){

		t = setTimeout("cycle_features()", ' . ($cycle_time * 1000) . ' );

		$(document.getElementById(features[i])).css("display", "none");
		i++;
		$(document.getElementById(features[i])).fadeIn("slow");

		if (i == 1) { 

		$(document.getElementById(features[4])).css("display", "none");

		}

		if (i >= 4) { 

		i %= 1;

		}

	});    
  
  }  
  
    function display_feature(x) {
 	 $(function() {
 	 	
 	 for (var y = 0; y < features.length; y++) {
 	 	
 	 	if (x == features[y]) {
 	 	$(document.getElementById(features[y])).fadeIn("slow");
 	 	clearTimeout(t);
 	 	}
 		
 		else {
 		$(document.getElementById(features[y])).css("display", "none");	
 		}
 	 	
 	 }
 	 	
 	 });
  	
  	
  }
  
');
?>


<div id="feature_one">
	<span class="feature_header">

		<?php 
		
			echo '<strong><a href="' . $headline_one_link . '" target="_blank">' . $headline_one . '</a></strong>';
		  
		?>	

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_one_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="documents/images/frontpage/' . $headline_one_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_one_text; ?>

		</span>
		
            <p> <span id="feature_link"><a name="selected_feature" style="background-color:#CCC">&nbsp;</a></span>
            <span id="feature_link"><a href="javascript:display_feature('feature_two');">&nbsp;</a></span>
            <span id="feature_link"><a href="javascript:display_feature('feature_three');">&nbsp;</a></span>
            <span id="feature_link"><a href="javascript:display_feature('feature_four');">&nbsp;</a></span></p>


	</span>

</div>

<div id="feature_two">
	<span class="feature_header">

		<?php 
		
			echo '<strong><a href="' . $headline_two_link . '" target="_blank">' . $headline_two . '</a></strong>';
		  
		?>	

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_two_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="documents/images/frontpage/' . $headline_two_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_two_text; ?>

		</span>

                <p> <span id="feature_link"><a href="javascript:display_feature('feature_one');">&nbsp;</a></span>
                <span id="feature_link"><a name="selected_feature" style="background-color:#CCC">&nbsp;</a></span>
				<span id="feature_link"><a href="javascript:display_feature('feature_three');">&nbsp;</a></span>
                <span id="feature_link"><a href="javascript:display_feature('feature_four');">&nbsp;</a></span></p>

		
	</span>

</div>

<div id="feature_three">
	<span class="feature_header">

		<?php 
		
			echo '<strong><a href="' . $headline_three_link . '" target="_blank">' . $headline_three . '</a></strong>';
		  
		?>		

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_three_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="documents/images/frontpage/' . $headline_three_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_three_text; ?>

		</span>

                <p> <span id="feature_link"><a href="javascript:display_feature('feature_one');">&nbsp;</a></span>
                <span id="feature_link"><a href="javascript:display_feature('feature_two');">&nbsp;</a></span>
                <span id="feature_link"><a name="selected_feature" style="background-color:#CCC">&nbsp;</a></span>
				<span id="feature_link"><a href="javascript:display_feature('feature_four');">&nbsp;</a></span></p>
		
	</span>

</div>

<div id="feature_four">
	<span class="feature_header">

		<?php 
		
			echo '<strong><a href="' . $headline_four_link . '" target="_blank">' . $headline_four . '</a></strong>';
		  
		?>		

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_four_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="documents/images/frontpage/' . $headline_four_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_four_text; ?>

		</span>

                <p> <span id="feature_link"><a href="javascript:display_feature('feature_one');">&nbsp;</a></span>
                <span id="feature_link"><a href="javascript:display_feature('feature_two');">&nbsp;</a></span>
				<span id="feature_link"><a href="javascript:display_feature('feature_three');">&nbsp;</a></span>
                <span id="feature_link"><a name="selected_feature" style="background-color:#CCC">&nbsp;</a></span></p>
				
	</span>

</div>
