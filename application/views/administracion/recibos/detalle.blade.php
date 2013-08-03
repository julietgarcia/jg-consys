@layout('layouts/admin')

@section('content')

<div class="container">

	<div class="row">

		<div class="span12">

			<p style="width: 400px; margin: 0 auto 0 auto;"><span style="font-size:23px;">Detalle -</span> <snap style="color:#51a351; font-size:23px;">Recibos</snap></p> <hr />

			<div class="btn-toolbar">

			    <a href="{{ URL::to('admin/recibos/generar'); }}" class="btn"><i class="icon-file"></i> Generar</a>
			    <a href="{{ URL::to('admin/recibos'); }}" class="btn"><i class="icon-eye-open"></i> Ver</a>
			    <!--<a href="{{ URL::to('admin/recibos/bancos'); }}" class="btn"><i class="icon-briefcase"></i> Bancos</a>-->
			    <!--<a href="{{ URL::to('admin/recibos/formaspay'); }}" class="btn">{{ HTML::image('img/pagos.png') }} Formas de pago</a>-->
			    
			</div>

			<div>&nbsp;</div>

			<form class="form-modules">

			<div class="row-fluid">

				<p><strong>Datos</strong></p> 

				<hr class="bs-docs-separator">

				<div>

					<div class="span6">	

						<div class="well">

							<table class="table table-hover">

								<thead>
									<tr>
										<td><strong>Parcela</strong></td>
										<td>{{ $detalle->parcela_nro }}</td>
									</tr>
								<tbody>

								<thead>
									<tr>
										<td><strong>Cédula</strong></td>
										<td>{{ $detalle->propietarios_ci }}</td>
									</tr>
								</thead>

								<thead>
									<tr>
										<td><strong>Propietario</strong></td>
										<td>{{ $detalle->nom_prop }}</td>
									</tr>
								</thead>

							</table>

						</div>

					</div>

					<div class="span6">

						<div class="well">

							<table class="table table-hover">

						      <thead>
						        <tr>
									<td><strong>Fecha</strong></td>
									<td>{{ $detalle->fecha }}</td>								
						        </tr>
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Monto</strong></td>
						        	<td>Bs. {{ $detalle->mon_pago }}</td>
						        </tr>			        
						      </thead>

						      <thead>
						        <tr>
						        	<td><strong>Tipo</strong></td>
						        	<td>{{ $detalle->descripcion }}</td>
						        </tr>			        
						      </thead>

						    </table>

					    </div>		    

					</div>

				</div>

			</div>

			</form>

			<div class="row-fluid">		

				<div class="span12">

					<strong>Concepto(s)</strong>

					<hr class="bs-docs-separator">

					<div class="well">

						<table class="table table-hover">

							<thead>
								<tr>
									<th>Descripción</th>
									<th>Monto</th>
								</tr>
							</thead>

							<tbody>
								@foreach($recibo as $rec)
									<tr>
										<td>{{ $rec->nom_conc }}</td>
										<td>Bs. {{ $rec->mon_ctas }}</td>
									</tr>
									<?php $total = $total + $rec->mon_ctas; ?>
								@endforeach
									<tr>
										<th>Total</th>
										<td>Bs. {{ $total; }}</td>
									</tr>
							</tbody>

						</table>

					</div>

				</div>

			</div>

			<a href="{{ URL::to('admin/recibos/print'); }}" class="btn btn-success" target="_blank">Imprimir <i class="icon-print icon-white"></i></a>
			<a href="{{ URL::to('admin/recibos/generar/3'); }}" class="btn btn-danger">Anular <i class="icon-remove-sign icon-white"></i></a>

		</div>

		</form>

	</div>

</div>


@endsection