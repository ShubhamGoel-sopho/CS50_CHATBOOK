$(document).ready(function () {
            $('.collapse').on('shown.bs.collapse', function () {
                $(this).parent().find('.glyphicon-plus-sign')
                                .removeClass('glyphicon-plus-sign')
                                .addClass('glyphicon-minus-sign');
            }).on('hidden.bs.collapse', function () {
                $(this).parent().find(".glyphicon-minus-sign")
                                .removeClass("glyphicon-minus-sign")
                                .addClass("glyphicon-plus-sign");
            });
});