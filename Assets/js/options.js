function showOption() {
    var service = document.getElementById("type");
    var amount = document.getElementById("amount");

    var selected = service.options[service.selectedIndex].value;

    if (selected === "Special Garments") {
        amount.value = parseFloat(150)
    } else if (selected === "Beddings") {
        amount.value = parseFloat(100)
    } else if (selected === "Delicate Fabrics") {
        amount.value = parseFloat(150)
    } else if (selected === "Formal Wear") {
        amount.value = parseFloat(120)
    } else if (selected === "Everyday Wear") {
        amount.value = parseFloat(80)
    }
}