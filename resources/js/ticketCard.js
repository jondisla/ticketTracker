$(document).ready(function() {
    $("#plusBtn").click(() => {
        $(".ticketDetail").toggle("blind");
        $(".details").toggleClass("active");
    });
});
