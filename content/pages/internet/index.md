---
title: "Internet"
novoigl: yes
slug: "Internet"
---

# Einrichtung der WLANS

Auf dieser Seite erklären wir dir, wie du dich im WLAN einloggen kannst.   
Zunächst benötigst du deine persönlichen Zugangsdaten. Diese kannst du bei der AG-IT erhalten.

## Android

1. Lade das [Zertifikat](ca.crt) herunter.
2. Öffne es mit dem Zertifkatsmanager
3. (Optional) Namen vergeben und als Nutzung der Zugangsdaten WLAN angeben
4. Mit dem WLAN "CA" verbinden und auf erweiterte Optionen gehen:
    - EAP-Methode: TTLS
    - Phase2-Authentifizierung: PAP
    - CA-Zertifikat: das Zertifikat aus Schritt 2 auswählen
    - Identität: (erhälst du bei der AG IT oder mit Einzugsunterlagen)
    - Passwort: (erhälst du bei der AG IT oder mit Einzugunterlagen)
    - Verbinden klicken

## iOS

1. Lade das [Zertifikat](ca.crt) herunter.
2. TBC

## Windows

1. Lade das [Zertifikat](ca.crt) herunter.
2. Doppelklick auf das Zertifikat
    - Installiere Zertifikat
    - nur für Benutzer installieren
    - Speicherort automatisch wählen
    - Fertig stellen
3. Mit dem WLAN "CA" verbinden und auf erweiterte Optionen gehen:
    - EAP-Methode: TTLS
    - Phase2-Authentifizierung: PAP
    - CA-Zertifikat: das Zertifikat aus Schritt 2 auswählen
    - Identität: (erhälst du bei der AG IT oder mit Einzugsunterlagen)
    - Passwort: (erhälst du bei der AG IT oder mit Einzugunterlagen)
    - Verbinden klicken


## MacOS

1. Lade das [Zertifikat](ca.crt) herunter.
2. TBC

## Linux

1. Lade das [Zertifikat](ca.crt) herunter.
2. Kopiere das Zertifkat nach `/etc/ca-certificates/trust-source/anchors`
3. Mit dem WLAN "CA" verbinden und auf erweiterte Optionen gehen:
    - EAP-Methode: TTLS
    - Phase2-Authentifizierung: PAP
    - CA-Zertifikat: das Zertifikat aus Schritt 2 auswählen
    - Identität: (erhälst du bei der AG IT oder mit Einzugsunterlagen)
    - Passwort: (erhälst du bei der AG IT oder mit Einzugunterlagen)
    - Verbinden klicken

