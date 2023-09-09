---
title: "Bewerbung soziale Mietwohnungen (Altbau)"
slug: "bewerbung_sowobau"
novoigl: yes
---

<form action="/website/bewerbung_sowobau/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass ihr Lust hast, in unser Wohnprojekt einzuziehen!

Wir hoffen, dass die Wohnungen ab Januar 2024 bezugsfertig sind.
Falls ihr einziehen wollt, könnt ihr euch hier dafür bewerben:</p>

<div class="field">
    <label class="label" for="apartment">Für welche Wohnung bewerbt ihr euch? (EG = Erdgeschoss, 1. OG = Erstes Obergeschoss) *</label>
	<div class="control">
        <div class="select">
            <select name="apartment">
                <option>Wohnung 1 (EG)</option>
                <option>Wohnung 2 (EG)</option>
                <option>Wohnung 3 (EG)</option>
                <option>Wohnung 4 (EG)</option>
                <option>Wohnung 5 (1. OG)</option>
                <option>Wohnung 6 (1. OG)</option>
            </select>
        </div>    </div>
</div>

<h3>Wer seid ihr?</h3>
<div class="field">
    <label class="label" for="group_size">Wie viele seid ihr? *</label>
	<div class="control">
        <input type="number" name="group_size" value="" class="input required" required/>
    </div>
</div>
<!-- open as many name, pronoun, age and occupation fields as there are group members -->
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
    <label class="label" for="pronouns">Pronomen</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>
<div class="field">
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>
<div class="field">
    <label class="label" for="email">E-Mail von einer Person aus eurer Gruppe</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required email"
            id="email" size="55" required/>
        <span class="icon is-small is-left">
            <i class="icon-mail-alt"></i>
        </span>
    </div>
</div>
<!-- Schutz vor der Benutzung des Formulars mit Computern. Es ist wird nicht angezeigt. -->
<div class="field extra-field">
    <label class="label" for="mail">Deine E-Mail-Adresse wird hier nicht
    abgefragt, trage bitte hier nichts ein.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div>
</div>

<h3>Textfragen</h3>
<p>Um euch und eure Einstellung zum CA kennenzulernen, haben wir hier
    drei ausführlichere Fragen. Bitte beantwortet sie in je höchstens 1.000
    Zeichen.</p>
<div class="field">
    <label class="label" for="wer">Erzählt uns mehr über euch! Wer und wie viele seid ihr?
    <div class="control">
        <textarea name="wer" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="wohnvorstellung">Wie stellt ihr euch das Wohnen im CA vor?</label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>

<h3>Sonstiges</h3>
<div class="field">
    <label class="label" for="barrier_free">Ist eine*r von euch auf eine barrierefreie Wohnung angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field">
    <label class="label" for="children">Gibt es in eurer Gruppe Kinder, die mit einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>
<div class="field">
    <label class="label" for="sonstiges">Möchtet ihr sonst noch etwas (über euch) hinzufügen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">Um sicherzustellen, dass ihr kein
    Computer seid, bitten wir euch folgende Frage zu beantworten: Wie viel ist
    5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p>Nach dem Absenden bekommst du eine Bestätigungsmail an deine angegebene E-Mail-Adresse.</p>
<p>Wir behalten diese Daten nur für die Dauer deiner Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findest du weitere Informationen.</p>
<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

</form>
