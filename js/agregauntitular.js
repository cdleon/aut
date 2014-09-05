$('document').ready(function(){
	$('#internacionales').hide();
	$('#nacionales').hide();
	$('#divOtro').hide();
});
$('#clasificacion').change(function(){
	//alert($(this).val());
	if($(this).val()=='Nacionales'){
		//alert('nacionales');
		$('#nacionales').show();
		$('#internacionales').hide();
		$('select .Iselect').val()='';
	}else{
		$('#nacionales').hide();
		$('#internacionales').show();
		$('select .Nselect').val()='';
	}
});
$('#fuente').change(function(){
	if($(this).val()=='otro'){
		$('#divOtro').show();
	}else{
		$('#divOtro').hide();
	}
});
$('#categoria').change(function(){
	var POSTcategoria = $('#categoria option:selected').val();
	$.post("ajax/ajaxcategorias.php", {POSTcategoria:POSTcategoria},function( data ) {
			//alert(data);
		$('#subcategoria').html('<label for="subcategoria">Selecciona la subcategoria</label><select name="subcategoria">' + data + '</select>');
	});
});