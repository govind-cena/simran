<center><h3>Signup</h3></center>
<div class="row">
    <?= $this->Form->create() ?>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate">
          <label for="username">User Name</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        
        <div class="row">
        <div class="input-field col s12">
            <button type="submit">Signup</button>
        </div>
      </div>
      
    <?= $this->Form->end() ?>
  </div>