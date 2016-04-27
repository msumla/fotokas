document.querySelector(".login-show").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="block";
        document.querySelector("#logintoggle1").style.display="none";
        document.querySelector("#logintoggle0").style.display="block";
    }
);

document.querySelector(".login-hide").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="block";
    }
);

function closeWindow() {
	window.open('index.php', '_self', '');
	window.close();
}