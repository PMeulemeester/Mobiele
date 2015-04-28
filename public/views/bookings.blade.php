<div>
    <table class="table table-striped">
        <tr ng-repeat="booking in bookings">
            <td>
                {{booking.carpark}}
            </td>
            <td>
                {{booking.reservation}}
            </td>
        </tr>
    </table>
</div>