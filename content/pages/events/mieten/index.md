---
title: "Räume mieten"
slug: "mieten"
---


<h2>Aula</h2>

<p style="text-align: justify">
Die Aula ist der Gemeinschaftsraum und damit quasi das Wohnzimmer der Bewohner:innen des selbstverwalteten Wohnheims Collegium Academicum. Der 330qm große Raum gliedert sich in das große Gebäude des innovativen Holz-Neubaus ein und wird von der Projektgruppe für verschiedene Arbeitstreffen, das wöchentliche Plenum, sowie weitere gemeinsame interne Veranstaltungen genutzt. Mit ihren 330 Sitzplätzen und 660 Stehplätzen steht die Aula aber auch externen Personen, Gruppen und Vereinen für regelmäßige Treffen oder öffentliche Veranstaltungen zur Verfügung. Die Aula bietet zahlreiche Nutzungsmöglichkeiten und ist individuell, je nach Veranstaltungsart adaptierbar. Sie kann nach Rücksprache mit der AG Raum (der zuständigen Arbeitsgemeinschaft für die Verwaltung der Aula) gebucht und angemietet werden. 
</p>

<div class="columns">
    <div class="column" style="text-align:justify">
        {{< img src="Platzhalter_16-9.png" alt="Platzhalter" attr="CA" />}}
    </div>
    <div class="column" style="text-align:left">
        <h3>Eckdaten</h3>
            <ul>
                <li>
                    Fläche: 330 m<sup>2</sup>
                </li>
                <li>
                    Kapazität: 660 Personen
                </li>
                <li>
                    Ausstattung: Bühne, Licht- und Tontechnik, Bar, etc.?
                    noch was zum Multifunktionsraum/zur Trennwand
                </li>
            </ul>
    </div>
    </div>


<h2>Seminarraum</h2>

Einleitender Text zum Seminarraum (Lage, für welche Art Veranstaltungen, etc.)

<div class="columns">
    <div class="column" style="text-align:justify">
        {{< img src="Platzhalter_16-9.png" alt="Platzhalter" attr="CA" />}}
    </div>
    <div class="column">
        <h3>Eckdaten</h3>
            <ul>
                <li>
                    Fläche: 80 m<sup>2</sup>
                </li>
                <li>
                    Ausstattung: xyz
                </li>
            </ul>
        </div>
    </div>



<h2>Kontakt</h2>

Ihr wollt einen unserer Räume mieten? 
Schreibt uns an <a href="mailto:aula@collegiumacademicum.de">aula@collegiumacademicum.de</a> oder nutzt das untenstehende Kontakformular. Ihr findet uns außerdem auf <a href="https://www.instagram.com/collegiumacademicum/">
        <span class="icon">
            <i class="icon-instagram"></i>
        </span>
        <span>Instagram</span>
   </a>.

<!--
<p style="text-align:left">
<a href="https://www.instagram.com/collegiumacademicum/">
        <span class="icon">
            <i class="icon-instagram"></i>
        </span>
        <span>Instagram</span>
   </a>

<a href="mailto:aula@collegiumacademicum.de">
        <span class="icon">
            <i class="icon-mail-alt"></i>
        </span>
        <span>Mail</span>
   </a>
   </p>
</p>

<p style="text-align:center">
<a href="https://www.instagram.com/collegiumacademicum/">
        <span class="icon">
            <i class="icon-instagram"></i>
        </span>
        <span>Instagram</span>
   </a>

<a href="mailto:aula@collegiumacademicum.de">
        <span class="icon">
            <i class="icon-mail-alt"></i>
        </span>
        <span>Mail</span>
   </a>
   </p>
</p>
-->
<div class="buttons is-centered">
    <a href="mailto:aula@collegiumacademicum.de" class="button is-medium is-primary">
        <span class="icon">
            <i class="icon-mail-alt"></i>
        </span>
        <span>Mail</span>
    </a>
    <a href="https://www.instagram.com/collegiumacademicum/" class="button is-medium is-primary">
        <span class="icon">
            <i class="icon-instagram"></i>
        </span>
        <span>Instagram</span>
    </a>
</div>

<!-- Kontaktformular -->
<form action="/mieten/send.php" method="post" accept-charset="utf-8">
<div class="field">
    <label class="label" for="full_name">Name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>

<div class="field">
    <label class="label" for="email">E-Mail *</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required email"
            id="email" size="55" required/>
        <span class="icon is-small is-left">
            <i class="icon-mail-alt"></i>
        </span>
    </div>
</div>

<div class="field">
    <label class="label" for="phone">Telefonnummer *</label>
    <div class="control has-icons-left">
        <input type="phone" name="phone" value="" class="input required"
            id="phone" size="55" required/>
        <span class="icon is-small is-left">
            <i class="icon-phone"></i>
        </span>
    </div>
</div>

<div class="field">
    <label class="label" for="event">Titel der Veranstaltung</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="event">
    </div>
</div>

<div class="field">
    <label class="label" for="age">Veranstaltungsdatum</label>
    <div class="control">
        <input class="label" type="date" id="date" name="date" value="2024-10-01" min="2024-06-01" max="2026-12-31" />
    </div>
</div>

<div class="field">
    <label class="label" for="number_guests">Ungefähre Personenanzahl</label>
    <div class="control">
        <input class="label" type="number" id="number_guests" name="number_guests" value="25" min="5" max="660" />
    </div>
</div>

<div class="field">
    <label class="label" for="freetext">Deine Nachricht an uns</label>
    <div class="control">
        <textarea class="input" type="textarea" placeholder="Optional" maxlength="1000" name="freetext"></textarea>
    </div>
</div>
<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>
</form>