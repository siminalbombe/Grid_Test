/**
 * Created by simon.hofmann on 17/05/2017.
 */
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#download').click(function () {
    doc.fromHTML($('#results').html(), 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});