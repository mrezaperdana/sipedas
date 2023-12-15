<script>
    function sumBlinds() {
        var blindElements = document.querySelectorAll('[id^="blind"]');
        var blindSum = 0;
        for (var i = 0; i < blindElements.length; i++) {
            if (blindElements[i].id !== "blindt") {
                var blindValue = parseFloat(blindElements[i].value) || 0;
                blindSum += blindValue;
            }
        }
        document.getElementById('blindt').value = blindSum;
    }

    var blindInputs = document.querySelectorAll('[id^="blind"]');
    for (var i = 0; i < blindInputs.length; i++) {
        blindInputs[i].addEventListener('focusout', sumBlinds);
    }
</script>
<script>
    function sumDeafs() {
        var deafElements = document.querySelectorAll('[id^="deaf"]');
        var deafSum = 0;
        for (var i = 0; i < deafElements.length; i++) {
            if (deafElements[i].id !== "deaft") {
                var deafValue = parseFloat(deafElements[i].value) || 0;
                deafSum += deafValue;
            }
        }
        document.getElementById('deaft').value = deafSum;
    }

    var deafInputs = document.querySelectorAll('[id^="deaf"]');
    for (var i = 0; i < deafInputs.length; i++) {
        deafInputs[i].addEventListener('focusout', sumDeafs);
    }
</script>
<script>
    function sumMentally_disableds() {
        var mentally_disabledElements = document.querySelectorAll('[id^="mentally_disabled"]');
        var mentally_disabledSum = 0;
        for (var i = 0; i < mentally_disabledElements.length; i++) {
            if (mentally_disabledElements[i].id !== "mentally_disabledt") {
                var mentally_disabledValue = parseFloat(mentally_disabledElements[i].value) || 0;
                mentally_disabledSum += mentally_disabledValue;
            }
        }
        document.getElementById('mentally_disabledt').value = mentally_disabledSum;
    }

    var mentally_disabledInputs = document.querySelectorAll('[id^="mentally_disabled"]');
    for (var i = 0; i < mentally_disabledInputs.length; i++) {
        mentally_disabledInputs[i].addEventListener('focusout', sumMentally_disableds);
    }
</script>

<script>
    2

    function sumDisableds() {
        var disabledElements = document.querySelectorAll('[id^="disabled"]');
        var disabledSum = 0;
        for (var i = 0; i < disabledElements.length; i++) {
            if (disabledElements[i].id !== "disabledt") {
                var disabledValue = parseFloat(disabledElements[i].value) || 0;
                disabledSum += disabledValue;
            }
        }
        document.getElementById('disabledt').value = disabledSum;
    }

    var disabledInputs = document.querySelectorAll('[id^="disabled"]');
    for (var i = 0; i < disabledInputs.length; i++) {
        disabledInputs[i].addEventListener('focusout', sumDisableds);
    }
</script>
<script>
    function sumMultiple_dissabilitys() {
        var multiple_dissabilityElements = document.querySelectorAll('[id^="multiple_dissability"]');
        var multiple_dissabilitySum = 0;
        for (var i = 0; i < multiple_dissabilityElements.length; i++) {
            if (multiple_dissabilityElements[i].id !== "multiple_dissabilityt") {
                var multiple_dissabilityValue = parseFloat(multiple_dissabilityElements[i].value) || 0;
                multiple_dissabilitySum += multiple_dissabilityValue;
            }
        }
        document.getElementById('multiple_dissabilityt').value = multiple_dissabilitySum;
    }

    var multiple_dissabilityInputs = document.querySelectorAll('[id^="multiple_dissability"]');
    for (var i = 0; i < multiple_dissabilityInputs.length; i++) {
        multiple_dissabilityInputs[i].addEventListener('focusout', sumMultiple_dissabilitys);
    }
</script>
