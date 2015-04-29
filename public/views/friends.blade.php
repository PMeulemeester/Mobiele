<div>
    <p>{{naam}}</p>
    <p>hallo</p>
    <table class="table">
        <tr>
            <th>Friends</th>
        </tr>
        <tr ng-repeat="friend in friends">
            <td>
                {{friend.email}}
            </td>
            <td>
                <button class="btn btn-danger" type="button" ng-click="removeFriend(friend)">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </td>
        </tr>
        <tr>
            <th>Accept requests</th>
        </tr>
        <tr ng-repeat="request in received">
            <td>
                {{request.email}}
            </td>
            <td>
                <button class="btn btn-success" type="button" ng-click="addFriend(request)">
                    <span class="glyphicon glyphicon-ok"></span>
                </button>
                <button class="btn btn-danger" type="button" ng-click="removeFriend(request)">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </td>
        </tr>
        <tr>
            <th>Waiting for acceptance</th>
        </tr>
        <tr ng-repeat="request in sent">
            <td>
                {{request.email}}
            </td>
            <td>
                <button class="btn btn-success" type="button" ng-click="addFriend(request)">
                    <span class="glyphicon glyphicon-ok"></span>
                </button>
            </td>
        </tr>
    </table>
</div>