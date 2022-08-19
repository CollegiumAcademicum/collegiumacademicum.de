---
title: "Application"
novoigl: yes
---

<form action="/website/bewerbung/interested.php" method="post" accept-charset="utf-8">
<p>Awesome that you are interested in moving into the CA!</p>

We currently have no places available.
You can leave us your email address here so that we can notify you, as soon as we start accepting applications again.

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
    <label class="label" for="mail">Please do not enter your email address here.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div>
</div>

<div class="field">
    <label class="label" for="spam_protection">We would like to make sure that
    your aren't a computer: How much is 5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>

<p>After submitting, you will receive a confirmation mail to your given address.</p>

<p>We are keeping this data only for the duration of your application, after which it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information.</p>

<div class="field">
  <div class="control">
    <label class="checkbox" for="check_education_status">
      <input type="checkbox" required name="check_education_status">
        I am aware that I can only move into the CA with a proven educational status or by previously sending a separate hardship application via mail.
    </label>
  </div>
</div>

<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="en">
        <input type="submit" name="submit" value="Submit" class="button is-link" id="submit">
    </div>
</div>

</form>
