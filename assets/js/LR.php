//Menargetkan elemen yang ditentukan

function repositionAbsolute(layer) {
	var oDiv = document.getElementById(layer);
	var left = document.body.scrollLeft || document.documentElement.scrollLeft;
	var top = document.body.scrollTop || document.documentElement.scrollTop;
	var width = document.documentElement.clientWidth;
	var height = document.documentElement.clientHeight;
    oDiv.style.left = left + width - oDiv.offsetWidth + 'px';
    oDiv.style.top = top + height - oDiv.offsetHeight + 'px';
}

function repositionFixed(layer) {
	var oDiv = document.getElementById(layer);
	var width = document.documentElement.clientWidth;
	var height = document.documentElement.clientHeight;
    oDiv.style.left = width - oDiv.offsetWidth + 'px';
    oDiv.style.top = height - oDiv.offsetHeight + 'px';
}
