<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><script type="text/javascript" src="http://code.highcharts.com/highcharts.src.js"></script></head><body><h1>一个月的价格趋势</h1><div id="J_apple_price"></div><script type="text/javascript">		var chart;  
		$(document).ready(function() {  
		    chart = new Highcharts.Chart({  
		        chart: {  
		            renderTo: 'J_apple_price',//设置显示图表的容器  
		            type: 'line',//设置图表样式，可以为line,spline, scatter, splinearea bar,pie,area,column  
		//          defaultSeriesType: 'column', //图表的默认样式  
		//          margin:[21, 23, 24, 54],//整个图表的位置(上下左右的空隙)  
		            marginRight: 200,//右边间距  
		            marginBottom: 25//底部间距/空隙  
		//          inverted: false,//可选，控制显示方式，默认上下正向显示  
		//          shadow:true,//外框阴影  
		//          backgroundColor:"#FFF",  
		//          animation:true,  
		//          borderColor:"#888",  
		//          borderRadius:5,  
		//          borderWidth:1,  
		//          ignoreHiddenSeries:true,  
		//          reflow:true,  
		//          plotBorderWidth:1,  
		//          alignTicks:true  
		        },  
		        labels: {
		            items:[{  
		                html:'本图表数据有误，仅用于说明相应的属性',  
		                style:{left:'100px',top:'60px'}  
		            }, {  
		                html:'http://www.highcharts.com/demo',  
		                style:{left:'100px',top:'100px'}  
		            }]  
		        },  
		        credits:{
		            enabled: true,  
		            position: { 
		                align: 'right',  
		                x: -10,  
		                y: -10  
		            },  
		            href: "http://www.highcharts.com",//点击文本时的链接  
		            style: {  
		                color:'blue'  
		            },  
		            text: "Highcharts Demo"//显示的内容  
		        },  
		        title: {  
		            text: 'Monthly Average Temperature',//标题  
		            x: -20 //center设置标题的位置  
		        },  
		        subtitle: {  
		            text: 'Source: WorldClimate.com',//副标题  
		            x: -20//副标题位置  
		        },  
		        xAxis: {
		            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',  
		                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']  
		        },  
		        yAxis: {  
		            title: {
		                text: '百分数'  
		            },  
		            labels: {  
		                formatter : function() {
		                 return this.value + '%';  
		                }  
		               },   
		            plotLines: [{  
		                value: 0,  
		                width: 1,  
		                color: '#808080'  
		            }]  
		        },  
		        tooltip: { 
		            formatter: function() {  
		                    return '<b>'+ this.series.name +'</b><br/>'+  
		                    this.x +': '+ this.y +'Â°C';  
		            }  
		        },  
		        legend: {
		            layout: 'vertical',  
		            align: 'right',  
		            verticalAlign: 'top',  
		            x: -10,  
		            y: 100,  
		            borderWidth: 0  
		        },  
		        series: [{
		            name: 'Tokyo',  
		            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]  
		        }, {  
		            name: 'New York',  
		            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]  
		        }, {  
		            name: 'Berlin',  
		            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]  
		        }, {  
		            name: 'London',  
		            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]  
		        }]  
		    });  
		});  
</script></body></html>