<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Money Manage</title>
    <link rel="icon" href="Dollar.jpeg">
    <style>
 body {
    background-color: #55a685;
    font-family: 'Roboto', sans-serif;
    color: #ffffff;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
 }

 .greetings {
  align-content: center;
  font-size: 5rem;
  font-weight: 900;
}
.greetings > span {
  animation: glow 2.5s ease-in-out infinite;
}
@keyframes glow {
  0%,
  100% {
    color: #111;
    text-shadow: 0 0 12px #AF40FF, 0 0 50px #AF40FF, 0 0 100px #AF40FF;
  }
  10%,
  90% {
    color: #fff;
    text-shadow: none;
  }
}
.greetings > span:nth-child(2) {
  animation-delay: 0.2s;
}
.greetings > span:nth-child(3) {
  animation-delay: 0.4s;
}
.greetings > span:nth-child(4) {
  animation-delay: 0.6s;
}
.greetings > span:nth-child(5) {
  animation-delay: 0.8s;
}
.greetings > span:nth-child(6) {
  animation-delay: 1s;
}
.greetings > span:nth-child(7) {
  animation-delay: 1.2s;
}

        form {
            width: 300px;
            padding: 20px;
            background-color: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            border-radius: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .Mulai {
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            color: #fff;
            border: none;
            padding: 15px 25px;
            border-radius: 5px;
            cursor: pointer;
        }

        img {
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
	<center><div class="greetings">
      <span>W</span>
      <span>E</span>
      <span>L</span>
      <span>C</span>
      <span>O</span>
      <span>M</span>
      <span>E</span>
    </div>
    <img src="logo.png" alt="MoneyManageLogo" style="max-width: 300px; height: auto;">
    <form action="process.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="Mulai" role="button">Mulai</button>
    </form>
</center>
</body>
</html>
