$(document).ready(function(){
    $('input.typeahead_nombre_registro_vehiculos').typeahead({
        source: function(query,process){
            return $.get('retornoData_nombre_registro_vehiculos.php', { query:query },function(data){
                data= $.parseJSON(data);
                return process(data);
            });

        },
        showHintOnFocus:'all'
    });
});