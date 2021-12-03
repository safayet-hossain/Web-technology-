function validation(val){
    var customerid = val.customerid.value;
    var flag = true;   
    if(customerid ==="")
    {   
        flag = false;
        document.getElementById('customeridErr').innerHTML=" Customer Id can not be empty.";
    }
    return flag;
    }
    function result(pForm)
    {   

        var isValid=validation(pForm);
        if(isValid){
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status===200) {
                  document.getElementById("his").innerHTML = this.responseText;
            }
        }
        xhttp.open("POST","../SAKIB/Controller/cusViewAjax.php");
        xhttp.send();
    }
    }
    function view()
    {   

        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if (this.status===200) {
                  document.getElementById("his").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET","../SAKIB/Controller/cusViewAjax.php");
        xhttp.send();
    }