function completerForm(form, qs) {
    return !ajax(form.action, qs, function (xhr) {
	var d = document.createElement('div');
        d.innerHTML = xhr.responseText;
	form.appendChild(d);
    }, 'POST');
}
