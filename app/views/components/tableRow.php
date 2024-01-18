<tr>
    <td><?= $componentData["reservation"]->id; ?></td>
    <td><?= $componentData["reservation"]->AmountOfPeople; ?></td>
    <td><?= $componentData["reservation"]->AmountOfChildren; ?></td>
    <td><?= $componentData["reservation"]->ReservationTime; ?></td>
    <td><?= $componentData["reservation"]->Comment; ?></td>
    <td><?= $componentData["reservation"]->user_id; ?></td>
    <td><a href='/reservering/delete/<?= $componentData["reservation"]->id ?>' class='btn btn-danger'>Delete</a></td>
</tr>