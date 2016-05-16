$(document).ready(function(){

  $('#DOB').datepicker({
	  dateFormat:'yy-mm-dd',
    changeMonth:true,
    changeYear:true,
    yearRange:"1900:Date.getFullYear()",
    maxDate:0,
    onSelect:checkUserAge
  });

  $('.required').append('<span class="red-star">*</span>');
})

function checkUserAge(dob, dpobj){
  var oneDay=1000*60*60*24;                 //1 day in milliseconds
  var today=new Date().getTime();
  var dob=new Date(dob).getTime();

  var diffMs = today-dob;                   //difference in milliseconds

  var ageInDays=Math.round(diffMs/oneDay);
  var ageInYears=ageInDays/365;

  if(ageInYears < 18){
   $(this).popover({
     placement:"top",
     title:"You must be 18 yrs of age to use Ju.St!"
   });
  }
  else{
    $(this).popover('hide');
  }
}

function dateToday(){
  var today=new Date();
  var dd=today.getDate();
  var mm=today.getMonth()+1;
  var yy=today.getFullYear();

  if(dd<10)
   dd='0'+dd;

  if(mm>10)
   mm='0'+mm;

  today=dd+'-'+mm+'-'+yy;
  return today;
}
