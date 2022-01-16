<?php
    include_once 'includes/header.php';
?>
        <div class="form-default">
                <div class="col s12 m6">
                  <div class="card amber lighten-3 content-border-default">
                    <div class="card-content white-text form-login-data">
                      <span class="card-title" style="color: #000 !important;">Login</span>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="user" type="text" class="validate">
                          <label for="user" >Login</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="password" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="card-action">
                      <button class="btn waves-effect waves-light subButton" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </div>
        </div>
<?php
    include_once 'includes/footer.php';
?>