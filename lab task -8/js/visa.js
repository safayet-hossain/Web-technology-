   function isValid(val){
    var flag = true;
    var visaid=val.visaid.value;
    var countryname=val.countryname.value;
    var visatype=val.visatype.value;
    var personaldocument=val.personaldocument.value;
    var professionaldocuments=val.professionaldocuments.value;
    var financialdocument=val.financialdocument.value;
    var overseasdocument=val.overseasdocument.value;
    var protime=val.protime.value;
    var fess=val.fess.value;
    var phone=val.phone.value;


    
    if(visaid ==="")
    {
        flag = false;
        document.getElementById('visaidErr').innerHTML=" Please fill this field";
    }
    if(countryname ==="")
    {
        flag = false;
        document.getElementById('countrynameErr').innerHTML=" Please fill this field";
        
    }
    if(visatype ==="")
    {
        flag = false;
        document.getElementById('visatypeErr').innerHTML=" Please fill this field";
        
    }
    if(personaldocument ==="")
    {
        flag = false;
        document.getElementById('personaldocumentErr').innerHTML=" Please fill this field";
        
    }
    if(professionaldocuments ==="")
    {
        flag = false;
        document.getElementById('professionaldocumentsErr').innerHTML=" Please fill this field";
        
    }
    if(financialdocument ==="")
    {
        flag = false;
        document.getElementById('financialdocumentErr').innerHTML=" Please fill this field";
        
    }
      if(overseasdocument ==="")
    {
        flag = false;
        document.getElementById('overseasdocumentErr').innerHTML=" Please fill this field";
        
    }
      if(protime ==="")
    {
        flag = false;
        document.getElementById('protimeErr').innerHTML=" Please fill this field";
        
    }
    if(fess ==="")
    {
        flag = false;
        document.getElementById('fessErr').innerHTML=" Please fill this field";
        
    }
    if(phone ==="")
    {
        flag = false;
        document.getElementById('phoneErr').innerHTML=" Please fill this field";
        
    }


    return flag;
    }

    function add(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("visaid",pform.visaid.value);
        data.append("countryname",pform.countryname.value);
        data.append("visatype",pform.visatype.value);
        data.append("personaldocument",pform.personaldocument.value);
        data.append("professionaldocuments",pform.professionaldocuments.value);
        data.append("financialdocument",pform.financialdocument.value);
        data.append("overseasdocument",pform.overseasdocument.value);
        data.append("protime",pform.protime.value);
        data.append("fess",pform.fess.value);
        data.append("phone",pform.phone.value);
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("visa").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../SAKIB/Controller/ajx.php");
        xhttp.send(data);

    }
    
}