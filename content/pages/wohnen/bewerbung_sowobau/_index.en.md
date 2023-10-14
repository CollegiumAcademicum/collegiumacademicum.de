---
title: "Application Social Rental Housing (Old Building)"
slug: "application_swb"
novoigl: yes
---

<form action="/bewerbung_sowobau/send.php" method="post" accept-charset="utf-8">
<p>We're glad you're interested in moving into our housing project!

We hope that the flats will be ready for occupancy from February 2024.
If you want to move in, you can apply here:</p>

<h3>Who are you?</h3>
<!--<div class="field">
    <label class="label" for="group_size">Wie viele seid ihr? *</label>
	<div class="control">
        <input type="number" name="group_size" value="" class="input required" required/>
    </div>
</div>-->
<!-- open as many name, pronoun, age and occupation fields as there are group members -->
<div class="field">
    <label class="label" for="full_name">Names *</label>
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
    <label class="label" for="age">Birthday *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>
<div class="field">
    <label class="label" for="email">Email address of one person in your group</label>
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

<h3>Apartment</h3>
<div class="field">
    <label class="label" for="apartment"> Which apartment are you applying for? Please select (G = Ground floor, 1 = First floor) *</label>
	<div class="control">
        <div class="select">
            <select name="apartment">
                <option>Apartment 1, G NW (three rooms)</option>
                <option>Apartment 2, G SW (three rooms)</option>
                <option>Apartment 3, G NE (four rooms)</option>
                <option>Apartment 4, G SE (three rooms)</option>
                <option>Apartment 5, 1 NW (three rooms)</option>
                <option>Apartment 6, 1 SW (three rooms)</option>
            </select>
        </div>    </div>
</div>
    <p class="help"><a href="/mietwohnraum">Here</a> is the overview (at the end of the page).</p>


<h3>Sonstiges</h3>
<div class="field">
    <label class="label" for="wer">Tell us about yourselves! Who and how many are you?
    <div class="control">
        <textarea name="wer" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="barrier_free">Do any of you need a barrier-free or wheelchair-accessible flat?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<!-- <div class="field">
    <label class="label" for="children">Gibt es in eurer Gruppe Kinder, die mit einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>-->
<div class="field">
    <label class="label" for="wohnvorstellung">How do you imagine living in CA? </label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder="" minlength="200"
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="sonstiges">Anything else you would like to add (about yourselves)?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="info">How did you find this apartment?</label>
    <div class="control">
        <textarea name="info" class="textarea" placeholder=""
            maxlength="300"></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">We would like to make sure that
    your aren't a computer: How much is 5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p>After submitting, you will receive a confirmation mail to your given address.</p>
<p>We are keeping this data only for the duration of your application, after which it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information.</p>
<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

</form>
