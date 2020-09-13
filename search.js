/*let searchstate=document.getElementById('myInput').value.toUpperCase();    
let states = ["Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Daman and Diu",
                "Delhi","Goa","Gujrat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerla","Ladakh","Lakshadweep",
                "Madhya Pradesh","Maharashtra","Manipur","Mizoram","Nagaland","Odisha","Puducherry","Rajasthan","Sikkim","Tamil Nadu","Telangana",
                "Tripura","Uttar Pradesh","Uttrakhand","West Bengal" ];

var flag=0;
document.getElementById('searchform').onsubmit = function() {
    if(document.getElementById('myInput').value.toUpperCase() ==""){
        window.alert("please enter any state");
        return false;
    }
    for(var i=0;i<states.length;i++){
        if(states[i].toUpperCase(). localeCompare(document.getElementById('myInput').value.toUpperCase())==0){
            window.location = 'http://localhost/corona virus/' + document.getElementById('myInput').value.toUpperCase();
            return false;
        }
        else if(states[i].toUpperCase(). localeCompare(document.getElementById('myInput').value.toUpperCase())!=0){
            flag=1;
        }
    }if(flag==1){
        alert('you have insert wrong data please insert state name and check again '+document.getElementById('myInput').value.toUpperCase());
    }   
    
};*/

let states = ["Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Daman and Diu",
                "Delhi","Goa","Gujrat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerla","Ladakh","Lakshadweep",
                "Madhya Pradesh","Maharashtra","Manipur","Mizoram","Nagaland","Odisha","Puducherry","Rajasthan","Sikkim","Tamil Nadu","Telangana",
                "Tripura","Uttar Pradesh","Uttrakhand","West Bengal" ];

var flag=0;
document.getElementById('searchform').onsubmit = function() {
    if(document.getElementById('myInput').value.toUpperCase() ==""){
        window.alert("please enter any state");
        return false;
    }
    for(var i=0;i<states.length;i++){
        if(states[i].toUpperCase(). localeCompare(document.getElementById('myInput').value.toUpperCase())==0){
            window.location = 'https://covid19-statusindia.000webhostapp.com/' + document.getElementById('myInput').value.toUpperCase()+'.php';
            return false;
        }
        else if(states[i].toUpperCase(). localeCompare(document.getElementById('myInput').value.toUpperCase())!=0){
            flag=1;
        }
    }if(flag==1){
        alert('you have insert wrong data please insert state name and check again '+document.getElementById('myInput').value.toUpperCase());
    }   
    
};






//console.log(states[i].toUpperCase());
/*redirect.addEventListener('click',() =>{
    for(var i=0;i<states.length;i++){
        let result=states[i].toUpperCase(). localeCompare(searchstate);
        if(result==0){
            alert("gfa");
            window.location = 'http://localhost/corona%20virus/' + document.getElementById('myInput').value;
            return false;
        }
        break;
    }
    
});*/
    




/*document.getElementById('searchform').onsubmit = function() {
    window.location = 'http://localhost/corona%20virus/' + document.getElementById('myInput').value;
    return false;
}
  */