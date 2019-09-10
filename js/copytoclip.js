function copy() {
    var copytext = document.querySelector("#myEmail");
    copytext.disabled = false;
    copytext.select();
    copytext.setSelectionRange(0, 99999);
    document.execCommand("copy");
    copytext.disabled = true;
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied";
}

function out() {
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copy";
}