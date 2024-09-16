// Menu

$(document).ready(function(){

    user();
    function user(){
        $.ajax({

            type:"POST",
            url:"new.php",
            data:{

            },
            success:function(res){
                if(res!=0){
                    $("#hef").text(res)
                }
            }
        });
    }

});

let navbar = document.getElementById("menus");

// Write condition

const toggle = () => {
    
    //When
    if (navbar.style.display == "none"){
        navbar.style.display = "block";
        navbar.style.textAlign = "left";
    }
    else{
        navbar.style.display = "none";
    }

}