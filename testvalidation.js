function validation() {
    var bmodel = document.test.pname.value;
    var bookdate=document.test.date.value;
    var time=document.test.time.value;
    
     if (bmodel == "") {
         document.test.pname.style.border="1px solid red";        window.alert("Enter your desired bike");
        return false;
    }
    
    if (bookdate == "") {
         document.test.pname.style.border="1px solid red";        window.alert("Enter date for booking");
        return false;
    }
    
}
