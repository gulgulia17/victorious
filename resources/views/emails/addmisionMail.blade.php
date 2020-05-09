<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <table>
        <tr>
            <th>Student Name</th>
            <td>
                {{$admissionData["sname"]}}
            </td>
        </tr>
        <tr>
            <th>Student Father Name</th>
            <td>
                {{$admissionData["fname"]}}
            </td>
        </tr>
        <tr>
            <th>Student Mother Name</th>
            <td>
                {{$admissionData["mname"]}}
            </td>
        </tr>
        <tr>
            <th>Student DOB</th>
            <td>
                {{$admissionData["date"]}}
            </td>
        </tr>
        <tr>
            <th>Student Gender</th>
            <td>
                {{$admissionData["gender"]}}
            </td>
        </tr>
        <tr>
            <th>Student Address</th>
            <td>
                {{$admissionData["add1"]}}<br>
                {{$admissionData["add2"]}}<br>
                {{$admissionData["add3"]}}
            </td>
        </tr>
        <tr>
            <th>Student Number</th>
            <td>
                {{$admissionData["mobno"]}}
            </td>
        </tr>
        <tr>
            <th>Student Email</th>
            <td>
                {{$admissionData["email"]}}
            </td>
        </tr>
        <tr>
            <th>Student nationality</th>
            <td>
                {{$admissionData["nationality"]}}
            </td>
        </tr>
        <tr>
            <th>Student religion</th>
            <td>
                {{$admissionData["religion"]}}
            </td>
        </tr>
        <tr>
            <th>Student category</th>
            <td>
                {{$admissionData["category"]}}
            </td>
        </tr>
        <tr>
            <th>Student occupation</th>
            <td>
                {{$admissionData["occupation"]}}
            </td>
        </tr>
        <tr>
            <th>Student newclass</th>
            <td>
                {{$admissionData["newclass"]}}
            </td>
        </tr>
        <tr>
            <th>Student lastclass</th>
            <td>
                {{$admissionData["lastclass"]}}
            </td>
        </tr>
        <tr>
            <th>Student lastschool</th>
            <td>
                {{$admissionData["lastschool"]}}
            </td>
        </tr>
    </table>
      
</body>
</html>