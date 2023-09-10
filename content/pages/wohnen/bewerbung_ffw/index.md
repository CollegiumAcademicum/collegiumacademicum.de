---
title: "Bewerbung freifinanzierte Wohnungen (Altbau)"
slug: "bewerbung_ffw"
novoigl: yes
---

<form action="/website/bewerbung_other/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass du Lust hast, in unser Wohnprojekt einzuziehen!

Wir hoffen, dass die Wohnungen ab dem 01.01.2024 bezugsfertig sind.
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
            <select name="group">
                <option>Alleine</option>
                <option>Als Gruppe</option>
            </select>
        </div>
    </div>
</div>

<h2>Einzelfragen</h2>

<h3>Wer bist du?</h3>
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
<!--<div class="field">
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>-->
<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>
<div class="field">
    <label class="label" for="occupation">Was ist deine hauptsächliche offizielle Tätigkeit? *</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="occupation" required>
    </div>
    <p class="help">Bitte gib deine voraussichtliche Tätigkeit zum Zeitpunkt deines Einzugs an.</p>
</div>

<h3>Textfragen</h3>
<p>Um dich und deine Einstellung zum CA kennenzulernen, haben wir hier
    drei ausführlichere Fragen. Bitte beantworte sie in je höchstens 1.000
    Zeichen.</p>
<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind dir besonders
        wichtig, welchen Punkten stehst du kritisch gegenüber?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
    <p class="help is-success">Schau dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung_experience">Hast du bereits Vorerfahrung mit Selbstverwaltung? Wenn ja, welche?</label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung_tasks">Welche Aufgaben kannst du dir in der Selbstverwaltung vorstellen?</label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="wohnvorstellung">Wie stellst du dir das Wohnen im CA vor? (Nimm dir gerne etwas Zeit für die Antwort)</label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>

<h3>Sonstiges</h3>
<div class="field">
    <label class="label" for="barrier_free">Bist du auf eine barrierefreie Wohnung
        angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field">
    <label class="label" for="children">Hast du Kinder, die mit dir einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>
<div class="field">
    <label class="label" for="contacts">Bist du schon in Kontakt mit möglichen Mitbewohner*innen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="wohnvorstellung">
    </div>
    <p class="help">Die Person könnte bereits im Haus wohnen oder sich zur gleichen Zeit wie du bewerben.</p>
</div>
<div class="field">
    <label class="label" for="sonstiges">Möchtest du sonst noch etwas (über dich) hinzufügen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">Um sicherzustellen, dass du kein
    Computer bist, bitten wir dich folgende Frage zu beantworten: Wie viel ist
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

<h2>Gruppenfragen</h2>

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
<!--<div class="field">
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>-->
<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>
<div class="field">
    <label class="label" for="occupation">Tätigkeit? *</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="occupation" required>
    </div>
</div>

<h3>Textfragen</h3>
<p>Um euch und eure Einstellung zum CA kennenzulernen, haben wir hier
    drei ausführlichere Fragen. Bitte beantwortet sie in je höchstens 1.000
    Zeichen.</p>
<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind euch besonders
        wichtig, welchen Punkten steht ihr kritisch gegenüber?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
    <p class="help is-success">Schau dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung_experience">Habt ihr bereits Vorerfahrung mit Selbstverwaltung? Wenn ja, welche?</label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung_tasks">Welche Aufgaben könnt ihr euch vorstellen, in der Selbstverwaltung des CA zu übernehmen?</label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="300" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="wohnvorstellung">Wie stellt ihr euch das Wohnen im CA vor? (Nehmt euch gerne etwas Zeit für die Antwort)</label>
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
    <label class="label" for="contacts">Habt ihr vor längerfristig hier zu wohnen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="wohnvorstellung">
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
    <label class="label" for="spam_protection">Um sicherzustellen, dass du kein
    Computer bist, bitten wir dich folgende Frage zu beantworten: Wie viel ist
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
