<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #2a3891;
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field label {
            font-weight: bold;
            color: #2a3891;
        }
        .field p {
            margin: 5px 0;
            padding: 10px;
            background-color: white;
            border-radius: 3px;
            border-left: 4px solid #2a3891;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>New Contact Message from PT Intimas Surya Website</h2>
    </div>
    
    <div class="content">
        <div class="field">
            <label>From:</label>
            <p>{{ $name }} &lt;{{ $email }}&gt;</p>
        </div>
        
        <div class="field">
            <label>Subject:</label>
            <p>{{ $subject }}</p>
        </div>
        
        <div class="field">
            <label>Message:</label>
            <p>{{ $message }}</p>
        </div>
        
        <hr>
        <p><small>This message was sent from the contact form on PT Intimas Surya website.</small></p>
    </div>
</body>
</html>