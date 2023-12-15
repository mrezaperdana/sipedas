<script>
    function sumSedanprivates() {
        var sedanprivateElements = document.querySelectorAll('[id^="sedanprivate"]');
        var sedanprivateSum = 0;
        for (var i = 0; i < sedanprivateElements.length; i++) {
            if (sedanprivateElements[i].id !== "sedanprivatet") {
                var sedanprivateValue = parseFloat(sedanprivateElements[i].value) || 0;
                sedanprivateSum += sedanprivateValue;
            }
        }
        document.getElementById('sedanprivatet').value = sedanprivateSum;
    }

    var sedanprivateInputs = document.querySelectorAll('[id^="sedanprivate"]');
    for (var i = 0; i < sedanprivateInputs.length; i++) {
        sedanprivateInputs[i].addEventListener('focusout', sumSedanprivates);
    }
</script>
<script>
    function sumJeepprivates() {
        var jeepprivateElements = document.querySelectorAll('[id^="jeepprivate"]');
        var jeepprivateSum = 0;
        for (var i = 0; i < jeepprivateElements.length; i++) {
            if (jeepprivateElements[i].id !== "jeepprivatet") {
                var jeepprivateValue = parseFloat(jeepprivateElements[i].value) || 0;
                jeepprivateSum += jeepprivateValue;
            }
        }
        document.getElementById('jeepprivatet').value = jeepprivateSum;
    }

    var jeepprivateInputs = document.querySelectorAll('[id^="jeepprivate"]');
    for (var i = 0; i < jeepprivateInputs.length; i++) {
        jeepprivateInputs[i].addEventListener('focusout', sumJeepprivates);
    }
</script>

<script>
    function sumBusprivates() {
        var busprivateElements = document.querySelectorAll('[id^="busprivate"]');
        var busprivateSum = 0;
        for (var i = 0; i < busprivateElements.length; i++) {
            if (busprivateElements[i].id !== "busprivatet") {
                var busprivateValue = parseFloat(busprivateElements[i].value) || 0;
                busprivateSum += busprivateValue;
            }
        }
        document.getElementById('busprivatet').value = busprivateSum;
    }

    var busprivateInputs = document.querySelectorAll('[id^="busprivate"]');
    for (var i = 0; i < busprivateInputs.length; i++) {
        busprivateInputs[i].addEventListener('focusout', sumBusprivates);
    }
</script>
<script>
    function sumAmbulanceprivates() {
        var ambulanceprivateElements = document.querySelectorAll('[id^="ambulanceprivate"]');
        var ambulanceprivateSum = 0;
        for (var i = 0; i < ambulanceprivateElements.length; i++) {
            if (ambulanceprivateElements[i].id !== "ambulanceprivatet") {
                var ambulanceprivateValue = parseFloat(ambulanceprivateElements[i].value) || 0;
                ambulanceprivateSum += ambulanceprivateValue;
            }
        }
        document.getElementById('ambulanceprivatet').value = ambulanceprivateSum;
    }

    var ambulanceprivateInputs = document.querySelectorAll('[id^="ambulanceprivate"]');
    for (var i = 0; i < ambulanceprivateInputs.length; i++) {
        ambulanceprivateInputs[i].addEventListener('focusout', sumAmbulanceprivates);
    }
</script>
<script>
    function sumFire_truckprivates() {
        var fire_truckprivateElements = document.querySelectorAll('[id^="fire_truckprivate"]');
        var fire_truckprivateSum = 0;
        for (var i = 0; i < fire_truckprivateElements.length; i++) {
            if (fire_truckprivateElements[i].id !== "fire_truckprivatet") {
                var fire_truckprivateValue = parseFloat(fire_truckprivateElements[i].value) || 0;
                fire_truckprivateSum += fire_truckprivateValue;
            }
        }
        document.getElementById('fire_truckprivatet').value = fire_truckprivateSum;
    }

    var fire_truckprivateInputs = document.querySelectorAll('[id^="fire_truckprivate"]');
    for (var i = 0; i < fire_truckprivateInputs.length; i++) {
        fire_truckprivateInputs[i].addEventListener('focusout', sumFire_truckprivates);
    }
