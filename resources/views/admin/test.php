<style>
    .form-container {
        width: 50%;
        margin: auto;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input,
    textarea {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    input[type="file"] {
        margin-bottom: 30px;
    }

    button[type="submit"] {
        background-color: #d4850e;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #d4850e;
    }
</style>
<div class="form-container">
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email <Address></Address>:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <label for="file">Attachment:</label>
        <input type="file" id="file" name="file">

        <div style="display: flex" class="asc">
            <input style="width: 20px; height: 20px; display: inline-block;" id="checkbox" type="checkbox">
            <span style="font-size: 25px;">Send me a copy</span>
        </div>
        <button style="width: 103px; height: 57px;" type="submit">Submit</button>
    </form>
</div>