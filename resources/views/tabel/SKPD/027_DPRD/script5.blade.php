<script>
    function sumjumlahs() {
        var jumlahElements = document.querySelectorAll('[id^="jumlah"]');
        var jumlahSum = 0;
        for (var i = 0; i < jumlahElements.length; i++) {
            if (jumlahElements[i].id !== "jumlaht") {
                var jumlahValue = parseFloat(jumlahElements[i].value) || 0;
                jumlahSum += jumlahValue;
            }
        }
        document.getElementById('jumlaht').value = jumlahSum;
    }

    var jumlahInputs = document.querySelectorAll('[id^="jumlah"]');
    for (var i = 0; i < jumlahInputs.length; i++) {
        jumlahInputs[i].addEventListener('focusout', sumjumlahs);
    }
</script>
