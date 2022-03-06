// 1st page work start from here

const overViewLocation = document.getElementById("overview-location");
let locationArr = ["New York", "New York"];

overViewLocation.addEventListener("click", (e) => {
    locationArr = [e.target.dataset.city, e.target.dataset.state];
    document.getElementById("location-city5").innerHTML = locationArr[0];
    document.getElementById("location-state5").innerHTML = locationArr[1];
});

// selected location data get here - locationArr

//
//
//
// 1st page work end here

//
//
// 2nd page work start from here
//
//
const subTotalSummmery2 = document.getElementById("subtotal-summery2");
const taxSummery2 = document.getElementById("tax-summery2");
const totalSummery2 = document.getElementById("total-summery2");
// in 5th page
const subTotalSummmery5 = document.getElementById("subtotal-summery5");
const taxSummery5 = document.getElementById("tax-summery5");
const totalSummery5 = document.getElementById("total-summery5");
let bedroomCost = 90;
let bathroomCost = 40;
let kitchenCost = 0;
let fridgeCost = 0;
let gardenCost = 0;
let costArr = [bedroomCost, bathroomCost, kitchenCost, fridgeCost, gardenCost, 149.5];

const costSetter = (bed, bath, k, f, g) => {
    const subtotal = bed + bath + k + f + g;
    const tax = (bed + bath + k + f + g) * 0.15;
    const total = subtotal + tax;
    subTotalSummmery2.innerText = `$${subtotal}`;
    taxSummery2.innerText = `$${tax}`;
    totalSummery2.innerText = `$${total}`;

    // in 5th page

    subTotalSummmery5.innerText = `$${subtotal}`;
    taxSummery5.innerText = `$${tax}`;
    totalSummery5.innerText = `$${total}`;
    costArr = [bed, bath, k, f, g, total];
};
const staticBedroomInput = document.getElementById("static-bedroom-input");
const staticBathroomInput = document.getElementById("static-bathroom-input");
staticBedroomInput.addEventListener("change", (e) => {
    bedroomCost = e.target.value * 30;

    document.getElementById("bedroom-summery-count").innerText = bedroomCost / 30;
    document.getElementById(
        "bedroom-summery-total"
    ).innerText = `$${bedroomCost}`;
    document.getElementById("package-fee").innerText = `$${
        bedroomCost + bathroomCost
    }`;

    //in 5th page
    document.getElementById("bedroom-count-page5").innerText = bedroomCost / 30;
    document.getElementById("bedroom-cost-page5").innerText = `$${bedroomCost}`;
    document.getElementById("package-fee-page5").innerText = `$${
        bedroomCost + bathroomCost
    }`;

    costSetter(
        bedroomCost,
        bathroomCost,
        extraKitchen.value * 50,
        extraFridge.value * 20,
        extraGarden.value * 60
    );
});

staticBathroomInput.addEventListener("change", (e) => {
    bathroomCost = e.target.value * 20;
    document.getElementById("bathroom-summery-count").innerText =
        bathroomCost / 20;
    document.getElementById(
        "bathroom-summery-total"
    ).innerText = `$${bathroomCost}`;

    document.getElementById("package-fee").innerText = `$${
        bedroomCost + bathroomCost
    }`;

    // in 5th page

    document.getElementById("bathroom-count-page5").innerText = bathroomCost / 20;
    document.getElementById("bathroom-cost-page5").innerText = `$${bathroomCost}`;

    document.getElementById("package-fee-page5").innerText = `$${
        bedroomCost + bathroomCost
    }`;
    costSetter(
        bedroomCost,
        bathroomCost,
        extraKitchen.value * 50,
        extraFridge.value * 20,
        extraGarden.value * 60
    );
});

//
//
//

const extraKitchen = document.getElementById("kitchen-extra-service");
const extraFridge = document.getElementById("fridge-extra-service");
const extraGarden = document.getElementById("garden-extra-service");

