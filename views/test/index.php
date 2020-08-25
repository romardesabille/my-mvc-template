
<h1>Testing submitting data with tokens and <br/> posting data with ajax request using jquery</h1>
<?php $token = Token::generate() ?>
<p><?php echo '<strong>Your token: </strong>' . $token ?></p>
<br/>
<strong><?php flash_message() ?></strong>
<form action="test/create" method="post" class="basic-data">
    Firstname :
    <input type="text" name="firstname">
    <br/>
    Lastname :
    <input type="text" name="lastname">
    <br/>
    <input type="hidden" name="token" value="<?php echo $token ?>">
    <button type="submit" style="margin-left: 11rem">Submit</button>
</form>

<h4>This data is just temporary this will be removed when refreshed.</h4>
<div style="width: 100%; display: flex; justify-content: center; margin-top: 1rem; margin-bottom: 5rem">
    <table class="table-data" border="1">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
        </tr>
    </table>
</div>


