$(document).ready(function(){
    $("#addForm").submit(function(e){
        e.preventDefault();

        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var department_id = $("#departments option:selected").val();

        $("tbody").load("add_row.php", {
            firstName: firstName,
            lastName: lastName,
            departmentId: department_id
        });
    });
});

$(document).ready(function(){
    $(document).on("click", ".deleteBtn", function(e){
        e.preventDefault();

        var id = $(this).closest("tr").attr("id");

        console.log(id);
        $("tbody").load("delete_row.php", {
            employee_id: id
        });
    });
});