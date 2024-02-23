<?php

echo "<h3>Форма</h3>";

?>


<form action="server.php" method="post" enctype="multipart/form-data">

    <fieldset>
        <legend>fieldset legend</legend>
        <p>
            <label for="firstName">First name
                <input name="firstName" type="text" autofocus/>
            </label>
        </p>
        <p>
            <label>Last name
                <input name="lastName" type="text"/>
            </label>
        </p>
        <p>
            <input type="file" name="myFile" id="file">
        </p>
    </fieldset>

    <fieldset>
        <legend>fieldset legend 2</legend>
        <p>
            <select id="card">
                <option>visa</option>
                <option>master</option>
            </select>
        </p>
    </fieldset>

    <p>
        <button type="submit">Go</button>
    </p>

</form>
