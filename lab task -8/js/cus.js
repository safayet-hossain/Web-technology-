    function isValid(){
    var flag = true;
    var customerid=document.forms["cusA"]["customerid"].value;
    var fullname=document.forms["cusA"]["fullname"].value;
    var gender=document.forms["cusA"]["gender"].value;
    var dob=document.forms["cusA"]["dob"].value;
    var religion=document.forms["cusA"]["religion"].value;
    var Praddress=document.forms["cusA"]["Praddress"].value;
    var Peaddress=document.forms["cusA"]["Peaddress"].value;
    var phone=document.forms["cusA"]["phone"].value;
    var email=document.forms["cusA"]["email"].value;
    var package=document.forms["cusA"]["package"].value;
    var packageid=document.forms["cusA"]["packageid"].value;
    var packagetime=document.forms["cusA"]["packagetime"].value;
    var paymentm=document.forms["cusA"]["paymentm"].value;
    var payments=document.forms["cusA"]["payments"].value;
    
    if(customerid ==="")
    {
        flag = false;
        document.getElementById('customeridErr').innerHTML=" Customer Id can not be empty.";
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
    if(package ==="")
    {
        flag = false;
        document.getElementById('packageErr').innerHTML=" Package Type can not be empty.";
        
    }

    if(packageid ==="")
    {
        flag = false;
        document.getElementById('packageidErr').innerHTML=" Package Id can not be empty.";
        
    }
    if(packagetime ==="")
    {
        flag = false;
        document.getElementById('packagetimeErr').innerHTML=" Package Time can not be empty.";
        
    }

    if(paymentm ==="")
    {
        flag = false;
        document.getElementById('paymentmErr').innerHTML=" Payment method can not be empty.";
        
    }
    if(payments ==="")
    {
        flag = false;
        document.getElementById('paymentsErr').innerHTML=" Payment status can not be empty.";
        
    }

    return flag;
    }