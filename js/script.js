$(document).ready(function(){

	var base_url = 'http://localhost:8080/registro/'

	$('#accionar').on('change',function(){
		id_accionar = $(this).val()

		$.ajax({
			url    : base_url + 'consultas/mejoras.php',
			type   : 'POST',
			data   : {id_accionar : id_accionar},
			success: function(response){
				data = JSON.parse(response)
				$('#mejora').empty()
				for(i = 0;i < data.length;i++){
					$('#mejora').append([
						'<option value="'+ data[i].id_mejora +'" >',
						data[i].mejora,
						'</option>'
					].join(''))
				}

			} 
		})//ajax

	})//change

})//jqery