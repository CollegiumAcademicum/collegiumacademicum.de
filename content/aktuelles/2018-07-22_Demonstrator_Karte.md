---
title: "Wo ist das Zimmermodell gerade?"
date: 2018-07-22T14:30:19+02:00
---

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
