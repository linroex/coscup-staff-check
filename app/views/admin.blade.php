<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COSCUP 場務組工作人員行前確認｜檢視</title>
    <link rel="stylesheet" href="{{{url('css/bootstrap.min.css')}}}">
    <script src="{{{url('js/jquery-2.1.0.min.js')}}}"></script>
    <script src="{{{url('js/bootstrap.min.js')}}}"></script>
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-6">
            <div class="page-header">
                <h3>已簽到</h3>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>暱稱</td>
                        <td>信箱</td>
                        <td>職務</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['done'] as $row)
                        <tr>
                            <td>{{{$row->name}}}</td>
                            <td>{{{$row->email}}}</td>
                            <td>{{{$row->job}}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
        <div class="col-md-6">
            <div class="page-header">
                <h3>未簽到</h3>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>暱稱</td>
                        <td>信箱</td>
                        <td>職務</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['not_yet'] as $row)
                        <tr>
                            <td>{{{$row->name}}}</td>
                            <td>{{{$row->email}}}</td>
                            <td>{{{$row->job}}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>