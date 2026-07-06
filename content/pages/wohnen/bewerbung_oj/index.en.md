---
title: "Bewerbung Altbau (OJ)"
slug: "bewerbung_oj"
novoigl: yes

---
<form action="/bewerbung_oj/send.php" method="post" accept-charset="utf-8">
<p>Awesome that you're interested in moving into the CA!

<!-- Unfortunately, applications are closed right now. -->

The next possible move-in date is October 1st 2026. You can apply for this starting now. The application day will take place on the 30th of August 2026.</p> 

 <h2>General information</h2>
<div class="field">
    <label class="label" for="full_name">Full name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="preferred_name">What is your preferred first name?</label>
	<div class="control has-icons-left">
        <input type="text" name="preferred_name" value="" class="input" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="pronouns">What are your pronouns? </label>
	<div class="control has-icons-left">
        <input type="text" name="pronouns" value="" class="input" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>
<div class="field">
    <label class="label" for="email">E-mail *</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required email"
            id="email" size="55" required/>
        <span class="icon is-small is-left">
            <i class="icon-mail-alt"></i>
        </span>
    </div>
</div> 
<div class="field">
    <label class="label" for="phone">Phone number *</label>
  	<div class="control has-icons-left">
        <input type="text" name="phone" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-phone"></i>
        </span>
    </div>
</div> 
<!-- Schutz vor der Benutzung des Formulars mit Computern. Es ist wird nicht angezeigt. -->
 <div class="field extra-field">
    <label class="label" for="mail">Deine E-Mail-Adresse wird hier nicht
    abgefragt, trage bitte hier nichts ein.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div> 
</div>
<div class="field">
    <label class="label" for="age">Date of birth *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>

<h2>Text questions</h2>
<p>To learn about you and how good you would fit into the CA, we ask you three longer text questions. Please keep it short and answer in less than 1.000 characters each. Only the first two fields are mandatory.</p>
<div class="field">
    <label class="label" for="leitbild">Which aspects about our vision are important to you? Are there any that you are critical about? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
    <p class="help is-success">Take a look at <a href="/leitbild">our vision</a>.</p>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung">Why do you want to live in self-managed housing? *</label>
    <div class="control">
        <textarea name="selbstverwaltung" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
</div>
<div class="field">
    <label class="label" for="sonstiges">Is there something else we should know about you?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder="Optional" maxlength="1000"></textarea>
    </div>
</div>

<h2>Occupation and Diversity</h2>
<p>
    To keep the house a diverse place we tasked ourselves with multiple soft quotas. Please help us to not loose sight of those by answering the following questions. If you don't want to answer any of the questions, that is also fine.
</p>
<p>
Not answering questions in this section will not have a negative impact on your application!
</p>
<div class="field">
    <label class="label" for="occupation">What is your main official occupation?</label>
    <div class="control">
        <div class="select">
            <select name="occupation">
                <option>no answer</option>
                <option>student</option>
                <option>doctorate</option>
                <option>apprenticeship</option>
                <option>other</option>
            </select>
        </div>
    </div>
    <p class="help">Please answer with your expected occupation at the date when you want to move in.</p>
</div>
<div class="field">
    <label class="label" for="occupation_subject">If you are studying, in which subject? If you are doing an apprenticeship, for which job?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="occupation_subject">
    </div>
    <p class="help">If you answered "other" in the previous question, you can also add a comment here.</p>
</div>
<div class="field">
    <label class="label" for="children">Do you have children that would move in with you?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>
<div class="field">
    <label class="label" for="diversity">Are there any other aspects of diversity or marginalisation that you'd like to share with us? </label>
    <div class="control">
        <textarea name="diversity" class="textarea" placeholder="Optional" maxlength="1000"></textarea>
    </div>
  <!--  <p class="help">We use this information solely to ensure that we can cater to your needs as best as possible and act considerately during the application day.</p> -->
</div>

<h2>Room</h2>
<div class="field">
    <label class="label" for="room">Are you applying for a double or a single room? </label>
    <div class="control">
        <div class="select">
            <select name="room">
                <option>double room</option>
                <option>single room</option>
                <option>I'm fine with either</option>
            </select>
        </div>
    </div>
    <p class="help">Please keep in mind that double rooms are cheaper. You can find informations about the rent prices under <a href="/zimmer_altbau">rooms in the old building</a>.</p>
</div>
<div class="field">
    <label class="label" for="double_room">If you are (also) applying for a double room: Would it be okay with you to share the room with the opposite gender?</label>
    <div class="control">
        <div class="select">
            <select name="double_room">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
    </div>
<div class="field">
    <label class="label" for="second_person">Are you applying together with another person? If yes, please state the full name of that person. </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="second_person">
    </div>
	 </div>
    <p class="help">Please note that both of you have to fill in the application form separately.</p>
</div>
</div>
<div class="field">
    <label class="label" for="budget">What is your budget for the rent? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="budget">
    </div>
    <p class="help">>This information helps us assign you a suitable room and is entirely optional. We don't do this to maximize our profits.</p>
</div>
<div class="field">
    <label class="label" for="time">How long are you planning to live in the CA? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="time">
    </div>
</div>

<h2>Organisational matters</h2>
<div class="field">
    <label class="label" for="already_applied">Have you applied to the CA before? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="already_applied">
    </div>
</div>
<div class="field">
<label class="label" for="activity_in_ca">Are you or have you been active in the CA before? If yes, where? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="activity_in_ca">
    </div>
    <p class="help">If you enter information in this field, we will contact the organization or initiative to discuss your activities so that we can award a potential bonus to your application. This can only have a positive impact on your application.</p>
</div>
<div class="field">
    <label class="label" for="language_application_day">Would you be able to participate in the application day in German? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="language_application_day">
    </div>
</div>
<div class="field">
    <label class="label" for="knowledge_ca">How do you know about the CA? </label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="knowledge_ca">
    </div>
</div>
<div class="field">
    <label class="label" for="spam_protection">To make sure you're not a computer: What is 5 + 3? </label>
    <div class="spam_protection">
        <input class="input" type="text" placeholder="" maxlength="10" name="spam_protection">
    </div>
</div>
<hr>
<p>After submitting your application, you will receive a confirmation email at the email address you provided.</p>
<p>We will retain this information only for the duration of your application. After that, it will be deleted. You can find more information in our <a>href="https://collegiumacademicum.de/datenschutz/">Privacy Policy</a>.</p>
<div class="field">
    <div class="control">
        <label class="sr-only" for="submit"></label>
          <input type="hidden" name="language" value="de">
        <input type="submit" name="submit" value="Abschicken" class="button is-link" id="submit">
    </div>
</div>

 </form>
