<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div class="user-form">
            <input type="text" placeholder="Enter your name" name="username" require>
        </div>
        <div class="user-form">
            <input type="email" placeholder="Enter your email" name="email" require>
        </div>
        <div class="user-form">
            <input type="text" placeholder="Enter your city" name="city" require>
        </div>
        <div class="user-form">
            <button>Add User</button>
        </div>
    </form>
</div>
<style>
    input {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        /* Ensures padding/border are included in width */
        background-color: #f8f8f8;
        font-size: 16px;
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
        box-sizing: border-box;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    .user-form {
        margin: 10px;
    }
</style>