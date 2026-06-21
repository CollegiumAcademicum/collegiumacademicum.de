---
title: "Guided tours"
slug: "guided-tours"
novoigl: yes
---

<form action="/fuehrungen/send.php" method="post" accept-charset="utf-8">
<p>Would you like to visit the CA in person? Or would you like to find out what life is like at the CA?

If you answer ‘yes’ to any of these questions, you've come to the right place. We are happy to offer guided tours of the CA on request. We will explain the residential concept of the housing project, how the self-administration works and show you a flat from the inside. 
</p>

<h2>Request for a guided tour</h2>
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
    <label class="label" for="number_guests">Approximate number of people *</label>
    <div class="control">
        <input class="label" type="number" id="number_guests" name="number_guests" value="5" min="1" max="150" required/>
    </div>
</div>
<div class="field">
    <label class="label" for="age">Preferred date *</label>
    <div class="control">
        <input class="label" type="date" id="date" name="date" max="2030-12-31" required/>
    </div>
    <div class="control">
        <input class="label" type="time" id="time_start" name="time_start" value="15:00" min="00:00" max="23:59" required/>
    </div>
</div>
<div class="field">
    <label class="label" for="age">Alternative date *</label>
    <div class="control">
        <input class="label" type="date" id="date_alt" name="date_alt" max="2030-12-31" required/>
    </div>
    <div class="control">
        <input class="label" type="time" id="time_start_alt" name="time_start_alt" value="15:00" min="00:00" max="23:59" required/>
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