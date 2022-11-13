const input = prompt('masukan kata');

let data = {}
for (let i = 0; i< input.length; i++){
	let key = input[i]

	if (key==' '){
		key='spasi'
	}
	if (data[key]== undefined){	
	  data [key]=1
	  	
	}else {
		data[key]=data[key]+1
	}
	
}
for (i in data){
	console.log(i +"  = "+ data [i])
}


