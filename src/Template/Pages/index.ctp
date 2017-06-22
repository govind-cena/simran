<div class="row" ng-app="userApp">
    <div class="col s4">
            <ul class="collection">
                <li class="collection-item">
                    <a href="#!/my_account">My Account</a>
                </li>
                <li class="collection-item">
                    <a href="#!/my_orders">My Orders</a>
                </li>
                <li class="collection-item">Payments</li>
                <li class="collection-item">Logout</li>
            </ul>
    </div>
    <div class="col s8" ng-view="">
        This area will use for contain
    </div>

</div>