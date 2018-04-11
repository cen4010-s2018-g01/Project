function cancel(orderNum){
    var r = confirm("Are you certain you want to\nCANCEL ORDER NUMBER " + orderNum + "?");
    if (r === true){
        return true;
    }
    else{
        return false;
    }
}