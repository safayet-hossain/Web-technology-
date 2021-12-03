    function isValid(){
    var flag = true;
    var guideid=document.forms["guideV"]["guideid"].value;
    
    if(guideid ==="")
    {   
        flag = false;
        document.getElementById('guideidErr').innerHTML=" Guide Id can not be empty.";
    }
    return flag;
    }