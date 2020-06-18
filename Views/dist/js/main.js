// Active navbar
var selector = '.navbar .nav-item';
$(selector).on('click', function() {
    $(selector).removeClass('active');
    $(this).addClass('active');
});

$("#sidebar-wrapper .custom-navbar-sidebar .nav-item").each(function() {
    if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
        $(this).addClass('active');
    }
});
// Init scrollspy
$('body').scrollspy({
    target: '#main-nav,.navbar-footer,a.go-top'
});
$("#main-nav a,a.go-top, .navbar-footer a").on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        const hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1300, function() {
            window.location.hash = hash;
        });
    }
});

// Toggle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
// Popove
function test() {
    $('[data-toggle="popover"]').popover({
        trigger: 'focus'
    })
}