$(document).ready(function(){
  $('.panel-body-contents > div').not("#signup").hide();

  $('.home-list a').on('click', function (e) {
  e.preventDefault();
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  target = $(this).attr('href');
  $('.panel-body-contents > div').not(target).hide();
  $(target).fadeIn(600);
});

$("#pichart").kendoChart({

  legend: {
    position: "bottom"
  },
  seriesDefaults:{
    labels: {
      visible:false,
      format:"{0}%"
    }
  },
  chartArea:{
    width:250,
    height:250,
    background:""
  },
  series: [{
    type:"pie",
    padding:0,
    data: [{
      category:"6 mo",
      value:22
    },
    {
      category:"12 mo",
      value:38
    },
    {
      category:"18 mo",
      value:40
    }]
  }],
  tooltip: {
                visible: true,
                template: "${ category } - ${ value }%"
            },
  seriesColors: ["#0099ff","#66ccff", "#9966ff"]

  });

  $("#barchart").kendoChart({
    legend: {
      position: "bottom"
    },

    series:[{
      name:"Performance",
      data: [200,400,600,800]
    }],
    categoryAxis:{
      categories: [6, 12, 18, 24 ]
    },
    chartArea:{
      width:250,
      height:250,
      background:""
    },
    seriesColors: ["#0099ff"]
  });
})
