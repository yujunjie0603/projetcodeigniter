<div class="container">
    <table class="table table-bordered">
        <tr>
            <td> ID </td>
            <td> Email </td>
            <td> Name </td>
            <td> Style </td>
            <td> Modifier </td>
            <td> Supprimer </td>
        </tr>
<?php
foreach ($listUser as $key => $user) {
    
?>
        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->email;?></td>
            <td><?=$user->name;?></td>
            <td><?=$user->style;?></td>
            <td><a href="<?=site_url('admin/user/edit/' . $user->id);?>">Modifier</a></td>
            <td>Supprimer</td>
        </tr>
<?php
}
?>
    </table>
</div>