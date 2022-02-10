
<div class="container">
	<div class="row mt-5">
		<h1>Editar Materia</h1>
		<div class="col-4">
			<div><h4>Datos de la Materia</h4></div>
			<form type="form" method="post" action="<?php echo base_url();?>/public/MateriaController/update">
            
            <?php if (!empty($datos)) : ?>
                
                            
				<div class="mb-3">
					<label  class="form-label">Nombre de la materia</label>
					<input name="m_nombre"type="text" class="form-control"  value="<?php echo $datos['mat_nombre']?>">
                    <input name="id"type="hidden" class="form-control"  placeholder="Ej. Matematicas" value="<?php echo $datos['mat_id']?>">    
				</div>
	
				<button type="submit" class="btn btn-primary">Guardar</button>
                       
                        <?php endif; ?>

			</form>

		</div>

	</div>	
</div>