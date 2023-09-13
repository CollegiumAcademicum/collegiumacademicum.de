---
title: "Application flats (old building)"
slug: "application_ffw"
novoigl: yes
---
<style>
        .einzel {
            display: none;
        }

        .gruppe {
            display: none;
        }
    </style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const groupSelect = document.getElementById("groupSelect");
        groupSelect.selectedIndex=-1;
        const alleinDiv = document.getElementsByClassName("einzel");
        const groupDiv = document.getElementsByClassName("gruppe");

        groupSelect.addEventListener("change", function () {
            if (groupSelect.value === "1") {
                console.log(1)
                Array.from(alleinDiv).forEach(function(element) {
                element.style.display = "block";
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "none";
                });
            } else if (groupSelect.value === "2") {
                console.log(2)
                Array.from(alleinDiv).forEach(function(element) {
                element.style.display = "none";
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "block";
                });
            } else {
                Array.from(alleinDiv).forEach(function(element) {
                element.style.display = "none";
                });
                Array.from(groupDiv).forEach(function(element){
                    element.style.display = "none";
                });
            }
        });
    });
</script>
<form action="/bewerbung_ffw/send.php" method="post" accept-charset="utf-8">
<p>
We're glad you're interested in moving into our housing project!

We hope that the flats will be ready for occupancy from January 2024.
If you want to move in, you can apply here:</p>

<h2>Allgemein</h2>
<div class="field">
    <label class="label" for="apartment">For which apartment are you applying? *</label>
	<div class="control">
        <div class="select">
            <select name="apartment">
                <option>Apartment 1 (two rooms)</option>
                <option>Apartment 2 (six rooms)</option>
            </select>
        </div>    </div>
</div>
<div class="field">
    <label class="label" for="group">Are you applying alone or as a group? *</label>
    <div class="control">
        <div class="select">
            <select name="group" id="groupSelect">
                <option value="1">Alone</option>
                <option value="2">As a group</option>
            </select>
        </div>
    </div>
</div>

<h2 class="einzel">Individual questions</h2>

<h3 class="einzel">Who are you?</h3>
<div class="field einzel">
    <label class="label" for="full_name">Name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="pronouns">Pronouns</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="email">email *</label>
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
<div class="field einzel">
    <label class="label" for="age">Birthday *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>
<!--<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>-->
<div class="field einzel">
    <label class="label" for="occupation">Occupation/Activity *</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="occupation" required>
    </div>
    <p class="help">Please indicate your expected activity at the time of your move-in.</p>
</div>

<h3 class="einzel">Textfragen</h3>
<p class="einzel">To get to know you and your attitude towards CA, here are four more detailed questions. Please answer them in no more than 1,000 characters each.</p>
<div class="field einzel">
    <label class="label" for="leitbild">Which points in our guiding principle are particularly important to you, and which points are you critical of? </label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
    <p class="help is-success">Have a look at our <a href="/en/vision">vision</a></p>
</div>
<div class="field einzel">
    <label class="label" for="selbstverwaltung_experience">Do you have any previous experience with self-governance? If so, what is it? </label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="selbstverwaltung_tasks">Which tasks could you imagine to be responsible for in the self-administration? </label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="100" maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="wohnvorstellung">How do you imagine living in CA? (take your time to answer) </label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>

<h3 class="einzel">Miscellaneous</h3>
<div class="field einzel">
    <label class="label" for="barrier_free">Do you need a barrier-free flat? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="contacts">Are you already in contact with possible flatmates? If so, who are they?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="contacts">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="sonstiges">Is there anything you would like to add (about yourself)?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field einzel">
    <label class="label" for="contact_options">We rent apartments as a whole and not to individuals. In order to find your roommates, we will connect you by sharing your contact details. How can your possible future roommates reach you? Please enter your phone number and/or e-mail address here.</label>
    <div class="control">
        <input name="contact_options" class="input" type="text" placeholder="" maxlength="200">
    </div>
