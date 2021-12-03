    function isValid(){
    var flag = true;
    var passwordo=document.forms["pass"]["passwordo"].value;
    var password=document.forms["pass"]["password"].value;
    var passwordr=document.forms["pass"]["passwordr"].value;


    
    if(passwordo ==="")
    {
        flag = false;
        document.getElementById('passwordoErr').innerHTML=" This field can not be empty.";
    }
    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" This field can not be empty.";
        
    }
    if(passwordr ==="")
    {
        flag = false;
        document.getElementById('passwordrErr').innerHTML=" This field can not be empty.";
        
    }
    return flag;
    }