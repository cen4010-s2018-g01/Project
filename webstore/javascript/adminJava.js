function createConfirm(){
    var form = document.getElementById("formCreate");
    var sku = form.elements.namedItem('SKU').value;
    var state = confirm("Are you certain you wish to CREATE\nproduct Stock Keeping Unit(SKU) " + sku + "?");
    if (state === true){
        return true;
    }
    else{
        return false;
    }
}

function removeConfirm(){
    var form = document.getElementById("formRemove");
    var sku = form.elements.namedItem('SKU').value;
    var state = confirm("Are you certain you wish to REMOVE\nproduct Stock Keeping Unit(SKU) " + sku + "?");
    if (state === true){
        return true;
    }
    else{
        return false;
    }
}

function changeConfirm(){
    var form = document.getElementById("formChange");
    var sku = form.elements.namedItem('SKU').value;
    var state = confirm("Are you certain you wish to CHANGE\nthe STOCK of product\nStock Keeping Unit(SKU) " + sku + "?");
    if (state === true){
        return true;
    }
    else{
        return false;
    }
}