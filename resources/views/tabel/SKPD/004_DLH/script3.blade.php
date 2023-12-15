<script>
    function sumBackwards() {
        var backwardElements = document.querySelectorAll('[id^="backward"]');
        var backwardSum = 0;
        for (var i = 0; i < backwardElements.length; i++) {
            if (backwardElements[i].id !== "backwardt") {
                var backwardValue = parseFloat(backwardElements[i].value) || 0;
                backwardSum += backwardValue;
            }
        }
        document.getElementById('backwardt').value = backwardSum;
    }

    var backwardInputs = document.querySelectorAll('[id^="backward"]');
    for (var i = 0; i < backwardInputs.length; i++) {
        backwardInputs[i].addEventListener('focusout', sumBackwards);
    }
</script>
<script>
    function sumDevelopings() {
        var developingElements = document.querySelectorAll('[id^="developing"]');
        var developingSum = 0;
        for (var i = 0; i < developingElements.length; i++) {
            if (developingElements[i].id !== "developingt") {
                var developingValue = parseFloat(developingElements[i].value) || 0;
                developingSum += developingValue;
            }
        }
        document.getElementById('developingt').value = developingSum;
    }

    var developingInputs = document.querySelectorAll('[id^="developing"]');
    for (var i = 0; i < developingInputs.length; i++) {
        developingInputs[i].addEventListener('focusout', sumDevelopings);
    }
</script>
<script>
    function sumDevelopeds() {
        var developedElements = document.querySelectorAll('[id^="developed"]');
        var developedSum = 0;
        for (var i = 0; i < developedElements.length; i++) {
            if (developedElements[i].id !== "developedt") {
                var developedValue = parseFloat(developedElements[i].value) || 0;
                developedSum += developedValue;
            }
        }
        document.getElementById('developedt').value = developedSum;
    }

    var developedInputs = document.querySelectorAll('[id^="developed"]');
    for (var i = 0; i < developedInputs.length; i++) {
        developedInputs[i].addEventListener('focusout', sumDevelopeds);
    }
</script>
