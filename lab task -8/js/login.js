    function isValid(){
    var flag = true;
    var username=document.forms["login"]["username"].value;
    var password=document.forms["login"]["password"].value;

    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" Username can not be empty.";
        
    }

    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
        
    }
    return flag;
    }