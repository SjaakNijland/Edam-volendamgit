<table>

    <tr>
        <td>Username</td>

    </tr>
</table>
<hr>
<table>
    {foreach from=$result item=oneItem}
        <tr>
            <td>{$oneItem.phpro_user_id}</td>
            <td>{$oneItem.phpro_username}</td>
            <td><a href="?action=admin&cms_action=edit&id={$oneItem.phpro_user_id}">edit</a> </td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.phpro_user_id}">delete</a> </td>
        </tr>
    {/foreach}
</table>