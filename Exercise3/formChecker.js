function submitForm() {
    return failedValidations = [
        validateUsername(),
        validatePassword(),
        validateQuantities(),
        validateShipping()
    ].reduce((x, y) => x && y);
}

function validateQuantities() {
    const macQty = document.getElementById("macQty").value;
    const iphoneQty = document.getElementById("iphoneQty").value;
    const pencilQty = document.getElementById("pencilQty").value;

    return (macQty >= 0) && (iphoneQty >= 0) && (pencilQty >= 0);
}

function validateUsername() {
    const username = document.getElementById("username").value;
    const splitByDomain = username.split("@");
    if (splitByDomain.length != 2) {
        return false;
    }
    const domain = splitByDomain[1];
    if (domain.substring(domain.length - 4, domain.length) != ".com") {
        return false
    }
    return true;
}

function validatePassword() {
    if (document.getElementById("password").value != "") {
        return true;
    }
    return false;
}

function validateShipping() {
    return Array.prototype.slice.call(document.getElementsByName("shipping"))
    .map(x => x.checked)
    .reduce((prev, current) => prev || current);
}