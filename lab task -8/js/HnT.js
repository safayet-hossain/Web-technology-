    function isValid(){
    var flag = true;
    var hotelname=document.forms["hntA"]["hotelname"].value;
    var roomtype=document.forms["hntA"]["roomtype"].value;
    var roomf=document.forms["hntA"]["roomf"].value;
    var htype=document.forms["hntA"]["htype"].value;
    var comp=document.forms["hntA"]["comp"].value;
    var hloc=document.forms["hntA"]["hloc"].value;
    var hprice=document.forms["hntA"]["hprice"].value;
    var vehicleid=document.forms["hntA"]["vehicleid"].value;
    var vehiclemodel=document.forms["hntA"]["vehiclemodel"].value;
    var vehiclearea=document.forms["hntA"]["vehiclearea"].value;
    var vehicleseat=document.forms["hntA"]["vehicleseat"].value;
    var vehicledur=document.forms["hntA"]["vehicledur"].value;
    var vehiclefee=document.forms["hntA"]["vehiclefee"].value;

    
    if(hotelname ==="")
    {
        flag = false;
        document.getElementById('hotelnameErr').innerHTML=" Please fill this field";
    }
    if(roomtype ==="")
    {
        flag = false;
        document.getElementById('roomtypeErr').innerHTML=" Please fill this field";
        
    }
    if(roomf ==="")
    {
        flag = false;
        document.getElementById('roomfErr').innerHTML=" Please fill this field";
        
    }
    if(htype ==="")
    {
        flag = false;
        document.getElementById('htypeErr').innerHTML=" Please fill this field";
        
    }
    if(comp ==="")
    {
        flag = false;
        document.getElementById('compErr').innerHTML=" Please fill this field";
        
    }
    if(hloc ==="")
    {
        flag = false;
        document.getElementById('hlocErr').innerHTML=" Please fill this field";
        
    }
      if(hprice ==="")
    {
        flag = false;
        document.getElementById('hpriceErr').innerHTML=" Please fill this field";
        
    }
      if(vehicleid ==="")
    {
        flag = false;
        document.getElementById('vehicleidErr').innerHTML=" Please fill this field";
        
    }
    if(vehiclemodel ==="")
    {
        flag = false;
        document.getElementById('vehiclemodelErr').innerHTML=" Please fill this field";
        
    }
    if(vehiclearea ==="")
    {
        flag = false;
        document.getElementById('vehicleareaErr').innerHTML=" Please fill this field";
        
    }

    if(vehicleseat ==="")
    {
        flag = false;
        document.getElementById('vehicleseatErr').innerHTML=" Please fill this field";
        
    }
    if(vehicledur ==="")
    {
        flag = false;
        document.getElementById('vehicledurErr').innerHTML=" Please fill this field";
        
    }

    if(vehiclefee ==="")
    {
        flag = false;
        document.getElementById('vehiclefeeErr').innerHTML=" Please fill this field";
        
    }

    return flag;
    }