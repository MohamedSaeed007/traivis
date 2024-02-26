"use strict";!function(){var a=Chart.helpers.color;function r(){for(var a=[],r=0;r<7;r++)a.push({x:randomScalingFactor(),y:randomScalingFactor()});return a}var o={datasets:[{label:"My First dataset",borderColor:window.chartColors.red,backgroundColor:a(window.chartColors.red).alpha(.2).rgbString(),data:r()},{label:"My Second dataset",borderColor:window.chartColors.blue,backgroundColor:a(window.chartColors.blue).alpha(.2).rgbString(),data:r()}]},t=document.getElementById("other-1").getContext("2d");window.myScatter=Chart.Scatter(t,{data:o,options:{title:{display:!0,text:"Chart.js Scatter Chart"}}})}(),function(){var a=Chart.helpers.color,r={datasets:[{label:"My First dataset",xAxisID:"x-axis-1",yAxisID:"y-axis-1",borderColor:window.chartColors.red,backgroundColor:a(window.chartColors.red).alpha(.2).rgbString(),data:[{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()}]},{label:"My Second dataset",xAxisID:"x-axis-1",yAxisID:"y-axis-2",borderColor:window.chartColors.blue,backgroundColor:a(window.chartColors.blue).alpha(.2).rgbString(),data:[{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()},{x:randomScalingFactor(),y:randomScalingFactor()}]}]},o=document.getElementById("other-2").getContext("2d");window.myScatter=Chart.Scatter(o,{data:r,options:{responsive:!0,hoverMode:"nearest",intersect:!0,title:{display:!0,text:"Chart.js Scatter Chart - Multi Axis"},scales:{xAxes:[{position:"bottom",gridLines:{zeroLineColor:"rgba(0,0,0,1)"}}],yAxes:[{type:"linear",display:!0,position:"left",id:"y-axis-1"},{type:"linear",display:!0,position:"right",reverse:!0,id:"y-axis-2",gridLines:{drawOnChartArea:!1}}]}}})}(),function(){var a=function(){return Math.round(100*Math.random())},r={type:"doughnut",data:{datasets:[{data:[a(),a(),a(),a(),a()],backgroundColor:[window.chartColors.red,window.chartColors.orange,window.chartColors.yellow,window.chartColors.green,window.chartColors.blue],label:"Dataset 1"}],labels:["Red","Orange","Yellow","Green","Blue"]},options:{responsive:!0,legend:{position:"top"},title:{display:!0,text:"Chart.js Doughnut Chart"},animation:{animateScale:!0,animateRotate:!0}}},o=document.getElementById("other-3").getContext("2d");window.myDoughnut=new Chart(o,r)}(),function(){var a=function(){return Math.round(100*Math.random())},r={type:"pie",data:{datasets:[{data:[a(),a(),a(),a(),a()],backgroundColor:[window.chartColors.red,window.chartColors.orange,window.chartColors.yellow,window.chartColors.green,window.chartColors.blue],label:"Dataset 1"}],labels:["Red","Orange","Yellow","Green","Blue"]},options:{responsive:!0}},o=document.getElementById("other-4").getContext("2d");window.myPie=new Chart(o,r)}(),function(){var a=function(){return Math.round(100*Math.random())},r=window.chartColors,o=Chart.helpers.color,t={data:{datasets:[{data:[a(),a(),a(),a(),a()],backgroundColor:[o(r.red).alpha(.5).rgbString(),o(r.orange).alpha(.5).rgbString(),o(r.yellow).alpha(.5).rgbString(),o(r.green).alpha(.5).rgbString(),o(r.blue).alpha(.5).rgbString()],label:"My dataset"}],labels:["Red","Orange","Yellow","Green","Blue"]},options:{responsive:!0,legend:{position:"right"},title:{display:!0,text:"Chart.js Polar Area Chart"},scale:{ticks:{beginAtZero:!0},reverse:!1},animation:{animateRotate:!1,animateScale:!0}}},n=document.getElementById("other-5");window.myPolarArea=Chart.PolarArea(n,t)}(),function(){var a=function(){return Math.round(100*Math.random())},r=Chart.helpers.color,o={type:"radar",data:{labels:[["Eating","Dinner"],["Drinking","Water"],"Sleeping",["Designing","Graphics"],"Coding","Cycling","Running"],datasets:[{label:"My First dataset",backgroundColor:r(window.chartColors.red).alpha(.2).rgbString(),borderColor:window.chartColors.red,pointBackgroundColor:window.chartColors.red,data:[a(),a(),a(),a(),a(),a(),a()]},{label:"My Second dataset",backgroundColor:r(window.chartColors.blue).alpha(.2).rgbString(),borderColor:window.chartColors.blue,pointBackgroundColor:window.chartColors.blue,data:[a(),a(),a(),a(),a(),a(),a()]}]},options:{legend:{position:"top"},title:{display:!0,text:"Chart.js Radar Chart"},scale:{ticks:{beginAtZero:!0}}}};window.myRadar=new Chart(document.getElementById("other-6"),o)}(),function(){var a={labels:["January","February","March","April","May","June","July"],datasets:[{type:"line",label:"Dataset 1",borderColor:window.chartColors.blue,borderWidth:2,fill:!1,data:[randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]},{type:"bar",label:"Dataset 2",backgroundColor:window.chartColors.red,data:[randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()],borderColor:"white",borderWidth:2},{type:"bar",label:"Dataset 3",backgroundColor:window.chartColors.green,data:[randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]}]},r=document.getElementById("other-7").getContext("2d");window.myMixedChart=new Chart(r,{type:"bar",data:a,options:{responsive:!0,title:{display:!0,text:"Chart.js Combo Bar Line Chart"},tooltips:{mode:"index",intersect:!0}}})}();