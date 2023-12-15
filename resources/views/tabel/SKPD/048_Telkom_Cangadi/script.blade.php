<script>
    function sumPoss() {
        var posElements = document.querySelectorAll('[id^="pos"]');
        var posSum = 0;
        for (var i = 0; i < posElements.length; i++) {
            if (posElements[i].id !== "post") {
                var posValue = parseFloat(posElements[i].value) || 0;
                posSum += posValue;
            }
        }
        document.getElementById('post').value = posSum;
    }

    var posInputs = document.querySelectorAll('[id^="pos"]');
    for (var i = 0; i < posInputs.length; i++) {
        posInputs[i].addEventListener('focusout', sumPoss);
    }
</script>
<script>
    function sumTelepons() {
        var teleponElements = document.querySelectorAll('[id^="telepon"]');
        var teleponSum = 0;
        for (var i = 0; i < teleponElements.length; i++) {
            if (teleponElements[i].id !== "telepont") {
                var teleponValue = parseFloat(teleponElements[i].value) || 0;
                teleponSum += teleponValue;
            }
        }
        document.getElementById('telepont').value = teleponSum;
    }

    var teleponInputs = document.querySelectorAll('[id^="telepon"]');
    for (var i = 0; i < teleponInputs.length; i++) {
        teleponInputs[i].addEventListener('focusout', sumTelepons);
    }
</script>
<script>
    function sumInternets() {
        var internetElements = document.querySelectorAll('[id^="internet"]');
        var internetSum = 0;
        for (var i = 0; i < internetElements.length; i++) {
            if (internetElements[i].id !== "internett") {
                var internetValue = parseFloat(internetElements[i].value) || 0;
                internetSum += internetValue;
            }
        }
        document.getElementById('internett').value = internetSum;
    }

    var internetInputs = document.querySelectorAll('[id^="internet"]');
    for (var i = 0; i < internetInputs.length; i++) {
        internetInputs[i].addEventListener('focusout', sumInternets);
    }
</script>
