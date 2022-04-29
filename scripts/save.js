$(document).ready(function(e) {
    $("#saveform").submit(function(e){
        var formData = {
            entity_id: $("#entity_id").val(),
        };
        $.ajax({
            type: "GET",
            url: 'save_entity.php',
            data: formData,
            success: function (data) {
                console.log(data);
                $('#msg').html(data);
            }
        });
        e.preventDefault();
    });
})
