---
title: "Application dormitory (new building)"
slug: "application"
novoigl: yes
---

<form action="/bewerbung/send.php" method="post" accept-charset="utf-8">
<p>Awesome that you are interested in moving into the CA!

Moving-in is always possible at the beginning of a quarter (January 1, April 1, July 1 and October 1). The next possible move-in date is October 1, 2025. If you would like to move in in October, you can apply here <b>until Sunday, August 3, 2025</b> at the latest.</p> 
<!-- Unfortunately, we can no longer accept applications for the move-in in July 2025. <b>The next possible move-in date is October 1, 2025.</b> From the beginning of July on you will find our application form on this site. -->

<!-- Here you can sign up for our moving-in newsletter. Then we will inform you directly as soon as the application process has started.</p> -->

 <h2>General</h2>
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
<div class="field">
    <label class="label" for="phone">Phone number *</label>
  	<div class="control has-icons-left">
        <input type="text" name="phone" value="" class="input required" maxlength="100" required/>
        <span class="icon is-small is-left">
            <i class="icon-phone"></i>
        </span>
    </div>
</div> 
<!-- Schutz vor der Benutzung des Formulars mit Computern. Es ist wird nicht angezeigt.-->
<div class="field extra-field">
    <label class="label" for="mail">Please do not enter your email address here.</label>
    <div class="control has-icons-left">
        <input type="email" name="mail" value="" class="input email"
            id="mail" size="55"/>
    </div>
</div>
<div class="field">
    <label class="label" for="age">Birthday *</label>
    <div class="control">
        <input class="input required" type="date" id="age" name="age" value="2001-01-01" min="1940-01-01" max="2010-12-31" required />
    </div>
</div>
<h2>Text questions</h2>
<p>To learn about you and how good you would fit into the CA, we ask you three
    longer text questions. Please keep it short and answer in less than
    1.000 characters each. Only the first two fields are mandatory.</p>
<div class="field">
    <label class="label" for="leitbild">Which points about our vision are important to you? Are there some that you are critical about? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" minlength="300" maxlength="1000" required></textarea>
    </div>
    <p class="help is-success">Take a look at <a href="/en/vision">our vision</a>.</p>
</div>
<div class="field">
    <label class="label" for="selbstverwaltung">Why do want to live in self-managed housing? *</label>
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
<h2>Diversity</h2>
<p>
    To keep the house a diverse place we tasked ourselves with multiple soft
    quotas. Please help us to not loose sight of those by answering the following
    questions. If you don't want to answer any of the questions, that is also
    fine.
</p>
<p>
    Not answering questions in this section will <b>not</b> have a negative impact on your application!
</p>
<div class="field">
    <label class="label" for="occupation">What is your main official occupation?</label>
    <div class="control">
        <div class="select">
            <select name="occupation">
                <option>No answer</option>
                <option>Student</option>
                <option>Doctorate</option>
                <option>Apprenticeship</option>
                <option>Other</option>
            </select>
        </div>
    </div>
    <p class="help">Please answer with your expected occupation at the date when you want to move in.</p>
</div>
<div class="field">
    <label class="label" for="occupation_subject">If your studying, in which degree? If doing an apprenticeship, for which job?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="occupation_subject">
    </div>
    <p class="help">If you answered "Other" in the previous question, you can also add a comment here.</p>
</div>
<hr>
<div class="field">
    <label class="label" for="pronouns">Which pronouns would you like to be addressed with? (e.g. she/her, he/him, they/them)</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="pronouns">
    </div>
</div>
<hr>
<div class="field">
    <label class="label" for="barrier_free">Do you need accessible (barrier-free) housing?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="barrier_free">
    </div>
</div>
<div class="field">
    <label class="label" for="children">Do you have childen that live with you?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="children">
    </div>
</div>
<h2>Other information</h2>
<div class="field">
    <label class="label" for="already_applied">Have you previously applied for a place in our dormitory?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="already_applied">
    </div>
</div>
<div class="field">
<label class="label" for="activity_in_ca">Are you or have you already been active in CA and if yes, where? (If you have already been active, we will talk to the AG/initiative about your activity, so we can assess a possible bonus for your application. This will not have a negative impact on your application, only positive changes are possible.)</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="activity_in_ca">
    </div>
</div>
<div class="field">
    <label class="label" for="language_application_day">For organizational reasons: Would you prefer having the application day in German or English?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="language_application_day">
    </div>
</div>
<div class="field">
    <label class="label" for="rooms_in_altbau">It is possible that there will also be free rooms in our old building. The rent of these rooms is different depending on their size and the rooms can be terminated by us with 6-week notive to 30.09. of each year if they are needed for the participants of the orientation year falt*r. You can find further information on our website under Rooms in the old Building. Are you interested in these rooms as well?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60" name="rooms_in_altbau">
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
    <label class="checkbox" for="check_education_status">
      <input type="checkbox" required name="check_education_status">
        I am aware that only apprentices, university students and doctoral candidates are allowed to live in the dormitory.
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

<!-- {{< einziehen-signup >}} -->
