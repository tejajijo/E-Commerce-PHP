function check(){
    $pname=document.bookingt.pname.value;
    $date=document.bookingt.date.value;
    $time=document.bookingt.date.value;
    
    if($pname==""){
     window.alert("Enter your desired bike name");
        return false;
        focus();
    }
    
    if($date==""){
     window.alert("Enter date");
        return false;
        focus();
    }
    
    if($time==""){
     window.alert("Enter time");
        return false;
        focus();
    }
    else{
        window.confirm("Submit your booking");
        
    }
}