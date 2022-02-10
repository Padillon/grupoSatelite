
<div class="container">
	<div class="row mt-5">
		<div class="col-4">
			<div><h4>Datos de la materia</h4></div>
			<form type="form" method="post" action="<?php echo base_url();?>/public/MateriaController/guardar">
				<div class="mb-3">
					<label  class="form-label">Nombre de la materia</label>
					<input name="m_nombre"type="text" class="form-control"  placeholder="Ej. Matematicas">
		
				</div>
	
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

		</div>
		
		<div class="col-8">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre de la materia</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php $cont = 0; ?>
                     	<?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $mat) : ?>
                                <?php $cont++; ?>
									<tr>
										<td>
										<?php echo $cont; ?>
										</td>
										<td>
										<?php echo $mat['mat_nombre']; ?>
										</td>
										<td>
										    <a class="btn btn-warning" href="<?php echo base_url('/public/MateriaController/getMateria/'.$mat['mat_id']);?>"> editar</a>
											<a class="btn btn-danger" href="<?php echo base_url('/public/MateriaController/delete/'.$mat['mat_id']);?>"> eliminar</a>
										</td>
									</tr>
									<?php endforeach; ?>
                                <?php endif; ?>

				</tbody>
			</table>
	    </div>
	</div>
	

	

</div>