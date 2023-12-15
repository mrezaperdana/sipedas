<script>
    function sumanggotals() {
        var anggotalElements = document.querySelectorAll('[id^="anggotal"]');
        var anggotalSum = 0;
        for (var i = 0; i < anggotalElements.length; i++) {
            if (anggotalElements[i].id !== "anggotalt") {
                var anggotalValue = parseFloat(anggotalElements[i].value) || 0;
                anggotalSum += anggotalValue;
            }
        }
        document.getElementById('anggotalt').value = anggotalSum;
    }

    var anggotalInputs = document.querySelectorAll('[id^="anggotal"]');
    for (var i = 0; i < anggotalInputs.length; i++) {
        anggotalInputs[i].addEventListener('focusout', sumanggotals);
    }
</script>
<script>
    function sumanggotaps() {
        var anggotapElements = document.querySelectorAll('[id^="anggotap"]');
        var anggotapSum = 0;
        for (var i = 0; i < anggotapElements.length; i++) {
            if (anggotapElements[i].id !== "anggotapt") {
                var anggotapValue = parseFloat(anggotapElements[i].value) || 0;
                anggotapSum += anggotapValue;
            }
        }
        document.getElementById('anggotapt').value = anggotapSum;
    }

    var anggotapInputs = document.querySelectorAll('[id^="anggotap"]');
    for (var i = 0; i < anggotapInputs.length; i++) {
        anggotapInputs[i].addEventListener('focusout', sumanggotaps);
    }
</script>
<script>
    function sumanggotajumlahs() {
        var anggotajumlahElements = document.querySelectorAll('[id^="anggotajumlah"]');
        var anggotajumlahSum = 0;
        for (var i = 0; i < anggotajumlahElements.length; i++) {
            if (anggotajumlahElements[i].id !== "anggotajumlaht") {
                var anggotajumlahValue = parseFloat(anggotajumlahElements[i].value) || 0;
                anggotajumlahSum += anggotajumlahValue;
            }
        }
        document.getElementById('anggotajumlaht').value = anggotajumlahSum;
    }

    var anggotajumlahInputs = document.querySelectorAll('[id^="anggotajumlah"]');
    for (var i = 0; i < anggotajumlahInputs.length; i++) {
        anggotajumlahInputs[i].addEventListener('focusout', sumanggotajumlahs);
    }
</script>
