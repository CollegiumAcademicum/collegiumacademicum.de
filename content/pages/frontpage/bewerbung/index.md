---
title: "Bewerbung"
novoigl: yes
---
<form action="/website/bewerbung/interested.php" method="post" accept-charset="utf-8">
<p>Schön, dass du Lust hast, ins CA einzuziehen!</p>

Wir haben derzeit keine Plätze frei.
Du kannst uns hier deine E-Mail-Adresse hinterlassen, damit wir dich benachrichtigen können,
sobald wir wieder Bewerbungen entgegennehmen.

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
<!--Schutz vor der Benutzung des Formulars mit Computern. Es ist wird nicht angezeigt.-->
<div class="field extra-field">
    <label class="label" for="mail">Deine E-Mail-Adresse wird hier nicht
    abgefragt, trage bitte hier nichts ein.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
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

<p>Nach dem Absenden bekommst du eine Bestätigungsmail an deine angegebene E-Mail-Adresse.</p>

<p>Wir behalten diese Daten nur für die Dauer deiner Bewerbung. Danach werden sie gelöscht. In unserer <a href="https://collegiumacademicum.de/datenschutz/">Datenschutzerklärung</a> findest du weitere Informationen.</p>

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
