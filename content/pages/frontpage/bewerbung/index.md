---
title: "Bewerbung"
novoigl: yes
---

<form action="/website/bewerbung/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass Du Lust hast, ins CA einzuziehen.</p>

<h2>Allgemein</h2>
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
    <label class="label" for="age">Geburtstag *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>


<h2>Textfragen</h2>

<p>Um Dich und Deine Einstellung zum CA kennenzulernen haben wir hier
    drei ausführlichere Fragen. Bitte beantworte sie in je höchstens 1.000
    Zeichen. Nur die ersten beiden Felder sind Pflichtfelder.</p>

<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind Dir besonders
        wichtig, welchen Punkten stehst Du kritisch gegenüber? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
    <p class="help is-success">Schau Dir <a href="/leitbild">Unser Leitbild</a> an.</p>
</div>

<div class="field">
    <label class="label" for="selbstverwaltung">Warum hast Du Lust auf Selbstverwaltung? *</label>
    <div class="control">
        <textarea name="selbstverwaltung" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="sonstiges">Was willst Du uns sonst noch über Dich erzählen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder="Optional"
            maxlength="1000"></textarea>
    </div>
</div>


<h2>Diversität</h2>

<p>
    Um die Vielfalt in unserem Wohnheim zu sichern haben wir uns verschiedene
    Quoten gesetzt. Bitte hilf uns, diese nicht aus dem Auge zu verlieren, indem
    Du folgende Fragen beantwortest. Wenn Du die Fragen nicht beantworten
    willst, ist das auch kein Problem.
</p>

<p>
    Hier keine Angaben zu machen wird sich <b>nicht</b> negativ auf Deine Bewerbung auswirken!
</p>

<div class="field">
    <label class="label" for="occupation">Was ist Deine hauptsächliche offizielle Tätigkeit?</label>
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
    <p class="help">Bitte gib Deine erwartete Tätigkeit zum Zeitpunkt des Einzugs 2021 an.</p>
</div>

<div class="field">
    <label class="label" for="occupation_subject">Wenn Studium oder Promotion, welche Fachrichtung? Wenn Ausbildung, für welchen Beruf?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="occupation_subject">
    </div>
    <p class="help">Falls Du unter Tätigkeit Sonstiges angegeben hast, kannst Du hier auch eine Ergänzung schreiben.</p>
</div>

<hr>

<div class="field">
    <label class="label" for="nationality">Was ist Deine Staatsangehörigkeit?</label>
    <div class="control">
        {{< nationality-form >}}
    </div>
    <p class="help">Falls Du mehere Staatsangehörigkeiten besitzt, kannst Du Dir auch gerne eine Aussuchen.</p>
</div>

<div class="field">
    <label class="label" for="gender">Wie würdest Du Deine geschlechtliche Zugehörigkeit
        bezeichnen? (Wie möchtest du angesprochen werden?)</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="gender">
    </div>
</div>

<hr>

<div class="field">
    <label class="label" for="barrier_free">Bist Du auf eine barrierefreie Wohnung
        angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>

<div class="field">
    <label class="label" for="children">Hast Du Kinder, die mit Dir einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>

<div class="field">
    <label class="label" for="contacts">Kennst Du bereits andere Leute, mit denen Du zusammenziehen
        möchtest?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="contacts">
    </div>
    <p class="help">Die Person könnte bereits im Haus wohnen oder sich zur gleichen Zeit wie Du bewerben.</p>
</div>

<hr>

<p>Nach dem Absenden bekommst Du eine Bestätigungsmail an Deine angegebene Adresse.</p>

<p>Wir behalten diese Daten nur für die Dauer Deiner Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findest Du weitere Informationen.</p>

<div class="field">
  <div class="control">
    <label class="checkbox" for="check_education_status">
      <input type="checkbox" required name="check_education_status">
        Mir ist bewusst, dass ich nur mit Ausbildungsstatus oder einem per Mail gestellten formlosen Härtefallantrag in das CA einziehen kann.
    </label>
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
