<!--<?php //include('../models/seguridad.php');?>-->
<?php include('header.php');?>


<div id="panel-general">
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-md-2"><img src="../../assets/img/candidato.png" class="img-responsive" width="150"></div>
					<div class="col-lg-4">
                		<p><br><br><br></p>
                		<h3>REGISTRO DE CANDIDATO</h3>
					</div>
                </div>
                <div class="col-md-12"><br></div>
                <div class="col-md-12">
                	<div class="col-md-6">
                		<form class="form-horizontal" role="form" id="comp" action="aspirantes/guardar" method="POST">

	                    	<div class="form-group">
	                        	<label for="name" class="col-sm-2 control-label">Nombre</label>
	                        	<div class="col-sm-10">
	                            	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
	                        	</div>
	                    	</div>
	                    	

	                   		<div class="form-group">
	                        	<label for="street" class="col-sm-2 control-label">Telefono</label>
	                        	<div class="col-sm-10">
	                            	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
	                        	</div>
	                   		</div>


		                    <div class="form-group">
		                        <label for="number" class="col-sm-2 control-label">Correo</label>
		                        <div class="col-sm-10">
		                            <input type="mail" class="form-control" id="correo" name="correo" placeholder="Correo Electronico">
		                        </div>
		                    </div>


		                    <div class="form-group">
		                        <label for="country" class="col-sm-2 control-label">¿Como se entero?</label>
		                        <div class="col-sm-10">
		                            <select id="canal" name="canal" class="form-control">
		                            	<option value="Periodico">Periodico</option>
		                            	<option value="Publicacion en linea">Publicacion en linea</option>
		                            	<option value="Feria de empleo">Feria de empleo</option>
		                            	<option value="Anuncio callejero">Anuncio callejero</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="col-md-3"></div>
		                    <div class="col-md-3">
                    			<button  id="cancelar" name="cancelar" class="btn btn-danger">Cancelar</button>
                    		</div>

			                		
			                	<div class="form-group">
				            		<button type="submit" class="btn btn-success" value="Registrar">Registrar</button>
			      				</div>

		                </form>
            		</div>
                </div>
            </div>
        <div>
    </div>
</div>

</div>

<?php include('footer.php');?>