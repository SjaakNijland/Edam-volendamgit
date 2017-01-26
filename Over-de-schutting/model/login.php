
<?php

if(isset($_SESSION["user_id"])){
    $user = $_SESSION["user_id"];
    echo "<div class='container'>";
    echo "Je bent al ingelogd $user. Klik <a href='?action=logout'>hier</a> om uit te loggen";
    echo "</div>";

}




else {
        echo "<div class='container'>";


        echo "<h2>Login Here</h2>";
        echo "<form action='?action=login_submit' method='post'>";
        echo "<fieldset>";
        echo "<p>";
        echo "<label for='phpro_username'>Username</label>
            <input type='text' id='phpro_username' name='phpro_username' value='' maxlength='20' />
        </p>
        <p>
            <label for='phpro_password'>Password</label>
            <input type='text' id='phpro_password' name='phpro_password' value='' maxlength='20' />
        </p>
        <p>
          <input type='submit' value='→ Login' />
        </p>
    </fieldset>
</form>
</div>";
}
