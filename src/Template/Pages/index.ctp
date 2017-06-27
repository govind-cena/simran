<div class="row" ng-app="userApp">
    <div class="col s4">
            <ul class="collection">
                <li class="collection-item">
                    <a href="#!/my_account">Layout 1</a>
                </li>
                <li class="collection-item">
                    <a href="#!/my_orders">Layout 2</a>
                </li>
                <li class="collection-item">
                    <a href="<?php echo $this->Url->build('/'); ?>Users/student_details">Student Details</a>
                </li>
                <li class="collection-item">Payments</li>
                <li class="collection-item">Logout</li>
            </ul>
    </div>
    <div class="col s8" ng-view="">
        This area will use for contain
    </div>

</div>