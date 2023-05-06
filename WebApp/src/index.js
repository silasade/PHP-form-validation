function clicked(){
    var name1=document.getElementById("name").value
    var email=document.getElementById("email").value
    var pass=document.getElementById("password").value
    var num=document.getElementById("number").value
    var zip=document.getElementById("zip").value
    var area=document.getElementById("area").value
    if (name1==""){
        document.getElementById("Name").innerText="Please enter your name"
        document.getElementById("name").style.borderColor="red"
        setTimeout(() => {
            window.open("http://127.0.0.1:5500/index.html", "_self");
        } ,1000);
    }
    else{
        document.getElementById("name").style.borderColor="greenyellow"
    }
    if (email==""){
        document.getElementById("Email").innerText="Please enter your email"
        document.getElementById("email").style.borderColor="red"
    }
    else{
        document.getElementById("email").style.borderColor="greenyellow"
    }
    if (pass==""){
        document.getElementById("Password").innerText="Please enter your password"
        document.getElementById("password").style.borderColor="red"
    }
    else{
        document.getElementById("password").style.borderColor="greenyellow"
    }
    if (num==""){
        document.getElementById("tel").innerText="Please enter your phone number"
        document.getElementById("number").style.borderColor="red"
    }
    else{
        document.getElementById("number").style.borderColor="greenyellow"
    }
    if (zip==""){
        document.getElementById("Zip").innerText="Please enter your zip code"
        document.getElementById("zip").style.borderColor="red"
    }
    else{
        document.getElementById("zip").style.borderColor="greenyellow"
    }
    if (area==""){
        document.getElementById("Area").innerText="Tell us about yourself"
        document.getElementById("area").style.borderColor="red"
    }
    else{
        document.getElementById("area").style.borderColor="greenyellow"
    }
}