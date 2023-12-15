<script>
    function sumTenagamediss() {
        var tenagamedisElements = document.querySelectorAll('[id^="tenagamedis"]');
        var tenagamedisSum = 0;
        for (var i = 0; i < tenagamedisElements.length; i++) {
            if (tenagamedisElements[i].id !== "tenagamedist") {
                var tenagamedisValue = parseFloat(tenagamedisElements[i].value) || 0;
                tenagamedisSum += tenagamedisValue;
            }
        }
        document.getElementById('tenagamedist').value = tenagamedisSum;
    }

    var tenagamedisInputs = document.querySelectorAll('[id^="tenagamedis"]');
    for (var i = 0; i < tenagamedisInputs.length; i++) {
        tenagamedisInputs[i].addEventListener('focusout', sumTenagamediss);
    }
</script>
