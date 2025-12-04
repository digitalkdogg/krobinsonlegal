(function($) {
    $(document).ready(function() {
        $['legal'] = custom;
        custom = undefined

        //console.log($['legal']['disabled_animations'][0]);

        var ele = $('.wp-block-group');
        $(ele).each(function() {
            var waypoint = new Waypoint.Inview({
                element: this,
                enter: function(direction) {
                    $(this.element).addClass('visible');
                },
                exited: function(direction) {
                    $(this.element).removeClass('bollman');
                }
            });
        });
    });
})(jQuery);