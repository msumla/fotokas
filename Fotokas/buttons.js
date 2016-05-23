window.onload = function() {
    document.body.style.opacity = "1";
}

document.querySelector(".upload").addEventListener("click",
    function(event){
        document.querySelector(".upload-area").style.display="inline-block";
        document.querySelector(".albums-area").style.display="none";
    }
);

document.querySelector(".albums").addEventListener("click",
    function(event){
        document.querySelector(".albums-area").style.display="inline-block";
        document.querySelector(".upload-area").style.display="none";
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






document.querySelector(".logout-show").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="inline-block";
        document.querySelector("#logouttoggle1").style.display="none";
        document.querySelector("#logouttoggle0").style.display="inline-block";
    }
);

document.querySelector(".logout-hide").addEventListener("click",
    function(event){
        document.querySelector(".logform").style.display="none";
        document.querySelector("#logouttoggle0").style.display="none";
        document.querySelector("#logouttoggle1").style.display="inline-block";
    }
);


