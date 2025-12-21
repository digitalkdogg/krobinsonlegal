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

    if ($('.list-table').length) {

        $('.list-table').each(function() {
            let table = $(this);
            $(table).find('td').each(function () {
                let td = $(this);
                let text = $(td).html().split('<br>');
                $(td).html('<ul>');
                $.each(text, function (index, value) {
                   let val = '<li class = "has-medium-font-size">' + value + '</li>';
                   $(td).find('ul').append(val);
                });
            })
        });
    }
    });
})(jQuery);
jQeury = undefined