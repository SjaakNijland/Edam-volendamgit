<table>

    <tr>

        <td>Organisatie</td>


    </tr>
</table>
<hr>
<table>
    {foreach from=$result item=oneItem}
        <tr>

            <td>{$oneItem.namebusiness}</td>

            <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a> </td>
            <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a> </td>
        </tr>
    {/foreach}
</table>
<a href="index.php?action=admin">Keer terug</a>