//utils
function makeAjaxRequest(url,data,_callBack,_failure,type){
	if(!type){
		type='GET';
	}
debugger;
    $.ajax({
	   url:url,
	   datatype:"application/json",
	   type:type,
	   data: data, 
	   success:function(data){
	   	   _callBack(data);
	   },
	   error:function(jqXHR, textStatus, errorThrown){
	   	debugger;
	      if(!_failure){
	      	console.log(errorThrown);
	      }
	      else
	      {
	      	_failure(jqXHR,textStatus,errorThrown);
	      }
	   }
 	});
}