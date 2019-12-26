
let is_visible = false ;

function see() 
{
	if (!is_visible) 
	{
		is_visible = true ;
	}
	else
	{
		is_visible = false ;
	}

	let input = document.getElementById('pass') ;

	if (is_visible) 
	{
		input.type = 'text' ;
	}  
	else
	{
		input.type = 'password' ;
	}
}

