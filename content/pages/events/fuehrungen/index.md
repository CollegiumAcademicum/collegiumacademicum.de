---
title: "Führungen"
slug: "fuehrungen"
novoigl: yes
---

<form action="/fuehrungen/send.php" method="post" accept-charset="utf-8">
<p>Irgendein netter einleitender Text ...
<br>
Die nächste Führung ist am DD.MM.YYYY</p>

<h2>Anmeldung zur nächsten Führung</h2>
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
    <label class="label" for="fromWhere">Woher kennen Sie das CA?</label>
    <div class="control">
        <div class="select">
            <select name="fromWhere">
                <option>Keine Angabe</option>>
                <option>Website</option>
                <option>Instagram</option>
                <option>Zeitung</option>
                <option>Fernsehen</option>
                <option>Von Menschen, die dort wohnen</option>
                <option>Sonstiges</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label class="label" for="interest">Weshalb möchten Sie an einer Führung teilzunehmen?</label>
    <div class="control">
        <div class="select">
            <select name="interest">
                <option>Keine Angabe</option>>
                <option>Ich habe Interesse an Selbstverwaltung</option>
                <option>Ich habe Interesse an ökologischem Bauen und Wohnen</option>
                <option>Ich möchte eventuell selbst einziehen</option>
                <option>Ich möchte eventuell in das CA investieren als nachhaltige Geldanlage</option>
                <option>Sonstiges</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">Um sicherzustellen, dass Sie kein
    Computer sind, bitten wir Sie, folgende Frage zu beantworten: Wieviel ist
    2 + 7? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<p>Nach dem Absenden bekommen Sie eine Bestätigungsmail an Ihre angegebene E-Mail-Adresse.</p>
<p>Wir behalten diese Daten nur bis zum Tag der Führung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> finden Sie weitere Informationen.</p>

<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

</form>