<script>
    function sumBpds() {
        var bpdElements = document.querySelectorAll('[id^="bpd"]');
        var bpdSum = 0;
        for (var i = 0; i < bpdElements.length; i++) {
            if (bpdElements[i].id !== "bpdt") {
                var bpdValue = parseFloat(bpdElements[i].value) || 0;
                bpdSum += bpdValue;
            }
        }
        document.getElementById('bpdt').value = bpdSum;
    }

    var bpdInputs = document.querySelectorAll('[id^="bpd"]');
    for (var i = 0; i < bpdInputs.length; i++) {
        bpdInputs[i].addEventListener('focusout', sumBpds);
    }
</script>
<script>
    function sumYouths() {
        var youthElements = document.querySelectorAll('[id^="youth"]');
        var youthSum = 0;
        for (var i = 0; i < youthElements.length; i++) {
            if (youthElements[i].id !== "youtht") {
                var youthValue = parseFloat(youthElements[i].value) || 0;
                youthSum += youthValue;
            }
        }
        document.getElementById('youtht').value = youthSum;
    }

    var youthInputs = document.querySelectorAll('[id^="youth"]');
    for (var i = 0; i < youthInputs.length; i++) {
        youthInputs[i].addEventListener('focusout', sumYouths);
    }
</script>
<script>
    function sumP3as() {
        var p3aElements = document.querySelectorAll('[id^="p3a"]');
        var p3aSum = 0;
        for (var i = 0; i < p3aElements.length; i++) {
            if (p3aElements[i].id !== "p3at") {
                var p3aValue = parseFloat(p3aElements[i].value) || 0;
                p3aSum += p3aValue;
            }
        }
        document.getElementById('p3at').value = p3aSum;
    }

    var p3aInputs = document.querySelectorAll('[id^="p3a"]');
    for (var i = 0; i < p3aInputs.length; i++) {
        p3aInputs[i].addEventListener('focusout', sumP3as);
    }
</script>
