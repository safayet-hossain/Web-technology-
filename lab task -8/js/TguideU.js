    function isValid(){
    var flag = true;
    var guideid=document.forms["guideU"]["guideid"].value;
    var fullname=document.forms["guideU"]["fullname"].value;
    var gender=document.forms["guideU"]["gender"].value;
    var dob=document.forms["guideU"]["dob"].value;
    var religion=document.forms["guideU"]["religion"].value;
    var Praddress=document.forms["guideU"]["Praddress"].value;
    var Peaddress=document.forms["guideU"]["Peaddress"].value;
    var phone=document.forms["guideU"]["phone"].value;
    var email=document.forms["guideU"]["email"].value;
    var country=document.forms["guideU"]["country"].value;
    var region=document.forms["guideU"]["region"].value;
    var type=document.forms["guideU"]["type"].value;
    var time=document.forms["guideU"]["time"].value;
    
    if(guideid ==="")
    {
        flag = false;
        document.getElementById('customeridErr').innerHTML=" Guide Id can not be empty.";
    }
    if(fullname ==="")
    {
        flag = false;
        document.getElementById('fullnameErr').innerHTML=" Fullname can not be empty.";
        
    }
    if(gender ==="")
    {
        flag = false;
        document.getElementById('genderErr').innerHTML=" Gender can not be empty.";
        
    }
    if(dob ==="")
    {
        flag = false;
        document.getElementById('dobErr').innerHTML=" Date of birth can not be empty.";
        
    }
    if(religion ==="")
    {
        flag = false;
        document.getElementById('religionErr').innerHTML=" Religion can not be empty.";
        
    }
    if(Praddress ==="")
    {
        flag = false;
        document.getElementById('PraddressErr').innerHTML=" Present Address can not be empty.";
        
    }
      if(Peaddress ==="")
    {
        flag = false;
        document.getElementById('PeaddressErr').innerHTML=" Permanent Address can not be empty.";
        
    }
      if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Phone number can not be empty.";
        
    }
    if(email ==="")
    {
        flag = false;
        document.getElementById('emailErr').innerHTML=" Email can not be empty.";
        
    }
    if(country ==="")
    {
        flag = false;
        document.getElementById('countryErr').innerHTML=" Country Name can not be empty.";
        
    }

    if(region ==="")
    {
        flag = false;
        document.getElementById('regionErr').innerHTML=" Region name can not be empty.";
        
    }
    if(type ==="")
    {
        flag = false;
        document.getElementById('typeErr').innerHTML=" Level of Guide can not be empty.";
        
    }

    if(time ==="")
    {
        flag = false;
        document.getElementById('timeErr').innerHTML=" Duration of Guiding can not be empty.";
        
    }

    return flag;
    }