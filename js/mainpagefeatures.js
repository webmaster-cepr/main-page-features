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
