
<div ng-if="!resparking">
        <table class="table table-striped" ng-if="!currentparking">
            <tr>
                <th>Info</th>
                <th>Name</th>
                <th>Description</th>
                <th>Free</th>
                <th><span class="glyphicon glyphicon-thumbs-up" /></th>
            </tr>
            <tr ng-repeat="parking in parkings | orderBy:'parking.name'">
                <td ng-click="clickparking(parking)"><a href=""><span class="glyphicon glyphicon-info-sign"/></a></td>
                <td>{{parking.name}}</td>
                <td>{{parking.description}}</td>
                <td ng-if="parking.availableCapacity>=50" style="color:green">{{parking.availableCapacity}}</td>
                <td ng-if="parking.availableCapacity<50" style="color:orange">{{parking.availableCapacity}}</td>
                <td ng-if="parking.availableCapacity=='VOL'" style="color:red">{{parking.availableCapacity}}</td>
                <td ng-click="reserveparking(parking)" ><a href=""><span class="glyphicon glyphicon-book" style="color: orange"/></a></td>
            </tr>
        </table>
    <div class="btn-group btn-group-justified" role="group" ng-if="!currentparking">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" ng-click="updateparkings()">Update</button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary">Start Live</button>
        </div>
    </div>
    <div ng-if="currentparking">
        <table class="table">
            <tr>
                <td>Name: </td>
                <td>{{currentparking.name}}</td>
            </tr>
            <tr>
                <td>Description: </td>
                <td>{{currentparking.description}}</td>
            </tr>
            <tr>
                <td>Address: </td>
                <td>{{currentparking.address | clearBr}}</td>
            </tr>
            <tr>
                <td>Contact: </td>
                <td>{{currentparking.contactInfo | clearBr}}</td>
            </tr>
            <tr>
                <td>Opening Hours: </td>
                <td>{{currentparking.openingHours}}</td>
            </tr>
            <tr>
                <td>Capacity: </td>
                <td>{{currentparking.availableCapacity}} / {{currentparking.totalCapacity}}</td>
            </tr>
        </table>
        <div class="btn-group btn-group-justified" role="group" ng-if="currentparking">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" ng-click="resetparking()">Back</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary" ng-click="reserveparking(currentparking)">Reserve</button>
            </div>
        </div>
    </div>
</div>
<div ng-if="resparking">
    <p>{{resparking.name}}</p>
    <div class="btn-group btn-group-justified" role="group">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" ng-click="resetparking()">Back</button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-success">Res</button>
        </div>
    </div>
</div>
