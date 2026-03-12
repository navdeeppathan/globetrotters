<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body style="font-family:Arial;background:#f4f6f9;padding:30px">

<div style="max-width:600px;margin:auto;background:#ffffff;border-radius:8px;overflow:hidden">

<div style="background:#2563eb;color:white;padding:20px;text-align:center">
<h2>Thank You {{ $data['name'] }}</h2>
</div>

<div style="padding:25px">

<p>
We have received your transport request successfully.
Our logistics team will review your request and contact you shortly.
</p>

<h3 style="margin-top:20px">Your Request Details</h3>

<table width="100%" cellpadding="8">

<tr>
<td><strong>Source</strong></td>
<td>{{ $data['source'] }}</td>
</tr>

<tr>
<td><strong>Destination</strong></td>
<td>{{ $data['destination'] }}</td>
</tr>

<tr>
<td valign="top"><strong>Message:</strong></td>
<td>{{ $data['message'] }}</td>
</tr>

</table>

<p style="margin-top:20px">
If you have urgent queries, please contact our support team.
</p>

</div>

<div style="background:#f1f5f9;padding:15px;text-align:center;font-size:12px">

© {{ date('Y') }} Your Logistics Company  
All rights reserved.

</div>

</div>

</body>
</html>