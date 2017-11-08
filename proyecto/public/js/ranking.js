function change(idEquipo){
    //responsible for calling a function in the base that is responsible for enabling or not a team
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