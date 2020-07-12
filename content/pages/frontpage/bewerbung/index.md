---
title: "Bewerbung"
---

<form action="/website/bewerbung/send.php" method="post" accept-charset="utf-8">
<p>Schön, dass Du Lust hast, ins CA einzuziehen</p>

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


<h2>Textfragen</h2>

<p>Um Dich und deine Einstellung zum CA kennenzulernen haben wir hier noch
    drei ausführlichere Fragen. Bitte beantworte sie in höchstens 1.000
    Zeichen. Die ersten beiden Felder sind Pflichtfelder.</p>

<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind dir besonders
        wichtig, welchen Punkten stehst du kritisch gegenüber? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" maxlength="1000" required></textarea>
    </div>
    <p class="help is-success">Unser Leitbild findest Du <a href="/leitbild">hier</a>.</p>
</div>

<div class="field">
    <label class="label" for="selbstverwaltung">Warum hast Du Lust auf Selbstverwaltung? *</label>
    <div class="control">
        <textarea name="selbstverwaltung" class="textarea" placeholder="Pflichtfeld" maxlength="1000" required></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="sonstiges">Was sollten wir sonst noch über Dich wissen?</label>
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
    Hier keine Angaben zu machen wird sich <b>nicht</b> negativ auf deine Bewerbung auswirken!
</p>

<div class="field">
    <label class="label" for="occupation">Was is Deine offizielle Tätigkeit?</label>
    <div class="control">
        <div class="select">
            <select name="occupation">
                <option>Studium</option>
                <option>Promotion</option>
                <option>Ausbildung</option>
                <option>Sonstiges</option>
            </select>
        </div>
    </div>
    <p class="help">Bitte gib deine erwartete Tätigkeit zum Zeitpunkt des Einzugs 2021 an.</p>
</div>

<div class="field">
    <label class="label" for="occupation_subject">Wenn Studium oder Promotion, welche Fachrichtung? Wenn
        Ausbildung, für welchen Beruf?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="occupation_subject">
    </div>
    <p class="help">Falls Du unter Tätigkeit Sonstiges angegeben hast, kannst du hier auch eine Ergänzung schreiben.</p>
</div>

<hr>

<div class="field">
    <label class="label" for="nationality">Was ist Deine Staatszugehörigkeit?</label>
    <div class="control">
        {{< nationality-form >}}
    </div>
</div>

<div class="field">
    <label class="label" for="gender">Wie würdest du Deine geschlechtliche Zugehörigkeit
        bezeichnen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="gender">
    </div>
</div>

<!-- <div class="field">
    <label class="label">Fühlst Du Dich Gruppen zugehörig oder wirst zu Gruppen
        zugeordnet, die Diskriminierung ausgesetzt oder anderweitig strukturell
        benachteiligt sind? Wenn ja, welchen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div> -->

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
</div>

<hr>

<p>Nach dem Absenden bekommst Du eine Bestätigungsmail an Deine angegebene Adresse.</p>

<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Submit" class="button is-link" id="submit">
    </div>
</div>

</form>
