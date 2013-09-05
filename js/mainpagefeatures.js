    /* Embed this JavaScript in the head tags or reference it externally */

	var features = [];
   	var i = 0;

       
    $(function(){
    
      features.push( "" );
      features.push( document.getElementById('feature_one').id );
      features.push( document.getElementById('feature_two').id );      
      features.push( document.getElementById('feature_three').id );
      features.push( document.getElementById('feature_four').id );
      
      $( document.getElementById( 'feature_one' ) ).css("display", "block");
      $( document.getElementById( 'feature_two' ) ).css("display", "none");
      $( document.getElementById( 'feature_three') ).css("display", "none");
      $( document.getElementById( 'feature_four') ).css("display", "none");
      
	  cycle_features();

    });    

    function cycle_features() {
  
	$(function(){

		t = setTimeout("cycle_features()", 9000);

		$(document.getElementById(features[i])).css("display", "none");
		i++;
		$(document.getElementById(features[i])).css("display", "block");

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
 	 	$(document.getElementById(features[y])).css("display", "block");
 	 	clearTimeout(t);
 	 	}
 		
 		else {
 		$(document.getElementById(features[y])).css("display", "none");	
 		}
 	 	
 	 }
 	 	
 	 });
  	
  	
  }
