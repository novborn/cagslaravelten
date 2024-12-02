jQuery(document).ready(function(){
    jQuery("#formID").validationEngine();
    $("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

jQuery(document).ready(function(){
    jQuery("#formID1").validationEngine();
    $("#formID1").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

function get_query()
{
    var qrStr = window.location.search;
    var spQrStr = qrStr.substring(1);
    var arrQrStr = new Array();
    var arr = spQrStr.split('&');

    var queryvalue = arr[i].split('=');
    queryvalue[1];
    
    document.getElementById('sourceId').value = queryvalue[1];
}