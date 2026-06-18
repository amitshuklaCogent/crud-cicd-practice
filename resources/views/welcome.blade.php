<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Page</title>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, sans-serif;
    }

    body{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
        background:linear-gradient(135deg,#4f46e5,#7c3aed);
    }

    .login-container{
        width:350px;
        background:#fff;
        padding:30px;
        border-radius:15px;
        box-shadow:0 10px 30px rgba(0,0,0,0.2);
    }

    .login-container h2{
        text-align:center;
        margin-bottom:25px;
        color:#333;
    }

    .input-group{
        margin-bottom:18px;
    }

    .input-group label{
        display:block;
        margin-bottom:6px;
        color:#555;
        font-size:14px;
    }

    .input-group input{
        width:100%;
        padding:12px;
        border:1px solid #ccc;
        border-radius:8px;
        outline:none;
        transition:0.3s;
    }

    .input-group input:focus{
        border-color:#4f46e5;
    }

    .login-btn{
        width:100%;
        padding:12px;
        border:none;
        border-radius:8px;
        background:#4f46e5;
        color:white;
        font-size:16px;
        cursor:pointer;
        transition:0.3s;
    }

    .login-btn:hover{
        background:#4338ca;
    }

    /* Popup */
    .popup-overlay{
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.5);
        display:none;
        justify-content:center;
        align-items:center;
    }

    .popup{
        background:white;
        padding:25px;
        border-radius:15px;
        text-align:center;
        width:320px;
        animation:popupShow 0.3s ease;
    }

    .popup h3{
        color:#16a34a;
        margin-bottom:10px;
    }

    .popup p{
        color:#555;
        margin-bottom:15px;
    }

    .close-btn{
        padding:10px 20px;
        border:none;
        border-radius:8px;
        background:#16a34a;
        color:white;
        cursor:pointer;
    }

    @keyframes popupShow{
        from{
            transform:scale(0.8);
            opacity:0;
        }
        to{
            transform:scale(1);
            opacity:1;
        }
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Welcome Back Mam !!</h2>

    <form id="loginForm">
        <div class="input-group">
            <label>Email</label>
            <input type="text" id="email" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" id="password" required>
        </div>

        <button type="submit" class="login-btn">
            Login
        </button>
    </form>
</div>

<!-- Success Popup -->
<div class="popup-overlay" id="popupOverlay">
    <div class="popup">
        <h3>✓ Login Successful</h3>
        <p>Your details have been submitted successfully.</p>
        <button class="close-btn" onclick="closePopup()">
            OKAY
        </button>
    </div>
</div>

<script>
    const form = document.getElementById("loginForm");
    const popup = document.getElementById("popupOverlay");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if(email && password){
            popup.style.display = "flex";
            form.reset();
        }
    });

    function closePopup(){
        popup.style.display = "none";
    }
</script>

</body>
</html>