function calculate() {
    let amount = document.getElementById("amount").value;
    let plans = document.getElementById("plans").value;
    let frequency = document.getElementById("frequency").value;
    let duration = parseFloat(document.getElementById("duration").value);

    let rate = getInterestRate(plans)
    let principal = getPrincipal(frequency, amount)
    console.log(principal);
    console.log(duration);
    console.log(rate);
    let interest = principal * duration * rate / 100;

    respondMessage(principal, duration, interest)
}

function respondMessage(principal, duration, interest) {
    document.getElementById("total_balance").innerHTML=principal;
    document.getElementById("amount_saved").innerHTML=principal;
    document.getElementById("total_interest").innerHTML=interest;
    document.getElementById("years").innerHTML=duration;
    document.getElementById("response").focus();


}

function getInterestRate(plans) {
    switch (plans){
        case "safelock":
            return 10;
        case "targets":
            return 12;
        case "flex_naira":
            return 14;
        case "flex_dollar":
            return 7;
        case "piggy":
            return 15;
    }
}
function getPrincipal(frequency, amount) {
    switch (frequency){
        case "weekly":
            return 52 * amount;
        case "monthly":
            return 12 * amount;
        case "yearly":
            return amount;
    }
}