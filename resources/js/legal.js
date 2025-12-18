(function($) {
    $(document).ready(function() {
        $['legal'] = {};
        let arr = Object.keys(custom);
        for (let x= 0; x < arr.length; x++) {
            $['legal'][arr[x]] = custom[arr[x]][0];

        }
        custom = undefined


        function checkDisableAnimations() {
            if ($['legal']['disable_animation'] != undefined ) {
                return true;
            } else  if ($['legal']['disable_animations'] != undefined ) {
                return true;
            } else {
                return false;
            }
        }
  
        var ele = $('.wp-block-group' );
        $(ele).each(function() {
            if (!checkDisableAnimations()) {
                var waypoint = new Waypoint.Inview({
                    element: this,
                    enter: function(direction) {
                        $(this.element).addClass('visible');
                    }
                });
            } else {
                $(this).addClass('visible-no-animation');
            }
        });

    });
})(jQuery);
jQeury = undefined