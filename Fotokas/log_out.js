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

function closeWindow() {
	window.open('index.php', '_self', '');
	window.close();
}
