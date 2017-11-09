
<html>
    <head>

        <script>
            function verander(teller) {

                var duckvar;
                if (teller = 1) {
                    document.getElementById("duck1").src = "streep.jpg";
                } 
                else {
                    alert(teller);
                    document.getElementById("duck2").src = "streep.jpg";
                }


//                style.color = "red";



            }
        </script>


        <title>memory</title>
    </head>
    <body>
        <table> <tr>
                <td 
                    <p>  <img onclick = "verander(1)" src="zwart.png" width="210" height="210" id="duck1" /> </p>
                    <p>  <img onclick = "verander(2)" src="zwart.png" width="210" height="210" id="duck2" /> </p>
                    <!-----                    <button onclick = "verander()"  >  qaz </button>
                    
                                    </td> </tr>
                    
                    <!----        <img onclick="verander()" src="eend.png" id=duck width="210" height="210" alt="eend"  loll/>
                    
                    
                    
                    <?php
                    // put your code here
                    ?>
                    </body>
                    </html>
