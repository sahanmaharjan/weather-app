function fetchitm(){
var id = document.getElementById("itemid").value;



$.ajax({
    url:"fetchsaleitem.php",
    method:"POST",
    data:{
        x : id
        
    },
    dataType:"JSON",
    success:function(data){

     

        document.getElementById("itemname").value=data.naam;
                document.getElementById("cost").value=data.cost;

                document.getElementById("itemname").setAttribute('readonly',true);
                document.getElementById("cost").setAttribute('readonly',true);
         

    }
    
       

})
}
