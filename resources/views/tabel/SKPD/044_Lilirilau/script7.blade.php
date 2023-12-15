<script>
    function sumFootballs() {
        var footballElements = document.querySelectorAll('[id^="football"]');
        var footballSum = 0;
        for (var i = 0; i < footballElements.length; i++) {
            if (footballElements[i].id !== "footballt") {
                var footballValue = parseFloat(footballElements[i].value) || 0;
                footballSum += footballValue;
            }
        }
        document.getElementById('footballt').value = footballSum;
    }

    var footballInputs = document.querySelectorAll('[id^="football"]');
    for (var i = 0; i < footballInputs.length; i++) {
        footballInputs[i].addEventListener('focusout', sumFootballs);
    }
</script>
<script>
    function sumVolleys() {
        var volleyElements = document.querySelectorAll('[id^="volley"]');
        var volleySum = 0;
        for (var i = 0; i < volleyElements.length; i++) {
            if (volleyElements[i].id !== "volleyt") {
                var volleyValue = parseFloat(volleyElements[i].value) || 0;
                volleySum += volleyValue;
            }
        }
        document.getElementById('volleyt').value = volleySum;
    }

    var volleyInputs = document.querySelectorAll('[id^="volley"]');
    for (var i = 0; i < volleyInputs.length; i++) {
        volleyInputs[i].addEventListener('focusout', sumVolleys);
    }
</script>
<script>
    function sumTenniss() {
        var tennisElements = document.querySelectorAll('[id^="tennis"]');
        var tennisSum = 0;
        for (var i = 0; i < tennisElements.length; i++) {
            if (tennisElements[i].id !== "tennist") {
                var tennisValue = parseFloat(tennisElements[i].value) || 0;
                tennisSum += tennisValue;
            }
        }
        document.getElementById('tennist').value = tennisSum;
    }

    var tennisInputs = document.querySelectorAll('[id^="tennis"]');
    for (var i = 0; i < tennisInputs.length; i++) {
        tennisInputs[i].addEventListener('focusout', sumTenniss);
    }
</script>
<script>
    function sumBadmintons() {
        var badmintonElements = document.querySelectorAll('[id^="badminton"]');
        var badmintonSum = 0;
        for (var i = 0; i < badmintonElements.length; i++) {
            if (badmintonElements[i].id !== "badmintont") {
                var badmintonValue = parseFloat(badmintonElements[i].value) || 0;
                badmintonSum += badmintonValue;
            }
        }
        document.getElementById('badmintont').value = badmintonSum;
    }

    var badmintonInputs = document.querySelectorAll('[id^="badminton"]');
    for (var i = 0; i < badmintonInputs.length; i++) {
        badmintonInputs[i].addEventListener('focusout', sumBadmintons);
    }
</script>
<script>
    function sumTable_tenniss() {
        var table_tennisElements = document.querySelectorAll('[id^="table_tennis"]');
        var table_tennisSum = 0;
        for (var i = 0; i < table_tennisElements.length; i++) {
            if (table_tennisElements[i].id !== "table_tennist") {
                var table_tennisValue = parseFloat(table_tennisElements[i].value) || 0;
                table_tennisSum += table_tennisValue;
            }
        }
        document.getElementById('table_tennist').value = table_tennisSum;
    }

    var table_tennisInputs = document.querySelectorAll('[id^="table_tennis"]');
    for (var i = 0; i < table_tennisInputs.length; i++) {
        table_tennisInputs[i].addEventListener('focusout', sumTable_tenniss);
    }
</script>
<script>
    function sumBasketballs() {
        var basketballElements = document.querySelectorAll('[id^="basketball"]');
        var basketballSum = 0;
        for (var i = 0; i < basketballElements.length; i++) {
            if (basketballElements[i].id !== "basketballt") {
                var basketballValue = parseFloat(basketballElements[i].value) || 0;
                basketballSum += basketballValue;
            }
        }
        document.getElementById('basketballt').value = basketballSum;
    }

    var basketballInputs = document.querySelectorAll('[id^="basketball"]');
    for (var i = 0; i < basketballInputs.length; i++) {
        basketballInputs[i].addEventListener('focusout', sumBasketballs);
    }
</script>
