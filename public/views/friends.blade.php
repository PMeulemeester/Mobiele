<div ng-controller="AccordionDemoCtrl">

    <accordion close-others="oneAtATime">
        <accordion-group heading="" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
            <accordion-heading>
                Friends <span class="badge">0</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="friend in friends">
                    <td>
                        {{friend.email}}
                    </td>
                    <td>
                        <button class="btn btn-danger" type="button" ng-click="removeFriend(friend)" data-toggle="tooltip" data-placement="left" title="Vriend verwijderen">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </accordion-group>
        <accordion-group>
            <accordion-heading>
                Accept friend requests <span class="badge">0</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="request in received">
                    <td>
                        {{request.email}}
                    </td>
                    <td>
                        <button class="btn btn-success" type="button" ng-click="addFriend(request)" data-toggle="tooltip" data-placement="left" title="Vriendschapsverzoek aanvaarden">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                        <button class="btn btn-danger" type="button" ng-click="removeFriend(request)" data-toggle="tooltip" data-placement="left" title="Vriendschapsverzoek weigeren">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </accordion-group>
        <accordion-group >
            <accordion-heading>
                Waiting for acceptance <span class="badge">0</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="request in sent">
                    <td>
                        {{request.email}}
                    </td>
                    <td>
                        <button class="btn btn-danger" type="button" ng-click="removeFriend(request)" data-toggle="tooltip" data-placement="left" title="Verzoek ongedaan maken">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </accordion-group>
        <accordion-group is-open="status.open">
            <accordion-heading>
                Add friend <span class="glyphicon glyphicon-plus"></span>
            </accordion-heading>
            <div class="input-group">
                <input type="text" class="form-control" id="searchFriends" placeholder="Search a friend to add..." ng-model="searchFriendsQuery">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default" ng-click="searchFriends"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
            <table class="table table-striped">
                <tr ng-repeat="friend in newFriends">
                    <td>
                        {{friend.email}}
                    </td>
                    <td>
                        <button class="btn btn-success" type="button" ng-click="addFriend(friend)" data-toggle="tooltip" data-placement="left" title="Vrienschapsverzoek zenden">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    </td>
                </tr>
            </table>

        </accordion-group>
    </accordion>
</div>
