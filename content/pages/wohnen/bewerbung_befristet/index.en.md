---
title: "Application temporary rooms (Old building)"
slug: "application_temporary"
novoigl: yes
---

<form action="/bewerbung_befristet/send.php" method="post" accept-charset="utf-8">
<p>We're glad you're interested in moving into our housing project!

We hope that the flats will be ready for occupancy from spring 2024.
If you would like to live with us for 6 months, you can apply here:</p>

<h3>General</h3>
<div class="field">
    <label class="label" for="full_name">Name</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="pronouns">Pronouns (she/her, he/him, ...)</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>

<div class="field">
    <label class="label" for="age">Age</label>
    <div class="control">
        <input class="input required" type="text" id="age" name="age" placeholder="" required maxlength="200" />
    </div>
</div>
<div class="field">
    <label class="label" for="email">E-mail address</label>
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
    <label class="label" for="mail">Please do not enter your email address here. </label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div>
</div>

<div class="field">
    <label class="label" for="occupation">(Occupational) activities</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="800" name="occupation" required>
    </div>
</div>

<h3>Open text questions</h3>
<p>To get to know you and your attitude towards CA, we have two open text questions. Please answer them in 200 to 1,000 characters.</p>
<div class="field">
    <label class="label" for="wer">Who are you?</label>
    <div class="control">
        <textarea name="wer" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="leitbild">What do you think about our guiding principles?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200"
            maxlength="1000"></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="spam_protection">We would like to make sure that
your aren't a computer: How much is 5 + 3?</label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<p>After submitting, you will receive a confirmation mail to your given address.</p>
<p>We are keeping this data only for the duration of your application, after which it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information.</p>
<br><div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="en">
        <input type="submit" name="submit" value="Submit" class="button is-link" id="submit">
    </div>
</div>

</form>
