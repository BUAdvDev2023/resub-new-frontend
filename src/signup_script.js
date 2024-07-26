var a;

function pass(){
    if (a==1){
        document.getElementById("passInput").type="password";
        document.getElementById("passIcon").src="Images/showPassword.png";
        a=0;
    }
    else{
        document.getElementById("passInput").type="text";
        document.getElementById("passIcon").src="Images/hidePassword.png";
        a=1;
    }
}
