$(document).ready(function(){
    
    $('#submit').on('click',function(){
        
    
        var name = $('#name').val();
        var shout = $('#shout').val();
        var date = $('#date').val();
        $('#name').val('');
        $('#shout').val('');
        var outText = 'name='+name+ '&shout=' + shout;
        
       
            
            if(name=='' || shout == '')
                {
                    alert("Please fill in your name and shout");
                }
            
            else{
            $.ajax({
                
                type:"POST",
                url:"database.php",
                data:outText,
                cache:false,
                success:function(html)
                {
                    $('#shouts ul').prepend(html);
                }
                
                
                
            });
    
    
            }
        
        
        
        
        return false;
    
     });
});