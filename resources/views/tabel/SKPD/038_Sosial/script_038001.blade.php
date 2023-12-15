<script>
    function sumPenerimarencanas() {
        var penerimarencanaElements = document.querySelectorAll('[id^="penerimarencana"]');
        var penerimarencanaSum = 0;
        for (var i = 0; i < penerimarencanaElements.length; i++) {
            if (penerimarencanaElements[i].id !== "penerimarencanat") {
                var penerimarencanaValue = parseFloat(penerimarencanaElements[i].value) || 0;
                penerimarencanaSum += penerimarencanaValue;
            }
        }
        document.getElementById('penerimarencanat').value = penerimarencanaSum;
    }

    var penerimarencanaInputs = document.querySelectorAll('[id^="penerimarencana"]');
    for (var i = 0; i < penerimarencanaInputs.length; i++) {
        penerimarencanaInputs[i].addEventListener('focusout', sumPenerimarencanas);
    }
</script>

<script>
    function sumPenerimarealisasis() {
        var penerimarealisasiElements = document.querySelectorAll('[id^="penerimarealisasi"]');
        var penerimarealisasiSum = 0;
        for (var i = 0; i < penerimarealisasiElements.length; i++) {
            if (penerimarealisasiElements[i].id !== "penerimarealisasit") {
                var penerimarealisasiValue = parseFloat(penerimarealisasiElements[i].value) || 0;
                penerimarealisasiSum += penerimarealisasiValue;
            }
        }
        document.getElementById('penerimarealisasit').value = penerimarealisasiSum;
    }

    var penerimarealisasiInputs = document.querySelectorAll('[id^="penerimarealisasi"]');
    for (var i = 0; i < penerimarealisasiInputs.length; i++) {
        penerimarealisasiInputs[i].addEventListener('focusout', sumPenerimarealisasis);
    }
</script>
<script>
    function sumAnggaranrencanas() {
        var anggaranrencanaElements = document.querySelectorAll('[id^="anggaranrencana"]');
        var anggaranrencanaSum = 0;
        for (var i = 0; i < anggaranrencanaElements.length; i++) {
            if (anggaranrencanaElements[i].id !== "anggaranrencanat") {
                var anggaranrencanaValue = parseFloat(anggaranrencanaElements[i].value) || 0;
                anggaranrencanaSum += anggaranrencanaValue;
            }
        }
        document.getElementById('anggaranrencanat').value = anggaranrencanaSum;
    }

    var anggaranrencanaInputs = document.querySelectorAll('[id^="anggaranrencana"]');
    for (var i = 0; i < anggaranrencanaInputs.length; i++) {
        anggaranrencanaInputs[i].addEventListener('focusout', sumAnggaranrencanas);
    }
</script>
<script>
    function sumAnggaranrealisasis() {
        var anggaranrealisasiElements = document.querySelectorAll('[id^="anggaranrealisasi"]');
        var anggaranrealisasiSum = 0;
        for (var i = 0; i < anggaranrealisasiElements.length; i++) {
            if (anggaranrealisasiElements[i].id !== "anggaranrealisasit") {
                var anggaranrealisasiValue = parseFloat(anggaranrealisasiElements[i].value) || 0;
                anggaranrealisasiSum += anggaranrealisasiValue;
            }
        }
        document.getElementById('anggaranrealisasit').value = anggaranrealisasiSum;
    }

    var anggaranrealisasiInputs = document.querySelectorAll('[id^="anggaranrealisasi"]');
    for (var i = 0; i < anggaranrealisasiInputs.length; i++) {
        anggaranrealisasiInputs[i].addEventListener('focusout', sumAnggaranrealisasis);
    }
</script>
