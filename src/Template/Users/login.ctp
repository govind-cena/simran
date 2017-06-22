<center><h3>Login</h3></center>
<div class="row">
    <?= $this->Form->create() ?>
      <div class="row">
        <div class="input-field col s12">
            <input id="username" name="username" type="text">
          <label for="username">Email</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password">
          <label for="password">Password</label>
        </div>
      </div>
        
      <div class="row">
          <button class="btn btn-primary" type="submit">Login</button>
      </div>
      
   <?= $this->Form->end() ?>
  </div>