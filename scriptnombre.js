$(document).ready(function(){
    $('input.typeaheadnombre').typeahead({
        source: function(query,process){
            return $.get('retornoDatanombre.php', { query:query },function(data){
                data= $.parseJSON(data);
                return process(data);
            });

        },
        showHintOnFocus:'all'
    });
});