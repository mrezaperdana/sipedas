<script>
    function sumLayaks() {
        var layakElements = document.querySelectorAll('[id^="layak"]');
        var layakSum = 0;
        for (var i = 0; i < layakElements.length; i++) {
            if (layakElements[i].id !== "layakt") {
                var layakValue = parseFloat(layakElements[i].value) || 0;
                layakSum += layakValue;
            }
        }
        document.getElementById('layakt').value = layakSum;
    }

    var layakInputs = document.querySelectorAll('[id^="layak"]');
    for (var i = 0; i < layakInputs.length; i++) {
        layakInputs[i].addEventListener('focusout', sumLayaks);
    }
</script>
<script>
    function sumTaklayaks() {
        var taklayakElements = document.querySelectorAll('[id^="taklayak"]');
        var taklayakSum = 0;
        for (var i = 0; i < taklayakElements.length; i++) {
            if (taklayakElements[i].id !== "taklayakt") {
                var taklayakValue = parseFloat(taklayakElements[i].value) || 0;
                taklayakSum += taklayakValue;
            }
        }
        document.getElementById('taklayakt').value = taklayakSum;
    }

    var taklayakInputs = document.querySelectorAll('[id^="taklayak"]');
    for (var i = 0; i < taklayakInputs.length; i++) {
        taklayakInputs[i].addEventListener('focusout', sumTaklayaks);
    }
</script>