if (!document.getElementById("check4").checked) {
    extraKitchen.disabled = true;
}
if (!document.getElementById("check5").checked) {
    extraFridge.disabled = true;
}
if (!document.getElementById("check5").checked) {
    extraGarden.disabled = true;
}
document.getElementById("check4").addEventListener("click", () => {
    if (!document.getElementById("check4").checked) {
        extraKitchen.disabled = true;
        extraKitchen.value = 0;
        kitchenCost = 0;
        document.getElementById("kitchen-count-extra-summery2").innerText = `${
            kitchenCost / 50
        }`;
        document.getElementById(
            "kitchen-total-extra-summery2"
        ).innerText = `$${kitchenCost}`;
        document.getElementById(
            "kitchen-extra-total-price"
        ).innerText = `$${kitchenCost}`;

        // in 5th page
        document.getElementById("kitchen-count-extra-summery5").innerText = `${
            kitchenCost / 50
        }`;
        document.getElementById(
            "kitchen-total-extra-summery5"
        ).innerText = `$${kitchenCost}`;

        costSetter(
            bedroomCost,
            bathroomCost,
            extraKitchen.value * 50,
            extraFridge.value * 20,
            extraGarden.value * 60
        );
    } else {
        extraKitchen.disabled = false;
        extraKitchen.addEventListener("change", (e) => {
            kitchenCost = e.target.value * 50;
            document.getElementById(
                "kitchen-extra-total-price"
            ).innerText = `$${kitchenCost}`;
            document.getElementById("kitchen-count-extra-summery2").innerText = `${
                kitchenCost / 50
            }`;
            document.getElementById(
                "kitchen-total-extra-summery2"
            ).innerText = `$${kitchenCost}`;

            // in 5th page
            document.getElementById("kitchen-count-extra-summery5").innerText = `${
                kitchenCost / 50
            }`;
            document.getElementById(
                "kitchen-total-extra-summery5"
            ).innerText = `$${kitchenCost}`;
            costSetter(
                bedroomCost,
                bathroomCost,
                extraKitchen.value * 50,
                extraFridge.value * 20,
                extraGarden.value * 60
            );
        });
    }
});

// extra fridge works

document.getElementById("check5").addEventListener("click", () => {
    if (!document.getElementById("check5").checked) {
        extraFridge.disabled = true;
        extraFridge.value = 0;
        fridgeCost = 0;
        document.getElementById("fridge-count-extra-summery2").innerText = `${
            fridgeCost / 20
        }`;
        document.getElementById(
            "fridge-total-extra-summery2"
        ).innerText = `$${fridgeCost}`;
        document.getElementById(
            "fridge-extra-total-price"
        ).innerText = `$${fridgeCost}`;

        // in 5th page
        document.getElementById("fridge-count-extra-summery5").innerText = `${
            fridgeCost / 20
        }`;
        document.getElementById(
            "fridge-total-extra-summery5"
        ).innerText = `$${fridgeCost}`;
        costSetter(
            bedroomCost,
            bathroomCost,
            extraKitchen.value * 50,
            extraFridge.value * 20,
            extraGarden.value * 60
        );
    } else {
        extraFridge.disabled = false;
        extraFridge.addEventListener("change", (e) => {
            fridgeCost = e.target.value * 20;
            document.getElementById(
                "fridge-extra-total-price"
            ).innerText = `$${fridgeCost}`;
            document.getElementById("fridge-count-extra-summery2").innerText = `${
                fridgeCost / 20
            }`;
            document.getElementById(
                "fridge-total-extra-summery2"
            ).innerText = `$${fridgeCost}`;

            document.getElementById("fridge-count-extra-summery5").innerText = `${
                fridgeCost / 20
            }`;
            document.getElementById(
                "fridge-total-extra-summery5"
            ).innerText = `$${fridgeCost}`;
            costSetter(
                bedroomCost,
                bathroomCost,
                extraKitchen.value * 50,
                extraFridge.value * 20,
                extraGarden.value * 60
            );
        });
    }
});

// extra garden works

