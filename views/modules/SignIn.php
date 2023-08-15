
<div class="container">


    <div class="title">SignIn Form</div>
    <div class="content">
      <form role="form" method="POST" autocomplete="nope">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your username" required>
          </div>
           <div class="input-box">
            <span class="details">Roles</span>
            <select name="roles" required>
                <option value="" selected="select">-- select role --</option>
                <option value="admin">Admin</option>
                <option value="employee">Employee</option>
                <option value="citizen">Citizen</option>
                <option value="establishment">Establishment</option>
            </select>
          </div>
    
        <div class="button">
          <input type="submit"  name="submit" value="Login">
          <p><a href="SignUp">Sign Up</a> for Citizen Account </p>
           <p><a href="EstabAcc">Sign Up</a> for Establishment Account </p>
        </div>
      </form>

        <?php
          $createAcc = new ControllerSignIn();
          $createAcc -> ctrLoginAcc();
        ?>
    </div>
  </div>
