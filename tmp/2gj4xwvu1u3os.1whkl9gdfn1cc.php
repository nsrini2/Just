 <div class="profile-partial-div">
  <form id="profileForm" name="profileForm" action="<?php echo $BASE.'/user/profile'; ?>" method="POST" enctype="multipart/form-data">
		 <div class="profileParent">
		  <div class="form-row">
		    <div class="fieldgrp">
                        <label for="FirstName_" class="bdtllabel required" >First Name</label><br />
                        <input class="bdtltext" name="User_First_Name" type="text" value="<?php echo isset($POST['User_First_Name']) ? trim(htmlspecialchars($POST['User_First_Name'])) : ''; ?>" />
			  </div>
			  <div class="fieldgrp">
                        <label for="MiddleName_" class="bdtllabel" >Middle Name</label><br />
                        <input class="bdtltext" name="User_Middle_Name" type="text" value="<?php echo isset($POST['User_Middle_Name']) ? trim(htmlspecialchars($POST['User_Middle_Name'])) : ''; ?>" />
			  </div>
			  <div class="fieldgrp">
                        <label for="LastName_" class="bdtllabel required" >Last Name</label><br />
                        <input class="bdtltext" name="User_Last_Name" type="text" value="<?php echo isset($POST['User_Last_Name']) ? trim(htmlspecialchars($POST['User_Last_Name'])) : ''; ?>" />
			  </div>
       </div>

       <div class="form-row">
		    <div class="fieldgrp">
                <label for="DOB_" class="bdtllabel required" >Date of Birth</label><br />
				        <input class="bdtltext" id="DOB" data-toggle="popover"  name="DOB" type="text" value=" <?php echo isset($POST['DOB']) ? trim(htmlspecialchars($POST['DOB'])) : ''; ?>" />
		    </div>
			  <div class="fieldgrp">
		            <label for="Gender_" class="bdtllabel required" >Gender</label><br />
			          <div class="genderradio">
                  <?php if (isset($POST['Gender'])): ?>
                    
                     <?php if ($POST['Gender'] == 'M'): ?>
                       
		    	               <input  type="radio" name="Gender" value="M" checked="checked"/><label for="male_" class="smalllabel">Male</label>
				                 <input  type="radio" name="Gender" value="F"/><label for="female_" class="smalllabel">Female</label>
				                 <input  type="radio" name="Gender" value="O"/><label for="other_" class="smalllabel">Other</label>
                      
                      <?php else: ?>
                        <?php if ($POST['Gender'] == 'F'): ?>
                          
                           <input  type="radio" name="Gender" value="M"/><label for="male_" class="smalllabel">Male</label>
   				                 <input  type="radio" name="Gender" value="F" checked="checked"/><label for="female_" class="smalllabel">Female</label>
   				                 <input  type="radio" name="Gender" value="O"/><label for="other_" class="smalllabel">Other</label>
                         
                         <?php else: ?>
                           <?php if ($POST['Gender'] == 'O'): ?>
                             
                               <input  type="radio" name="Gender" value="M"/><label for="male_" class="smalllabel">Male</label>
   				                     <input  type="radio" name="Gender" value="F" /><label for="female_" class="smalllabel">Female</label>
   				                     <input  type="radio" name="Gender" value="O" checked="checked"/><label for="other_" class="smalllabel">Other</label>
                            
                           <?php endif; ?>
                         
                       <?php endif; ?>
                     
                   <?php endif; ?>
                 
                 <?php else: ?>
                   <input  type="radio" name="Gender" value="M"/><label for="male_" class="smalllabel">Male</label>
                   <input  type="radio" name="Gender" value="F"/><label for="female_" class="smalllabel">Female</label>
                   <input  type="radio" name="Gender" value="O"/><label for="other_" class="smalllabel">Other</label>
                 
               <?php endif; ?>
			      </div>
		    </div>
		    <div class="fieldgrp">
		            <input type="hidden" name="MAX_FILE_SIZE" value="16000000" />
 		            <label for="Foto_" class="bdtllabel required" >Photograph</label><br />
		            <div class="upld">
                  <input type="file" name="User_Photo" id="Foto" />
                </div>
                <?php if (isset($POST['User_Photo'])): ?>
                  
                    <div class="bdtllabel">
		                  <a href="showimg/<?php echo $POST['User_ID']; ?>" class="fieldgrplink" target="_blank">Your photograph</a>
                    </div>
                  
                <?php endif; ?>
      </div>
		 </div>
		<div class="form-row">
		    <div class="fieldgrp">
			       <label for="PAN_" class="bdtllabel required" >PAN Number</label><br />
				     <input class="bdtltext" id="PAN" name="PAN_No" size="10" type="text" value=" <?php echo isset($POST['PAN_No']) ? trim(htmlspecialchars($POST['PAN_No'])) : ''; ?>" />
		   </div>
		   <div class="fieldgrp">
            <label for="AADHAAR_" class="bdtllabel required" >AADHAAR Number</label><br />
            <input class="bdtltext" name="Aadhar_No" type="text" size="12" value="<?php echo isset($POST['Aadhar_No']) ? trim(htmlspecialchars($POST['Aadhar_No'])) : ''; ?>" />
			</div>
		</div>
		<div class="submit-row">
      <input type="hidden" name="User_ID" value="<?php echo isset($POST['User_ID']) ? trim(htmlspecialchars($POST['User_ID'])) : ''; ?>"/>
      <input type="hidden" name="User_Photo_Filename" value="<?php echo isset($POST['User_Photo_Filename']) ? trim(htmlspecialchars($POST['User_Photo_Filename'])) : ''; ?>" />
      <input type="hidden" name="create" value="create" />
      <input type="submit" value="<?php echo isset($POST['User_ID']) ? 'Update':'Done'; ?>" name ="bprofiledone" id="bprofiledone"/>
		</div>
		</div>
  </form>
</div>
