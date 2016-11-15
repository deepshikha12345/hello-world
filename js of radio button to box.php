<script type="text/javascript">
jQuery.noConflict();

require([ 'jquery', 'jquery/ui'], function(jQuery){

jQuery(document).ready(function(){
    //console.log("I am here");
 jQuery('.nested.options-list.field.choice').click(function(){
 if(jQuery('.active').length){
jQuery('.active').not($(this)).removeClass('active').addClass('field choice');
}      
jQuery(this).removeClass('field choice').addClass('active');     
}); 
     
});

 });
 
</script>