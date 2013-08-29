<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$document = JFactory::getDocument();
$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
$document = JFactory::getDocument();
$document->addScriptDeclaration('
    window.event("domready", function() {
        $(function(){

		$( document.getElementById('feature_two') ).css("display", "none");
		$( document.getElementById('feature_three') ).css("display", "none");

		});
    });
');
?>

<?php 

$headline_one = $params->get('headline_one');
$headline_two = $params->get('headline_two');
$headline_three = $params->get('headline_three');

$headline_one_link = $params->get('headline_one_link');
$headline_two_link = $params->get('headline_two_link');
$headline_three_link = $params->get('headline_three_link');

$headline_one_image = $params->get('headline_one_image');
$headline_two_image = $params->get('headline_two_image');
$headline_three_image = $params->get('headline_three_image');
 
$headline_one_text = $params->get('headline_one_text');
$headline_two_text = $params->get('headline_two_text');
$headline_three_text = $params->get('headline_three_text');

?>

<div id="feature_one">
	<span class="feature_header">

		<?php 
		
		  if ($headlink_one_link == '') { 
		  echo '<strong>' . $headline_one . '</strong>';
		  } 

		  else { 
		  echo '<strong><a href="' . $headline_one_link . '" target="_blank">' . $headline_one . '</a></strong>';
		  }
	  
		  ?>	

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_one_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="/images/frontpage/' . $headline_one_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_one_text; ?>

		</span>
		
		<p> 1 | 2 | 3 </p>

	</span>

</div>

<div id="feature_two">
	<span class="feature_header">

		<?php 
		
		  if ($headline_two_link == '') { 
		  echo '<strong>' . $headline_two . '</strong>';
		  } 

		  else { 
		  echo '<strong><a href="' . $headline_two_link . '" target="_blank">' . $headline_two . '</a></strong>';
		  }
	  
		  ?>	

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_two_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="/images/frontpage/' . $headline_two_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_two_text; ?>

		</span>

		<p> 1 | 2 | 3 </p>
		
	</span>

</div>

<div id="feature_three">
	<span class="feature_header">

		<?php 
		
		  if ($headlink_three_link == '') { 
		  echo '<strong>' . $headline_three . '</strong>';
		  } 

		  else { 
		  echo '<strong><a href="' . $headline_three_link . '" target="_blank">' . $headline_three . '</a></strong>';
		  }
	  
		  ?>	

	</span>

	<span class="feature_text">
	
		<a href="<?php echo $headline_three_link; ?>" target="_blank">
		
			<?php 
					
			echo '<br/><br/><img src="/images/frontpage/' . $headline_three_image . '" alt=""/><br/><br/>'; 
					
			?>
		
		</a>

		<span class="pageIntro">

			<?php echo $headline_three_text; ?>

		</span>

		<p> 1 | 2 | 3 </p>
		
	</span>

</div>