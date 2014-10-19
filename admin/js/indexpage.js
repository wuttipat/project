


function getAjax(url){
	$.get(url, {}, function(data){
		$('div .right_content').html(data);
	});
}

function openDialogUpdate(url, id, refresh){
    $.get(url, {'id':id}, function(data){
        $( "#dialogMain" ).html(data);
        $('#dialogFooter').html(dialogUpdateFooter());
    });
    $( "#dialog" ).dialog({
    modal: true,
    draggable: false,
    resizable: false,
    position: ['center', 'center'],
    show: 'blind',
    hide: 'blind',
    width: 400
    });
}

function dialogUpdateFooter(){
    return '<table>\
    <tr>\
           <td><input type="button" value="บันทึก" onClick="editClick()"</td>\
           <td><input type="button" value="ยกเลิก" onClick="closeDialog()"</td>\
    </tr>\
    </table>';
}

function editClick(){
   
}

function closeDialog(){
    $( "#dialog" ).dialog('close');
}

function setDialog() {
     $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        modal: true,
        position: ['center', 'center'],
        effect: "blind",
        duration: 500
      },
      hide: {
        effect: "explode",
        duration: 500
      }
    });
}

