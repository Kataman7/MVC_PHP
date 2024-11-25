<form method="post">
    <table>
        <thead>
        <tr >
            <th colspan="2">Connexion</th>
        </tr>
        </thead>
        <tr>
            <td><label for="login_id">Login :</label></td>
            <td><input type="text" name="login" id="login_id" required/></td>
        </tr>
        <tr>
            <td><label for="mdp_id">Mot de passe</label></td>
            <td><input type="password" value="" name="mdp" id="mdp_id" required></td>
        </tr>
    </table>
    <input type="submit" value="Envoyer" />
    <input type='hidden' name='action' value='connexion'>
</form>
