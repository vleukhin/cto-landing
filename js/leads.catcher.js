(function ($) {
    $(document).ready(function () {
        var url = new URL(location.href);
        var term = url.searchParams.get('utm_term');
        var title = "Минитрактор<br/> по акции!";
        if (term){
            title = term.replace(/\+/g, '') + "<br/> по акции!";
        }

        var modal =$('\t\t<div id="openModal_lead" class="modalDialog">\n' +
            '\t\t\t<div style="margin-top: 0">\n' +
            '\t\t\t\t<a href="#close" title="Close" class="close"><span></span></a>\n' +
            '\t\t\t\t<div class="modal-box">\n' +
            '\t\t\t\t\t<h4 style="color: #fe475a; margin-bottom: 10px">' + title + '</h4>\n' +
            '\t\t\t\t\t<p style="padding: 0 8% 10px;font-size: 16px;">Внимание! Это акционное предложение показывается каждому посетителю только один раз. При последющих посещениях это предложение будет не доступно. Узнавайте цену по акции сейчас! </p>\n' +
            '\t\t\t\t\t<form method="post" action="/sender/send.php" class="sform">\n' +
            '\t\t\t\t\t<input type="hidden" id="ya-city" value="">\n' +
            '\t\t\t\t\t<input type="hidden" name="typsh" value="Шиномонтажное">\n\n' +
            '\t\t\t\t\t<input type="hidden" name="name" value="">\n\n' +
            '\t\t\t\t\t<input type="hidden" name="subject" value="Свой ловец лидов">\n' +
            '\t\t\t\t\t\t<div class="wrap-input-telephone-price">\n' +
            '\t\t\t\t\t\t\t<input class="input-text input-modal phone-mask" maxlength="18" type="text" name="phone" placeholder="Ваш телефон*">\n' +
            '\t\t\t\t\t\t<p style="width: 100%;max-width: 400px;margin: 0 auto;color: #b1b0b0;font-size: 14px;">Оставьте контактный телефон, специалист свяжется с вами и озвучит цену по акции! </p>\n' +
            '\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t\t<div class="alert_on alert_on_modal" id="phone_bottom_12"></div>\n' +
            '\t\t\t\t\t\t<div class="wrapper-button">\n' +
            '\t\t\t\t\t\t\t<input class="form-button form-1-btn btn-color-2 btn-modal" type="submit" name="submit" value="Узнать цену по акции">\n' +
            '\t\t\t\t\t\t</div>\n' +
            '\t\t\t\t\t</form>\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t</div>\n' +
            '\t\t</div>\n' +
            '\t\t');

        $('body').append(modal);
    });
})(window.jQuery);

(function() {
    document.onmousemove = handleMouseMove;
    function handleMouseMove(event) {
        event = event || window.event; // IE-ism
        if (event.clientY <= 10){
            location.hash = 'openModal_lead';
        }
    }
})();