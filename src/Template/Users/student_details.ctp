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
                    <a href="<?php echo $this->Url->build('/'); ?>Users/details">Layout 2</a>
                </li>
                <li class="collection-item">Payments</li>
                <li class="collection-item">Logout</li>
            </ul>
    </div>
    <!--<div class="col s8" ng-view="">
        This area will use for contain
    </div>-->
    <div class="col s8">
        <center><h4>Student Details</h4></center>
        
        <div class="input-field col s12">
        <select class="browser-default">
          <option value="">Choose your option</option>
          <?php foreach($list as $key=>$val){ ?>
          <option value="<?php echo $key; ?>"><?php echo $val; ?></option>
          <?php } ?>
        </select>
        
      </div>
      
      <br/><br/>


        <table>
        <thead>
          <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Address</th>
          </tr>
        </thead>

        <tbody>
            
          <?php foreach($userDetails as $key=>$val){   ?>
           <?php $i=1;  ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $val['username']; ?></td>
            <td><?php echo $val['student_detail']['contact_no']; ?></td>
            <td><?php echo $val['student_detail']['address']; ?></td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>

</div>