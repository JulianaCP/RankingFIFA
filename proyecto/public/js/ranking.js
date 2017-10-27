function change(idEquipo){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: 'ranking/enableTeam',
        data: {id : idEquipo},
        success: function() {
            console.log("Success");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Error: " + errorThrown); 
        } 
    })
}