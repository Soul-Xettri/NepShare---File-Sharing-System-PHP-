<?php include('db_connect.php') ?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        <div class="row" style="display: flex;align-items: center;justify-content: center;padding: 20px;padding-bottom: 60px;">
              <div class="info-box-content" style="background-color:#fff;box-shadow: 0px 20px 20px #08010196;width: 300px;border-radius: 5px;min-height: 50vh;padding: 20px;text-align:center">
              <img src="development-men.gif" alt="user count"style="width: 250px;height: 250px;">
              <hr color="rgb(25, 25, 25)">
                <span class="info-box-text" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 900;">Total users<br></span>
                <span class="info-box-number" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 800;">
                  <?php echo $conn->query("SELECT * FROM users where type = 2")->num_rows; ?>
                </span>
              </div>
              <div class="info-box-content" style="background-color:#fff;box-shadow: 0px 20px 20px #08010196;width: 300px;border-radius: 5px;min-height: 50vh;margin-left:50px;padding: 20px;text-align:center">
              <img src="file.gif" alt="file count"style="width: 250px;height: 250px;">
              <hr color="rgb(25, 25, 25)">
                <span class="info-box-text" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 900;">Total files<br></span>
                <span class="info-box-number" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 800;">
                  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
      </div>

<?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body" style="background-color:#fff;box-shadow: 0px -10px 20px #08010196;border-radius: 5px;font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-size:1.3rem;" >
          		Welcome <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
      <div class="row" style="display: flex;align-items: center;justify-content: center;padding: 20px;padding-bottom: 60px;">
              <div class="info-box-content" style="background-color:#fff;box-shadow: 0px 20px 20px #08010196;width: 300px;border-radius: 5px;min-height: 50vh;margin-left:50px;padding: 20px;text-align:center">
              <img src="file.gif" alt="file count"style="width: 250px;height: 250px;">
              <hr color="rgb(25, 25, 25)">
                <span class="info-box-text" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 900;">Total files<br></span>
                <span class="info-box-number" style="font-family: GT Super WT,ui-serif,Georgia,Cambria,Times New Roman,Times,serif;color: #2a2b2e;font-weight: 800;">
                  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
      </div>
          
<?php endif; ?>