</script>
<script>
    function sumMotorprivates() {
        var motorprivateElements = document.querySelectorAll('[id^="motorprivate"]');
        var motorprivateSum = 0;
        for (var i = 0; i < motorprivateElements.length; i++) {
            if (motorprivateElements[i].id !== "motorprivatet") {
                var motorprivateValue = parseFloat(motorprivateElements[i].value) || 0;
                motorprivateSum += motorprivateValue;
            }
        }
        document.getElementById('motorprivatet').value = motorprivateSum;
    }

    var motorprivateInputs = document.querySelectorAll('[id^="motorprivate"]');
    for (var i = 0; i < motorprivateInputs.length; i++) {
        motorprivateInputs[i].addEventListener('focusout', sumMotorprivates);
    }
</script>
<script>
    function sumOjekprivates() {
        var ojekprivateElements = document.querySelectorAll('[id^="ojekprivate"]');
        var ojekprivateSum = 0;
        for (var i = 0; i < ojekprivateElements.length; i++) {
            if (ojekprivateElements[i].id !== "ojekprivatet") {
                var ojekprivateValue = parseFloat(ojekprivateElements[i].value) || 0;
                ojekprivateSum += ojekprivateValue;
            }
        }
        document.getElementById('ojekprivatet').value = ojekprivateSum;
    }

    var ojekprivateInputs = document.querySelectorAll('[id^="ojekprivate"]');
    for (var i = 0; i < ojekprivateInputs.length; i++) {
        ojekprivateInputs[i].addEventListener('focusout', sumOjekprivates);
    }
</script>
<script>
    function sumBemorprivates() {
        var bemorprivateElements = document.querySelectorAll('[id^="bemorprivate"]');
        var bemorprivateSum = 0;
        for (var i = 0; i < bemorprivateElements.length; i++) {
            if (bemorprivateElements[i].id !== "bemorprivatet") {
                var bemorprivateValue = parseFloat(bemorprivateElements[i].value) || 0;
                bemorprivateSum += bemorprivateValue;
            }
        }
        document.getElementById('bemorprivatet').value = bemorprivateSum;
    }

    var bemorprivateInputs = document.querySelectorAll('[id^="bemorprivate"]');
    for (var i = 0; i < bemorprivateInputs.length; i++) {
        bemorprivateInputs[i].addEventListener('focusout', sumBemorprivates);
    }
</script>
<script>
    function sumPedicabprivates() {
        var pedicabprivateElements = document.querySelectorAll('[id^="pedicabprivate"]');
        var pedicabprivateSum = 0;
        for (var i = 0; i < pedicabprivateElements.length; i++) {
            if (pedicabprivateElements[i].id !== "pedicabprivatet") {
                var pedicabprivateValue = parseFloat(pedicabprivateElements[i].value) || 0;
                pedicabprivateSum += pedicabprivateValue;
            }
        }
        document.getElementById('pedicabprivatet').value = pedicabprivateSum;
    }

    var pedicabprivateInputs = document.querySelectorAll('[id^="pedicabprivate"]');
    for (var i = 0; i < pedicabprivateInputs.length; i++) {
        pedicabprivateInputs[i].addEventListener('focusout', sumPedicabprivates);
    }
</script>
<script>
    function sumPickupprivates() {
        var pickupprivateElements = document.querySelectorAll('[id^="pickupprivate"]');
        var pickupprivateSum = 0;
        for (var i = 0; i < pickupprivateElements.length; i++) {
            if (pickupprivateElements[i].id !== "pickupprivatet") {
                var pickupprivateValue = parseFloat(pickupprivateElements[i].value) || 0;
                pickupprivateSum += pickupprivateValue;
            }
        }
        document.getElementById('pickupprivatet').value = pickupprivateSum;
    }

    var pickupprivateInputs = document.querySelectorAll('[id^="pickupprivate"]');
    for (var i = 0; i < pickupprivateInputs.length; i++) {
        pickupprivateInputs[i].addEventListener('focusout', sumPickupprivates);
    }
