{* $Id: tiki-debug_dmsg_tab.tpl 45006 2013-02-28 14:59:58Z chibaguy $ *}

<table  id="log" cellspacing="0" cellpadding="0">
  <caption> {tr}Page generation debugging log{/tr} </caption>
  {section name=i loop=$messages}
    <tr>
      <td > {$messages[i].timestamp|date_format:"%H:%M:%S"} </td>
      <td> <pre>{$messages[i].msg|escape:"html"|wordwrap:90:"\n":true|replace:"\n":"<br>"}</pre> </td>
    </tr>
  {/section}
</table>
