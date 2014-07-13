<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COSCUP 場務組工作人員行前確認</title>
    <link rel="stylesheet" href="{{{url('css/bootstrap.min.css')}}}">
    <script src="{{{url('js/jquery-2.1.0.min.js')}}}"></script>
    <script src="{{{url('js/bootstrap.min.js')}}}"></script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){

                $.post('{{url("/check")}}',{email:$('#email').val()},function(res){
                    $('#email').val('');
                    alert(res);

                })
            })
            $('form').submit(function(e){
                e.preventDefault();
                $('#submit').click();
            })
        });
    </script>
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
        <div class="page-header text-center">
            <h1>COSCUP 場務組 志工行前確認</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="alert alert-success">
                    這是一個行前確認的小程式，請志工填寫信箱確認COSCUP 2014當天會出席，我們會將有確認出席的志工排班在前面，未確認的依舊具有志工資格，但會排班在較後面以便緊急情況緩衝之用。
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                        <p class="panel-title">行前資訊</p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>時間：7/19、7/20早上七點半</li>
                            <li>地點：中央研究院人文館與活動中心</li>
                            <li>交通資訊：捷運南港站二號出口下車轉公車212、270、藍25</li>
                            <li>場地佈置：7/18早上9點～下午5點 <a target="_blank" href="http://goo.gl/chhIBt" class="btn btn-success">場佈出席調查</a></li>
                            <li>行前信：<a href="https://docs.google.com/document/d/1GMYNGgTkm19wUq5Rqat9s0vQ4qhD2PHMaj4nmTl8Vfs/pub" target="_blank" class="btn btn-success">行前通知</a></li>
                        </ul>  
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6 text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.765105388759!2d121.61428289510577!3d25.042044394909894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab4501e8c151%3A0x2f2b63fe4251d55c!2z5Lit5aSu56CU56m26Zmi!5e0!3m2!1szh-TW!2stw!4v1405238535997" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
        <hr>
        <div class="row">
            <form class="col-md-10 col-md-offset-1">
                <div class="input-group">
                    <input id="email" type="text" class="form-control input-lg" placeholder="Email">
                    <div class="input-group-btn">
                        <a id="submit" class="btn btn-primary btn-lg">確認</a>
                    </div>
                </div>
            </form>
        </div>  
    </div>
</body>
</html>