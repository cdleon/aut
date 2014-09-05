$(document).ready(function(){
    $('#cropbox').Jcrop({
        bgColor:     'black',
        bgOpacity:   .4,
        setSelect:   [ 200, 200, 50, 50 ],
        aspectRatio: 1.42857142857,
        minSize: [150, 125],
        onSelect: updateCoords
    });
});
function updateCoords(c){
    $('#x').val(c.x);
    $('#y').val(c.y);
    $('#w').val(c.w);
    $('#h').val(c.h);
};
function checkCoords(){
    if (parseInt($('#w').val())) return true;
    alert('Select to crop.');
    return false;
};

