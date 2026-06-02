<?php
// Employee data array
$employees = [
    [
        "name" => "Rahul Sharma",
        "role" => "Developer",
        "department" => "Engineering Team",
        "experience" => "4 Years",
        "performance" => "92%",
        "status" => "Senior Employee",
        "access_level" => "Full Admin Access: Allowed",
        "badge" => "Active",
        "photo" => "images/—Pngtree—portrait of a person_14289687.PNG", 
        "base_salary" => "₹55,000",
        "bonus" => "+ ₹6,000",
        "tax" => "- ₹3,000",
        "net_salary" => "₹58,000"
    ],
    [
        "name" => "Priya Mehta",
        "role" => "HR Manager",
        "department" => "HR Department",
        "experience" => "3 Years",
        "performance" => "88%",
        "status" => "HR Executive",
        "access_level" => "Limited HR Access Only",
        "badge" => "Active",
        "photo" => "images/b84bee1051331dfbfee852fe5c7354cc.png", 
        "base_salary" => "₹48,000",
        "bonus" => "+ ₹4,000",
        "tax" => "- ₹2,500",
        "net_salary" => "₹49,500"
    ],
    [
        "name" => "Arjun Verma",
        "role" => "Designer",
        "department" => "UI/UX Team",
        "experience" => "2 Years",
        "performance" => "85%",
        "status" => "Creative Associate",
        "access_level" => "Design Dashboard Access",
        "badge" => "Active",
        "photo" => "images/—Pngtree—portrait of a person_14289687.PNG",
        "base_salary" => "₹40,000",
        "bonus" => "+ ₹3,500",
        "tax" => "- ₹2,000",
        "net_salary" => "₹41,500"
    ],
    [
        "name" => "Neha Kapoor",
        "role" => "Team Lead",
        "department" => "Engineering Team",
        "experience" => "6 Years",
        "performance" => "95%",
        "status" => "Managerial Staff",
        "access_level" => "Full Executive Access",
        "badge" => "Active",
        "photo" => "images/b84bee1051331dfbfee852fe5c7354cc.png", 
        "base_salary" => "₹75,000",
        "bonus" => "+ ₹8,000",
        "tax" => "- ₹5,000",
        "net_salary" => "₹78,000"
    ],
    [
        "name" => "Karan Singh",
        "role" => "Intern",
        "department" => "Engineering Team",
        "experience" => "6 Months",
        "performance" => "65%",
        "status" => "Trainee",
        "access_level" => "Training View Mode Only",
        "badge" => "Training Access",
        "photo" => "images/—Pngtree—portrait of a person_14289687.PNG", 
        "base_salary" => "₹15,000",
        "bonus" => "+ ₹1,000",
        "tax" => "- ₹0",
        "net_salary" => "₹16,000"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Workspace Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        var employeeData = <?php echo json_encode($employees); ?>;
    </script>
</head>
<body>

    <div class="navbar">
        <span class="nav-title">Employee Workspace Portal</span>
        <span class="nav-session">Session Active</span>
    </div>

    <div class="container">
        <div class="left-panel">
            <div class="card">
                <h3>Search Employee</h3>
                <hr>
                <div class="form-group">
                    <label>Employee Name</label>
                    <input type="text" id="usernameInput" placeholder="Enter name (e.g., Rahul, Neha)">
                </div>
                <button type="button" id="searchBtn" onclick="searchUser()" class="btn-primary">View Employee Details</button>
                <button type="button" id="clearBtn" onclick="clearSearch()" class="btn-secondary">Clear Panel</button>
                
                <div class="directory-section">
                    <h4>Available Staff</h4>
                    <ul class="employee-list">
                        <?php foreach($employees as $emp): ?>
                            <li><?php echo $emp['name']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>

        <div class="right-panel" id="displayPanel">
            <div class="card text-center">
                <img src="images/—Pngtree—contact our male customer service_5412873.png" alt="Search Dashboard" class="default-img">
                <h2>Search an employee</h2>
                <p class="default-text">Enter an employee username to view workspace details.</p>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>