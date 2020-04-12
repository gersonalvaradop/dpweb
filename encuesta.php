<?php include ('cabeza.php') ?>
<div class="container">

	<!--Survey form start-->
	<form name="FrmEnc" id="FrmEnc" action="javascript:alert('Encuesta enviada!')" onsubmit="return ValidSurvey()">
		<table width="100%">
			<tr height="55">
				<td colspan="2" align="Center"><h1>Encuesta al usuario</h1></td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;1.- Ingresa tu nombre:</td>
				<td>
					&nbsp;<input type="text" name="Nom" id="Nom" onkeypress="return SoloLetras(event);" onpaste="return false" min="2">
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;2.- Ingresa tu apellido:</td>
				<td>
					&nbsp;<input type="text" name="Ape" id="Ape" onkeypress="return SoloLetras(event);" onpaste="return false" min="2">
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;3.- Selecciona tu genero:</td>
				<td>
					&nbsp;<input type="radio" name="Sexo" value="M" id="Sexo[]" /> Masculino &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Sexo" value="F" id="Sexo[]" /> Femenino &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Sexo" value="N" id="Sexo[]" /> Prefiero no decirlo
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;4.- Selecciona tu pais:</td>
				<td>
					&nbsp;<select name="Sel_Pais">
						<option value="0">Seleccione...</option>
						<option value="1">Mexico</option>
						<option value="2">Guatemala</option>
						<option value="3">Belize</option>
						<option value="4">Honduras</option>
						<option value="4">El Salvador</option>
						<option value="4">Nicaragua</option>
						<option value="4">Costa Rica</option>
						<option value="4">Panama</option>
						<option value="4">Otro</option>
					</select>
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;5.- ¿Que te parecio nuestra pagina?</td>
				<td>
					&nbsp;<input type="radio" name="Precio" value="MM" id="Precio[]" /> Muy Mala &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Precio" value="M" id="Precio[]" /> Mala &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Precio" value="R" id="Precio[]" /> Regular &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Precio" value="B" id="Precio[]" /> Buena &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Precio" value="MB" id="Precio[]" /> Muy Buena &nbsp;&nbsp;&nbsp;
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;6.- ¿Que te parecieron las marcas de nuestros productos?</td>
				<td>
					&nbsp;<input type="radio" name="ProCal" value="MM" id="ProCal[]" /> Muy Malas &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProCal" value="M" id="ProCal[]" /> Malas &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProCal" value="R" id="ProCal[]" /> Regular &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProCal" value="B" id="ProCal[]" /> Buenas &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProCal" value="MB" id="ProCal[]" /> Muy Buenas &nbsp;&nbsp;&nbsp;
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;7.- ¿Que seccion de nuestra pagina te llamo mas la atencion? (Pueden ser varias)</td>
				<td>
					&nbsp;<input type="checkbox" name="Aten" value="Ind" id="Aten[]" /> La Pagina Principal &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Prom" id="Aten[]" /> Las Promociones &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Prod" id="Aten[]" /> Los Productos &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Herr" id="Aten[]" /> Las Herramientas &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Cont" id="Aten[]" /> Contactenos &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Enc" id="Aten[]" /> La Encuesta &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Tar" id="Aten[]" /> Tareas anteriores &nbsp;&nbsp;
					&nbsp;<input type="checkbox" name="Aten" value="Nin" id="Aten[]" /> Ninguna &nbsp;&nbsp;
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;8.- ¿Encontraste el producto que buscabas?</td>
				<td>
					&nbsp;<input type="radio" name="Produ" value="S" id="Produ[]" /> Si &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Produ" value="SP" id="Produ[]" /> Si, pero de otra marca &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Produ" value="N" id="Produ[]" /> No 
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;9.- ¿Que tipo de producto te llamo mas la atencion?</td>
				<td>
					&nbsp;<select name="Sel_Prod">
						<option value="0">Seleccione...</option>
						<option value="1">Ninguno</option>
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;10.- ¿Fue facil para ti navegar en la seccion de productos?</td>
				<td>
					&nbsp;<input type="radio" name="ProDif" value="PB" id="ProDif[]" /> Si, bastante &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProDif" value="PUP" id="ProDif[]" /> Si, un poco &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ProDif" value="N" id="ProDif[]" /> No, para nada &nbsp;&nbsp;&nbsp;

				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;11.- ¿Que te parecieron los precios a comparacion de la competencia?</td>
				<td>
					&nbsp;
					<select name="Sel_Pre" id="Sel_Pre">
						<option value="0"> Seleccione... </option>
						<option value="1"> Son mucho mejor </option>
						<option value="2"> Los precios se mantienen </option>
						<option value="3"> Es mas barato en otro website </option>
					</select>
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;12.- ¿Que tan frecuente visitas nuestra pagina?</td>
				<td>
					&nbsp;
					<select name="Visita" id="Visita">
						<option value="0"> Seleccione... </option>
						<option value="1"> Todos los dias </option>
						<option value="2"> Dos o mas veces a la semana </option>
						<option value="3"> Una vez a la semana </option>
						<option value="4"> Dos o mas veces al mes </option>
						<option value="5"> Una vez al mes </option>
						<option value="6"> De vez en cuando </option>
						<option value="7"> Casi nunca </option>
					</select>
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;13.- ¿Recomendarias esta pagina a tus familiares o amigos?</td>
				<td>
					&nbsp;<input type="radio" name="Recom" value="Y" id="Recom[]" /> Si &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Recom" value="M" id="Recom[]" /> Talvez &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="Recom" value="N" id="Recom[]" /> No 
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;14.- ¿Cambiarias algo de nuestra pagina? Por que y que fuera?</td>
				<td>
					&nbsp;<input type="radio" name="ChPag" value="Y" id="ChPag[]"/> Si &nbsp;&nbsp;&nbsp;
					&nbsp;<input type="radio" name="ChPag" value="N" id="ChPag[]"/> No 
					<br> &nbsp;
					<textarea name="comentario" rows="4" cols="44" id="comments" onpaste="return false" enabled=""> </textarea>
				</td>
			</tr>
			<tr height="55">
				<td>&nbsp;&nbsp;15.- Enviamos tu comentario extra, si no tienes puedes digitar N/A</td>
				<td>
					<br> &nbsp;
					<textarea name="comentario" rows="6" cols="44" id="Ext_com" onpaste="return false" min="3"> </textarea>
					<br> &nbsp;
				</td>
			</tr>
			<tr height="55">
				<td colspan="2" align="Center">
					
					<button type="submit" class="btn btn-sucess">Completar Encuesta</button>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<button type="reset" class="btn btn-warning">Cancelar y Borrar</button>

				</td>
			</tr>
		</table>
	</form>
	<!--Survey form end-->

</div> 

<!--Survey js here-->
<script src="assets/js/ValSur.js"></script>

<?php include 'pie.php'; ?>

