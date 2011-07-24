<?php if (count($days) > 0): ?>
    <table>
        <thead><tr>
            <th>Datum</th>
            <th>Aantal</th>
            <th>Inschrijvingen</th>
            <th>&nbsp;</th>
        </tr></thead>
        <tbody>
            <?php foreach ($days as $day): ?>
                <tr>
                    <td><?php echo $day; ?></td>
                    <td class="number"><?php echo $day->registrations->count_all(); ?></td>
                    <td><?php echo $day->registrations->as_list(); ?></td>
                    <td>
                        <a href="/administratie/verwijder/<?php echo $day->id; ?>" class="confirmation-needed">
                            <img src="/images/cross.png" alt="Verwijderen"/>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p class="zero">Geen maaltijden gevonden</p>
<?php endif; ?>