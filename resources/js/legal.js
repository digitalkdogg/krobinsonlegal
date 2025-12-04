var $ = jQuery.noConflict();

$(document).ready(function() {
    var ele = $('.wp-block-group');
    $(ele).each(function() {
        var waypoint = new Waypoint.Inview({
            element: this,
            enter: function(direction) {
                console.log('entering');
                $(this.element).addClass('visible');
            },
            exited: function(direction) {
                console.log('exited');
               // $(this.element).removeClass('bollman');
            }
        });
    });
})