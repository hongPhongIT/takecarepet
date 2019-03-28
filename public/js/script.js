function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

$(document).ready(function() {
    const user = $('meta[name="user-infor"]').attr('content');
    if (user !== undefined) {
        localStorage.setItem("takecarepet_UserInfor", user);
    }
})
