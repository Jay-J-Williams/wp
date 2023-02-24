// Booking Page Variations

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

// Nav Button Click Changes
/*
if (window.location.toString().includes("index")) {
    let ClickedBtnColor = "orange";
    let DefaultBtnColor = document.getElementById(AboutUsNavBtn).style.color;
    if (window.location.toString().includes("AboutUs")) {
        ChangeNavBtnGroupColor(AboutUsNavBtn, SeatsAndPricesNavBtn, NowShowingNavBtn);
    }
    else if (window.location.toString().include("SeatsAndPrices")) {
        ChangeNavBtnGroupColor(SeatsAndPricesNavBtn, AboutUsNavBtn, NowShowingNavBtn);
    }
    else if (window.location.toString().include("NowShowing")) {
        ChangeNavBtnGroupColor(NowShowingNavBtn, AboutUsNavBtn, SeatsAndPricesNavBtn);
    }
    
    document.getElementById(AboutUsNavBtn).onclick = function () { NavBtnOnClick(AboutUsNavBtn) };
    document.getElementById(SeatsAndPricesNavBtn).onclick = function () { NavBtnOnClick(SeatsAndPricesNavBtn) };
    document.getElementById(NowShowingNavBtn).onclick = function () { NavBtnOnClick(NowShowingNavBtn) };

    function NavBtnOnClick(Btn) {
        document.getElementById(Btn).style.color = ClickedBtnColor;
        document.getElementById(Btn).style.color.visited = ClickedBtnColor;
        if (Btn == AboutUsNavBtn) {
            RemoveClickedNavBtnColor(SeatsAndPricesNavBtn);
            RemoveClickedNavBtnColor(NowShowingNavBtn);
        }
        else if (Btn == SeatsAndPricesNavBtn) {
            RemoveClickedNavBtnColor(AboutUsNavBtn);
            RemoveClickedNavBtnColor(NowShowingNavBtn);
        }
        else if (Btn == NowShowingNavBtn) {
            RemoveClickedNavBtnColor(AboutUsNavBtn);
            RemoveClickedNavBtnColor(SeatsAndPricesNavBtn);
        }
    }
    function ChangeNavBtnColor(Btn, Color) {
        document.getElementById(Btn).style.backgroundColor = Color;
        document.getElementById(Btn).style.backgroundColor.visited = Color;
    }
    function ChangeNavBtnGroupColor(Btn1, Btn2, Btn3) {
        ChangeNavBtnColor(Btn1, ClickedBtnColor);
        ChangeNavBtnColor(Btn2, DefaultBtnColor);
        ChangeNavBtnColor(Btn3, DefaultBtnColor);
    }
}
*/

// Booking Form Calculation

if (window.location.toString().includes("booking")) {
    var BookingForm = document.forms["BookingForm"];

    function GetSeatPrices() {
        var selectedSeat = BookingForm.elements["seatgroup"];
        const selectedSeatPrices = [selectedSeat.dataset.fullprice,
        selectedSeat.dataset.discprice];
        return selectedSeatPrices;
    }

    function GetSeatCount() {
        var selectedSeatCount = BookingForm.elements["number_of_seats"];
        var seatCount = selectedSeatCount.value;
        return seatCount;
    }

    function GetDay() {
        selectedSeatPrices = GetSeatPrices();
        var selectedDay = BookingForm.elements["radio_btn"];
        for (var i = 0; i < selectedDay.length; i++) {
            if (selectedDay[i].checked) {
                var priceType = selectedDay[i].dataset.pricing;
                if (priceType == "fullprice") {
                    var finalSeatPrice = selectedSeatPrices[0];
                }
                else {
                    var finalSeatPrice = selectedSeatPrices[1];
                }
                break;
            }
        }
        return finalSeatPrice;
    }

    function CalculateTotal() {
        var total = GetDay() * GetSeatCount();
        document.getElementById('total_price').innerHTML = "Total Price = $" + total;
    }

    document.getElementById('seatgroup').onclick = function () { CalculateTotal };
    document.getElementById('number_of_seats').onclick = function () { CalculateTotal };
    let radioBtns = document.getElementsByClassName('radio_btn');
    for (var i = 0; i <= radioBtns.length; i++) {
        radioBtns[i].onclick = function () { CalculateTotal };
    }
}