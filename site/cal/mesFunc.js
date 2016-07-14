


function show_hide(id){
	var divelement = document.getElementById(id);

	if (divelement.style.display == 'none'){
		divelement.style.display = 'block';
	}else{
		divelement.style.display = 'none';
	}
}

function showw(id){
	var divelement = document.getElementById('w'+id);
	divelement.style.display = 'block';
}

function hidew(id){
	var divelement = document.getElementById('w'+id);
	divelement.style.display = 'none';
}
function showba(id){
	var divelement = document.getElementById('ba'+id);
	divelement.style.display = 'block';
}

function hideba(id){
	var divelement = document.getElementById('ba'+id);
	divelement.style.display = 'none';
}
function showbr(id){
	var divelement = document.getElementById('br'+id);
	divelement.style.display = 'block';
}

function hidebr(id){
	var divelement = document.getElementById('br'+id);
	divelement.style.display = 'none';
}
