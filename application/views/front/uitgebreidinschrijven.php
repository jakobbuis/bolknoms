<?php echo View::factory('front/_introductie'); ?>

<?php echo Flash::display_messages(); ?>

<?php if (isset($validation)): ?>
    <?php echo Helper_Form::error_messages_for($validation); ?>
<?php endif; ?>

<h2>Uitgebreid aanmelden</h2>
<form action="/uitgebreidaanmelden" method="post" accept-charset="utf-8" class="clearfix">
    <p>
        <label for="name" class="label">Naam</label>
        <input type="text" name="name" id="name"/>
        <small>Gebruik je volledige voor- en achternaam. Onduidelijke inschrijvingen worden vernietigd.</small>
    </p>
    <p>
        <label for="email" class="label">E-mail</label>
        <input type="text" name="email" id="email"/>
    </p>
    <p>
        <label for="handicap" class="label">Handicap</label>
        <input type="text" name="handicap" id="handicap">
        <small>Bijvoorbeeld vegetari&euml;r, geen pinda's, etc..</small>
    </p>

    <p>
        <span class="label">Eettafels</span>
        <?php if (count($meals) > 0): ?>
            <table>
                <thead>
                <tr>
                    <th class="checkbox"><input type="checkbox" name="all-meals"></th>
                    <th>Datum</th>
                    <th>Aanmeldingen</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($meals as $meal): ?>
                        <tr>
                            <td class="checkbox"><?php echo Form::checkbox('meals[]', $meal->id); ?></td>
                            <td class="date"><?php echo $meal; ?></td>
                            <td class="number"><?php echo $meal->registrations->count_all(); ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        <?php else: ?>
            <span class="zero">Er zijn geen maaltijden beschikbaar om je voor aan te melden.</span>
        <?php endif; ?>
    </p>
    <p>
        <input type="submit" id="submit" value="Aanmelden"/>
    </p>
</form>

<h2>Afmelden</h2>
<p>
    Na je aanmelding ontvang je een e-mail van no-reply@debolk.nl ter bevestiging. Deze e-mail bevat een link om je uit te schrijven.
    Let op: als de inschrijving is gesloten, kun je je ook niet meer afmelden voor een maaltijd.
    Neem bij problemen contact op met het bestuur via het bekende e-mailadres of 015 212 60 12.
</p>

<?php echo View::factory('front/_spelregels'); ?>
<?php echo View::factory('layouts/_navigation'); ?>
