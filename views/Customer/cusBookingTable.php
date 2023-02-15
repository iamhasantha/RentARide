<?php ?>

<div class="booking-table-cont">
    <table id="booking-table">
        <tr>
            <th>Booking ID</th>
            <th>Owner Name</th>
            <th>Vehicle</th>
            <th>Requested Driver</th>
            <th>Duration</th>
            <th>Total Price (Rs)</th>
            <th>Status</th>
            <th>Invoice</th>
        </tr>
        <tr>
            <td>B10001</td>
            <td>RR</td>
            <td>Suzuki Alto</td>
            <td>Suresh</td>
            <td>7 Days</td>
            <td>Rs. 24,500.00</td>
            <td class="status pending" id="status-B10001"></td>
            <td><a href=""#">Download</a></td>
        </tr>
        <tr>
            <td>B10002</td>
            <td>Supun Jayasinghe</td>
            <td>Scooty Pep</td>
            <td>-</td>
            <td>3 Days</td>
            <td>Rs. 3,600.00</td>
            <td class="status completed" id="status-B10002"></td>
            <td><a href=""#">Download</a></td>
        </tr>
        <tr>
            <td>B10003</td>
            <td>RR</td>
            <td>Honda Civic</td>
            <td>Nimal</td>
            <td>5 Days</td>
            <td>Rs. 22,250.00</td>
            <td class="status completed" id="status-B10003"></td>
            <td><a href=""#">Download</a></td>
        </tr>
        <tr>
            <td>B10004</td>
            <td>Jane Doe</td>
            <td>Toyota Camry</td>
            <td>Kamal</td>
            <td>7 Days</td>
            <td>Rs. 42,000.00</td>
            <td class="status completed" id="status-B10004"></td>
            <td><a href=""#">Download</a></td>
        </tr>
        <tr>
            <td>B10005</td>
            <td>Jane Doe</td>
            <td>TVS Wego</td>
            <td>-</td>
            <td>1 Days</td>
            <td>1400.00</td>
            <td class="status completed" id="status-B10005"></td>
            <td><a href=""#">Download</a></td>
        </tr>

    </table>

</div>

<script>
    document.getElementById("status-B10001").innerHTML = "Pending";
    document.getElementById("status-B10002").innerHTML = "Completed";
    document.getElementById("status-B10003").innerHTML = "Completed";
    document.getElementById("status-B10004").innerHTML = "Completed";
    document.getElementById("status-B10005").innerHTML = "Completed";



    document.getElementById("status-B10001").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

    document.getElementById("status-B10002").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

    document.getElementById("status-B10002").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

    document.getElementById("status-B10003").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

    document.getElementById("status-B10004").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

    document.getElementById("status-B10005").onclick = function() {
        if (this.innerHTML === "Pending") {
            this.innerHTML = "Ongoing";
            this.className = "ongoing";
        } else if (this.innerHTML === "Ongoing") {
            this.innerHTML = "Completed";
            this.className = "completed";
        } else {
            this.innerHTML = "Pending";
            this.className = "pending";
        }
    };

</script>