</script>

<script>
    function sumLarge_truckprivates() {
        var large_truckprivateElements = document.querySelectorAll('[id^="large_truckprivate"]');
        var large_truckprivateSum = 0;
        for (var i = 0; i < large_truckprivateElements.length; i++) {
            if (large_truckprivateElements[i].id !== "large_truckprivatet") {
                var large_truckprivateValue = parseFloat(large_truckprivateElements[i].value) || 0;
                large_truckprivateSum += large_truckprivateValue;
            }
        }
        document.getElementById('large_truckprivatet').value = large_truckprivateSum;
    }

    var large_truckprivateInputs = document.querySelectorAll('[id^="large_truckprivate"]');
    for (var i = 0; i < large_truckprivateInputs.length; i++) {
        large_truckprivateInputs[i].addEventListener('focusout', sumLarge_truckprivates);
    }
</script>
<script>
    function sumTractorprivates() {
        var tractorprivateElements = document.querySelectorAll('[id^="tractorprivate"]');
        var tractorprivateSum = 0;
        for (var i = 0; i < tractorprivateElements.length; i++) {
            if (tractorprivateElements[i].id !== "tractorprivatet") {
                var tractorprivateValue = parseFloat(tractorprivateElements[i].value) || 0;
                tractorprivateSum += tractorprivateValue;
            }
        }
        document.getElementById('tractorprivatet').value = tractorprivateSum;
    }

    var tractorprivateInputs = document.querySelectorAll('[id^="tractorprivate"]');
    for (var i = 0; i < tractorprivateInputs.length; i++) {
        tractorprivateInputs[i].addEventListener('focusout', sumTractorprivates);
    }
</script>
<script>
    function sumBikeprivates() {
        var bikeprivateElements = document.querySelectorAll('[id^="bikeprivate"]');
        var bikeprivateSum = 0;
        for (var i = 0; i < bikeprivateElements.length; i++) {
            if (bikeprivateElements[i].id !== "bikeprivatet") {
                var bikeprivateValue = parseFloat(bikeprivateElements[i].value) || 0;
                bikeprivateSum += bikeprivateValue;
            }
        }
        document.getElementById('bikeprivatet').value = bikeprivateSum;
    }

    var bikeprivateInputs = document.querySelectorAll('[id^="bikeprivate"]');
    for (var i = 0; i < bikeprivateInputs.length; i++) {
        bikeprivateInputs[i].addEventListener('focusout', sumBikeprivates);
    }
</script>

<script>
    function sumGigprivates() {
        var gigprivateElements = document.querySelectorAll('[id^="gigprivate"]');
        var gigprivateSum = 0;
        for (var i = 0; i < gigprivateElements.length; i++) {
            if (gigprivateElements[i].id !== "gigprivatet") {
                var gigprivateValue = parseFloat(gigprivateElements[i].value) || 0;
                gigprivateSum += gigprivateValue;
            }
        }
        document.getElementById('gigprivatet').value = gigprivateSum;
    }

    var gigprivateInputs = document.querySelectorAll('[id^="gigprivate"]');
    for (var i = 0; i < gigprivateInputs.length; i++) {
        gigprivateInputs[i].addEventListener('focusout', sumGigprivates);
    }
</script>
<script>
    function sumCartprivates() {
        var cartprivateElements = document.querySelectorAll('[id^="cartprivate"]');
        var cartprivateSum = 0;
        for (var i = 0; i < cartprivateElements.length; i++) {
            if (cartprivateElements[i].id !== "cartprivatet") {
                var cartprivateValue = parseFloat(cartprivateElements[i].value) || 0;
                cartprivateSum += cartprivateValue;
            }
        }
        document.getElementById('cartprivatet').value = cartprivateSum;
    }

    var cartprivateInputs = document.querySelectorAll('[id^="cartprivate"]');
    for (var i = 0; i < cartprivateInputs.length; i++) {
        cartprivateInputs[i].addEventListener('focusout', sumCartprivates);
    }
