---
title: "Guided tours"
slug: "guided-tours"
novoigl: yes
---

<form action="/fuehrungen/send.php" method="post" accept-charset="utf-8">
<p>Some test as intro
<br>
The next guided tour is on DD.MM.YYYY</p>

<h2>Registration to the next guided tour</h2>
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
    <label class="label" for="mail">Deine E-Mail-Adresse wird hier nicht abgefragt, trage bitte hier nichts ein.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div>
</div>
<div class="field">
    <label class="label" for="fromWhere">From where do you know the CA?</label>
    <div class="control">
        <div class="select">
            <select name="fromWhere">
                <option>No specification</option>
                <option>Website</option>
                <option>Instagram</option>
                <option>Newspaper</option>
                <option>Television</option>
                <option>From people who live there</option>
                <option>Other</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label class="label" for="interest">Why do you want to take part in a guided tour?</label>
    <div class="control">
        <div class="select">
            <select name="interest">
                <option>No specification</option>
                <option>I am interested in the self-administration</option>
                <option>I am interested in ecological building and living</option>
                <option>I might want to move in myself</option>
                <option>I would like to invest in the CA as a sustainable investment</option>
                <option>Other</option>
            </select>
        </div>
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">To make sure you are not a computer, we ask you to answer the following question: What is 2 + 7? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<p>After submitting, you will receive a confirmation mail to your given address.</p>
<p>We only keep this data until the day of the tour. After that, it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information.</p>

<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="en">
        <input type="submit" name="submit" value="Submit" class="button is-link" id="submit">
    </div>
</div>

</form>