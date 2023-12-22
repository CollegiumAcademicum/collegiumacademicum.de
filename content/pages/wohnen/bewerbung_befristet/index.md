---
title: "Bewerbung befristete Zimmer (Altbau)"
slug: "bewerbung_befristet"
novoigl: yes
---

<form action="/bewerbung_befristet/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass du Lust hast, in unser Wohnprojekt einzuziehen!

Wir hoffen, dass die Wohnungen ab Frühjahr 2024 bezugsfertig sind.
Falls du für 6 Monate bei uns wohnen willst, kannst du dich hier dafür bewerben:</p>

<h3>Allgemein</h3>
<div class="field">
    <label class="label" for="full_name">Name</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="pronouns">Pronomen (sie/ihr, er/ihm, ...)</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>

<div class="field">
    <label class="label" for="age">Alter</label>
    <div class="control">
        <input class="input required" type="text" id="age" name="age" placeholder="" required maxlength="200" />
    </div>
</div>
<div class="field">
    <label class="label" for="email">E-Mail</label>
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

<div class="field">
    <label class="label" for="occupation">(Berufliche) Tätigkeiten</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="800" name="occupation" required>
    </div>
</div>

<h3>Offene Textfragen</h3>
<p>Um dich und deine Einstellung zum CA kennenzulernen, haben wir hier
zwei offene Textfragen. Bitte beantworte sie in 200 bis 1.000 Zeichen.</p>
<br>

<div class="field">
    <label class="label" for="wer">Wer bist du?</label>
    <div class="control">
        <textarea name="wer" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="leitbild">Wie stehst du zu unserem Leitbild?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200"
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
<p>Nach dem Absenden bekommst du eine Bestätigungsmail an deine angegebene E-Mail-Adresse.</p>
<p>Wir behalten diese Daten nur für die Dauer deiner Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findest du weitere Informationen.</p>
<br>
<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

</form>
