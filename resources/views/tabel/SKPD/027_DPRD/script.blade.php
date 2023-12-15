<script>
    function summens() {
        var menElements = document.querySelectorAll('[id^="men"]');
        var menSum = 0;
        for (var i = 0; i < menElements.length; i++) {
            if (menElements[i].id !== "ment") {
                var menValue = parseFloat(menElements[i].value) || 0;
                menSum += menValue;
            }
        }
        document.getElementById('ment').value = menSum;
    }

    var menInputs = document.querySelectorAll('[id^="men"]');
    for (var i = 0; i < menInputs.length; i++) {
        menInputs[i].addEventListener('focusout', summens);
    }
</script>
<script>
    function sumwomens() {
        var womenElements = document.querySelectorAll('[id^="women"]');
        var womenSum = 0;
        for (var i = 0; i < womenElements.length; i++) {
            if (womenElements[i].id !== "woment") {
                var womenValue = parseFloat(womenElements[i].value) || 0;
                womenSum += womenValue;
            }
        }
        document.getElementById('woment').value = womenSum;
    }

    var womenInputs = document.querySelectorAll('[id^="women"]');
    for (var i = 0; i < womenInputs.length; i++) {
        womenInputs[i].addEventListener('focusout', sumwomens);
    }
</script>
<script>
    function sumtotals() {
        var totalElements = document.querySelectorAll('[id^="total"]');
        var totalSum = 0;
        for (var i = 0; i < totalElements.length; i++) {
            if (totalElements[i].id !== "totalt") {
                var totalValue = parseFloat(totalElements[i].value) || 0;
                totalSum += totalValue;
            }
        }
        document.getElementById('totalt').value = totalSum;
    }

    var totalInputs = document.querySelectorAll('[id^="total"]');
    for (var i = 0; i < totalInputs.length; i++) {
        totalInputs[i].addEventListener('focusout', sumtotals);
    }
</script>
