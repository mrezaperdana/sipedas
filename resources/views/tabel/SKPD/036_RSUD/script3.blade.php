<script>
    function sumNewoutpatients() {
        var newoutpatientElements = document.querySelectorAll('[id^="newoutpatient"]');
        var newoutpatientSum = 0;
        for (var i = 0; i < newoutpatientElements.length; i++) {
            if (newoutpatientElements[i].id !== "newoutpatientt") {
                var newoutpatientValue = parseFloat(newoutpatientElements[i].value) || 0;
                newoutpatientSum += newoutpatientValue;
            }
        }
        document.getElementById('newoutpatientt').value = newoutpatientSum;
    }

    var newoutpatientInputs = document.querySelectorAll('[id^="newoutpatient"]');
    for (var i = 0; i < newoutpatientInputs.length; i++) {
        newoutpatientInputs[i].addEventListener('focusout', sumNewoutpatients);
    }
</script>
<script>
    function sumTotaloutpatients() {
        var totaloutpatientElements = document.querySelectorAll('[id^="totaloutpatient"]');
        var totaloutpatientSum = 0;
        for (var i = 0; i < totaloutpatientElements.length; i++) {
            if (totaloutpatientElements[i].id !== "totaloutpatientt") {
                var totaloutpatientValue = parseFloat(totaloutpatientElements[i].value) || 0;
                totaloutpatientSum += totaloutpatientValue;
            }
        }
        document.getElementById('totaloutpatientt').value = totaloutpatientSum;
    }

    var totaloutpatientInputs = document.querySelectorAll('[id^="totaloutpatient"]');
    for (var i = 0; i < totaloutpatientInputs.length; i++) {
        totaloutpatientInputs[i].addEventListener('focusout', sumTotaloutpatients);
    }
</script>
<script>
    function sumInpatients() {
        var inpatientElements = document.querySelectorAll('[id^="inpatient"]');
        var inpatientSum = 0;
        for (var i = 0; i < inpatientElements.length; i++) {
            if (inpatientElements[i].id !== "inpatientt") {
                var inpatientValue = parseFloat(inpatientElements[i].value) || 0;
                inpatientSum += inpatientValue;
            }
        }
        document.getElementById('inpatientt').value = inpatientSum;
    }

    var inpatientInputs = document.querySelectorAll('[id^="inpatient"]');
    for (var i = 0; i < inpatientInputs.length; i++) {
        inpatientInputs[i].addEventListener('focusout', sumInpatients);
    }
</script>
