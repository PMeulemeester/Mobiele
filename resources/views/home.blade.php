@extends('app')

@section('content')
<div class="container" data-ng-app="groep8mobiele">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="#/live"><button class="btn-default btn-lg">LIVE</button></a>
					<a href="#/search"><button class="btn-default btn-lg">SEARCH</button></a>
					<a href="#/bookings"><button class="btn-default btn-lg">BOOKINGS</button></a>
					<a href="#/friends"><button class="btn-default btn-lg">FRIENDS</button></a>
					<a href="#/settings"><button class="btn-default btn-lg"><span class="glyphicon glyphicon-cog"/></button></a>
				</div>
				<div class="panel-body" ng-view>
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script src="{{URL::asset('js/Angular.js')}}"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.min.js"></script>
	<script src="{{URL::asset('js/app.js')}}"></script>
	<script src="{{URL::asset('js/homePanelController.js')}}"></script>
	<script src="{{URL::asset('js/livePanelController.js')}}"></script>
	<script src="{{URL::asset('js/friendsPanelController.js')}}"></script>
	<script src="{{URL::asset('js/bookingsPanelController.js')}}"></script>
	<script src="{{URL::asset('js/searchPanelController.js')}}"></script>
	<script src="{{URL::asset('js/settingsPanelController.js')}}"></script>
	<script src="{{URL::asset('js/angular-snap.min.js')}}"></script>
	<script src="{{URL::asset('js/snap.min.js')}}"></script>
    <script src="{{URL::asset('js/ui-bootstrap-tpls-0.12.1.min.js')}}"></script>
@endsection
