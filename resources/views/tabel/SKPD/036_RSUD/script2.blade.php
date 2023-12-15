<script>
    function sumOutpatients() {
        var outpatientElements = document.querySelectorAll('[id^="outpatient"]');
        var outpatientSum = 0;
        for (var i = 0; i < outpatientElements.length; i++) {
            if (outpatientElements[i].id !== "outpatientt") {
                var outpatientValue = parseFloat(outpatientElements[i].value) || 0;
                outpatientSum += outpatientValue;
            }
        }
        document.getElementById('outpatientt').value = outpatientSum;
    }

    var outpatientInputs = document.querySelectorAll('[id^="outpatient"]');
    for (var i = 0; i < outpatientInputs.length; i++) {
        outpatientInputs[i].addEventListener('focusout', sumOutpatients);
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
