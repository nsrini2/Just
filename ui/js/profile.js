$(document).ready(function(){
  $('.form-content').load("displaypersonaldetails", function(){
    $.getScript("../ui/js/personal.js");
  });

  $('#profile-splitter').layout({
    center__minWidth: "80%",
    west__minSize: "10%",
    west__size: "25%",
    center__paneSelector: "#content-pane",
    west__paneSelector:   "#menu-pane",
    applyDefaultStyles: false,
    resizable:true,
    closable: false
 });

  $('#menu-pane').kendoTreeView({
    dataSpriteCssClassField: "sprite",
    dataSource: [
      {id:1,text: "Personal Details", sprite:"fa fa-briefcase", selected: true},
      {id:2,text: "Contact Details", sprite:"fa fa-briefcase"},
        {id:3,text: "Psychometric Details", sprite:"fa fa-briefcase"},
      {id:4,text: "Online Details", sprite:"fa fa-briefcase"},
      {id:5,text: "Documents", sprite:"fa fa-briefcase"}
     ],
    select: onSelect
   });

   $('.pichart').kendoChart({
		legend:{
		  visible:false,
          //position: "bottom",
          padding: 1,
          margin: 1
     },
	seriesDefaults: {
                    labels: {
                        visible: false,
                        position:"bottom"
                    },
                },
	tooltip:{
          visible: true,
          template: "#= category# - #= value#%"
     },
	chartArea: { margin: 0, background: "" },
    plotArea: { margin: 0 },
	series: [{
                    type: "pie",
					padding:0,
					data: [{
                        category: "Complete",
                        value: 60,
                        color: "#4D6590"
                    },{
                        category: "Incomplete",
                        value: 40,
                        color: "#966F70"
					}]

	       }]
  });

});

function onSelect(e){
 var dataItem=this.dataItem(e.node);
 var selItem=dataItem.text;
 switch(selItem){
   case "Personal Details":
    $('.form-content').load("displaypersonaldetails", function(){
      $.getScript("../ui/js/personal.js");
    });
    break;

  case "Contact Details":
     $('.form-content').load("displaycontactdetails", function(){
         $.getScript("../ui/js/contact.js");
      });
   break;
 }
}
