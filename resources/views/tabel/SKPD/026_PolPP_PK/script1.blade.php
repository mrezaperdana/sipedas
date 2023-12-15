<script>
    function sumpolpps() {
        var polppElements = document.querySelectorAll('[id^="polpp"]');
        var polppSum = 0;
        for (var i = 0; i < polppElements.length; i++) {
            if (polppElements[i].id !== "polppt") {
                var polppValue = parseFloat(polppElements[i].value) || 0;
                polppSum += polppValue;
            }
        }
        document.getElementById('polppt').value = polppSum;
    }

    var polppInputs = document.querySelectorAll('[id^="polpp"]');
    for (var i = 0; i < polppInputs.length; i++) {
        polppInputs[i].addEventListener('focusout', sumpolpps);
    }
</script>
<script>
    function sumpilmass() {
        var pilmasElements = document.querySelectorAll('[id^="pilmas"]');
        var pilmasSum = 0;
        for (var i = 0; i < pilmasElements.length; i++) {
            if (pilmasElements[i].id !== "pilmast") {
                var pilmasValue = parseFloat(pilmasElements[i].value) || 0;
                pilmasSum += pilmasValue;
            }
        }
        document.getElementById('pilmast').value = pilmasSum;
    }

    var pilmasInputs = document.querySelectorAll('[id^="pilmas"]');
    for (var i = 0; i < pilmasInputs.length; i++) {
        pilmasInputs[i].addEventListener('focusout', sumpilmass);
    }
</script>
<script>
    function sumkets() {
        var ketElements = document.querySelectorAll('[id^="ket"]');
        var ketSum = 0;
        for (var i = 0; i < ketElements.length; i++) {
            if (ketElements[i].id !== "kett") {
                var ketValue = parseFloat(ketElements[i].value) || 0;
                ketSum += ketValue;
            }
        }
        document.getElementById('kett').value = ketSum;
    }

    var ketInputs = document.querySelectorAll('[id^="ket"]');
    for (var i = 0; i < ketInputs.length; i++) {
        ketInputs[i].addEventListener('focusout', sumkets);
    }
</script>
