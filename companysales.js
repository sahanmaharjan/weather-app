

function fetchcomsales(){
var id = document.getElementById("comid").value;


$.ajax({
    url:"fetchcomsales.php",
    method:"POST",
    data:{
        y : id
    },
    dataType:"JSON",
    success:function(data){
        document.getElementById("comname").value=data.cnaam;
        document.getElementById("comname").setAttribute('readonly',true);

    }
})
}
