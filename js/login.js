






function design()

{
    var design = document.getElementById("el1").className="test";
}

function logIn()
{
    alert("welcome : "+uName.value);
}






var danger = document.getElementsByClassName("alert-danger");
var success =document.getElementsByClassName("alert-success");
var secondary=document.getElementsByClassName("alert-secondary");
var warning=document.getElementsByClassName("alert-warning");
var infor=document.getElementsByClassName("alert-info");
function validation()
{
    var userName =document.getElementById("uname").value;
    var r =/^[A-Z][a-z]{3,6}[!@#$%^&&*()_][0-9]{3}$/;
    var r1=/[!@#$%^&&*()_]/;
    var r2=/^[A-Z]/;
    var r3=/[0-9]{3}/;
    if(r3.test(userName)==false)
        {
            infor[0].style.display="block";
            
             warning[0].style.display="none";
            secondary[0].style.display="none"; 
        }
    else
        {
            infor[0].style.display="none";
        }
    if(r2.test(userName)==false)
        {
            warning[0].style.display="block";
        }
    else
        {
            warning[0].style.display="none";
        }
    if(r1.test(userName)==false)
        {
            secondary[0].style.display="block";
        }
    else 
        {
              secondary[0].style.display="none"; 
        }

    if(r.test(userName)==false)
        {
            danger[0].style.display="block";
            success[0].style.display="none";
        }
    else
        {
                 danger[0].style.display="none";
