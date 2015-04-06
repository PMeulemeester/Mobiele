@extends('app')

@section('content')
<div class="container" data-ng-app="groep8mobiele">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
				<a href="#/test1">test1</a>
				<a href="#/test2">test2</a>
				<div class="panel-body" ng-view>
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	<script src="http://localhost:8888/groep8mobiele/public/js/Angular.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>
	<script src="http://localhost:8888/groep8mobiele/public/js/app.js"></script>
	<script src="http://localhost:8888/groep8mobiele/public/js/homePanelController.js"></script>
@endsection
