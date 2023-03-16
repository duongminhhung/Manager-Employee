<!DOCTYPE html>
<html>
<head>
	<title>ChatGPT Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	background-color: #f2f2f2;
}

.chat-container {
	max-width: 600px;
	margin: 50px auto;
	border: 1px solid #ccc;
	border-radius: 5px;
	overflow: hidden;
}

.chat-header {
	background-color: #4267b2;
	color: #fff;
	padding: 10px;
}

.chat-header h3 {
	margin: 0;
}

.chat-box {
	height: 300px;
	overflow-y: scroll;
	padding: 10px;
}

.chat-message {
	margin-bottom: 10px;
}

.chat-bot {
	background-color: #e6e6e6;
	text-align: left;
	padding: 10px;
	border-radius: 5px 5px 5px 0px;
}

.chat-user {
	background-color: #4267b2;
	color: #fff;
	text-align: right;
	padding: 10px;
	border-radius: 5px 5px 0px 5px;
}

.chat-user p, .chat-bot p {
	margin: 0;
}

.chat-input {
	padding: 10px;
	background-color: #fff;
}

.chat-input form {
	display: flex;
}

.chat-input input[type="text"] {
	flex-grow: 1;
	padding: 10px;
	border: none;
	border-radius: 5px 0px 0px 5px;
}

.chat-input button[type="submit"] {
	background-color: #4267b2;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 0px 5px 5px 0px;
	cursor: pointer;
}

.chat-input input[type="text"]:focus {
	outline: none;
}

.chat-input button[type="submit"]:hover {
	background-color: #1a294a;
}

    </style>
</head>
<body>
	<div class="chat-container">
		<div class="chat-header">
			<h3>Chat with ChatGPT</h3>
		</div>
		<div class="chat-box">
			<div class="chat-message chat-bot">
				<p>Hello! How can I assist you today?</p>
			</div>
			<div class="chat-message chat-user">
				<p>Hi! I need help with my account.</p>
			</div>
		</div>
		<div class="chat-input">
			<form action="{{ route('submit') }}" method="post">
                @csrf
				<input type="text" placeholder="Type your message...">
				<button type="submit">Send</button>
			</form>
		</div>
	</div>
</body>
</html>