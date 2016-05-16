<div class="profile-partial-div">
   <div id="topleftposition">
 		<label for="sameaddrchk_" class="bdtllabel required" >Permanent Address</label></br>
		<input type="checkbox" name="sameaddrchk" value="Same"><span id="sameaddrchk">Same as current</span></br>
  </div>
      <form id="profileForm" name="profileForm" action="" method="POST" enctype="multipart/form-data">
          <div class="profileParent">
          <div class="form-row">
              <div class="compactfieldgrp">
                 <label for="Address1_" class="bdtllabel required" >Address 1</label><br />
                 <input class="bdtltext" id="addr1" name="Address1" type="text" value="" />
              </div>
          <div class="compactfieldgrp">
                 <label for="Address2_" class="bdtllabel required" >Address 2</label><br />
                 <input class="bdtltext" id="addr2" name="Address2" type="text" value="" />
          </div>
          <div class="compactfieldgrp">
                <label for="City_" class="bdtllabel required" >City</label><br />
                <input class="bdtltext" id="city" name="City" type="text" value="" />
          </div>
          </div>
          <div class="form-row">
          <div class="compactfieldgrp">
                  <label for="State_" class="bdtllabel required" >State</label><br />
                  <input class="bdtltext" id="state" name="State" type="text" value="" />
          </div>
          <div class="compactfieldgrp">
                  <label for="Pin Code_" class="bdtllabel required" >Pin Code</label><br />
                  <input class="bdtltext" id="pincode" name="Pin Code" type="text" value="" />
          </div>
          </div>
          <div class="form-row">
          <div class="compactfieldgrp">
                  <label for="Email_" class="bdtllabel required" >Email</label><br />
                  <input class="bdtltext" id="email" name="Address 1" type="text" value="" />
          </div>
          <div class="compactfieldgrp">
                  <label for="Mobile Number_" class="bdtllabel required" >Mobile Number</label><br />
                  <input class="bdtltext" id="mobile" name="Mobile Number" type="text" value="" />
          </div>
          <div class="compactfieldgrp">
                  <label for="LL_" class="bdtllabel required" >Alternate Phone</label><br />
                  <input class="bdtltext" id="altphone" name="LL" type="text" value="" />
          </div>
        </div>

        <div class="submit-row">
            <input type="hidden" name="permanent" value="permanent" />
            <input type="submit" value="Done" name ="addrprofiledone" id="addrprofiledone"/>
        </div>
       </div>
      </form>
    </div>
