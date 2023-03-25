const form = document.querySelector("form");
const nameOutput = document.querySelector("#name-output");
const hourlyRateOutput = document.querySelector("#hourly-rate-output");
const hoursOutput = document.querySelector("#hours-output");
const taxRateOutput = document.querySelector("#tax-rate-output");
const grossPayOutput = document.querySelector("#gross-pay-output")
const taxesOutput = document.querySelector("#taxes-output");
const netPayOutput = document.querySelector("#net-pay-output");

form.addEventListener("submit", function(event) {
	event.preventDefault();

	const name = form.elements["name"].value;
	const hourlyRate = form.elements["hourly-rate"].value;
	const hours = form.elements["hours"].value;
	const taxRate = form.elements["tax-rate"].value;

	const grossPay = hourlyRate * hours;
	const taxes = grossPay * (taxRate / 100);
	const netPay = grossPay - taxes;

	nameOutput.textContent = "Name: " + name;
	hourlyRateOutput.textContent = "Hourly Rate: $" + hourlyRate;
	hoursOutput.textContent = "Total Hours Worked: " + hours;
	taxRateOutput.textContent = "Tax Rate: " + taxRate + "%";
	grossPayOutput.textContent = "Gross Pay: $" + grossPay.toFixed(2);
	taxesOutput.textContent = "Taxes: $" + taxes.toFixed(2);
	netPayOutput.textContent = "Net Pay: $" + netPay.toFixed(2);
});
