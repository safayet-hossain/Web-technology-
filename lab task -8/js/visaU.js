    function isValid(){
    var flag = true;
    var visaid=document.forms["visaU"]["visaid"].value;
    var countryname=document.forms["visaU"]["countryname"].value;
    var visatype=document.forms["visaU"]["visatype"].value;
    var personaldocument=document.forms["visaU"]["personaldocument"].value;
    var professionaldocuments=document.forms["visaU"]["professionaldocuments"].value;
    var financialdocument=document.forms["visaU"]["financialdocument"].value;
    var overseasdocument=document.forms["visaU"]["overseasdocument"].value;
    var protime=document.forms["visaU"]["protime"].value;
    var fess=document.forms["visaU"]["fess"].value;
    var phone=document.forms["visaU"]["phone"].value;


    
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