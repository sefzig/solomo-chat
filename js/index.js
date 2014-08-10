      
 // Jquery nur für Nicescroll...
    $(document).ready(function()
    {
       $("#result").niceScroll(); 
    });
   
 // Get the HTTP Object
    function getHTTPObject(){
       if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
       else if (window.XMLHttpRequest) return new XMLHttpRequest();
       else {
          alert("Your browser does not support AJAX.");
          return null;
       }
    }   

 // Change the value of the outputText field
    function setOutput(){
       if(httpObject.readyState == 4){
          var response = httpObject.responseText;
          var objDiv = document.getElementById("result");
          objDiv.innerHTML += response;
          objDiv.scrollTop = objDiv.scrollHeight;
          var inpObj = document.getElementById("msg");
          inpObj.value = "";
          inpObj.focus();
          
          $("#result").getNiceScroll().resize();
       }
    }

 // Change the value of the outputText field
    function setAll(){
       if(httpObject.readyState == 4){
          var response = httpObject.responseText;
          var objDiv = document.getElementById("result");
          if (objDiv) {
             objDiv.innerHTML = response;
             objDiv.scrollTop = objDiv.scrollHeight;
          }
       }
    }

 // Implement business logic    
    function doWork(){    
       httpObject = getHTTPObject();
       if (httpObject != null) {
          console.log("daten: "+daten);
          link = "php/daten.php?sitzung="+sitzung+"&daten="+daten+"&nick="+nickName+"&msg="+document.getElementById('msg').value;
          httpObject.open("GET", link , true);
          httpObject.onreadystatechange = setOutput;
          httpObject.send(null);
       }
    }

 // Implement business logic    
    function doReload(){    
       httpObject = getHTTPObject();
       var randomnumber=Math.floor(Math.random()*10000);
       if (httpObject != null) {
          link = "php/daten.php?sitzung="+sitzung+"&all=1&rnd="+randomnumber;
          httpObject.open("GET", link , true);
          httpObject.onreadystatechange = setAll;
          httpObject.send(null);
       }
    }

    function UpdateTimer() {
       doReload();   
       timerID = setTimeout("UpdateTimer()", 2000);
    }
    
    function keypressed(e){
       if(e.keyCode=='13'){
          doWork();
       }
    }
    