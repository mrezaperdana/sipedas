<script>
    function sumChilds() {
        var childElements = document.querySelectorAll('[id^="child"]');
        var childSum = 0;
        for (var i = 0; i < childElements.length; i++) {
            if (childElements[i].id !== "childt") {
                var childValue = parseFloat(childElements[i].value) || 0;
                childSum += childValue;
            }
        }
        document.getElementById('childt').value = childSum;
    }

    var childInputs = document.querySelectorAll('[id^="child"]');
    for (var i = 0; i < childInputs.length; i++) {
        childInputs[i].addEventListener('focusout', sumChilds);
    }
</script>

<script>
    function sumProtections() {
        var protectionElements = document.querySelectorAll('[id^="protection"]');
        var protectionSum = 0;
        for (var i = 0; i < protectionElements.length; i++) {
            if (protectionElements[i].id !== "protectiont") {
                var protectionValue = parseFloat(protectionElements[i].value) || 0;
                protectionSum += protectionValue;
            }
        }
        document.getElementById('protectiont').value = protectionSum;
    }

    var protectionInputs = document.querySelectorAll('[id^="protection"]');
    for (var i = 0; i < protectionInputs.length; i++) {
        protectionInputs[i].addEventListener('focusout', sumProtections);
    }
</script>
<script>
    function sumInmates() {
        var inmateElements = document.querySelectorAll('[id^="inmate"]');
        var inmateSum = 0;
        for (var i = 0; i < inmateElements.length; i++) {
            if (inmateElements[i].id !== "inmatet") {
                var inmateValue = parseFloat(inmateElements[i].value) || 0;
                inmateSum += inmateValue;
            }
        }
        document.getElementById('inmatet').value = inmateSum;
    }

    var inmateInputs = document.querySelectorAll('[id^="inmate"]');
    for (var i = 0; i < inmateInputs.length; i++) {
        inmateInputs[i].addEventListener('focusout', sumInmates);
    }
</script>
<script>
    function sumPsychos() {
        var psychoElements = document.querySelectorAll('[id^="psycho"]');
        var psychoSum = 0;
        for (var i = 0; i < psychoElements.length; i++) {
            if (psychoElements[i].id !== "psychot") {
                var psychoValue = parseFloat(psychoElements[i].value) || 0;
                psychoSum += psychoValue;
            }
        }
        document.getElementById('psychot').value = psychoSum;
    }

    var psychoInputs = document.querySelectorAll('[id^="psycho"]');
    for (var i = 0; i < psychoInputs.length; i++) {
        psychoInputs[i].addEventListener('focusout', sumPsychos);
    }
</script>
<script>
    function sumDrug_abuses() {
        var drug_abuseElements = document.querySelectorAll('[id^="drug_abuse"]');
        var drug_abuseSum = 0;
        for (var i = 0; i < drug_abuseElements.length; i++) {
            if (drug_abuseElements[i].id !== "drug_abuset") {
                var drug_abuseValue = parseFloat(drug_abuseElements[i].value) || 0;
                drug_abuseSum += drug_abuseValue;
            }
        }
        document.getElementById('drug_abuset').value = drug_abuseSum;
    }

    var drug_abuseInputs = document.querySelectorAll('[id^="drug_abuse"]');
    for (var i = 0; i < drug_abuseInputs.length; i++) {
        drug_abuseInputs[i].addEventListener('focusout', sumDrug_abuses);
    }
</script>

<script>
    function sumPoors() {
        var poorElements = document.querySelectorAll('[id^="poor"]');
        var poorSum = 0;
        for (var i = 0; i < poorElements.length; i++) {
            if (poorElements[i].id !== "poort") {
                var poorValue = parseFloat(poorElements[i].value) || 0;
                poorSum += poorValue;
            }
        }
        document.getElementById('poort').value = poorSum;
    }

    var poorInputs = document.querySelectorAll('[id^="poor"]');
    for (var i = 0; i < poorInputs.length; i++) {
        poorInputs[i].addEventListener('focusout', sumPoors);
    }
</script>

<script>
    function sumScavengers() {
        var scavengerElements = document.querySelectorAll('[id^="scavenger"]');
        var scavengerSum = 0;
        for (var i = 0; i < scavengerElements.length; i++) {
            if (scavengerElements[i].id !== "scavengert") {
                var scavengerValue = parseFloat(scavengerElements[i].value) || 0;
                scavengerSum += scavengerValue;
            }
        }
        document.getElementById('scavengert').value = scavengerSum;
    }

    var scavengerInputs = document.querySelectorAll('[id^="scavenger"]');
    for (var i = 0; i < scavengerInputs.length; i++) {
        scavengerInputs[i].addEventListener('focusout', sumScavengers);
    }
</script>

<script>
    function sumMigrants() {
        var migrantElements = document.querySelectorAll('[id^="migrant"]');
        var migrantSum = 0;
        for (var i = 0; i < migrantElements.length; i++) {
            if (migrantElements[i].id !== "migrantt") {
                var migrantValue = parseFloat(migrantElements[i].value) || 0;
                migrantSum += migrantValue;
            }
        }
        document.getElementById('migrantt').value = migrantSum;
    }

    var migrantInputs = document.querySelectorAll('[id^="migrant"]');
    for (var i = 0; i < migrantInputs.length; i++) {
        migrantInputs[i].addEventListener('focusout', sumMigrants);
    }
</script>
<script>
    function sumVulnerables() {
        var vulnerableElements = document.querySelectorAll('[id^="vulnerable"]');
        var vulnerableSum = 0;
        for (var i = 0; i < vulnerableElements.length; i++) {
            if (vulnerableElements[i].id !== "vulnerablet") {
                var vulnerableValue = parseFloat(vulnerableElements[i].value) || 0;
                vulnerableSum += vulnerableValue;
            }
        }
        document.getElementById('vulnerablet').value = vulnerableSum;
    }

    var vulnerableInputs = document.querySelectorAll('[id^="vulnerable"]');
    for (var i = 0; i < vulnerableInputs.length; i++) {
        vulnerableInputs[i].addEventListener('focusout', sumVulnerables);
    }
</script>
