<div class="container-fluid profilecontainer">
  <div class="panel panel-default">
    <div class="panel-body">
      <form id="profileform" name="profileform" action="<?php echo $BASE.'/user/profile'; ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-4">
            <div class="input-group">
              <label for="FirstName_" class="label required form-label" >First Name</label><br />
              <input class="form-control form-text-input" name="User_First_Name" type="text" value="<?php echo isset($POST['User_First_Name']) ? trim(htmlspecialchars($POST['User_First_Name'])) : ''; ?>" />
           </div>
        </div>
      <div class="col-sm-4">
        <div class="input-group">
          <label for="MiddleName_" class="label required form-label" >Middle Name</label><br />
          <input class="form-control form-text-input" name="User_Middle_Name" type="text" value="<?php echo isset($POST['User_Middle_Name']) ? trim(htmlspecialchars($POST['User_Middle_Name'])) : ''; ?>" />
        </div>
      </div>
      <div class="col-sm-4">
        <div class="input-group">
          <label for="LastName_" class="label required form-label" >Last Name</label><br />
          <input class="form-control form-text-input" name="User_Last_Name" type="text" value="<?php echo isset($POST['User_Last_Name']) ? trim(htmlspecialchars($POST['User_Last_Name'])) : ''; ?>" />
        </div>
      </div>
    </div>

    <div class="row form-margin-row">
     <div class="col-sm-4">
      <div class="input-group">
        <label for="DOB_" class="label required form-label" >Date of Birth</label><br />
        <input class="form-control form-text-input" id="DOB" name="DOB" type="text" value=" <?php echo isset($POST['DOB']) ? trim(htmlspecialchars($POST['DOB'])) : ''; ?>" />
      </div>
    </div>
    <div class="col-sm-4">
     <div class="input-group">
       <label for="Gender_" class="label required form-label" >Gender</label><br />
        <div class=".radio-inline">
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
    </div>
    <div class="col-sm-4">
     <div class="input-group">
       <input type="hidden" name="MAX_FILE_SIZE" value="16000000" />
         <label for="Photograph_" class="label required form-label" >Photograph</label><br />
           <input type="file" name="User_Photo" id="Foto" />
           <?php if (isset($POST['User_Photo'])): ?>
             
               <div class="bdtllabel">
                 <a href="showimg/<?php echo $POST['User_ID']; ?>" class="fieldgrplink" target="_blank">Your photograph</a>
               </div>
           
          <?php endif; ?>
       </div>
    </div>
  </div>
  <div class="row form-margin-row">
    <div class="col-sm-4">
     <div class="input-group">
       <label for="PAN_No_" class="label required form-label" >PAN Number</label><br />
       <input class="form-control form-text-input" id="PAN" name="PAN_No" type="text" value=" <?php echo isset($POST['PAN_No']) ? trim(htmlspecialchars($POST['PAN_No'])) : ''; ?>" />
     </div>
   </div>
   <div class="col-sm-4">
    <div class="input-group">
      <label for="Aadhar_No_" class="label required form-label" >Aadhaar Number</label><br />
      <input class="form-control form-text-input" name="Aadhar_No" type="text" value="<?php echo isset($POST['Aadhar_No']) ? trim(htmlspecialchars($POST['Aadhar_No'])) : ''; ?>" />
    </div>
  </div>
  <div class="col-sm-4">
   <div class="input-group">
     <label for="Email_" class="label required form-label" >EMail</label><br />
       <input class="form-control form-text-input" name="Email" type="text" value="<?php echo isset($POST['Email']) ? trim(htmlspecialchars($POST['Email'])) : ''; ?>" />
     </div>
   </div>
 </div>
 <div class="row form-margin-row">
   <div class="col-sm-12" style="border:1px solid red">
       <input type="hidden" name="User_ID" value="<?php echo isset($POST['User_ID']) ? trim(htmlspecialchars($POST['User_ID'])) : ''; ?>"/>
       <input type="hidden" name="User_Photo_Filename" value="<?php echo isset($POST['User_Photo_Filename']) ? trim(htmlspecialchars($POST['User_Photo_Filename'])) : ''; ?>" />
       <input type="hidden" name="create" value="create" />
       <input type="submit" class="form-control input-lg form-submit-input" value="<?php echo isset($POST['User_ID']) ? 'Update':'Done'; ?>" name ="savepersdtls" id="savepersdtls"/>
   </div>
 </div>
</form>
</div>
</div>
</div>
