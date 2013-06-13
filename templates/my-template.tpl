<div class="facets">
	<div style="float: left; width: 33%;">
		{foreach from=$facets item=facet}
			<h6>{$facet.label|escape}</h6>
			<select multiple name="{$facet.name|escape}" data-for="#my_categories" data-join="and">
				{foreach from=$facet.options key=value item=label}
					<option value="{$value|escape}">{$label|escape}</option>
				{/foreach}
			</select>
		{/foreach}
	</div>
	<div style="float: left; width: 66%;">
		<ul>
			{foreach from=$results item=row}
				<li>{object_link type=$row.object_type id=$row.object_id} {$row.highlight|escape}</li>
			{/foreach}
		</ul>
	</div>
</div>
{jq}
	$('.facets select').each(function () {
		$(this).val($($(this).data('for')).val().split(" " + $(this).data('join') + " "));
	}).change(function () {
		var value = $(this).val();
		if (value) {
			value = value.join(" " + $(this).data('join') + " ");
		}
		$($(this).data('for')).val(value).change();
	});

	$.applyChosen();

{/jq}
