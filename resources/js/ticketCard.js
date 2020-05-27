$(document).ready(function() {
    $(".details[id]").each(function() {
        let plusBtnArr = [];
        plusBtnArr.push(this);
        for (let i = 0; i < plusBtnArr.length; i++) {
            var elementId = plusBtnArr;
            // console.log(element);
            // $(elementId).click(() => {
            //     // var test = $(this).attr("id");
            //     console.log(elementId);
            // });
            const element = $(elementId);
            element.click(() => {
                const ticketId = element.attr("data-ticketId");
                console.log(ticketId);
                const ticketDetail = $(`#ticketDetail-${ticketId}`);
                ticketDetail.toggleClass("hidden");
            });
        }
    });
});
