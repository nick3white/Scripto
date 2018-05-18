var Scripto = {

    /**
     * Apply panzoom to an element.
     *
     * @param element
     */
    applyPanzoom: function(element) {
        var container = element.parent();
        if (!container.hasClass('image')) {
            return;
        }
        $panzoom = element.panzoom({
            $zoomIn: container.find(".zoom-in"),
            $zoomOut: container.find(".zoom-out"),
            $reset: container.find(".reset"),
            maxScale: 20
        });
        container.on('mousewheel.focal', function(e) {
            e.preventDefault();
            var delta = e.delta || e.originalEvent.wheelDelta;
            var zoomOut = delta ? delta < 0 : e.originalEvent.deltaY > 0;
            $panzoom.panzoom('zoom', zoomOut, {
                increment: 0.1,
                animate: false,
                focal: e
            });
        });
    },

    /**
     * Set rotation of an object.
     *
     * @param obj
     * @param direction
     */
    setRotation: function(obj, direction) {
        var matrix = obj.css("-webkit-transform")
            || obj.css("-moz-transform")
            || obj.css("-ms-transform")
            || obj.css("-o-transform")
            || obj.css("transform");
        if (matrix !== 'none') {
            var values = matrix.split('(')[1].split(')')[0].split(',');
            var a = values[0];
            var b = values[1];
            var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
        } else {
            var angle = 0;
        }
        var currentRotation = (angle < 0) ? angle + 360 : angle;
        var newRotation = (direction == 'left') ? currentRotation - 90 : currentRotation + 90;
        obj.css('transform', 'rotate(' + newRotation + 'deg)');
    },

    /**
     * Toggle the protection expiration select.
     *
     * @param protectionSelect
     */
    toggleExpirationSelect: function(protectionSelect) {
        var expirySelect = $('[name="protection_expiry"]');
        var currentValue = protectionSelect.find('option:selected').val();
        if (currentValue && currentValue != "all") {
            expirySelect.show();
        } else {
            expirySelect.hide();
        }
    }
};
