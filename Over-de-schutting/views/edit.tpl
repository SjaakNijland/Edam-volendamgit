<form action="?action=update" method="post">
    <table>
        <tr>
            <td><input type="text" placeholder="id" name="id" value="{$result.0.phpro_user_id}" readonly></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Username" name="phpro_username" value="{$result.0.phpro_username}" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Password" name="phpro_password" value="{$result.0.phpro_password}" readonly></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
    </table>
    <a href="index.php?action=admin">Keer terug</a>

</form>