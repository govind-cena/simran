<center><h3>Login</h3></center>
<div class="row">
    <?= $this->Form->create() ?>
      <div class="row">
        <div class="input-field col s12">
            <input id="email" name="username" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        
      <div class="row">
          <button class="btn btn-primary" type="submit">Login</button>
      </div>
      
   <?= $this->Form->end() ?>
  </div>