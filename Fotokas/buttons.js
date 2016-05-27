window.onload = function() {
	document.querySelector(".content").style.opacity=1;
	document.querySelector(".preload").style.opcaity=0;
	document.querySelector(".preload").style.display="none";
}

document.querySelector(".login-show").addEventListener("click",
    function(event){
        document.querySelector(".login-area").style.display="inline-block";
        document.querySelector("#logintoggle1").style.display="none";
        document.querySelector("#logintoggle0").style.display="inline-block";
        document.querySelector("#logintoggle0").style.transform="scale(1)";
        
        document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";
		
		document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";
    
		document.querySelector(".upload-area").style.display="none";
		document.querySelector(".albums-area").style.display="none";
        document.querySelector("#feed-box").style.display="none";
		document.querySelector("#feed-submit-button").style.display="none";

        //document.querySelector(".main-funk").style.opacity = "0.2";
        //document.querySelector(".login-area").style.opacity="1";
    }
);

document.querySelector(".login-hide").addEventListener("click",
    function(event){
        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
    }
);

document.querySelector(".regin-show").addEventListener("click",
    function(event){
        document.querySelector(".regin-area").style.display="inline-block";
        document.querySelector("#regintoggle1").style.display="none";
        document.querySelector("#regintoggle0").style.display="inline-block";
        
        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
		
		document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";

		document.querySelector(".upload-area").style.display="none";
		document.querySelector(".albums-area").style.display="none";
        document.querySelector("#feed-box").style.display="none";
        document.querySelector("#feed-submit-button").style.display="none";
		document.querySelector("#regintoggle0").style.transform="scale(1)";
		
        //document.querySelector(".main-funk").style.opacity = "0.2";
        //document.querySelector(".regin-area").style.opacity="1";
    }
);

document.querySelector(".regin-hide").addEventListener("click",
    function(event){
        document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";
    }
);

document.querySelector(".menu-show").addEventListener("click",
    function(event){
        document.querySelector(".menu-area").style.display="inline-block";
        document.querySelector("#menutoggle1").style.display="none";
        document.querySelector("#menutoggle0").style.display="inline-block";
		document.querySelector("#menutoggle0").style.transform="scale(1)";
        
        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
		
		document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";

		document.querySelector(".upload-area").style.display="none";
		document.querySelector(".albums-area").style.display="none";
        document.querySelector("#feed-box").style.display="none";
        document.querySelector("#feed-submit-button").style.display="none";
		
        //document.querySelector(".main-funk").style.opacity = "0.2";
        //document.querySelector(".regin-area").style.opacity="1";
    }
);

document.querySelector(".menu-hide").addEventListener("click",
    function(event){
        document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";
    }
);

document.querySelector(".upload").addEventListener("click",
    function(event){
        document.querySelector(".upload-area").style.display="inline-block";
        document.querySelector(".albums-area").style.display="none";
        document.querySelector("#feed-box").style.display="none";
		document.querySelector("#feed-submit-button").style.display="none";

        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
		
        document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";
		
		document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";
    }
);

document.querySelector(".albums").addEventListener("click",
    function(event){
        document.querySelector(".albums-area").style.display="inline-block";
        document.querySelector(".upload-area").style.display="none";
        document.querySelector("#feed-box").style.display="none";
		document.querySelector("#feed-submit-button").style.display="none";
		
        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
		
        document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";
		
		document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";
    }
);

document.querySelector(".feedback").addEventListener("click",
    function(event){
        document.querySelector("#feed-box").style.display="inline-block";
        document.querySelector("#feed-submit-button").style.display="inline-block";
        document.querySelector(".upload-area").style.display="none";
        document.querySelector(".albums-area").style.display="none";
		
        document.querySelector(".login-area").style.display="none";
        document.querySelector("#logintoggle0").style.display="none";
        document.querySelector("#logintoggle1").style.display="inline-block";
		
        document.querySelector(".regin-area").style.display="none";
        document.querySelector("#regintoggle0").style.display="none";
        document.querySelector("#regintoggle1").style.display="inline-block";
		
		document.querySelector(".menu-area").style.display="none";
        document.querySelector("#menutoggle0").style.display="none";
        document.querySelector("#menutoggle1").style.display="inline-block";
    }
);

document.querySelector(".colors").addEventListener("click",
    function(event){
		var color_var = document.getElementById("color_var");
		document.body.style.backgroundColor=color_var.value;
	}
);

document.querySelector(".logoutb").addEventListener("click",
    function(event){
		die('asd');
	}
);

function closeWindow(){
	window.open('index.php', '_self', '');
	window.close();
}

document.querySelector("#user-name").addEventListener("click",
    function(event){
        document.querySelector("#user-name").value="none";
    }
);