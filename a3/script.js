// Booking Page Variations
if (window.location.toString().includes("booking")) {
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
        if (variations[i] == "ACT" || variations[i] == "FAM") {
            if (!(window.location.toString().includes(variations[i]))) {
                document.getElementById(spanmon).remove();
                document.getElementById(spantue).remove();
                document.getElementById(spanwed).remove();
                document.getElementById(spanthu).remove();
                document.getElementById(spanfri).remove();
                document.getElementById(spansat).remove();
                document.getElementById(spansun).remove();
            }
            else {
                if (variations[i] == "ACT") {
                    document.getElementById("ACTMon").checked = false;
                }
                else {
                    document.getElementById("FAMMon").checked = false;
                }
            }
        }

        else if (variations[i] == "RMC") {
            if (!(window.location.toString().includes(variations[i]))) {
                document.getElementById(spanwed).remove();
                document.getElementById(spanthu).remove();
                document.getElementById(spanfri).remove();
                document.getElementById(spansat).remove();
                document.getElementById(spansun).remove();
            }
            else {
                document.getElementById("RMCWed").checked = false;
            }
        }

        else {
            if (!(window.location.toString().includes(variations[i]))) {
                document.getElementById(spanmon).remove();
                document.getElementById(spantue).remove();
                document.getElementById(spansat).remove();
                document.getElementById(spansun).remove();
            }
            else {
                document.getElementById("AHFMon").checked = false;
            }
        }
    }

}

// Nav Button Click Changes

if (window.location.toString().includes("index")) {
    var newColor = "orange";
    function LinkColorChange(link) {
        if (link == "#AboutUs") {
            aboutUs = document.getElementById("AboutUsLink");
            nowShowing = document.getElementById("NowShowingLink");
            seatsAndPrices = document.getElementById("SeatsAndPricesLink");
            aboutUs.style.color = newColor;
            nowShowing.style.color = 'black';
            seatsAndPrices.style.color = 'black';
        }
        else if (link == "#SeatsAndPrices") {
            aboutUs = document.getElementById("AboutUsLink");
            nowShowing = document.getElementById("NowShowingLink");
            seatsAndPrices = document.getElementById("SeatsAndPricesLink");
            seatsAndPrices.style.color = newColor;
            aboutUs.style.color = 'black';
            nowShowing.style.color = 'black';
        }
        else if (link == "#NowShowing") {
            aboutUs = document.getElementById("AboutUsLink");
            nowShowing = document.getElementById("NowShowingLink");
            seatsAndPrices = document.getElementById("SeatsAndPricesLink");
            nowShowing.style.color = newColor;
            aboutUs.style.color = 'black';
            seatsAndPrices.style.color = 'black';
        }
    }
}

// Booking Form Calculation

if (window.location.toString().includes("booking")) {
    function GetSeatPrices() {
        priceType = GetDay();
        var BookingForm = document.forms["BookingForm"];
        var selectedSeatGroup = BookingForm.elements["SeatGroup"];
        var seatCode = selectedSeatGroup.value;
        switch (seatCode) {
            case 'seats[STA]':
                fullprice = 21.50;
                discprice = 16.00;
                break;

            case 'seats[STP]':
                fullprice = 19.00;
                discprice = 14.50;
                break;

            case 'seats[STC]':
                fullprice = 17.50;
                discprice = 13.00;
                break;

            case 'seats[FCA]':
                fullprice = 31.00;
                discprice = 25.00;
                break;

            case 'seats[FCP]':
                fullprice = 28.00;
                discprice = 23.50;
                break;

            case 'seats[FCC]':
                fullprice = 25.00;
                discprice = 22.00;
                break;

            default:
                fullprice = 0.00;
                discprice = 0.00;
        }
        if (priceType == 'fullprice') {
            var seatPrice = fullprice;
        }
        else {
            var seatPrice = discprice;
        }
        return seatPrice;
    }

    function GetSeatCount() {
        var BookingForm = document.forms["BookingForm"];
        var selectedSeatCount = BookingForm.elements["NumberOfSeats"];
        var seatCount = selectedSeatCount.value;
        return seatCount;
    }

    function GetDay() {
        var BookingForm = document.forms["BookingForm"];
        const selectedDay = BookingForm.elements["day"];
        for (var i = 0; i < selectedDay.length; i++) {
            if (selectedDay[i].checked) {
                var priceType = selectedDay[i].dataset.pricing;
            }
        }
        return priceType;
    }

    function CalculateTotal() {
        var seatPrice = GetSeatPrices();
        var seatCount = GetSeatCount();
        var total = seatPrice * seatCount;
        var totalMessage = total.toString();
        if (totalMessage.includes(".5")) {
            totalMessage += "0";
        }
        if (!(totalMessage.includes("."))) {
            totalMessage +=".00";
        }
        document.getElementById('total_price').innerHTML = "Total Price = $" + totalMessage;
    }

    function ValidateForm() {
        var nameInput = document.forms['BookingForm']['user[name]'].value;
        console.log(nameInput);
        var mobileInput = document.forms['BookingForm']['user[mobile]'].value;
        const nameRegex = "^[-A-Za-z '.]{1,64}$";
        const mobileRegex = "^61[0-9]{2}[0-9]{6}$";
        let nameTest = nameInput.match(nameRegex);
        if (!nameTest) {
            alert('Full name must not include any numbers or special characters, and must be between 1 and 64 characters');
            return false;
        }
        let mobileTest = mobileInput.match(mobileRegex);
        if (!mobileTest) {
            alert('Enter Mobile in the Australian format e.g. 6155222000');
            return false;
        }
    }

}