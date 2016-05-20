document.querySelector("#albumsbutton").addEventListener("click",
    function(event){
        document.querySelector(".albums-area").style.display="inline-block";
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
