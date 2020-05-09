<style>
    tr, td, table{
        text-align: center;
        font-size: 16px;
    }
</style>
<table border="2">
    <thead>
        <tr>
            <th colspan="6">
                Parents Detail
            </th>
        </tr>
        <tr>
            <th>Father Name</th>
            <th>Email Address</th>
            <th>Phone</th>
            <th>Academic Year</th>
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$data['fathername']}}</td>
            <td>{{$data['gmail']}}</td>
            <td>{{$data['phone']}}</td>
            <td>{{$data['year']}}</td>
            <td>{{$data['class']}}</td>
        </tr>
    </tbody>
</table>
<strong style="text-transform:capitalize; color:red">If you're having trouble seeing our email properly, please switch to desktop. <a href="http://192.168.0.109:8000/login">www.BES.com</a></strong>