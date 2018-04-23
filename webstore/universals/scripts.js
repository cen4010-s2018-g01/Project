
function validate(addRemove, num) {
    var form = document.getElementById("form" + num);
    var quant = form.elements.namedItem('itemQuant').value;
    var pn = form.elements.namedItem('partNumber').value;
    var intro = "";
    var fromTo = "";
    
    if (addRemove === true) {
        intro = "Add";
        fromTo = "to";
    } else {
        intro = "Remove";
        fromTo = "from";
    }
   
    var r = confirm(intro + " " + quant + " of " + pn + " " + fromTo + " your cart?");
            
    if (r === true) {
        return true;
    } else {
        return false;
    }
    
}

function confirmation(val){
    
    var str = "";
    
    if (val === true) {
        str = "empty your cart";
    } else {
        str = "purchase all items in your cart";
    }
    
    var r = confirm("Are you certain you want to\n" + str.toUpperCase() + "?");
    
    if (r === true) {
        return true;
    } else {
        return false;
    }
}