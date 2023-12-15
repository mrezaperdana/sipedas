<script>
    function sumPools() {
        var poolElements = document.querySelectorAll('[id^="pool"]');
        var poolSum = 0;
        for (var i = 0; i < poolElements.length; i++) {
            if (poolElements[i].id !== "poolt") {
                var poolValue = parseFloat(poolElements[i].value) || 0;
                poolSum += poolValue;
            }
        }
        document.getElementById('poolt').value = poolSum;
    }

    var poolInputs = document.querySelectorAll('[id^="pool"]');
    for (var i = 0; i < poolInputs.length; i++) {
        poolInputs[i].addEventListener('focusout', sumPools);
    }
</script>
<script>
    function sumOtherss() {
        var othersElements = document.querySelectorAll('[id^="others"]');
        var othersSum = 0;
        for (var i = 0; i < othersElements.length; i++) {
            if (othersElements[i].id !== "otherst") {
                var othersValue = parseFloat(othersElements[i].value) || 0;
                othersSum += othersValue;
            }
        }
        document.getElementById('otherst').value = othersSum;
    }

    var othersInputs = document.querySelectorAll('[id^="others"]');
    for (var i = 0; i < othersInputs.length; i++) {
        othersInputs[i].addEventListener('focusout', sumOtherss);
    }
</script>
