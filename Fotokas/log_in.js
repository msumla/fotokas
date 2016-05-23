document.querySelector(".login-show").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="inline-block";
        document.querySelector("#logintoggle1").style.display="none";
        document.querySelector("#logintoggle0").style.display="inline-block";
    }
);

document.querySelector(".login-hide").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
    }
);

function closeWindow() {
	window.open('index.php', '_self', '');
	window.close();
}

document.querySelector("#user-name").addEventListener("click",
    function(event){
        document.querySelector("#user-name").value="none";
    }
);
