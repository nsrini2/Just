$(document).ready(function(){
 $('#contactaddrtab').kendoTabStrip({
	contentUrls:["displaycurrentaddrdetails", "displaypermaddrdetails"]
});

//alert("In contact function!");

$('#addrprofiledone').click(function(){
  saveAddressDetails();
});
})

function saveAddressDetails(){
//alert("In here!");
  var add1 = $("#addr1").val();
  var add2 = $("#addr2").val();
  var city = $("#city").val();
  var state = $("#state").val();
  var pincode = $("#pincode").val();
  var addrtype = $("#addrtype").val();
  alert(city);
  $.ajax(
   {
     type: "POST",
     url: "/user/updateaddress",
     data: {
       add1: add1,
       add2: add2,
       city: city,
       state: state,
       pincode: pincode,
       addrtype: addrtype
     },
     success: function(data){
       alert("success!");
     },
     failure: function(data){
       alert("failure!");
     }
   });
};