document.getElementById("check6").addEventListener("click", () => {
    if (!document.getElementById("check6").checked) {
        extraGarden.disabled = true;
        extraGarden.value = 0;
        gardenCost = 0;
        document.getElementById("garden-count-extra-summery2").innerText = `${
            gardenCost / 60
        }`;
        document.getElementById(
            "garden-total-extra-summery2"
        ).innerText = `$${gardenCost}`;
        document.getElementById(
            "garden-extra-total-price"
        ).innerText = `$${gardenCost}`;

        // in 5th page
        document.getElementById("garden-count-extra-summery5").innerText = `${
            gardenCost / 60
        }`;
        document.getElementById(
            "garden-total-extra-summery5"
        ).innerText = `$${gardenCost}`;

        costSetter(
            bedroomCost,
            bathroomCost,
            extraKitchen.value * 50,
            extraFridge.value * 20,
            extraGarden.value * 60
        );
    } else {
        extraGarden.disabled = false;
        extraGarden.addEventListener("change", (e) => {
            gardenCost = e.target.value * 60;
            document.getElementById(
                "garden-extra-total-price"
            ).innerText = `$${gardenCost}`;
            document.getElementById("garden-count-extra-summery2").innerText = `${
                gardenCost / 60
            }`;
            document.getElementById(
                "garden-total-extra-summery2"
            ).innerText = `$${gardenCost}`;

            // in 5th page
            document.getElementById("garden-count-extra-summery5").innerText = `${
                gardenCost / 60
            }`;
            document.getElementById(
                "garden-total-extra-summery5"
            ).innerText = `$${gardenCost}`;
            costSetter(
                bedroomCost,
                bathroomCost,
                extraKitchen.value * 50,
                extraFridge.value * 20,
                extraGarden.value * 60
            );
        });
    }
});

// cost related data will get from - costArr ;

//
//
//

// 3rd page work here...

const day = new Date();
const monthNames = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "June",
    "Jul",
    "Aug",
    "Sept",
    "Oct",
    "Nov",
    "Dec",
];
const arrayOfWeekdays = ["Sun", "Mon", "Tues", "Wed", "Thur", "Fri", "Sat"];

const fiveDaysList = document.getElementById("next-five-day-list");
const bookingDate = document.getElementById("booking-date");
const bookingDatetime = document.getElementById("booking-date-time");
let selectedDay = `${day.getDate()} ${
    monthNames[day.getMonth()]
}, ${day.getFullYear()} - ${arrayOfWeekdays[day.getDay()]}`;
let selectedTime = `10.00AM-11.00AM`;

fiveDaysList.innerHTML =
    fiveDaysList.innerHTML +
    `<li class="list active">
        <a href="javascript:void(0)">
            ${day.getDate()} ${
        monthNames[day.getMonth()]
    }, ${day.getFullYear()} - ${arrayOfWeekdays[day.getDay()]}
        </a>
     </li>`;
for (let i = 1; i < 5; i++) {
    fiveDaysList.innerHTML =
        fiveDaysList.innerHTML +
        `<li class="list">
        <a href="javascript:void(0)">
            ${day.getDate() + i} ${
            monthNames[day.getMonth()]
        }, ${day.getFullYear()} - ${arrayOfWeekdays[(day.getDay() + i) % 7]}
        </a>
     </li>`;
}

bookingDate.innerText = `Available on ${
    monthNames[day.getMonth()]
} ${day.getFullYear()}`;

fiveDaysList.addEventListener("click", (e) => {
    selectedDay = e.target.innerText;
    document.getElementById("selected-date5").innerText = e.target.innerText;
});
bookingDatetime.addEventListener("click", (e) => {
    selectedTime = e.target.innerText;
    document.getElementById("selected-time5").innerText = e.target.innerText;
});

// selected date and time will get from - selectedDay, selectedTime

// 4th page - collecting Booking Information
let nameFieldValue = "";
let emailValue = "";
let numberValue = "";
let postCodeValue = "";
let areaValue = "";
let addressValue = "";
let cityValue = "New York";
let orderNoteValue = "";
let bookingInfoArr = [
    nameFieldValue,
    emailValue,
    numberValue,
    postCodeValue,
    areaValue,
    addressValue,
    cityValue,
    orderNoteValue,
];