</script>
<script>
    function sumMikroletprivates() {
        var mikroletprivateElements = document.querySelectorAll('[id^="mikroletprivate"]');
        var mikroletprivateSum = 0;
        for (var i = 0; i < mikroletprivateElements.length; i++) {
            if (mikroletprivateElements[i].id !== "mikroletprivatet") {
                var mikroletprivateValue = parseFloat(mikroletprivateElements[i].value) || 0;
                mikroletprivateSum += mikroletprivateValue;
            }
        }
        document.getElementById('mikroletprivatet').value = mikroletprivateSum;
    }

    var mikroletprivateInputs = document.querySelectorAll('[id^="mikroletprivate"]');
    for (var i = 0; i < mikroletprivateInputs.length; i++) {
        mikroletprivateInputs[i].addEventListener('focusout', sumMikroletprivates);
    }
</script>

<script>
    function sumTruk_6_rodaprivates() {
        var truk_6_rodaprivateElements = document.querySelectorAll('[id^="truk_6_rodaprivate"]');
        var truk_6_rodaprivateSum = 0;
        for (var i = 0; i < truk_6_rodaprivateElements.length; i++) {
            if (truk_6_rodaprivateElements[i].id !== "truk_6_rodaprivatet") {
                var truk_6_rodaprivateValue = parseFloat(truk_6_rodaprivateElements[i].value) || 0;
                truk_6_rodaprivateSum += truk_6_rodaprivateValue;
            }
        }
        document.getElementById('truk_6_rodaprivatet').value = truk_6_rodaprivateSum;
    }

    var truk_6_rodaprivateInputs = document.querySelectorAll('[id^="truk_6_rodaprivate"]');
    for (var i = 0; i < truk_6_rodaprivateInputs.length; i++) {
        truk_6_rodaprivateInputs[i].addEventListener('focusout', sumTruk_6_rodaprivates);
    }
</script>
<script>
    function sumSedanservices() {
        var sedanserviceElements = document.querySelectorAll('[id^="sedanservice"]');
        var sedanserviceSum = 0;
        for (var i = 0; i < sedanserviceElements.length; i++) {
            if (sedanserviceElements[i].id !== "sedanservicet") {
                var sedanserviceValue = parseFloat(sedanserviceElements[i].value) || 0;
                sedanserviceSum += sedanserviceValue;
            }
        }
        document.getElementById('sedanservicet').value = sedanserviceSum;
    }

    var sedanserviceInputs = document.querySelectorAll('[id^="sedanservice"]');
    for (var i = 0; i < sedanserviceInputs.length; i++) {
        sedanserviceInputs[i].addEventListener('focusout', sumSedanservices);
    }
</script>
<script>
    function sumJeepservices() {
        var jeepserviceElements = document.querySelectorAll('[id^="jeepservice"]');
        var jeepserviceSum = 0;
        for (var i = 0; i < jeepserviceElements.length; i++) {
            if (jeepserviceElements[i].id !== "jeepservicet") {
                var jeepserviceValue = parseFloat(jeepserviceElements[i].value) || 0;
                jeepserviceSum += jeepserviceValue;
            }
        }
        document.getElementById('jeepservicet').value = jeepserviceSum;
    }

    var jeepserviceInputs = document.querySelectorAll('[id^="jeepservice"]');
    for (var i = 0; i < jeepserviceInputs.length; i++) {
        jeepserviceInputs[i].addEventListener('focusout', sumJeepservices);
    }
</script>

