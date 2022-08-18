---
title: "Bewerbung"
novoigl: yes
---
<form action="/website/bewerbung/send.php" method="post" accept-charset="utf-8">
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

</form>
