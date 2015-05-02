<div ng-controller="AccordionDemoCtrl">

    <accordion close-others="oneAtATime">
        <accordion-group heading="" is-open="status.isFirstOpen" is-disabled="status.isFirstDisabled">
            <accordion-heading>
                Friends <span class="badge">{{friends.length}}</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="friend in friends">
                    <td>
                        {{friend.email}}
                    </td>
                    <td>
                        <button class="btn btn-danger" type="button" ng-click="removeFriend(friend,$index)" data-toggle="tooltip" data-placement="left" title="Vriend verwijderen">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </accordion-group>
        <accordion-group>
            <accordion-heading>
                Accept friend requests <span class="badge">{{received.length}}</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="request in received">
                    <td>
                        {{request.email}}
                    </td>
                    <td>
                        <button class="btn btn-success" type="button" ng-click="acceptRequest(request,$index)" data-toggle="tooltip" data-placement="left" title="Vriendschapsverzoek aanvaarden">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                        <button class="btn btn-danger" type="button" ng-click="denyRequest(request,$index)" data-toggle="tooltip" data-placement="left" title="Vriendschapsverzoek weigeren">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                </tr>
            </table>
        </accordion-group>
        <accordion-group >
            <accordion-heading>
                Waiting for acceptance <span class="badge">{{sent.length}}</span>
            </accordion-heading>
            <table class="table table-striped">
                <tr ng-repeat="request in sent">
                    <td>
                        {{request.email}}
                    </td>
                    <td>
                        <button class="btn btn-danger" type="button" ng-click="cancelRequest(request,$index)" data-toggle="tooltip" data-placement="left" title="Verzoek ongedaan maken">
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
                <input type="text" class="form-control" id="searchFriends" placeholder="Search a friend to add..." ng-model="searchFriendsQuery" ng-model-options="{ getterSetter: true }">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default" ng-click="searchFriends(searchFriendsQuery)"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
            <table class="table table-striped">
                <tr ng-repeat="friend in newFriends">
                    <td>
                        {{friend.email}}
                    </td>
                    <td>
                        <button class="btn btn-success" type="button" ng-click="sendRequest(friend,$index)" data-toggle="tooltip" data-placement="left" title="Vrienschapsverzoek zenden">
                            <span class="glyphicon glyphicon-plus"></span>
                        </button>
                    </td>
                </tr>
            </table>
            {{noresults}}

        </accordion-group>
    </accordion>
</div>
