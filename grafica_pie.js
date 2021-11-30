var estado=[];
var cantidad=[];
var llamado=true;
var	infectados=0;
var	muertes=0; 
var	curados=0;
var TH=0;
var TC=0;
var UCI=0;
var negativo=0;

$.post('pie.php', {llamado}, function(datos){
data = JSON.parse(datos);

for(var i=0;i<data.length;i++){
	if(data[i]=='Curado'){	
	curados+=1;
	}else if(data[i]=='Muerte'){
	muertes+=1;
	}else if(data[i]=='TH'){
	TH+=1;
	}else if(data[i]=='TC'){
	TC+=1;
	}else if(data[i]=='UCI'){
	UCI+=1;
	}else if(data[i]=='Negativo'){
	negativo+=1;
	}
}
infectados=TH+TC+UCI;
var ctx =document.getElementById("myChart").getContext("2d");
var cmyChart=new Chart(ctx,{
			type: "pie",
			data:{
				labels: ['Infectados','Muertes','Curados'],
				datasets:[{
						label: "Num datos",
						data:[infectados,muertes,curados],
						backgroundColor:[
						'rgb(39,42,138)',
						'rgba(60,100,217,255)',
						'rgba(175,7,178,255)'
						]
				}]
			},
			options:{
				plugins:{
					title:{
						display:true,
						 text:'Casos totales'
					}
				}
			}
});

var ctx2 =document.getElementById("myChart2").getContext("2d");
var pie2=new Chart(ctx2,{
			type: "pie",
			data:{
				labels: ['Tratamiento en casa','Tratamiento en hospital','UCI'],
				datasets:[{
						label: "Num datos",
						data:[TC,TH,UCI],
						backgroundColor:[
						'rgb(39,42,138)',
						'rgba(60,100,217,255)',
						'rgba(175,7,178,255)'
						]
				}]
			},
			options:{
				plugins:{
					title:{
						display:true,
						 text:'Infectados'
					}
				}
			}
});


var ctx3 =document.getElementById("myChart3").getContext("2d");
var pie3=new Chart(ctx3,{
			type: "pie",
			data:{
				labels: ['Positivos','Negativos'],
				datasets:[{
						label: "Num datos",
						data:[infectados,negativo],
						backgroundColor:[
						'rgb(39,42,138)',
						'rgba(60,100,217,255)',
						'rgba(175,7,178,255)'
						]
				}]
			},
			options:{
				plugins:{
					title:{
						display:true,
						 text:'Resultados positivos y negativos'
					}
				}
			}
});

});



