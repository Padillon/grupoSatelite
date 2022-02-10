
<div class="container">
	<div class="row mt-5">
		<h1>Alumnos</h1>
		<div class="col-4">
			<div><h4>Datos del alumno</h4></div>
			<form type="form" method="post" action="<?php echo base_url();?>/public/HomeController/guardar">
				<div class="mb-3">
					<label  class="form-label">Codigo del alumno</label>
					<input name="codigo"type="text" class="form-control"  >
					<label  class="form-label">Nombre del alumno</label>
					<input name="nombre"type="text" class="form-control"  >
					<label  class="form-label">Edad del alumno</label>
					<input name="edad"type="text" class="form-control"  >
					<label  class="form-label">Sexo del alumno</label>
					<input name="sexo"type="text" class="form-control"  >
					<label  class="form-label">Grado del alumno</label>
					<select name="grado" id="" class="form-select">
					<?php if (!empty($grado)) : ?>
                            <?php foreach ($grado as $grd) : ?>
						<option value="<?php echo $grd['grd_id']?>"><?php echo $grd['grd_nombre']?></option>
						<?php endforeach; ?>
                                <?php endif; ?>

					</select>
					<label  class="form-label">Observaciones</label>
					<input name="obs"type="text" class="form-control" >
					
		
				</div>
	
				<button type="submit" class="btn btn-primary">Guardar</button>
			</form>

		</div>

		<div class="col-8">
		<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Sexo</th>
						<th>Grado</th>
						<th>Observaciones</th>
					</tr>
				</thead>
				<tbody>
					<?php $cont = 0; ?>
                     	<?php if (!empty($alumnos)) : ?>
                            <?php foreach ($alumnos as $alm) : ?>
                                <?php $cont++; ?>
									<tr>
										<td>
										<?php echo $cont; ?>
										</td>
										<td>
										<?php echo $alm['alm_codigo']; ?>
										</td>
										<td>
										<?php echo $alm['alm_nombre']; ?>
										</td>
										<td>
										<?php echo $alm['alm_edad']; ?>
										</td>
										<td>
										<?php echo $alm['alm_sexo']; ?>
										</td>
										<td>
										<?php echo $alm['alm_id_grd']; ?>
										</td>
										<td>
										<?php echo $alm['alm_observacion']; ?>
										</td>
										<td>
										    
											<a class="btn btn-danger" href="<?php echo base_url('/public/HomeController/delete/'.$alm['alm_id']);?>"> eliminar</a>
										</td>
									</tr>
									<?php endforeach; ?>
                                <?php endif; ?>

				</tbody>
			</table>
		</div>

	</div>	
</div>