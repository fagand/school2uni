var input = document.getElementById("inputChoice");
input.addEventListener("keyup", function (event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        var name = $("#inputChoice").val();
        if (name.length <= 0)
            alert ("Not allowed")
        else{
        $.ajax({
            url: 'database/processSearch.php',
            method: 'POST',
            data: {
                search: name,
            },
            success: function (response) {
                alert(name + " stored in database");
            }
        });
        }
    }
})
