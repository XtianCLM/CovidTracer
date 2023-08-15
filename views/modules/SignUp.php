
  <div class="container">
    <div class="title ">Registration</div>
    <div class="content">
      <form role="form" method="POST" autocomplete="nope">
        <div class="user-details">
           <input type="hidden" id="status" name="Status" value="Normal">
            <input type="hidden" id="EstabName" name="EstabName" value="">
            <input type="hidden" id="Code" name="Code" value="Waiting for Verification">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="Fullname"  placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="Email" placeholder="Enter your email" required>
          </div>
           <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="Username" placeholder="Enter your username" required>
          </div>
            <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="Password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="Phonenum" placeholder="Enter your number" required>
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="Address" placeholder="Enter your password" required>
          </div>

           <div class="input-box">
            <span class="details">Role</span>
            <select name="roles">
                <option value="" selected="select">-- select role --</option>
                <option value="citizen">Citizen</option>
              
            </select>
          </div>
          <!-- <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="Password" placeholder="Confirm your password" required>
          </div> -->
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" required>
          <input type="radio" name="gender" value="Female" id="dot-2" required>
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
       
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class="button">
       
           <a class="col-md-12 btn btn-danger" href="../../Tracer/index.php" style="width: 100%;">Cancel</a>
        </div>

      </form>

        <?php
          $createAcc = new ControllerSignUp();
          $createAcc -> ctrCreateAcc();
        ?>
    </div>
  </div>
