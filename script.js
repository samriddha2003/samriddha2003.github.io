$(document).ready(function () {
    $("#jobApplicationForm").on("submit", function (e) {
        e.preventDefault(); // Prevent default form submission

        let formData = new FormData(this);

        $.ajax({
            url: "submit.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                $("#response").html(response).fadeIn();
            },
            error: function () {
                $("#response").html("<p style='color: red;'>Something went wrong. Please try again.</p>").fadeIn();
            }
        });
    });
});