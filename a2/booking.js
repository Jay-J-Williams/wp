let variation1 = 'ACT';
let variation2 = 'RMC';
let variation3 = 'FAM';
let variation4 = 'AHF';
const variations = [variation1, variation2, variation3, variation4];
for (let i = 0; i < variations.length; i++) {
    let spanmon = variations[i] + "SpanMon";
    let spantue = variations[i] + "SpanTue";
    let spanwed = variations[i] + "SpanWed";
    let spanthu = variations[i] + "SpanThu";
    let spanfri = variations[i] + "SpanFri";
    let spansat = variations[i] + "SpanSat";
    let spansun = variations[i] + "SpanSun";
    let info = variations[i] + "Info";
    if (variations[i] == "ACT" || variations[i] == "FAM") {
        if (!(window.location.toString().includes(variations[i]))) {
            document.getElementById(spanmon).remove();
            document.getElementById(spantue).remove();
            document.getElementById(spanwed).remove();
            document.getElementById(spanthu).remove();
            document.getElementById(spanfri).remove();
            document.getElementById(spansat).remove();
            document.getElementById(spansun).remove();
            document.getElementById(info).remove();
        }
    }

    else if (variations[i] == "RMC") {
        if (!(window.location.toString().includes(variations[i]))) {
            document.getElementById(spanwed).remove();
            document.getElementById(spanthu).remove();
            document.getElementById(spanfri).remove();
            document.getElementById(spansat).remove();
            document.getElementById(spansun).remove();
            document.getElementById(info).remove();
        }
    }

    else {
        if (!(window.location.toString().includes(variations[i]))) {
            document.getElementById(spanmon).remove();
            document.getElementById(spantue).remove();
            document.getElementById(spansat).remove();
            document.getElementById(spansun).remove();
            document.getElementById(info).remove();
        }
    }
}