<script>
    function sumBusservices() {
        var busserviceElements = document.querySelectorAll('[id^="busservice"]');
        var busserviceSum = 0;
        for (var i = 0; i < busserviceElements.length; i++) {
            if (busserviceElements[i].id !== "busservicet") {
                var busserviceValue = parseFloat(busserviceElements[i].value) || 0;
                busserviceSum += busserviceValue;
            }
        }
        document.getElementById('busservicet').value = busserviceSum;
    }

    var busserviceInputs = document.querySelectorAll('[id^="busservice"]');
    for (var i = 0; i < busserviceInputs.length; i++) {
        busserviceInputs[i].addEventListener('focusout', sumBusservices);
    }
</script>
<script>
    function sumAmbulanceservices() {
        var ambulanceserviceElements = document.querySelectorAll('[id^="ambulanceservice"]');
        var ambulanceserviceSum = 0;
        for (var i = 0; i < ambulanceserviceElements.length; i++) {
            if (ambulanceserviceElements[i].id !== "ambulanceservicet") {
                var ambulanceserviceValue = parseFloat(ambulanceserviceElements[i].value) || 0;
                ambulanceserviceSum += ambulanceserviceValue;
            }
        }
        document.getElementById('ambulanceservicet').value = ambulanceserviceSum;
    }

    var ambulanceserviceInputs = document.querySelectorAll('[id^="ambulanceservice"]');
    for (var i = 0; i < ambulanceserviceInputs.length; i++) {
        ambulanceserviceInputs[i].addEventListener('focusout', sumAmbulanceservices);
    }
</script>
<script>
    function sumFire_truckservices() {
        var fire_truckserviceElements = document.querySelectorAll('[id^="fire_truckservice"]');
        var fire_truckserviceSum = 0;
        for (var i = 0; i < fire_truckserviceElements.length; i++) {
            if (fire_truckserviceElements[i].id !== "fire_truckservicet") {
                var fire_truckserviceValue = parseFloat(fire_truckserviceElements[i].value) || 0;
                fire_truckserviceSum += fire_truckserviceValue;
            }
        }
        document.getElementById('fire_truckservicet').value = fire_truckserviceSum;
    }

    var fire_truckserviceInputs = document.querySelectorAll('[id^="fire_truckservice"]');
    for (var i = 0; i < fire_truckserviceInputs.length; i++) {
        fire_truckserviceInputs[i].addEventListener('focusout', sumFire_truckservices);
    }
</script>
<script>
    function sumMotorservices() {
        var motorserviceElements = document.querySelectorAll('[id^="motorservice"]');
        var motorserviceSum = 0;
        for (var i = 0; i < motorserviceElements.length; i++) {
            if (motorserviceElements[i].id !== "motorservicet") {
                var motorserviceValue = parseFloat(motorserviceElements[i].value) || 0;
                motorserviceSum += motorserviceValue;
            }
        }
        document.getElementById('motorservicet').value = motorserviceSum;
    }

    var motorserviceInputs = document.querySelectorAll('[id^="motorservice"]');
    for (var i = 0; i < motorserviceInputs.length; i++) {
        motorserviceInputs[i].addEventListener('focusout', sumMotorservices);
    }
</script>
<script>
    function sumOjekservices() {
        var ojekserviceElements = document.querySelectorAll('[id^="ojekservice"]');
        var ojekserviceSum = 0;
        for (var i = 0; i < ojekserviceElements.length; i++) {
            if (ojekserviceElements[i].id !== "ojekservicet") {
                var ojekserviceValue = parseFloat(ojekserviceElements[i].value) || 0;
                ojekserviceSum += ojekserviceValue;
            }
        }
        document.getElementById('ojekservicet').value = ojekserviceSum;
    }

    var ojekserviceInputs = document.querySelectorAll('[id^="ojekservice"]');
    for (var i = 0; i < ojekserviceInputs.length; i++) {
        ojekserviceInputs[i].addEventListener('focusout', sumOjekservices);
    }
