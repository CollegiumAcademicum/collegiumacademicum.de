---
title: "Bewerbung Altbau (OJ)"
slug: "bewerbung_oj"
novoigl: yes
---

<form action="/bewerbung_oj/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass du Lust hast, bei uns einzuziehen!

<!-- Leider nehmen wir aktuell keine weiteren Bewerbungen entgegen. -->

Der nächstmögliche Einzugstermin ist der 1. Oktober 2025. Dafür kannst du dich ab sofort hier bewerben. Der Auswahltag findet am 23.08.2025 statt.</p> 

 <h2>Allgemein</h2>
<div class="field">
    <label class="label" for="full_name">Vor- und Nachname *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="preferred_name">Mit welchem Namen möchtest du gerne angesprochen werden?</label>
	<div class="control has-icons-left">
        <input type="text" name="preferred_name" value="" class="input" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="pronouns">Mit welchen Pronomen möchtest du gerne angesprochen werden?</label>
	<div class="control has-icons-left">
        <input type="text" name="pronouns" value="" class="input" maxlength="100" required/>
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
        <input type="text" name="phone" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-phone"></i>
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
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>

<h2>Textfragen</h2>
<p>Um dich und deine Einstellung zum CA kennenzulernen, haben wir hier
    drei ausführlichere Fragen. Bitte beantworte sie in je höchstens 1.000
    Zeichen. Nur die ersten beiden Felder sind Pflichtfelder.</p>
<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind dir besonders
        wichtig, welchen Punkten stehst du kritisch gegenüber? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
    <p class="help is-success">Schau dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung">Warum hast du Lust auf Selbstverwaltung? *</label>
    <div class="control">
        <textarea name="selbstverwaltung" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="sonstiges">Was willst du uns sonst noch über dich erzählen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder="Optional" maxlength="1000"></textarea>
    </div>
</div>

<h2>Tätigkeit und Diversität</h2>
<p>
    Um die Vielfalt in unserem Wohnheim zu sichern, haben wir uns verschiedene
    Quoten gesetzt. Bitte hilf uns, diese nicht aus dem Auge zu verlieren, indem
    du folgende Fragen beantwortest. Wenn du die Fragen nicht beantworten
    willst, ist das auch kein Problem.
</p>
<p>
    An dieser Stelle keine Angaben zu machen, wird sich <b>nicht</b> negativ auf deine Bewerbung auswirken!
</p>
<div class="field">
    <label class="label" for="occupation">Was ist deine hauptsächliche offizielle Tätigkeit?</label>
    <div class="control">
        <div class="select">
            <select name="occupation">
                <option>Keine Angabe</option>
                <option>Studium</option>
                <option>Promotion</option>
                <option>Ausbildung</option>
                <option>Sonstiges</option>
            </select>
        </div>
    </div>
    <p class="help">Bitte gib deine voraussichtliche Tätigkeit zum Zeitpunkt deines Einzugs an.</p>
</div>
<div class="field">
    <label class="label" for="occupation_subject">Wenn Studium oder Promotion, welche Fachrichtung? Wenn Ausbildung, für welchen Beruf?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="occupation_subject">
    </div>
    <p class="help">Falls du unter Tätigkeit "Sonstiges" angegeben hast, kannst du hier auch eine Ergänzung schreiben.</p>
</div>
<div class="field">
    <label class="label" for="children">Hast du Kinder, die mit dir einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>
<div class="field">
    <label class="label" for="diversity">Gibt es Diversitäts- oder Marginalisierungsmerkmale, die du mit uns teilen möchtest? </label>
    <div class="control">
        <textarea name="diversity" class="textarea" placeholder="Optional" maxlength="1000"></textarea>
    </div>
   <p class="help">Wir nutzen diese Angaben nur, um beim Auswahltag möglichst gut auf dich eingehen bzw. rücksichtsvoll agieren zu können.</p>
</div>

<h2>Zimmer</h2>
<div class="field">
    <label class="label" for="room">Bewirbst du dich auf ein Doppel- oder Einzelzimmer?</label>
    <div class="control">
        <div class="select">
            <select name="room">
                <option>Doppelzimmer</option>
                <option>Einzelzimmer</option>
                <option>Ich bin für beides offen</option>
            </select>
        </div>
    </div>
    <p class="help">Bitte beachte, dass die Doppelzimmer entsprechend günstiger sind. Genaue Informationen zu den Mietpreisen findest du unter <a href="/zimmer_altbau">Zimmer im Altbau</a>.</p>
</div>
<div class="field">
    <label class="label" for="double_room">Falls du dich (auch) auf ein Doppelzimmer bewirbst: Wäre ein geschlechtergemischtes Doppelzimmer in Ordnung für dich?</label>
    <div class="control">
        <div class="select">
            <select name="double_room">
                <option>Ja</option>
                <option>Nein</option>
            </select>
        </div>
    </div>
<div class="field">
    <label class="label" for="second_person">Bewirbst du dich zusammen mit einer anderen Person? Falls ja, gib bitte den vollen Namen dieser Person an. </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="second_person">
    </div>
	 </div>
    <p class="help">Bitte beachte, dass ihr jeweils eine separate Bewerbung einreichen müsst.</p>
</div>
</div>
<div class="field">
    <label class="label" for="budget">Was ist dein Budget für die Miete? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="budget">
    </div>
    <p class="help">Diese Angabe hilft uns, dir ein passendes Zimmer zuzuteilen. Sie ist komplett freiwillig. Wir wollen damit nicht unseren Gewinn maximieren.</p>
</div>
<div class="field">
    <label class="label" for="time">Wie lange möchtest du voraussichtlich im CA wohnen? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="time">
    </div>
</div>

<h2>Organisatorisches</h2>
<div class="field">
    <label class="label" for="already_applied">Hast du dich schon einmal für einen Platz in unserem Wohnheim beworben? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="already_applied">
    </div>
</div>
<div class="field">
<label class="label" for="activity_in_ca">Bist du oder warst du bereits im CA aktiv und falls ja, wo?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="activity_in_ca">
    </div>
    <p class="help">Falls du in diesem Feld etwas angibst, treten wir mit der angegebenen AG/Initiative in den Austausch über deine Aktivität, um einen möglichen Bonus bei deiner Bewerbung vergeben zu können. Dies kann ausschließlich positive Auswirkungen auf deine Bewerbung haben.</p>
</div>
<div class="field">
    <label class="label" for="language_application_day">Aus organisatorischen Gründen: Könntest du auch auf Englisch gut am Auswahltag teilnehmen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="language_application_day">
    </div>
</div>
<div class="field">
    <label class="label" for="knowledge_ca">Wie bist du auf das CA gekommen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="knowledge_ca">
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">Um sicherzustellen, dass du kein
    Computer bist, bitten wir dich folgende Frage zu beantworten: Wieviel ist
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
