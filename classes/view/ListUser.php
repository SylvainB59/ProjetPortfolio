<?php
class ListUser{
    public static function listUsers($arr){
?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($arr as $user){
                ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['nom']; ?></td>
                    <td><?php echo $user['prenom']; ?></td>
                    <td><?php echo $user['mail']; ?></td>
                    <td><a href="VoirProfil.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Voir profil</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php
    }
}