<div>
    <p>{{naam}}</p>
    <p>hallo</p>
    <table>
        <tr>
            <th>Friends</th>
        </tr>
        <tr ng-repeat="friend in friends">
            <td>{{friend.email}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Accept requests</th>
        </tr>
        <tr ng-repeat="request in received">
            <td>{{request.email}}</td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Waiting for acceptance</th>
        </tr>
        <tr ng-repeat="request in sent">
            <td>{{request.email}}</td>
        </tr>
    </table>
</div>