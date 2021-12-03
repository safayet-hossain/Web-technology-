    function isValid(val){
    var flag = true;
    var guideid= val.guideid.value;
    var fullname= val.fullname.value;
    var gender= val.gender.value;
    var dob= val.dob.value;
    var religion= val.religion.value;
    var Praddress= val.Praddress.value;
    var Peaddress= val.Peaddress.value;
    var phone= val.phone.value;
    var email= val.email.value;
    var country= val.country.value;
    var region= val.region.value;
    var type= val.type.value;
    var time= val.time.value;
    
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


        function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("guideid",pform.guideid.value);
        data.append("fullname",pform.fullname.value);
        data.append("gender",pform.gender.value);
        data.append("dob",pform.dob.value);
        data.append("religion",pform.religion.value);
        data.append("Praddress",pform.Praddress.value);
        data.append("Peaddress",pform.Peaddress.value);
        data.append("phone",pform.phone.value);
        data.append("email",pform.email.value);
        data.append("country",pform.country.value);
        data.append("region",pform.region.value);
        data.append("type",pform.type.value);
        data.append("time",pform.time.value);
        
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("guide").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../SAKIB/Controller/guideAjax.php");
        xhttp.send(data);

    }
    
}