$(document).ready(function ($) {

    // TinyMCE init
    tinymce.init({
        selector: '#writeEssay'
    });

    // Datepicker init
    $('#dob').datepicker();

    // Multiform
    let current_fs, next_fs, previous_fs; // Fieldset
    let opacity; // Fieldset properties which we will animate

    // For next button
    $(".next").click(function (e) {
        e.preventDefault();

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Show next fieldset
        next_fs.show();

        // Hide current fieldset
        current_fs.animate({opacity: 0}, {
            step: function (now) {
                opacity = 1 - now;
                current_fs.css({
                    "display": "none",
                    "position": "relative"
                });
                next_fs.css({
                    "opacity": opacity
                });
            }, duration: 600
        });
    });

    // For previous button
    $(".previous").click(function (e) {
        e.preventDefault();

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        // Show next fieldset
        previous_fs.show();

        // Hide current fieldset
        current_fs.animate({opacity: 0}, {
            step: function (now) {
                opacity = 1 - now;
                current_fs.css({
                    "display": "none",
                    "position": "relative"
                });
                previous_fs.css({
                    "opacity": opacity
                });
            }, duration: 600
        });
    });

});