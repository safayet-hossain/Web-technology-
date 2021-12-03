    function isValid(val){
    var flag = true;
    var hotelname  =  val.hotelname.value;
    var roomtype  =  val.roomtype.value;
    var roomf  =  val.roomf.value;
    var htype  =  val.htype.value;
    var comp  =  val.comp.value;
    var hloc  =  val.hloc.value;
    var hprice  =  val.hprice.value;
    var vehicleid  =  val.vehicleid.value;
    var vehiclemodel  =  val.vehiclemodel.value;
    var vehiclearea  =  val.vehiclearea.value;
    var vehicleseat  =  val.vehicleseat.value;
    var vehicledur  =  val.vehicledur.value;
    var vehiclefee  =  val.vehiclefee.value;

    
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

        function up(pform) {
        var valid=isValid(pform);
        if(valid){
        var data = new FormData();
        data.append("hotelname",pform.hotelname.value);
        data.append("roomtype",pform.roomtype.value);
        data.append("roomf",pform.roomf.value);
        data.append("htype",pform.htype.value);
        data.append("comp",pform.comp.value);
        data.append("hloc",pform.hloc.value);
        data.append("hprice",pform.hprice.value);
        data.append("vehicleid",pform.vehicleid.value);
        data.append("vehiclemodel",pform.vehiclemodel.value);
        data.append("vehiclearea",pform.vehiclearea.value);
        data.append("vehicleseat",pform.vehicleseat.value);
        data.append("vehicledur",pform.vehicledur.value);
        data.append("vehiclefee",pform.vehiclefee.value);
        
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function()
        {
        if (this.status===200) {
            document.getElementById("Hntup").innerHTML = this.responseText;
        }
        }
        xhttp.open("POST","../SAKIB/Controller/HnTuAjax.php");
        xhttp.send(data);

    }
    
}