</script>
<script>
    function sumBemorservices() {
        var bemorserviceElements = document.querySelectorAll('[id^="bemorservice"]');
        var bemorserviceSum = 0;
        for (var i = 0; i < bemorserviceElements.length; i++) {
            if (bemorserviceElements[i].id !== "bemorservicet") {
                var bemorserviceValue = parseFloat(bemorserviceElements[i].value) || 0;
                bemorserviceSum += bemorserviceValue;
            }
        }
        document.getElementById('bemorservicet').value = bemorserviceSum;
    }

    var bemorserviceInputs = document.querySelectorAll('[id^="bemorservice"]');
    for (var i = 0; i < bemorserviceInputs.length; i++) {
        bemorserviceInputs[i].addEventListener('focusout', sumBemorservices);
    }
</script>
<script>
    function sumPedicabservices() {
        var pedicabserviceElements = document.querySelectorAll('[id^="pedicabservice"]');
        var pedicabserviceSum = 0;
        for (var i = 0; i < pedicabserviceElements.length; i++) {
            if (pedicabserviceElements[i].id !== "pedicabservicet") {
                var pedicabserviceValue = parseFloat(pedicabserviceElements[i].value) || 0;
                pedicabserviceSum += pedicabserviceValue;
            }
        }
        document.getElementById('pedicabservicet').value = pedicabserviceSum;
    }

    var pedicabserviceInputs = document.querySelectorAll('[id^="pedicabservice"]');
    for (var i = 0; i < pedicabserviceInputs.length; i++) {
        pedicabserviceInputs[i].addEventListener('focusout', sumPedicabservices);
    }
</script>
<script>
    function sumPickupservices() {
        var pickupserviceElements = document.querySelectorAll('[id^="pickupservice"]');
        var pickupserviceSum = 0;
        for (var i = 0; i < pickupserviceElements.length; i++) {
            if (pickupserviceElements[i].id !== "pickupservicet") {
                var pickupserviceValue = parseFloat(pickupserviceElements[i].value) || 0;
                pickupserviceSum += pickupserviceValue;
            }
        }
        document.getElementById('pickupservicet').value = pickupserviceSum;
    }

    var pickupserviceInputs = document.querySelectorAll('[id^="pickupservice"]');
    for (var i = 0; i < pickupserviceInputs.length; i++) {
        pickupserviceInputs[i].addEventListener('focusout', sumPickupservices);
    }
</script>

<script>
    function sumLarge_truckservices() {
        var large_truckserviceElements = document.querySelectorAll('[id^="large_truckservice"]');
        var large_truckserviceSum = 0;
        for (var i = 0; i < large_truckserviceElements.length; i++) {
            if (large_truckserviceElements[i].id !== "large_truckservicet") {
                var large_truckserviceValue = parseFloat(large_truckserviceElements[i].value) || 0;
                large_truckserviceSum += large_truckserviceValue;
            }
        }
        document.getElementById('large_truckservicet').value = large_truckserviceSum;
    }

    var large_truckserviceInputs = document.querySelectorAll('[id^="large_truckservice"]');
    for (var i = 0; i < large_truckserviceInputs.length; i++) {
        large_truckserviceInputs[i].addEventListener('focusout', sumLarge_truckservices);
    }
</script>
<script>
    function sumTractorservices() {
        var tractorserviceElements = document.querySelectorAll('[id^="tractorservice"]');
        var tractorserviceSum = 0;
        for (var i = 0; i < tractorserviceElements.length; i++) {
            if (tractorserviceElements[i].id !== "tractorservicet") {
                var tractorserviceValue = parseFloat(tractorserviceElements[i].value) || 0;
                tractorserviceSum += tractorserviceValue;
            }
        }
        document.getElementById('tractorservicet').value = tractorserviceSum;
    }

    var tractorserviceInputs = document.querySelectorAll('[id^="tractorservice"]');
    for (var i = 0; i < tractorserviceInputs.length; i++) {
        tractorserviceInputs[i].addEventListener('focusout', sumTractorservices);
    }
