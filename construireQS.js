function construireQS(form)
{
    var qs = new Array;
    var saisies = 0;

    for (var k in form.elements) {
        var v = form.elements[k];
        if (v.name == 'cours' || v.name == 'evaluation') {
            qs[saisies] = v.name + '=' + v.value
            ++saisies;
        }
    }
    return qs.join('&');
}
