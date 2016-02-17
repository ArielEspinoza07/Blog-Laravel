$(".select-category").chosen({
	placeholder_text_single: 'Seleccione una opcion',
	no_results_text: 'No se encontro esta categoria'
});

$(".select-tag").chosen({
	placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
	max_selected_options: 3,
	search_contains: 'true',
	no_results_text: 'No se encontraron estos tags'
});

$(".textarea-content").trumbowyg();