<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body style="font-family:Arial;background:#f4f6f9;padding:30px">

<div style="max-width:600px;margin:auto;background:#ffffff;border-radius:8px;overflow:hidden">

<div style="background:#2563eb;color:white;padding:20px;text-align:center">
<h2>New Transport Request</h2>
</div>

<div style="padding:25px">

<table width="100%" cellpadding="8">

<tr>
<td><strong>Name:</strong></td>
<td>{{ $data['name'] }}</td>
</tr>

<tr>
<td><strong>Email:</strong></td>
<td>{{ $data['email'] }}</td>
</tr>

<tr>
<td><strong>Phone:</strong></td>
<td>{{ $data['phone'] }}</td>
</tr>



<tr>
<td><strong>Source:</strong></td>
<td>{{ $data['source'] }}</td>
</tr>

<tr>
<td><strong>Destination:</strong></td>
<td>{{ $data['destination'] }}</td>
</tr>

<tr>
<td valign="top"><strong>Message:</strong></td>
<td>{{ $data['message'] }}</td>
</tr>

</table>

</div>

<div style="background:#f1f5f9;padding:15px;text-align:center;font-size:12px">
New request received from website
</div>

</div>

</body>
</html>