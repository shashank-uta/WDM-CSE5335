<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ibras.css">
    <title>Menu</title>
</head>

    <body>

        
        <div class="login-popup">
            <div class="form-popup" id="popupForm_registration">
              <form action="/action_page.php" class="form-container">
    
                <img onclick="closeForm_registration()" src="close_small_icon.jpeg" height="32" width="32" style="margin-left: 325px; margin-top: 1px;">
    
                <img class="bimage" src="Burguer.png">
                <p style="font-family: mountain;float: right;">Registro de Usuario</p>
            
            <label for="username">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Nombre y apellido:</p>
            </label>
            <input type="text" id="email" placeholder="username" name="username" required>

            <label for="email">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Correo:</p>
            </label>
            <input type="password" id="psw" placeholder="Email" name="email" required>

            <label for="psw">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Contrasena:</p>
            </label>
            <input type="password" id="psw" placeholder="Password" name="password" required>

            <label for="psw">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Repetir Contrasena:</p>
            </label>
            <input type="text" id="email" placeholder="Confirm Password" name="repeat_password" required>

            <label for="address">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;" >Direccion:</p>
            </label>
            
            <input type="text" style="line-height: 60px;" id="email" placeholder="Address" name="address" required>
            
            <input type="button" class="btn cancel" onclick="closeForm_registration()" style="float: right;" value="Cargar">
            
          </form>
        </div>
      </div>




      <script>
        function openForm_registration() {
            document.getElementById("popupForm_login").style.display = "none";
            document.getElementById("popupForm_registration").style.display = "block";
        }
        
        function closeForm_registration() {
          document.getElementById("popupForm_registration").style.display="none";
        }
      </script>






<div class="login-popup">
    <div class="form-popup1 modal-content animate form-container" id="popupForm_login">
      <form action="/action_page.php" class="form-container">
        <img onclick="closeForm_login()" src="close_small_icon.jpeg" height="20" width="20" style="margin-left: 305px; margin-top: 1px;">

        <img style="float: left;margin-top: -20px;" class="bimage" src="Burguer.png">
        <h3 style="font-family: mountain;float: right;margin-top: -20px;">Iniciar Sesion</h3>
  
        <label for="username">
        <p style="text-align: left; margin-top: 45px; margin-bottom: 5px;">Usuario:</p>
        </label>
        <input type="text" id="email" placeholder="username" name="username" required>



        <label for="psw">
        <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Contrasena:</p>
        </label>
        <input type="password" id="psw" placeholder="Password" name="password" required>

        
       
        
        <input type="button" id="page_redirect" class="btn cancel"  style="float: right;" value="Entrar">
        
      </form>
    </div>
  </div>




  <script>
    function openForm_login() {
        document.getElementById("popupForm_registration").style.display = "none";
            document.getElementById("popupForm_login").style.display = "block";
    }

    function closeForm_login() {
        document.getElementById("popupForm_login").style.display = "none";
    }
    document.getElementById("page_redirect").onclick = function() {
        location.href = "./dashboard.html#";
        };
