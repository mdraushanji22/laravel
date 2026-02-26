<div class="center-wrapper">
    <div class="form-card">

        <h1 class="header">Add New User</h1>
        <!-- @if ($errors->any())
        <div style="background:#ffdddd; padding:10px; border-left:4px solid red; margin-bottom:15px;">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

        <form action="adduser" method="post">
            @csrf

            <div class="user-form">
                <input type="text" placeholder="Enter your name" name="username" required>
                <span>@error('username'){{$message}}@enderror</span>
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

            <!-- CITY -->
            <div class="user-form">
                <h4>City</h4>
                <select name="city" class="dropdown">
                    <option value="select">Select City</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Noida">Noida</option>
                    <option value="Gurgaon">Gurgaon</option>
                </select>
            </div>

            <!-- AGE -->
            <div class="user-form">
                <h4>Age</h4>
                <input type="range" name="age" min="18" max="100" class="range">
            </div>

            <div class="user-form">
                <button>Add User</button>
            </div>

        </form>

    </div>
</div>

<style>
    /* Center Wrapper */
    .center-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #f3f3f3;
    }

    /* Card Box */
    .form-card {
        background: #fff;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
        width: 500px;
        text-align: center;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        box-sizing: border-box;
    }

    .dropdown {
        cursor: pointer;
    }

    /* Range Slider */
    .range {
        width: 100%;
        margin-top: 5px;
        cursor: pointer;
    }

    /* Labels */
    .check-label {
        display: inline-block;
        margin-right: 20px;
        font-size: 16px;
        cursor: pointer;
    }

    .check-label input {
        margin-right: 6px;
        transform: scale(1.2);
    }

    button {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        font-size: 18px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    .user-form {
        margin: 15px 0;
        text-align: left;
    }

    .user-form h4 {
        margin-bottom: 6px;
        color: #333;
    }

    h2 {
        margin-bottom: 20px;
    }

    .header {
        color: green;
        font-weight: bold;
    }
</style>