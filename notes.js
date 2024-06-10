document.querySelectorAll('td').forEach(function (e) {
    var n = e.firstChild.data;
    if (n.match(/^[0-9.]+$/)) {
	if (n < 10) {
            e.style.color = 'red';
	} else if (n < 15) {
            e.style.color = 'orange';
	} else {
            e.style.color = 'green';
	}
    }})
