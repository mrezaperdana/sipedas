<script>
    function sumPengusahas() {
        var pengusahaElements = document.querySelectorAll('[id^="pengusaha"]');
        var pengusahaSum = 0;
        for (var i = 0; i < pengusahaElements.length; i++) {
            if (pengusahaElements[i].id !== "pengusahat") {
                var pengusahaValue = parseFloat(pengusahaElements[i].value) || 0;
                pengusahaSum += pengusahaValue;
            }
        }
        document.getElementById('pengusahat').value = pengusahaSum;
    }

    var pengusahaInputs = document.querySelectorAll('[id^="pengusaha"]');
    for (var i = 0; i < pengusahaInputs.length; i++) {
        pengusahaInputs[i].addEventListener('focusout', sumPengusahas);
    }
</script>
<script>
    function sumLuass() {
        var luasElements = document.querySelectorAll('[id^="luas"]');
        var luasSum = 0;
        for (var i = 0; i < luasElements.length; i++) {
            if (luasElements[i].id !== "luast") {
                var luasValue = parseFloat(luasElements[i].value) || 0;
                luasSum += luasValue;
            }
        }
        document.getElementById('luast').value = luasSum;
    }

    var luasInputs = document.querySelectorAll('[id^="luas"]');
    for (var i = 0; i < luasInputs.length; i++) {
        luasInputs[i].addEventListener('focusout', sumLuass);
    }
</script>
