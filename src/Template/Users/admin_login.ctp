<center><h3>Login</h3></center>
<div class="row">
    <?= $this->Form->create() ?>
      <div class="row">
        <div class="input-field col s12">
            <input id="username" name="username" type="text" class="validate">
          <label for="username">Email</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <input id="role" name="role" type="hidden" value="Admin" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        
      <div class="row">
          <button class="btn btn-primary" type="submit">Admin Login</button>
      </div>
      
   <?= $this->Form->end() ?>
  </div>