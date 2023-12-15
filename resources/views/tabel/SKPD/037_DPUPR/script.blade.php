<script>
    function sumStates() {
        var stateElements = document.querySelectorAll('[id^="state"]');
        var stateSum = 0;
        for (var i = 0; i < stateElements.length; i++) {
            if (stateElements[i].id !== "statet") {
                var stateValue = parseFloat(stateElements[i].value) || 0;
                stateSum += stateValue;
            }
        }
        document.getElementById('statet').value = stateSum;
    }

    var stateInputs = document.querySelectorAll('[id^="state"]');
    for (var i = 0; i < stateInputs.length; i++) {
        stateInputs[i].addEventListener('focusout', sumStates);
    }
</script>
<script>
    function sumProvinces() {
        var provinceElements = document.querySelectorAll('[id^="province"]');
        var provinceSum = 0;
        for (var i = 0; i < provinceElements.length; i++) {
            if (provinceElements[i].id !== "provincet") {
                var provinceValue = parseFloat(provinceElements[i].value) || 0;
                provinceSum += provinceValue;
            }
        }
        document.getElementById('provincet').value = provinceSum;
    }

    var provinceInputs = document.querySelectorAll('[id^="province"]');
    for (var i = 0; i < provinceInputs.length; i++) {
        provinceInputs[i].addEventListener('focusout', sumProvinces);
    }
</script>
<script>
    function sumRegencys() {
        var regencyElements = document.querySelectorAll('[id^="regency"]');
        var regencySum = 0;
        for (var i = 0; i < regencyElements.length; i++) {
            if (regencyElements[i].id !== "regencyt") {
                var regencyValue = parseFloat(regencyElements[i].value) || 0;
                regencySum += regencyValue;
            }
        }
        document.getElementById('regencyt').value = regencySum;
    }

    var regencyInputs = document.querySelectorAll('[id^="regency"]');
    for (var i = 0; i < regencyInputs.length; i++) {
        regencyInputs[i].addEventListener('focusout', sumRegencys);
    }
</script>
<script>
    function sumTotals() {
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
        totalInputs[i].addEventListener('focusout', sumTotals);
    }
</script>
