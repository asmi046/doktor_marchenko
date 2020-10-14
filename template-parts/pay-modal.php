<div style="display: none;">
    <div class="box-modal" id="payModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class = "modalline" id = "lineIcon">
    </div>
    <div class="pay-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/pay-img.png)"></div>
    <style>.tinkoffPayRow{display:block;margin:1%;width:160px;}</style>
    <script src="https://securepay.tinkoff.ru/html/payForm/js/tinkoff_v2.js"></script>
    <form class="pay-form" name="TinkoffPayForm" onsubmit="pay(this); return false;">
        <input class="tinkoffPayRow" type="hidden" name="terminalkey" value="TinkoffBankTest">
        <input class="tinkoffPayRow" type="hidden" name="frame" value="true">
        <input class="tinkoffPayRow" type="hidden" name="language" value="ru">
        <input class="tinkoffPayRow" type="text" placeholder="Сумма заказа" name="amount" required>
        <input class="tinkoffPayRow" type="text" placeholder="Номер заказа" name="order">
        <input class="tinkoffPayRow" type="text" placeholder="Описание заказа" name="description">
        <input class="tinkoffPayRow" type="text" placeholder="ФИО плательщика" name="name">
        <input class="tinkoffPayRow" type="text" placeholder="E-mail" name="email">
        <input class="tinkoffPayRow" type="text" placeholder="Контактный телефон" name="phone">
        <input class="tinkoffPayRow tinkoffPayRow-btn" type="submit" value="Оплатить">
    </form>

    <div class = "modalline" id = "lineMsg">
    </div>
    </div>
</div>  -->



