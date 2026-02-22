<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf

        <div class="user-form">
            <input type="text" placeholder="Enter your name" name="username" required>
        </div>

        <div class="user-form">
            <input type="email" placeholder="Enter your email" name="email" required>
        </div>

        <!-- USER SKILLS -->
        <div class="user-form">
            <h4>User Skills</h4>

            <label class="check-label">
                <input type="checkbox" name="skill[]" value="PHP"> PHP
            </label>

            <label class="check-label">
                <input type="checkbox" name="skill[]" value="NODE"> NODE
            </label>

            <label class="check-label">
                <input type="checkbox" name="skill[]" value="JAVA"> JAVA
            </label>
        </div>

        <!-- GENDER -->
        <div class="user-form">
            <h4>Gender</h4>

            <label class="check-label">
                <input type="radio" name="gender" value="MALE"> Male
            </label>

            <label class="check-label">
                <input type="radio" name="gender" value="FEMALE"> Female
            </label>
        </div>

        <!-- CITY DROPDOWN -->
        <div class="user-form">
            <h4>City</h4>
            <select name="city" class="dropdown">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgaon">Gurgaon</option>
            </select>
        </div>

        <!-- AGE RANGE -->
        <div class="user-form">
            <h4>Age</h4>
            <input type="range" name="age" min="18" max="100" class="range">
        </div>

        <div class="user-form">
            <button>Add User</button>
        </div>

    </form>
</div>

<style>
    input[type="text"],
    input[type="email"],
    select {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        box-sizing: border-box;
    }

    /* Dropdown Styling */
    .dropdown {
        cursor: pointer;
    }

    /* Checkbox + Radio */
    .check-label {
        display: inline-block;
        margin-right: 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .check-label input {
        margin-right: 6px;
        transform: scale(1.3);
        cursor: pointer;
    }

    /* Range Slider */
    .range {
        width: 40%;
        margin-top: 8px;
        cursor: pointer;
    }

    button {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    .user-form {
        margin: 12px 0;
    }

    h4 {
        margin-bottom: 8px;
        color: #333;
    }
</style>