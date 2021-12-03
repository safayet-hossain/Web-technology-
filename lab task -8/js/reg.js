    function isValid(val){
    var flag = true;
    var fname=  val.fname.value
    var lname=  val.lname.value
    var fullname=  val.fullname.value
    var gender=  val.gender.value
    var dob=  val.dob.value
    var religion=  val.religion.value
    var Praddress=  val.Praddress.value
    var Peaddress=  val.Peaddress.value
    var phone=  val.phone.value
    var email=  val.email.value
    var username=  val.username.value
    var password=  val.password.value

    
    if(fname ==="")
    {
        flag = false;
        document.getElementById('fnameErr').innerHTML=" First name can not be empty.";
    }
    if(lname ==="")
    {
        flag = false;
        document.getElementById('lnameErr').innerHTML=" Last name can not be empty.";
        
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
    if(username ==="")
    {
        flag = false;
        document.getElementById('usernameErr').innerHTML=" User name can not be empty.";
        
    }

    if(password ==="")
    {
        flag = false;
        document.getElementById('passwordErr').innerHTML=" Password can not be empty.";
        
    }
    return flag;
    }
    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("fname",pform.fname.value);
        data.append("lname",pform.lname.value);
        data.append("fullname",pform.fullname.value);
        data.append("gender",pform.gender.value);
        data.append("dob",pform.dob.value);
        data.append("religion",pform.religion.value);
        data.append("Praddress",pform.Praddress.value);
        data.append("Peaddress",pform.Peaddress.value);
        data.append("phone",pform.phone.value);
        data.append("email",pform.email.value);
        data.append("username",pform.username.value);
        data.append("password",pform.password.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("reg").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../SAKIB/Controller/regAjax.php");
        xhttp.send(data);

    }
    
}