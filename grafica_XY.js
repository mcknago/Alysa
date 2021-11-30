var fechas=[];
var muertos=[];
var casos=[];
var llamado=true;

$.post('grafica_XY.php', {llamado}, function(datos){
var data = JSON.parse(datos);

 for(var i=0; i<data.length;i++){
 	 console.log(data[i][2]);
 	if(data[i][2]=="Positivo"){
	 	fechas.push(data[i][0]);
	 	casos.push(data[i][1]);
	 	}else if(data[i][2]=="Muerte"){
	 	fechas.push(data[i][0]);
	 	muertos.push(data[i][1]);
 	}
 } 

const casosG = {
    label: "Casos registrados",
    data: casos, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const muertosG = {
    label: "Muertes registradas",
    data: muertos, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 159, 64, 0.2)',// Color de fondo
    borderColor: 'rgba(255, 159, 64, 1)',// Color del borde
    borderWidth: 1,// Ancho del borde
};


var ctx =document.getElementById("XY").getContext("2d");
var cmyChart=new Chart(ctx,{
			type: "line",
			data:{
			  	labels: fechas,
			  		datasets: [
			            casosG,
			            muertosG,
			        ]
			},

			options:{
			responsive: false,
			legend: {
			    display: true,
			    position: 'top',
			    labels: {
			      boxWidth: 80,
			      fontColor: 'black',
			    }
			  } 
			}
});

});
