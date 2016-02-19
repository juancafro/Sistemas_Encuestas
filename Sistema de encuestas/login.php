<?php 
include("header.php");
//para retener el email en la casilla si password es false y se ingresa
//required value en <li>
isset($_POST["email"]);
         $email = $_POST["email"];

 ?>
 <section# id="form">
   <form class="contact_form" action="php/control.php" method="post">
   		<ul>
   			<li>
   				<h2>Iniciar sesion</h2>
   			</li>	
   			<h5>Email</h5>
   			<li>
   				
               <input type="email" name="email" placeholder="Email" required value="<?php echo $email; ?>"required/>
   			</li>
   			<h5>Contraseña</h5>
   			
            <li>
   				<input type="password" name="password" placeholder="Password" required>
   			</li>
   			<?php 
   				if(isset($_POST["email"])){
   					echo "email incorrecto";
   					}else{
   						if(isset($_POST["password"])){
   					echo "Contraseña Incorrecta";
   					}
               }
   			 ?>
   			 <li>
   			 	<input type="submit" class="submit" value="Iniciar">
   			 </li>
   			 <a id="paginas1" href="javascript:window.history.back();">&laquo; Volver atrás</a>
   		</ul>	
   </form>
</section>


<?php 
   include("footer.php");
    ?>