jQuery(document).ready(function() {
    jQuery('.post').addClass("hideAnimation").viewportChecker({
        classToAdd: 'viewAnimation animated fadeIn',
        offset: 200
       });
});