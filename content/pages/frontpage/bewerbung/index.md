---
title: "Bewerbung"
url: "/bewerbung/index.php"
---
{{< php >}} 
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../../php_libs/PHPMailer/src/Exception.php';
require '../../php_libs/PHPMailer/src/PHPMailer.php';
require '../../php_libs/PHPMailer/src/SMTP.php';

// Import Formr Class
require_once '../../php_libs/formr/class.formr.php';

// Creates the form: command inserts the html form tag
$form = new Formr();
echo $form->form_open();
?>
{{< /php >}}
<p>Schön, dass Du Lust hast, ins CA einzuziehen</p>

<h2>Allgemein</h2>
<div class="field">
<label class="label" for="full_name">Name *</label>
	<div class="control has-icons-left">
        <input type="text" name="full_name" value="" class="input" maxlength="100" />
        <span class="icon is-small is-left">
            <i class="icon-user"></i>
        </span>
    </div>
</div>

<div class="field">
    <label class="label" for="email">E-Mail *</label>
    <div class="control has-icons-left">
        <input type="email" name="email" value="" class="input required email"
            id="email" size="55" />
        <span class="icon is-small is-left">
            <i class="icon-mail-alt"></i>
        </span>
    </div>
</div>


<h2>Textfragen</h2>

<p>Um Dich und deine Einstellung zum CA kennenzulernen haben wir hier noch
    drei ausführlichere Fragen. Bitte beantworte sie in höchstens 1.000
    Zeichen. Die ersten beiden Felder sind Pflichtfelder.</p>

<div class="field">
    <label class="label" for="leitbild">Welche Punkte an unserem Leitbild sind dir besonders
        wichtig, welchen Punkten stehst du kritisch gegenüber? *</label>
    <div class="control">
        <textarea name="leitbild" class="textarea" placeholder="Pflichtfeld" maxlength="1000"
            required="required"></textarea>
    </div>
    <p class="help is-success">Unser Leitbild findest Du <a href="/leitbild">hier</a>.</p>
</div>

<div class="field">
    <label class="label" for="selbstverwaltung">Warum hast Du Lust auf Selbstverwaltung? *</label>
    <div class="control">
        <textarea name="selbstverwaltung" class="textarea" placeholder="Pflichtfeld" maxlength="1000"
            required="required"></textarea>
    </div>
</div>

<div class="field">
    <label class="label" for="sonstiges">Was sollten wir sonst noch über Dich wissen?</label>
    <div class="control">
        <textarea name="sonstiges" class="textarea" placeholder="Optional"
            maxlength="1000"></textarea>
    </div>
</div>


<h2>Diversität</h2>

<p>
    Um die Vielfalt in unserem Wohnheim zu sichern haben wir uns verschiedene
    Quoten gesetzt. Bitte hilf uns, diese nicht aus dem Auge zu verlieren, indem
    Du folgende Fragen beantwortest. Wenn Du die Fragen nicht beantworten
    willst, ist das auch kein Problem.
</p>

<p>
    Hier keine Angaben zu machen wird sich <b>nicht</b> negativ auf deine Bewerbung auswirken!
</p>

<div class="field">
    <label class="label" for="taetigkeit">Was is Deine offizielle Tätigkeit?</label>
    <div class="control">
        <div class="select">
            <select name="taetigkeit">
                <option>Studium</option>
                <option>Promotion</option>
                <option>Ausbildung</option>
                <option>Sonstiges</option>
            </select>
        </div>
    </div>
    <p class="help">Bitte gib deine erwartete Tätigkeit zum Zeitpunkt des Einzugs 2021 an.</p>
</div>

<div class="field">
    <label class="label" for="fachrichtung">Wenn Studium oder Promotion, welche Fachrichtung? Wenn
        Ausbildung, für welchen Beruf?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
    <p class="help">Falls Du unter Tätigkeit Sonstiges angegeben hast, kannst du hier auch eine Ergänzung schreiben.</p>
</div>


<hr>


<div class="field">
    <label class="label">Was ist Deine Staatszugehörigkeit?</label>
    <div class="control">
        {{< nationality-form >}}
    </div>
</div>

<div class="field">
    <label class="label">Wie würdest du Deine geschlechtliche Zugehörigkeit
        bezeichnen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div>

<!-- <div class="field">
    <label class="label">Fühlst Du Dich Gruppen zugehörig oder wirst zu Gruppen
        zugeordnet, die Diskriminierung ausgesetzt oder anderweitig strukturell
        benachteiligt sind? Wenn ja, welchen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div> -->

<hr>

<div class="field">
    <label class="label">Bist Du auf eine barrierefreie Wohnung
        angewiesen?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div>

<div class="field">
    <label class="label">Hast Du Kinder, die mit Dir einziehen würden?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div>

<div class="field">
    <label class="label">Kennst Du bereits andere Leute, mit denen Du zusammenziehen
        möchtest?</label>
    <div class="control">
        <input class="input" type="text" placeholder="" maxlength="60">
    </div>
</div>

<hr>

<p>Nach dem Absenden bekommst Du eine Bestätigungsmail an Deine angegebene Adresse.</p>

<div class="field">
    <div class="control">
<label class="sr-only" for="submit"></label>
<input type="submit" name="submit" value="Submit" class="btn" id="submit">
        <button class="button is-link">Abschicken</button>
    </div>
</div>

{{< php >}}
<?php
echo $form->form_close();

if($form->submit()){
	$full_name = $form->post('full_name');
	$email = $form->post('email','Email','valid_email');
	$leitbild = $form->post('leitbild');
	$selbstverwaltung = $form->post('selbstverwaltung');
	
	print($email);
		// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);
	try {

	   //Recipients
        $mail->setFrom('bewerbung@collegiumacademicum.de', 'Auswahl Team');
		$mail->addAddress($email, $full_name);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		$mail->addReplyTo('kontakt@collegiumacademicum.com', 'Collegium Academicum');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');



    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Bewerbung Collegium Academicum';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    
	$body = "Bewerbung von $full_name\n\n
Leitbild:\n$leitbild\n
Selbstverwaltung:\n
$selbstverwaltung";
			 
	$mail->Body = $body;

    $mail->send();

    echo 'Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

	}
?>
{{< /php >}}

