<script>
    function sumMiskins() {
        var miskinElements = document.querySelectorAll('[id^="miskin"]');
        var miskinSum = 0;
        for (var i = 0; i < miskinElements.length; i++) {
            if (miskinElements[i].id !== "miskint") {
                var miskinValue = parseFloat(miskinElements[i].value) || 0;
                miskinSum += miskinValue;
            }
        }
        document.getElementById('miskint').value = miskinSum;
    }

    var miskinInputs = document.querySelectorAll('[id^="miskin"]');
    for (var i = 0; i < miskinInputs.length; i++) {
        miskinInputs[i].addEventListener('focusout', sumMiskins);
    }
</script>
<script>
    function sumAskeskins() {
        var askeskinElements = document.querySelectorAll('[id^="askeskin"]');
        var askeskinSum = 0;
        for (var i = 0; i < askeskinElements.length; i++) {
            if (askeskinElements[i].id !== "askeskint") {
                var askeskinValue = parseFloat(askeskinElements[i].value) || 0;
                askeskinSum += askeskinValue;
            }
        }
        document.getElementById('askeskint').value = askeskinSum;
    }

    var askeskinInputs = document.querySelectorAll('[id^="askeskin"]');
    for (var i = 0; i < askeskinInputs.length; i++) {
        askeskinInputs[i].addEventListener('focusout', sumAskeskins);
    }
</script>
