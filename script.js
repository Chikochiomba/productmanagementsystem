var form = document.querySelector("form");
form.addEventListener("submit", function (event){
    event.preventDefault();
    var request = new XMLHttpRequest();
    var formdata = new FormData(form);
    request.open("POST","process.php",true);
    request.onreadystatechange = function (){
        if(this.readyState ===4 && this.status===200){
            var feedback = document.querySelector(".p");
            if(this.responseText != null){
                feedback.innerHTML=this.responseText;
            }else{
                document.write("Error no server response:");
            }
        }
    };
    request.send(formdata);
});