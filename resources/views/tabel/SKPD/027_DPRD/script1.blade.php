<script>
    function sumlakilakis() {
        var lakilakiElelakilakits = document.querySelectorAll('[id^="lakilaki"]');
        var lakilakiSum = 0;
        for (var i = 0; i < lakilakiElelakilakits.length; i++) {
            if (lakilakiElelakilakits[i].id !== "lakilakit") {
                var lakilakiValue = parseFloat(lakilakiElelakilakits[i].value) || 0;
                lakilakiSum += lakilakiValue;
            }
        }
        document.getElementById('lakilakit').value = lakilakiSum;
    }

    var lakilakiInputs = document.querySelectorAll('[id^="lakilaki"]');
    for (var i = 0; i < lakilakiInputs.length; i++) {
        lakilakiInputs[i].addEventListener('focusout', sumlakilakis);
    }
</script>
<script>
    function sumperempuans() {
        var perempuanElements = document.querySelectorAll('[id^="perempuan"]');
        var perempuanSum = 0;
        for (var i = 0; i < perempuanElements.length; i++) {
            if (perempuanElements[i].id !== "perempuant") {
                var perempuanValue = parseFloat(perempuanElements[i].value) || 0;
                perempuanSum += perempuanValue;
            }
        }
        document.getElementById('perempuant').value = perempuanSum;
    }

    var perempuanInputs = document.querySelectorAll('[id^="perempuan"]');
    for (var i = 0; i < perempuanInputs.length; i++) {
        perempuanInputs[i].addEventListener('focusout', sumperempuans);
    }
</script>
<script>
    function sumjumlahs() {
        var jumlahElelakilakits = document.querySelectorAll('[id^="jumlah"]');
        var jumlahSum = 0;
        for (var i = 0; i < jumlahElelakilakits.length; i++) {
            if (jumlahElelakilakits[i].id !== "jumlaht") {
                var jumlahValue = parseFloat(jumlahElelakilakits[i].value) || 0;
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
