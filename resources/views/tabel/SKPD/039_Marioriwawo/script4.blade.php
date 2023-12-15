<script>
    function sumLingkungans() {
        var lingkunganElements = document.querySelectorAll('[id^="lingkungan"]');
        var lingkunganSum = 0;
        for (var i = 0; i < lingkunganElements.length; i++) {
            if (lingkunganElements[i].id !== "lingkungant") {
                var lingkunganValue = parseFloat(lingkunganElements[i].value) || 0;
                lingkunganSum += lingkunganValue;
            }
        }
        document.getElementById('lingkungant').value = lingkunganSum;
    }

    var lingkunganInputs = document.querySelectorAll('[id^="lingkungan"]');
    for (var i = 0; i < lingkunganInputs.length; i++) {
        lingkunganInputs[i].addEventListener('focusout', sumLingkungans);
    }
</script>
<script>
    function sumDusuns() {
        var dusunElements = document.querySelectorAll('[id^="dusun"]');
        var dusunSum = 0;
        for (var i = 0; i < dusunElements.length; i++) {
            if (dusunElements[i].id !== "dusunt") {
                var dusunValue = parseFloat(dusunElements[i].value) || 0;
                dusunSum += dusunValue;
            }
        }
        document.getElementById('dusunt').value = dusunSum;
    }

    var dusunInputs = document.querySelectorAll('[id^="dusun"]');
    for (var i = 0; i < dusunInputs.length; i++) {
        dusunInputs[i].addEventListener('focusout', sumDusuns);
    }
</script>
<script>
    function sumRts() {
        var rtElements = document.querySelectorAll('[id^="rt"]');
        var rtSum = 0;
        for (var i = 0; i < rtElements.length; i++) {
            if (rtElements[i].id !== "rtt") {
                var rtValue = parseFloat(rtElements[i].value) || 0;
                rtSum += rtValue;
            }
        }
        document.getElementById('rtt').value = rtSum;
    }

    var rtInputs = document.querySelectorAll('[id^="rt"]');
    for (var i = 0; i < rtInputs.length; i++) {
        rtInputs[i].addEventListener('focusout', sumRts);
    }
</script>
<script>
    function sumRws() {
        var rwElements = document.querySelectorAll('[id^="rw"]');
        var rwSum = 0;
        for (var i = 0; i < rwElements.length; i++) {
            if (rwElements[i].id !== "rwt") {
                var rwValue = parseFloat(rwElements[i].value) || 0;
                rwSum += rwValue;
            }
        }
        document.getElementById('rwt').value = rwSum;
    }

    var rwInputs = document.querySelectorAll('[id^="rw"]');
    for (var i = 0; i < rwInputs.length; i++) {
        rwInputs[i].addEventListener('focusout', sumRws);
    }
</script>
