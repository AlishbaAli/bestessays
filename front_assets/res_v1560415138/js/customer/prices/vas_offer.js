function changeVasState(id, check_flag)
{
    var loc = '?id=' + id + '&flag=' + check_flag;
	$.getJSON(loc, {}, onAjaxRespond);
}

function onAjaxRespond(data)
{
	if ( data.flag )
	{
		$('#vas_'+$id).hide();
		$('#vas_'+$id+'_remove').show();
	}
	else
	{
		$('#vas_'+$id).show();
		$('#vas_'+$id+'_remove').hide();
	}
}

$(document).ready(function(){
    $('a.add_vas_link').live('click',function(){
		$id = $(this).attr('id').split('_');
		if ( $id.length == 4 ) { $id = $id[3]; } else { $id = $id[1]; }
		changeVasState($id, true);
	})

	$('a.remove_vas_link').live('click',function(){
		$id = $(this).attr('id').split('_');
		if ( $id.length == 4 ) { $id = $id[3]; } else { $id = $id[1]; }
		changeVasState($id, false);
	})
})
