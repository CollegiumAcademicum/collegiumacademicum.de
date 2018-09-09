---
title: "Zimmermodell"
---

<div class="columns">
    <div class="column">
    {{< img src="uniplatz" alt="Das Zimmermodell kurz nach seiner Ankunft auf dem Uniplatz." >}}
    </div>
    <div class="column">
    {{< img src="innenleben" alt="Prototypische Innenausstattung der Kernzone eines Wohnheimzimmers" >}}
    </div>
</div>

Im Mai 2018 haben wir ein Zimmermodell in Realgröße gebaut, damit sich
die Öffentlichkeit ein Bild von unserem Projekt machen kann. Der
Prototyp zeigt eines der 176 Zimmer des Neubaus, die in 3er und 4er
WGs organisiert sind. Wir stellen unseren "Demonstrator" an
verschiedenen Orten in Heidelberg aus.

<script src='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.44.2/mapbox-gl.css' rel='stylesheet' />

<div id='ca-demonstrator-map'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY29sbGVnaXVtYWNhZGVtaWN1bSIsImEiOiJjamdwZGFreWMwMzNiMzNvZmloZWs3eHNxIn0.ClXp6n8qltuq-IO9cUnsqw';
    var map = new mapboxgl.Map({
        container: 'ca-demonstrator-map',
        center: [8.6936,49.4101],
        zoom: 13,
        bearing: 0,
        pitch: 0,
        style: 'mapbox://styles/collegiumacademicum/cjh3tor1j2nha2rp86mehjslm'
    });

    map.on("load", function () {
        var el = document.createElement('div');
        el.className = 'marker';

        new mapboxgl.Marker(el)
        .setLngLat([8.68836,49.40756])
        .setPopup(new mapboxgl.Popup({ offset: 25 })
        .setHTML('Fensterplatz: <address>Kurfürsten-Anlage 58, 69117 Heidelberg</address>'))
        .addTo(map);
    });
</script>

### Unser Dank gilt den Sponsoren des Modells

<div class="columns is-multiline">
    <div class="column is-4 is-offset-1"><a href="http://dgj.eu"><img src="/zimmermodell/sponsors/dgj.svg" /></a></div>
    <div class="column is-4 is-offset-2"><a href="https://iba.heidelberg.de/"><img src="/zimmermodell/sponsors/iba.svg" /></a></div>
    <div class="column is-4 is-offset-1"><a href="https://www.stura.uni-heidelberg.de/"><img src="/zimmermodell/sponsors/stura.svg" /></a></div>
    <div class="column is-4 is-offset-2"><a href="https://sponsort.de/home"><img src="/zimmermodell/sponsors/sponsort.svg" /></a></div>
    <div class="column is-4 is-offset-1"><a href="https://www.interpane.com/"><img src="/zimmermodell/sponsors/interpane.svg" /></a></div>
    <div class="column is-4 is-offset-2"><a href="https://www.schueco.com/web2/com"><img src="/zimmermodell/sponsors/schueco.svg" /></a></div>
    <div class="column is-4 is-offset-1"><a href="https://www.pabst-metallbau.de/"><img src="/zimmermodell/sponsors/pabst.svg" /></a></div>
    <div class="column is-4 is-offset-2"><a href="https://www.nora.com/global/en"><img src="/zimmermodell/sponsors/nora.svg" /></a></div>
    <div class="column is-4 is-offset-1"><a href="https://www.stamisol.com/"><img src="/zimmermodell/sponsors/stamisol.svg" /></a></div>
</div>