</div>
<div class="field einzel">
    <label class="label" for="spam_protection">We would like to make sure that
    your aren't a computer: How much is 5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p class="einzel">After submitting, you will receive a confirmation mail to your given address. </p>
<p class="einzel">With the sending of your application you agree that your contact details will be shared with other applicants. We are keeping this data only for the duration of your application, after which it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information. </p>
<div class="field einzel">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

<h2 class="gruppe">Group questions</h2>

<h3 class="gruppe">Who are you?</h3>
<div class="field gruppe">
    <label class="label" for="group_size">How many are you? *</label>
	<div class="control">
        <input type="number" name="group_size" value="" class="input required" required/>
    </div>
</div>
<!-- open as many name, pronoun, age and occupation fields as there are group members -->
<div class="field gruppe">
    <label class="label" for="full_name">Names *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="pronouns">Pronouns</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="pronouns">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="email">Email (of one person of your goup) *</label>
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
<!--<div class="field">
    <label class="label" for="age">Alter *</label>
    <div class="control">
        <input class="input required" type="number" id="age" name="age" min="18" max="100" required />
    </div>
</div>-->
<div class="field gruppe">
    <label class="label" for="age">Birthdays *</label>
    <div class="control">
        <input class="input required" type="text" placeholder="" maxlength="200" name="age" required />
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="occupation">Occupations/Activities *</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="800" name="occupation" required>
    </div>
</div>

<h3 class="gruppe">Text questions</h3>
<p class="gruppe">To get to know you and your attitude towards CA, here are five more detailed questions. Please answer them in no more than 1,000 characters each.</p>
<div class="field gruppe">
    <label class="label" for="characterise">What characterizes you as a group?</label>
    <div class="control">
        <textarea name="characterise" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="leitbild">Which points in our guiding principle are particularly important to you, and which points are you critical of?</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="" minlength="200" maxlength="1000"></textarea>
    </div>
     <p class="help is-success">Have a look at our <a href="/en/vision">vision</a></p>
    </div>
<div class="field gruppe">
    <label class="label" for="selbstverwaltung_experience">Do you have previous experience with self-governance? If yes, which one?</label>
    <div class="control">
        <textarea name="selbstverwaltung_experience" class="textarea" placeholder="" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="selbstverwaltung_tasks">Which tasks could you imagine to be responsible for in the self-administration?</label>
    <div class="control">
        <textarea name="selbstverwaltung_tasks" class="textarea" placeholder="" minlength="100" maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="wohnvorstellung">How do you imagine living in CA? (take your time to answer) </label>
    <div class="control">
        <textarea name="wohnvorstellung" class="textarea" placeholder="" minlength="200"
            maxlength="1000"></textarea>
    </div>
</div>

<h3 class="gruppe">Miscellaneous</h3>
<div class="field gruppe">
    <label class="label" for="barrier_free">Are any of you in need of accessible housing?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="long-term">Do you plan to live here for a longer period of time?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="200" name="long-term">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="sonstiges">Is there anything else you would like to add (about yourselves)?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder=""
            maxlength="1000"></textarea>
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="contact_options">We rent apartments as a whole and not to individuals. If you aren’t a full group already and still need some roommates: How can your possible future roommates reach you? Please enter at least one cell phone number and/or e-mail address here. </label>
    <div class="control">
        <input name="contact_options" class="input" type="text" placeholder="" maxlength="200">
    </div>
</div>
<div class="field gruppe">
    <label class="label" for="spam_protection">We would like to make sure that
    your aren't a computer: How much is 5 + 3?</label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p class="gruppe">After submitting, you will receive a confirmation mail to your given address.</p>
<p class="gruppe">With the sending of your application you agree that your contact details will be shared with other applicants.
We are keeping this data only for the duration of your application, after which it will be deleted. Please see our <a href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a> for further information.</p>
<div class="field">
    <div class="control gruppe">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>


</form>
