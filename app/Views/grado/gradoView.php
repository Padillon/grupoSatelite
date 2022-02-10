
<div class="container">
	<div class="row mt-5">
		<div class="col-4">
			<div><h4>Datos de grado</h4></div>
			<form type="form" method="post" action="<?php echo base_url();?>/public/GradoController/guardar">
				<div class="mb-3">
					<label  class="form-label">Nombre del Grado</label>
					<input name="g_nombre"type="text" class="form-control"  placeholder="Ej. Primer Grado o 1° Grado">
		
				</div>
	
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

		</div>
		
		<div class="col-8">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre del grado</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php $cont = 0; ?>
                     	<?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $grd) : ?>
                                <?php $cont++; ?>
									<tr>
										<td>
										<?php echo $cont; ?>
										</td>
										<td>
										<?php echo $grd['grd_nombre']; ?>
										</td>
										<td>
										    <a class="btn btn-warning" href="<?php echo base_url('/public/GradoController/getGrado/'.$grd['grd_id']);?>"> editar</a>
											<a class="btn btn-danger" href="<?php echo base_url('/public/GradoController/delete/'.$grd['grd_id']);?>"> eliminar</a>
										</td>
									</tr>
									<?php endforeach; ?>
                                <?php endif; ?>

				</tbody>
			</table>
	    </div>
	</div>
	

	

</div>