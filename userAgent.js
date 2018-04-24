    var $ios = $('#app_ios'),
        $android = $('#app_android');

    if (navigator.userAgent.match(/Android/i)) {
        $android.show();
        $ios.hide();
    } else if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
        $android.hide();
        $ios.show();
    } else {
        $android.show();
        $ios.show();
    }
