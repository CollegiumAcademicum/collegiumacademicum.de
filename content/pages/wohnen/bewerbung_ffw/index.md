---
title: "Bewerbung freifinanzierte Wohnungen (Altbau)"
slug: "bewerbung_ffw"
novoigl: yes
---
<style>
        .einzel {
            display: none;
        }

        .gruppe {
            display: none;
        }
    </style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const groupSelect = document.getElementById("groupSelect");
        groupSelect.selectedIndex=-1;
        const alleinDiv = document.getElementsByClassName("einzel");
        const groupDiv = document.getElementsByClassName("gruppe");
        const groupReq = document.getElementsByClassName("groupreq");
        const alleinReq= document.getElementsByClassName("einzrequ");
        function turnControllOn(element){
            var controlDivs=element.getElementsByTagName("input");
            Array.from(controlDivs).forEach(function(controlDiv) {
                    // Remove the old class "control"
                controlDiv.disabled=false;
                });
            var controlDivs=element.getElementsByTagName("textarea");
            Array.from(controlDivs).forEach(function(controlDiv) {
                    // Remove the old class "control"
                controlDiv.disabled=false;
                });
        };
        function turnControllOff(element){
            var controlDivs=element.getElementsByTagName("input");
            Array.from(controlDivs).forEach(function(controlDiv) {
                    // Remove the old class "control"
                controlDiv.disabled=true;
                });
            var controlDivs=element.getElementsByTagName("textarea");
            Array.from(controlDivs).forEach(function(controlDiv) {
                    // Remove the old class "control"
                controlDiv.disabled=true;
                });
        };
        groupSelect.addEventListener("change", function () {
            if (groupSelect.value === "1") {
                Array.from(alleinDiv).forEach(function(element) {
                    element.style.display = "block";
                    turnControllOn(element);
                });
                Array.from(alleinReq).forEach(function(element){
                    element.required=true;
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "none";
                    turnControllOff(element);
                });
                Array.from(groupReq).forEach(function(element){
                    element.required=false;
                })
            } else if (groupSelect.value === "2") {
                Array.from(alleinDiv).forEach(function(element) {
                    element.style.display = "none";
                    turnControllOff(element);
                });
                Array.from(alleinReq).forEach(function(element){
                    element.required=false;
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "block";
                    turnControllOn(element);
                });
                Array.from(groupReq).forEach(function(element){
                    element.required=true;
                });
            } else {
                Array.from(alleinDiv).forEach(function(element) {
                    element.style.display = "none";
                    turnControllOff(element);
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "none";
                    turnControllOff(element);
                });
                Array.from(alleinReq).forEach(function(element){
                    element.required=true;
                });
                Array.from(groupReq).forEach(function(element){
                    element.required=true;
                });
            }
        });
    });
</script>
<form action="/bewerbung_ffw/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass du Lust hast, in unser Wohnprojekt einzuziehen!

Wir hoffen, dass die Wohnungen ab dem 01.03.2024 bezugsfertig sind.
Falls du einziehen willst, kannst du dich hier dafür bewerben:</p>

<h2>Allgemein</h2>
<div class="field">
    <label class="label" for="apartment">Für welche Wohnung bewirbst du dich/bewerbt ihr euch? *</label>
	<div class="control">
        <div class="select">
            <select name="apartment">
                <option>Wohnung 1 (zwei Zimmer)</option>
                <option>Wohnung 2 (sechs Zimmer)</option>
            </select>
        </div>    </div>
</div>
<div class="field">
    <label class="label" for="group">Bewirbst du dich alleine oder als Gruppe? *</label>
    <div class="control">
        <div class="select">
            <select name="group" id="groupSelect">
                <option value="1">Alleine</option>
                <option value="2">Als Gruppe</option>
            </select>
        </div>
    </div>
</div>

<h2 class="einzel">Einzelfragen</h2>

<h3 class="einzel">Wer bist du?</h3>
<div class="field einzel">
    <label class="label" for="full_name">Name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required einzrequ" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="pronouns">Pronomen</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="email">E-Mail *</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required einzrequ email"
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
<div class="field einzel">
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required einzrequ" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>
<!--<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>-->
<div class="field einzel">
    <label class="label" for="occupation">Was ist deine hauptsächliche offizielle Tätigkeit? *</label>
    <div class="control">
        <input class="input required einzrequ" type="text" placeholder="" maxlength="200" name="occupation" required>
    </div>
    <p class="help">Bitte gib deine voraussichtliche Tätigkeit zum Zeitpunkt deines Einzugs an.</p>
</div>

<h3 class="einzel">Textfragen</h3>
<p class="einzel">Um dich und deine Einstellung zum CA kennenzulernen, haben wir hier
    vier ausführlichere Fragen. Bitte beantworte sie in je höchstens 1.000
    Zeichen.</p>
<div class="field einzel">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind dir besonders
        wichtig, welchen Punkten stehst du kritisch gegenüber?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
    <p class="help is-success">Schau dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>
<div class="field einzel">
    <label class="label" for="selbstverwaltung_experience">Hast du bereits Vorerfahrung mit Selbstverwaltung? Wenn ja, welche?</label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="selbstverwaltung_tasks">Welche Aufgaben kannst du dir in der Selbstverwaltung vorstellen?</label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="100" maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="wohnvorstellung">Wie stellst du dir das Wohnen im CA vor? (Nimm dir gerne etwas Zeit für die Antwort)</label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder="" minlength="200"
            maxlength="1000"></textarea>
    </div>
