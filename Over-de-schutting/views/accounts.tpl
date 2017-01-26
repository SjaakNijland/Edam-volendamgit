<div class="container">
<h1>Accounts</h1>
    <a href="?action=admin&cms_action=insert">Insert data</a><br>
    <p>Content:</p>
    <table>
        <tr>
            <td>id</td>

        </tr>
    </table>
    <hr>
    <table>
        {foreach from=$result item=oneItem}
            <tr>
                <td>{$oneItem.id}</td>

                <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
                <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
            </tr>

        {/foreach}
    </table>
</div>