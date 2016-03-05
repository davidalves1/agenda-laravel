@extends('layout')

@section('content')

	<div class="row" ng-controller="homeCtrl">
		<div class="col-md-4 col-sm-4">
			<div id="calendario">
				<input type="hidden" id="data_selecionada">
			</div>
		</div>
		<div class="col-md-8 col-sm-8">
			<div class="text-center">
				<h2>Lumen.</h2>
			</div>
		</div>
	</div>

@stop