</script>
<script>
    function sumBikeservices() {
        var bikeserviceElements = document.querySelectorAll('[id^="bikeservice"]');
        var bikeserviceSum = 0;
        for (var i = 0; i < bikeserviceElements.length; i++) {
            if (bikeserviceElements[i].id !== "bikeservicet") {
                var bikeserviceValue = parseFloat(bikeserviceElements[i].value) || 0;
                bikeserviceSum += bikeserviceValue;
            }
        }
        document.getElementById('bikeservicet').value = bikeserviceSum;
    }

    var bikeserviceInputs = document.querySelectorAll('[id^="bikeservice"]');
    for (var i = 0; i < bikeserviceInputs.length; i++) {
        bikeserviceInputs[i].addEventListener('focusout', sumBikeservices);
    }
</script>

<script>
    function sumGigservices() {
        var gigserviceElements = document.querySelectorAll('[id^="gigservice"]');
        var gigserviceSum = 0;
        for (var i = 0; i < gigserviceElements.length; i++) {
            if (gigserviceElements[i].id !== "gigservicet") {
                var gigserviceValue = parseFloat(gigserviceElements[i].value) || 0;
                gigserviceSum += gigserviceValue;
            }
        }
        document.getElementById('gigservicet').value = gigserviceSum;
    }

    var gigserviceInputs = document.querySelectorAll('[id^="gigservice"]');
    for (var i = 0; i < gigserviceInputs.length; i++) {
        gigserviceInputs[i].addEventListener('focusout', sumGigservices);
    }
</script>
<script>
    function sumCartservices() {
        var cartserviceElements = document.querySelectorAll('[id^="cartservice"]');
        var cartserviceSum = 0;
        for (var i = 0; i < cartserviceElements.length; i++) {
            if (cartserviceElements[i].id !== "cartservicet") {
                var cartserviceValue = parseFloat(cartserviceElements[i].value) || 0;
                cartserviceSum += cartserviceValue;
            }
        }
        document.getElementById('cartservicet').value = cartserviceSum;
    }

    var cartserviceInputs = document.querySelectorAll('[id^="cartservice"]');
    for (var i = 0; i < cartserviceInputs.length; i++) {
        cartserviceInputs[i].addEventListener('focusout', sumCartservices);
    }
</script>
<script>
    function sumMikroletservices() {
        var mikroletserviceElements = document.querySelectorAll('[id^="mikroletservice"]');
        var mikroletserviceSum = 0;
        for (var i = 0; i < mikroletserviceElements.length; i++) {
            if (mikroletserviceElements[i].id !== "mikroletservicet") {
                var mikroletserviceValue = parseFloat(mikroletserviceElements[i].value) || 0;
                mikroletserviceSum += mikroletserviceValue;
            }
        }
        document.getElementById('mikroletservicet').value = mikroletserviceSum;
    }

    var mikroletserviceInputs = document.querySelectorAll('[id^="mikroletservice"]');
    for (var i = 0; i < mikroletserviceInputs.length; i++) {
        mikroletserviceInputs[i].addEventListener('focusout', sumMikroletservices);
    }
</script>

<script>
    function sumTruk_6_rodaservices() {
        var truk_6_rodaserviceElements = document.querySelectorAll('[id^="truk_6_rodaservice"]');
        var truk_6_rodaserviceSum = 0;
        for (var i = 0; i < truk_6_rodaserviceElements.length; i++) {
            if (truk_6_rodaserviceElements[i].id !== "truk_6_rodaservicet") {
                var truk_6_rodaserviceValue = parseFloat(truk_6_rodaserviceElements[i].value) || 0;
                truk_6_rodaserviceSum += truk_6_rodaserviceValue;
            }
        }
        document.getElementById('truk_6_rodaservicet').value = truk_6_rodaserviceSum;
    }

    var truk_6_rodaserviceInputs = document.querySelectorAll('[id^="truk_6_rodaservice"]');
    for (var i = 0; i < truk_6_rodaserviceInputs.length; i++) {
        truk_6_rodaserviceInputs[i].addEventListener('focusout', sumTruk_6_rodaservices);
    }
</script>
