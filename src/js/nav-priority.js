jQuery(document).ready(function ($) {
    var $nav = $('.nav-primary');
    var $btn = $('.nav-primary .btn');
    var $vlinks = $('.nav-primary .navbar-nav');
    var $hlinks = $('.nav-primary .hidden-links');
    var numOfItems = 0;
    var totalSpace = 0;
    var breakWidths = [];
    // Get initial state
    $vlinks.children().outerWidth(function (i, w) {
        totalSpace += w;
        numOfItems += 1;
        breakWidths.push(totalSpace);
    });
    var availableSpace, numOfVisibleItems, requiredSpace;

    function check() {
        // Get instant state
        availableSpace = $vlinks.width() - 73;
        numOfVisibleItems = $vlinks.children().length;
        requiredSpace = breakWidths[numOfVisibleItems - 1];
        // There is not enought space
        if (requiredSpace > availableSpace) {
            $vlinks.children().last().prependTo($hlinks);
            numOfVisibleItems -= 1;
            check();
            // There is more than enough space
        }
        else if (availableSpace > breakWidths[numOfVisibleItems]) {
            $hlinks.children().first().appendTo($vlinks);
            numOfVisibleItems += 1;
        }
        if (numOfVisibleItems === numOfItems) {
            $btn.addClass('d-none');
        }
        else $btn.removeClass('d-none');
    }
    // Window listeners
    $(window).resize(function () {
        check();
    });
    $btn.on('click', function () {
        $hlinks.toggleClass('hidden');
    });
    check();
});