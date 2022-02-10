
<div class="container">
	<div class="row mt-5">
		<h1>Editar Grado</h1>
		<div class="col-4">
			<div><h4>Datos de grado</h4></div>
			<form type="form" method="post" action="<?php echo base_url();?>/public/GradoController/update">
            
            <?php if (!empty($datos)) : ?>
                
                            
				<div class="mb-3">
					<label  class="form-label">Nombre del Grado</label>
					<input name="g_nombre"type="text" class="form-control"  value="<?php echo $datos['grd_nombre']?>">
                    <input name="id"type="hidden" class="form-control"  placeholder="Ej. Primer Grado o 1° Grado" value="<?php echo $datos['grd_id']?>">    
				</div>
	
				<button type="submit" class="btn btn-primary">Guardar</button>
                       
                        <?php endif; ?>

			</form>

		</div>

	</div>	
</div>