</div>

<h3 class="einzel">Sonstiges</h3>
<div class="field einzel">
    <label class="label" for="barrier_free">Bist du auf eine barrierefreie Wohnung
        angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="contacts">Bist du schon in Kontakt mit möglichen Mitbewohner*innen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="contacts" >
    </div>
    <p class="help">Die Person könnte bereits im Haus wohnen oder sich zur gleichen Zeit wie du bewerben.</p>
</div>
<div class="field einzel">
    <label class="label" for="sonstiges">Möchtest du sonst noch etwas (über dich) hinzufügen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="contact_options">Wir vermieten Wohnungen als gesamtes und nicht an Einzelpersonen. Um deine Mitbewohnis zu finden, vernetzen wir euch über die Weitergabe deiner Handynummer/Email-Adresse. Wie können deine eventuellen zukünftigen Mitbewohnis dich erreichen? Gib hier bitte eine Handynummer und/oder eine Mailadresse von dir an.</label>
    <div class="control">
        <input name="contact_options" class="input" type="text" placeholder="" maxlength="200">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="spam_protection">Um sicherzustellen, dass du kein
    Computer bist, bitten wir dich folgende Frage zu beantworten: Wie viel ist
    5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p class="einzel">Nach dem Absenden bekommst du eine Bestätigungsmail an deine angegebene E-Mail-Adresse.</p>
<p class="einzel">Mit dem Abschicken der Bewerbung stimmst du der Weitergabe dieser Kontaktdaten an andere Bewerbende zu. Wir behalten diese Daten nur für die Dauer deiner Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findest du weitere Informationen.</p>
<div class="field einzel">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

<h2 class="gruppe">Gruppenfragen</h2>

<h3 class="gruppe">Wer seid ihr?</h3>
<div class="field gruppe">
    <label class="label" for="group_size">Wie viele seid ihr? *</label>
	<div class="control">
        <input type="number" name="group_size" value="" class="input required groupreq" required/>
    </div>
</div>
<!-- open as many name, pronoun, age and occupation fields as there are group members -->
<div class="field gruppe">
    <label class="label" for="full_name">Name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required groupreq" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="pronouns">Pronomen</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="email">E-Mail (einer Person eurer Gruppe)*</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required groupreq email"
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
<!--<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>-->
<div class="field gruppe">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input groupreq required" type="text" id="age" name="age" placeholder="" required maxlength="200" />
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="occupation">Tätigkeiten? *</label>
    <div class="control">
        <input class="input groupreq" type="text" placeholder="" maxlength="800" name="occupation" required>
    </div>
</div>

<h3 class="gruppe">Textfragen</h3>
<p class="gruppe">Um euch und eure Einstellung zum CA kennenzulernen, haben wir hier
    fünf ausführlichere Fragen. Bitte beantwortet sie in je höchstens 1.000
    Zeichen.</p>
<div class="field gruppe">
    <label class="label" for="characterise">Was macht euch als Gruppe aus?</label>
    <div class="control">
        <textarea name="characterise" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind euch besonders
        wichtig, welchen Punkten steht ihr kritisch gegenüber?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
    <p class="help is-success">Schau dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>
<div class="field gruppe">
    <label class="label" for="selbstverwaltung_experience">Habt ihr bereits Vorerfahrung mit Selbstverwaltung? Wenn ja, welche?</label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="selbstverwaltung_tasks">Welche Aufgaben könnt ihr euch vorstellen, in der Selbstverwaltung des CA zu übernehmen?</label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="100" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="wohnvorstellung">Wie stellt ihr euch das Wohnen im CA vor? (Nehmt euch gerne etwas Zeit für die Antwort)</label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>

<h3 class="gruppe">Sonstiges</h3>
<div class="field gruppe">
    <label class="label" for="barrier_free">Ist eine*r von euch auf eine barrierefreie Wohnung angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="long-term">Habt ihr vor längerfristig hier zu wohnen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="long-term">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="sonstiges">Möchtet ihr sonst noch etwas (über euch) hinzufügen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="contact_options">Wir vermieten Wohnungen als gesamtes und nicht an Einzelpersonen.
    Falls ihr noch keine vollständige Gruppe seid und noch Mibewohnis sucht:
    Wie können euch andere Bewerber*innen erreichen? Gebt hier bitte von euch mindestens eine Handynummer und/oder eine Mailadresse an.</label>
    <div class="control">
        <input name="contact_options" class="input" type="text" placeholder="" maxlength="200">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="spam_protection">Um sicherzustellen, dass ihr kein
    Computer seid, bitten wir dich folgende Frage zu beantworten: Wie viel ist
    5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p class="gruppe">Nach dem Absenden bekommt ihr eine Bestätigungsmail an die angegebene E-Mail-Adresse.</p>
<p class="gruppe">Mit dem Abschicken der Bewerbung stimmt ihr der Weitergabe dieser Kontaktdaten an andere Bewerbende zu.
Wir behalten diese Daten nur für die Dauer eurer Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findet ihr weitere Informationen.</p>
<div class="field">
    <div class="control gruppe">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>


</form>
