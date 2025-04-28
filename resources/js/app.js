import "./bootstrap";

$(document).ready(function () {
    // Initialize Select2 for both dropdowns
    $("#project-dropdown").select2();
    $("#cluster-dropdown").select2();

    // Handle project dropdown change
    $("#project-dropdown").on("change", function () {
        var projectId = $(this).val();
        if (projectId) {
            // Enable cluster dropdown when a project is selected
            $("#cluster-dropdown").prop("disabled", false);
            $("#status-text").text("Status: Pilih cluster");
        } else {
            // Reset when no project is selected
            $("#cluster-dropdown")
                .prop("disabled", true)
                .val("")
                .trigger("change");
            $("#status-text").text("Status: Pilih project dan cluster");
            $("#subscribe-button").hide();
        }
    });

    // Handle cluster dropdown change
    $("#cluster-dropdown").on("change", function () {
        var clusterId = $(this).val();
        if (clusterId) {
            // Show "Terjangkau" and the subscribe button when a cluster is selected
            $("#status-text").text("Status: Terjangkau");
            $("#subscribe-button").show();
        } else {
            // Reset when no cluster is selected
            $("#status-text").text("Status: Pilih cluster");
            $("#subscribe-button").hide();
        }
    });
});
