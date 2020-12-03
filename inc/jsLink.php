<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
   

    <script> 
        $(document).ready(function(){
            $("#regForm").on('submit', function(event){
                if($("#fullname").val()==""){
                    event.preventDefault();
                    $("#fullnameErr").text("Error found in fullname");
                }

                if($("#username").val()==""){
                    event.preventDefault();
                    $("#usernameErr").text("Error found in the username");
                }

                if($("#email").val()==""){
                    event.preventDefault();
                    $("#emailErr").text("Error found in the email");
                }

                if($("#password").val()==""){
                    event.preventDefault();
                    $("#passwordErr").text("Error in the password");
                }

                if($("#position").val()==""){
                    event.preventDefault();
                    $("#positionErr").text("Error in the position");
                }
            })
        })

        function alertCard(){
        const btn = document.querySelector("#cart_btn");
        const spin = document.querySelector("#spin");
        const btnText = document.querySelector("#btn-text");
        const timer = () => {
        const myTest = document.querySelector("#cart_btn");
    //     const newsletter = document.querySelector("#newsletter");
    //     const closeletter = document.querySelector("#close");

    //     const showLetter = () => {
    //     newsletter.style.display = "block";
    //     };

    //     setTimeout(showLetter, 000);
    //     closeletter.addEventListener("click", ()=>{
    //     newsletter.style.display = "none;"
    //    });
               btn.innerHTML = "Add to cart";
           };

           btn.onclick = () => {
               spin.style.display = "inline-block";
               btnText.innerHTML = "Loading...";
               setTimeout(timer, 3000);
           };
        }
    


    </script>