// js for employee search ke liye
var displayPanel = document.getElementById('displayPanel');
var usernameInput = document.getElementById('usernameInput');

// F1: Agar user array database  me nahi he
function showUserNotFound() {
    displayPanel.innerHTML = `
        <div class="alert-danger">
            <h2>User doesn't exist!</h2>
            <p style="margin-top: 5px; font-weight: normal; color: #5c141b;">Please check the username and try again.</p>
        </div>
    `;
}

// F2: User match hone per data search or print karega 
function showEmployeePage(emp) {
    var badgeClass = (emp.badge === 'Active') ? 'badge-active' : 'badge-warning';

    // innerHTML ke sath dynamic avatar profile layout data setup kar rahe hain
    displayPanel.innerHTML = `
        <div class="card">
            <div class="card-header-flex">
                <img src="${emp.photo}" alt="${emp.name}" class="profile-avatar">
                <div>
                    <h2>${emp.name}</h2>
                    <p style="color: #6c757d; font-size: 14px; margin-top: 2px;">${emp.role} | ${emp.department}</p>
                </div>
                <span class="badge ${badgeClass}">${emp.badge}</span>
            </div>
            
            <div class="alert-info"><strong>Dashboard Permission:</strong> ${emp.access_level}</div>
            
            <h4>Payroll Details</h4>
            <table class="payroll-table">
                <tr><th>Base Salary</th><td>${emp.base_salary}</td></tr>
                <tr><th>Bonus</th><td class="text-success">${emp.bonus}</td></tr>
                <tr><th>TAX</th><td class="text-danger">${emp.tax}</td></tr>
                <tr class="row-total"><th>Net Salary</th><td>${emp.net_salary}</td></tr>
            </table>
            
            <div class="footer-metrics">
                <div class="metric-box"><span class="label">Experience</span><strong>${emp.experience}</strong></div>
                <div class="metric-box"><span class="label">Performance</span><strong class="text-success">${emp.performance}</strong></div>
                <div class="metric-box"><span class="label">Status</span><strong class="text-primary">${emp.status}</strong></div>
            </div>
        </div>
    `;
}

// F3: Search function jo user input lega aur employee data se match karega
function searchUser() {
    var query = usernameInput.value.trim().toLowerCase();

    if (query === "") {
        alert("Search field cannot be empty!");
        return;
    }

    if (query === "rahul" || query === "rahul sharma") {
        showEmployeePage(employeeData[0]);
    } 
    else if (query === "priya" || query === "priya mehta") {
        showEmployeePage(employeeData[1]);
    } 
    else if (query === "arjun" || query === "arjun verma") {
        showEmployeePage(employeeData[2]);
    } 
    else if (query === "neha" || query === "neha kapoor") {
        showEmployeePage(employeeData[3]);
    } 
    else if (query === "karan" || query === "karan singh") {
        showEmployeePage(employeeData[4]);
    } 
    else {
        showUserNotFound();
    }
}

// Panel Clear karne ke liye function
function clearSearch() {
    usernameInput.value = "";
    
    displayPanel.innerHTML = `
        <div class="card text-center">
            <img src="default.png" alt="Search Dashboard" class="default-img">
            <h2>Search an employee</h2>
            <p style="color: #6c757d; margin-top: 5px;">Enter an employee username to view workspace details.</p>
        </div>
    `;
}