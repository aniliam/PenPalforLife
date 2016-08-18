$("button").click(function(){
    
   window.location.replace("match.php?q="+$(this).attr('id'));
});