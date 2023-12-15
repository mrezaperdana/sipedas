<script>
    function sumHelps() {
        var helpElements = document.querySelectorAll('[id^="help"]');
        var helpSum = 0;
        for (var i = 0; i < helpElements.length; i++) {
            if (helpElements[i].id !== "helpt") {
                var helpValue = parseFloat(helpElements[i].value) || 0;
                helpSum += helpValue;
            }
        }
        document.getElementById('helpt').value = helpSum;
    }

    var helpInputs = document.querySelectorAll('[id^="help"]');
    for (var i = 0; i < helpInputs.length; i++) {
        helpInputs[i].addEventListener('focusout', sumHelps);
    }
</script>
<script>
    function sumInitiatives() {
        var initiativeElements = document.querySelectorAll('[id^="initiative"]');
        var initiativeSum = 0;
        for (var i = 0; i < initiativeElements.length; i++) {
            if (initiativeElements[i].id !== "initiativet") {
                var initiativeValue = parseFloat(initiativeElements[i].value) || 0;
                initiativeSum += initiativeValue;
            }
        }
        document.getElementById('initiativet').value = initiativeSum;
    }

    var initiativeInputs = document.querySelectorAll('[id^="initiative"]');
    for (var i = 0; i < initiativeInputs.length; i++) {
        initiativeInputs[i].addEventListener('focusout', sumInitiatives);
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
<script>
    function sumSufficiencys() {
        var sufficiencyElements = document.querySelectorAll('[id^="sufficiency"]');
        var sufficiencySum = 0;
        for (var i = 0; i < sufficiencyElements.length; i++) {
            if (sufficiencyElements[i].id !== "sufficiencyt") {
                var sufficiencyValue = parseFloat(sufficiencyElements[i].value) || 0;
                sufficiencySum += sufficiencyValue;
            }
        }
        document.getElementById('sufficiencyt').value = sufficiencySum;
    }

    var sufficiencyInputs = document.querySelectorAll('[id^="sufficiency"]');
    for (var i = 0; i < sufficiencyInputs.length; i++) {
        sufficiencyInputs[i].addEventListener('focusout', sumSufficiencys);
    }
</script>
