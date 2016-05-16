<div class="profile-partial-div">
  <form id="profileForm" name="profileForm" action="<?php echo $BASE.'/user/contact'; ?>" method="POST" enctype="multipart/form-data">
		 	<div class="profileParent">
		 	<div class="form-row">
		    	<div class="fieldgrp">
			       <label for="Address1_" class="bdtllabel required" >Address 1</label><br />
             <input class="bdtltext" id="addr1" name="Address1" type="text" value="<?php echo isset($POST['Address1']) ? trim(htmlspecialchars($POST['Address1'])) : ''; ?>" />
			    </div>
			<div class="fieldgrp">
             <label for="Address2_" class="bdtllabel required" >Address 2</label><br />
             <input class="bdtltext" id="addr2" name="Address2" type="text" value="<?php echo isset($POST['Address2']) ? trim(htmlspecialchars($POST['Address2'])) : ''; ?>" />
			</div>
			<div class="fieldgrp">
            <label for="City_" class="bdtllabel required" >City</label><br />
            <input class="bdtltext" id="city" name="City" type="text" value="<?php echo isset($POST['City']) ? trim(htmlspecialchars($POST['City'])) : ''; ?>" />
			</div>
			</div>
			<div class="form-row">
			<div class="fieldgrp">
              <label for="State_" class="bdtllabel required" >State</label><br />
              <input class="bdtltext" id="state" name="State" type="text" value="<?php echo isset($POST['State']) ? trim(htmlspecialchars($POST['State'])) : ''; ?>" />
			</div>
			<div class="fieldgrp">
              <label for="Pin Code_" class="bdtllabel required" >Pin Code</label><br />
              <input class="bdtltext" id="pincode" name="Pincode" type="text" value="<?php echo isset($POST['Pincode']) ? trim(htmlspecialchars($POST['Pincode'])) : ''; ?>" />
			</div>
			</div>
			<div class="form-row">
			<div class="fieldgrp">
              <label for="Email_" class="bdtllabel required" >Email</label><br />
              <input class="bdtltext" id="email" name="Email_ID" type="text" value="<?php echo isset($POST['Email_ID']) ? trim(htmlspecialchars($POST['Email_ID'])) : ''; ?>" />
			</div>
			<div class="fieldgrp">
              <label for="Mobile Number_" class="bdtllabel required" >Mobile Number</label><br />
              <input class="bdtltext" id="mobile" name="Mobile_No" type="text" value="<?php echo isset($POST['Mobile_No']) ? trim(htmlspecialchars($POST['Mobile_No'])) : ''; ?>" />
			</div>
			<div class="fieldgrp">
              <label for="LL_" class="bdtllabel required" >Alternate Phone</label><br />
              <input class="bdtltext" id="altphone" name="Landline_No" type="text" value="<?php echo isset($POST['Landline_No']) ? trim(htmlspecialchars($POST['Landline_No'])) : ''; ?>" />
      </div>
		</div>

    <div class="submit-row">
        <input type="hidden" name="Address_Type" value="Current" />
        <input type="submit" value="Done" name ="addrprofiledone" id="addrprofiledone"/>
  	</div>
   </div>
	</form>
</div>
