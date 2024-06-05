function uploadvalidation(){
    var image=document.addproduct.image.value;
    var model=document.addproduct.model.value;
    var varient=document.addproduct.varient.value;
    var color=document.addproduct.color.value;
    var displacement=document.addproduct.displacement.value;
    var speed=document.addproduct.speed.value;
    var weight=document.addproduct.weight.value;
    var discription=document.addproduct.discription.value;
    
    if(image==""){
        alert("CHOOSE SUITABLE IMAGE");
        return false;
    }
    
    if(model==""){
        alert("ENTER THE MODEL OF BIKE");
        return false;
    }
    
    if(varient==""){
        alert("ENTER THE VARIENT");
        return false;
    }
    
    if(color==""){
        alert("ENTER THE COLOR OF BIKE");
        return false;
    }
    
    if(displacement==""){
        alert("ENTER THE DISPLACEMENT");
        return false;
    }
    
    if(speed==""){
        alert("ENTER THE TOP SPEED OF BIKE");
        return false;
    }
    
    if(weight==""){
        alert("ENTER THE WEIGHT OF BIKE");
        return false;
    }
    
    if(discription==""){
        alert("ENTER THE DESCRIPTION ABOUT BIKE");
        return false;
    }
}