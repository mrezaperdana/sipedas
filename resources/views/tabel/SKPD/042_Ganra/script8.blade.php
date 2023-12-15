<script>
    function sumPermanents() {
        var permanentElements = document.querySelectorAll('[id^="permanent"]');
        var permanentSum = 0;
        for (var i = 0; i < permanentElements.length; i++) {
            if (permanentElements[i].id !== "permanentt") {
                var permanentValue = parseFloat(permanentElements[i].value) || 0;
                permanentSum += permanentValue;
            }
        }
        document.getElementById('permanentt').value = permanentSum;
    }

    var permanentInputs = document.querySelectorAll('[id^="permanent"]');
    for (var i = 0; i < permanentInputs.length; i++) {
        permanentInputs[i].addEventListener('focusout', sumPermanents);
    }
</script>
<script>
    function sumHealthys() {
        var healthyElements = document.querySelectorAll('[id^="healthy"]');
        var healthySum = 0;
        for (var i = 0; i < healthyElements.length; i++) {
            if (healthyElements[i].id !== "healthyt") {
                var healthyValue = parseFloat(healthyElements[i].value) || 0;
                healthySum += healthyValue;
            }
        }
        document.getElementById('healthyt').value = healthySum;
    }

    var healthyInputs = document.querySelectorAll('[id^="healthy"]');
    for (var i = 0; i < healthyInputs.length; i++) {
        healthyInputs[i].addEventListener('focusout', sumHealthys);
    }
</script>
<script>
    function sumNons() {
        var nonElements = document.querySelectorAll('[id^="non"]');
        var nonSum = 0;
        for (var i = 0; i < nonElements.length; i++) {
            if (nonElements[i].id !== "nont") {
                var nonValue = parseFloat(nonElements[i].value) || 0;
                nonSum += nonValue;
            }
        }
        document.getElementById('nont').value = nonSum;
    }

    var nonInputs = document.querySelectorAll('[id^="non"]');
    for (var i = 0; i < nonInputs.length; i++) {
        nonInputs[i].addEventListener('focusout', sumNons);
    }
</script>