const nameField = document.getElementById("name");
const email = document.getElementById("email");
const number = document.getElementById("number");
const postCode = document.getElementById("post-code");
const area = document.getElementById("area");
const address = document.getElementById("address");
const city = document.getElementById("city");
const orderNote = document.getElementById("order-note");

nameField.addEventListener("blur", () => {
    if (nameField.value != nameFieldValue && nameField.value) {
        nameFieldValue = nameField.value;
        document.getElementById("show-name-field").innerText = nameField.value;
        bookingInfoArr[0] = nameField.value;
    }
});
email.addEventListener("blur", () => {
    if (email.value != emailValue && email.value) {
        emailValue = email.value;
        document.getElementById("show-email-field").innerText = email.value;
        bookingInfoArr[1] = email.value;
    }
});
number.addEventListener("blur", () => {
    if (number.value != numberValue && number.value) {
        numberValue = number.value;
        document.getElementById("show-number-field").innerText = number.value;
        bookingInfoArr[2] = number.value;
    }
});
postCode.addEventListener("blur", () => {
    if (postCode.value != postCodeValue && postCode.value) {
        postCodeValue = postCode.value;
        document.getElementById("show-post-code-field").innerText = postCode.value;
        bookingInfoArr[3] = postCode.value;
    }
});
area.addEventListener("blur", () => {
    if (area.value != areaValue && area.value) {
        areaValue = area.value;
        document.getElementById("show-area-field").innerText = area.value;
        bookingInfoArr[4] = area.value;
    }
});
address.addEventListener("blur", () => {
    if (address.value != addressValue && address.value) {
        addressValue = address.value;
        document.getElementById("show-address-field").innerText = address.value;
        bookingInfoArr[5] = address.value;
    }
});
const cityValueFunc = (option) => {
    cityValue = option.value;
    document.getElementById("show-city-field").innerText = option.value;
    bookingInfoArr[6] = option.value;
};
orderNote.addEventListener("blur", () => {
    if (orderNote.value != orderNoteValue && orderNote.value) {
        orderNoteValue = orderNote.value;
        document.getElementById("show-order-note-field").innerText =
            orderNote.value;
        bookingInfoArr[7] = orderNote.value;
    }
});

// 4th page all data available in = bookingInfoArr;



const paypalDiv = document.getElementById('paypal-button-container');
paypalDiv.style.display = 'none';
const credentialDiv = document.getElementById('credentials');
credentialDiv.style.display = 'none';

const paypalCheckBox = document.getElementById('check2');
paypalCheckBox.addEventListener('click', (e) => {
    if (e.target.checked == true) {
        paypalDiv.style.display = 'block';
        credentialDiv.style.display = 'block';
    } else {
        paypalDiv.style.display = 'none';
        credentialDiv.style.display = 'none';
    }
});

<!-- PayPal -->
paypal.Buttons({
    style: {
        layout:  'vertical',
        color:   'gold',
        shape:   'rect',
        label:   'pay'
    },

    // Sets up the transaction when a payment button is clicked
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: costArr[5] // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                }
            }]
        });
    },

    // Finalize the transaction after payer approval
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (orderData) {
            // Successful capture! For dev/demo purposes:
            // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            var transaction = orderData.purchase_units[0].payments.captures[0];
            // alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: '/submit',
                data: {
                    name: bookingInfoArr[0],
                    email: bookingInfoArr[1],
                    phone: bookingInfoArr[2],
                    city: locationArr[0],
                    state: locationArr[1],
                    postal_code: bookingInfoArr[3],
                    address: bookingInfoArr[5],
                    note: bookingInfoArr[7],
                    transaction_id: transaction.id,
                    total_amount: costArr[5]
                },
                success: function (data, textStatus, xhr) {
                    document.getElementById('submit').click();
                },
                error: function (response) {
                    console.log('Error' + response);
                }
            });

        });
    }
}).render('#paypal-button-container');
