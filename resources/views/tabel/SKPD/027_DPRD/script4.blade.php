<script>
    function sumchairmans() {
        var chairmanElements = document.querySelectorAll('[id^="chairman"]');
        var chairmanSum = 0;
        for (var i = 0; i < chairmanElements.length; i++) {
            if (chairmanElements[i].id !== "chairmant") {
                var chairmanValue = parseFloat(chairmanElements[i].value) || 0;
                chairmanSum += chairmanValue;
            }
        }
        document.getElementById('chairmant').value = chairmanSum;
    }

    var chairmanInputs = document.querySelectorAll('[id^="chairman"]');
    for (var i = 0; i < chairmanInputs.length; i++) {
        chairmanInputs[i].addEventListener('focusout', sumchairmans);
    }
</script>
<script>
    function sumvices() {
        var viceElements = document.querySelectorAll('[id^="vice"]');
        var viceSum = 0;
        for (var i = 0; i < viceElements.length; i++) {
            if (viceElements[i].id !== "vicet") {
                var viceValue = parseFloat(viceElements[i].value) || 0;
                viceSum += viceValue;
            }
        }
        document.getElementById('vicet').value = viceSum;
    }

    var viceInputs = document.querySelectorAll('[id^="vice"]');
    for (var i = 0; i < viceInputs.length; i++) {
        viceInputs[i].addEventListener('focusout', sumvices);
    }
</script>
<script>
    function sumsecretarys() {
        var secretaryElements = document.querySelectorAll('[id^="secretary"]');
        var secretarySum = 0;
        for (var i = 0; i < secretaryElements.length; i++) {
            if (secretaryElements[i].id !== "secretaryt") {
                var secretaryValue = parseFloat(secretaryElements[i].value) || 0;
                secretarySum += secretaryValue;
            }
        }
        document.getElementById('secretaryt').value = secretarySum;
    }

    var secretaryInputs = document.querySelectorAll('[id^="secretary"]');
    for (var i = 0; i < secretaryInputs.length; i++) {
        secretaryInputs[i].addEventListener('focusout', sumsecretarys);
    }
</script>
<script>
    function sumtotals() {
        var totalEletotalts = document.querySelectorAll('[id^="total"]');
        var totalSum = 0;
        for (var i = 0; i < totalEletotalts.length; i++) {
            if (totalEletotalts[i].id !== "totalt") {
                var totalValue = parseFloat(totalEletotalts[i].value) || 0;
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
<script>
    function summembers() {
        var memberElements = document.querySelectorAll('[id^="member"]');
        var memberSum = 0;
        for (var i = 0; i < memberElements.length; i++) {
            if (memberElements[i].id !== "membert") {
                var memberValue = parseFloat(memberElements[i].value) || 0;
                memberSum += memberValue;
            }
        }
        document.getElementById('membert').value = memberSum;
    }

    var memberInputs = document.querySelectorAll('[id^="member"]');
    for (var i = 0; i < memberInputs.length; i++) {
        memberInputs[i].addEventListener('focusout', summembers);
    }
</script>