</script>





            <div class="wrapper">

                <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(hamburguesa5.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">

                <div id="menunav" class="container1" style="padding-left: 70px;" >
                    <header>
                        <nav id="desktopnav">
                            <img src="5.png">
                            <a class="active" href="./website.html">INCIO</a>
                            <a  href="./sobrenosotros.html">SOBRE NOSOTROS</a>
                            <a href="./Menu.html">MENU</a>
                            <a href="http://sxs7592.uta.cloud/">BLOG</a>
                            <a href="./contacto.html#">CONTACTO</a>
                            <a href="#" onclick="openForm_registration()">REGISTRO</a>
                            <a href="#" onclick="openForm_login()">INICIAR SESION</a>
                        </nav>
        
                        <nav id="mobilenav">
                            <a href="javascript:void(0);" style="float: left; padding-top: 5%;" class="icon" onclick="shownav()">
                                <i class="fa fa-bars"></i>
                         <div id="navlinks">
                            <a class="active" href="./website.html">INCIO</a>
                            <a  href="./sobrenosotros.html">SOBRE NOSOTROS</a>
                            <a href="./Menu.html">MENU</a>
                            <a href="http://sxs7592.uta.cloud/">BLOG</a>
                            <a href="./contacto.html#">CONTACTO</a>
                            <a href="#" onclick="openForm_registration()">REGISTRO</a>
                            <a href="#" onclick="openForm_login()">INICIAR SESION</a>
                         </div>
                        
                            
                            </a>            
                         </nav>
                    </header>
                </div>

                <script>
                    function shownav(){
                        var x = document.getElementById("navlinks");
                          if (x.style.display === "block") {
                           x.style.display = "none";
                          } else {
                           x.style.display = "block";
                        }
                    }   
                    </script>

                <div class="container2" style="height: 39vh;">
                    <p><font color="white">LAS MEJORES DE LA CIUDAD</font></p>
                    <h2><font color="white">Menú</font></h2>
                </div>

                </div>

                <div  class="container2" style="height: 65vh;">
                    <h2><font color="white">Elija su Hamburguesa</font></h2>
                    <table id="tablemen1" align="center" >
                        <tr>
                            <td>
                                <img class ="items" src="burguer1.png">
                                <p><font color="white">Mixta</font></p>
                                <p><strong><font color="white">$11.90</font></strong></p>
                                <button class="buttonitems">Ordenar ahora</button>
                            </td>
                            <td>
                                <img class ="items" src="burguer2.png">
                                <p><font color="white">Pollo</font></p>
                                <p><strong><font color="white">$11.90</font></strong></p>
                                <button class="buttonitems">Ordenar ahora</button>
                            </td>
                            <td>
                                <img class ="items" src="burguer3.png">
                                <p><font color="white">Carne</font></p>
                                <p><strong><font color="white">$11.90</font></strong></p>
                                <button class="buttonitems">Ordenar ahora</button>
                            </td>
                            <td>
                                <img class ="items" src="burguer2.png">
                                <p><font color="white">Pollo</font></p>
                                <p><strong><font color="white">$11.90</font></strong></p>
                                <button class="buttonitems">Ordenar ahora</button>
                            </td>
            
                        </tr>
                        </table>
                </div>

                        <div class="container2" style="margin-top: 10px; background-color: black; height: 65vh; width: 65%; margin-left: 15%;">
                            <table id="tablemen2" style="margin-top: 10px; margin-left: 10%; font-size: 15px"> 
                                <tr>
                                    <td>
                                        <img class="bimage1" src="hamburguesa1.jpg" style="margin-top: 0%; ">
                                    </td>
                                    
                                    <td>
                                        <p style="font-size: small; justify-content: start;"><font color="white">Pollo</font></p>
                                    </td>
                                    
                                    <td>
                                        <p><font color="red">$12.00</font></p>
                                    </td>
                
                                    <td>
                                        <img class="bimage1" src="hamburguesa2.jpg" style="margin-top: 2%;">
                                    </td>
                
                                    <td>
                                        <p style="font-size: small;"><font color="white">Carne</font></p>
                                    </td>
                
                                    <td>
                                        <p><font color="red">$20.00</font></p>
                                    </td>
                                </tr>
                
                                <tr>
                                    <td>
                                        <img class="bimage1" src="hamburguesa3.jpg" style="margin-top: 2%;">
                                    </td>
                                    
                                    <td>
                                        <p style="font-size: small;"><font color="white">De todito</font></p>
                                    </td>
                                    
                                    <td>
                                        <p><font color="red">$12.00</font></p>
                                    </td>
                
                                    <td>
                                        <img class="bimage1" src="hamburguesa4.jpg" style="margin-top: 2%;">
                                    </td>
                
                                    <td>
                                        <p style="font-size: small;"><font color="white">Mixta</font></p>
                                    </td>
                
                                    <td>
                                        <p><font color="red">$6.00</font></p>
                                    </td>
                                </tr>
                
                                <tr>
                                    <td>
                                        <img class="bimage1" src="hamburguesa5.jpg" style="margin-top: 2%;">
                                    </td>
                                    
                                    <td>
                                        <p style="font-size: small;"><font color="white">Carne</font></p>
                                    </td>
                                    
                                    <td>
                                        <p><font color="red">$12.00</font></p>
                                    </td>
                
                                    <td>
                                        <img class="bimage1" src="hamburguesa6.jpg" style="margin-top: 2%;">
                                    </td>
                
                                    <td>
                                        <p style="font-size: small;"><font color="white">Mixta</font></p>
                                    </td>
                
                                    <td>
                                        <p><font color="red">$20.00</font></p>
                                    </td>
                                </tr>
                
                                <tr>
                                    <td>
                                        <img class="bimage1" src="hamburguesa7.jpg" style="margin-top: 2%;">
                                    </td>
                                    
                                    <td>
                                        <p style="font-size: small;"><font color="white">Carne</font></p>
                                    </td>
                                    
                                    <td>
                                        <p><font color="red">$12.00</font></p>
                                    </td>
                
                                    <td>
                                        <img class="bimage1" src="hamburguesa8.jpg" style="margin-top: 2%;">
                                    </td>
                
                                    <td>
                                        <p style="font-size: small;"><font color="white">Pollo</font></p>
                                    </td>
                
                                    <td>
                                        <p><font color="red">$6.00</font></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                
                    <div>


                    <footer  id="footer_sobre">
                        <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(hamburguesa3.jpg) no-repeat center center fixed; 
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;">
                        <img id="footerimg" src="5.png" style=" padding: 15% 0% 0% 45%;">
                        <p>
                            <font color="green"><u>Habla a:</u></font>
                        </p>
                        <p><font color="white">Av. Intercomunal, sector la Mora, calle 8</font></p>
                        <p>
                            <font color="green"><u>Telefono:</u></font>
                        </p>
                        <p><font color="white">+58 251 261 00 01</font></p>
                        <p>
                            <font color="green"><u>Correo:</u></font>
                        </p>
                        <p><font color="white">yourmail@gmail.com</font></p>

                        <table style="width:10%" align="center">
                            <thead class=".adjust_margin">
                            <tr>
                                <th width="5px">
                                    <img hspace="10" class="one" src="pinterest_small_icon.png" alt="pinterest" width="50" height="50">
                                </th>
                                <th width="5px">
                                    <img hspace="10" class="one" src="facebook_small_icon.png" alt="facebook" width="50" height="50">
                                </th>
                                <th width="5px">
                                    <img hspace="10" class="one" src="twitter_small_icon.png" alt="twitter" width="50" height="50">
                                </th>
                                <th width="5px">
                                    <img hspace="10" class="one" src="linkedin_small_icon.png" alt="linkedin" width="50" height="50">
                                </th>
                                
                            </tr>
            
                        </thead>
                            
            
                        </table>
                        
                        <p><font color="white">Copyright @ 2020 Todos los derechos reservados | Este sitio esta hecho con por DiazApps</font></p>
                        
                    </div>

                    </footer>

                </div>
                
            </div>

    </body>

</html>